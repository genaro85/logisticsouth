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

        //Project Name
        $colName = new QDataGridColumn('Nombre', '<?= $_ITEM["Nombre"] ?>');
        $colName->OrderByClause = QQ::OrderBy(QQN::Empresa()->Nombre);
        $colName->ReverseOrderByClause = QQ::OrderBy(QQN::Empresa()->Nombre, false);
        //QQN::Empresa()->Nombre->SetFilteredDataGridColumnFilter($colName);
        //$colName->FilterType = QFilterType::TextFilter;
        //$colName->FilterPrefix = '%';
        //$colName->FilterPostfix = '%';
        //$colName->Filter = QQ::Like(QQN::Empresa()->Nombre, null);
        $this->dtgEmpresas->AddColumn($colName);

        
        $colRIF = new QDataGridColumn('RIF', '<?= $_ITEM["RIF"] ?>');
        $colRIF->OrderByClause = QQ::OrderBy(QQN::Empresa()->Rif);
        $colRIF->ReverseOrderByClause = QQ::OrderBy(QQN::Empresa()->Rif, false);
        $this->dtgEmpresas->AddColumn($colRIF);
        
        $colLicOtorgadas = new QDataGridColumn('CNP Internas', '<?= $_ITEM["LicOtorgadas"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'LicOtorgadas');
        $this->dtgEmpresas->AddColumn($colLicOtorgadas);

        $colLicEjecucion = new QDataGridColumn('CNP Externas', '<?= $_ITEM["LicEjecucion"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'LicEjecucion');
        $this->dtgEmpresas->AddColumn($colLicEjecucion);

        $colLicNacionalizadas = new QDataGridColumn('CNP Nacionalizadas', '<?= $_ITEM["LicNacionalizadas"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'LicNacionalizadas');
        $this->dtgEmpresas->AddColumn($colLicNacionalizadas);

        // Specify the Datagrid's Data Binder method
 	$this->dtgEmpresas->SetDataBinder('dtgEmpresas_Bind');
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
                        where EMPRESA_idEMPRESA = e.idEMPRESA
                        AND status = "Interna") as LicOtorgadas,
                    (Select count(idLICENCIA) from licencia
                        where EMPRESA_idEMPRESA = e.idEMPRESA
                        AND status = "Externa") as LicEjecucion,
                    (Select count(idLICENCIA) from licencia
                        where EMPRESA_idEMPRESA = e.idEMPRESA
                        AND status = "Nacionalizada") as LicNacionalizadas
                FROM empresa as e
                GROUP BY e.idEMPRESA';

        //apply any filters the user has set
        foreach ($this->dtgEmpresas->FilterInfo as $filter) {
            if ($filter['column'] == 'LicOtorgadas') {
                $sql .= ' HAVING count(LicOtorgadas) = ' . $filter['value'];
            }
            if ($filter['column'] == 'LicEjecucion') {
                $sql .= ' HAVING count(LicEjecucion) = ' . $filter['value'];
            }
            if ($filter['column'] == 'LicNacionalizadas') {
                $sql .= ' HAVING count(LicNacionalizadas) = ' . $filter['value'];
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