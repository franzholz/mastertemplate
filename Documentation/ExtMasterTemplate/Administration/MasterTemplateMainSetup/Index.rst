

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


Master template main setup
^^^^^^^^^^^^^^^^^^^^^^^^^^

The included main template constants and setup are:


Constants
"""""""""

::

     # cat=mastertemplate; type=string; label=Path to files: The path to the folder where the HTML template files are situated.
   mastertemplate.path = EXT:mastertemplate
   
   PAGE_TARGET = _top
   
   # @import 'EXT:mastertemplate/Configuration/TypoScript/adaptions/tt_content/constants.txt'
   # @import 'EXT:mastertemplate/Configuration/TypoScript/columns/2_3/constants.txt'


Setup
"""""

::

   @import 'EXT:mastertemplate/Configuration/TypoScript/temp/mainmenu/setup.txt'
   @import 'EXT:mastertemplate/Configuration/TypoScript/temp/submenu/setup.txt'
   
   @import 'EXT:mastertemplate/Configuration/TypoScript/temp/breadcrumb/setup.txt'
   @import 'EXT:mastertemplate/Configuration/TypoScript/temp/footer/setup.txt'
   @import 'EXT:mastertemplate/Configuration/TypoScript/temp/left/setup.txt'
   @import 'EXT:mastertemplate/Configuration/TypoScript/temp/logo/setup.txt'
   @import 'EXT:mastertemplate/Configuration/TypoScript/temp/right/setup.txt'
   
   @import 'EXT:mastertemplate/Configuration/TypoScript/define/config/setup.txt'
   @import 'EXT:mastertemplate/Configuration/TypoScript/define/header/setup.txt'
   
   @import 'EXT:mastertemplate/Configuration/TypoScript/adaptions/tt_content/setup.txt'
   
   @import 'EXT:mastertemplate/Configuration/TypoScript/columns/2_3/setup.txt'
   
   
   page = PAGE
   page.typeNum = 0
   
   
   page {
   
       includeCSS {
           # and now overlay with a more flexible declaration:
           default = {$mastertemplate.path}/Resources/Public/Css/default.css
           submenu = {$mastertemplate.path}/Resources/Public/Css/submenu.css
           mainmenu = {$mastertemplate.path}/Resources/Public/Css/mainmenu.css
       }
   
       10 = TEMPLATE
       10 {
           template= FILE
   
           template.file = {$mastertemplate.path}/html/mastertemplate.html
   
           workOnSubpart = DOCUMENT
   
           marks {
             LOGO       < temp.logo
             MAINMENU   < temp.mainmenu
             BREADCRUMB < temp.breadcrumb
             LEFT       < temp.left
             CONTENT    = CONTENT
             CONTENT {
                 table = tt_content
                 select.orderBy = sorting
                 select.where = colPos=0
                 select.languageField = sys_language_uid
             }
             RIGHT      < temp.right
             FOOTER     < temp.footer
           }
        }
   
       #999 = TEXT
       #999.value=master
   }

