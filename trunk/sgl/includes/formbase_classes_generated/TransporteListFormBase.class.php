<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Transporte class.  It uses the code-generated
	 * TransporteDataGrid control which has meta-methods to help with
	 * easily creating/defining Transporte columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both transporte_list.php AND
	 * transporte_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class TransporteListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Transportes
		/**
		 * @var TransporteDataGrid dtgTransportes
		 */
		protected $dtgTransportes;

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
			$this->dtgTransportes = new TransporteDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTransportes->CssClass = 'datagrid';
			$this->dtgTransportes->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTransportes->Paginator = new QPaginator($this->dtgTransportes);
			$this->dtgTransportes->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/transporte_edit.php';
			$this->dtgTransportes->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for TRANSPORTE's properties, or you
			// can traverse down QQN::TRANSPORTE() to display fields that are down the hierarchy)
			$this->dtgTransportes->MetaAddColumn('IdTRANSPORTE');
			$this->dtgTransportes->MetaAddColumn('Nombre');
			$this->dtgTransportes->MetaAddColumn('Direccion');
			$this->dtgTransportes->MetaAddColumn('Telefono');
			$this->dtgTransportes->MetaAddColumn(QQN::Transporte()->PAISIdPAISObject);
		}
	}
?>
