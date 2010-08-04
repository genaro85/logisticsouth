<?php
	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Producto class.  It uses the code-generated
	 * ProductoDataGrid control which has meta-methods to help with
	 * easily creating/defining Producto columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both producto_list.php AND
	 * producto_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage FormBaseObjects
	 */
	abstract class ProductoListFormBase extends QForm {
		// Local instance of the Meta DataGrid to list Productos
		/**
		 * @var ProductoDataGrid dtgProductos
		 */
		protected $dtgProductos;

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
			$this->dtgProductos = new ProductoDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgProductos->CssClass = 'datagrid';
			$this->dtgProductos->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgProductos->Paginator = new QPaginator($this->dtgProductos);
			$this->dtgProductos->ItemsPerPage = 20;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/producto_edit.php';
			$this->dtgProductos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for PRODUCTO's properties, or you
			// can traverse down QQN::PRODUCTO() to display fields that are down the hierarchy)
			$this->dtgProductos->MetaAddColumn('IdPRODUCTO');
			$this->dtgProductos->MetaAddColumn('CodigoArancelario');
			$this->dtgProductos->MetaAddColumn('Descripcion');
			$this->dtgProductos->MetaAddColumn('NumeroRegSanitario');
			$this->dtgProductos->MetaAddColumn('Volumen');
			$this->dtgProductos->MetaAddColumn('Unidad');
		}
	}
?>
