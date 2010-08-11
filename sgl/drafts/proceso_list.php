<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ProcesoListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Proceso class.  It uses the code-generated
 * ProcesoDataGrid control which has meta-methods to help with
 * easily creating/defining Proceso columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both proceso_list.php AND
 * proceso_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class ProcesoListForm extends ProcesoListFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}
    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgProcesos = new ProcesoDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgProcesos->CssClass = 'datagrid';
        $this->dtgProcesos->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgProcesos->Paginator = new QPaginator($this->dtgProcesos);
        $this->dtgProcesos->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid

        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/proceso_edit.php';
        $this->dtgProcesos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for PROCESO's properties, or you
        // can traverse down QQN::PROCESO() to display fields that are down the hierarchy)
        $this->dtgProcesos->MetaAddColumn('Nombre');
        $this->dtgProcesos->MetaAddColumn('Duracion');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// proceso_list.tpl.php as the included HTML template file
ProcesoListForm::Run('ProcesoListForm');
?>