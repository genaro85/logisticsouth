<?php
require(__META_CONTROLS_GEN__ . '/ListaProductoDataGridGen.class.php');

/**
 * This is the "Meta" DataGrid customizable subclass for the List functionality
 * of the ListaProducto class.  This code-generated class extends
 * from the generated Meta DataGrid class which contains a QDataGrid class which
 * can be used by any QForm or QPanel, listing a collection of ListaProducto
 * objects.  It includes functionality to perform pagination and sorting on columns.
 *
 * To take advantage of some (or all) of these control objects, you
 * must create an instance of this DataGrid in a QForm or QPanel.
 *
 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
 * or overwrite this file.
 *
 * @package My QCubed Application
 * @subpackage MetaControls
 *
 */
class ListaProductoDataGrid extends ListaProductoDataGridGen {

    public function MetaDataBinder() {
        $objConditions = $this->Conditions;
        if(null !== $this->conAdditionalConditions)
            $objConditions = QQ::AndCondition($this->conAdditionalConditions, $objConditions);

// Setup the $objClauses Array
        $objClauses = array();

        if(null !== $this->clsAdditionalClauses)
            $objClauses = $this->clsAdditionalClauses;

// Remember!  We need to first set the TotalItemCount, which will affect the calcuation of LimitClause below
        if ($this->Paginator) {
            $this->TotalItemCount = ListaProducto::QueryCount($objConditions);
        }

// If a column is selected to be sorted, and if that column has a OrderByClause set on it, then let's add
// the OrderByClause to the $objClauses array
        if ($objClause = $this->OrderByClause)
            array_push($objClauses, $objClause);

// Add the LimitClause information, as well
        if ($objClause = $this->LimitClause)
            array_push($objClauses, $objClause);


        if (isset($_SESSION['User'])) {
            $objUser = unserialize($_SESSION['User']);
            if ($objUser instanceof Administrador) {
                $this->DataSource = ListaProducto::QueryArray($objConditions, $objClauses);
            }
            else if ($objUser instanceof Empresa) {
                $conditions = QQ::AndCondition(QQ::Equal(QQN::ListaProducto()->LICENCIAIdLICENCIAObject->EMPRESAIdEMPRESA,$objUser->IdEMPRESA), $this->Conditions);
                $this->DataSource = ListaProducto::QueryArray($conditions, $objClauses);
            }
            else if ($objUser instanceof Administrador) {
                $this->DataSource = ListaProducto::QueryArray($objConditions, $objClauses);
            }
            else if ($objUser instanceof Empleado) {
                $conditions = QQ::AndCondition(QQ::Equal(QQN::ListaProducto()->LICENCIAIdLICENCIAObject->ResponsableAsLICENCIAIdLICENCIA->EMPLEADOIdEMPLEADO,$objUser->IdEMPLEADO), $this->Conditions);
                $this->DataSource = ListaProducto::QueryArray($conditions, $objClauses);
            }


        }
    }

}
?>
