<?php

if (!class_exists("StringArray")) {
/**
 * StringArray
 */
class StringArray {
}}

if (!class_exists("ObjectRef")) {
/**
 * ObjectRef
 */
class ObjectRef {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
}}

if (!class_exists("ObjectRefArray")) {
/**
 * ObjectRefArray
 */
class ObjectRefArray {
}}

if (!class_exists("AccountData")) {
/**
 * AccountData
 */
class AccountData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $real_name;
	/**
	 * @access public
	 * @var string
	 */
	public $email;
}}

if (!class_exists("AccountDataArray")) {
/**
 * AccountDataArray
 */
class AccountDataArray {
}}

if (!class_exists("AttachmentData")) {
/**
 * AttachmentData
 */
class AttachmentData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $filename;
	/**
	 * @access public
	 * @var integer
	 */
	public $size;
	/**
	 * @access public
	 * @var string
	 */
	public $content_type;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $date_submitted;
	/**
	 * @access public
	 * @var anyURI
	 */
	public $download_url;
}}

if (!class_exists("AttachmentDataArray")) {
/**
 * AttachmentDataArray
 */
class AttachmentDataArray {
}}

if (!class_exists("ProjectAttachmentData")) {
/**
 * ProjectAttachmentData
 */
class ProjectAttachmentData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $filename;
	/**
	 * @access public
	 * @var string
	 */
	public $title;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var integer
	 */
	public $size;
	/**
	 * @access public
	 * @var string
	 */
	public $content_type;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $date_submitted;
	/**
	 * @access public
	 * @var anyURI
	 */
	public $download_url;
}}

if (!class_exists("ProjectAttachmentDataArray")) {
/**
 * ProjectAttachmentDataArray
 */
class ProjectAttachmentDataArray {
}}

if (!class_exists("RelationshipData")) {
/**
 * RelationshipData
 */
class RelationshipData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $type;
	/**
	 * @access public
	 * @var integer
	 */
	public $target_id;
}}

if (!class_exists("RelationshipDataArray")) {
/**
 * RelationshipDataArray
 */
class RelationshipDataArray {
}}

if (!class_exists("IssueNoteData")) {
/**
 * IssueNoteData
 */
class IssueNoteData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var AccountData
	 */
	public $reporter;
	/**
	 * @access public
	 * @var string
	 */
	public $text;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $view_state;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $date_submitted;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $last_modified;
	/**
	 * @access public
	 * @var integer
	 */
	public $time_tracking;
}}

if (!class_exists("IssueNoteDataArray")) {
/**
 * IssueNoteDataArray
 */
class IssueNoteDataArray {
}}

if (!class_exists("IssueData")) {
/**
 * IssueData
 */
class IssueData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $view_state;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $last_updated;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $project;
	/**
	 * @access public
	 * @var string
	 */
	public $category;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $priority;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $severity;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $status;
	/**
	 * @access public
	 * @var AccountData
	 */
	public $reporter;
	/**
	 * @access public
	 * @var string
	 */
	public $summary;
	/**
	 * @access public
	 * @var string
	 */
	public $version;
	/**
	 * @access public
	 * @var string
	 */
	public $build;
	/**
	 * @access public
	 * @var string
	 */
	public $platform;
	/**
	 * @access public
	 * @var string
	 */
	public $os;
	/**
	 * @access public
	 * @var string
	 */
	public $os_build;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $reproducibility;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $date_submitted;
	/**
	 * @access public
	 * @var integer
	 */
	public $sponsorship_total;
	/**
	 * @access public
	 * @var AccountData
	 */
	public $handler;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $projection;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $eta;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $resolution;
	/**
	 * @access public
	 * @var string
	 */
	public $fixed_in_version;
	/**
	 * @access public
	 * @var string
	 */
	public $target_version;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var string
	 */
	public $steps_to_reproduce;
	/**
	 * @access public
	 * @var string
	 */
	public $additional_information;
	/**
	 * @access public
	 * @var AttachmentDataArray
	 */
	public $attachments;
	/**
	 * @access public
	 * @var RelationshipDataArray
	 */
	public $relationships;
	/**
	 * @access public
	 * @var IssueNoteDataArray
	 */
	public $notes;
	/**
	 * @access public
	 * @var CustomFieldValueForIssueDataArray
	 */
	public $custom_fields;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $due_date;
}}

if (!class_exists("IssueDataArray")) {
/**
 * IssueDataArray
 */
class IssueDataArray {
}}

