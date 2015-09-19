

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


Adaptions to the setup
^^^^^^^^^^^^^^^^^^^^^^

You can modify the template setup of the mastertemplate to your needs.
E.g. you want to have a different output in your left column. Just
overwrite the setup which the mastertemplate brings to you.

::

   page {
     10 {
         marks {
              LEFT = COA
              LEFT < styles.content.getLeft
         }
     }
   }

