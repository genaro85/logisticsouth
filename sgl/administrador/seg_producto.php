<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ListaProductoListFormBase.class.php');


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
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/Reporte_1.php';
        $this->dtgListaProductos->MetaAddEditLinkColumn($strEditPageUrl, 'Consultar', 'Consultar');

        // Create the Other Columns (note that you can use strings for LISTA_PRODUCTO's properties, or you
        // can traverse down QQN::LISTA_PRODUCTO() to display fields that are down the hierarchy)
        //$this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->LICENCIAIdLICENCIAObject->NumeroCNP,'Name=No C.N.P.');
        $this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->PRODUCTOIdPRODUCTOObject->CodigoArancelario,'Name=Código Arancelario');
        $this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->PRODUCTOIdPRODUCTOObject->Descripcion,'Name=Producto');
        $this->dtgListaProductos->MetaAddColumn(QQN::ListaProducto()->PRODUCTOIdPRODUCTOObject->NumeroRegSanitario,'Name=Nº Reg. Sanitario');
        //$this->dtgListaProductos->MetaAddColumn('PRODUCTOCantidad', 'Name=Cantidad');
        //$this->dtgListaProductos->MetaAddColumn('PRODUCTOUnidad', 'Name=Unidad');
        //$this->dtgListaProductos->MetaAddColumn('PRODUCTOCostoUnitario', 'Name=Costo Unitario');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// lista_producto_list.tpl.php as the included HTML template file
ListaProductoListForm::Run('ListaProductoListForm');
?>