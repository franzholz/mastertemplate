<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$callingClassName = '\\TYPO3\\CMS\\Core\\Utility\\ExtensionManagementUtility';

if (
	class_exists($callingClassName) &&
	method_exists($callingClassName, 'extPath')
) {
	// nothing
} else {
	$callingClassName = 't3lib_extMgm';
}

call_user_func($callingClassName . '::addStaticFile', 'mastertemplate', 'static/master/', 'Master Template Constants Editor');
