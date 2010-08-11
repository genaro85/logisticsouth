<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/AdministradorListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Administrador class.  It uses the code-generated
 * AdministradorDataGrid control which has meta-methods to help with
 * easily creating/defining Administrador columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both administrador_list.php AND
 * administrador_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class AdministradorListForm extends AdministradorListFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgAdministradors = new AdministradorDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgAdministradors->CssClass = 'datagrid';
        $this->dtgAdministradors->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgAdministradors->Paginator = new QPaginator($this->dtgAdministradors);
        $this->dtgAdministradors->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid

        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/administrador_edit.php';
        $this->dtgAdministradors->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for ADMINISTRADOR's properties, or you
        // can traverse down QQN::ADMINISTRADOR() to display fields that are down the hierarchy)
        //$this->dtgAdministradors->MetaAddColumn('IdADMINISTRADOR');
        $this->dtgAdministradors->MetaAddColumn('Cedula');
        $this->dtgAdministradors->MetaAddColumn('Nombre');
        $this->dtgAdministradors->MetaAddColumn('Apellido');
        $this->dtgAdministradors->MetaAddColumn('Login');
        $this->dtgAdministradors->MetaAddColumn('Password');
    }
}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// administrador_list.tpl.php as the included HTML template file
AdministradorListForm::Run('AdministradorListForm');
?>