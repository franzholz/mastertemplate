<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');


if (TYPO3_MODE=='BE')	{

	// allow the import of records into static_template
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/mod/tools/em/index.php']['checkDBinsert'][] = 'EXT:mastertemplate/hooks/class.tx_mastertemplate_hooks_em.php:&tx_mastertemplate_hooks_em';
}


?>