

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Troubleshooting
---------------

You see no Front End output. You can an exception:

Uncaught TYPO3 Exception

#1294587217: The page is not configured! [type=0][]. This means that
there is no TypoScript object of type PAGE with typeNum=0 configured.(
`More information
<http://typo3.org/go/exception/CMS/debug/1294587217>`_
)TYPO3\CMS\Core\Error\Http\ServiceUnavailableException thrown in file/
var/www/html/mysite/typo3\_src-6.2.0/typo3/sysext/frontend/Classes/Con
troller/TypoScriptFrontendController.php in line 2367.

::

   2 TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController::getConfigArray()
   /var/www/html/mysite/typo3_src-6.2.0/typo3/sysext/cms/tslib/index_ts.php:
   00167: // Get config if not already gotten
   00168: // After this, we should have a valid config-array ready
   00169: $TSFE->getConfigArray();
   00170: // Convert POST data to internal "renderCharset" if different from the metaCharset
   00171: $TSFE->convPOSTCharset();
      1 require("/var/www/html/mysite/typo3_src-6.2.0/typo3/sysext/cms/tslib/index_ts.php")

/var/www/html/mysite/typo3\_src-6.2.0/index.php:

::

   00039:  ->redirectToInstallerIfLocalConfigurationFileDoesNotExist();
   00040: 
   00041: require(PATH_tslib . 'index_ts.php');
   00042: ?>

Solution: Check all steps from above. Maybe you did not include the
“mastertemplate” setup from the page “HOME” or you did not copy the
files of the extension “mastertemplate” into the fileadmin folder. Use
the Typoscript object browser to verify the setup in the Template
Module of the TYPO3 back end. You must see an entry “page = PAGE”.


