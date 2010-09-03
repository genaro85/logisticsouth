<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ProductoEditFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the Producto class.  It uses the code-generated
 * ProductoMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a Producto columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both producto_edit.php AND
 * producto_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class ProductoEditForm extends ProductoEditFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Use the CreateFromPathInfo shortcut (this can also be done manually using the ProductoMetaControl constructor)
        // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
        $this->mctProducto = ProductoMetaControl::CreateFromPathInfo($this);

        // Call MetaControl's methods to create qcontrols based on Producto's data fields
        $this->lblIdPRODUCTO = $this->mctProducto->lblIdPRODUCTO_Create();
        $this->txtCodigoArancelario = $this->mctProducto->txtCodigoArancelario_Create();
        $this->txtDescripcion = $this->mctProducto->txtDescripcion_Create();
        $this->txtNumeroRegSanitario = $this->mctProducto->txtNumeroRegSanitario_Create();
        $this->txtVolumen = $this->mctProducto->txtVolumen_Create();
        $this->txtUnidad = $this->mctProducto->txtUnidad_Create();

        // Create Buttons and Actions on this Form
        $this->btnSave = new QButton($this);
        $this->btnSave->Text = QApplication::Translate('Guardar');
        $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
        $this->btnSave->CausesValidation = true;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = QApplication::Translate('Cancelar');
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = QApplication::Translate('Borrar');
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Seguro que desea BORRAR a') . ' ' . QApplication::Translate('Producto') . '?'));
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = $this->mctProducto->EditMode;
    }
    protected function RedirectToListPage() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/producto_list.php');
    }
}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// producto_edit.tpl.php as the included HTML template file
ProductoEditForm::Run('ProductoEditForm');
?>
