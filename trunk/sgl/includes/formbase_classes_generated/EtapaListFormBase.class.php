<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Etapa class.  It uses the code-generated
	 * EtapaDataGrid control which has meta-methods to help with
	 * easily creating/defining Etapa columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both etapa_list.php AND
	 * etapa_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class EtapaListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Etapas
		/**
		 * @var EtapaDataGrid dtgEtapas
		 */
		protected $dtgEtapas;

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
			$this->dtgEtapas = new EtapaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEtapas->CssClass = 'datagrid';
			$this->dtgEtapas->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEtapas->Paginator = new QPaginator($this->dtgEtapas);
			$this->dtgEtapas->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/etapa_edit.php';
			$this->dtgEtapas->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for ETAPA's properties, or you
			// can traverse down QQN::ETAPA() to display fields that are down the hierarchy)
			$this->dtgEtapas->MetaAddColumn('IdETAPA');
			$this->dtgEtapas->MetaAddColumn(QQN::Etapa()->FASEIdFASEObject);
			$this->dtgEtapas->MetaAddColumn(QQN::Etapa()->PROCESOIdPROCESOObject);
		}
	}
?>
