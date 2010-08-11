<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/FaseListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Fase class.  It uses the code-generated
 * FaseDataGrid control which has meta-methods to help with
 * easily creating/defining Fase columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both fase_list.php AND
 * fase_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class FaseListForm extends FaseListFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgFases = new FaseDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgFases->CssClass = 'datagrid';
        $this->dtgFases->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgFases->Paginator = new QPaginator($this->dtgFases);
        $this->dtgFases->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid

        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fase_edit.php';
        $this->dtgFases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for FASE's properties, or you
        // can traverse down QQN::FASE() to display fields that are down the hierarchy)
        //$this->dtgFases->MetaAddColumn('IdFASE');
        $this->dtgFases->MetaAddColumn('Nombre');
        $this->dtgFases->MetaAddColumn('Duracion');
        $this->dtgFases->MetaAddColumn('Icono');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// fase_list.tpl.php as the included HTML template file
FaseListForm::Run('FaseListForm');
?>