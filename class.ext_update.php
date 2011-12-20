<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010-2010 Franz Holzinger (franz@ttproducts.de)
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/



/**
 * Class for updating the db
 *
 * $Id $
 *
 * @author	Franz Holzinger <franz@ttproducts.de>
 * @maintainer	Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage mastertemplate
 */
class ext_update  {

	/**
	 * Main function, returning the HTML content of the module
	 *
	 * @return	string		HTML
	 */
	function main()	{

		$select_fields = 'uid';
		$table = 'static_template';
		$where_clause = 'uid = 1000';

		$rowArray = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows($select_fields, $table, $where_clause);

		if (!is_array($rowArray) || !count($rowArray))	{

			$fileContent = t3lib_div::getUrl(
				t3lib_extMgm::extPath('mastertemplate') . 'ext_tables_static+adt.sql'
			);
			$instObj = new t3lib_install;
			$statements = $instObj->getStatementArray($fileContent,1);
			$statements_insert = $instObj->getTableInsertStatements($statements, $table);

			if (is_array($statements_insert))	{
				foreach($statements_insert as $v)	{
					$GLOBALS['TYPO3_DB']->admin_query($v);
				}
				$content = 'The Master Template has been added to the static templates';
			}
		} else {
			$content = 'The Master Template is already present.';
		}

		return $content;
	}


	/**
	 * access is always allowed
	 *
	 * @return	boolean		Always returns true
	 */
	function access() {
		return TRUE;
	}
}


// Include extension?
if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mastertemplate/class.ext_update.php'])	{
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mastertemplate/class.ext_update.php']);
}


?>