if (!class_exists("IssueHeaderData")) {
/**
 * IssueHeaderData
 */
class IssueHeaderData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var integer
	 */
	public $view_state;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $last_updated;
	/**
	 * @access public
	 * @var integer
	 */
	public $project;
	/**
	 * @access public
	 * @var string
	 */
	public $category;
	/**
	 * @access public
	 * @var integer
	 */
	public $priority;
	/**
	 * @access public
	 * @var integer
	 */
	public $severity;
	/**
	 * @access public
	 * @var integer
	 */
	public $status;
	/**
	 * @access public
	 * @var integer
	 */
	public $reporter;
	/**
	 * @access public
	 * @var string
	 */
	public $summary;
	/**
	 * @access public
	 * @var integer
	 */
	public $handler;
	/**
	 * @access public
	 * @var integer
	 */
	public $resolution;
	/**
	 * @access public
	 * @var integer
	 */
	public $attachments_count;
	/**
	 * @access public
	 * @var integer
	 */
	public $notes_count;
}}

if (!class_exists("IssueHeaderDataArray")) {
/**
 * IssueHeaderDataArray
 */
class IssueHeaderDataArray {
}}

if (!class_exists("ProjectData")) {
/**
 * ProjectData
 */
class ProjectData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $status;
	/**
	 * @access public
	 * @var boolean
	 */
	public $enabled;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $view_state;
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $access_min;
	/**
	 * @access public
	 * @var string
	 */
	public $file_path;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var ProjectDataArray
	 */
	public $subprojects;
	/**
	 * @access public
	 * @var boolean
	 */
	public $inherit_global;
}}

if (!class_exists("ProjectDataArray")) {
/**
 * ProjectDataArray
 */
class ProjectDataArray {
}}

if (!class_exists("ProjectVersionData")) {
/**
 * ProjectVersionData
 */
class ProjectVersionData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var integer
	 */
	public $project_id;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $date_order;
	/**
	 * @access public
	 * @var string
	 */
	public $description;
	/**
	 * @access public
	 * @var boolean
	 */
	public $released;
}}

if (!class_exists("ProjectVersionDataArray")) {
/**
 * ProjectVersionDataArray
 */
class ProjectVersionDataArray {
}}

if (!class_exists("FilterData")) {
/**
 * FilterData
 */
class FilterData {
	/**
	 * @access public
	 * @var integer
	 */
	public $id;
	/**
	 * @access public
	 * @var AccountData
	 */
	public $owner;
	/**
	 * @access public
	 * @var integer
	 */
	public $project_id;
	/**
	 * @access public
	 * @var boolean
	 */
	public $is_public;
	/**
	 * @access public
	 * @var string
	 */
	public $name;
	/**
	 * @access public
	 * @var string
	 */
	public $filter_string;
}}

if (!class_exists("FilterDataArray")) {
/**
 * FilterDataArray
 */
class FilterDataArray {
}}

if (!class_exists("CustomFieldDefinitionData")) {
/**
 * CustomFieldDefinitionData
 */
class CustomFieldDefinitionData {
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $field;
	/**
	 * @access public
	 * @var integer
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $possible_values;
	/**
	 * @access public
	 * @var string
	 */
	public $default_value;
	/**
	 * @access public
	 * @var string
	 */
	public $valid_regexp;
	/**
	 * @access public
	 * @var integer
	 */
	public $access_level_r;
	/**
	 * @access public
	 * @var integer
	 */
	public $access_level_rw;
	/**
	 * @access public
	 * @var integer
	 */
	public $length_min;
	/**
	 * @access public
	 * @var integer
	 */
	public $length_max;
	/**
	 * @access public
	 * @var boolean
	 */
	public $advanced;
	/**
	 * @access public
	 * @var boolean
	 */
	public $display_report;
	/**
	 * @access public
	 * @var boolean
	 */
	public $display_update;
	/**
	 * @access public
	 * @var boolean
	 */
	public $display_resolved;
	/**
	 * @access public
	 * @var boolean
	 */
	public $display_closed;
	/**
	 * @access public
	 * @var boolean
	 */
	public $require_report;
	/**
	 * @access public
	 * @var boolean
	 */
	public $require_update;
	/**
	 * @access public
	 * @var boolean
	 */
	public $require_resolved;
	/**
	 * @access public
	 * @var boolean
	 */
	public $require_closed;
}}

if (!class_exists("CustomFieldDefinitionDataArray")) {
/**
 * CustomFieldDefinitionDataArray
 */
class CustomFieldDefinitionDataArray {
}}

if (!class_exists("CustomFieldLinkForProjectData")) {
/**
 * CustomFieldLinkForProjectData
 */
class CustomFieldLinkForProjectData {
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $field;
	/**
	 * @access public
	 * @var integer
	 */
	public $sequence;
}}

