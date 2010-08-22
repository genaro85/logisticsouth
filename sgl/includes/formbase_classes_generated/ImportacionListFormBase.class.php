<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Importacion class.  It uses the code-generated
	 * ImportacionDataGrid control which has meta-methods to help with
	 * easily creating/defining Importacion columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both importacion_list.php AND
	 * importacion_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class ImportacionListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Importacions
		/**
		 * @var ImportacionDataGrid dtgImportacions
		 */
		protected $dtgImportacions;

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
			$this->dtgImportacions = new ImportacionDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgImportacions->CssClass = 'datagrid';
			$this->dtgImportacions->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgImportacions->Paginator = new QPaginator($this->dtgImportacions);
			$this->dtgImportacions->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/importacion_edit.php';
			$this->dtgImportacions->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for IMPORTACION's properties, or you
			// can traverse down QQN::IMPORTACION() to display fields that are down the hierarchy)
			$this->dtgImportacions->MetaAddColumn(QQN::Importacion()->TRANSPORTEIdTRANSPORTEObject);
			$this->dtgImportacions->MetaAddColumn(QQN::Importacion()->LICENCIAIdLICENCIAObject);
			$this->dtgImportacions->MetaAddColumn('FechaDeSalida');
			$this->dtgImportacions->MetaAddColumn('FechaLlegada');
			$this->dtgImportacions->MetaAddColumn('Tipo');
			$this->dtgImportacions->MetaAddColumn(QQN::Importacion()->PAISOrigenObject);
			$this->dtgImportacions->MetaAddColumn(QQN::Importacion()->PAISDestinoObject);
		}
	}
?>
