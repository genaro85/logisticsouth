<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/LicenciaListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Licencia class.  It uses the code-generated
 * LicenciaDataGrid control which has meta-methods to help with
 * easily creating/defining Licencia columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both licencia_list.php AND
 * licencia_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class LicenciaListForm extends LicenciaListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Instantiate the Meta DataGrid
        $this->dtgLicencias = new LicenciaDataGrid($this);

        // Style the DataGrid (if desired)
        $this->dtgLicencias->CssClass = 'datagrid';
        $this->dtgLicencias->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgLicencias->Paginator = new QPaginator($this->dtgLicencias);
        $this->dtgLicencias->ItemsPerPage = 20;

        // Use the MetaDataGrid functionality to add Columns for this datagrid
        // Create an Edit Column
        $strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/licencia_edit.php';
        $this->dtgLicencias->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

        // Create the Other Columns (note that you can use strings for LICENCIA's properties, or you
        // can traverse down QQN::LICENCIA() to display fields that are down the hierarchy)
        //$this->dtgLicencias->MetaAddColumn('IdLICENCIA');
        $this->dtgLicencias->MetaAddColumn(QQN::Licencia()->PROCESOIdPROCESOObject->Nombre,'Name=Proceso a Utilizar');
        $this->dtgLicencias->MetaAddColumn(QQN::Licencia()->EMPRESAIdEMPRESAObject->Nombre, 'Name=Empresa');
        $this->dtgLicencias->MetaAddColumn(QQN::Licencia()->PROVEEDORIdPROVEEDORObject->Nombre, 'Name=Proveedor');
        $this->dtgLicencias->MetaAddColumn('FechaInicio','Name=Fecha Inicio');
        $this->dtgLicencias->MetaAddColumn('FechaFin','Name=Fecha Fin');
        //$this->dtgLicencias->MetaAddColumn('FechaFinEstimada');
        $this->dtgLicencias->MetaAddColumn('NumeroProforma', 'Name=Número de Proforma');
        $this->dtgLicencias->MetaAddColumn('NumeroCNP','Name=Número de C.N.P');
        $this->dtgLicencias->MetaAddColumn('VencimientoCNP','Name=Vencimiento C.N.P');
        $this->dtgLicencias->MetaAddColumn('Status','Name=Estdo de Licencia');
        $this->dtgLicencias->MetaAddColumn('FormaPago','Name=Modalidad de Pago');
        $this->dtgLicencias->MetaAddColumn('Tipo', 'Name=Tipo de Licencia');
        $this->dtgLicencias->MetaAddColumn('Flete', 'Name=Costo de Transporte');
        $this->dtgLicencias->MetaAddColumn('Seguro', 'Name=Seguro de Mercancia');
        
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// licencia_list.tpl.php as the included HTML template file
LicenciaListForm::Run('LicenciaListForm');
?>