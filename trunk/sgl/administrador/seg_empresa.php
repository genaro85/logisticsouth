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


        $colName = new QDataGridColumn('Nombre', '<?= $_ITEM["Nombre"] ?>');
        $colName->OrderByClause = QQ::OrderBy(QQN::Empresa()->Nombre);
        $colName->ReverseOrderByClause = QQ::OrderBy(QQN::Empresa()->Nombre, false);
        QQN::Empresa()->Nombre->SetFilteredDataGridColumnFilter($colName);
        $this->dtgEmpresas->AddColumn($colName);

        //$colName = new QDataGridColumn('Project', '<?= $_ITEM->Name>');
 	//$colName->OrderByClause = QQ::OrderBy(QQN::Project()->Name);
 	//$colName->ReverseOrderByClause = QQ::OrderBy(QQN::Project()->Name, false);
 	//$this->dtgProjects->AddColumn($colName);

        //$colType = new QDataGridColumn('Type', '<?= ProjectStatusType::ToString($_ITEM->ProjectStatusTypeId) >');
 	//$colType->OrderByClause = QQ::OrderBy(QQN::Project()->ProjectStatusTypeId);
 	//$colType->ReverseOrderByClause = QQ::OrderBy(QQN::Project()->ProjectStatusTypeId, false);
 	//$colType->FilterType = QFilterType::ListFilter;
 	//foreach(ProjectStatusType::$NameArray as $value=>$name)
        //    $colType->FilterAddListItem($name, QQ::Equal(QQN::Project()->ProjectStatusTypeId,$value));
 	//$this->dtgProjects->AddColumn($colType);

        //$colLName = new QDataGridColumn('Last Name', '<?= $_ITEM->ManagerPerson->LastName >');
 	//$colLName->OrderByClause = QQ::OrderBy(QQN::Project()->ManagerPerson->LastName);
 	//$colLName->ReverseOrderByClause = QQ::OrderBy(QQN::Project()->ManagerPerson->LastName, false);
 	//QQN::Project()->ManagerPerson->LastName->SetFilteredDataGridColumnFilter($colLName);
 	//$colLName->FilterCustom = QQ::Equal(QQN::Project()->ManagerPerson->Login->IsEnabled, true);
 	//$this->dtgProjects->AddColumn($colLName);

        $colRIF = new QDataGridColumn('RIF', '<?= $_ITEM["RIF"] ?>');
        $colRIF->FilterByCommand = array('column' => 'Rif');
        $this->dtgEmpresas->AddColumn($colRIF);
        //$this->dtgEmpresas->MetaAddColumn(QQN::Empresa()->Rif, 'Name=RIF');


        $colLicencias = new QDataGridColumn('CNP Internas', '<?= $_ITEM["LicOtorgadas"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'Licencias');
        $this->dtgEmpresas->AddColumn($colLicencias);

        $colLicencias = new QDataGridColumn('CNP Externas', '<?= $_ITEM["LicEjecucion"] ?>');
        //$colLicencias->FilterByCommand = array('column' => 'Licencias');
        $this->dtgEmpresas->AddColumn($colLicencias);

        $colLicencias = new QDataGridColumn('CNP Nacionalizadas', '<?= $_ITEM["LicNacionalizadas"] ?>');
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
                $sql .= ' HAVING count(LicOtorgadas.idLICENCIA) = ' . $filter['value'];
            }
            if ($filter['column'] == 'LicEjecucion') {
                $sql .= ' HAVING count(LicEjecucion.idLICENCIA) = ' . $filter['value'];
            }
            if ($filter['column'] == 'LicNacionalizadas') {
                $sql .= ' HAVING count(LicNacionalizadas.idLICENCIA) = ' . $filter['value'];
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