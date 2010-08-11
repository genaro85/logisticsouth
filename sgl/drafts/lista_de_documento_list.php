<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ListaDeDocumentoListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the ListaDeDocumento class.  It uses the code-generated
 * ListaDeDocumentoDataGrid control which has meta-methods to help with
 * easily creating/defining ListaDeDocumento columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both lista_de_documento_list.php AND
 * lista_de_documento_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class ListaDeDocumentoListForm extends ListaDeDocumentoListFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgListaDeDocumentos = new ListaDeDocumentoDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgListaDeDocumentos->CssClass = 'datagrid';
        $this->dtgListaDeDocumentos->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgListaDeDocumentos->Paginator = new QPaginator($this->dtgListaDeDocumentos);
        $this->dtgListaDeDocumentos->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid

        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/lista_de_documento_edit.php';
        $this->dtgListaDeDocumentos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for LISTA_DE_DOCUMENTO's properties, or you
        // can traverse down QQN::LISTA_DE_DOCUMENTO() to display fields that are down the hierarchy)
        $this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->DOCUMENTOIdDOCUMENTOObject->Nombre,'Name=Documento');
        $this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->PROCESOIdPROCESOObject->Nombre,'Name=Proceso');
        $this->dtgListaDeDocumentos->MetaAddColumn(QQN::ListaDeDocumento()->FASEIdFASEObject->Nombre,'Name=Fase');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// lista_de_documento_list.tpl.php as the included HTML template file
ListaDeDocumentoListForm::Run('ListaDeDocumentoListForm');
?>