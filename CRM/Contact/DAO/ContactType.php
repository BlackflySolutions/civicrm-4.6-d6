<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.6                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2015                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 *
 * Generated from xml/schema/CRM/Contact/ContactType.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Contact_DAO_ContactType extends CRM_Core_DAO {
  /**
   * static instance to hold the table name
   *
   * @var string
   */
  static $_tableName = 'civicrm_contact_type';
  /**
   * static instance to hold the field values
   *
   * @var array
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   */
  static $_log = false;
  /**
   * Contact Type ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Internal name of Contact Type (or Subtype).
   *
   * @var string
   */
  public $name;
  /**
   * localized Name of Contact Type.
   *
   * @var string
   */
  public $label;
  /**
   * localized Optional verbose description of the type.
   *
   * @var text
   */
  public $description;
  /**
   * URL of image if any.
   *
   * @var string
   */
  public $image_URL;
  /**
   * Optional FK to parent contact type.
   *
   * @var int unsigned
   */
  public $parent_id;
  /**
   * Is this entry active?
   *
   * @var boolean
   */
  public $is_active;
  /**
   * Is this contact type a predefined system type
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   * class constructor
   *
   * @return civicrm_contact_type
   */
  function __construct() {
    $this->__table = 'civicrm_contact_type';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'parent_id', 'civicrm_contact_type', 'id');
    }
    return self::$_links;
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact Type ID') ,
          'description' => 'Contact Type ID',
          'required' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name') ,
          'description' => 'Internal name of Contact Type (or Subtype).',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'label' => array(
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contact Type Label') ,
          'description' => 'localized Name of Contact Type.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Contact Type Description') ,
          'description' => 'localized Optional verbose description of the type.',
          'rows' => 2,
          'cols' => 60,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'image_URL' => array(
          'name' => 'image_URL',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Contact Type Image URL') ,
          'description' => 'URL of image if any.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
        ) ,
        'parent_id' => array(
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact Type Parent') ,
          'description' => 'Optional FK to parent contact type.',
          'FKClassName' => 'CRM_Contact_DAO_ContactType',
          'pseudoconstant' => array(
            'table' => 'civicrm_contact_type',
            'keyColumn' => 'id',
            'labelColumn' => 'label',
            'condition' => 'parent_id IS NULL',
          )
        ) ,
        'is_active' => array(
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Contact Type Is Active?') ,
          'description' => 'Is this entry active?',
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Contact Type is Reserved?') ,
          'description' => 'Is this contact type a predefined system type',
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @return array
   */
  static function &fieldKeys() {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'name' => 'name',
        'label' => 'label',
        'description' => 'description',
        'image_URL' => 'image_URL',
        'parent_id' => 'parent_id',
        'is_active' => 'is_active',
        'is_reserved' => 'is_reserved',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['contact_type'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['contact_type'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
