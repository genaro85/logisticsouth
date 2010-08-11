<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/DocumentoListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Documento class.  It uses the code-generated
 * DocumentoDataGrid control which has meta-methods to help with
 * easily creating/defining Documento columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both documento_list.php AND
 * documento_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class DocumentoListForm extends DocumentoListFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgDocumentos = new DocumentoDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgDocumentos->CssClass = 'datagrid';
        $this->dtgDocumentos->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgDocumentos->Paginator = new QPaginator($this->dtgDocumentos);
        $this->dtgDocumentos->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid

        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/documento_edit.php';
        $this->dtgDocumentos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for DOCUMENTO's properties, or you
        // can traverse down QQN::DOCUMENTO() to display fields that are down the hierarchy)
        //$this->dtgDocumentos->MetaAddColumn('IdDOCUMENTO');
        $this->dtgDocumentos->MetaAddColumn('Nombre');
        $this->dtgDocumentos->MetaAddColumn('Duracion');
        //$this->dtgDocumentos->MetaAddColumn(QQN::Documento()->ListaDeDocumento);
    }
    
}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// documento_list.tpl.php as the included HTML template file
DocumentoListForm::Run('DocumentoListForm');
?>