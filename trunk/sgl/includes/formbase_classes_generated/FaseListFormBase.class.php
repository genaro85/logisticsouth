<?php
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
	 * @subpackage FormBaseObjects
	 */
	abstract class FaseListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Fases
		/**
		 * @var FaseDataGrid dtgFases
		 */
		protected $dtgFases;

		// Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}
//		protected function Form_Validate() {}

		protected function Form_Run() {
			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

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
			$this->dtgFases->MetaAddColumn('IdFASE');
			$this->dtgFases->MetaAddColumn('Nombre');
			$this->dtgFases->MetaAddColumn('Duracion');
			$this->dtgFases->MetaAddColumn('Icono');
			$this->dtgFases->MetaAddColumn(QQN::Fase()->PROCESOIdPROCESOObject);
		}
	}
?>
