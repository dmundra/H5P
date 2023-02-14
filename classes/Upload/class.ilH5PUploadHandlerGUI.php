<?php

declare(strict_types=1);

use ILIAS\FileUpload\Handler\AbstractCtrlAwareUploadHandler;
use ILIAS\FileUpload\Handler\BasicFileInfoResult;
use ILIAS\FileUpload\Handler\BasicHandlerResult;
use ILIAS\FileUpload\Handler\FileInfoResult;
use ILIAS\FileUpload\Handler\HandlerResult;
use ILIAS\FileUpload\DTO\UploadResult;
use ILIAS\Filesystem\Stream\Streams;
use ILIAS\FileUpload\Location;

/**
 * @author            Thibeau Fuhrer <thibeau@sr.solutions>
 *
 * We cannot route this over ilObjH5PGUI because this would lead
 * to problems with ref-ids. The GUI would also assume it's in
 * creation mode, which messes up the control flow. Therefore, we
 * route directly via ilObjPluginDispatchGUI.
 *
 * @ilCtrl_IsCalledBy ilH5PUploadHandlerGUI: ilObjPluginDispatchGUI
 *
 * @noinspection      AutoloadingIssuesInspection
 */
class ilH5PUploadHandlerGUI extends AbstractCtrlAwareUploadHandler
{
    /**
     * Since we cannot route over one of our dispatcher classes,
     * we have to override the default method and check the user
     * permissions manually.
     */
    public function executeCommand(): void
    {
        if (!ilObjH5PAccess::hasWriteAccess()) {
            $response = $this->http->response()->withBody(Streams::ofString('permission denied.'));
            $this->http->saveResponse($response);
            $this->http->sendResponse();
            $this->http->close();
        }

        parent::executeCommand();
    }

    /**
     * @inheritDoc
     */
    public function getUploadURL(): string
    {
        return $this->ctrl->getLinkTargetByClass(
            [ilObjPluginDispatchGUI::class, self::class],
            self::CMD_UPLOAD,
            "",
            true
        );
    }

    /**
     * @inheritDoc
     */
    public function getExistingFileInfoURL(): string
    {
        return $this->ctrl->getLinkTargetByClass(
            [ilObjPluginDispatchGUI::class, self::class],
            self::CMD_INFO,
            "",
            true
        );
    }

    /**
     * @inheritDoc
     */
    public function getFileRemovalURL(): string
    {
        return $this->ctrl->getLinkTargetByClass(
            [ilObjPluginDispatchGUI::class, self::class],
            self::CMD_REMOVE,
            "",
            true
        );
    }

    /**
     * @inheritDoc
     */
    protected function getUploadResult(): HandlerResult
    {
        $this->upload->process();

        $results = $this->upload->getResults();
        $result = end($results);

        if (!$result instanceof UploadResult) {
            return $this->getFailedResult("could not find uploaded files.");
        }

        try {
            $file = ilH5PEditorStorage::saveFileTemporarily($result->getPath(), true);
        } catch (Exception $e) {
            return $this->getFailedResult("could not process uploaded file.");
        }

        return $this->getSuccessResult("$file->dir/$file->fileName", "temporarily saved uploaded file.");
    }

    /**
     * @inheritDoc
     */
    protected function getRemoveResult(string $identifier): HandlerResult
    {
        try {
            ilH5PEditorStorage::removeTemporarilySavedFiles($identifier);
        } catch (Exception $e) {
            return $this->getFailedResult("could not delete requested file.");
        }

        return $this->getSuccessResult($identifier, "removed temporarily saved file.");
    }

    /**
     * @inheritDoc
     */
    protected function getInfoResult(string $identifier): FileInfoResult
    {
        if (!file_exists($identifier)) {
            return new BasicFileInfoResult(
                $this->getFileIdentifierParameterName(),
                $identifier,
                "unknown",
                0,
                "unknown"
            );
        }

        $file = pathinfo($identifier);

        return new BasicFileInfoResult(
            $this->getFileIdentifierParameterName(),
            $identifier,
            $file['basename'],
            filesize($identifier),
            $file['extension']
        );
    }

    /**
     * @inheritDoc
     */
    public function getInfoForExistingFiles(array $file_ids): array
    {
        $results = [];
        foreach ($file_ids as $identifier) {
            $results[] = $this->getInfoResult($identifier);
        }

        return $results;
    }

    protected function getSuccessResult(string $path, string $message): HandlerResult
    {
        return new BasicHandlerResult(
            $this->getFileIdentifierParameterName(),
            HandlerResult::STATUS_OK,
            $path,
            $message
        );
    }

    protected function getFailedResult(string $message): HandlerResult
    {
        return new BasicHandlerResult(
            $this->getFileIdentifierParameterName(),
            HandlerResult::STATUS_FAILED,
            "invalid",
            $message
        );
    }
}
