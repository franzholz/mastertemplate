<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Franz Holzinger (franz@ttproducts.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Part of the mastertemplate (Static Template for Websites) extension.
 *
 * hook functions for the TYPO3 cms
 *
 * $Id$
 *
 * @author	Franz Holzinger <franz@ttproducts.de>
 * @maintainer	Franz Holzinger <franz@ttproducts.de>
 * @package TYPO3
 * @subpackage template
 *
 *
 */


class tx_mastertemplate_hooks_em implements em_index_checkDatabaseInsertsHook {

	public function preProcessDatabaseInserts ($extKey, array $extInfo, $table, t3lib_install $instObj, SC_mod_tools_em_index $parent) {
		$result = FALSE;

		if ($extKey == 'mastertemplate' && $table == 'static_template') {
			$rowArray = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows('uid', $table, 'uid=1000');
			if (count($rowArray)) {
				$result = FALSE;
			} else {
				$result = TRUE;
			}
		}
		return $result;
	}
}


if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mastertemplate/hooks/class.tx_mastertemplate_hooks_em.php'])	{
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mastertemplate/hooks/class.tx_mastertemplate_hooks_em.php']);
}

?>