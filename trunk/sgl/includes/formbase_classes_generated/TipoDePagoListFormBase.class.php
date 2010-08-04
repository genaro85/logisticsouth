<?php
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
	 * @subpackage FormBaseObjects
	 */
	abstract class TipoDePagoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list TipoDePagos
		/**
		 * @var TipoDePagoDataGrid dtgTipoDePagos
		 */
		protected $dtgTipoDePagos;

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
			$this->dtgTipoDePagos->MetaAddColumn('IdTIPODEPAGO');
			$this->dtgTipoDePagos->MetaAddColumn('Nombre');
		}
	}
?>
