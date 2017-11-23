<?php

require_once "Services/ActiveRecord/class.ActiveRecord.php";

/**
 * H5P library active record
 */
class ilH5PLibrary extends ActiveRecord {

	const TABLE_NAME = "rep_robj_xhfp_lib";


	/**
	 * @return string
	 */
	static function returnDbTableName() {
		return self::TABLE_NAME;
	}


	/**
	 * @param int $library_id
	 *
	 * @return ilH5PLibrary|null
	 */
	static function getLibraryById($library_id) {
		/**
		 * @var ilH5PLibrary|null $h5p_library
		 */

		$h5p_library = self::where([
			"library_id" => $library_id
		])->first();

		return $h5p_library;
	}


	/**
	 * @return ilH5PLibrary[]
	 */
	static function getLibraries() {
		/**
		 * @var ilH5PLibrary[] $h5p_libraries
		 */

		$h5p_libraries = self::orderBy("title", "asc")->orderBy("major_version", "asc")->orderBy("minor_version", "asc")->get();

		return $h5p_libraries;
	}


	/**
	 * @param string $name
	 *
	 * @return ilH5PLibrary[]
	 */
	static function getLibraryAllVersions($name) {
		/**
		 * @var ilH5PLibrary[] $h5p_libraries
		 */

		$h5p_libraries = self::where([
			"name" => $name
		])->orderBy("major_version", "asc")->orderBy("minor_version", "asc")->get();

		return $h5p_libraries;
	}


	/**
	 * @param string   $name
	 * @param int|null $major_version
	 * @param int|null $minor_version
	 *
	 * @return ilH5PLibrary|null
	 */
	static function getLibraryByVersion($name, $major_version = NULL, $minor_version = NULL) {
		/**
		 * @var ilH5PLibrary|null $h5p_library
		 */

		$where = [
			"name" => $name
		];

		if ($major_version !== NULL) {
			$where["major_version"] = $major_version;
		}

		if ($minor_version !== NULL) {
			$where["minor_version"] = $minor_version;
		}

		$h5p_library = self::where($where)->orderBy("major_version", "desc")->orderBy("minor_version", "desc")->orderBy("patch_version", "desc")
			->first(); // Order desc version for the case no version specification to get latest version

		return $h5p_library;
	}


