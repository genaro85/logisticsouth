<?php
/**
 * The abstract EmpleadoGen class defined here is
 * code-generated and contains all the basic CRUD-type functionality as well as
 * basic methods to handle relationships and index-based loading.
 *
 * To use, you should use the Empleado subclass which
 * extends this EmpleadoGen class.
 *
 * Because subsequent re-code generations will overwrite any changes to this
 * file, you should leave this file unaltered to prevent yourself from losing
 * any information or code changes.  All customizations should be done by
 * overriding existing or implementing new methods, properties and variables
 * in the Empleado class.
 *
 * @package My QCubed Application
 * @subpackage GeneratedDataObjects
 * @property-read integer $IdEMPLEADO the value for intIdEMPLEADO (Read-Only PK)
 * @property string $Nombre the value for strNombre (Not Null)
 * @property string $Apellido the value for strApellido (Not Null)
 * @property string $Cedula the value for strCedula
 * @property string $Login the value for strLogin (Not Null)
 * @property string $Password the value for strPassword (Not Null)
 * @property string $Email the value for strEmail
 * @property-read Responsable $_ResponsableAsEMPLEADOIdEMPLEADO the value for the private _objResponsableAsEMPLEADOIdEMPLEADO (Read-Only) if set due to an expansion on the RESPONSABLE.EMPLEADO_idEMPLEADO reverse relationship
 * @property-read Responsable[] $_ResponsableAsEMPLEADOIdEMPLEADOArray the value for the private _objResponsableAsEMPLEADOIdEMPLEADOArray (Read-Only) if set due to an ExpandAsArray on the RESPONSABLE.EMPLEADO_idEMPLEADO reverse relationship
 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
 */
class EmpleadoGen extends QBaseClass implements IteratorAggregate {

    ///////////////////////////////////////////////////////////////////////
    // PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
    ///////////////////////////////////////////////////////////////////////

    /**
     * Protected member variable that maps to the database PK Identity column EMPLEADO.idEMPLEADO
     * @var integer intIdEMPLEADO
     */
    protected $intIdEMPLEADO;
    const IdEMPLEADODefault = null;


    /**
     * Protected member variable that maps to the database column EMPLEADO.nombre
     * @var string strNombre
     */
    protected $strNombre;
    const NombreMaxLength = 45;
    const NombreDefault = null;


    /**
     * Protected member variable that maps to the database column EMPLEADO.apellido
     * @var string strApellido
     */
    protected $strApellido;
    const ApellidoMaxLength = 45;
    const ApellidoDefault = null;


    /**
     * Protected member variable that maps to the database column EMPLEADO.cedula
     * @var string strCedula
     */
    protected $strCedula;
    const CedulaMaxLength = 45;
    const CedulaDefault = null;


    /**
     * Protected member variable that maps to the database column EMPLEADO.login
     * @var string strLogin
     */
    protected $strLogin;
    const LoginMaxLength = 45;
    const LoginDefault = null;


    /**
     * Protected member variable that maps to the database column EMPLEADO.password
     * @var string strPassword
     */
    protected $strPassword;
    const PasswordMaxLength = 18;
    const PasswordDefault = null;


    /**
     * Protected member variable that maps to the database column EMPLEADO.email
     * @var string strEmail
     */
    protected $strEmail;
    const EmailMaxLength = 45;
    const EmailDefault = null;


    /**
     * Private member variable that stores a reference to a single ResponsableAsEMPLEADOIdEMPLEADO object
     * (of type Responsable), if this Empleado object was restored with
     * an expansion on the RESPONSABLE association table.
     * @var Responsable _objResponsableAsEMPLEADOIdEMPLEADO;
     */
    private $_objResponsableAsEMPLEADOIdEMPLEADO;

    /**
     * Private member variable that stores a reference to an array of ResponsableAsEMPLEADOIdEMPLEADO objects
     * (of type Responsable[]), if this Empleado object was restored with
     * an ExpandAsArray on the RESPONSABLE association table.
     * @var Responsable[] _objResponsableAsEMPLEADOIdEMPLEADOArray;
     */
    private $_objResponsableAsEMPLEADOIdEMPLEADOArray = array();

    /**
     * Protected array of virtual attributes for this object (e.g. extra/other calculated and/or non-object bound
     * columns from the run-time database query result for this object).  Used by InstantiateDbRow and
     * GetVirtualAttribute.
     * @var string[] $__strVirtualAttributeArray
     */
    protected $__strVirtualAttributeArray = array();

    /**
     * Protected internal member variable that specifies whether or not this object is Restored from the database.
     * Used by Save() to determine if Save() should perform a db UPDATE or INSERT.
     * @var bool __blnRestored;
     */
    protected $__blnRestored;




    ///////////////////////////////
    // PROTECTED MEMBER OBJECTS
    ///////////////////////////////



    /**
     * Initialize each property with default values from database definition
     */
    public function Initialize() {
        $this->intIdEMPLEADO = Empleado::IdEMPLEADODefault;
        $this->strNombre = Empleado::NombreDefault;
        $this->strApellido = Empleado::ApellidoDefault;
        $this->strCedula = Empleado::CedulaDefault;
        $this->strLogin = Empleado::LoginDefault;
        $this->strPassword = Empleado::PasswordDefault;
        $this->strEmail = Empleado::EmailDefault;
    }


