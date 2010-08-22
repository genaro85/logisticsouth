<?php
	/**
	 * The abstract FaseLicenciaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the FaseLicencia subclass which
	 * extends this FaseLicenciaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the FaseLicencia class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $LICENCIAIdLICENCIA the value for intLICENCIAIdLICENCIA (PK)
	 * @property QDateTime $FASEFechaInicio the value for dttFASEFechaInicio 
	 * @property QDateTime $FASEFechaFin the value for dttFASEFechaFin 
	 * @property integer $FASEIdFASE the value for intFASEIdFASE (PK)
	 * @property Licencia $LICENCIAIdLICENCIAObject the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
	 * @property Fase $FASEIdFASEObject the value for the Fase object referenced by intFASEIdFASE (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FaseLicenciaGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column FASE_LICENCIA.LICENCIA_idLICENCIA
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
		 * Protected member variable that maps to the database column FASE_LICENCIA.FASE_fechaInicio
		 * @var QDateTime dttFASEFechaInicio
		 */
		protected $dttFASEFechaInicio;
		const FASEFechaInicioDefault = null;


		/**
		 * Protected member variable that maps to the database column FASE_LICENCIA.FASE_fechaFin
		 * @var QDateTime dttFASEFechaFin
		 */
		protected $dttFASEFechaFin;
		const FASEFechaFinDefault = null;


		/**
		 * Protected member variable that maps to the database PK column FASE_LICENCIA.FASE_idFASE
		 * @var integer intFASEIdFASE
		 */
		protected $intFASEIdFASE;
		const FASEIdFASEDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intFASEIdFASE;
		 */
		protected $__intFASEIdFASE;

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
		 * in the database column FASE_LICENCIA.LICENCIA_idLICENCIA.
		 *
		 * NOTE: Always use the LICENCIAIdLICENCIAObject property getter to correctly retrieve this Licencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Licencia objLICENCIAIdLICENCIAObject
		 */
		protected $objLICENCIAIdLICENCIAObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column FASE_LICENCIA.FASE_idFASE.
		 *
		 * NOTE: Always use the FASEIdFASEObject property getter to correctly retrieve this Fase object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fase objFASEIdFASEObject
		 */
		protected $objFASEIdFASEObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intLICENCIAIdLICENCIA = FaseLicencia::LICENCIAIdLICENCIADefault;
			$this->dttFASEFechaInicio = (FaseLicencia::FASEFechaInicioDefault === null)?null:new QDateTime(FaseLicencia::FASEFechaInicioDefault);
			$this->dttFASEFechaFin = (FaseLicencia::FASEFechaFinDefault === null)?null:new QDateTime(FaseLicencia::FASEFechaFinDefault);
			$this->intFASEIdFASE = FaseLicencia::FASEIdFASEDefault;
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
		 * Load a FaseLicencia from PK Info
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intFASEIdFASE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FaseLicencia
		 */
		public static function Load($intLICENCIAIdLICENCIA, $intFASEIdFASE, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return FaseLicencia::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FaseLicencia()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::FaseLicencia()->FASEIdFASE, $intFASEIdFASE)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all FaseLicencias
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FaseLicencia[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call FaseLicencia::QueryArray to perform the LoadAll query
			try {
				return FaseLicencia::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all FaseLicencias
		 * @return int
		 */
		public static function CountAll() {
			// Call FaseLicencia::QueryCount to perform the CountAll query
			return FaseLicencia::QueryCount(QQ::All());
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
			$objDatabase = FaseLicencia::GetDatabase();

			// Create/Build out the QueryBuilder object with FaseLicencia-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'FASE_LICENCIA');
			FaseLicencia::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('FASE_LICENCIA');

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
		 * Static Qcubed Query method to query for a single FaseLicencia object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FaseLicencia the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FaseLicencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new FaseLicencia object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = FaseLicencia::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return FaseLicencia::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of FaseLicencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return FaseLicencia[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FaseLicencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return FaseLicencia::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of FaseLicencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = FaseLicencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = FaseLicencia::GetDatabase();

			$strQuery = FaseLicencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/faselicencia', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = FaseLicencia::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this FaseLicencia
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'FASE_LICENCIA';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'LICENCIA_idLICENCIA', $strAliasPrefix . 'LICENCIA_idLICENCIA');
			$objBuilder->AddSelectItem($strTableName, 'FASE_fechaInicio', $strAliasPrefix . 'FASE_fechaInicio');
			$objBuilder->AddSelectItem($strTableName, 'FASE_fechaFin', $strAliasPrefix . 'FASE_fechaFin');
			$objBuilder->AddSelectItem($strTableName, 'FASE_idFASE', $strAliasPrefix . 'FASE_idFASE');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a FaseLicencia from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this FaseLicencia::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return FaseLicencia
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the FaseLicencia object
			$objToReturn = new FaseLicencia();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'LICENCIA_idLICENCIA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'LICENCIA_idLICENCIA'] : $strAliasPrefix . 'LICENCIA_idLICENCIA';
			$objToReturn->intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'FASE_fechaInicio', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FASE_fechaInicio'] : $strAliasPrefix . 'FASE_fechaInicio';
			$objToReturn->dttFASEFechaInicio = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'FASE_fechaFin', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FASE_fechaFin'] : $strAliasPrefix . 'FASE_fechaFin';
			$objToReturn->dttFASEFechaFin = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'FASE_idFASE', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FASE_idFASE'] : $strAliasPrefix . 'FASE_idFASE';
			$objToReturn->intFASEIdFASE = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intFASEIdFASE = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LICENCIAIdLICENCIA != $objPreviousItem->LICENCIAIdLICENCIA) {
						continue;
					}
					if ($objToReturn->FASEIdFASE != $objPreviousItem->FASEIdFASE) {
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
				$strAliasPrefix = 'FASE_LICENCIA__';

			// Check for LICENCIAIdLICENCIAObject Early Binding
			$strAlias = $strAliasPrefix . 'LICENCIA_idLICENCIA__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLICENCIAIdLICENCIAObject = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'LICENCIA_idLICENCIA__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FASEIdFASEObject Early Binding
			$strAlias = $strAliasPrefix . 'FASE_idFASE__idFASE';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFASEIdFASEObject = Fase::InstantiateDbRow($objDbRow, $strAliasPrefix . 'FASE_idFASE__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of FaseLicencias from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return FaseLicencia[]
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
					$objItem = FaseLicencia::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = FaseLicencia::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single FaseLicencia object,
		 * by LICENCIAIdLICENCIA, FASEIdFASE Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intFASEIdFASE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FaseLicencia
		*/
		public static function LoadByLICENCIAIdLICENCIAFASEIdFASE($intLICENCIAIdLICENCIA, $intFASEIdFASE, $objOptionalClauses = null) {
			return FaseLicencia::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::FaseLicencia()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::FaseLicencia()->FASEIdFASE, $intFASEIdFASE)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of FaseLicencia objects,
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FaseLicencia[]
		*/
		public static function LoadArrayByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Call FaseLicencia::QueryArray to perform the LoadArrayByLICENCIAIdLICENCIA query
			try {
				return FaseLicencia::QueryArray(
					QQ::Equal(QQN::FaseLicencia()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FaseLicencias
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @return int
		*/
		public static function CountByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA) {
			// Call FaseLicencia::QueryCount to perform the CountByLICENCIAIdLICENCIA query
			return FaseLicencia::QueryCount(
				QQ::Equal(QQN::FaseLicencia()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
			);
		}
			
		/**
		 * Load an array of FaseLicencia objects,
		 * by FASEIdFASE Index(es)
		 * @param integer $intFASEIdFASE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return FaseLicencia[]
		*/
		public static function LoadArrayByFASEIdFASE($intFASEIdFASE, $objOptionalClauses = null) {
			// Call FaseLicencia::QueryArray to perform the LoadArrayByFASEIdFASE query
			try {
				return FaseLicencia::QueryArray(
					QQ::Equal(QQN::FaseLicencia()->FASEIdFASE, $intFASEIdFASE),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count FaseLicencias
		 * by FASEIdFASE Index(es)
		 * @param integer $intFASEIdFASE
		 * @return int
		*/
		public static function CountByFASEIdFASE($intFASEIdFASE) {
			// Call FaseLicencia::QueryCount to perform the CountByFASEIdFASE query
			return FaseLicencia::QueryCount(
				QQ::Equal(QQN::FaseLicencia()->FASEIdFASE, $intFASEIdFASE)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this FaseLicencia
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = FaseLicencia::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `FASE_LICENCIA` (
							`LICENCIA_idLICENCIA`,
							`FASE_fechaInicio`,
							`FASE_fechaFin`,
							`FASE_idFASE`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							' . $objDatabase->SqlVariable($this->dttFASEFechaInicio) . ',
							' . $objDatabase->SqlVariable($this->dttFASEFechaFin) . ',
							' . $objDatabase->SqlVariable($this->intFASEIdFASE) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`FASE_LICENCIA`
						SET
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							`FASE_fechaInicio` = ' . $objDatabase->SqlVariable($this->dttFASEFechaInicio) . ',
							`FASE_fechaFin` = ' . $objDatabase->SqlVariable($this->dttFASEFechaFin) . ',
							`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intFASEIdFASE) . '
						WHERE
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->__intLICENCIAIdLICENCIA) . ' AND
							`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->__intFASEIdFASE) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->__intFASEIdFASE = $this->intFASEIdFASE;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this FaseLicencia
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLICENCIAIdLICENCIA)) || (is_null($this->intFASEIdFASE)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this FaseLicencia with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = FaseLicencia::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`FASE_LICENCIA`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ' AND
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intFASEIdFASE) . '');
		}

		/**
		 * Delete all FaseLicencias
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = FaseLicencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`FASE_LICENCIA`');
		}

		/**
		 * Truncate FASE_LICENCIA table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = FaseLicencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `FASE_LICENCIA`');
		}

		/**
		 * Reload this FaseLicencia from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved FaseLicencia object.');

			// Reload the Object
			$objReloaded = FaseLicencia::Load($this->intLICENCIAIdLICENCIA, $this->intFASEIdFASE);

			// Update $this's local variables to match
			$this->LICENCIAIdLICENCIA = $objReloaded->LICENCIAIdLICENCIA;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->dttFASEFechaInicio = $objReloaded->dttFASEFechaInicio;
			$this->dttFASEFechaFin = $objReloaded->dttFASEFechaFin;
			$this->FASEIdFASE = $objReloaded->FASEIdFASE;
			$this->__intFASEIdFASE = $this->intFASEIdFASE;
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
				case 'LICENCIAIdLICENCIA':
					/**
					 * Gets the value for intLICENCIAIdLICENCIA (PK)
					 * @return integer
					 */
					return $this->intLICENCIAIdLICENCIA;

				case 'FASEFechaInicio':
					/**
					 * Gets the value for dttFASEFechaInicio 
					 * @return QDateTime
					 */
					return $this->dttFASEFechaInicio;

				case 'FASEFechaFin':
					/**
					 * Gets the value for dttFASEFechaFin 
					 * @return QDateTime
					 */
					return $this->dttFASEFechaFin;

				case 'FASEIdFASE':
					/**
					 * Gets the value for intFASEIdFASE (PK)
					 * @return integer
					 */
					return $this->intFASEIdFASE;


				///////////////////
				// Member Objects
				///////////////////
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

				case 'FASEIdFASEObject':
					/**
					 * Gets the value for the Fase object referenced by intFASEIdFASE (PK)
					 * @return Fase
					 */
					try {
						if ((!$this->objFASEIdFASEObject) && (!is_null($this->intFASEIdFASE)))
							$this->objFASEIdFASEObject = Fase::Load($this->intFASEIdFASE);
						return $this->objFASEIdFASEObject;
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

				case 'FASEFechaInicio':
					/**
					 * Sets the value for dttFASEFechaInicio 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFASEFechaInicio = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FASEFechaFin':
					/**
					 * Sets the value for dttFASEFechaFin 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFASEFechaFin = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FASEIdFASE':
					/**
					 * Sets the value for intFASEIdFASE (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objFASEIdFASEObject = null;
						return ($this->intFASEIdFASE = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
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
							throw new QCallerException('Unable to set an unsaved LICENCIAIdLICENCIAObject for this FaseLicencia');

						// Update Local Member Variables
						$this->objLICENCIAIdLICENCIAObject = $mixValue;
						$this->intLICENCIAIdLICENCIA = $mixValue->IdLICENCIA;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FASEIdFASEObject':
					/**
					 * Sets the value for the Fase object referenced by intFASEIdFASE (PK)
					 * @param Fase $mixValue
					 * @return Fase
					 */
					if (is_null($mixValue)) {
						$this->intFASEIdFASE = null;
						$this->objFASEIdFASEObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Fase object
						try {
							$mixValue = QType::Cast($mixValue, 'Fase');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Fase object
						if (is_null($mixValue->IdFASE))
							throw new QCallerException('Unable to set an unsaved FASEIdFASEObject for this FaseLicencia');

						// Update Local Member Variables
						$this->objFASEIdFASEObject = $mixValue;
						$this->intFASEIdFASE = $mixValue->IdFASE;

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
			$strToReturn = '<complexType name="FaseLicencia"><sequence>';
			$strToReturn .= '<element name="LICENCIAIdLICENCIAObject" type="xsd1:Licencia"/>';
			$strToReturn .= '<element name="FASEFechaInicio" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FASEFechaFin" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FASEIdFASEObject" type="xsd1:Fase"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('FaseLicencia', $strComplexTypeArray)) {
				$strComplexTypeArray['FaseLicencia'] = FaseLicencia::GetSoapComplexTypeXml();
				Licencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				Fase::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, FaseLicencia::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new FaseLicencia();
			if ((property_exists($objSoapObject, 'LICENCIAIdLICENCIAObject')) &&
				($objSoapObject->LICENCIAIdLICENCIAObject))
				$objToReturn->LICENCIAIdLICENCIAObject = Licencia::GetObjectFromSoapObject($objSoapObject->LICENCIAIdLICENCIAObject);
			if (property_exists($objSoapObject, 'FASEFechaInicio'))
				$objToReturn->dttFASEFechaInicio = new QDateTime($objSoapObject->FASEFechaInicio);
			if (property_exists($objSoapObject, 'FASEFechaFin'))
				$objToReturn->dttFASEFechaFin = new QDateTime($objSoapObject->FASEFechaFin);
			if ((property_exists($objSoapObject, 'FASEIdFASEObject')) &&
				($objSoapObject->FASEIdFASEObject))
				$objToReturn->FASEIdFASEObject = Fase::GetObjectFromSoapObject($objSoapObject->FASEIdFASEObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, FaseLicencia::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLICENCIAIdLICENCIAObject)
				$objObject->objLICENCIAIdLICENCIAObject = Licencia::GetSoapObjectFromObject($objObject->objLICENCIAIdLICENCIAObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLICENCIAIdLICENCIA = null;
			if ($objObject->dttFASEFechaInicio)
				$objObject->dttFASEFechaInicio = $objObject->dttFASEFechaInicio->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFASEFechaFin)
				$objObject->dttFASEFechaFin = $objObject->dttFASEFechaFin->qFormat(QDateTime::FormatSoap);
			if ($objObject->objFASEIdFASEObject)
				$objObject->objFASEIdFASEObject = Fase::GetSoapObjectFromObject($objObject->objFASEIdFASEObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFASEIdFASE = null;
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
			$iArray['LICENCIAIdLICENCIA'] = $this->intLICENCIAIdLICENCIA;
			$iArray['FASEFechaInicio'] = $this->dttFASEFechaInicio;
			$iArray['FASEFechaFin'] = $this->dttFASEFechaFin;
			$iArray['FASEIdFASE'] = $this->intFASEIdFASE;
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
     * @property-read QQNode $LICENCIAIdLICENCIA
     * @property-read QQNodeLicencia $LICENCIAIdLICENCIAObject
     * @property-read QQNode $FASEFechaInicio
     * @property-read QQNode $FASEFechaFin
     * @property-read QQNode $FASEIdFASE
     * @property-read QQNodeFase $FASEIdFASEObject
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQNodeFaseLicencia extends QQNode {
		protected $strTableName = 'FASE_LICENCIA';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'FaseLicencia';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'Integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'Integer', $this);
				case 'FASEFechaInicio':
					return new QQNode('FASE_fechaInicio', 'FASEFechaInicio', 'Date', $this);
				case 'FASEFechaFin':
					return new QQNode('FASE_fechaFin', 'FASEFechaFin', 'Date', $this);
				case 'FASEIdFASE':
					return new QQNode('FASE_idFASE', 'FASEIdFASE', 'Integer', $this);
				case 'FASEIdFASEObject':
					return new QQNodeFase('FASE_idFASE', 'FASEIdFASEObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'Integer', $this);
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
     * @property-read QQNode $LICENCIAIdLICENCIA
     * @property-read QQNodeLicencia $LICENCIAIdLICENCIAObject
     * @property-read QQNode $FASEFechaInicio
     * @property-read QQNode $FASEFechaFin
     * @property-read QQNode $FASEIdFASE
     * @property-read QQNodeFase $FASEIdFASEObject
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeFaseLicencia extends QQReverseReferenceNode {
		protected $strTableName = 'FASE_LICENCIA';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'FaseLicencia';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'integer', $this);
				case 'FASEFechaInicio':
					return new QQNode('FASE_fechaInicio', 'FASEFechaInicio', 'QDateTime', $this);
				case 'FASEFechaFin':
					return new QQNode('FASE_fechaFin', 'FASEFechaFin', 'QDateTime', $this);
				case 'FASEIdFASE':
					return new QQNode('FASE_idFASE', 'FASEIdFASE', 'integer', $this);
				case 'FASEIdFASEObject':
					return new QQNodeFase('FASE_idFASE', 'FASEIdFASEObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'integer', $this);
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
