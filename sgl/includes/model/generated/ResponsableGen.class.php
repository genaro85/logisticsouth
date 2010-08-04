<?php
	/**
	 * The abstract ResponsableGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Responsable subclass which
	 * extends this ResponsableGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Responsable class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $EMPLEADOIdEMPLEADO the value for intEMPLEADOIdEMPLEADO (PK)
	 * @property integer $LICENCIAIdLICENCIA the value for intLICENCIAIdLICENCIA (PK)
	 * @property QDateTime $FechaInicio the value for dttFechaInicio (Not Null)
	 * @property QDateTime $FechaFin the value for dttFechaFin 
	 * @property Empleado $EMPLEADOIdEMPLEADOObject the value for the Empleado object referenced by intEMPLEADOIdEMPLEADO (PK)
	 * @property Licencia $LICENCIAIdLICENCIAObject the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ResponsableGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column RESPONSABLE.EMPLEADO_idEMPLEADO
		 * @var integer intEMPLEADOIdEMPLEADO
		 */
		protected $intEMPLEADOIdEMPLEADO;
		const EMPLEADOIdEMPLEADODefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intEMPLEADOIdEMPLEADO;
		 */
		protected $__intEMPLEADOIdEMPLEADO;

		/**
		 * Protected member variable that maps to the database PK column RESPONSABLE.LICENCIA_idLICENCIA
		 * @var integer intLICENCIAIdLICENCIA
		 */
		protected $intLICENCIAIdLICENCIA;
		const LICENCIAIdLICENCIADefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intLICENCIAIdLICENCIA;
		 */
		protected $__intLICENCIAIdLICENCIA;

		/**
		 * Protected member variable that maps to the database column RESPONSABLE.fechaInicio
		 * @var QDateTime dttFechaInicio
		 */
		protected $dttFechaInicio;
		const FechaInicioDefault = null;


		/**
		 * Protected member variable that maps to the database column RESPONSABLE.fechaFin
		 * @var QDateTime dttFechaFin
		 */
		protected $dttFechaFin;
		const FechaFinDefault = null;


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
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column RESPONSABLE.EMPLEADO_idEMPLEADO.
		 *
		 * NOTE: Always use the EMPLEADOIdEMPLEADOObject property getter to correctly retrieve this Empleado object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Empleado objEMPLEADOIdEMPLEADOObject
		 */
		protected $objEMPLEADOIdEMPLEADOObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column RESPONSABLE.LICENCIA_idLICENCIA.
		 *
		 * NOTE: Always use the LICENCIAIdLICENCIAObject property getter to correctly retrieve this Licencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Licencia objLICENCIAIdLICENCIAObject
		 */
		protected $objLICENCIAIdLICENCIAObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intEMPLEADOIdEMPLEADO = Responsable::EMPLEADOIdEMPLEADODefault;
			$this->intLICENCIAIdLICENCIA = Responsable::LICENCIAIdLICENCIADefault;
			$this->dttFechaInicio = (Responsable::FechaInicioDefault === null)?null:new QDateTime(Responsable::FechaInicioDefault);
			$this->dttFechaFin = (Responsable::FechaFinDefault === null)?null:new QDateTime(Responsable::FechaFinDefault);
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
		 * Load a Responsable from PK Info
		 * @param integer $intEMPLEADOIdEMPLEADO
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Responsable
		 */
		public static function Load($intEMPLEADOIdEMPLEADO, $intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Responsable::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Responsable()->EMPLEADOIdEMPLEADO, $intEMPLEADOIdEMPLEADO),
					QQ::Equal(QQN::Responsable()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Responsables
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Responsable[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Responsable::QueryArray to perform the LoadAll query
			try {
				return Responsable::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Responsables
		 * @return int
		 */
		public static function CountAll() {
			// Call Responsable::QueryCount to perform the CountAll query
			return Responsable::QueryCount(QQ::All());
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
			$objDatabase = Responsable::GetDatabase();

			// Create/Build out the QueryBuilder object with Responsable-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'RESPONSABLE');
			Responsable::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('RESPONSABLE');

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
		 * Static Qcubed Query method to query for a single Responsable object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Responsable the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Responsable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Responsable object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Responsable::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Responsable::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Responsable objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Responsable[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Responsable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Responsable::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Responsable objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Responsable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Responsable::GetDatabase();

			$strQuery = Responsable::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/responsable', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Responsable::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Responsable
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'RESPONSABLE';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'EMPLEADO_idEMPLEADO', $strAliasPrefix . 'EMPLEADO_idEMPLEADO');
			$objBuilder->AddSelectItem($strTableName, 'LICENCIA_idLICENCIA', $strAliasPrefix . 'LICENCIA_idLICENCIA');
			$objBuilder->AddSelectItem($strTableName, 'fechaInicio', $strAliasPrefix . 'fechaInicio');
			$objBuilder->AddSelectItem($strTableName, 'fechaFin', $strAliasPrefix . 'fechaFin');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Responsable from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Responsable::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Responsable
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Responsable object
			$objToReturn = new Responsable();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'EMPLEADO_idEMPLEADO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'EMPLEADO_idEMPLEADO'] : $strAliasPrefix . 'EMPLEADO_idEMPLEADO';
			$objToReturn->intEMPLEADOIdEMPLEADO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intEMPLEADOIdEMPLEADO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'LICENCIA_idLICENCIA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'LICENCIA_idLICENCIA'] : $strAliasPrefix . 'LICENCIA_idLICENCIA';
			$objToReturn->intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaInicio', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaInicio'] : $strAliasPrefix . 'fechaInicio';
			$objToReturn->dttFechaInicio = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaFin', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaFin'] : $strAliasPrefix . 'fechaFin';
			$objToReturn->dttFechaFin = $objDbRow->GetColumn($strAliasName, 'Date');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->EMPLEADOIdEMPLEADO != $objPreviousItem->EMPLEADOIdEMPLEADO) {
						continue;
					}
					if ($objToReturn->LICENCIAIdLICENCIA != $objPreviousItem->LICENCIAIdLICENCIA) {
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
				$strAliasPrefix = 'RESPONSABLE__';

			// Check for EMPLEADOIdEMPLEADOObject Early Binding
			$strAlias = $strAliasPrefix . 'EMPLEADO_idEMPLEADO__idEMPLEADO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEMPLEADOIdEMPLEADOObject = Empleado::InstantiateDbRow($objDbRow, $strAliasPrefix . 'EMPLEADO_idEMPLEADO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for LICENCIAIdLICENCIAObject Early Binding
			$strAlias = $strAliasPrefix . 'LICENCIA_idLICENCIA__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLICENCIAIdLICENCIAObject = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'LICENCIA_idLICENCIA__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Responsables from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Responsable[]
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
					$objItem = Responsable::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Responsable::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Responsable object,
		 * by EMPLEADOIdEMPLEADO, LICENCIAIdLICENCIA Index(es)
		 * @param integer $intEMPLEADOIdEMPLEADO
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Responsable
		*/
		public static function LoadByEMPLEADOIdEMPLEADOLICENCIAIdLICENCIA($intEMPLEADOIdEMPLEADO, $intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			return Responsable::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Responsable()->EMPLEADOIdEMPLEADO, $intEMPLEADOIdEMPLEADO),
					QQ::Equal(QQN::Responsable()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Responsable objects,
		 * by EMPLEADOIdEMPLEADO Index(es)
		 * @param integer $intEMPLEADOIdEMPLEADO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Responsable[]
		*/
		public static function LoadArrayByEMPLEADOIdEMPLEADO($intEMPLEADOIdEMPLEADO, $objOptionalClauses = null) {
			// Call Responsable::QueryArray to perform the LoadArrayByEMPLEADOIdEMPLEADO query
			try {
				return Responsable::QueryArray(
					QQ::Equal(QQN::Responsable()->EMPLEADOIdEMPLEADO, $intEMPLEADOIdEMPLEADO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Responsables
		 * by EMPLEADOIdEMPLEADO Index(es)
		 * @param integer $intEMPLEADOIdEMPLEADO
		 * @return int
		*/
		public static function CountByEMPLEADOIdEMPLEADO($intEMPLEADOIdEMPLEADO) {
			// Call Responsable::QueryCount to perform the CountByEMPLEADOIdEMPLEADO query
			return Responsable::QueryCount(
				QQ::Equal(QQN::Responsable()->EMPLEADOIdEMPLEADO, $intEMPLEADOIdEMPLEADO)
			);
		}
			
		/**
		 * Load an array of Responsable objects,
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Responsable[]
		*/
		public static function LoadArrayByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Call Responsable::QueryArray to perform the LoadArrayByLICENCIAIdLICENCIA query
			try {
				return Responsable::QueryArray(
					QQ::Equal(QQN::Responsable()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Responsables
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @return int
		*/
		public static function CountByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA) {
			// Call Responsable::QueryCount to perform the CountByLICENCIAIdLICENCIA query
			return Responsable::QueryCount(
				QQ::Equal(QQN::Responsable()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Responsable
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Responsable::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `RESPONSABLE` (
							`EMPLEADO_idEMPLEADO`,
							`LICENCIA_idLICENCIA`,
							`fechaInicio`,
							`fechaFin`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intEMPLEADOIdEMPLEADO) . ',
							' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							' . $objDatabase->SqlVariable($this->dttFechaInicio) . ',
							' . $objDatabase->SqlVariable($this->dttFechaFin) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`RESPONSABLE`
						SET
							`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intEMPLEADOIdEMPLEADO) . ',
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							`fechaInicio` = ' . $objDatabase->SqlVariable($this->dttFechaInicio) . ',
							`fechaFin` = ' . $objDatabase->SqlVariable($this->dttFechaFin) . '
						WHERE
							`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->__intEMPLEADOIdEMPLEADO) . ' AND
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->__intLICENCIAIdLICENCIA) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intEMPLEADOIdEMPLEADO = $this->intEMPLEADOIdEMPLEADO;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Responsable
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intEMPLEADOIdEMPLEADO)) || (is_null($this->intLICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Responsable with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Responsable::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`RESPONSABLE`
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($this->intEMPLEADOIdEMPLEADO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . '');
		}

		/**
		 * Delete all Responsables
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Responsable::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`RESPONSABLE`');
		}

		/**
		 * Truncate RESPONSABLE table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Responsable::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `RESPONSABLE`');
		}

		/**
		 * Reload this Responsable from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Responsable object.');

			// Reload the Object
			$objReloaded = Responsable::Load($this->intEMPLEADOIdEMPLEADO, $this->intLICENCIAIdLICENCIA);

			// Update $this's local variables to match
			$this->EMPLEADOIdEMPLEADO = $objReloaded->EMPLEADOIdEMPLEADO;
			$this->__intEMPLEADOIdEMPLEADO = $this->intEMPLEADOIdEMPLEADO;
			$this->LICENCIAIdLICENCIA = $objReloaded->LICENCIAIdLICENCIA;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->dttFechaInicio = $objReloaded->dttFechaInicio;
			$this->dttFechaFin = $objReloaded->dttFechaFin;
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
				case 'EMPLEADOIdEMPLEADO':
					/**
					 * Gets the value for intEMPLEADOIdEMPLEADO (PK)
					 * @return integer
					 */
					return $this->intEMPLEADOIdEMPLEADO;

				case 'LICENCIAIdLICENCIA':
					/**
					 * Gets the value for intLICENCIAIdLICENCIA (PK)
					 * @return integer
					 */
					return $this->intLICENCIAIdLICENCIA;

				case 'FechaInicio':
					/**
					 * Gets the value for dttFechaInicio (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFechaInicio;

				case 'FechaFin':
					/**
					 * Gets the value for dttFechaFin 
					 * @return QDateTime
					 */
					return $this->dttFechaFin;


				///////////////////
				// Member Objects
				///////////////////
				case 'EMPLEADOIdEMPLEADOObject':
					/**
					 * Gets the value for the Empleado object referenced by intEMPLEADOIdEMPLEADO (PK)
					 * @return Empleado
					 */
					try {
						if ((!$this->objEMPLEADOIdEMPLEADOObject) && (!is_null($this->intEMPLEADOIdEMPLEADO)))
							$this->objEMPLEADOIdEMPLEADOObject = Empleado::Load($this->intEMPLEADOIdEMPLEADO);
						return $this->objEMPLEADOIdEMPLEADOObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LICENCIAIdLICENCIAObject':
					/**
					 * Gets the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
					 * @return Licencia
					 */
					try {
						if ((!$this->objLICENCIAIdLICENCIAObject) && (!is_null($this->intLICENCIAIdLICENCIA)))
							$this->objLICENCIAIdLICENCIAObject = Licencia::Load($this->intLICENCIAIdLICENCIA);
						return $this->objLICENCIAIdLICENCIAObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////


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
				case 'EMPLEADOIdEMPLEADO':
					/**
					 * Sets the value for intEMPLEADOIdEMPLEADO (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objEMPLEADOIdEMPLEADOObject = null;
						return ($this->intEMPLEADOIdEMPLEADO = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'LICENCIAIdLICENCIA':
					/**
					 * Sets the value for intLICENCIAIdLICENCIA (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objLICENCIAIdLICENCIAObject = null;
						return ($this->intLICENCIAIdLICENCIA = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaInicio':
					/**
					 * Sets the value for dttFechaInicio (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaInicio = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaFin':
					/**
					 * Sets the value for dttFechaFin 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaFin = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'EMPLEADOIdEMPLEADOObject':
					/**
					 * Sets the value for the Empleado object referenced by intEMPLEADOIdEMPLEADO (PK)
					 * @param Empleado $mixValue
					 * @return Empleado
					 */
					if (is_null($mixValue)) {
						$this->intEMPLEADOIdEMPLEADO = null;
						$this->objEMPLEADOIdEMPLEADOObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Empleado object
						try {
							$mixValue = QType::Cast($mixValue, 'Empleado');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Empleado object
						if (is_null($mixValue->IdEMPLEADO))
							throw new QCallerException('Unable to set an unsaved EMPLEADOIdEMPLEADOObject for this Responsable');

						// Update Local Member Variables
						$this->objEMPLEADOIdEMPLEADOObject = $mixValue;
						$this->intEMPLEADOIdEMPLEADO = $mixValue->IdEMPLEADO;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'LICENCIAIdLICENCIAObject':
					/**
					 * Sets the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
					 * @param Licencia $mixValue
					 * @return Licencia
					 */
					if (is_null($mixValue)) {
						$this->intLICENCIAIdLICENCIA = null;
						$this->objLICENCIAIdLICENCIAObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Licencia object
						try {
							$mixValue = QType::Cast($mixValue, 'Licencia');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Licencia object
						if (is_null($mixValue->IdLICENCIA))
							throw new QCallerException('Unable to set an unsaved LICENCIAIdLICENCIAObject for this Responsable');

						// Update Local Member Variables
						$this->objLICENCIAIdLICENCIAObject = $mixValue;
						$this->intLICENCIAIdLICENCIA = $mixValue->IdLICENCIA;

						// Return $mixValue
						return $mixValue;
					}
					break;

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





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Responsable"><sequence>';
			$strToReturn .= '<element name="EMPLEADOIdEMPLEADOObject" type="xsd1:Empleado"/>';
			$strToReturn .= '<element name="LICENCIAIdLICENCIAObject" type="xsd1:Licencia"/>';
			$strToReturn .= '<element name="FechaInicio" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaFin" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Responsable', $strComplexTypeArray)) {
				$strComplexTypeArray['Responsable'] = Responsable::GetSoapComplexTypeXml();
				Empleado::AlterSoapComplexTypeArray($strComplexTypeArray);
				Licencia::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Responsable::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Responsable();
			if ((property_exists($objSoapObject, 'EMPLEADOIdEMPLEADOObject')) &&
				($objSoapObject->EMPLEADOIdEMPLEADOObject))
				$objToReturn->EMPLEADOIdEMPLEADOObject = Empleado::GetObjectFromSoapObject($objSoapObject->EMPLEADOIdEMPLEADOObject);
			if ((property_exists($objSoapObject, 'LICENCIAIdLICENCIAObject')) &&
				($objSoapObject->LICENCIAIdLICENCIAObject))
				$objToReturn->LICENCIAIdLICENCIAObject = Licencia::GetObjectFromSoapObject($objSoapObject->LICENCIAIdLICENCIAObject);
			if (property_exists($objSoapObject, 'FechaInicio'))
				$objToReturn->dttFechaInicio = new QDateTime($objSoapObject->FechaInicio);
			if (property_exists($objSoapObject, 'FechaFin'))
				$objToReturn->dttFechaFin = new QDateTime($objSoapObject->FechaFin);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Responsable::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objEMPLEADOIdEMPLEADOObject)
				$objObject->objEMPLEADOIdEMPLEADOObject = Empleado::GetSoapObjectFromObject($objObject->objEMPLEADOIdEMPLEADOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEMPLEADOIdEMPLEADO = null;
			if ($objObject->objLICENCIAIdLICENCIAObject)
				$objObject->objLICENCIAIdLICENCIAObject = Licencia::GetSoapObjectFromObject($objObject->objLICENCIAIdLICENCIAObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLICENCIAIdLICENCIA = null;
			if ($objObject->dttFechaInicio)
				$objObject->dttFechaInicio = $objObject->dttFechaInicio->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFechaFin)
				$objObject->dttFechaFin = $objObject->dttFechaFin->qFormat(QDateTime::FormatSoap);
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
			$iArray['EMPLEADOIdEMPLEADO'] = $this->intEMPLEADOIdEMPLEADO;
			$iArray['LICENCIAIdLICENCIA'] = $this->intLICENCIAIdLICENCIA;
			$iArray['FechaInicio'] = $this->dttFechaInicio;
			$iArray['FechaFin'] = $this->dttFechaFin;
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
     * @property-read QQNode $EMPLEADOIdEMPLEADO
     * @property-read QQNodeEmpleado $EMPLEADOIdEMPLEADOObject
     * @property-read QQNode $LICENCIAIdLICENCIA
     * @property-read QQNodeLicencia $LICENCIAIdLICENCIAObject
     * @property-read QQNode $FechaInicio
     * @property-read QQNode $FechaFin
     *
     *

     * @property-read QQNodeEmpleado $_PrimaryKeyNode
     **/
	class QQNodeResponsable extends QQNode {
		protected $strTableName = 'RESPONSABLE';
		protected $strPrimaryKey = 'EMPLEADO_idEMPLEADO';
		protected $strClassName = 'Responsable';
		public function __get($strName) {
			switch ($strName) {
				case 'EMPLEADOIdEMPLEADO':
					return new QQNode('EMPLEADO_idEMPLEADO', 'EMPLEADOIdEMPLEADO', 'Integer', $this);
				case 'EMPLEADOIdEMPLEADOObject':
					return new QQNodeEmpleado('EMPLEADO_idEMPLEADO', 'EMPLEADOIdEMPLEADOObject', 'Integer', $this);
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'Integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'Integer', $this);
				case 'FechaInicio':
					return new QQNode('fechaInicio', 'FechaInicio', 'Date', $this);
				case 'FechaFin':
					return new QQNode('fechaFin', 'FechaFin', 'Date', $this);

				case '_PrimaryKeyNode':
					return new QQNodeEmpleado('EMPLEADO_idEMPLEADO', 'EMPLEADOIdEMPLEADO', 'Integer', $this);
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
     * @property-read QQNode $EMPLEADOIdEMPLEADO
     * @property-read QQNodeEmpleado $EMPLEADOIdEMPLEADOObject
     * @property-read QQNode $LICENCIAIdLICENCIA
     * @property-read QQNodeLicencia $LICENCIAIdLICENCIAObject
     * @property-read QQNode $FechaInicio
     * @property-read QQNode $FechaFin
     *
     *

     * @property-read QQNodeEmpleado $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeResponsable extends QQReverseReferenceNode {
		protected $strTableName = 'RESPONSABLE';
		protected $strPrimaryKey = 'EMPLEADO_idEMPLEADO';
		protected $strClassName = 'Responsable';
		public function __get($strName) {
			switch ($strName) {
				case 'EMPLEADOIdEMPLEADO':
					return new QQNode('EMPLEADO_idEMPLEADO', 'EMPLEADOIdEMPLEADO', 'integer', $this);
				case 'EMPLEADOIdEMPLEADOObject':
					return new QQNodeEmpleado('EMPLEADO_idEMPLEADO', 'EMPLEADOIdEMPLEADOObject', 'integer', $this);
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'integer', $this);
				case 'FechaInicio':
					return new QQNode('fechaInicio', 'FechaInicio', 'QDateTime', $this);
				case 'FechaFin':
					return new QQNode('fechaFin', 'FechaFin', 'QDateTime', $this);

				case '_PrimaryKeyNode':
					return new QQNodeEmpleado('EMPLEADO_idEMPLEADO', 'EMPLEADOIdEMPLEADO', 'integer', $this);
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
