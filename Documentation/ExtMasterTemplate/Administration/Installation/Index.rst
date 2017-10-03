.. include:: Images.txt

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


Installation
^^^^^^^^^^^^

1.) Install the extension 'mastertemplate' from the Extension
Manager.

|img-3|

|img-4|

2.) After the installation of mastertemplate you must make sure that
the extension “Fluid Styled Content” (extension key: fluid_styled_content) has been installed.

|img-5|

3.) Create a new page using the Page Module.

|img-6|

|img-7| |img-8a| |img-8b|

4.) Use the Template module (“Web->Template” extension “tstemplate”)
in this and the following steps. Go to the top level page of your
homepage and add a new main template for a new site (press the button
“Create template for a new site”).

|img-9|

|img-10|

Edit the whole template record.

Attention: Only the first template must have the root level checked.
This must be unchecked on all afterwards inserted sub templates. The
same must be taken care for with the “Clear Constants,
Setup” checkboxes one line above.

|img-11a|

|img-11b|

|img-12|

Change to the Page module. Click on your HOME page. Make a test if you see the 'HELLO WORLD!' page in the FE. Clear all the caches.

|img-13|

Then remove all these example lines from the setup:

::

   # Default PAGE object:d
   page = PAGE
   page.10 = TEXT
   page.10.value = HELLO WORLD!

Make sure that the root level is set to 1. The Constants and the Setup
should be completely removed.

|img-14|

5.) Click on the "Includes" tab. The “CSS Styled Content” must be included as the first element if
you have more. If you have a site with already included statics from
extensions, then you must use the arrows to move the “CSS Styled
Content” to the top on the left list.

|img-15|

6.) Now create a separate sysfolder with the name 'Templates' below
the page “HOME”.

|img-16|

Change the page type of the recently inserted page into “Folder”.

|img-17| Enter the page title “Templates” and click on the save
button.

|img-18|

Then create an empty template setup for the extension (“Create
extension template”).

|img-19|

Select the “Template” record from the List Module.

|img-20|

Rename the new template into 'mastertemplate'.

|img-21|

You must edit the template constants directly because the Constants
Editor has not yet been enabled for the mastertemplate.

|img-22|

The checkboxes remain all unchecked.

|img-23|

7.) If you want to use the Constants Editor to build the constants,
then you must include the 'Master Template Constants Editor' under
'Include static from extensions'. This is optional. You can skip this
step.

|img-24|

8.) Edit the whole template record “mastertemplate” you have just
created. You must insert the includes for the main mastertemplate
constants and setup part.

The constants shall be like this:

::

   <INCLUDE_TYPOSCRIPT: source="FILE: EXT:mastertemplate/static/constants.txt">

The setup shall contain this line on the top:

::

   <INCLUDE_TYPOSCRIPT: source="FILE: EXT:mastertemplate/static/setup.txt">

|img-25|

9.) You will want to change the constants “mastertemplate.path” and
set it to the folder relative to your TYPO3 file structure. This is
because you probably want to have your own CSS styles.

Add this line to the constants of the “mastertemplate” to your path:

::

   mastertemplate.path = fileadmin

Copy the folders html and css of this extension together with their
contents to your TYPO3 relative path, e.g. “fileadmin”.

10.) Go back to the page “home” and add the master template
modifications you have made inside of the “Templates”
sysfolder(“Include Basis Template”). The popup window of the search
box will look like this:

|img-26|

So include your modified mastertemplate file (under “Include Basis
Template”), which is placed in the Templates folder, into your root
template setup.

|img-27|

11.) Now clear all caches. The page should be visible in the Front End
now.

|img-28|

In the case of an error you will instead get the following screen.
Then you must go back and recheck all the former steps. Did you
install the extension “mastertemplate”? **Service Unavailable (503)**

**The page is not configured! [type=0][]. This means that there is no
TypoScript object of type PAGE with typeNum=0 configured.**

|img-29|

12.) You can modify the design in your own CSS files which shall
already be located under the fileadmin folder. It is not recommended
to modify the files of the extension folder of mastertemplate.

13.) Add more pages and contents.

You can insert the mastertemplate setup for several times on different
pages if you want to build more than one independant homepage on one
TYPO3 installation. Note: Each of these sites must again start with
its own root template.

