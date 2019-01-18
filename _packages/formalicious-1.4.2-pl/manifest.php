<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'Formalicious is proprietary software, developed by Sterc and distributed through modmore.com. By purchasing Formalicious via https://www.modmore.com/formalicious/, you have received a usage license for a single (1) MODX Revolution installation, including one year (starting on date of purchase) of email support.

While we hope Formalicious is useful to you and we will try to help you successfully use Formalicious, modmore or Sterc is not liable for loss of revenue, data, damages or other financial loss resulting from the installation or use of Formalicious.

By using and installing this package, you acknowledge that you shall only use this on a single MODX installation.

Redistribution in any shape or form is strictly prohibited. You may customize or change the provided source code to tailor Formalicious for your own use, as long as no attempt is made to remove license protection measures. By changing source code you acknowledge you void the right to support unless coordinated with modmore support.
',
    'readme' => '--------------------
Formalicious
--------------------
Author: Sterc <modx@sterc.nl>
--------------------

Formalicious is the most powerful and easiest MODX form builder, with built-in multi-step forms, 8 field types, validation and the ability to use hooks and other advanced FormIt features.
',
    'changelog' => 'Version 1.4.2-pl
--------------------------
- Fixed multi-step radiobuttons/checkboxes/selects
- Refactored ExtJs

Version 1.4.1-pl
--------------------------
- Create database fields on update

Version 1.4.0-pl
--------------------------
- Add field description
- Hide advanced tab based on permissions
- Add heading & description fields
- Add field description
- Change fiarcontent from varchar to text for bigger mails


Version 1.3.1-pl
--------------------------
- Add system setting for disable form saving on install
- Change fiarcontent from varchar to text

Version 1.3.0-pl
--------------------------
- Fixed phptype of some fields in schema of tables (PHP 7 compatibility)
- Added system setting to disable overall form saving functionality
- Added russian lexicon

Version 1.2.1-pl (October 2017)
--------------------------
- Remove the limit from the ContentBlocks input field
- Hide autoreply options when autoreply checkbox is unchecked

Version 1.2.0-pl (August 2nd, 2017)
--------------------------
- Removing default limit from fiaremailto field (#31)
- Add back button to form update view
- Add duplicate option to forms grid (#32)
- Update grid action buttons to use modx font-awesome icons
- Make add step/field buttons more visible
- Add preview option to form fields tab
- Add saveTmpFiles FormIt property to default formTpl
- Add formName FormIt property to default formTpl
- Prefix fiar-attachment field with modx base_path
- Only add email hook when emailto is not empty
- Remove default limit of 20 from field-values grid
- Check for common \'spam,email,redirect\' hooks added by Formalicious when saving posthooks
- Add ID field to form-fields grid
- Make sure prehooks are run before the renderForm snippet

Version 1.1.0-pl (April 19th, 2017)
--------------------------
- Fix setting placeholder for stepParam parameter for renderForm
- Show message when trying to display unpublished form (#6)
- Update radio and checkbox chunks to use correct Bootstrap classes (#28)
- Allow emailTpl and fiarTpl to be overwritten with renderForm snippet parameters (#23)
- Add validate and customValidators parameters to renderForm and formTpl (#23)

Version 1.0.1-pl (February 3rd, 2017)
--------------------------
- Added ContentBlocks support (thanks Mark!)
- Fixed installation issues with MODX installations with custom table-prefixes

Version 1.0.0-pl (February 1st, 2017)
--------------------------
- XS-4 New documentation
- XS-11 Changed height of several dialog windows
- XS-12 Spacing adjustments
- XS-19 Gave the default emails a lighter grey
- XS-20 Modified all en/nl lexicons
- XS-21 Fixed inline editing (removed it)

Version 1.0.0-RC2 (January 27th, 2017)
--------------------------
- [#28] Fixed oldstyle actions
- [#29] Improved this very changelog
- [#40] Create a readme
- [#41] New logo for the modmore site!
- [#XS-42] Autoheight for new-field dialog

Version 1.0.0-RC1 (January 26th, 2017)
--------------------------
- [#34] Improved handling of empty fields
- [#37] Radio button # Select # Checkbox options are now required
- [#38] Allowed files are now mentioned
- [#36] Improved default emails
- [#32] Unused description field is now removed
- [#31] Improved placeholder field usage
- [#30] Mention context-NAME in the "Redirect to" field when creating a new form
- [#27] Fixed file upload in multistep form
- [#22] Improved emailTpl
- [#20 + #23 + #35] Improved styling of buttons
- [#17] Fixed category_id fallback
- [#9 + #12] Fixed empty fields in multistep form
- [#13] Fixed email validation
- [#10] Fixed adding parameters not working properly
- [#7] Now shipped with TV
- [#8] Fixed uninstallation proces
- [#4] "Update type" dialog is now bigger
- [#2] Fixed select form-email-field when creating a form
- [#1] Fixed empty field when creating a form
- [#6] Improved adding fields
- [#5] Improved step-creation flow
- [#3] Replaced form-description with "Email header text"

Version 0.6.0 (2016)
--------------------------
- Create form categories
- Ability to create form steps
- Ability to save forms in FormIt (FormIt V2.2.2#) CMP
- Added ability to setup autoresponder in form
- Updated lexicons
',
    'setup-options' => 'formalicious-1.4.2-pl/setup-options.php',
    'requires' => 
    array (
      'formit' => '>=4.1.1',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '59f50cf7a354b2f2d47fb3dbc3517e02',
      'native_key' => 'formalicious',
      'filename' => 'modNamespace/e91263c83b5341f095ed33bdab50fe07.vehicle',
      'namespace' => 'formalicious',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4d4bb66eb5c0169e1153f26f75b2f750',
      'native_key' => 'formalicious.source',
      'filename' => 'modSystemSetting/873618e70c6dfcfb1162c5b9b180b8f1.vehicle',
      'namespace' => 'formalicious',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '4bc0df994b61e72fe2ea5bf940b38915',
      'native_key' => 'formalicious.option.allow_savesubmittedforms',
      'filename' => 'modSystemSetting/4a9b4f0eb30c877683349658ecd58ed9.vehicle',
      'namespace' => 'formalicious',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'e29cbbdbc4584da53c2d0a2497b0439d',
      'native_key' => NULL,
      'filename' => 'modCategory/82374b896e249e7593c4b69bcf087aee.vehicle',
      'namespace' => 'formalicious',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modMenu',
      'guid' => 'ed74d061727a65fff8bf810eb470d326',
      'native_key' => 'Formalicious',
      'filename' => 'modMenu/34d637c3566614abafaae7d32ff2703a.vehicle',
      'namespace' => 'formalicious',
    ),
  ),
);