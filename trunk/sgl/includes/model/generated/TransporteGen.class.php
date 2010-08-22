<?php
	/**
	 * The abstract TransporteGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Transporte subclass which
	 * extends this TransporteGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Transporte class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdTRANSPORTE the value for intIdTRANSPORTE (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property string $Direccion the value for strDireccion 
	 * @property string $Telefono the value for strTelefono 
	 * @property integer $PAISIdPAIS the value for intPAISIdPAIS (Not Null)
	 * @property Pais $PAISIdPAISObject the value for the Pais object referenced by intPAISIdPAIS (Not Null)
	 * @property-read Importacion $_ImportacionAsTRANSPORTEIdTRANSPORTE the value for the private _objImportacionAsTRANSPORTEIdTRANSPORTE (Read-Only) if set due to an expansion on the IMPORTACION.TRANSPORTE_idTRANSPORTE reverse relationship
	 * @property-read Importacion[] $_ImportacionAsTRANSPORTEIdTRANSPORTEArray the value for the private _objImportacionAsTRANSPORTEIdTRANSPORTEArray (Read-Only) if set due to an ExpandAsArray on the IMPORTACION.TRANSPORTE_idTRANSPORTE reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class TransporteGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column TRANSPORTE.idTRANSPORTE
		 * @var integer intIdTRANSPORTE
		 */
		protected $intIdTRANSPORTE;
		const IdTRANSPORTEDefault = null;


		/**
		 * Protected member variable that maps to the database column TRANSPORTE.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column TRANSPORTE.direccion
		 * @var string strDireccion
		 */
		protected $strDireccion;
		const DireccionMaxLength = 45;
		const DireccionDefault = null;


		/**
		 * Protected member variable that maps to the database column TRANSPORTE.telefono
		 * @var string strTelefono
		 */
		protected $strTelefono;
		const TelefonoMaxLength = 45;
		const TelefonoDefault = null;


		/**
		 * Protected member variable that maps to the database column TRANSPORTE.PAIS_idPAIS
		 * @var integer intPAISIdPAIS
		 */
		protected $intPAISIdPAIS;
		const PAISIdPAISDefault = null;


		/**
		 * Private member variable that stores a reference to a single ImportacionAsTRANSPORTEIdTRANSPORTE object
		 * (of type Importacion), if this Transporte object was restored with
		 * an expansion on the IMPORTACION association table.
		 * @var Importacion _objImportacionAsTRANSPORTEIdTRANSPORTE;
		 */
		private $_objImportacionAsTRANSPORTEIdTRANSPORTE;

		/**
		 * Private member variable that stores a reference to an array of ImportacionAsTRANSPORTEIdTRANSPORTE objects
		 * (of type Importacion[]), if this Transporte object was restored with
		 * an ExpandAsArray on the IMPORTACION association table.
		 * @var Importacion[] _objImportacionAsTRANSPORTEIdTRANSPORTEArray;
		 */
		private $_objImportacionAsTRANSPORTEIdTRANSPORTEArray = array();

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
		 * in the database column TRANSPORTE.PAIS_idPAIS.
		 *
		 * NOTE: Always use the PAISIdPAISObject property getter to correctly retrieve this Pais object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Pais objPAISIdPAISObject
		 */
		protected $objPAISIdPAISObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdTRANSPORTE = Transporte::IdTRANSPORTEDefault;
			$this->strNombre = Transporte::NombreDefault;
			$this->strDireccion = Transporte::DireccionDefault;
			$this->strTelefono = Transporte::TelefonoDefault;
			$this->intPAISIdPAIS = Transporte::PAISIdPAISDefault;
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
		 * Load a Transporte from PK Info
		 * @param integer $intIdTRANSPORTE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Transporte
		 */
		public static function Load($intIdTRANSPORTE, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Transporte::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Transporte()->IdTRANSPORTE, $intIdTRANSPORTE)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Transportes
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Transporte[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Transporte::QueryArray to perform the LoadAll query
			try {
				return Transporte::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Transportes
		 * @return int
		 */
		public static function CountAll() {
			// Call Transporte::QueryCount to perform the CountAll query
			return Transporte::QueryCount(QQ::All());
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
			$objDatabase = Transporte::GetDatabase();

			// Create/Build out the QueryBuilder object with Transporte-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'TRANSPORTE');
			Transporte::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('TRANSPORTE');

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
		 * Static Qcubed Query method to query for a single Transporte object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Transporte the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Transporte::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Transporte object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Transporte::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Transporte::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Transporte objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Transporte[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Transporte::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Transporte::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Transporte objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Transporte::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Transporte::GetDatabase();

			$strQuery = Transporte::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/transporte', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Transporte::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Transporte
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'TRANSPORTE';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idTRANSPORTE', $strAliasPrefix . 'idTRANSPORTE');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'direccion', $strAliasPrefix . 'direccion');
			$objBuilder->AddSelectItem($strTableName, 'telefono', $strAliasPrefix . 'telefono');
			$objBuilder->AddSelectItem($strTableName, 'PAIS_idPAIS', $strAliasPrefix . 'PAIS_idPAIS');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Transporte from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Transporte::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Transporte
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idTRANSPORTE';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdTRANSPORTE == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'TRANSPORTE__';


						// Expanding reverse references: ImportacionAsTRANSPORTEIdTRANSPORTE
						$strAlias = $strAliasPrefix . 'importacionastransporteidtransporte__TRANSPORTE_idTRANSPORTE';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objImportacionAsTRANSPORTEIdTRANSPORTEArray)) {
								$objPreviousChildItems = $objPreviousItem->_objImportacionAsTRANSPORTEIdTRANSPORTEArray;
								$objChildItem = Importacion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'importacionastransporteidtransporte__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objImportacionAsTRANSPORTEIdTRANSPORTEArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objImportacionAsTRANSPORTEIdTRANSPORTEArray[] = Importacion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'importacionastransporteidtransporte__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'TRANSPORTE__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Transporte object
			$objToReturn = new Transporte();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idTRANSPORTE', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idTRANSPORTE'] : $strAliasPrefix . 'idTRANSPORTE';
			$objToReturn->intIdTRANSPORTE = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'direccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'direccion'] : $strAliasPrefix . 'direccion';
			$objToReturn->strDireccion = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'telefono', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'telefono'] : $strAliasPrefix . 'telefono';
			$objToReturn->strTelefono = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PAIS_idPAIS', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PAIS_idPAIS'] : $strAliasPrefix . 'PAIS_idPAIS';
			$objToReturn->intPAISIdPAIS = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdTRANSPORTE != $objPreviousItem->IdTRANSPORTE) {
						continue;
					}
					if (array_diff($objPreviousItem->_objImportacionAsTRANSPORTEIdTRANSPORTEArray, $objToReturn->_objImportacionAsTRANSPORTEIdTRANSPORTEArray) != null) {
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
				$strAliasPrefix = 'TRANSPORTE__';

			// Check for PAISIdPAISObject Early Binding
			$strAlias = $strAliasPrefix . 'PAIS_idPAIS__idPAIS';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPAISIdPAISObject = Pais::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PAIS_idPAIS__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for ImportacionAsTRANSPORTEIdTRANSPORTE Virtual Binding
			$strAlias = $strAliasPrefix . 'importacionastransporteidtransporte__TRANSPORTE_idTRANSPORTE';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objImportacionAsTRANSPORTEIdTRANSPORTEArray[] = Importacion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'importacionastransporteidtransporte__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objImportacionAsTRANSPORTEIdTRANSPORTE = Importacion::InstantiateDbRow($objDbRow, $strAliasPrefix . 'importacionastransporteidtransporte__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Transportes from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Transporte[]
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
					$objItem = Transporte::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Transporte::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Transporte object,
		 * by IdTRANSPORTE Index(es)
		 * @param integer $intIdTRANSPORTE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Transporte
		*/
		public static function LoadByIdTRANSPORTE($intIdTRANSPORTE, $objOptionalClauses = null) {
			return Transporte::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Transporte()->IdTRANSPORTE, $intIdTRANSPORTE)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Transporte objects,
		 * by PAISIdPAIS Index(es)
		 * @param integer $intPAISIdPAIS
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Transporte[]
		*/
		public static function LoadArrayByPAISIdPAIS($intPAISIdPAIS, $objOptionalClauses = null) {
			// Call Transporte::QueryArray to perform the LoadArrayByPAISIdPAIS query
			try {
				return Transporte::QueryArray(
					QQ::Equal(QQN::Transporte()->PAISIdPAIS, $intPAISIdPAIS),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Transportes
		 * by PAISIdPAIS Index(es)
		 * @param integer $intPAISIdPAIS
		 * @return int
		*/
		public static function CountByPAISIdPAIS($intPAISIdPAIS) {
			// Call Transporte::QueryCount to perform the CountByPAISIdPAIS query
			return Transporte::QueryCount(
				QQ::Equal(QQN::Transporte()->PAISIdPAIS, $intPAISIdPAIS)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Transporte
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `TRANSPORTE` (
							`nombre`,
							`direccion`,
							`telefono`,
							`PAIS_idPAIS`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strDireccion) . ',
							' . $objDatabase->SqlVariable($this->strTelefono) . ',
							' . $objDatabase->SqlVariable($this->intPAISIdPAIS) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdTRANSPORTE = $objDatabase->InsertId('TRANSPORTE', 'idTRANSPORTE');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`TRANSPORTE`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`direccion` = ' . $objDatabase->SqlVariable($this->strDireccion) . ',
							`telefono` = ' . $objDatabase->SqlVariable($this->strTelefono) . ',
							`PAIS_idPAIS` = ' . $objDatabase->SqlVariable($this->intPAISIdPAIS) . '
						WHERE
							`idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intIdTRANSPORTE) . '
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
		 * Delete this Transporte
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdTRANSPORTE)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Transporte with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`TRANSPORTE`
				WHERE
					`idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intIdTRANSPORTE) . '');
		}

		/**
		 * Delete all Transportes
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`TRANSPORTE`');
		}

		/**
		 * Truncate TRANSPORTE table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `TRANSPORTE`');
		}

		/**
		 * Reload this Transporte from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Transporte object.');

			// Reload the Object
			$objReloaded = Transporte::Load($this->intIdTRANSPORTE);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->strDireccion = $objReloaded->strDireccion;
			$this->strTelefono = $objReloaded->strTelefono;
			$this->PAISIdPAIS = $objReloaded->PAISIdPAIS;
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
				case 'IdTRANSPORTE':
					/**
					 * Gets the value for intIdTRANSPORTE (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdTRANSPORTE;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'Direccion':
					/**
					 * Gets the value for strDireccion 
					 * @return string
					 */
					return $this->strDireccion;

				case 'Telefono':
					/**
					 * Gets the value for strTelefono 
					 * @return string
					 */
					return $this->strTelefono;

				case 'PAISIdPAIS':
					/**
					 * Gets the value for intPAISIdPAIS (Not Null)
					 * @return integer
					 */
					return $this->intPAISIdPAIS;


				///////////////////
				// Member Objects
				///////////////////
				case 'PAISIdPAISObject':
					/**
					 * Gets the value for the Pais object referenced by intPAISIdPAIS (Not Null)
					 * @return Pais
					 */
					try {
						if ((!$this->objPAISIdPAISObject) && (!is_null($this->intPAISIdPAIS)))
							$this->objPAISIdPAISObject = Pais::Load($this->intPAISIdPAIS);
						return $this->objPAISIdPAISObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ImportacionAsTRANSPORTEIdTRANSPORTE':
					/**
					 * Gets the value for the private _objImportacionAsTRANSPORTEIdTRANSPORTE (Read-Only)
					 * if set due to an expansion on the IMPORTACION.TRANSPORTE_idTRANSPORTE reverse relationship
					 * @return Importacion
					 */
					return $this->_objImportacionAsTRANSPORTEIdTRANSPORTE;

				case '_ImportacionAsTRANSPORTEIdTRANSPORTEArray':
					/**
					 * Gets the value for the private _objImportacionAsTRANSPORTEIdTRANSPORTEArray (Read-Only)
					 * if set due to an ExpandAsArray on the IMPORTACION.TRANSPORTE_idTRANSPORTE reverse relationship
					 * @return Importacion[]
					 */
					return (array) $this->_objImportacionAsTRANSPORTEIdTRANSPORTEArray;


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

				case 'Direccion':
					/**
					 * Sets the value for strDireccion 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDireccion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Telefono':
					/**
					 * Sets the value for strTelefono 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTelefono = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PAISIdPAIS':
					/**
					 * Sets the value for intPAISIdPAIS (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPAISIdPAISObject = null;
						return ($this->intPAISIdPAIS = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'PAISIdPAISObject':
					/**
					 * Sets the value for the Pais object referenced by intPAISIdPAIS (Not Null)
					 * @param Pais $mixValue
					 * @return Pais
					 */
					if (is_null($mixValue)) {
						$this->intPAISIdPAIS = null;
						$this->objPAISIdPAISObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Pais object
						try {
							$mixValue = QType::Cast($mixValue, 'Pais');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Pais object
						if (is_null($mixValue->IdPAIS))
							throw new QCallerException('Unable to set an unsaved PAISIdPAISObject for this Transporte');

						// Update Local Member Variables
						$this->objPAISIdPAISObject = $mixValue;
						$this->intPAISIdPAIS = $mixValue->IdPAIS;

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

			
		
		// Related Objects' Methods for ImportacionAsTRANSPORTEIdTRANSPORTE
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ImportacionsAsTRANSPORTEIdTRANSPORTE as an array of Importacion objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion[]
		*/ 
		public function GetImportacionAsTRANSPORTEIdTRANSPORTEArray($objOptionalClauses = null) {
			if ((is_null($this->intIdTRANSPORTE)))
				return array();

			try {
				return Importacion::LoadArrayByTRANSPORTEIdTRANSPORTE($this->intIdTRANSPORTE, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ImportacionsAsTRANSPORTEIdTRANSPORTE
		 * @return int
		*/ 
		public function CountImportacionsAsTRANSPORTEIdTRANSPORTE() {
			if ((is_null($this->intIdTRANSPORTE)))
				return 0;

			return Importacion::CountByTRANSPORTEIdTRANSPORTE($this->intIdTRANSPORTE);
		}

		/**
		 * Associates a ImportacionAsTRANSPORTEIdTRANSPORTE
		 * @param Importacion $objImportacion
		 * @return void
		*/ 
		public function AssociateImportacionAsTRANSPORTEIdTRANSPORTE(Importacion $objImportacion) {
			if ((is_null($this->intIdTRANSPORTE)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateImportacionAsTRANSPORTEIdTRANSPORTE on this unsaved Transporte.');
			if ((is_null($objImportacion->TRANSPORTEIdTRANSPORTE)) || (is_null($objImportacion->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateImportacionAsTRANSPORTEIdTRANSPORTE on this Transporte with an unsaved Importacion.');

			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`IMPORTACION`
				SET
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intIdTRANSPORTE) . '
				WHERE
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($objImportacion->TRANSPORTEIdTRANSPORTE) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objImportacion->LICENCIAIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates a ImportacionAsTRANSPORTEIdTRANSPORTE
		 * @param Importacion $objImportacion
		 * @return void
		*/ 
		public function UnassociateImportacionAsTRANSPORTEIdTRANSPORTE(Importacion $objImportacion) {
			if ((is_null($this->intIdTRANSPORTE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateImportacionAsTRANSPORTEIdTRANSPORTE on this unsaved Transporte.');
			if ((is_null($objImportacion->TRANSPORTEIdTRANSPORTE)) || (is_null($objImportacion->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateImportacionAsTRANSPORTEIdTRANSPORTE on this Transporte with an unsaved Importacion.');

			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`IMPORTACION`
				SET
					`TRANSPORTE_idTRANSPORTE` = null
				WHERE
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($objImportacion->TRANSPORTEIdTRANSPORTE) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objImportacion->LICENCIAIdLICENCIA) . ' AND
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intIdTRANSPORTE) . '
			');
		}

		/**
		 * Unassociates all ImportacionsAsTRANSPORTEIdTRANSPORTE
		 * @return void
		*/ 
		public function UnassociateAllImportacionsAsTRANSPORTEIdTRANSPORTE() {
			if ((is_null($this->intIdTRANSPORTE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateImportacionAsTRANSPORTEIdTRANSPORTE on this unsaved Transporte.');

			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`IMPORTACION`
				SET
					`TRANSPORTE_idTRANSPORTE` = null
				WHERE
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intIdTRANSPORTE) . '
			');
		}

		/**
		 * Deletes an associated ImportacionAsTRANSPORTEIdTRANSPORTE
		 * @param Importacion $objImportacion
		 * @return void
		*/ 
		public function DeleteAssociatedImportacionAsTRANSPORTEIdTRANSPORTE(Importacion $objImportacion) {
			if ((is_null($this->intIdTRANSPORTE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateImportacionAsTRANSPORTEIdTRANSPORTE on this unsaved Transporte.');
			if ((is_null($objImportacion->TRANSPORTEIdTRANSPORTE)) || (is_null($objImportacion->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateImportacionAsTRANSPORTEIdTRANSPORTE on this Transporte with an unsaved Importacion.');

			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`IMPORTACION`
				WHERE
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($objImportacion->TRANSPORTEIdTRANSPORTE) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objImportacion->LICENCIAIdLICENCIA) . ' AND
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intIdTRANSPORTE) . '
			');
		}

		/**
		 * Deletes all associated ImportacionsAsTRANSPORTEIdTRANSPORTE
		 * @return void
		*/ 
		public function DeleteAllImportacionsAsTRANSPORTEIdTRANSPORTE() {
			if ((is_null($this->intIdTRANSPORTE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateImportacionAsTRANSPORTEIdTRANSPORTE on this unsaved Transporte.');

			// Get the Database Object for this Class
			$objDatabase = Transporte::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`IMPORTACION`
				WHERE
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intIdTRANSPORTE) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Transporte"><sequence>';
			$strToReturn .= '<element name="IdTRANSPORTE" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Direccion" type="xsd:string"/>';
			$strToReturn .= '<element name="Telefono" type="xsd:string"/>';
			$strToReturn .= '<element name="PAISIdPAISObject" type="xsd1:Pais"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Transporte', $strComplexTypeArray)) {
				$strComplexTypeArray['Transporte'] = Transporte::GetSoapComplexTypeXml();
				Pais::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Transporte::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Transporte();
			if (property_exists($objSoapObject, 'IdTRANSPORTE'))
				$objToReturn->intIdTRANSPORTE = $objSoapObject->IdTRANSPORTE;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Direccion'))
				$objToReturn->strDireccion = $objSoapObject->Direccion;
			if (property_exists($objSoapObject, 'Telefono'))
				$objToReturn->strTelefono = $objSoapObject->Telefono;
			if ((property_exists($objSoapObject, 'PAISIdPAISObject')) &&
				($objSoapObject->PAISIdPAISObject))
				$objToReturn->PAISIdPAISObject = Pais::GetObjectFromSoapObject($objSoapObject->PAISIdPAISObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Transporte::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objPAISIdPAISObject)
				$objObject->objPAISIdPAISObject = Pais::GetSoapObjectFromObject($objObject->objPAISIdPAISObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPAISIdPAIS = null;
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
			$iArray['IdTRANSPORTE'] = $this->intIdTRANSPORTE;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['Direccion'] = $this->strDireccion;
			$iArray['Telefono'] = $this->strTelefono;
			$iArray['PAISIdPAIS'] = $this->intPAISIdPAIS;
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
     * @property-read QQNode $IdTRANSPORTE
     * @property-read QQNode $Nombre
     * @property-read QQNode $Direccion
     * @property-read QQNode $Telefono
     * @property-read QQNode $PAISIdPAIS
     * @property-read QQNodePais $PAISIdPAISObject
     *
     *
     * @property-read QQReverseReferenceNodeImportacion $ImportacionAsTRANSPORTEIdTRANSPORTE

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeTransporte extends QQNode {
		protected $strTableName = 'TRANSPORTE';
		protected $strPrimaryKey = 'idTRANSPORTE';
		protected $strClassName = 'Transporte';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTRANSPORTE':
					return new QQNode('idTRANSPORTE', 'IdTRANSPORTE', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'VarChar', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'VarChar', $this);
				case 'PAISIdPAIS':
					return new QQNode('PAIS_idPAIS', 'PAISIdPAIS', 'Integer', $this);
				case 'PAISIdPAISObject':
					return new QQNodePais('PAIS_idPAIS', 'PAISIdPAISObject', 'Integer', $this);
				case 'ImportacionAsTRANSPORTEIdTRANSPORTE':
					return new QQReverseReferenceNodeImportacion($this, 'importacionastransporteidtransporte', 'reverse_reference', 'TRANSPORTE_idTRANSPORTE');

				case '_PrimaryKeyNode':
					return new QQNode('idTRANSPORTE', 'IdTRANSPORTE', 'Integer', $this);
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
     * @property-read QQNode $IdTRANSPORTE
     * @property-read QQNode $Nombre
     * @property-read QQNode $Direccion
     * @property-read QQNode $Telefono
     * @property-read QQNode $PAISIdPAIS
     * @property-read QQNodePais $PAISIdPAISObject
     *
     *
     * @property-read QQReverseReferenceNodeImportacion $ImportacionAsTRANSPORTEIdTRANSPORTE

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeTransporte extends QQReverseReferenceNode {
		protected $strTableName = 'TRANSPORTE';
		protected $strPrimaryKey = 'idTRANSPORTE';
		protected $strClassName = 'Transporte';
		public function __get($strName) {
			switch ($strName) {
				case 'IdTRANSPORTE':
					return new QQNode('idTRANSPORTE', 'IdTRANSPORTE', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'string', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'string', $this);
				case 'PAISIdPAIS':
					return new QQNode('PAIS_idPAIS', 'PAISIdPAIS', 'integer', $this);
				case 'PAISIdPAISObject':
					return new QQNodePais('PAIS_idPAIS', 'PAISIdPAISObject', 'integer', $this);
				case 'ImportacionAsTRANSPORTEIdTRANSPORTE':
					return new QQReverseReferenceNodeImportacion($this, 'importacionastransporteidtransporte', 'reverse_reference', 'TRANSPORTE_idTRANSPORTE');

				case '_PrimaryKeyNode':
					return new QQNode('idTRANSPORTE', 'IdTRANSPORTE', 'integer', $this);
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
