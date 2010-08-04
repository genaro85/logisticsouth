<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Responsable class.  It uses the code-generated
	 * ResponsableDataGrid control which has meta-methods to help with
	 * easily creating/defining Responsable columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both responsable_list.php AND
	 * responsable_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class ResponsableListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Responsables
		/**
		 * @var ResponsableDataGrid dtgResponsables
		 */
		protected $dtgResponsables;

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
			$this->dtgResponsables = new ResponsableDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgResponsables->CssClass = 'datagrid';
			$this->dtgResponsables->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgResponsables->Paginator = new QPaginator($this->dtgResponsables);
			$this->dtgResponsables->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/responsable_edit.php';
			$this->dtgResponsables->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for RESPONSABLE's properties, or you
			// can traverse down QQN::RESPONSABLE() to display fields that are down the hierarchy)
			$this->dtgResponsables->MetaAddColumn(QQN::Responsable()->EMPLEADOIdEMPLEADOObject);
			$this->dtgResponsables->MetaAddColumn(QQN::Responsable()->LICENCIAIdLICENCIAObject);
			$this->dtgResponsables->MetaAddColumn('FechaInicio');
			$this->dtgResponsables->MetaAddColumn('FechaFin');
		}
	}
?>
