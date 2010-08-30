<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/VigenciaDocumentoListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the VigenciaDocumento class.  It uses the code-generated
 * VigenciaDocumentoDataGrid control which has meta-methods to help with
 * easily creating/defining VigenciaDocumento columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both vigencia_documento_list.php AND
 * vigencia_documento_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class VigenciaDocumentoListForm extends VigenciaDocumentoListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgVigenciaDocumentos = new VigenciaDocumentoDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgVigenciaDocumentos->CssClass = 'datagrid';
        $this->dtgVigenciaDocumentos->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgVigenciaDocumentos->Paginator = new QPaginator($this->dtgVigenciaDocumentos);
        $this->dtgVigenciaDocumentos->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid
        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/vigencia_documento_edit.php';
        $this->dtgVigenciaDocumentos->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for VIGENCIA_DOCUMENTO's properties, or you
        // can traverse down QQN::VIGENCIA_DOCUMENTO() to display fields that are down the hierarchy)
        $this->dtgVigenciaDocumentos->MetaAddColumn(QQN::VigenciaDocumento()->LICENCIAIdLICENCIAObject,'Name=Licencia');
        $this->dtgVigenciaDocumentos->MetaAddColumn(QQN::VigenciaDocumento()->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTOObject->Nombre,'Name=Documento');
        $this->dtgVigenciaDocumentos->MetaAddColumn(QQN::VigenciaDocumento()->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->FASEIdFASEObject->Nombre,'Name=Fase');
        $this->dtgVigenciaDocumentos->MetaAddColumn('FechaOtorgado');
        $this->dtgVigenciaDocumentos->MetaAddColumn('FechaVencimieto');
        $this->dtgVigenciaDocumentos->MetaAddColumn('NumRef');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// vigencia_documento_list.tpl.php as the included HTML template file
VigenciaDocumentoListForm::Run('VigenciaDocumentoListForm');
?>