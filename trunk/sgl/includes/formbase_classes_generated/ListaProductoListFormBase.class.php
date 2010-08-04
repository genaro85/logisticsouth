<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the ListaProducto class.  It uses the code-generated
	 * ListaProductoDataGrid control which has meta-methods to help with
	 * easily creating/defining ListaProducto columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both lista_producto_list.php AND
	 * lista_producto_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class ListaProductoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list ListaProductos
		/**
		 * @var ListaProductoDataGrid dtgListaProductos
		 */
		protected $dtgListaProductos;

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
			$this->dtgListaProductos = new ListaProductoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgListaProductos->CssClass = 'datagrid';
			$this->dtgListaProductos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgListaProductos->Paginator = new QPaginator($this->dtgListaProductos);
			$this->dtgListaProductos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/lista_producto_edit.php';
			$this->dtgListaProductos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for LISTA_PRODUCTO's properties, or you
			// can traverse down QQN::LISTA_PRODUCTO() to display fields that are down the hierarchy)
			$this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->LICENCIAIdLICENCIAObject);
			$this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->PRODUCTOIdPRODUCTOObject);
			$this->dtgListaProductos->MetaAddColumn('PRODUCTOCantidad');
			$this->dtgListaProductos->MetaAddColumn('PRODUCTOVolumen');
			$this->dtgListaProductos->MetaAddColumn('PRODUCTOUnidad');
			$this->dtgListaProductos->MetaAddColumn('PRODUCTOCostoUnitario');
		}
	}
?>
