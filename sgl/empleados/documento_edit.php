<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/DocumentoEditFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the Documento class.  It uses the code-generated
 * DocumentoMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a Documento columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both documento_edit.php AND
 * documento_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class DocumentoEditForm extends DocumentoEditFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}

    protected function RedirectToListPage() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__ . '/documento_list.php');
    }
}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// documento_edit.tpl.php as the included HTML template file
DocumentoEditForm::Run('DocumentoEditForm');
?>