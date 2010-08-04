<?php
	/**
	 * The abstract PaisGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Pais subclass which
	 * extends this PaisGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Pais class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdPAIS the value for intIdPAIS (Read-Only PK)
	 * @property string $Nombre the value for strNombre 
	 * @property-read Proveedor $_ProveedorAsPAISIdPAIS the value for the private _objProveedorAsPAISIdPAIS (Read-Only) if set due to an expansion on the PROVEEDOR.PAIS_idPAIS reverse relationship
	 * @property-read Proveedor[] $_ProveedorAsPAISIdPAISArray the value for the private _objProveedorAsPAISIdPAISArray (Read-Only) if set due to an ExpandAsArray on the PROVEEDOR.PAIS_idPAIS reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class PaisGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column PAIS.idPAIS
		 * @var integer intIdPAIS
		 */
		protected $intIdPAIS;
		const IdPAISDefault = null;


		/**
		 * Protected member variable that maps to the database column PAIS.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Private member variable that stores a reference to a single ProveedorAsPAISIdPAIS object
		 * (of type Proveedor), if this Pais object was restored with
		 * an expansion on the PROVEEDOR association table.
		 * @var Proveedor _objProveedorAsPAISIdPAIS;
		 */
		private $_objProveedorAsPAISIdPAIS;

		/**
		 * Private member variable that stores a reference to an array of ProveedorAsPAISIdPAIS objects
		 * (of type Proveedor[]), if this Pais object was restored with
		 * an ExpandAsArray on the PROVEEDOR association table.
		 * @var Proveedor[] _objProveedorAsPAISIdPAISArray;
		 */
		private $_objProveedorAsPAISIdPAISArray = array();

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
			$this->intIdPAIS = Pais::IdPAISDefault;
			$this->strNombre = Pais::NombreDefault;
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
		 * Load a Pais from PK Info
		 * @param integer $intIdPAIS
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pais
		 */
		public static function Load($intIdPAIS, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Pais::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Pais()->IdPAIS, $intIdPAIS)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Paises
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pais[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Pais::QueryArray to perform the LoadAll query
			try {
				return Pais::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Paises
		 * @return int
		 */
		public static function CountAll() {
			// Call Pais::QueryCount to perform the CountAll query
			return Pais::QueryCount(QQ::All());
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
			$objDatabase = Pais::GetDatabase();

			// Create/Build out the QueryBuilder object with Pais-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'PAIS');
			Pais::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('PAIS');

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
		 * Static Qcubed Query method to query for a single Pais object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Pais the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Pais::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Pais object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Pais::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Pais::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Pais objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Pais[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Pais::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Pais::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Pais objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Pais::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Pais::GetDatabase();

			$strQuery = Pais::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/pais', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Pais::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Pais
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'PAIS';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idPAIS', $strAliasPrefix . 'idPAIS');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Pais from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Pais::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Pais
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idPAIS';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdPAIS == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'PAIS__';


						// Expanding reverse references: ProveedorAsPAISIdPAIS
						$strAlias = $strAliasPrefix . 'proveedoraspaisidpais__idPROVEEDOR';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objProveedorAsPAISIdPAISArray)) {
								$objPreviousChildItems = $objPreviousItem->_objProveedorAsPAISIdPAISArray;
								$objChildItem = Proveedor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'proveedoraspaisidpais__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objProveedorAsPAISIdPAISArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objProveedorAsPAISIdPAISArray[] = Proveedor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'proveedoraspaisidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'PAIS__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Pais object
			$objToReturn = new Pais();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idPAIS', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idPAIS'] : $strAliasPrefix . 'idPAIS';
			$objToReturn->intIdPAIS = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdPAIS != $objPreviousItem->IdPAIS) {
						continue;
					}
					if (array_diff($objPreviousItem->_objProveedorAsPAISIdPAISArray, $objToReturn->_objProveedorAsPAISIdPAISArray) != null) {
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
				$strAliasPrefix = 'PAIS__';




			// Check for ProveedorAsPAISIdPAIS Virtual Binding
			$strAlias = $strAliasPrefix . 'proveedoraspaisidpais__idPROVEEDOR';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objProveedorAsPAISIdPAISArray[] = Proveedor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'proveedoraspaisidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objProveedorAsPAISIdPAIS = Proveedor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'proveedoraspaisidpais__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Paises from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Pais[]
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
					$objItem = Pais::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Pais::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Pais object,
		 * by IdPAIS Index(es)
		 * @param integer $intIdPAIS
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Pais
		*/
		public static function LoadByIdPAIS($intIdPAIS, $objOptionalClauses = null) {
			return Pais::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Pais()->IdPAIS, $intIdPAIS)
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
		 * Save this Pais
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `PAIS` (
							`nombre`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdPAIS = $objDatabase->InsertId('PAIS', 'idPAIS');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`PAIS`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . '
						WHERE
							`idPAIS` = ' . $objDatabase->SqlVariable($this->intIdPAIS) . '
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
		 * Delete this Pais
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdPAIS)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Pais with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PAIS`
				WHERE
					`idPAIS` = ' . $objDatabase->SqlVariable($this->intIdPAIS) . '');
		}

		/**
		 * Delete all Paises
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PAIS`');
		}

		/**
		 * Truncate PAIS table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `PAIS`');
		}

		/**
		 * Reload this Pais from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Pais object.');

			// Reload the Object
			$objReloaded = Pais::Load($this->intIdPAIS);

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
				case 'IdPAIS':
					/**
					 * Gets the value for intIdPAIS (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdPAIS;

				case 'Nombre':
					/**
					 * Gets the value for strNombre 
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

				case '_ProveedorAsPAISIdPAIS':
					/**
					 * Gets the value for the private _objProveedorAsPAISIdPAIS (Read-Only)
					 * if set due to an expansion on the PROVEEDOR.PAIS_idPAIS reverse relationship
					 * @return Proveedor
					 */
					return $this->_objProveedorAsPAISIdPAIS;

				case '_ProveedorAsPAISIdPAISArray':
					/**
					 * Gets the value for the private _objProveedorAsPAISIdPAISArray (Read-Only)
					 * if set due to an ExpandAsArray on the PROVEEDOR.PAIS_idPAIS reverse relationship
					 * @return Proveedor[]
					 */
					return (array) $this->_objProveedorAsPAISIdPAISArray;


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
					 * Sets the value for strNombre 
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

			
		
		// Related Objects' Methods for ProveedorAsPAISIdPAIS
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ProveedorsAsPAISIdPAIS as an array of Proveedor objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proveedor[]
		*/ 
		public function GetProveedorAsPAISIdPAISArray($objOptionalClauses = null) {
			if ((is_null($this->intIdPAIS)))
				return array();

			try {
				return Proveedor::LoadArrayByPAISIdPAIS($this->intIdPAIS, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ProveedorsAsPAISIdPAIS
		 * @return int
		*/ 
		public function CountProveedorsAsPAISIdPAIS() {
			if ((is_null($this->intIdPAIS)))
				return 0;

			return Proveedor::CountByPAISIdPAIS($this->intIdPAIS);
		}

		/**
		 * Associates a ProveedorAsPAISIdPAIS
		 * @param Proveedor $objProveedor
		 * @return void
		*/ 
		public function AssociateProveedorAsPAISIdPAIS(Proveedor $objProveedor) {
			if ((is_null($this->intIdPAIS)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProveedorAsPAISIdPAIS on this unsaved Pais.');
			if ((is_null($objProveedor->IdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateProveedorAsPAISIdPAIS on this Pais with an unsaved Proveedor.');

			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`PROVEEDOR`
				SET
					`PAIS_idPAIS` = ' . $objDatabase->SqlVariable($this->intIdPAIS) . '
				WHERE
					`idPROVEEDOR` = ' . $objDatabase->SqlVariable($objProveedor->IdPROVEEDOR) . '
			');
		}

		/**
		 * Unassociates a ProveedorAsPAISIdPAIS
		 * @param Proveedor $objProveedor
		 * @return void
		*/ 
		public function UnassociateProveedorAsPAISIdPAIS(Proveedor $objProveedor) {
			if ((is_null($this->intIdPAIS)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProveedorAsPAISIdPAIS on this unsaved Pais.');
			if ((is_null($objProveedor->IdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProveedorAsPAISIdPAIS on this Pais with an unsaved Proveedor.');

			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`PROVEEDOR`
				SET
					`PAIS_idPAIS` = null
				WHERE
					`idPROVEEDOR` = ' . $objDatabase->SqlVariable($objProveedor->IdPROVEEDOR) . ' AND
					`PAIS_idPAIS` = ' . $objDatabase->SqlVariable($this->intIdPAIS) . '
			');
		}

		/**
		 * Unassociates all ProveedorsAsPAISIdPAIS
		 * @return void
		*/ 
		public function UnassociateAllProveedorsAsPAISIdPAIS() {
			if ((is_null($this->intIdPAIS)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProveedorAsPAISIdPAIS on this unsaved Pais.');

			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`PROVEEDOR`
				SET
					`PAIS_idPAIS` = null
				WHERE
					`PAIS_idPAIS` = ' . $objDatabase->SqlVariable($this->intIdPAIS) . '
			');
		}

		/**
		 * Deletes an associated ProveedorAsPAISIdPAIS
		 * @param Proveedor $objProveedor
		 * @return void
		*/ 
		public function DeleteAssociatedProveedorAsPAISIdPAIS(Proveedor $objProveedor) {
			if ((is_null($this->intIdPAIS)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProveedorAsPAISIdPAIS on this unsaved Pais.');
			if ((is_null($objProveedor->IdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProveedorAsPAISIdPAIS on this Pais with an unsaved Proveedor.');

			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PROVEEDOR`
				WHERE
					`idPROVEEDOR` = ' . $objDatabase->SqlVariable($objProveedor->IdPROVEEDOR) . ' AND
					`PAIS_idPAIS` = ' . $objDatabase->SqlVariable($this->intIdPAIS) . '
			');
		}

		/**
		 * Deletes all associated ProveedorsAsPAISIdPAIS
		 * @return void
		*/ 
		public function DeleteAllProveedorsAsPAISIdPAIS() {
			if ((is_null($this->intIdPAIS)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateProveedorAsPAISIdPAIS on this unsaved Pais.');

			// Get the Database Object for this Class
			$objDatabase = Pais::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PROVEEDOR`
				WHERE
					`PAIS_idPAIS` = ' . $objDatabase->SqlVariable($this->intIdPAIS) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Pais"><sequence>';
			$strToReturn .= '<element name="IdPAIS" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Pais', $strComplexTypeArray)) {
				$strComplexTypeArray['Pais'] = Pais::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Pais::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Pais();
			if (property_exists($objSoapObject, 'IdPAIS'))
				$objToReturn->intIdPAIS = $objSoapObject->IdPAIS;
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
				array_push($objArrayToReturn, Pais::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdPAIS'] = $this->intIdPAIS;
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
     * @property-read QQNode $IdPAIS
     * @property-read QQNode $Nombre
     *
     *
     * @property-read QQReverseReferenceNodeProveedor $ProveedorAsPAISIdPAIS

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodePais extends QQNode {
		protected $strTableName = 'PAIS';
		protected $strPrimaryKey = 'idPAIS';
		protected $strClassName = 'Pais';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPAIS':
					return new QQNode('idPAIS', 'IdPAIS', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'ProveedorAsPAISIdPAIS':
					return new QQReverseReferenceNodeProveedor($this, 'proveedoraspaisidpais', 'reverse_reference', 'PAIS_idPAIS');

				case '_PrimaryKeyNode':
					return new QQNode('idPAIS', 'IdPAIS', 'Integer', $this);
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
     * @property-read QQNode $IdPAIS
     * @property-read QQNode $Nombre
     *
     *
     * @property-read QQReverseReferenceNodeProveedor $ProveedorAsPAISIdPAIS

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodePais extends QQReverseReferenceNode {
		protected $strTableName = 'PAIS';
		protected $strPrimaryKey = 'idPAIS';
		protected $strClassName = 'Pais';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPAIS':
					return new QQNode('idPAIS', 'IdPAIS', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'ProveedorAsPAISIdPAIS':
					return new QQReverseReferenceNodeProveedor($this, 'proveedoraspaisidpais', 'reverse_reference', 'PAIS_idPAIS');

				case '_PrimaryKeyNode':
					return new QQNode('idPAIS', 'IdPAIS', 'integer', $this);
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
