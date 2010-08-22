<?php
	/**
	 * The abstract CodigoPagoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the CodigoPago subclass which
	 * extends this CodigoPagoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the CodigoPago class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $LICENCIAIdLICENCIA the value for intLICENCIAIdLICENCIA (PK)
	 * @property integer $TIPODEPAGOIdTIPODEPAGO the value for intTIPODEPAGOIdTIPODEPAGO (PK)
	 * @property string $NumRef the value for strNumRef 
	 * @property string $Fecha the value for strFecha 
	 * @property string $Divisa the value for strDivisa 
	 * @property string $Monto the value for strMonto 
	 * @property Licencia $LICENCIAIdLICENCIAObject the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
	 * @property TipoDePago $TIPODEPAGOIdTIPODEPAGOObject the value for the TipoDePago object referenced by intTIPODEPAGOIdTIPODEPAGO (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class CodigoPagoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column CODIGO_PAGO.LICENCIA_idLICENCIA
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
		 * Protected member variable that maps to the database PK column CODIGO_PAGO.TIPO_DE_PAGO_idTIPO_DE_PAGO
		 * @var integer intTIPODEPAGOIdTIPODEPAGO
		 */
		protected $intTIPODEPAGOIdTIPODEPAGO;
		const TIPODEPAGOIdTIPODEPAGODefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intTIPODEPAGOIdTIPODEPAGO;
		 */
		protected $__intTIPODEPAGOIdTIPODEPAGO;

		/**
		 * Protected member variable that maps to the database column CODIGO_PAGO.numRef
		 * @var string strNumRef
		 */
		protected $strNumRef;
		const NumRefMaxLength = 45;
		const NumRefDefault = null;


		/**
		 * Protected member variable that maps to the database column CODIGO_PAGO.fecha
		 * @var string strFecha
		 */
		protected $strFecha;
		const FechaMaxLength = 45;
		const FechaDefault = null;


		/**
		 * Protected member variable that maps to the database column CODIGO_PAGO.divisa
		 * @var string strDivisa
		 */
		protected $strDivisa;
		const DivisaMaxLength = 45;
		const DivisaDefault = null;


		/**
		 * Protected member variable that maps to the database column CODIGO_PAGO.monto
		 * @var string strMonto
		 */
		protected $strMonto;
		const MontoMaxLength = 45;
		const MontoDefault = null;


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
		 * in the database column CODIGO_PAGO.LICENCIA_idLICENCIA.
		 *
		 * NOTE: Always use the LICENCIAIdLICENCIAObject property getter to correctly retrieve this Licencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Licencia objLICENCIAIdLICENCIAObject
		 */
		protected $objLICENCIAIdLICENCIAObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column CODIGO_PAGO.TIPO_DE_PAGO_idTIPO_DE_PAGO.
		 *
		 * NOTE: Always use the TIPODEPAGOIdTIPODEPAGOObject property getter to correctly retrieve this TipoDePago object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var TipoDePago objTIPODEPAGOIdTIPODEPAGOObject
		 */
		protected $objTIPODEPAGOIdTIPODEPAGOObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intLICENCIAIdLICENCIA = CodigoPago::LICENCIAIdLICENCIADefault;
			$this->intTIPODEPAGOIdTIPODEPAGO = CodigoPago::TIPODEPAGOIdTIPODEPAGODefault;
			$this->strNumRef = CodigoPago::NumRefDefault;
			$this->strFecha = CodigoPago::FechaDefault;
			$this->strDivisa = CodigoPago::DivisaDefault;
			$this->strMonto = CodigoPago::MontoDefault;
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
		 * Load a CodigoPago from PK Info
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intTIPODEPAGOIdTIPODEPAGO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CodigoPago
		 */
		public static function Load($intLICENCIAIdLICENCIA, $intTIPODEPAGOIdTIPODEPAGO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return CodigoPago::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CodigoPago()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::CodigoPago()->TIPODEPAGOIdTIPODEPAGO, $intTIPODEPAGOIdTIPODEPAGO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all CodigoPagos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CodigoPago[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call CodigoPago::QueryArray to perform the LoadAll query
			try {
				return CodigoPago::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all CodigoPagos
		 * @return int
		 */
		public static function CountAll() {
			// Call CodigoPago::QueryCount to perform the CountAll query
			return CodigoPago::QueryCount(QQ::All());
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
			$objDatabase = CodigoPago::GetDatabase();

			// Create/Build out the QueryBuilder object with CodigoPago-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'CODIGO_PAGO');
			CodigoPago::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('CODIGO_PAGO');

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
		 * Static Qcubed Query method to query for a single CodigoPago object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CodigoPago the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CodigoPago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new CodigoPago object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = CodigoPago::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return CodigoPago::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of CodigoPago objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return CodigoPago[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CodigoPago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return CodigoPago::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of CodigoPago objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = CodigoPago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = CodigoPago::GetDatabase();

			$strQuery = CodigoPago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/codigopago', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = CodigoPago::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this CodigoPago
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'CODIGO_PAGO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'LICENCIA_idLICENCIA', $strAliasPrefix . 'LICENCIA_idLICENCIA');
			$objBuilder->AddSelectItem($strTableName, 'TIPO_DE_PAGO_idTIPO_DE_PAGO', $strAliasPrefix . 'TIPO_DE_PAGO_idTIPO_DE_PAGO');
			$objBuilder->AddSelectItem($strTableName, 'numRef', $strAliasPrefix . 'numRef');
			$objBuilder->AddSelectItem($strTableName, 'fecha', $strAliasPrefix . 'fecha');
			$objBuilder->AddSelectItem($strTableName, 'divisa', $strAliasPrefix . 'divisa');
			$objBuilder->AddSelectItem($strTableName, 'monto', $strAliasPrefix . 'monto');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a CodigoPago from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this CodigoPago::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return CodigoPago
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the CodigoPago object
			$objToReturn = new CodigoPago();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'LICENCIA_idLICENCIA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'LICENCIA_idLICENCIA'] : $strAliasPrefix . 'LICENCIA_idLICENCIA';
			$objToReturn->intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'TIPO_DE_PAGO_idTIPO_DE_PAGO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'TIPO_DE_PAGO_idTIPO_DE_PAGO'] : $strAliasPrefix . 'TIPO_DE_PAGO_idTIPO_DE_PAGO';
			$objToReturn->intTIPODEPAGOIdTIPODEPAGO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intTIPODEPAGOIdTIPODEPAGO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'numRef', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'numRef'] : $strAliasPrefix . 'numRef';
			$objToReturn->strNumRef = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'fecha', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fecha'] : $strAliasPrefix . 'fecha';
			$objToReturn->strFecha = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'divisa', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'divisa'] : $strAliasPrefix . 'divisa';
			$objToReturn->strDivisa = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'monto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'monto'] : $strAliasPrefix . 'monto';
			$objToReturn->strMonto = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LICENCIAIdLICENCIA != $objPreviousItem->LICENCIAIdLICENCIA) {
						continue;
					}
					if ($objToReturn->TIPODEPAGOIdTIPODEPAGO != $objPreviousItem->TIPODEPAGOIdTIPODEPAGO) {
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
				$strAliasPrefix = 'CODIGO_PAGO__';

			// Check for LICENCIAIdLICENCIAObject Early Binding
			$strAlias = $strAliasPrefix . 'LICENCIA_idLICENCIA__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLICENCIAIdLICENCIAObject = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'LICENCIA_idLICENCIA__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for TIPODEPAGOIdTIPODEPAGOObject Early Binding
			$strAlias = $strAliasPrefix . 'TIPO_DE_PAGO_idTIPO_DE_PAGO__idTIPO_DE_PAGO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTIPODEPAGOIdTIPODEPAGOObject = TipoDePago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'TIPO_DE_PAGO_idTIPO_DE_PAGO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of CodigoPagos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return CodigoPago[]
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
					$objItem = CodigoPago::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = CodigoPago::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single CodigoPago object,
		 * by LICENCIAIdLICENCIA, TIPODEPAGOIdTIPODEPAGO Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intTIPODEPAGOIdTIPODEPAGO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CodigoPago
		*/
		public static function LoadByLICENCIAIdLICENCIATIPODEPAGOIdTIPODEPAGO($intLICENCIAIdLICENCIA, $intTIPODEPAGOIdTIPODEPAGO, $objOptionalClauses = null) {
			return CodigoPago::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::CodigoPago()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::CodigoPago()->TIPODEPAGOIdTIPODEPAGO, $intTIPODEPAGOIdTIPODEPAGO)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of CodigoPago objects,
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CodigoPago[]
		*/
		public static function LoadArrayByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Call CodigoPago::QueryArray to perform the LoadArrayByLICENCIAIdLICENCIA query
			try {
				return CodigoPago::QueryArray(
					QQ::Equal(QQN::CodigoPago()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CodigoPagos
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @return int
		*/
		public static function CountByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA) {
			// Call CodigoPago::QueryCount to perform the CountByLICENCIAIdLICENCIA query
			return CodigoPago::QueryCount(
				QQ::Equal(QQN::CodigoPago()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
			);
		}
			
		/**
		 * Load an array of CodigoPago objects,
		 * by TIPODEPAGOIdTIPODEPAGO Index(es)
		 * @param integer $intTIPODEPAGOIdTIPODEPAGO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CodigoPago[]
		*/
		public static function LoadArrayByTIPODEPAGOIdTIPODEPAGO($intTIPODEPAGOIdTIPODEPAGO, $objOptionalClauses = null) {
			// Call CodigoPago::QueryArray to perform the LoadArrayByTIPODEPAGOIdTIPODEPAGO query
			try {
				return CodigoPago::QueryArray(
					QQ::Equal(QQN::CodigoPago()->TIPODEPAGOIdTIPODEPAGO, $intTIPODEPAGOIdTIPODEPAGO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count CodigoPagos
		 * by TIPODEPAGOIdTIPODEPAGO Index(es)
		 * @param integer $intTIPODEPAGOIdTIPODEPAGO
		 * @return int
		*/
		public static function CountByTIPODEPAGOIdTIPODEPAGO($intTIPODEPAGOIdTIPODEPAGO) {
			// Call CodigoPago::QueryCount to perform the CountByTIPODEPAGOIdTIPODEPAGO query
			return CodigoPago::QueryCount(
				QQ::Equal(QQN::CodigoPago()->TIPODEPAGOIdTIPODEPAGO, $intTIPODEPAGOIdTIPODEPAGO)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this CodigoPago
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = CodigoPago::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `CODIGO_PAGO` (
							`LICENCIA_idLICENCIA`,
							`TIPO_DE_PAGO_idTIPO_DE_PAGO`,
							`numRef`,
							`fecha`,
							`divisa`,
							`monto`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							' . $objDatabase->SqlVariable($this->intTIPODEPAGOIdTIPODEPAGO) . ',
							' . $objDatabase->SqlVariable($this->strNumRef) . ',
							' . $objDatabase->SqlVariable($this->strFecha) . ',
							' . $objDatabase->SqlVariable($this->strDivisa) . ',
							' . $objDatabase->SqlVariable($this->strMonto) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`CODIGO_PAGO`
						SET
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intTIPODEPAGOIdTIPODEPAGO) . ',
							`numRef` = ' . $objDatabase->SqlVariable($this->strNumRef) . ',
							`fecha` = ' . $objDatabase->SqlVariable($this->strFecha) . ',
							`divisa` = ' . $objDatabase->SqlVariable($this->strDivisa) . ',
							`monto` = ' . $objDatabase->SqlVariable($this->strMonto) . '
						WHERE
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->__intLICENCIAIdLICENCIA) . ' AND
							`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->__intTIPODEPAGOIdTIPODEPAGO) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->__intTIPODEPAGOIdTIPODEPAGO = $this->intTIPODEPAGOIdTIPODEPAGO;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this CodigoPago
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLICENCIAIdLICENCIA)) || (is_null($this->intTIPODEPAGOIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this CodigoPago with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = CodigoPago::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`CODIGO_PAGO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intTIPODEPAGOIdTIPODEPAGO) . '');
		}

		/**
		 * Delete all CodigoPagos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = CodigoPago::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`CODIGO_PAGO`');
		}

		/**
		 * Truncate CODIGO_PAGO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = CodigoPago::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `CODIGO_PAGO`');
		}

		/**
		 * Reload this CodigoPago from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved CodigoPago object.');

			// Reload the Object
			$objReloaded = CodigoPago::Load($this->intLICENCIAIdLICENCIA, $this->intTIPODEPAGOIdTIPODEPAGO);

			// Update $this's local variables to match
			$this->LICENCIAIdLICENCIA = $objReloaded->LICENCIAIdLICENCIA;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->TIPODEPAGOIdTIPODEPAGO = $objReloaded->TIPODEPAGOIdTIPODEPAGO;
			$this->__intTIPODEPAGOIdTIPODEPAGO = $this->intTIPODEPAGOIdTIPODEPAGO;
			$this->strNumRef = $objReloaded->strNumRef;
			$this->strFecha = $objReloaded->strFecha;
			$this->strDivisa = $objReloaded->strDivisa;
			$this->strMonto = $objReloaded->strMonto;
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

				case 'TIPODEPAGOIdTIPODEPAGO':
					/**
					 * Gets the value for intTIPODEPAGOIdTIPODEPAGO (PK)
					 * @return integer
					 */
					return $this->intTIPODEPAGOIdTIPODEPAGO;

				case 'NumRef':
					/**
					 * Gets the value for strNumRef 
					 * @return string
					 */
					return $this->strNumRef;

				case 'Fecha':
					/**
					 * Gets the value for strFecha 
					 * @return string
					 */
					return $this->strFecha;

				case 'Divisa':
					/**
					 * Gets the value for strDivisa 
					 * @return string
					 */
					return $this->strDivisa;

				case 'Monto':
					/**
					 * Gets the value for strMonto 
					 * @return string
					 */
					return $this->strMonto;


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

				case 'TIPODEPAGOIdTIPODEPAGOObject':
					/**
					 * Gets the value for the TipoDePago object referenced by intTIPODEPAGOIdTIPODEPAGO (PK)
					 * @return TipoDePago
					 */
					try {
						if ((!$this->objTIPODEPAGOIdTIPODEPAGOObject) && (!is_null($this->intTIPODEPAGOIdTIPODEPAGO)))
							$this->objTIPODEPAGOIdTIPODEPAGOObject = TipoDePago::Load($this->intTIPODEPAGOIdTIPODEPAGO);
						return $this->objTIPODEPAGOIdTIPODEPAGOObject;
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

				case 'TIPODEPAGOIdTIPODEPAGO':
					/**
					 * Sets the value for intTIPODEPAGOIdTIPODEPAGO (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTIPODEPAGOIdTIPODEPAGOObject = null;
						return ($this->intTIPODEPAGOIdTIPODEPAGO = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NumRef':
					/**
					 * Sets the value for strNumRef 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNumRef = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Fecha':
					/**
					 * Sets the value for strFecha 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFecha = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Divisa':
					/**
					 * Sets the value for strDivisa 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDivisa = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Monto':
					/**
					 * Sets the value for strMonto 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strMonto = QType::Cast($mixValue, QType::String));
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
							throw new QCallerException('Unable to set an unsaved LICENCIAIdLICENCIAObject for this CodigoPago');

						// Update Local Member Variables
						$this->objLICENCIAIdLICENCIAObject = $mixValue;
						$this->intLICENCIAIdLICENCIA = $mixValue->IdLICENCIA;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'TIPODEPAGOIdTIPODEPAGOObject':
					/**
					 * Sets the value for the TipoDePago object referenced by intTIPODEPAGOIdTIPODEPAGO (PK)
					 * @param TipoDePago $mixValue
					 * @return TipoDePago
					 */
					if (is_null($mixValue)) {
						$this->intTIPODEPAGOIdTIPODEPAGO = null;
						$this->objTIPODEPAGOIdTIPODEPAGOObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a TipoDePago object
						try {
							$mixValue = QType::Cast($mixValue, 'TipoDePago');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED TipoDePago object
						if (is_null($mixValue->IdTIPODEPAGO))
							throw new QCallerException('Unable to set an unsaved TIPODEPAGOIdTIPODEPAGOObject for this CodigoPago');

						// Update Local Member Variables
						$this->objTIPODEPAGOIdTIPODEPAGOObject = $mixValue;
						$this->intTIPODEPAGOIdTIPODEPAGO = $mixValue->IdTIPODEPAGO;

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
			$strToReturn = '<complexType name="CodigoPago"><sequence>';
			$strToReturn .= '<element name="LICENCIAIdLICENCIAObject" type="xsd1:Licencia"/>';
			$strToReturn .= '<element name="TIPODEPAGOIdTIPODEPAGOObject" type="xsd1:TipoDePago"/>';
			$strToReturn .= '<element name="NumRef" type="xsd:string"/>';
			$strToReturn .= '<element name="Fecha" type="xsd:string"/>';
			$strToReturn .= '<element name="Divisa" type="xsd:string"/>';
			$strToReturn .= '<element name="Monto" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('CodigoPago', $strComplexTypeArray)) {
				$strComplexTypeArray['CodigoPago'] = CodigoPago::GetSoapComplexTypeXml();
				Licencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				TipoDePago::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, CodigoPago::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new CodigoPago();
			if ((property_exists($objSoapObject, 'LICENCIAIdLICENCIAObject')) &&
				($objSoapObject->LICENCIAIdLICENCIAObject))
				$objToReturn->LICENCIAIdLICENCIAObject = Licencia::GetObjectFromSoapObject($objSoapObject->LICENCIAIdLICENCIAObject);
			if ((property_exists($objSoapObject, 'TIPODEPAGOIdTIPODEPAGOObject')) &&
				($objSoapObject->TIPODEPAGOIdTIPODEPAGOObject))
				$objToReturn->TIPODEPAGOIdTIPODEPAGOObject = TipoDePago::GetObjectFromSoapObject($objSoapObject->TIPODEPAGOIdTIPODEPAGOObject);
			if (property_exists($objSoapObject, 'NumRef'))
				$objToReturn->strNumRef = $objSoapObject->NumRef;
			if (property_exists($objSoapObject, 'Fecha'))
				$objToReturn->strFecha = $objSoapObject->Fecha;
			if (property_exists($objSoapObject, 'Divisa'))
				$objToReturn->strDivisa = $objSoapObject->Divisa;
			if (property_exists($objSoapObject, 'Monto'))
				$objToReturn->strMonto = $objSoapObject->Monto;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, CodigoPago::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLICENCIAIdLICENCIAObject)
				$objObject->objLICENCIAIdLICENCIAObject = Licencia::GetSoapObjectFromObject($objObject->objLICENCIAIdLICENCIAObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLICENCIAIdLICENCIA = null;
			if ($objObject->objTIPODEPAGOIdTIPODEPAGOObject)
				$objObject->objTIPODEPAGOIdTIPODEPAGOObject = TipoDePago::GetSoapObjectFromObject($objObject->objTIPODEPAGOIdTIPODEPAGOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTIPODEPAGOIdTIPODEPAGO = null;
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
			$iArray['TIPODEPAGOIdTIPODEPAGO'] = $this->intTIPODEPAGOIdTIPODEPAGO;
			$iArray['NumRef'] = $this->strNumRef;
			$iArray['Fecha'] = $this->strFecha;
			$iArray['Divisa'] = $this->strDivisa;
			$iArray['Monto'] = $this->strMonto;
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
     * @property-read QQNode $TIPODEPAGOIdTIPODEPAGO
     * @property-read QQNodeTipoDePago $TIPODEPAGOIdTIPODEPAGOObject
     * @property-read QQNode $NumRef
     * @property-read QQNode $Fecha
     * @property-read QQNode $Divisa
     * @property-read QQNode $Monto
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQNodeCodigoPago extends QQNode {
		protected $strTableName = 'CODIGO_PAGO';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'CodigoPago';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'Integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'Integer', $this);
				case 'TIPODEPAGOIdTIPODEPAGO':
					return new QQNode('TIPO_DE_PAGO_idTIPO_DE_PAGO', 'TIPODEPAGOIdTIPODEPAGO', 'Integer', $this);
				case 'TIPODEPAGOIdTIPODEPAGOObject':
					return new QQNodeTipoDePago('TIPO_DE_PAGO_idTIPO_DE_PAGO', 'TIPODEPAGOIdTIPODEPAGOObject', 'Integer', $this);
				case 'NumRef':
					return new QQNode('numRef', 'NumRef', 'VarChar', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'VarChar', $this);
				case 'Divisa':
					return new QQNode('divisa', 'Divisa', 'VarChar', $this);
				case 'Monto':
					return new QQNode('monto', 'Monto', 'VarChar', $this);

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
     * @property-read QQNode $TIPODEPAGOIdTIPODEPAGO
     * @property-read QQNodeTipoDePago $TIPODEPAGOIdTIPODEPAGOObject
     * @property-read QQNode $NumRef
     * @property-read QQNode $Fecha
     * @property-read QQNode $Divisa
     * @property-read QQNode $Monto
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeCodigoPago extends QQReverseReferenceNode {
		protected $strTableName = 'CODIGO_PAGO';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'CodigoPago';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'integer', $this);
				case 'TIPODEPAGOIdTIPODEPAGO':
					return new QQNode('TIPO_DE_PAGO_idTIPO_DE_PAGO', 'TIPODEPAGOIdTIPODEPAGO', 'integer', $this);
				case 'TIPODEPAGOIdTIPODEPAGOObject':
					return new QQNodeTipoDePago('TIPO_DE_PAGO_idTIPO_DE_PAGO', 'TIPODEPAGOIdTIPODEPAGOObject', 'integer', $this);
				case 'NumRef':
					return new QQNode('numRef', 'NumRef', 'string', $this);
				case 'Fecha':
					return new QQNode('fecha', 'Fecha', 'string', $this);
				case 'Divisa':
					return new QQNode('divisa', 'Divisa', 'string', $this);
				case 'Monto':
					return new QQNode('monto', 'Monto', 'string', $this);

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
