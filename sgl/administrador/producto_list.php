<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ProductoListFormBase.class.php');

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
 * @subpackage Drafts
 */
class ProductoListForm extends ProductoListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

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
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/producto_edit.php';
        $this->dtgProductos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Editar');

        // Create the Other Columns (note that you can use strings for PRODUCTO's properties, or you
        // can traverse down QQN::PRODUCTO() to display fields that are down the hierarchy)
        //$this->dtgProductos->MetaAddColumn('IdPRODUCTO');
        $this->dtgProductos->MetaAddColumn('CodigoArancelario', 'Name=Código Arancelario');
        $this->dtgProductos->MetaAddColumn('Descripcion');
        $this->dtgProductos->MetaAddColumn('NumeroRegSanitario', 'Name=Num. Reg. Sanitario');
        //$this->dtgProductos->MetaAddColumn('Volumen');
        //$this->dtgProductos->MetaAddColumn('Unidad');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// producto_list.tpl.php as the included HTML template file
ProductoListForm::Run('ProductoListForm');
?>