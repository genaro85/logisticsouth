<?php
	// Load the QCubed Development Framework
	require('../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/TipoDePagoListFormBase.class.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the TipoDePago class.  It uses the code-generated
	 * TipoDePagoDataGrid control which has meta-methods to help with
	 * easily creating/defining TipoDePago columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both tipo_de_pago_list.php AND
	 * tipo_de_pago_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class TipoDePagoListForm extends TipoDePagoListFormBase {
		// Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
			
			// Instantiate the Meta DataGrid
			$this->dtgTipoDePagos = new TipoDePagoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgTipoDePagos->CssClass = 'datagrid';
			$this->dtgTipoDePagos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgTipoDePagos->Paginator = new QPaginator($this->dtgTipoDePagos);
			$this->dtgTipoDePagos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/tipo_de_pago_edit.php';
			$this->dtgTipoDePagos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for TIPO_DE_PAGO's properties, or you
			// can traverse down QQN::TIPO_DE_PAGO() to display fields that are down the hierarchy)
			//$this->dtgTipoDePagos->MetaAddColumn('IdTIPODEPAGO');
			$this->dtgTipoDePagos->MetaAddColumn('Nombre', 'Name=Modalidad');
                }
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// tipo_de_pago_list.tpl.php as the included HTML template file
	TipoDePagoListForm::Run('TipoDePagoListForm');
?>