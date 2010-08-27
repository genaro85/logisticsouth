<?php
	// Load the QCubed Development Framework
	require('../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/TransporteListFormBase.class.php');

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
	 * @subpackage Drafts
	 */
	class TransporteListForm extends TransporteListFormBase {
		// Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}
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
			//$this->dtgTransportes->MetaAddColumn('IdTRANSPORTE');
			$this->dtgTransportes->MetaAddColumn('Nombre');
			$this->dtgTransportes->MetaAddColumn('Direccion', 'Name=Dirección');
			$this->dtgTransportes->MetaAddColumn('Telefono', 'Name=Teléfono');
			$this->dtgTransportes->MetaAddColumn(QQN::Transporte()->PAISIdPAISObject, 'Name=País');
		}
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// transporte_list.tpl.php as the included HTML template file
	TransporteListForm::Run('TransporteListForm');
?>