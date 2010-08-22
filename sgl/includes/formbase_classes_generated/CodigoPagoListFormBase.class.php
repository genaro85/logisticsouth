<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the CodigoPago class.  It uses the code-generated
	 * CodigoPagoDataGrid control which has meta-methods to help with
	 * easily creating/defining CodigoPago columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both codigo_pago_list.php AND
	 * codigo_pago_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class CodigoPagoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list CodigoPagos
		/**
		 * @var CodigoPagoDataGrid dtgCodigoPagos
		 */
		protected $dtgCodigoPagos;

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
			$this->dtgCodigoPagos = new CodigoPagoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCodigoPagos->CssClass = 'datagrid';
			$this->dtgCodigoPagos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCodigoPagos->Paginator = new QPaginator($this->dtgCodigoPagos);
			$this->dtgCodigoPagos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/codigo_pago_edit.php';
			$this->dtgCodigoPagos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for CODIGO_PAGO's properties, or you
			// can traverse down QQN::CODIGO_PAGO() to display fields that are down the hierarchy)
			$this->dtgCodigoPagos->MetaAddColumn(QQN::CodigoPago()->LICENCIAIdLICENCIAObject);
			$this->dtgCodigoPagos->MetaAddColumn(QQN::CodigoPago()->TIPODEPAGOIdTIPODEPAGOObject);
			$this->dtgCodigoPagos->MetaAddColumn('NumRef');
			$this->dtgCodigoPagos->MetaAddColumn('Fecha');
			$this->dtgCodigoPagos->MetaAddColumn('Divisa');
			$this->dtgCodigoPagos->MetaAddColumn('Monto');
		}
	}
?>