    ///////////////////////////////
    // CLASS-WIDE LOAD AND COUNT METHODS
    ///////////////////////////////

    /**
     * Static method to retrieve the Database object that owns this class.
     * @return QDatabaseBase reference to the Database object that can query this class
     */
    public static function GetDatabase() {
        return QApplication::$Database[1];
    }

    /**
     * Load a Empleado from PK Info
     * @param integer $intIdEMPLEADO
     * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
     * @return Empleado
     */
    public static function Load($intIdEMPLEADO, $objOptionalClauses = null) {
        // Use QuerySingle to Perform the Query
        return Empleado::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::Empleado()->IdEMPLEADO, $intIdEMPLEADO)
                ),
                $objOptionalClauses
        );
    }

    /**
     * Load all Empleados
     * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
     * @return Empleado[]
     */
    public static function LoadAll($objOptionalClauses = null) {
        if (func_num_args() > 1) {
            throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
        }
        // Call Empleado::QueryArray to perform the LoadAll query
        try {
            return Empleado::QueryArray(QQ::All(), $objOptionalClauses);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Count all Empleados
     * @return int
     */
    public static function CountAll() {
        // Call Empleado::QueryCount to perform the CountAll query
        return Empleado::QueryCount(QQ::All());
    }




    ///////////////////////////////
    // QCUBED QUERY-RELATED METHODS
    ///////////////////////////////

    /**
     * Internally called method to assist with calling Qcubed Query for this class
     * on load methods.
     * @param QQueryBuilder &$objQueryBuilder the QueryBuilder object that will be created
     * @param QQCondition $objConditions any conditions on the query, itself
     * @param QQClause[] $objOptionalClausees additional optional QQClause object or array of QQClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with (sending in null will skip the PrepareStatement step)
     * @param boolean $blnCountOnly only select a rowcount
     * @return string the query statement
     */
    protected static function BuildQueryStatement(&$objQueryBuilder, QQCondition $objConditions, $objOptionalClauses, $mixParameterArray, $blnCountOnly) {
        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Create/Build out the QueryBuilder object with Empleado-specific SELET and FROM fields
        $objQueryBuilder = new QQueryBuilder($objDatabase, 'EMPLEADO');
        Empleado::GetSelectFields($objQueryBuilder);
        $objQueryBuilder->AddFromItem('EMPLEADO');

        // Set "CountOnly" option (if applicable)
        if ($blnCountOnly)
            $objQueryBuilder->SetCountOnlyFlag();

        // Apply Any Conditions
        if ($objConditions)
            try {
                $objConditions->UpdateQueryBuilder($objQueryBuilder);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }

        // Iterate through all the Optional Clauses (if any) and perform accordingly
        if ($objOptionalClauses) {
            if ($objOptionalClauses instanceof QQClause)
                $objOptionalClauses->UpdateQueryBuilder($objQueryBuilder);
            else if (is_array($objOptionalClauses))
                foreach ($objOptionalClauses as $objClause)
                    $objClause->UpdateQueryBuilder($objQueryBuilder);
            else
                throw new QCallerException('Optional Clauses must be a QQClause object or an array of QQClause objects');
        }

        // Get the SQL Statement
        $strQuery = $objQueryBuilder->GetStatement();

        // Prepare the Statement with the Query Parameters (if applicable)
        if ($mixParameterArray) {
            if (is_array($mixParameterArray)) {
                if (count($mixParameterArray))
                    $strQuery = $objDatabase->PrepareStatement($strQuery, $mixParameterArray);

                // Ensure that there are no other Unresolved Named Parameters
                if (strpos($strQuery, chr(QQNamedValue::DelimiterCode) . '{') !== false)
                    throw new QCallerException('Unresolved named parameters in the query');
            } else
                throw new QCallerException('Parameter Array must be an array of name-value parameter pairs');
        }

        // Return the Objects
        return $strQuery;
    }

    /**
     * Static Qcubed Query method to query for a single Empleado object.
     * Uses BuildQueryStatment to perform most of the work.
     * @param QQCondition $objConditions any conditions on the query, itself
     * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return Empleado the queried object
     */
    public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = Empleado::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query, Get the First Row, and Instantiate a new Empleado object
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);

        // Do we have to expand anything?
        if ($objQueryBuilder->ExpandAsArrayNodes) {
            $objToReturn = array();
            while ($objDbRow = $objDbResult->GetNextRow()) {
                $objItem = Empleado::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
                if ($objItem)
                    $objToReturn[] = $objItem;
            }
            if (count($objToReturn)) {
                // Since we only want the object to return, lets return the object and not the array.
                return $objToReturn[0];
            } else {
                return null;
            }
        } else {
            // No expands just return the first row
            $objDbRow = $objDbResult->GetNextRow();
            if(null === $objDbRow)
                return null;
            return Empleado::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
        }
    }

    /**
     * Static Qcubed Query method to query for an array of Empleado objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param QQCondition $objConditions any conditions on the query, itself
     * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return Empleado[] the queried objects as an array
     */
    public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = Empleado::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query and Instantiate the Array Result
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);
        return Empleado::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
    }

    /**
     * Static Qcubed Query method to query for a count of Empleado objects.
     * Uses BuildQueryStatment to perform most of the work.
     * @param QQCondition $objConditions any conditions on the query, itself
     * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
     * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
     * @return integer the count of queried objects as an integer
     */
    public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
        // Get the Query Statement
        try {
            $strQuery = Empleado::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Perform the Query and return the row_count
        $objDbResult = $objQueryBuilder->Database->Query($strQuery);

        // Figure out if the query is using GroupBy
        $blnGrouped = false;

        if ($objOptionalClauses) foreach ($objOptionalClauses as $objClause) {
                if ($objClause instanceof QQGroupBy) {
                    $blnGrouped = true;
                    break;
                }
            }

        if ($blnGrouped)
        // Groups in this query - return the count of Groups (which is the count of all rows)
            return $objDbResult->CountRows();
        else {
            // No Groups - return the sql-calculated count(*) value
            $strDbRow = $objDbResult->FetchRow();
            return QType::Cast($strDbRow[0], QType::Integer);
        }
    }

    public static function QueryArrayCached(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null, $blnForceUpdate = false) {
        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        $strQuery = Empleado::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);

        $objCache = new QCache('qquery/empleado', $strQuery);
        $cacheData = $objCache->GetData();

        if (!$cacheData || $blnForceUpdate) {
            $objDbResult = $objQueryBuilder->Database->Query($strQuery);
            $arrResult = Empleado::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
            $objCache->SaveData(serialize($arrResult));
        } else {
            $arrResult = unserialize($cacheData);
        }

        return $arrResult;
    }

    /**
     * Updates a QQueryBuilder with the SELECT fields for this Empleado
     * @param QQueryBuilder $objBuilder the Query Builder object to update
     * @param string $strPrefix optional prefix to add to the SELECT fields
     */
    public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
        if ($strPrefix) {
            $strTableName = $strPrefix;
            $strAliasPrefix = $strPrefix . '__';
        } else {
            $strTableName = 'EMPLEADO';
            $strAliasPrefix = '';
        }

        $objBuilder->AddSelectItem($strTableName, 'idEMPLEADO', $strAliasPrefix . 'idEMPLEADO');
        $objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
        $objBuilder->AddSelectItem($strTableName, 'apellido', $strAliasPrefix . 'apellido');
        $objBuilder->AddSelectItem($strTableName, 'cedula', $strAliasPrefix . 'cedula');
        $objBuilder->AddSelectItem($strTableName, 'login', $strAliasPrefix . 'login');
        $objBuilder->AddSelectItem($strTableName, 'password', $strAliasPrefix . 'password');
        $objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
    }



    ///////////////////////////////
    // INSTANTIATION-RELATED METHODS
    ///////////////////////////////

    /**
     * Instantiate a Empleado from a Database Row.
     * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
     * is calling this Empleado::InstantiateDbRow in order to perform
     * early binding on referenced objects.
     * @param DatabaseRowBase $objDbRow
     * @param string $strAliasPrefix
     * @param string $strExpandAsArrayNodes
     * @param QBaseClass $arrPreviousItem
     * @param string[] $strColumnAliasArray
     * @return Empleado
     */
    public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
        // If blank row, return null
        if (!$objDbRow) {
            return null;
        }
        // See if we're doing an array expansion on the previous item
        $strAlias = $strAliasPrefix . 'idEMPLEADO';
        $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
            foreach ($arrPreviousItems as $objPreviousItem) {
                if ($objPreviousItem->intIdEMPLEADO == $objDbRow->GetColumn($strAliasName, 'Integer')) {
                    // We are.  Now, prepare to check for ExpandAsArray clauses
                    $blnExpandedViaArray = false;
                    if (!$strAliasPrefix)
                        $strAliasPrefix = 'EMPLEADO__';


                    // Expanding reverse references: ResponsableAsEMPLEADOIdEMPLEADO
                    $strAlias = $strAliasPrefix . 'responsableasempleadoidempleado__EMPLEADO_idEMPLEADO';
                    $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
                    if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
                            (!is_null($objDbRow->GetColumn($strAliasName)))) {
                        if ($intPreviousChildItemCount = count($objPreviousItem->_objResponsableAsEMPLEADOIdEMPLEADOArray)) {
                            $objPreviousChildItems = $objPreviousItem->_objResponsableAsEMPLEADOIdEMPLEADOArray;
                            $objChildItem = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableasempleadoidempleado__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
                            if ($objChildItem) {
                                $objPreviousItem->_objResponsableAsEMPLEADOIdEMPLEADOArray[] = $objChildItem;
                            }
                        } else {
                            $objPreviousItem->_objResponsableAsEMPLEADOIdEMPLEADOArray[] = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableasempleadoidempleado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
                        }
                        $blnExpandedViaArray = true;
                    }

                    // Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
                    if ($blnExpandedViaArray) {
                        return false;
                    } else if ($strAliasPrefix == 'EMPLEADO__') {
                        $strAliasPrefix = null;
                    }
                }
            }
        }

        // Create a new instance of the Empleado object
        $objToReturn = new Empleado();
        $objToReturn->__blnRestored = true;

        $strAliasName = array_key_exists($strAliasPrefix . 'idEMPLEADO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idEMPLEADO'] : $strAliasPrefix . 'idEMPLEADO';
        $objToReturn->intIdEMPLEADO = $objDbRow->GetColumn($strAliasName, 'Integer');
        $strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
        $objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAliasName = array_key_exists($strAliasPrefix . 'apellido', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'apellido'] : $strAliasPrefix . 'apellido';
        $objToReturn->strApellido = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAliasName = array_key_exists($strAliasPrefix . 'cedula', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'cedula'] : $strAliasPrefix . 'cedula';
        $objToReturn->strCedula = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAliasName = array_key_exists($strAliasPrefix . 'login', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'login'] : $strAliasPrefix . 'login';
        $objToReturn->strLogin = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAliasName = array_key_exists($strAliasPrefix . 'password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'password'] : $strAliasPrefix . 'password';
        $objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');
        $strAliasName = array_key_exists($strAliasPrefix . 'email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email'] : $strAliasPrefix . 'email';
        $objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');

        if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
            foreach ($arrPreviousItems as $objPreviousItem) {
                if ($objToReturn->IdEMPLEADO != $objPreviousItem->IdEMPLEADO) {
                    continue;
                }
                if (array_diff($objPreviousItem->_objResponsableAsEMPLEADOIdEMPLEADOArray, $objToReturn->_objResponsableAsEMPLEADOIdEMPLEADOArray) != null) {
                    continue;
                }

                // complete match - all primary key columns are the same
                return null;
            }
        }

        // Instantiate Virtual Attributes
        foreach ($objDbRow->GetColumnNameArray() as $strColumnName => $mixValue) {
            $strVirtualPrefix = $strAliasPrefix . '__';
            $strVirtualPrefixLength = strlen($strVirtualPrefix);
            if (substr($strColumnName, 0, $strVirtualPrefixLength) == $strVirtualPrefix)
                $objToReturn->__strVirtualAttributeArray[substr($strColumnName, $strVirtualPrefixLength)] = $mixValue;
        }

        // Prepare to Check for Early/Virtual Binding
        if (!$strAliasPrefix)
            $strAliasPrefix = 'EMPLEADO__';




        // Check for ResponsableAsEMPLEADOIdEMPLEADO Virtual Binding
        $strAlias = $strAliasPrefix . 'responsableasempleadoidempleado__EMPLEADO_idEMPLEADO';
        $strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
        if (!is_null($objDbRow->GetColumn($strAliasName))) {
            if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
                $objToReturn->_objResponsableAsEMPLEADOIdEMPLEADOArray[] = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableasempleadoidempleado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
            else
                $objToReturn->_objResponsableAsEMPLEADOIdEMPLEADO = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableasempleadoidempleado__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
        }

        return $objToReturn;
    }

    /**
     * Instantiate an array of Empleados from a Database Result
     * @param DatabaseResultBase $objDbResult
     * @param string $strExpandAsArrayNodes
     * @param string[] $strColumnAliasArray
     * @return Empleado[]
     */
    public static function InstantiateDbResult(QDatabaseResultBase $objDbResult, $strExpandAsArrayNodes = null, $strColumnAliasArray = null) {
        $objToReturn = array();

        if (!$strColumnAliasArray)
            $strColumnAliasArray = array();

        // If blank resultset, then return empty array
        if (!$objDbResult)
            return $objToReturn;

        // Load up the return array with each row
        if ($strExpandAsArrayNodes) {
            $objToReturn = array();
            while ($objDbRow = $objDbResult->GetNextRow()) {
                $objItem = Empleado::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
                if ($objItem) {
                    $objToReturn[] = $objItem;
                }
            }
        } else {
            while ($objDbRow = $objDbResult->GetNextRow())
                $objToReturn[] = Empleado::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
        }

        return $objToReturn;
    }



    ///////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Single Load and Array)
    ///////////////////////////////////////////////////

    /**
     * Load a single Empleado object,
     * by IdEMPLEADO Index(es)
     * @param integer $intIdEMPLEADO
     * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
     * @return Empleado
     */
    public static function LoadByIdEMPLEADO($intIdEMPLEADO, $objOptionalClauses = null) {
        return Empleado::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::Empleado()->IdEMPLEADO, $intIdEMPLEADO)
                ),
                $objOptionalClauses
        );
    }

    public static function LoadByEmLog($login, $objOptionalClauses = null) {
        return Empleado::QuerySingle(
                QQ::AndCondition(
                QQ::Equal(QQN::Empleado()->Login, $login)
                ),
                $objOptionalClauses
        );
    }



    ////////////////////////////////////////////////////
    // INDEX-BASED LOAD METHODS (Array via Many to Many)
    ////////////////////////////////////////////////////




    //////////////////////////
    // SAVE, DELETE AND RELOAD
    //////////////////////////

    /**
     * Save this Empleado
     * @param bool $blnForceInsert
     * @param bool $blnForceUpdate
     * @return int
     */
    public function Save($blnForceInsert = false, $blnForceUpdate = false) {
        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        $mixToReturn = null;

        try {
            if ((!$this->__blnRestored) || ($blnForceInsert)) {
                // Perform an INSERT query
                $objDatabase->NonQuery('
						INSERT INTO `EMPLEADO` (
							`nombre`,
							`apellido`,
							`cedula`,
							`login`,
							`password`,
							`email`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strApellido) . ',
							' . $objDatabase->SqlVariable($this->strCedula) . ',
							' . $objDatabase->SqlVariable($this->strLogin) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . '
						)
					');

                // Update Identity column and return its value
                $mixToReturn = $this->intIdEMPLEADO = $objDatabase->InsertId('EMPLEADO', 'idEMPLEADO');
            } else {
                // Perform an UPDATE query

                // First checking for Optimistic Locking constraints (if applicable)

                // Perform the UPDATE query
                $objDatabase->NonQuery('
						UPDATE
							`EMPLEADO`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`apellido` = ' . $objDatabase->SqlVariable($this->strApellido) . ',
							`cedula` = ' . $objDatabase->SqlVariable($this->strCedula) . ',
							`login` = ' . $objDatabase->SqlVariable($this->strLogin) . ',
							`password` = ' . $objDatabase->SqlVariable($this->strPassword) . ',
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . '
						WHERE
							`idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intIdEMPLEADO) . '
					');
            }

        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }

        // Update __blnRestored and any Non-Identity PK Columns (if applicable)
        $this->__blnRestored = true;


        // Return
        return $mixToReturn;
    }

    /**
     * Delete this Empleado
     * @return void
     */
    public function Delete() {
        if ((is_null($this->intIdEMPLEADO)))
            throw new QUndefinedPrimaryKeyException('Cannot delete this Empleado with an unset primary key.');

        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();


        // Perform the SQL Query
        $objDatabase->NonQuery('
				DELETE FROM
					`EMPLEADO`
				WHERE
					`idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intIdEMPLEADO) . '');
    }

    /**
     * Delete all Empleados
     * @return void
     */
    public static function DeleteAll() {
        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
				DELETE FROM
					`EMPLEADO`');
    }

    /**
     * Truncate EMPLEADO table
     * @return void
     */
    public static function Truncate() {
        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Perform the Query
        $objDatabase->NonQuery('
				TRUNCATE `EMPLEADO`');
    }

    /**
     * Reload this Empleado from the database.
     * @return void
     */
    public function Reload() {
        // Make sure we are actually Restored from the database
        if (!$this->__blnRestored)
            throw new QCallerException('Cannot call Reload() on a new, unsaved Empleado object.');

        // Reload the Object
        $objReloaded = Empleado::Load($this->intIdEMPLEADO);

        // Update $this's local variables to match
        $this->strNombre = $objReloaded->strNombre;
        $this->strApellido = $objReloaded->strApellido;
        $this->strCedula = $objReloaded->strCedula;
        $this->strLogin = $objReloaded->strLogin;
        $this->strPassword = $objReloaded->strPassword;
        $this->strEmail = $objReloaded->strEmail;
    }



    ////////////////////
    // PUBLIC OVERRIDERS
    ////////////////////

    /**
     * Override method to perform a property "Get"
     * This will get the value of $strName
     *
     * @param string $strName Name of the property to get
     * @return mixed
     */
    public function __get($strName) {
        switch ($strName) {
            ///////////////////
            // Member Variables
            ///////////////////
            case 'IdEMPLEADO':
            /**
             * Gets the value for intIdEMPLEADO (Read-Only PK)
             * @return integer
             */
                return $this->intIdEMPLEADO;

            case 'Nombre':
            /**
             * Gets the value for strNombre (Not Null)
             * @return string
             */
                return $this->strNombre;

            case 'Apellido':
            /**
             * Gets the value for strApellido (Not Null)
             * @return string
             */
                return $this->strApellido;

            case 'Cedula':
            /**
             * Gets the value for strCedula
             * @return string
             */
                return $this->strCedula;

            case 'Login':
            /**
             * Gets the value for strLogin (Not Null)
             * @return string
             */
                return $this->strLogin;

            case 'Password':
            /**
             * Gets the value for strPassword (Not Null)
             * @return string
             */
                return $this->strPassword;

            case 'Email':
            /**
             * Gets the value for strEmail
             * @return string
             */
                return $this->strEmail;


            ///////////////////
            // Member Objects
            ///////////////////

            ////////////////////////////
            // Virtual Object References (Many to Many and Reverse References)
            // (If restored via a "Many-to" expansion)
            ////////////////////////////

            case '_ResponsableAsEMPLEADOIdEMPLEADO':
            /**
             * Gets the value for the private _objResponsableAsEMPLEADOIdEMPLEADO (Read-Only)
             * if set due to an expansion on the RESPONSABLE.EMPLEADO_idEMPLEADO reverse relationship
             * @return Responsable
             */
                return $this->_objResponsableAsEMPLEADOIdEMPLEADO;

            case '_ResponsableAsEMPLEADOIdEMPLEADOArray':
            /**
             * Gets the value for the private _objResponsableAsEMPLEADOIdEMPLEADOArray (Read-Only)
             * if set due to an ExpandAsArray on the RESPONSABLE.EMPLEADO_idEMPLEADO reverse relationship
             * @return Responsable[]
             */
                return (array) $this->_objResponsableAsEMPLEADOIdEMPLEADOArray;


            case '__Restored':
                return $this->__blnRestored;

            default:
                try {
                    return parent::__get($strName);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }

    /**
     * Override method to perform a property "Set"
     * This will set the property $strName to be $mixValue
     *
     * @param string $strName Name of the property to set
     * @param string $mixValue New value of the property
     * @return mixed
     */
    public function __set($strName, $mixValue) {
        switch ($strName) {
            ///////////////////
            // Member Variables
            ///////////////////
            case 'Nombre':
            /**
             * Sets the value for strNombre (Not Null)
             * @param string $mixValue
             * @return string
             */
                try {
                    return ($this->strNombre = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Apellido':
            /**
             * Sets the value for strApellido (Not Null)
             * @param string $mixValue
             * @return string
             */
                try {
                    return ($this->strApellido = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Cedula':
            /**
             * Sets the value for strCedula
             * @param string $mixValue
             * @return string
             */
                try {
                    return ($this->strCedula = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Login':
            /**
             * Sets the value for strLogin (Not Null)
             * @param string $mixValue
             * @return string
             */
                try {
                    return ($this->strLogin = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Password':
            /**
             * Sets the value for strPassword (Not Null)
             * @param string $mixValue
             * @return string
             */
                try {
                    return ($this->strPassword = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }

            case 'Email':
            /**
             * Sets the value for strEmail
             * @param string $mixValue
             * @return string
             */
                try {
                    return ($this->strEmail = QType::Cast($mixValue, QType::String));
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }


            ///////////////////
            // Member Objects
            ///////////////////
            default:
                try {
                    return parent::__set($strName, $mixValue);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }

    /**
     * Lookup a VirtualAttribute value (if applicable).  Returns NULL if none found.
     * @param string $strName
     * @return string
     */
    public function GetVirtualAttribute($strName) {
        if (array_key_exists($strName, $this->__strVirtualAttributeArray))
            return $this->__strVirtualAttributeArray[$strName];
        return null;
    }



    ///////////////////////////////
    // ASSOCIATED OBJECTS' METHODS
    ///////////////////////////////



    // Related Objects' Methods for ResponsableAsEMPLEADOIdEMPLEADO
    //-------------------------------------------------------------------

    /**
     * Gets all associated ResponsablesAsEMPLEADOIdEMPLEADO as an array of Responsable objects
     * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
     * @return Responsable[]
     */
    public function GetResponsableAsEMPLEADOIdEMPLEADOArray($objOptionalClauses = null) {
        if ((is_null($this->intIdEMPLEADO)))
            return array();

        try {
            return Responsable::LoadArrayByEMPLEADOIdEMPLEADO($this->intIdEMPLEADO, $objOptionalClauses);
        } catch (QCallerException $objExc) {
            $objExc->IncrementOffset();
            throw $objExc;
        }
    }

    /**
     * Counts all associated ResponsablesAsEMPLEADOIdEMPLEADO
     * @return int
     */
    public function CountResponsablesAsEMPLEADOIdEMPLEADO() {
        if ((is_null($this->intIdEMPLEADO)))
            return 0;

        return Responsable::CountByEMPLEADOIdEMPLEADO($this->intIdEMPLEADO);
    }

    /**
     * Associates a ResponsableAsEMPLEADOIdEMPLEADO
     * @param Responsable $objResponsable
     * @return void
     */
    public function AssociateResponsableAsEMPLEADOIdEMPLEADO(Responsable $objResponsable) {
        if ((is_null($this->intIdEMPLEADO)))
            throw new QUndefinedPrimaryKeyException('Unable to call AssociateResponsableAsEMPLEADOIdEMPLEADO on this unsaved Empleado.');
        if ((is_null($objResponsable->EMPLEADOIdEMPLEADO)) || (is_null($objResponsable->LICENCIAIdLICENCIA)))
            throw new QUndefinedPrimaryKeyException('Unable to call AssociateResponsableAsEMPLEADOIdEMPLEADO on this Empleado with an unsaved Responsable.');

        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
				UPDATE
					`RESPONSABLE`
				SET
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intIdEMPLEADO) . '
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($objResponsable->EMPLEADOIdEMPLEADO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objResponsable->LICENCIAIdLICENCIA) . '
			');
    }

    /**
     * Unassociates a ResponsableAsEMPLEADOIdEMPLEADO
     * @param Responsable $objResponsable
     * @return void
     */
    public function UnassociateResponsableAsEMPLEADOIdEMPLEADO(Responsable $objResponsable) {
        if ((is_null($this->intIdEMPLEADO)))
            throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsEMPLEADOIdEMPLEADO on this unsaved Empleado.');
        if ((is_null($objResponsable->EMPLEADOIdEMPLEADO)) || (is_null($objResponsable->LICENCIAIdLICENCIA)))
            throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsEMPLEADOIdEMPLEADO on this Empleado with an unsaved Responsable.');

        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
				UPDATE
					`RESPONSABLE`
				SET
					`EMPLEADO_idEMPLEADO` = null
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($objResponsable->EMPLEADOIdEMPLEADO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objResponsable->LICENCIAIdLICENCIA) . ' AND
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intIdEMPLEADO) . '
			');
    }

    /**
     * Unassociates all ResponsablesAsEMPLEADOIdEMPLEADO
     * @return void
     */
    public function UnassociateAllResponsablesAsEMPLEADOIdEMPLEADO() {
        if ((is_null($this->intIdEMPLEADO)))
            throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsEMPLEADOIdEMPLEADO on this unsaved Empleado.');

        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
				UPDATE
					`RESPONSABLE`
				SET
					`EMPLEADO_idEMPLEADO` = null
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intIdEMPLEADO) . '
			');
    }

    /**
     * Deletes an associated ResponsableAsEMPLEADOIdEMPLEADO
     * @param Responsable $objResponsable
     * @return void
     */
    public function DeleteAssociatedResponsableAsEMPLEADOIdEMPLEADO(Responsable $objResponsable) {
        if ((is_null($this->intIdEMPLEADO)))
            throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsEMPLEADOIdEMPLEADO on this unsaved Empleado.');
        if ((is_null($objResponsable->EMPLEADOIdEMPLEADO)) || (is_null($objResponsable->LICENCIAIdLICENCIA)))
            throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsEMPLEADOIdEMPLEADO on this Empleado with an unsaved Responsable.');

        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
				DELETE FROM
					`RESPONSABLE`
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($objResponsable->EMPLEADOIdEMPLEADO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objResponsable->LICENCIAIdLICENCIA) . ' AND
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intIdEMPLEADO) . '
			');
    }

    /**
     * Deletes all associated ResponsablesAsEMPLEADOIdEMPLEADO
     * @return void
     */
    public function DeleteAllResponsablesAsEMPLEADOIdEMPLEADO() {
        if ((is_null($this->intIdEMPLEADO)))
            throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsEMPLEADOIdEMPLEADO on this unsaved Empleado.');

        // Get the Database Object for this Class
        $objDatabase = Empleado::GetDatabase();

        // Perform the SQL Query
        $objDatabase->NonQuery('
				DELETE FROM
					`RESPONSABLE`
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intIdEMPLEADO) . '
			');
    }





    ////////////////////////////////////////
    // METHODS for SOAP-BASED WEB SERVICES
    ////////////////////////////////////////

    public static function GetSoapComplexTypeXml() {
        $strToReturn = '<complexType name="Empleado"><sequence>';
        $strToReturn .= '<element name="IdEMPLEADO" type="xsd:int"/>';
        $strToReturn .= '<element name="Nombre" type="xsd:string"/>';
        $strToReturn .= '<element name="Apellido" type="xsd:string"/>';
        $strToReturn .= '<element name="Cedula" type="xsd:string"/>';
        $strToReturn .= '<element name="Login" type="xsd:string"/>';
        $strToReturn .= '<element name="Password" type="xsd:string"/>';
        $strToReturn .= '<element name="Email" type="xsd:string"/>';
        $strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
        $strToReturn .= '</sequence></complexType>';
        return $strToReturn;
    }

    public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
        if (!array_key_exists('Empleado', $strComplexTypeArray)) {
            $strComplexTypeArray['Empleado'] = Empleado::GetSoapComplexTypeXml();
        }
    }

    public static function GetArrayFromSoapArray($objSoapArray) {
        $objArrayToReturn = array();

        foreach ($objSoapArray as $objSoapObject)
            array_push($objArrayToReturn, Empleado::GetObjectFromSoapObject($objSoapObject));

        return $objArrayToReturn;
    }

    public static function GetObjectFromSoapObject($objSoapObject) {
        $objToReturn = new Empleado();
        if (property_exists($objSoapObject, 'IdEMPLEADO'))
            $objToReturn->intIdEMPLEADO = $objSoapObject->IdEMPLEADO;
        if (property_exists($objSoapObject, 'Nombre'))
            $objToReturn->strNombre = $objSoapObject->Nombre;
        if (property_exists($objSoapObject, 'Apellido'))
            $objToReturn->strApellido = $objSoapObject->Apellido;
        if (property_exists($objSoapObject, 'Cedula'))
            $objToReturn->strCedula = $objSoapObject->Cedula;
        if (property_exists($objSoapObject, 'Login'))
            $objToReturn->strLogin = $objSoapObject->Login;
        if (property_exists($objSoapObject, 'Password'))
            $objToReturn->strPassword = $objSoapObject->Password;
        if (property_exists($objSoapObject, 'Email'))
            $objToReturn->strEmail = $objSoapObject->Email;
        if (property_exists($objSoapObject, '__blnRestored'))
            $objToReturn->__blnRestored = $objSoapObject->__blnRestored;
        return $objToReturn;
    }

    public static function GetSoapArrayFromArray($objArray) {
        if (!$objArray)
            return null;

        $objArrayToReturn = array();

        foreach ($objArray as $objObject)
            array_push($objArrayToReturn, Empleado::GetSoapObjectFromObject($objObject, true));

        return unserialize(serialize($objArrayToReturn));
    }

    public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
        return $objObject;
    }


    ////////////////////////////////////////
    // METHODS for JSON Object Translation
    ////////////////////////////////////////

    // this function is required for objects that implement the
    // IteratorAggregate interface
    public function getIterator() {
        ///////////////////
        // Member Variables
        ///////////////////
        $iArray['IdEMPLEADO'] = $this->intIdEMPLEADO;
        $iArray['Nombre'] = $this->strNombre;
        $iArray['Apellido'] = $this->strApellido;
        $iArray['Cedula'] = $this->strCedula;
        $iArray['Login'] = $this->strLogin;
        $iArray['Password'] = $this->strPassword;
        $iArray['Email'] = $this->strEmail;
        return new ArrayIterator($iArray);
    }

    // this function returns a Json formatted string using the
    // IteratorAggregate interface
    public function getJson() {
        return json_encode($this->getIterator());
    }


}



/////////////////////////////////////
// ADDITIONAL CLASSES for QCubed QUERY
/////////////////////////////////////

/**
 * @uses QQNode
 *
 * @property-read QQNode $IdEMPLEADO
 * @property-read QQNode $Nombre
 * @property-read QQNode $Apellido
 * @property-read QQNode $Cedula
 * @property-read QQNode $Login
 * @property-read QQNode $Password
 * @property-read QQNode $Email
 *
 *
 * @property-read QQReverseReferenceNodeResponsable $ResponsableAsEMPLEADOIdEMPLEADO

 * @property-read QQNode $_PrimaryKeyNode
 **/
class QQNodeEmpleado extends QQNode {
    protected $strTableName = 'EMPLEADO';
    protected $strPrimaryKey = 'idEMPLEADO';
    protected $strClassName = 'Empleado';
    public function __get($strName) {
        switch ($strName) {
            case 'IdEMPLEADO':
                return new QQNode('idEMPLEADO', 'IdEMPLEADO', 'Integer', $this);
            case 'Nombre':
                return new QQNode('nombre', 'Nombre', 'VarChar', $this);
            case 'Apellido':
                return new QQNode('apellido', 'Apellido', 'VarChar', $this);
            case 'Cedula':
                return new QQNode('cedula', 'Cedula', 'VarChar', $this);
            case 'Login':
                return new QQNode('login', 'Login', 'VarChar', $this);
            case 'Password':
                return new QQNode('password', 'Password', 'VarChar', $this);
            case 'Email':
                return new QQNode('email', 'Email', 'VarChar', $this);
            case 'ResponsableAsEMPLEADOIdEMPLEADO':
                return new QQReverseReferenceNodeResponsable($this, 'responsableasempleadoidempleado', 'reverse_reference', 'EMPLEADO_idEMPLEADO');

            case '_PrimaryKeyNode':
                return new QQNode('idEMPLEADO', 'IdEMPLEADO', 'Integer', $this);
            default:
                try {
                    return parent::__get($strName);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
}

/**
 * @property-read QQNode $IdEMPLEADO
 * @property-read QQNode $Nombre
 * @property-read QQNode $Apellido
 * @property-read QQNode $Cedula
 * @property-read QQNode $Login
 * @property-read QQNode $Password
 * @property-read QQNode $Email
 *
 *
 * @property-read QQReverseReferenceNodeResponsable $ResponsableAsEMPLEADOIdEMPLEADO

 * @property-read QQNode $_PrimaryKeyNode
 **/
class QQReverseReferenceNodeEmpleado extends QQReverseReferenceNode {
    protected $strTableName = 'EMPLEADO';
    protected $strPrimaryKey = 'idEMPLEADO';
    protected $strClassName = 'Empleado';
    public function __get($strName) {
        switch ($strName) {
            case 'IdEMPLEADO':
                return new QQNode('idEMPLEADO', 'IdEMPLEADO', 'integer', $this);
            case 'Nombre':
                return new QQNode('nombre', 'Nombre', 'string', $this);
            case 'Apellido':
                return new QQNode('apellido', 'Apellido', 'string', $this);
            case 'Cedula':
                return new QQNode('cedula', 'Cedula', 'string', $this);
            case 'Login':
                return new QQNode('login', 'Login', 'string', $this);
            case 'Password':
                return new QQNode('password', 'Password', 'string', $this);
            case 'Email':
                return new QQNode('email', 'Email', 'string', $this);
            case 'ResponsableAsEMPLEADOIdEMPLEADO':
                return new QQReverseReferenceNodeResponsable($this, 'responsableasempleadoidempleado', 'reverse_reference', 'EMPLEADO_idEMPLEADO');

            case '_PrimaryKeyNode':
                return new QQNode('idEMPLEADO', 'IdEMPLEADO', 'integer', $this);
            default:
                try {
                    return parent::__get($strName);
                } catch (QCallerException $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
}

?>
