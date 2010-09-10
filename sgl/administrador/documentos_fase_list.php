<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/DocumentosFaseListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the DocumentosFase class.  It uses the code-generated
 * DocumentosFaseDataGrid control which has meta-methods to help with
 * easily creating/defining DocumentosFase columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both documentos_fase_list.php AND
 * documentos_fase_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class DocumentosFaseListForm extends DocumentosFaseListFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}
    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgDocumentosFases = new DocumentosFaseDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgDocumentosFases->CssClass = 'datagrid';
        $this->dtgDocumentosFases->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgDocumentosFases->Paginator = new QPaginator($this->dtgDocumentosFases);
        $this->dtgDocumentosFases->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid

        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__ . '/documentos_fase_edit.php';
        $this->dtgDocumentosFases->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for DOCUMENTOS_FASE's properties, or you
        // can traverse down QQN::DOCUMENTOS_FASE() to display fields that are down the hierarchy)
        $this->dtgDocumentosFases->MetaAddColumn(QQN::DocumentosFase()->DOCUMENTOIdDOCUMENTOObject,'Name=Documento');
        $this->dtgDocumentosFases->MetaAddColumn(QQN::DocumentosFase()->FASEIdFASEObject,'Name=Fase');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// documentos_fase_list.tpl.php as the included HTML template file
DocumentosFaseListForm::Run('DocumentosFaseListForm');
?>