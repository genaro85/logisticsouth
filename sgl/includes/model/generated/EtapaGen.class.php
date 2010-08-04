<?php
	/**
	 * The abstract EtapaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Etapa subclass which
	 * extends this EtapaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Etapa class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdETAPA the value for intIdETAPA (Read-Only PK)
	 * @property integer $FASEIdFASE the value for intFASEIdFASE (Not Null)
	 * @property integer $PROCESOIdPROCESO the value for intPROCESOIdPROCESO (Not Null)
	 * @property Fase $FASEIdFASEObject the value for the Fase object referenced by intFASEIdFASE (Not Null)
	 * @property Proceso $PROCESOIdPROCESOObject the value for the Proceso object referenced by intPROCESOIdPROCESO (Not Null)
	 * @property-read EtapaLicencia $_EtapaLicenciaAsETAPAIdETAPA the value for the private _objEtapaLicenciaAsETAPAIdETAPA (Read-Only) if set due to an expansion on the ETAPA_LICENCIA.ETAPA_idETAPA reverse relationship
	 * @property-read EtapaLicencia[] $_EtapaLicenciaAsETAPAIdETAPAArray the value for the private _objEtapaLicenciaAsETAPAIdETAPAArray (Read-Only) if set due to an ExpandAsArray on the ETAPA_LICENCIA.ETAPA_idETAPA reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EtapaGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column ETAPA.idETAPA
		 * @var integer intIdETAPA
		 */
		protected $intIdETAPA;
		const IdETAPADefault = null;


		/**
		 * Protected member variable that maps to the database column ETAPA.FASE_idFASE
		 * @var integer intFASEIdFASE
		 */
		protected $intFASEIdFASE;
		const FASEIdFASEDefault = null;


		/**
		 * Protected member variable that maps to the database column ETAPA.PROCESO_idPROCESO
		 * @var integer intPROCESOIdPROCESO
		 */
		protected $intPROCESOIdPROCESO;
		const PROCESOIdPROCESODefault = null;


		/**
		 * Private member variable that stores a reference to a single EtapaLicenciaAsETAPAIdETAPA object
		 * (of type EtapaLicencia), if this Etapa object was restored with
		 * an expansion on the ETAPA_LICENCIA association table.
		 * @var EtapaLicencia _objEtapaLicenciaAsETAPAIdETAPA;
		 */
		private $_objEtapaLicenciaAsETAPAIdETAPA;

		/**
		 * Private member variable that stores a reference to an array of EtapaLicenciaAsETAPAIdETAPA objects
		 * (of type EtapaLicencia[]), if this Etapa object was restored with
		 * an ExpandAsArray on the ETAPA_LICENCIA association table.
		 * @var EtapaLicencia[] _objEtapaLicenciaAsETAPAIdETAPAArray;
		 */
		private $_objEtapaLicenciaAsETAPAIdETAPAArray = array();

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
		 * in the database column ETAPA.FASE_idFASE.
		 *
		 * NOTE: Always use the FASEIdFASEObject property getter to correctly retrieve this Fase object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Fase objFASEIdFASEObject
		 */
		protected $objFASEIdFASEObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column ETAPA.PROCESO_idPROCESO.
		 *
		 * NOTE: Always use the PROCESOIdPROCESOObject property getter to correctly retrieve this Proceso object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Proceso objPROCESOIdPROCESOObject
		 */
		protected $objPROCESOIdPROCESOObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdETAPA = Etapa::IdETAPADefault;
			$this->intFASEIdFASE = Etapa::FASEIdFASEDefault;
			$this->intPROCESOIdPROCESO = Etapa::PROCESOIdPROCESODefault;
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
		 * Load a Etapa from PK Info
		 * @param integer $intIdETAPA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Etapa
		 */
		public static function Load($intIdETAPA, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Etapa::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Etapa()->IdETAPA, $intIdETAPA)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Etapas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Etapa[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Etapa::QueryArray to perform the LoadAll query
			try {
				return Etapa::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Etapas
		 * @return int
		 */
		public static function CountAll() {
			// Call Etapa::QueryCount to perform the CountAll query
			return Etapa::QueryCount(QQ::All());
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
			$objDatabase = Etapa::GetDatabase();

			// Create/Build out the QueryBuilder object with Etapa-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'ETAPA');
			Etapa::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('ETAPA');

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
		 * Static Qcubed Query method to query for a single Etapa object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Etapa the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Etapa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Etapa object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Etapa::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Etapa::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Etapa objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Etapa[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Etapa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Etapa::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Etapa objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Etapa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Etapa::GetDatabase();

			$strQuery = Etapa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/etapa', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Etapa::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Etapa
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'ETAPA';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idETAPA', $strAliasPrefix . 'idETAPA');
			$objBuilder->AddSelectItem($strTableName, 'FASE_idFASE', $strAliasPrefix . 'FASE_idFASE');
			$objBuilder->AddSelectItem($strTableName, 'PROCESO_idPROCESO', $strAliasPrefix . 'PROCESO_idPROCESO');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Etapa from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Etapa::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Etapa
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idETAPA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdETAPA == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'ETAPA__';


						// Expanding reverse references: EtapaLicenciaAsETAPAIdETAPA
						$strAlias = $strAliasPrefix . 'etapalicenciaasetapaidetapa__LICENCIA_idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEtapaLicenciaAsETAPAIdETAPAArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEtapaLicenciaAsETAPAIdETAPAArray;
								$objChildItem = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaasetapaidetapa__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEtapaLicenciaAsETAPAIdETAPAArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEtapaLicenciaAsETAPAIdETAPAArray[] = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaasetapaidetapa__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'ETAPA__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Etapa object
			$objToReturn = new Etapa();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idETAPA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idETAPA'] : $strAliasPrefix . 'idETAPA';
			$objToReturn->intIdETAPA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'FASE_idFASE', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FASE_idFASE'] : $strAliasPrefix . 'FASE_idFASE';
			$objToReturn->intFASEIdFASE = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'PROCESO_idPROCESO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PROCESO_idPROCESO'] : $strAliasPrefix . 'PROCESO_idPROCESO';
			$objToReturn->intPROCESOIdPROCESO = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdETAPA != $objPreviousItem->IdETAPA) {
						continue;
					}
					if (array_diff($objPreviousItem->_objEtapaLicenciaAsETAPAIdETAPAArray, $objToReturn->_objEtapaLicenciaAsETAPAIdETAPAArray) != null) {
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
				$strAliasPrefix = 'ETAPA__';

			// Check for FASEIdFASEObject Early Binding
			$strAlias = $strAliasPrefix . 'FASE_idFASE__idFASE';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFASEIdFASEObject = Fase::InstantiateDbRow($objDbRow, $strAliasPrefix . 'FASE_idFASE__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PROCESOIdPROCESOObject Early Binding
			$strAlias = $strAliasPrefix . 'PROCESO_idPROCESO__idPROCESO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPROCESOIdPROCESOObject = Proceso::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PROCESO_idPROCESO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for EtapaLicenciaAsETAPAIdETAPA Virtual Binding
			$strAlias = $strAliasPrefix . 'etapalicenciaasetapaidetapa__LICENCIA_idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objEtapaLicenciaAsETAPAIdETAPAArray[] = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaasetapaidetapa__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEtapaLicenciaAsETAPAIdETAPA = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaasetapaidetapa__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Etapas from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Etapa[]
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
					$objItem = Etapa::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Etapa::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Etapa object,
		 * by IdETAPA Index(es)
		 * @param integer $intIdETAPA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Etapa
		*/
		public static function LoadByIdETAPA($intIdETAPA, $objOptionalClauses = null) {
			return Etapa::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Etapa()->IdETAPA, $intIdETAPA)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Etapa objects,
		 * by FASEIdFASE Index(es)
		 * @param integer $intFASEIdFASE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Etapa[]
		*/
		public static function LoadArrayByFASEIdFASE($intFASEIdFASE, $objOptionalClauses = null) {
			// Call Etapa::QueryArray to perform the LoadArrayByFASEIdFASE query
			try {
				return Etapa::QueryArray(
					QQ::Equal(QQN::Etapa()->FASEIdFASE, $intFASEIdFASE),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Etapas
		 * by FASEIdFASE Index(es)
		 * @param integer $intFASEIdFASE
		 * @return int
		*/
		public static function CountByFASEIdFASE($intFASEIdFASE) {
			// Call Etapa::QueryCount to perform the CountByFASEIdFASE query
			return Etapa::QueryCount(
				QQ::Equal(QQN::Etapa()->FASEIdFASE, $intFASEIdFASE)
			);
		}
			
		/**
		 * Load an array of Etapa objects,
		 * by PROCESOIdPROCESO Index(es)
		 * @param integer $intPROCESOIdPROCESO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Etapa[]
		*/
		public static function LoadArrayByPROCESOIdPROCESO($intPROCESOIdPROCESO, $objOptionalClauses = null) {
			// Call Etapa::QueryArray to perform the LoadArrayByPROCESOIdPROCESO query
			try {
				return Etapa::QueryArray(
					QQ::Equal(QQN::Etapa()->PROCESOIdPROCESO, $intPROCESOIdPROCESO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Etapas
		 * by PROCESOIdPROCESO Index(es)
		 * @param integer $intPROCESOIdPROCESO
		 * @return int
		*/
		public static function CountByPROCESOIdPROCESO($intPROCESOIdPROCESO) {
			// Call Etapa::QueryCount to perform the CountByPROCESOIdPROCESO query
			return Etapa::QueryCount(
				QQ::Equal(QQN::Etapa()->PROCESOIdPROCESO, $intPROCESOIdPROCESO)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Etapa
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `ETAPA` (
							`FASE_idFASE`,
							`PROCESO_idPROCESO`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intFASEIdFASE) . ',
							' . $objDatabase->SqlVariable($this->intPROCESOIdPROCESO) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdETAPA = $objDatabase->InsertId('ETAPA', 'idETAPA');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`ETAPA`
						SET
							`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intFASEIdFASE) . ',
							`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intPROCESOIdPROCESO) . '
						WHERE
							`idETAPA` = ' . $objDatabase->SqlVariable($this->intIdETAPA) . '
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
		 * Delete this Etapa
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Etapa with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA`
				WHERE
					`idETAPA` = ' . $objDatabase->SqlVariable($this->intIdETAPA) . '');
		}

		/**
		 * Delete all Etapas
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA`');
		}

		/**
		 * Truncate ETAPA table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `ETAPA`');
		}

		/**
		 * Reload this Etapa from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Etapa object.');

			// Reload the Object
			$objReloaded = Etapa::Load($this->intIdETAPA);

			// Update $this's local variables to match
			$this->FASEIdFASE = $objReloaded->FASEIdFASE;
			$this->PROCESOIdPROCESO = $objReloaded->PROCESOIdPROCESO;
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
				case 'IdETAPA':
					/**
					 * Gets the value for intIdETAPA (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdETAPA;

				case 'FASEIdFASE':
					/**
					 * Gets the value for intFASEIdFASE (Not Null)
					 * @return integer
					 */
					return $this->intFASEIdFASE;

				case 'PROCESOIdPROCESO':
					/**
					 * Gets the value for intPROCESOIdPROCESO (Not Null)
					 * @return integer
					 */
					return $this->intPROCESOIdPROCESO;


				///////////////////
				// Member Objects
				///////////////////
				case 'FASEIdFASEObject':
					/**
					 * Gets the value for the Fase object referenced by intFASEIdFASE (Not Null)
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

				case 'PROCESOIdPROCESOObject':
					/**
					 * Gets the value for the Proceso object referenced by intPROCESOIdPROCESO (Not Null)
					 * @return Proceso
					 */
					try {
						if ((!$this->objPROCESOIdPROCESOObject) && (!is_null($this->intPROCESOIdPROCESO)))
							$this->objPROCESOIdPROCESOObject = Proceso::Load($this->intPROCESOIdPROCESO);
						return $this->objPROCESOIdPROCESOObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_EtapaLicenciaAsETAPAIdETAPA':
					/**
					 * Gets the value for the private _objEtapaLicenciaAsETAPAIdETAPA (Read-Only)
					 * if set due to an expansion on the ETAPA_LICENCIA.ETAPA_idETAPA reverse relationship
					 * @return EtapaLicencia
					 */
					return $this->_objEtapaLicenciaAsETAPAIdETAPA;

				case '_EtapaLicenciaAsETAPAIdETAPAArray':
					/**
					 * Gets the value for the private _objEtapaLicenciaAsETAPAIdETAPAArray (Read-Only)
					 * if set due to an ExpandAsArray on the ETAPA_LICENCIA.ETAPA_idETAPA reverse relationship
					 * @return EtapaLicencia[]
					 */
					return (array) $this->_objEtapaLicenciaAsETAPAIdETAPAArray;


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
				case 'FASEIdFASE':
					/**
					 * Sets the value for intFASEIdFASE (Not Null)
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

				case 'PROCESOIdPROCESO':
					/**
					 * Sets the value for intPROCESOIdPROCESO (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPROCESOIdPROCESOObject = null;
						return ($this->intPROCESOIdPROCESO = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'FASEIdFASEObject':
					/**
					 * Sets the value for the Fase object referenced by intFASEIdFASE (Not Null)
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
							throw new QCallerException('Unable to set an unsaved FASEIdFASEObject for this Etapa');

						// Update Local Member Variables
						$this->objFASEIdFASEObject = $mixValue;
						$this->intFASEIdFASE = $mixValue->IdFASE;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PROCESOIdPROCESOObject':
					/**
					 * Sets the value for the Proceso object referenced by intPROCESOIdPROCESO (Not Null)
					 * @param Proceso $mixValue
					 * @return Proceso
					 */
					if (is_null($mixValue)) {
						$this->intPROCESOIdPROCESO = null;
						$this->objPROCESOIdPROCESOObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Proceso object
						try {
							$mixValue = QType::Cast($mixValue, 'Proceso');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Proceso object
						if (is_null($mixValue->IdPROCESO))
							throw new QCallerException('Unable to set an unsaved PROCESOIdPROCESOObject for this Etapa');

						// Update Local Member Variables
						$this->objPROCESOIdPROCESOObject = $mixValue;
						$this->intPROCESOIdPROCESO = $mixValue->IdPROCESO;

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

			
		
		// Related Objects' Methods for EtapaLicenciaAsETAPAIdETAPA
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EtapaLicenciasAsETAPAIdETAPA as an array of EtapaLicencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EtapaLicencia[]
		*/ 
		public function GetEtapaLicenciaAsETAPAIdETAPAArray($objOptionalClauses = null) {
			if ((is_null($this->intIdETAPA)))
				return array();

			try {
				return EtapaLicencia::LoadArrayByETAPAIdETAPA($this->intIdETAPA, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EtapaLicenciasAsETAPAIdETAPA
		 * @return int
		*/ 
		public function CountEtapaLicenciasAsETAPAIdETAPA() {
			if ((is_null($this->intIdETAPA)))
				return 0;

			return EtapaLicencia::CountByETAPAIdETAPA($this->intIdETAPA);
		}

		/**
		 * Associates a EtapaLicenciaAsETAPAIdETAPA
		 * @param EtapaLicencia $objEtapaLicencia
		 * @return void
		*/ 
		public function AssociateEtapaLicenciaAsETAPAIdETAPA(EtapaLicencia $objEtapaLicencia) {
			if ((is_null($this->intIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaLicenciaAsETAPAIdETAPA on this unsaved Etapa.');
			if ((is_null($objEtapaLicencia->LICENCIAIdLICENCIA)) || (is_null($objEtapaLicencia->ETAPAIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaLicenciaAsETAPAIdETAPA on this Etapa with an unsaved EtapaLicencia.');

			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA_LICENCIA`
				SET
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($this->intIdETAPA) . '
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->LICENCIAIdLICENCIA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->ETAPAIdETAPA) . '
			');
		}

		/**
		 * Unassociates a EtapaLicenciaAsETAPAIdETAPA
		 * @param EtapaLicencia $objEtapaLicencia
		 * @return void
		*/ 
		public function UnassociateEtapaLicenciaAsETAPAIdETAPA(EtapaLicencia $objEtapaLicencia) {
			if ((is_null($this->intIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsETAPAIdETAPA on this unsaved Etapa.');
			if ((is_null($objEtapaLicencia->LICENCIAIdLICENCIA)) || (is_null($objEtapaLicencia->ETAPAIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsETAPAIdETAPA on this Etapa with an unsaved EtapaLicencia.');

			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA_LICENCIA`
				SET
					`ETAPA_idETAPA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->LICENCIAIdLICENCIA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->ETAPAIdETAPA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($this->intIdETAPA) . '
			');
		}

		/**
		 * Unassociates all EtapaLicenciasAsETAPAIdETAPA
		 * @return void
		*/ 
		public function UnassociateAllEtapaLicenciasAsETAPAIdETAPA() {
			if ((is_null($this->intIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsETAPAIdETAPA on this unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA_LICENCIA`
				SET
					`ETAPA_idETAPA` = null
				WHERE
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($this->intIdETAPA) . '
			');
		}

		/**
		 * Deletes an associated EtapaLicenciaAsETAPAIdETAPA
		 * @param EtapaLicencia $objEtapaLicencia
		 * @return void
		*/ 
		public function DeleteAssociatedEtapaLicenciaAsETAPAIdETAPA(EtapaLicencia $objEtapaLicencia) {
			if ((is_null($this->intIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsETAPAIdETAPA on this unsaved Etapa.');
			if ((is_null($objEtapaLicencia->LICENCIAIdLICENCIA)) || (is_null($objEtapaLicencia->ETAPAIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsETAPAIdETAPA on this Etapa with an unsaved EtapaLicencia.');

			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA_LICENCIA`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->LICENCIAIdLICENCIA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->ETAPAIdETAPA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($this->intIdETAPA) . '
			');
		}

		/**
		 * Deletes all associated EtapaLicenciasAsETAPAIdETAPA
		 * @return void
		*/ 
		public function DeleteAllEtapaLicenciasAsETAPAIdETAPA() {
			if ((is_null($this->intIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsETAPAIdETAPA on this unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Etapa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA_LICENCIA`
				WHERE
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($this->intIdETAPA) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Etapa"><sequence>';
			$strToReturn .= '<element name="IdETAPA" type="xsd:int"/>';
			$strToReturn .= '<element name="FASEIdFASEObject" type="xsd1:Fase"/>';
			$strToReturn .= '<element name="PROCESOIdPROCESOObject" type="xsd1:Proceso"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Etapa', $strComplexTypeArray)) {
				$strComplexTypeArray['Etapa'] = Etapa::GetSoapComplexTypeXml();
				Fase::AlterSoapComplexTypeArray($strComplexTypeArray);
				Proceso::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Etapa::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Etapa();
			if (property_exists($objSoapObject, 'IdETAPA'))
				$objToReturn->intIdETAPA = $objSoapObject->IdETAPA;
			if ((property_exists($objSoapObject, 'FASEIdFASEObject')) &&
				($objSoapObject->FASEIdFASEObject))
				$objToReturn->FASEIdFASEObject = Fase::GetObjectFromSoapObject($objSoapObject->FASEIdFASEObject);
			if ((property_exists($objSoapObject, 'PROCESOIdPROCESOObject')) &&
				($objSoapObject->PROCESOIdPROCESOObject))
				$objToReturn->PROCESOIdPROCESOObject = Proceso::GetObjectFromSoapObject($objSoapObject->PROCESOIdPROCESOObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Etapa::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objFASEIdFASEObject)
				$objObject->objFASEIdFASEObject = Fase::GetSoapObjectFromObject($objObject->objFASEIdFASEObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intFASEIdFASE = null;
			if ($objObject->objPROCESOIdPROCESOObject)
				$objObject->objPROCESOIdPROCESOObject = Proceso::GetSoapObjectFromObject($objObject->objPROCESOIdPROCESOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPROCESOIdPROCESO = null;
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
			$iArray['IdETAPA'] = $this->intIdETAPA;
			$iArray['FASEIdFASE'] = $this->intFASEIdFASE;
			$iArray['PROCESOIdPROCESO'] = $this->intPROCESOIdPROCESO;
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
     * @property-read QQNode $IdETAPA
     * @property-read QQNode $FASEIdFASE
     * @property-read QQNodeFase $FASEIdFASEObject
     * @property-read QQNode $PROCESOIdPROCESO
     * @property-read QQNodeProceso $PROCESOIdPROCESOObject
     *
     *
     * @property-read QQReverseReferenceNodeEtapaLicencia $EtapaLicenciaAsETAPAIdETAPA

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeEtapa extends QQNode {
		protected $strTableName = 'ETAPA';
		protected $strPrimaryKey = 'idETAPA';
		protected $strClassName = 'Etapa';
		public function __get($strName) {
			switch ($strName) {
				case 'IdETAPA':
					return new QQNode('idETAPA', 'IdETAPA', 'Integer', $this);
				case 'FASEIdFASE':
					return new QQNode('FASE_idFASE', 'FASEIdFASE', 'Integer', $this);
				case 'FASEIdFASEObject':
					return new QQNodeFase('FASE_idFASE', 'FASEIdFASEObject', 'Integer', $this);
				case 'PROCESOIdPROCESO':
					return new QQNode('PROCESO_idPROCESO', 'PROCESOIdPROCESO', 'Integer', $this);
				case 'PROCESOIdPROCESOObject':
					return new QQNodeProceso('PROCESO_idPROCESO', 'PROCESOIdPROCESOObject', 'Integer', $this);
				case 'EtapaLicenciaAsETAPAIdETAPA':
					return new QQReverseReferenceNodeEtapaLicencia($this, 'etapalicenciaasetapaidetapa', 'reverse_reference', 'ETAPA_idETAPA');

				case '_PrimaryKeyNode':
					return new QQNode('idETAPA', 'IdETAPA', 'Integer', $this);
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
     * @property-read QQNode $IdETAPA
     * @property-read QQNode $FASEIdFASE
     * @property-read QQNodeFase $FASEIdFASEObject
     * @property-read QQNode $PROCESOIdPROCESO
     * @property-read QQNodeProceso $PROCESOIdPROCESOObject
     *
     *
     * @property-read QQReverseReferenceNodeEtapaLicencia $EtapaLicenciaAsETAPAIdETAPA

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeEtapa extends QQReverseReferenceNode {
		protected $strTableName = 'ETAPA';
		protected $strPrimaryKey = 'idETAPA';
		protected $strClassName = 'Etapa';
		public function __get($strName) {
			switch ($strName) {
				case 'IdETAPA':
					return new QQNode('idETAPA', 'IdETAPA', 'integer', $this);
				case 'FASEIdFASE':
					return new QQNode('FASE_idFASE', 'FASEIdFASE', 'integer', $this);
				case 'FASEIdFASEObject':
					return new QQNodeFase('FASE_idFASE', 'FASEIdFASEObject', 'integer', $this);
				case 'PROCESOIdPROCESO':
					return new QQNode('PROCESO_idPROCESO', 'PROCESOIdPROCESO', 'integer', $this);
				case 'PROCESOIdPROCESOObject':
					return new QQNodeProceso('PROCESO_idPROCESO', 'PROCESOIdPROCESOObject', 'integer', $this);
				case 'EtapaLicenciaAsETAPAIdETAPA':
					return new QQReverseReferenceNodeEtapaLicencia($this, 'etapalicenciaasetapaidetapa', 'reverse_reference', 'ETAPA_idETAPA');

				case '_PrimaryKeyNode':
					return new QQNode('idETAPA', 'IdETAPA', 'integer', $this);
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
