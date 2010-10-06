<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ListaProductoListFormBase.class.php');

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
 * @subpackage Drafts
 */
class ListaProductoListForm extends ListaProductoListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

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
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/lista_producto_edit.php';
        $this->dtgListaProductos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Editar');

        // Create the Other Columns (note that you can use strings for LISTA_PRODUCTO's properties, or you
        // can traverse down QQN::LISTA_PRODUCTO() to display fields that are down the hierarchy)
        $this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->LICENCIAIdLICENCIAObject->NumeroCNP,'Name=Numero CNP');
        $this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->PRODUCTOIdPRODUCTOObject->Descripcion,'Name=Producto');
        $this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->PRODUCTOIdPRODUCTOObject->CodigoArancelario,'Name=Codigo Arancelario');
        $this->dtgListaProductos->MetaAddColumn('PRODUCTOCantidad', 'Name=Cantidad');
        $this->dtgListaProductos->MetaAddColumn('PRODUCTOUnidad', 'Name=Unidad');
        $this->dtgListaProductos->MetaAddColumn('PRODUCTOCostoUnitario', 'Name=Costo Unitario');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// lista_producto_list.tpl.php as the included HTML template file
ListaProductoListForm::Run('ListaProductoListForm');
?>