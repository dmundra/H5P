<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53c49459733c67ee06415d635bba0815
{
    public static $files = array (
        '0c6f877f03a67a7485a2a748706e2f2f' => __DIR__ . '/..' . '/h5p/h5p-core/h5p.classes.php',
        'a63ae9f41847366feffbb295da33fc13' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-development.class.php',
        'b0f066922f2544ef1e43b5d30974b0f1' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-file-storage.interface.php',
        '7d1b634d21347f43384b44f967b40c2c' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-default-storage.class.php',
        '8f1b3be0fc9e7e49e7e87a1333e72895' => __DIR__ . '/..' . '/h5p/h5p-core/h5p-event-base.class.php',
        'ed56202f592894ac220ad52836863d2b' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor.class.php',
        'dd4ac5e4f4a7777515e9451316be622c' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-file.class.php',
        '138126db212e09ea471720e87b638b63' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-ajax.class.php',
        '920009c17c818a2668db044d76f129b9' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-storage.interface.php',
        '101279c1523ab77899b4b6921c749836' => __DIR__ . '/..' . '/h5p/h5p-editor/h5peditor-ajax.interface.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\' => 29,
            'srag\\Plugins\\H5P\\' => 17,
            'srag\\DIC\\' => 9,
            'srag\\CustomInputGUIs\\' => 21,
            'srag\\ActiveRecordConfig\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\H5P\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\DIC\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'srag\\CustomInputGUIs\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/custominputguis/src',
        ),
        'srag\\ActiveRecordConfig\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/activerecordconfig/src',
        ),
    );

    public static $classMap = array (
        'ActiveRecord' => __DIR__ . '/../..' . '/../../../../../../../Services/ActiveRecord/class.ActiveRecord.php',
        'H5PActionGUI' => __DIR__ . '/../..' . '/classes/Action/class.H5PActionGUI.php',
        'H5PRemoveDataConfirm' => __DIR__ . '/../..' . '/classes/uninstall/class.H5PRemoveDataConfirm.php',
        'ilAdvancedSelectionListGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/AdvancedSelectionList/classes/class.ilAdvancedSelectionListGUI.php',
        'ilCheckboxInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilCheckboxInputGUI.php',
        'ilConfirmationGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Utilities/classes/class.ilConfirmationGUI.php',
        'ilCurlConnection' => __DIR__ . '/../..' . '/../../../../../../../Services/WebServices/Curl/classes/class.ilCurlConnection.php',
        'ilCustomInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilCustomInputGUI.php',
        'ilDatePresentation' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDatePresentation.php',
        'ilDateTime' => __DIR__ . '/../..' . '/../../../../../../../Services/Calendar/classes/class.ilDateTime.php',
        'ilFileInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilFileInputGUI.php',
        'ilFormSectionHeaderGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilFormSectionHeaderGUI.php',
        'ilH5PConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilH5PConfigGUI.php',
        'ilH5PPlugin' => __DIR__ . '/../..' . '/classes/class.ilH5PPlugin.php',
        'ilHiddenInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilHiddenInputGUI.php',
        'ilImageLinkButton' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Button/classes/class.ilImageLinkButton.php',
        'ilLinkButton' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Button/classes/class.ilLinkButton.php',
        'ilNonEditableValueGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilNonEditableValueGUI.php',
        'ilObjH5P' => __DIR__ . '/../..' . '/classes/class.ilObjH5P.php',
        'ilObjH5PAccess' => __DIR__ . '/../..' . '/classes/class.ilObjH5PAccess.php',
        'ilObjH5PGUI' => __DIR__ . '/../..' . '/classes/class.ilObjH5PGUI.php',
        'ilObjH5PListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjH5PListGUI.php',
        'ilObjectPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPlugin.php',
        'ilObjectPluginAccess' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPluginAccess.php',
        'ilObjectPluginGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPluginGUI.php',
        'ilObjectPluginListGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilObjectPluginListGUI.php',
        'ilPermissionGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/AccessControl/classes/class.ilPermissionGUI.php',
        'ilPluginConfigGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Component/classes/class.ilPluginConfigGUI.php',
        'ilPropertyFormGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilPropertyFormGUI.php',
        'ilRepositoryObjectPlugin' => __DIR__ . '/../..' . '/../../../../../../../Services/Repository/classes/class.ilRepositoryObjectPlugin.php',
        'ilSelectInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilSelectInputGUI.php',
        'ilTable2GUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Table/classes/class.ilTable2GUI.php',
        'ilTextInputGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/Form/classes/class.ilTextInputGUI.php',
        'ilToolbarGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/Toolbar/classes/class.ilToolbarGUI.php',
        'ilUIPluginRouterGUI' => __DIR__ . '/../..' . '/../../../../../../../Services/UIComponent/classes/class.ilUIPluginRouterGUI.php',
        'ilUtil' => __DIR__ . '/../..' . '/../../../../../../../Services/Utilities/classes/class.ilUtil.php',
        'ilWACSignedPath' => __DIR__ . '/../..' . '/../../../../../../../Services/WebAccessChecker/classes/class.ilWACSignedPath.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfig' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfig.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigFormGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigFormGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigGUI.php',
        'srag\\ActiveRecordConfig\\ActiveRecordConfigTableGUI' => __DIR__ . '/..' . '/srag/activerecordconfig/src/ActiveRecordConfigTableGUI.php',
        'srag\\ActiveRecordConfig\\Exception\\ActiveRecordConfigException' => __DIR__ . '/..' . '/srag/activerecordconfig/src/Exception/ActiveRecordConfigException.php',
        'srag\\CustomInputGUIs\\DateDurationInputGUI\\DateDurationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/DateDurationInputGUI/DateDurationInputGUI.php',
        'srag\\CustomInputGUIs\\GlyphGUI\\GlyphGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/GlyphGUI/GlyphGUI.php',
        'srag\\CustomInputGUIs\\MultiLineInputGUI\\MultiLineInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiLineInputGUI/MultiLineInputGUI.php',
        'srag\\CustomInputGUIs\\MultiSelectSearchInputGUI\\MultiSelectSearchInput2GUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInput2GUI.php',
        'srag\\CustomInputGUIs\\MultiSelectSearchInputGUI\\MultiSelectSearchInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/MultiSelectSearchInputGUI/MultiSelectSearchInputGUI.php',
        'srag\\CustomInputGUIs\\NumberInputGUI\\NumberInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/NumberInputGUI/NumberInputGUI.php',
        'srag\\CustomInputGUIs\\ScreenshotsInputGUI\\ScreenshotsInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/ScreenshotsInputGUI/ScreenshotsInputGUI.php',
        'srag\\CustomInputGUIs\\StaticHTMLPresentationInputGUI\\StaticHTMLPresentationInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/StaticHTMLPresentationInputGUI/StaticHTMLPresentationInputGUI.php',
        'srag\\CustomInputGUIs\\Template\\Template' => __DIR__ . '/..' . '/srag/custominputguis/src/Template/Template.php',
        'srag\\CustomInputGUIs\\TextAreaInputGUI\\TextAreaInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextAreaInputGUI/TextAreaInputGUI.php',
        'srag\\CustomInputGUIs\\TextInputGUI\\TextInputGUI' => __DIR__ . '/..' . '/srag/custominputguis/src/TextInputGUI/TextInputGUI.php',
        'srag\\CustomInputGUIs\\Waiter\\Waiter' => __DIR__ . '/..' . '/srag/custominputguis/src/Waiter/Waiter.php',
        'srag\\DIC\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\DIC\\LegacyDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/LegacyDIC.php',
        'srag\\DIC\\DIC\\NewDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/NewDIC.php',
        'srag\\DIC\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\Plugins\\H5P\\Access\\Access' => __DIR__ . '/../..' . '/src/Access/Access.php',
        'srag\\Plugins\\H5P\\Content\\Content' => __DIR__ . '/../..' . '/src/Content/Content.php',
        'srag\\Plugins\\H5P\\Content\\ContentLibrary' => __DIR__ . '/../..' . '/src/Content/ContentLibrary.php',
        'srag\\Plugins\\H5P\\Content\\ContentUserData' => __DIR__ . '/../..' . '/src/Content/ContentUserData.php',
        'srag\\Plugins\\H5P\\Content\\ContentsTableGUI' => __DIR__ . '/../..' . '/src/Content/ContentsTableGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditContentFormGUI' => __DIR__ . '/../..' . '/src/Content/Editor/EditContentFormGUI.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditorAjax' => __DIR__ . '/../..' . '/src/Content/Editor/EditorAjax.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\EditorStorage' => __DIR__ . '/../..' . '/src/Content/Editor/EditorStorage.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\ShowEditor' => __DIR__ . '/../..' . '/src/Content/Editor/ShowEditor.php',
        'srag\\Plugins\\H5P\\Content\\Editor\\TmpFile' => __DIR__ . '/../..' . '/src/Content/Editor/TmpFile.php',
        'srag\\Plugins\\H5P\\Content\\ShowContent' => __DIR__ . '/../..' . '/src/Content/ShowContent.php',
        'srag\\Plugins\\H5P\\Event\\Event' => __DIR__ . '/../..' . '/src/Event/Event.php',
        'srag\\Plugins\\H5P\\Event\\EventFramework' => __DIR__ . '/../..' . '/src/Event/EventFramework.php',
        'srag\\Plugins\\H5P\\Framework\\Framework' => __DIR__ . '/../..' . '/src/Framework/Framework.php',
        'srag\\Plugins\\H5P\\Hub\\HubDetailsFormGUI' => __DIR__ . '/../..' . '/src/Hub/HubDetailsFormGUI.php',
        'srag\\Plugins\\H5P\\Hub\\HubSettingsFormGUI' => __DIR__ . '/../..' . '/src/Hub/HubSettingsFormGUI.php',
        'srag\\Plugins\\H5P\\Hub\\HubTableGUI' => __DIR__ . '/../..' . '/src/Hub/HubTableGUI.php',
        'srag\\Plugins\\H5P\\Hub\\ShowHub' => __DIR__ . '/../..' . '/src/Hub/ShowHub.php',
        'srag\\Plugins\\H5P\\Hub\\UploadLibraryFormGUI' => __DIR__ . '/../..' . '/src/Hub/UploadLibraryFormGUI.php',
        'srag\\Plugins\\H5P\\Job\\DeleteOldEventsJob' => __DIR__ . '/../..' . '/src/Job/DeleteOldEventsJob.php',
        'srag\\Plugins\\H5P\\Job\\DeleteOldTmpFilesJob' => __DIR__ . '/../..' . '/src/Job/DeleteOldTmpFilesJob.php',
        'srag\\Plugins\\H5P\\Job\\RefreshHubJob' => __DIR__ . '/../..' . '/src/Job/RefreshHubJob.php',
        'srag\\Plugins\\H5P\\Library\\Counter' => __DIR__ . '/../..' . '/src/Library/Counter.php',
        'srag\\Plugins\\H5P\\Library\\Library' => __DIR__ . '/../..' . '/src/Library/Library.php',
        'srag\\Plugins\\H5P\\Library\\LibraryCachedAsset' => __DIR__ . '/../..' . '/src/Library/LibraryCachedAsset.php',
        'srag\\Plugins\\H5P\\Library\\LibraryDependencies' => __DIR__ . '/../..' . '/src/Library/LibraryDependencies.php',
        'srag\\Plugins\\H5P\\Library\\LibraryHubCache' => __DIR__ . '/../..' . '/src/Library/LibraryHubCache.php',
        'srag\\Plugins\\H5P\\Library\\LibraryLanguage' => __DIR__ . '/../..' . '/src/Library/LibraryLanguage.php',
        'srag\\Plugins\\H5P\\Object\\H5PObject' => __DIR__ . '/../..' . '/src/Object/H5PObject.php',
        'srag\\Plugins\\H5P\\Object\\ObjSettingsFormGUI' => __DIR__ . '/../..' . '/src/Object/ObjSettingsFormGUI.php',
        'srag\\Plugins\\H5P\\Option\\Option' => __DIR__ . '/../..' . '/src/Option/Option.php',
        'srag\\Plugins\\H5P\\Option\\OptionOld' => __DIR__ . '/../..' . '/src/Option/OptionOld.php',
        'srag\\Plugins\\H5P\\Results\\Result' => __DIR__ . '/../..' . '/src/Results/Result.php',
        'srag\\Plugins\\H5P\\Results\\ResultsTableGUI' => __DIR__ . '/../..' . '/src/Results/ResultsTableGUI.php',
        'srag\\Plugins\\H5P\\Results\\SolveStatus' => __DIR__ . '/../..' . '/src/Results/SolveStatus.php',
        'srag\\Plugins\\H5P\\Utils\\H5P' => __DIR__ . '/../..' . '/src/Utils/H5P.php',
        'srag\\Plugins\\H5P\\Utils\\H5PTrait' => __DIR__ . '/../..' . '/src/Utils/H5PTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractPluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\AbstractRemovePluginDataConfirm' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/AbstractRemovePluginDataConfirm.php',
        'srag\\RemovePluginDataConfirm\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\RemovePluginDataConfirmException' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RemovePluginDataConfirmException.php',
        'srag\\RemovePluginDataConfirm\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53c49459733c67ee06415d635bba0815::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53c49459733c67ee06415d635bba0815::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53c49459733c67ee06415d635bba0815::$classMap;

        }, null, ClassLoader::class);
    }
}
