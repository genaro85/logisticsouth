<?php
	/**
	 * The abstract TipoDePagoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the TipoDePago subclass which
	 * extends this TipoDePagoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the TipoDePago class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdTIPODEPAGO the value for intIdTIPODEPAGO (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property-read CodigoPago $_CodigoPagoAsTIPODEPAGOIdTIPODEPAGO the value for the private _objCodigoPagoAsTIPODEPAGOIdTIPODEPAGO (Read-Only) if set due to an expansion on the CODIGO_PAGO.TIPO_DE_PAGO_idTIPO_DE_PAGO reverse relationship
	 * @property-read CodigoPago[] $_CodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray the value for the private _objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray (Read-Only) if set due to an ExpandAsArray on the CODIGO_PAGO.TIPO_DE_PAGO_idTIPO_DE_PAGO reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TipoDePagoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column TIPO_DE_PAGO.idTIPO_DE_PAGO
		 * @var integer intIdTIPODEPAGO
		 */
		protected $intIdTIPODEPAGO;
		const IdTIPODEPAGODefault = null;


		/**
		 * Protected member variable that maps to the database column TIPO_DE_PAGO.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single CodigoPagoAsTIPODEPAGOIdTIPODEPAGO object
		 * (of type CodigoPago), if this TipoDePago object was restored with
		 * an expansion on the CODIGO_PAGO association table.
		 * @var CodigoPago _objCodigoPagoAsTIPODEPAGOIdTIPODEPAGO;
		 */
		private $_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGO;

		/**
		 * Private member variable that stores a reference to an array of CodigoPagoAsTIPODEPAGOIdTIPODEPAGO objects
		 * (of type CodigoPago[]), if this TipoDePago object was restored with
		 * an ExpandAsArray on the CODIGO_PAGO association table.
		 * @var CodigoPago[] _objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray;
		 */
		private $_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray = array();

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
		public function Initialize()
		{
			$this->intIdTIPODEPAGO = TipoDePago::IdTIPODEPAGODefault;
			$this->strNombre = TipoDePago::NombreDefault;
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
		 * Load a TipoDePago from PK Info
		 * @param integer $intIdTIPODEPAGO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoDePago
		 */
		public static function Load($intIdTIPODEPAGO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return TipoDePago::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TipoDePago()->IdTIPODEPAGO, $intIdTIPODEPAGO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all TipoDePagos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoDePago[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call TipoDePago::QueryArray to perform the LoadAll query
			try {
				return TipoDePago::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all TipoDePagos
		 * @return int
		 */
		public static function CountAll() {
			// Call TipoDePago::QueryCount to perform the CountAll query
			return TipoDePago::QueryCount(QQ::All());
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
			$objDatabase = TipoDePago::GetDatabase();

			// Create/Build out the QueryBuilder object with TipoDePago-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'TIPO_DE_PAGO');
			TipoDePago::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('TIPO_DE_PAGO');

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
		 * Static Qcubed Query method to query for a single TipoDePago object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TipoDePago the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoDePago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new TipoDePago object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = TipoDePago::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return TipoDePago::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of TipoDePago objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return TipoDePago[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoDePago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return TipoDePago::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of TipoDePago objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = TipoDePago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = TipoDePago::GetDatabase();

			$strQuery = TipoDePago::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/tipodepago', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = TipoDePago::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this TipoDePago
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'TIPO_DE_PAGO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idTIPO_DE_PAGO', $strAliasPrefix . 'idTIPO_DE_PAGO');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a TipoDePago from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this TipoDePago::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return TipoDePago
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idTIPO_DE_PAGO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdTIPODEPAGO == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'TIPO_DE_PAGO__';


						// Expanding reverse references: CodigoPagoAsTIPODEPAGOIdTIPODEPAGO
						$strAlias = $strAliasPrefix . 'codigopagoastipodepagoidtipodepago__LICENCIA_idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray;
								$objChildItem = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoastipodepagoidtipodepago__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray[] = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoastipodepagoidtipodepago__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'TIPO_DE_PAGO__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the TipoDePago object
			$objToReturn = new TipoDePago();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idTIPO_DE_PAGO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idTIPO_DE_PAGO'] : $strAliasPrefix . 'idTIPO_DE_PAGO';
			$objToReturn->intIdTIPODEPAGO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdTIPODEPAGO != $objPreviousItem->IdTIPODEPAGO) {
						continue;
					}
					if (array_diff($objPreviousItem->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray, $objToReturn->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray) != null) {
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
				$strAliasPrefix = 'TIPO_DE_PAGO__';




			// Check for CodigoPagoAsTIPODEPAGOIdTIPODEPAGO Virtual Binding
			$strAlias = $strAliasPrefix . 'codigopagoastipodepagoidtipodepago__LICENCIA_idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray[] = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoastipodepagoidtipodepago__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGO = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoastipodepagoidtipodepago__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of TipoDePagos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return TipoDePago[]
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
					$objItem = TipoDePago::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = TipoDePago::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single TipoDePago object,
		 * by IdTIPODEPAGO Index(es)
		 * @param integer $intIdTIPODEPAGO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return TipoDePago
		*/
		public static function LoadByIdTIPODEPAGO($intIdTIPODEPAGO, $objOptionalClauses = null) {
			return TipoDePago::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::TipoDePago()->IdTIPODEPAGO, $intIdTIPODEPAGO)
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
		 * Save this TipoDePago
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `TIPO_DE_PAGO` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdTIPODEPAGO = $objDatabase->InsertId('TIPO_DE_PAGO', 'idTIPO_DE_PAGO');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`TIPO_DE_PAGO`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							`idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intIdTIPODEPAGO) . '
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
		 * Delete this TipoDePago
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this TipoDePago with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`TIPO_DE_PAGO`
				WHERE
					`idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intIdTIPODEPAGO) . '');
		}

		/**
		 * Delete all TipoDePagos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`TIPO_DE_PAGO`');
		}

		/**
		 * Truncate TIPO_DE_PAGO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `TIPO_DE_PAGO`');
		}

		/**
		 * Reload this TipoDePago from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved TipoDePago object.');

			// Reload the Object
			$objReloaded = TipoDePago::Load($this->intIdTIPODEPAGO);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
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
				case 'IdTIPODEPAGO':
					/**
					 * Gets the value for intIdTIPODEPAGO (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdTIPODEPAGO;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CodigoPagoAsTIPODEPAGOIdTIPODEPAGO':
					/**
					 * Gets the value for the private _objCodigoPagoAsTIPODEPAGOIdTIPODEPAGO (Read-Only)
					 * if set due to an expansion on the CODIGO_PAGO.TIPO_DE_PAGO_idTIPO_DE_PAGO reverse relationship
					 * @return CodigoPago
					 */
					return $this->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGO;

				case '_CodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray':
					/**
					 * Gets the value for the private _objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray (Read-Only)
					 * if set due to an ExpandAsArray on the CODIGO_PAGO.TIPO_DE_PAGO_idTIPO_DE_PAGO reverse relationship
					 * @return CodigoPago[]
					 */
					return (array) $this->_objCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray;


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

			
		
		// Related Objects' Methods for CodigoPagoAsTIPODEPAGOIdTIPODEPAGO
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CodigoPagosAsTIPODEPAGOIdTIPODEPAGO as an array of CodigoPago objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CodigoPago[]
		*/ 
		public function GetCodigoPagoAsTIPODEPAGOIdTIPODEPAGOArray($objOptionalClauses = null) {
			if ((is_null($this->intIdTIPODEPAGO)))
				return array();

			try {
				return CodigoPago::LoadArrayByTIPODEPAGOIdTIPODEPAGO($this->intIdTIPODEPAGO, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CodigoPagosAsTIPODEPAGOIdTIPODEPAGO
		 * @return int
		*/ 
		public function CountCodigoPagosAsTIPODEPAGOIdTIPODEPAGO() {
			if ((is_null($this->intIdTIPODEPAGO)))
				return 0;

			return CodigoPago::CountByTIPODEPAGOIdTIPODEPAGO($this->intIdTIPODEPAGO);
		}

		/**
		 * Associates a CodigoPagoAsTIPODEPAGOIdTIPODEPAGO
		 * @param CodigoPago $objCodigoPago
		 * @return void
		*/ 
		public function AssociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO(CodigoPago $objCodigoPago) {
			if ((is_null($this->intIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this unsaved TipoDePago.');
			if ((is_null($objCodigoPago->LICENCIAIdLICENCIA)) || (is_null($objCodigoPago->TIPODEPAGOIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this TipoDePago with an unsaved CodigoPago.');

			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`CODIGO_PAGO`
				SET
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intIdTIPODEPAGO) . '
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objCodigoPago->LICENCIAIdLICENCIA) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($objCodigoPago->TIPODEPAGOIdTIPODEPAGO) . '
			');
		}

		/**
		 * Unassociates a CodigoPagoAsTIPODEPAGOIdTIPODEPAGO
		 * @param CodigoPago $objCodigoPago
		 * @return void
		*/ 
		public function UnassociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO(CodigoPago $objCodigoPago) {
			if ((is_null($this->intIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this unsaved TipoDePago.');
			if ((is_null($objCodigoPago->LICENCIAIdLICENCIA)) || (is_null($objCodigoPago->TIPODEPAGOIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this TipoDePago with an unsaved CodigoPago.');

			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`CODIGO_PAGO`
				SET
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objCodigoPago->LICENCIAIdLICENCIA) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($objCodigoPago->TIPODEPAGOIdTIPODEPAGO) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intIdTIPODEPAGO) . '
			');
		}

		/**
		 * Unassociates all CodigoPagosAsTIPODEPAGOIdTIPODEPAGO
		 * @return void
		*/ 
		public function UnassociateAllCodigoPagosAsTIPODEPAGOIdTIPODEPAGO() {
			if ((is_null($this->intIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this unsaved TipoDePago.');

			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`CODIGO_PAGO`
				SET
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = null
				WHERE
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intIdTIPODEPAGO) . '
			');
		}

		/**
		 * Deletes an associated CodigoPagoAsTIPODEPAGOIdTIPODEPAGO
		 * @param CodigoPago $objCodigoPago
		 * @return void
		*/ 
		public function DeleteAssociatedCodigoPagoAsTIPODEPAGOIdTIPODEPAGO(CodigoPago $objCodigoPago) {
			if ((is_null($this->intIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this unsaved TipoDePago.');
			if ((is_null($objCodigoPago->LICENCIAIdLICENCIA)) || (is_null($objCodigoPago->TIPODEPAGOIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this TipoDePago with an unsaved CodigoPago.');

			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`CODIGO_PAGO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objCodigoPago->LICENCIAIdLICENCIA) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($objCodigoPago->TIPODEPAGOIdTIPODEPAGO) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intIdTIPODEPAGO) . '
			');
		}

		/**
		 * Deletes all associated CodigoPagosAsTIPODEPAGOIdTIPODEPAGO
		 * @return void
		*/ 
		public function DeleteAllCodigoPagosAsTIPODEPAGOIdTIPODEPAGO() {
			if ((is_null($this->intIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsTIPODEPAGOIdTIPODEPAGO on this unsaved TipoDePago.');

			// Get the Database Object for this Class
			$objDatabase = TipoDePago::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`CODIGO_PAGO`
				WHERE
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($this->intIdTIPODEPAGO) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="TipoDePago"><sequence>';
			$strToReturn .= '<element name="IdTIPODEPAGO" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('TipoDePago', $strComplexTypeArray)) {
				$strComplexTypeArray['TipoDePago'] = TipoDePago::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, TipoDePago::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new TipoDePago();
			if (property_exists($objSoapObject, 'IdTIPODEPAGO'))
				$objToReturn->intIdTIPODEPAGO = $objSoapObject->IdTIPODEPAGO;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, TipoDePago::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdTIPODEPAGO'] = $this->intIdTIPODEPAGO;
			$iArray['Nombre'] = $this->strNombre;
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
     * @property-read QQNode $IdTIPODEPAGO
     * @property-read QQNode $Nombre
     *
     *
     * @property-read QQReverseReferenceNodeCodigoPago $CodigoPagoAsTIPODEPAGOIdTIPODEPAGO

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTipoDePago extends QQNode {
		protected $strTableName = 'TIPO_DE_PAGO';
		protected $strPrimaryKey = 'idTIPO_DE_PAGO';
		protected $strClassName = 'TipoDePago';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTIPODEPAGO':
					return new QQNode('idTIPO_DE_PAGO', 'IdTIPODEPAGO', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'CodigoPagoAsTIPODEPAGOIdTIPODEPAGO':
					return new QQReverseReferenceNodeCodigoPago($this, 'codigopagoastipodepagoidtipodepago', 'reverse_reference', 'TIPO_DE_PAGO_idTIPO_DE_PAGO');

				case '_PrimaryKeyNode':
					return new QQNode('idTIPO_DE_PAGO', 'IdTIPODEPAGO', 'Integer', $this);
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
     * @property-read QQNode $IdTIPODEPAGO
     * @property-read QQNode $Nombre
     *
     *
     * @property-read QQReverseReferenceNodeCodigoPago $CodigoPagoAsTIPODEPAGOIdTIPODEPAGO

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTipoDePago extends QQReverseReferenceNode {
		protected $strTableName = 'TIPO_DE_PAGO';
		protected $strPrimaryKey = 'idTIPO_DE_PAGO';
		protected $strClassName = 'TipoDePago';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTIPODEPAGO':
					return new QQNode('idTIPO_DE_PAGO', 'IdTIPODEPAGO', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'CodigoPagoAsTIPODEPAGOIdTIPODEPAGO':
					return new QQReverseReferenceNodeCodigoPago($this, 'codigopagoastipodepagoidtipodepago', 'reverse_reference', 'TIPO_DE_PAGO_idTIPO_DE_PAGO');

				case '_PrimaryKeyNode':
					return new QQNode('idTIPO_DE_PAGO', 'IdTIPODEPAGO', 'integer', $this);
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
