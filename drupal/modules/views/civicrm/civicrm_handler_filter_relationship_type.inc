<?php
// $Id$

/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.6                                                |
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


/*
 * Heavily based on anonymous code contribution. No claim.
 * CiviCRM Views Integration
 *
 * civicrm_handler_filter_relationship_type.inc
 * Filters Relationship Types, and is configured using the labels from the database
 *
 */
class civicrm_handler_filter_relationship_type extends views_handler_filter_in_operator {
  static $_relationshipType;
  function construct() {
    parent::construct();
    if (!self::$_relationshipType) {
      if (!civicrm_initialize()) {
        return;
      }
      require_once 'CRM/Core/PseudoConstant.php';
      $relationshipType_array = CRM_Core_PseudoConstant::relationshipType($columnName = 'name');

      // relationshipType() returns information about relations as array with fields
      // 'label_a_b', 'label_b_a', 'contact_type_a' and 'contact_type_b'.
      // We keep just 'label_a_b' for simplicity.

      $options = array();
      foreach ($relationshipType_array as $id => $value_array) {
        $options[$id] = $value_array['name_a_b'];
      }

      self::$_relationshipType = $options;
    }
  }

  function get_value_options() {
    if (!isset($this->value_options)) {
      $this->value_title = t('Relationship Type');
      $options = array();
      foreach (self::$_relationshipType as $id => $name) {
        $options[$id] = $name;
      }
      $this->value_options = $options;
    }
  }
}


