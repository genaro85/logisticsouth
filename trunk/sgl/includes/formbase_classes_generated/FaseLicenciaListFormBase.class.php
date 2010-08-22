<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the FaseLicencia class.  It uses the code-generated
	 * FaseLicenciaDataGrid control which has meta-methods to help with
	 * easily creating/defining FaseLicencia columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both fase_licencia_list.php AND
	 * fase_licencia_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class FaseLicenciaListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list FaseLicencias
		/**
		 * @var FaseLicenciaDataGrid dtgFaseLicencias
		 */
		protected $dtgFaseLicencias;

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
			$this->dtgFaseLicencias = new FaseLicenciaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgFaseLicencias->CssClass = 'datagrid';
			$this->dtgFaseLicencias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgFaseLicencias->Paginator = new QPaginator($this->dtgFaseLicencias);
			$this->dtgFaseLicencias->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/fase_licencia_edit.php';
			$this->dtgFaseLicencias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for FASE_LICENCIA's properties, or you
			// can traverse down QQN::FASE_LICENCIA() to display fields that are down the hierarchy)
			$this->dtgFaseLicencias->MetaAddColumn(QQN::FaseLicencia()->LICENCIAIdLICENCIAObject);
			$this->dtgFaseLicencias->MetaAddColumn('FASEFechaInicio');
			$this->dtgFaseLicencias->MetaAddColumn('FASEFechaFin');
			$this->dtgFaseLicencias->MetaAddColumn(QQN::FaseLicencia()->FASEIdFASEObject);
		}
	}
?>
