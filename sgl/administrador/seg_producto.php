<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ProductoListFormBase.class.php');

/**
 * @package sgl
 * @subpackage administrador
 */
class ProductoListForm extends ProductoListFormBase {

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
        //$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/Reporte_1.php';
        //$this->dtgProductos->MetaAddEditLinkColumn($strEditPageUrl, 'Consultar', 'Consultar');
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/seg_producto_chrt.php';
        $this->dtgProductos->MetaAddEditLinkColumn($strEditPageUrl, 'Gráfica', 'Gráfica');

        $this->dtgProductos->MetaAddColumn('CodigoArancelario', 'Name=Código Arancelario');
        $this->dtgProductos->MetaAddColumn('Descripcion', 'Name=Producto');
        $this->dtgProductos->MetaAddColumn('NumeroRegSanitario', 'Name=Nº Reg. Sanitario');
    }

}

ProductoListForm::Run('ProductoListForm');
?>