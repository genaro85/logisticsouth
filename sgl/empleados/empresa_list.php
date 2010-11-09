<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/EmpresaListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Empresa class.  It uses the code-generated
 * EmpresaDataGrid control which has meta-methods to help with
 * easily creating/defining Empresa columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both empresa_list.php AND
 * empresa_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class EmpresaListForm extends EmpresaListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgEmpresas = new EmpresaDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgEmpresas->CssClass = 'datagrid';
        $this->dtgEmpresas->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgEmpresas->Paginator = new QPaginator($this->dtgEmpresas);
        $this->dtgEmpresas->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid
        // Create an Edit Column
        //$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__ . '/empresa_edit.php';
        //$this->dtgEmpresas->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for EMPRESA's properties, or you
        // can traverse down QQN::EMPRESA() to display fields that are down the hierarchy)
        //$this->dtgEmpresas->MetaAddColumn('IdEMPRESA');
        $this->dtgEmpresas->MetaAddColumn('Nombre','Name=Empresa');
        $this->dtgEmpresas->MetaAddColumn('Rif','Name=R.I.F');
        $this->dtgEmpresas->MetaAddColumn('Direccion','Name=Dirección');
        $this->dtgEmpresas->MetaAddColumn('Telefono','Name=Teléfono');
        $this->dtgEmpresas->MetaAddColumn('Email');
        $this->dtgEmpresas->MetaAddColumn('Login','Name=Nombre de Usuario');
        $this->dtgEmpresas->MetaAddColumn('Password','Name=Contraseña');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// empresa_list.tpl.php as the included HTML template file
EmpresaListForm::Run('EmpresaListForm');
?>