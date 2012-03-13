<?php

/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.0                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2011                                |
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
 +--------------------------------------------------------------------+
 | CiviLedger version 0.1
 +--------------------------------------------------------------------+
 | Copyright DarkOverlordOfData (c) 2012
 +--------------------------------------------------------------------+
 |                                                                    |
 | This file is a part of CiviLedger.                                 |
 |                                                                    |
 | CiviLedger is free software; you can copy, modify, and distribute  |
 | it under the terms of the GNU General Public License Version 3     |
 |                                                                    |
 +--------------------------------------------------------------------+
 */

/**
 * CiviCRM's Smarty gettext plugin
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2011
 * $Id$
 */

/** 
 * Smarty block function providing support for
 * CiviCRM's helptext mechanism
 *
 * @param array $params   template call's parameters
 * @param string $text    {ts} block contents from the template
 * @param object $smarty  the Smarty object
 *
 * @return string  the string, translated by gettext
 */
function smarty_block_help_text($params, $text, &$smarty)
{
    $id = $params['id'];
    if ( $id == $smarty->_tpl_vars['id'] ) {
        return "<div class='crm-help'>" . ts($text) . "</div>";
    } else {
        return null;
    }
}

