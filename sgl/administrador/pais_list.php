<?php
	// Load the QCubed Development Framework
	require('../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/PaisListFormBase.class.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Pais class.  It uses the code-generated
	 * PaisDataGrid control which has meta-methods to help with
	 * easily creating/defining Pais columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both pais_list.php AND
	 * pais_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class PaisListForm extends PaisListFormBase {
		// Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}
            		protected function Form_Create() {
			parent::Form_Create();

			// Instantiate the Meta DataGrid
			$this->dtgPaises = new PaisDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgPaises->CssClass = 'datagrid';
			$this->dtgPaises->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgPaises->Paginator = new QPaginator($this->dtgPaises);
			$this->dtgPaises->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/pais_edit.php';
			$this->dtgPaises->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for PAIS's properties, or you
			// can traverse down QQN::PAIS() to display fields that are down the hierarchy)
			//$this->dtgPaises->MetaAddColumn('IdPAIS','Name=ID');
			$this->dtgPaises->MetaAddColumn('Nombre', 'Name=País');
		}

	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// pais_list.tpl.php as the included HTML template file
	PaisListForm::Run('PaisListForm');
?>