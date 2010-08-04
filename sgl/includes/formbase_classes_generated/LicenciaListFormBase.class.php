<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Licencia class.  It uses the code-generated
	 * LicenciaDataGrid control which has meta-methods to help with
	 * easily creating/defining Licencia columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both licencia_list.php AND
	 * licencia_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class LicenciaListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Licencias
		/**
		 * @var LicenciaDataGrid dtgLicencias
		 */
		protected $dtgLicencias;

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
			$this->dtgLicencias = new LicenciaDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgLicencias->CssClass = 'datagrid';
			$this->dtgLicencias->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgLicencias->Paginator = new QPaginator($this->dtgLicencias);
			$this->dtgLicencias->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/licencia_edit.php';
			$this->dtgLicencias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for LICENCIA's properties, or you
			// can traverse down QQN::LICENCIA() to display fields that are down the hierarchy)
			$this->dtgLicencias->MetaAddColumn('IdLICENCIA');
			$this->dtgLicencias->MetaAddColumn(QQN::Licencia()->EMPRESAIdEMPRESAObject);
			$this->dtgLicencias->MetaAddColumn(QQN::Licencia()->PROVEEDORIdPROVEEDORObject);
			$this->dtgLicencias->MetaAddColumn('FechaInicio');
			$this->dtgLicencias->MetaAddColumn('FechaFin');
			$this->dtgLicencias->MetaAddColumn('FechaFinEstimada');
			$this->dtgLicencias->MetaAddColumn('NumeroProforma');
			$this->dtgLicencias->MetaAddColumn('NumeroCNP');
			$this->dtgLicencias->MetaAddColumn('VencimientoCNP');
			$this->dtgLicencias->MetaAddColumn('Status');
			$this->dtgLicencias->MetaAddColumn('FormaPago');
			$this->dtgLicencias->MetaAddColumn('Tipo');
			$this->dtgLicencias->MetaAddColumn('Flete');
			$this->dtgLicencias->MetaAddColumn('Seguro');
			$this->dtgLicencias->MetaAddColumn(QQN::Licencia()->PROCESOIdPROCESOObject);
		}
	}
?>