	/**
	 * @param int $library_id
	 *
	 * @return int
	 */
	static function getLibraryUsage($library_id) {
		global $DIC;

		$result = $DIC->database()->queryF("SELECT COUNT(DISTINCT c.content_id) AS count
          FROM " . self::TABLE_NAME . " AS l
          JOIN " . ilH5PContentLibrary::TABLE_NAME . " AS cl ON l.library_id = cl.library_id
          JOIN " . ilH5PContent::TABLE_NAME . " AS c ON cl.content_id = c.content_id
          WHERE l.library_id = %s", [ "integer" ], [ $library_id ]);

		$count = $result->fetchAssoc()["count"];

		return $count;
	}


	/**
	 * @return ilH5PLibrary[]
	 */
	static function getLatestLibraryVersions() {
		/**
		 * @var ilH5PLibrary[] $h5p_libraries_
		 */

		$h5p_libraries_ = self::where([
			"runnable" => true
		])->orderBy("title", "asc")->orderBy("major_version", "asc")->orderBy("minor_version", "asc")->get();

		$h5p_libraries = [];

		$tmp = [];

		foreach ($h5p_libraries_ as $h5p_library) {
			if (!isset($tmp[$h5p_library->getLibraryId()])) {
				$h5p_libraries[] = $h5p_library;

				$tmp[$h5p_library->getLibraryId()] = true;
			}
		}

		return $h5p_libraries;
	}


	/**
	 * @return array
	 */
	static function getLatestLibraryVersionsArray() {
		$h5p_libraries = self::getLatestLibraryVersions();

		$libraries = [];

		foreach ($h5p_libraries as $h5p_library) {
			$libraries[$h5p_library->getLibraryId()] = $h5p_library->getTitle();
		}

		return $libraries;
	}


	/**
	 * @var int
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     8
	 * @con_is_notnull true
	 * @con_is_primary true
	 * @con_sequence   true
	 */
	protected $library_id;
	/**
	 * @var int
	 *
	 * @con_has_field    true
	 * @con_fieldtype    timestamp
	 * @con_is_notnull   true
	 */
	protected $created_at = 0;
	/**
	 * @var int
	 *
	 * @con_has_field    true
	 * @con_fieldtype    timestamp
	 * @con_is_notnull   true
	 */
	protected $updated_at = 0;
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_length     127
	 * @con_is_notnull true
	 */
	protected $name = "";
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_length     255
	 * @con_is_notnull true
	 */
	protected $title = "";
	/**
	 * @var int
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     8
	 * @con_is_notnull true
	 */
	protected $major_version;
	/**
	 * @var int
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     8
	 * @con_is_notnull true
	 */
	protected $minor_version = 0;
	/**
	 * @var int
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     8
	 * @con_is_notnull true
	 */
	protected $patch_version = 0;
	/**
	 * @var bool
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     1
	 * @con_is_notnull true
	 */
	protected $runnable = false;
	/**
	 * @var bool
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     1
	 * @con_is_notnull true
	 */
	protected $restricted = false;
	/**
	 * @var bool
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     1
	 * @con_is_notnull true
	 */
	protected $fullscreen = false;
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_length     255
	 * @con_is_notnull true
	 */
	protected $embed_types = "";
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_is_notnull true
	 */
	protected $preloaded_js = "";
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_is_notnull true
	 */
	protected $preloaded_css = "";
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_is_notnull true
	 */
	protected $drop_library_css = "";
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_is_notnull true
	 */
	protected $semantics = "[]";
	/**
	 * @var string
	 *
	 * @con_has_field  true
	 * @con_fieldtype  text
	 * @con_length     1023
	 * @con_is_notnull true
	 */
	protected $tutorial_url = "";
	/**
	 * @var bool
	 *
	 * @con_has_field  true
	 * @con_fieldtype  integer
	 * @con_length     1
	 * @con_is_notnull true
	 */
	protected $has_icon = false;


	/**
	 * @return string[]
	 */
	public function getEmbedTypesArray() {
		return ilH5P::getInstance()->splitCsv($this->embed_types);
	}


	/**
	 * @param string[] $embed_types
	 */
	public function setEmbedTypesArray(array $embed_types) {
		$this->embed_types = ilH5P::getInstance()->joinCsv($embed_types);
	}


	/**
	 * @return string[]
	 */
	public function getPreloadedJsArray() {
		return ilH5P::getInstance()->splitCsv($this->preloaded_js);
	}


	/**
	 * @param string[] $preloaded_js
	 */
	public function setPreloadedJsArray(array $preloaded_js) {
		$this->preloaded_js = ilH5P::getInstance()->joinCsv($preloaded_js);
	}


	/**
	 * @return string[]
	 */
	public function getPreloadedCssArray() {
		return ilH5P::getInstance()->splitCsv($this->preloaded_css);
	}


	/**
	 * @param string[] $preloaded_css
	 */
	public function setPreloadedCssArray(array $preloaded_css) {
		$this->preloaded_css = ilH5P::getInstance()->joinCsv($preloaded_css);
	}


	/**
	 * @return string[]
	 */
	public function getDropLibraryCssArray() {
		return ilH5P::getInstance()->splitCsv($this->drop_library_css);
	}


	/**
	 * @param string[] $drop_library_css
	 */
	public function setDropLibraryCssArray(array $drop_library_css) {
		$this->drop_library_css = ilH5P::getInstance()->joinCsv($drop_library_css);
	}


	/**
	 * @return array
	 */
	public function getSemanticsArray() {
		return ilH5P::getInstance()->stringToJson($this->semantics);
	}


	/**
	 * @param array $semantics
	 */
	public function setSemanticsArray(array $semantics) {
		$this->semantics = ilH5P::getInstance()->jsonToString($semantics);
	}


	/**
	 * @param string $field_name
	 *
	 * @return mixed|null
	 */
	public function sleep($field_name) {
		switch ($field_name) {
			case "runnable":
			case "restricted":
			case "fullscreen":
			case "has_icon":
				return ($this->{$field_name} ? 1 : 0);
				break;

			case "created_at":
			case "updated_at":
				return ilH5P::getInstance()->timestampToDbDate($this->{$field_name});
				break;

			default:
				return NULL;
		}
	}


	/**
	 * @param string $field_name
	 * @param mixed  $field_value
	 *
	 * @return mixed|null
	 */
	public function wakeUp($field_name, $field_value) {
		switch ($field_name) {
			case "runnable":
			case "restricted":
			case "fullscreen":
			case "has_icon":
				return boolval($field_value);
				break;

			case "created_at":
			case "updated_at":
				return ilH5P::getInstance()->dbDateToTimestamp($field_value);
				break;

			default:
				return NULL;
		}
	}


	/**
	 *
	 */
	public function create() {
		$this->created_at = $this->updated_at = time();

		parent::create();
	}


	/**
	 *
	 */
	public function update() {
		$this->updated_at = time();

		parent::update();
	}


	/**
	 * @return int
	 */
	public function getLibraryId() {
		return $this->library_id;
	}


	/**
	 * @param int $library_id
	 */
	public function setLibraryId($library_id) {
		$this->library_id = $library_id;
	}


	/**
	 * @return int
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}


	/**
	 * @param int $created_at
	 */
	public function setCreatedAt($created_at) {
		$this->created_at = $created_at;
	}


	/**
	 * @return int
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}


	/**
	 * @param int $updated_at
	 */
	public function setUpdatedAt($updated_at) {
		$this->updated_at = $updated_at;
	}


	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}


	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}


	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}


	/**
	 * @param string $title
	 */
	public function setTitle($title) {
		$this->title = $title;
	}


	/**
	 * @return int
	 */
	public function getMajorVersion() {
		return $this->major_version;
	}


	/**
	 * @param int $major_version
	 */
	public function setMajorVersion($major_version) {
		$this->major_version = $major_version;
	}


	/**
	 * @return int
	 */
	public function getMinorVersion() {
		return $this->minor_version;
	}


	/**
	 * @param int $minor_version
	 */
	public function setMinorVersion($minor_version) {
		$this->minor_version = $minor_version;
	}


	/**
	 * @return int
	 */
	public function getPatchVersion() {
		return $this->patch_version;
	}


	/**
	 * @param int $patch_version
	 */
	public function setPatchVersion($patch_version) {
		$this->patch_version = $patch_version;
	}


	/**
	 * @return bool
	 */
	public function canRunnable() {
		return $this->runnable;
	}


	/**
	 * @param bool $runnable
	 */
	public function setRunnable($runnable) {
		$this->runnable = $runnable;
	}


	/**
	 * @return bool
	 */
	public function isRestricted() {
		return $this->restricted;
	}


	/**
	 * @param bool $restricted
	 */
	public function setRestricted($restricted) {
		$this->restricted = $restricted;
	}


	/**
	 * @return bool
	 */
	public function isFullscreen() {
		return $this->fullscreen;
	}


	/**
	 * @param bool $fullscreen
	 */
	public function setFullscreen($fullscreen) {
		$this->fullscreen = $fullscreen;
	}


	/**
	 * @return string
	 */
	public function getEmbedTypes() {
		return $this->embed_types;
	}


	/**
	 * @param string $embed_types
	 */
	public function setEmbedTypes($embed_types) {
		$this->embed_types = $embed_types;
	}


	/**
	 * @return string
	 */
	public function getPreloadedJs() {
		return $this->preloaded_js;
	}


	/**
	 * @param string $preloaded_js
	 */
	public function setPreloadedJs($preloaded_js) {
		$this->preloaded_js = $preloaded_js;
	}


	/**
	 * @return string
	 */
	public function getPreloadedCss() {
		return $this->preloaded_css;
	}


	/**
	 * @param string $preloaded_css
	 */
	public function setPreloadedCss($preloaded_css) {
		$this->preloaded_css = $preloaded_css;
	}


	/**
	 * @return string
	 */
	public function getDropLibraryCss() {
		return $this->drop_library_css;
	}


	/**
	 * @param string $drop_library_css
	 */
	public function setDropLibraryCss($drop_library_css) {
		$this->drop_library_css = $drop_library_css;
	}


	/**
	 * @return string
	 */
	public function getSemantics() {
		return $this->semantics;
	}


	/**
	 * @param string $semantics
	 */
	public function setSemantics($semantics) {
		$this->semantics = $semantics;
	}


	/**
	 * @return string
	 */
	public function getTutorialUrl() {
		return $this->tutorial_url;
	}


	/**
	 * @param string $tutorial_url
	 */
	public function setTutorialUrl($tutorial_url) {
		$this->tutorial_url = $tutorial_url;
	}


	/**
	 * @return bool
	 */
	public function hasIcon() {
		return $this->has_icon;
	}


	/**
	 * @param bool $has_icon
	 */
	public function setHasIcon($has_icon) {
		$this->has_icon = $has_icon;
	}
}
