<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Empresa class.  It uses the code-generated
	 * EmpresaDataGrid control which has meta-methods to help with
	 * easily creating/defining Empresa columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both empresa_list.php AND
	 * empresa_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class EmpresaListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Empresas
		/**
		 * @var EmpresaDataGrid dtgEmpresas
		 */
		protected $dtgEmpresas;

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
			$this->dtgEmpresas = new EmpresaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgEmpresas->CssClass = 'datagrid';
			$this->dtgEmpresas->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgEmpresas->Paginator = new QPaginator($this->dtgEmpresas);
			$this->dtgEmpresas->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/empresa_edit.php';
			$this->dtgEmpresas->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for EMPRESA's properties, or you
			// can traverse down QQN::EMPRESA() to display fields that are down the hierarchy)
			$this->dtgEmpresas->MetaAddColumn('IdEMPRESA');
			$this->dtgEmpresas->MetaAddColumn('Nombre');
			$this->dtgEmpresas->MetaAddColumn('Rif');
			$this->dtgEmpresas->MetaAddColumn('Direccion');
			$this->dtgEmpresas->MetaAddColumn('Telefono');
			$this->dtgEmpresas->MetaAddColumn('Email');
			$this->dtgEmpresas->MetaAddColumn('Login');
			$this->dtgEmpresas->MetaAddColumn('Password');
		}
	}
?>