if (!class_exists("CustomFieldLinkForProjectDataArray")) {
/**
 * CustomFieldLinkForProjectDataArray
 */
class CustomFieldLinkForProjectDataArray {
}}

if (!class_exists("CustomFieldValueForIssueData")) {
/**
 * CustomFieldValueForIssueData
 */
class CustomFieldValueForIssueData {
	/**
	 * @access public
	 * @var ObjectRef
	 */
	public $field;
	/**
	 * @access public
	 * @var string
	 */
	public $value;
}}

if (!class_exists("CustomFieldValueForIssueDataArray")) {
/**
 * CustomFieldValueForIssueDataArray
 */
class CustomFieldValueForIssueDataArray {
}}

if (!class_exists("MantisConnect")) {
/**
 * MantisConnect
 * @author WSDLInterpreter
 */
class MantisConnect extends SoapClient {
	/**
	 * Default class map for wsdl=>php
	 * @access private
	 * @var array
	 */
	private static $classmap = array(
		"StringArray" => "StringArray",
		"ObjectRef" => "ObjectRef",
		"ObjectRefArray" => "ObjectRefArray",
		"AccountData" => "AccountData",
		"AccountDataArray" => "AccountDataArray",
		"AttachmentData" => "AttachmentData",
		"AttachmentDataArray" => "AttachmentDataArray",
		"ProjectAttachmentData" => "ProjectAttachmentData",
		"ProjectAttachmentDataArray" => "ProjectAttachmentDataArray",
		"RelationshipData" => "RelationshipData",
		"RelationshipDataArray" => "RelationshipDataArray",
		"IssueNoteData" => "IssueNoteData",
		"IssueNoteDataArray" => "IssueNoteDataArray",
		"IssueData" => "IssueData",
		"IssueDataArray" => "IssueDataArray",
		"IssueHeaderData" => "IssueHeaderData",
		"IssueHeaderDataArray" => "IssueHeaderDataArray",
		"ProjectData" => "ProjectData",
		"ProjectDataArray" => "ProjectDataArray",
		"ProjectVersionData" => "ProjectVersionData",
		"ProjectVersionDataArray" => "ProjectVersionDataArray",
		"FilterData" => "FilterData",
		"FilterDataArray" => "FilterDataArray",
		"CustomFieldDefinitionData" => "CustomFieldDefinitionData",
		"CustomFieldDefinitionDataArray" => "CustomFieldDefinitionDataArray",
		"CustomFieldLinkForProjectData" => "CustomFieldLinkForProjectData",
		"CustomFieldLinkForProjectDataArray" => "CustomFieldLinkForProjectDataArray",
		"CustomFieldValueForIssueData" => "CustomFieldValueForIssueData",
		"CustomFieldValueForIssueDataArray" => "CustomFieldValueForIssueDataArray",
	);

	/**
	 * Constructor using wsdl location and options array
	 * @param string $wsdl WSDL location for this service
	 * @param array $options Options for the SoapClient
	 */
	public function __construct($wsdl, $options=array()) {
		foreach(self::$classmap as $wsdlClassName => $phpClassName) {
		    if(!isset($options['classmap'][$wsdlClassName])) {
		        $options['classmap'][$wsdlClassName] = $phpClassName;
		    }
		}
		parent::__construct($wsdl, $options);
	}

	/**
	 * Checks if an argument list matches against a valid argument type list
	 * @param array $arguments The argument list to check
	 * @param array $validParameters A list of valid argument types
	 * @return boolean true if arguments match against validParameters
	 * @throws Exception invalid function signature message
	 */
	public function _checkArguments($arguments, $validParameters) {
		$variables = "";
		foreach ($arguments as $arg) {
		    $type = gettype($arg);
		    if ($type == "object") {
		        $type = get_class($arg);
		    }
		    $variables .= "(".$type.")";
		}
		if (!in_array($variables, $validParameters)) {
		    throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
		}
		return true;
	}

	/**
	 * Service Call: mc_version
	 * Parameter options:

	 * @param mixed,... See function description for parameter options
	 * @return string
	 * @throws Exception invalid function signature message
	 */
	public function mc_version($mixed = null) {
		$validParameters = array(
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_version", $args);
	}


	/**
	 * Service Call: mc_enum_status
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_status($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_status", $args);
	}


	/**
	 * Service Call: mc_enum_priorities
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_priorities($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_priorities", $args);
	}


	/**
	 * Service Call: mc_enum_severities
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_severities($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_severities", $args);
	}


	/**
	 * Service Call: mc_enum_reproducibilities
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_reproducibilities($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_reproducibilities", $args);
	}


	/**
	 * Service Call: mc_enum_projections
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_projections($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_projections", $args);
	}


	/**
	 * Service Call: mc_enum_etas
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_etas($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_etas", $args);
	}


	/**
	 * Service Call: mc_enum_resolutions
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_resolutions($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_resolutions", $args);
	}


	/**
	 * Service Call: mc_enum_access_levels
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_access_levels($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_access_levels", $args);
	}


	/**
	 * Service Call: mc_enum_project_status
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_project_status($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_project_status", $args);
	}


	/**
	 * Service Call: mc_enum_project_view_states
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_project_view_states($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_project_view_states", $args);
	}


	/**
	 * Service Call: mc_enum_view_states
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_view_states($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_view_states", $args);
	}


	/**
	 * Service Call: mc_enum_custom_field_types
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ObjectRefArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_custom_field_types($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_custom_field_types", $args);
	}


	/**
	 * Service Call: mc_enum_get
	 * Parameter options:
	 * (string) username, (string) password, (string) enumeration
	 * @param mixed,... See function description for parameter options
	 * @return string
	 * @throws Exception invalid function signature message
	 */
	public function mc_enum_get($mixed = null) {
		$validParameters = array(
			"(string)(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_enum_get", $args);
	}


	/**
	 * Service Call: mc_issue_exists
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_exists($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_exists", $args);
	}


	/**
	 * Service Call: mc_issue_get
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id
	 * @param mixed,... See function description for parameter options
	 * @return IssueData
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_get($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_get", $args);
	}


	/**
	 * Service Call: mc_issue_get_biggest_id
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_get_biggest_id($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_get_biggest_id", $args);
	}


	/**
	 * Service Call: mc_issue_get_id_from_summary
	 * Parameter options:
	 * (string) username, (string) password, (string) summary
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_get_id_from_summary($mixed = null) {
		$validParameters = array(
			"(string)(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_get_id_from_summary", $args);
	}


	/**
	 * Service Call: mc_issue_add
	 * Parameter options:
	 * (string) username, (string) password, (IssueData) issue
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_add($mixed = null) {
		$validParameters = array(
			"(string)(string)(IssueData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_add", $args);
	}


	/**
	 * Service Call: mc_issue_update
	 * Parameter options:
	 * (string) username, (string) password, (integer) issueId, (IssueData) issue
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_update($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(IssueData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_update", $args);
	}


	/**
	 * Service Call: mc_issue_delete
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_delete($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_delete", $args);
	}


	/**
	 * Service Call: mc_issue_note_add
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id, (IssueNoteData) note
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_note_add($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(IssueNoteData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_note_add", $args);
	}


	/**
	 * Service Call: mc_issue_note_delete
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_note_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_note_delete($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_note_delete", $args);
	}


	/**
	 * Service Call: mc_issue_relationship_add
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id, (RelationshipData) relationship
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_relationship_add($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(RelationshipData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_relationship_add", $args);
	}


	/**
	 * Service Call: mc_issue_relationship_delete
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id, (integer) relationship_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_relationship_delete($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_relationship_delete", $args);
	}


	/**
	 * Service Call: mc_issue_attachment_add
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id, (string) name, (string) file_type, (base64Binary) content
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_attachment_add($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(string)(string)(base64Binary)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_attachment_add", $args);
	}


	/**
	 * Service Call: mc_issue_attachment_delete
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_attachment_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_attachment_delete($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_attachment_delete", $args);
	}


	/**
	 * Service Call: mc_issue_attachment_get
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_attachment_id
	 * @param mixed,... See function description for parameter options
	 * @return base64Binary
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_attachment_get($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_attachment_get", $args);
	}


	/**
	 * Service Call: mc_project_add
	 * Parameter options:
	 * (string) username, (string) password, (ProjectData) project
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_add($mixed = null) {
		$validParameters = array(
			"(string)(string)(ProjectData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_add", $args);
	}


	/**
	 * Service Call: mc_project_delete
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_delete($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_delete", $args);
	}


	/**
	 * Service Call: mc_project_get_issues
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id, (integer) page_number, (integer) per_page
	 * @param mixed,... See function description for parameter options
	 * @return IssueDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_issues($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(integer)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_issues", $args);
	}


	/**
	 * Service Call: mc_project_get_issue_headers
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id, (integer) page_number, (integer) per_page
	 * @param mixed,... See function description for parameter options
	 * @return IssueHeaderDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_issue_headers($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(integer)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_issue_headers", $args);
	}


	/**
	 * Service Call: mc_project_get_users
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id, (integer) access
	 * @param mixed,... See function description for parameter options
	 * @return AccountDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_users($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_users", $args);
	}


	/**
	 * Service Call: mc_projects_get_user_accessible
	 * Parameter options:
	 * (string) username, (string) password
	 * @param mixed,... See function description for parameter options
	 * @return ProjectDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_projects_get_user_accessible($mixed = null) {
		$validParameters = array(
			"(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_projects_get_user_accessible", $args);
	}


	/**
	 * Service Call: mc_project_get_categories
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return StringArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_categories($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_categories", $args);
	}


	/**
	 * Service Call: mc_project_get_versions
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return ProjectVersionDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_versions($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_versions", $args);
	}


	/**
	 * Service Call: mc_project_version_add
	 * Parameter options:
	 * (string) username, (string) password, (ProjectVersionData) version
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_version_add($mixed = null) {
		$validParameters = array(
			"(string)(string)(ProjectVersionData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_version_add", $args);
	}


	/**
	 * Service Call: mc_project_version_update
	 * Parameter options:
	 * (string) username, (string) password, (integer) version_id, (ProjectVersionData) version
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_version_update($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(ProjectVersionData)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_version_update", $args);
	}


	/**
	 * Service Call: mc_project_version_delete
	 * Parameter options:
	 * (string) username, (string) password, (integer) version_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_version_delete($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_version_delete", $args);
	}


	/**
	 * Service Call: mc_project_get_released_versions
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return ProjectVersionDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_released_versions($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_released_versions", $args);
	}


	/**
	 * Service Call: mc_project_get_unreleased_versions
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return ProjectVersionDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_unreleased_versions($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_unreleased_versions", $args);
	}


	/**
	 * Service Call: mc_project_get_attachments
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return ProjectAttachmentDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_attachments($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_attachments", $args);
	}


	/**
	 * Service Call: mc_project_get_custom_fields
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return CustomFieldDefinitionDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_get_custom_fields($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_get_custom_fields", $args);
	}


	/**
	 * Service Call: mc_project_attachment_get
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_attachment_id
	 * @param mixed,... See function description for parameter options
	 * @return base64Binary
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_attachment_get($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_attachment_get", $args);
	}


	/**
	 * Service Call: mc_project_attachment_add
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id, (string) name, (string) title, (string) description, (string) file_type, (base64Binary) content
	 * @param mixed,... See function description for parameter options
	 * @return integer
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_attachment_add($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(string)(string)(string)(string)(base64Binary)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_attachment_add", $args);
	}


	/**
	 * Service Call: mc_project_attachment_delete
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_attachment_id
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_project_attachment_delete($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_project_attachment_delete", $args);
	}


	/**
	 * Service Call: mc_filter_get
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id
	 * @param mixed,... See function description for parameter options
	 * @return FilterDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_filter_get($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_filter_get", $args);
	}


	/**
	 * Service Call: mc_filter_get_issues
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id, (integer) filter_id, (integer) page_number, (integer) per_page
	 * @param mixed,... See function description for parameter options
	 * @return IssueDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_filter_get_issues($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(integer)(integer)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_filter_get_issues", $args);
	}


	/**
	 * Service Call: mc_filter_get_issue_headers
	 * Parameter options:
	 * (string) username, (string) password, (integer) project_id, (integer) filter_id, (integer) page_number, (integer) per_page
	 * @param mixed,... See function description for parameter options
	 * @return IssueHeaderDataArray
	 * @throws Exception invalid function signature message
	 */
	public function mc_filter_get_issue_headers($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(integer)(integer)(integer)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_filter_get_issue_headers", $args);
	}


	/**
	 * Service Call: mc_config_get_string
	 * Parameter options:
	 * (string) username, (string) password, (string) config_var
	 * @param mixed,... See function description for parameter options
	 * @return string
	 * @throws Exception invalid function signature message
	 */
	public function mc_config_get_string($mixed = null) {
		$validParameters = array(
			"(string)(string)(string)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_config_get_string", $args);
	}


	/**
	 * Service Call: mc_issue_checkin
	 * Parameter options:
	 * (string) username, (string) password, (integer) issue_id, (string) comment, (boolean) fixed
	 * @param mixed,... See function description for parameter options
	 * @return boolean
	 * @throws Exception invalid function signature message
	 */
	public function mc_issue_checkin($mixed = null) {
		$validParameters = array(
			"(string)(string)(integer)(string)(boolean)",
		);
		$args = func_get_args();
		$this->_checkArguments($args, $validParameters);
		return $this->__soapCall("mc_issue_checkin", $args);
	}


}}

?>