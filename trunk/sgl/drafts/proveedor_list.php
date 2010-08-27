<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ProveedorListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Proveedor class.  It uses the code-generated
 * ProveedorDataGrid control which has meta-methods to help with
 * easily creating/defining Proveedor columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both proveedor_list.php AND
 * proveedor_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class ProveedorListForm extends ProveedorListFormBase {

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgProveedors = new ProveedorDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgProveedors->CssClass = 'datagrid';
        $this->dtgProveedors->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgProveedors->Paginator = new QPaginator($this->dtgProveedors);
        $this->dtgProveedors->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid
        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/proveedor_edit.php';
        $this->dtgProveedors->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for PROVEEDOR's properties, or you
        // can traverse down QQN::PROVEEDOR() to display fields that are down the hierarchy)
        //$this->dtgProveedors->MetaAddColumn('IdPROVEEDOR');
        $this->dtgProveedors->MetaAddColumn('Nombre');
        $this->dtgProveedors->MetaAddColumn('Direccion', 'Name=Dirección');
        $this->dtgProveedors->MetaAddColumn('Telefono', 'Name=Teléfono');
        $this->dtgProveedors->MetaAddColumn('Email');
        $this->dtgProveedors->MetaAddColumn(QQN::Proveedor()->PAISIdPAISObject->Nombre, 'Name=País');
    }

// Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}
//		protected function Form_Create() {}
}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// proveedor_list.tpl.php as the included HTML template file
ProveedorListForm::Run('ProveedorListForm');
?>