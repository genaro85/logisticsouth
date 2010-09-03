<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/EmpleadoListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Empleado class.  It uses the code-generated
 * EmpleadoDataGrid control which has meta-methods to help with
 * easily creating/defining Empleado columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both empleado_list.php AND
 * empleado_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class EmpleadoListForm extends EmpleadoListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgEmpleados = new EmpleadoDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgEmpleados->CssClass = 'datagrid';
        $this->dtgEmpleados->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgEmpleados->Paginator = new QPaginator($this->dtgEmpleados);
        $this->dtgEmpleados->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid
        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/empleado_edit.php';
        $this->dtgEmpleados->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for EMPLEADO's properties, or you
        // can traverse down QQN::EMPLEADO() to display fields that are down the hierarchy)
        //$this->dtgEmpleados->MetaAddColumn('IdEMPLEADO');
        $this->dtgEmpleados->MetaAddColumn('Nombre');
        $this->dtgEmpleados->MetaAddColumn('Apellido');
        $this->dtgEmpleados->MetaAddColumn('Cedula');
        $this->dtgEmpleados->MetaAddColumn('Login');
        $this->dtgEmpleados->MetaAddColumn('Password');
        $this->dtgEmpleados->MetaAddColumn('Email');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// empleado_list.tpl.php as the included HTML template file
EmpleadoListForm::Run('EmpleadoListForm');
?>