<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/EtapaLicenciaListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the EtapaLicencia class.  It uses the code-generated
 * EtapaLicenciaDataGrid control which has meta-methods to help with
 * easily creating/defining EtapaLicencia columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both etapa_licencia_list.php AND
 * etapa_licencia_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class EtapaLicenciaListForm extends EtapaLicenciaListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgEtapaLicencias = new EtapaLicenciaDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgEtapaLicencias->CssClass = 'datagrid';
        $this->dtgEtapaLicencias->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgEtapaLicencias->Paginator = new QPaginator($this->dtgEtapaLicencias);
        $this->dtgEtapaLicencias->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid
        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/etapa_licencia_edit.php';
        $this->dtgEtapaLicencias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Editar');

        // Create the Other Columns (note that you can use strings for ETAPA_LICENCIA's properties, or you
        // can traverse down QQN::ETAPA_LICENCIA() to display fields that are down the hierarchy)
        $this->dtgEtapaLicencias->MetaAddColumn(QQN::EtapaLicencia()->LICENCIAIdLICENCIAObject, 'Name=Licencia');
        $this->dtgEtapaLicencias->MetaAddColumn(QQN::EtapaLicencia()->ETAPAIdETAPAObject, 'Name=Etapa');
        $this->dtgEtapaLicencias->MetaAddColumn('ETAPAFechaInicio', 'Name=Fecha Inicio');
        $this->dtgEtapaLicencias->MetaAddColumn('ETAPAFechaFin', 'Name=Fecha Fin');
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// etapa_licencia_list.tpl.php as the included HTML template file
EtapaLicenciaListForm::Run('EtapaLicenciaListForm');
?>