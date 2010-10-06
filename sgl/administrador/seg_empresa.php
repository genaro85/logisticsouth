<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/EmpresaListFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do the List All functionality
 * of the Empresa class.  It uses the code-generated
 * EmpresaDataGrid control which has meta-methods to help with
 * easily creating/defining Empresa columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both empresa_list.php AND
 * empresa_list.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class EmpresaListForm extends EmpresaListFormBase {

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        $this->dtgEmpresas_Create();
    }

    protected function dtgEmpresas_Create() {
        $this->dtgEmpresas = new QDataGrid($this);
        //$this->dtgEmpresas = new EmpresaDataGrid($this);
        $this->dtgEmpresas->ShowFilter = true;

        $this->dtgEmpresas->SetDataBinder('dtgEmpresas_Bind');

        $colId = new QDataGridColumn('No. Registro', '<?= $_ITEM["Id"] ?>');
        $colId->FilterByCommand = array('column' => 'Id');
        $this->dtgEmpresas->AddColumn($colId);

        $colName = new QDataGridColumn('Nombre', '<?= $_ITEM["Nombre"] ?>');
        //$colName->FilterType = QFilterType::TextFilter;
        $colName->FilterByCommand = array('column' => 'Nombre');
        $this->dtgEmpresas->AddColumn($colName);

        $colRIF = new QDataGridColumn('RIF', '<?= $_ITEM["RIF"] ?>');
        $colRIF->FilterByCommand = array('column' => 'Rif');
        $this->dtgEmpresas->AddColumn($colRIF);
        //$this->dtgEmpresas->MetaAddColumn(QQN::Empresa()->Rif, 'Name=RIF');


        $colLicencias = new QDataGridColumn('Lic Otorgadas', '<?= $_ITEM["LicOtorgadas"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'Licencias');
        $this->dtgEmpresas->AddColumn($colLicencias);

        $colLicencias = new QDataGridColumn('Lic Ejecución', '<?= $_ITEM["LicEjecucion"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'Licencias');
        $this->dtgEmpresas->AddColumn($colLicencias);

        $colLicencias = new QDataGridColumn('Lic Nacionalizadas', '<?= $_ITEM["LicNacionalizadas"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'Licencias');
        $this->dtgEmpresas->AddColumn($colLicencias);

        // Style the DataGrid (if desired)
        $this->dtgEmpresas->CssClass = 'datagrid';
        $this->dtgEmpresas->AlternateRowStyle->CssClass = 'alternate';

        // Add Pagination (if desired)
        $this->dtgEmpresas->Paginator = new QPaginator($this->dtgEmpresas);
        $this->dtgEmpresas->ItemsPerPage = 20;
    }

    protected function dtgEmpresas_Bind() {
        //Set up our normal query
        /* $sql = 'SELECT
          e.idEMPRESA as Id,
          e.nombre as Nombre,
          e.rif as RIF,
          count(l.idLICENCIA) as Licencias
          FROM empresa as e
          LEFT JOIN licencia as l on l.EMPRESA_idEMPRESA = e.idEMPRESA
          GROUP BY e.idEMPRESA'; */
        $sql = 'SELECT e.idEMPRESA as Id,
                    e.nombre as Nombre,
                    e.rif as RIF,
                    (Select count(idLICENCIA) from licencia
                        where EMPRESA_idEMPRESA = e.idEMPRESA) as LicOtorgadas,
                    (Select count(idLICENCIA) from licencia
                        where EMPRESA_idEMPRESA = e.idEMPRESA
                        AND status = "En Proceso") as LicEjecucion,
                    (Select count(idLICENCIA) from licencia
                        where EMPRESA_idEMPRESA = e.idEMPRESA
                        AND status = "Cerrada") as LicNacionalizadas
                FROM empresa as e
                GROUP BY e.idEMPRESA';

        //apply any filters the user has set
        foreach ($this->dtgEmpresas->FilterInfo as $filter) {
            if ($filter['column'] == 'Licencias') {
                $sql .= ' HAVING count(l.idLICENCIA) = ' . $filter['value'];
            }
        }

        //and run the query, using it as the datasource for the grid
        $objDatabase = Empresa::GetDatabase();
        $objDbResult = $objDatabase->Query($sql);

        $array = array();
        while ($mixRow = $objDbResult->FetchArray()) {
            $array[] = $mixRow;
        }

        $this->dtgEmpresas->DataSource = $array;
    }

}

// Go ahead and run this form object to generate the page and event handlers, implicitly using
// empresa_list.tpl.php as the included HTML template file
EmpresaListForm::Run('EmpresaListForm');
?>