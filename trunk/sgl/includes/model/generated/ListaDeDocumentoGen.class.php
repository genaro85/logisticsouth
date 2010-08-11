<?php
	/**
	 * The abstract ListaDeDocumentoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ListaDeDocumento subclass which
	 * extends this ListaDeDocumentoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ListaDeDocumento class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $DOCUMENTOIdDOCUMENTO the value for intDOCUMENTOIdDOCUMENTO (PK)
	 * @property integer $PROCESOIdPROCESO the value for intPROCESOIdPROCESO 
	 * @property integer $FASEIdFASE the value for intFASEIdFASE 
	 * @property Documento $DOCUMENTOIdDOCUMENTOObject the value for the Documento object referenced by intDOCUMENTOIdDOCUMENTO (PK)
	 * @property Proceso $PROCESOIdPROCESOObject the value for the Proceso object referenced by intPROCESOIdPROCESO 
	 * @property Fase $FASEIdFASEObject the value for the Fase object referenced by intFASEIdFASE 
	 * @property-read VigenciaDocumento $_VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO the value for the private _objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO (Read-Only) if set due to an expansion on the VIGENCIA_DOCUMENTO.LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO reverse relationship
	 * @property-read VigenciaDocumento[] $_VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray the value for the private _objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray (Read-Only) if set due to an ExpandAsArray on the VIGENCIA_DOCUMENTO.LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ListaDeDocumentoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column LISTA_DE_DOCUMENTO.DOCUMENTO_idDOCUMENTO
		 * @var integer intDOCUMENTOIdDOCUMENTO
		 */
		protected $intDOCUMENTOIdDOCUMENTO;
		const DOCUMENTOIdDOCUMENTODefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intDOCUMENTOIdDOCUMENTO;
		 */
		protected $__intDOCUMENTOIdDOCUMENTO;

		/**
		 * Protected member variable that maps to the database column LISTA_DE_DOCUMENTO.PROCESO_idPROCESO
		 * @var integer intPROCESOIdPROCESO
		 */
		protected $intPROCESOIdPROCESO;
		const PROCESOIdPROCESODefault = null;


		/**
		 * Protected member variable that maps to the database column LISTA_DE_DOCUMENTO.FASE_idFASE
		 * @var integer intFASEIdFASE
		 */
		protected $intFASEIdFASE;
		const FASEIdFASEDefault = null;


		/**
		 * Private member variable that stores a reference to a single VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO object
		 * (of type VigenciaDocumento), if this ListaDeDocumento object was restored with
		 * an expansion on the VIGENCIA_DOCUMENTO association table.
		 * @var VigenciaDocumento _objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO;
		 */
		private $_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO;

		/**
		 * Private member variable that stores a reference to an array of VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO objects
		 * (of type VigenciaDocumento[]), if this ListaDeDocumento object was restored with
		 * an ExpandAsArray on the VIGENCIA_DOCUMENTO association table.
		 * @var VigenciaDocumento[] _objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray;
		 */
		private $_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray = array();

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
		 * in the database column LISTA_DE_DOCUMENTO.DOCUMENTO_idDOCUMENTO.
		 *
		 * NOTE: Always use the DOCUMENTOIdDOCUMENTOObject property getter to correctly retrieve this Documento object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Documento objDOCUMENTOIdDOCUMENTOObject
		 */
		protected $objDOCUMENTOIdDOCUMENTOObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column LISTA_DE_DOCUMENTO.PROCESO_idPROCESO.
		 *
		 * NOTE: Always use the PROCESOIdPROCESOObject property getter to correctly retrieve this Proceso object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Proceso objPROCESOIdPROCESOObject
		 */
		protected $objPROCESOIdPROCESOObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column LISTA_DE_DOCUMENTO.FASE_idFASE.
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
			$this->intDOCUMENTOIdDOCUMENTO = ListaDeDocumento::DOCUMENTOIdDOCUMENTODefault;
			$this->intPROCESOIdPROCESO = ListaDeDocumento::PROCESOIdPROCESODefault;
			$this->intFASEIdFASE = ListaDeDocumento::FASEIdFASEDefault;
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
		 * Load a ListaDeDocumento from PK Info
		 * @param integer $intDOCUMENTOIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaDeDocumento
		 */
		public static function Load($intDOCUMENTOIdDOCUMENTO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return ListaDeDocumento::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ListaDeDocumento()->DOCUMENTOIdDOCUMENTO, $intDOCUMENTOIdDOCUMENTO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all ListaDeDocumentos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaDeDocumento[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call ListaDeDocumento::QueryArray to perform the LoadAll query
			try {
				return ListaDeDocumento::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ListaDeDocumentos
		 * @return int
		 */
		public static function CountAll() {
			// Call ListaDeDocumento::QueryCount to perform the CountAll query
			return ListaDeDocumento::QueryCount(QQ::All());
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
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Create/Build out the QueryBuilder object with ListaDeDocumento-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'LISTA_DE_DOCUMENTO');
			ListaDeDocumento::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('LISTA_DE_DOCUMENTO');

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
		 * Static Qcubed Query method to query for a single ListaDeDocumento object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ListaDeDocumento the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ListaDeDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new ListaDeDocumento object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ListaDeDocumento::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ListaDeDocumento::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of ListaDeDocumento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ListaDeDocumento[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ListaDeDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ListaDeDocumento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of ListaDeDocumento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ListaDeDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ListaDeDocumento::GetDatabase();

			$strQuery = ListaDeDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/listadedocumento', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = ListaDeDocumento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ListaDeDocumento
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'LISTA_DE_DOCUMENTO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'DOCUMENTO_idDOCUMENTO', $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO');
			$objBuilder->AddSelectItem($strTableName, 'PROCESO_idPROCESO', $strAliasPrefix . 'PROCESO_idPROCESO');
			$objBuilder->AddSelectItem($strTableName, 'FASE_idFASE', $strAliasPrefix . 'FASE_idFASE');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ListaDeDocumento from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ListaDeDocumento::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ListaDeDocumento
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intDOCUMENTOIdDOCUMENTO == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'LISTA_DE_DOCUMENTO__';


						// Expanding reverse references: VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
						$strAlias = $strAliasPrefix . 'vigenciadocumentoaslistadedocumentodocumentoiddocumento__LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray;
								$objChildItem = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslistadedocumentodocumentoiddocumento__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray[] = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslistadedocumentodocumentoiddocumento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'LISTA_DE_DOCUMENTO__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the ListaDeDocumento object
			$objToReturn = new ListaDeDocumento();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'DOCUMENTO_idDOCUMENTO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'DOCUMENTO_idDOCUMENTO'] : $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO';
			$objToReturn->intDOCUMENTOIdDOCUMENTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intDOCUMENTOIdDOCUMENTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'PROCESO_idPROCESO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PROCESO_idPROCESO'] : $strAliasPrefix . 'PROCESO_idPROCESO';
			$objToReturn->intPROCESOIdPROCESO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'FASE_idFASE', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'FASE_idFASE'] : $strAliasPrefix . 'FASE_idFASE';
			$objToReturn->intFASEIdFASE = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->DOCUMENTOIdDOCUMENTO != $objPreviousItem->DOCUMENTOIdDOCUMENTO) {
						continue;
					}
					if (array_diff($objPreviousItem->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray, $objToReturn->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray) != null) {
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
				$strAliasPrefix = 'LISTA_DE_DOCUMENTO__';

			// Check for DOCUMENTOIdDOCUMENTOObject Early Binding
			$strAlias = $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO__idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDOCUMENTOIdDOCUMENTOObject = Documento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PROCESOIdPROCESOObject Early Binding
			$strAlias = $strAliasPrefix . 'PROCESO_idPROCESO__idPROCESO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPROCESOIdPROCESOObject = Proceso::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PROCESO_idPROCESO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for FASEIdFASEObject Early Binding
			$strAlias = $strAliasPrefix . 'FASE_idFASE__idFASE';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objFASEIdFASEObject = Fase::InstantiateDbRow($objDbRow, $strAliasPrefix . 'FASE_idFASE__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO Virtual Binding
			$strAlias = $strAliasPrefix . 'vigenciadocumentoaslistadedocumentodocumentoiddocumento__LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray[] = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslistadedocumentodocumentoiddocumento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslistadedocumentodocumentoiddocumento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of ListaDeDocumentos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ListaDeDocumento[]
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
					$objItem = ListaDeDocumento::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ListaDeDocumento::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single ListaDeDocumento object,
		 * by DOCUMENTOIdDOCUMENTO Index(es)
		 * @param integer $intDOCUMENTOIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaDeDocumento
		*/
		public static function LoadByDOCUMENTOIdDOCUMENTO($intDOCUMENTOIdDOCUMENTO, $objOptionalClauses = null) {
			return ListaDeDocumento::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ListaDeDocumento()->DOCUMENTOIdDOCUMENTO, $intDOCUMENTOIdDOCUMENTO)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ListaDeDocumento objects,
		 * by PROCESOIdPROCESO Index(es)
		 * @param integer $intPROCESOIdPROCESO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaDeDocumento[]
		*/
		public static function LoadArrayByPROCESOIdPROCESO($intPROCESOIdPROCESO, $objOptionalClauses = null) {
			// Call ListaDeDocumento::QueryArray to perform the LoadArrayByPROCESOIdPROCESO query
			try {
				return ListaDeDocumento::QueryArray(
					QQ::Equal(QQN::ListaDeDocumento()->PROCESOIdPROCESO, $intPROCESOIdPROCESO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ListaDeDocumentos
		 * by PROCESOIdPROCESO Index(es)
		 * @param integer $intPROCESOIdPROCESO
		 * @return int
		*/
		public static function CountByPROCESOIdPROCESO($intPROCESOIdPROCESO) {
			// Call ListaDeDocumento::QueryCount to perform the CountByPROCESOIdPROCESO query
			return ListaDeDocumento::QueryCount(
				QQ::Equal(QQN::ListaDeDocumento()->PROCESOIdPROCESO, $intPROCESOIdPROCESO)
			);
		}
			
		/**
		 * Load an array of ListaDeDocumento objects,
		 * by FASEIdFASE Index(es)
		 * @param integer $intFASEIdFASE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaDeDocumento[]
		*/
		public static function LoadArrayByFASEIdFASE($intFASEIdFASE, $objOptionalClauses = null) {
			// Call ListaDeDocumento::QueryArray to perform the LoadArrayByFASEIdFASE query
			try {
				return ListaDeDocumento::QueryArray(
					QQ::Equal(QQN::ListaDeDocumento()->FASEIdFASE, $intFASEIdFASE),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ListaDeDocumentos
		 * by FASEIdFASE Index(es)
		 * @param integer $intFASEIdFASE
		 * @return int
		*/
		public static function CountByFASEIdFASE($intFASEIdFASE) {
			// Call ListaDeDocumento::QueryCount to perform the CountByFASEIdFASE query
			return ListaDeDocumento::QueryCount(
				QQ::Equal(QQN::ListaDeDocumento()->FASEIdFASE, $intFASEIdFASE)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this ListaDeDocumento
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `LISTA_DE_DOCUMENTO` (
							`DOCUMENTO_idDOCUMENTO`,
							`PROCESO_idPROCESO`,
							`FASE_idFASE`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . ',
							' . $objDatabase->SqlVariable($this->intPROCESOIdPROCESO) . ',
							' . $objDatabase->SqlVariable($this->intFASEIdFASE) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`LISTA_DE_DOCUMENTO`
						SET
							`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . ',
							`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intPROCESOIdPROCESO) . ',
							`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intFASEIdFASE) . '
						WHERE
							`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->__intDOCUMENTOIdDOCUMENTO) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intDOCUMENTOIdDOCUMENTO = $this->intDOCUMENTOIdDOCUMENTO;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this ListaDeDocumento
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ListaDeDocumento with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_DE_DOCUMENTO`
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '');
		}

		/**
		 * Delete all ListaDeDocumentos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_DE_DOCUMENTO`');
		}

		/**
		 * Truncate LISTA_DE_DOCUMENTO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `LISTA_DE_DOCUMENTO`');
		}

		/**
		 * Reload this ListaDeDocumento from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ListaDeDocumento object.');

			// Reload the Object
			$objReloaded = ListaDeDocumento::Load($this->intDOCUMENTOIdDOCUMENTO);

			// Update $this's local variables to match
			$this->DOCUMENTOIdDOCUMENTO = $objReloaded->DOCUMENTOIdDOCUMENTO;
			$this->__intDOCUMENTOIdDOCUMENTO = $this->intDOCUMENTOIdDOCUMENTO;
			$this->PROCESOIdPROCESO = $objReloaded->PROCESOIdPROCESO;
			$this->FASEIdFASE = $objReloaded->FASEIdFASE;
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
				case 'DOCUMENTOIdDOCUMENTO':
					/**
					 * Gets the value for intDOCUMENTOIdDOCUMENTO (PK)
					 * @return integer
					 */
					return $this->intDOCUMENTOIdDOCUMENTO;

				case 'PROCESOIdPROCESO':
					/**
					 * Gets the value for intPROCESOIdPROCESO 
					 * @return integer
					 */
					return $this->intPROCESOIdPROCESO;

				case 'FASEIdFASE':
					/**
					 * Gets the value for intFASEIdFASE 
					 * @return integer
					 */
					return $this->intFASEIdFASE;


				///////////////////
				// Member Objects
				///////////////////
				case 'DOCUMENTOIdDOCUMENTOObject':
					/**
					 * Gets the value for the Documento object referenced by intDOCUMENTOIdDOCUMENTO (PK)
					 * @return Documento
					 */
					try {
						if ((!$this->objDOCUMENTOIdDOCUMENTOObject) && (!is_null($this->intDOCUMENTOIdDOCUMENTO)))
							$this->objDOCUMENTOIdDOCUMENTOObject = Documento::Load($this->intDOCUMENTOIdDOCUMENTO);
						return $this->objDOCUMENTOIdDOCUMENTOObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PROCESOIdPROCESOObject':
					/**
					 * Gets the value for the Proceso object referenced by intPROCESOIdPROCESO 
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

				case 'FASEIdFASEObject':
					/**
					 * Gets the value for the Fase object referenced by intFASEIdFASE 
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

				case '_VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO':
					/**
					 * Gets the value for the private _objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO (Read-Only)
					 * if set due to an expansion on the VIGENCIA_DOCUMENTO.LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO reverse relationship
					 * @return VigenciaDocumento
					 */
					return $this->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO;

				case '_VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray':
					/**
					 * Gets the value for the private _objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray (Read-Only)
					 * if set due to an ExpandAsArray on the VIGENCIA_DOCUMENTO.LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO reverse relationship
					 * @return VigenciaDocumento[]
					 */
					return (array) $this->_objVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray;


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
				case 'DOCUMENTOIdDOCUMENTO':
					/**
					 * Sets the value for intDOCUMENTOIdDOCUMENTO (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDOCUMENTOIdDOCUMENTOObject = null;
						return ($this->intDOCUMENTOIdDOCUMENTO = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PROCESOIdPROCESO':
					/**
					 * Sets the value for intPROCESOIdPROCESO 
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

				case 'FASEIdFASE':
					/**
					 * Sets the value for intFASEIdFASE 
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
				case 'DOCUMENTOIdDOCUMENTOObject':
					/**
					 * Sets the value for the Documento object referenced by intDOCUMENTOIdDOCUMENTO (PK)
					 * @param Documento $mixValue
					 * @return Documento
					 */
					if (is_null($mixValue)) {
						$this->intDOCUMENTOIdDOCUMENTO = null;
						$this->objDOCUMENTOIdDOCUMENTOObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Documento object
						try {
							$mixValue = QType::Cast($mixValue, 'Documento');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Documento object
						if (is_null($mixValue->IdDOCUMENTO))
							throw new QCallerException('Unable to set an unsaved DOCUMENTOIdDOCUMENTOObject for this ListaDeDocumento');

						// Update Local Member Variables
						$this->objDOCUMENTOIdDOCUMENTOObject = $mixValue;
						$this->intDOCUMENTOIdDOCUMENTO = $mixValue->IdDOCUMENTO;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PROCESOIdPROCESOObject':
					/**
					 * Sets the value for the Proceso object referenced by intPROCESOIdPROCESO 
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
							throw new QCallerException('Unable to set an unsaved PROCESOIdPROCESOObject for this ListaDeDocumento');

						// Update Local Member Variables
						$this->objPROCESOIdPROCESOObject = $mixValue;
						$this->intPROCESOIdPROCESO = $mixValue->IdPROCESO;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'FASEIdFASEObject':
					/**
					 * Sets the value for the Fase object referenced by intFASEIdFASE 
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
							throw new QCallerException('Unable to set an unsaved FASEIdFASEObject for this ListaDeDocumento');

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

			
		
		// Related Objects' Methods for VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VigenciaDocumentosAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO as an array of VigenciaDocumento objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VigenciaDocumento[]
		*/ 
		public function GetVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOArray($objOptionalClauses = null) {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				return array();

			try {
				return VigenciaDocumento::LoadArrayByLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO($this->intDOCUMENTOIdDOCUMENTO, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VigenciaDocumentosAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 * @return int
		*/ 
		public function CountVigenciaDocumentosAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO() {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				return 0;

			return VigenciaDocumento::CountByLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO($this->intDOCUMENTOIdDOCUMENTO);
		}

		/**
		 * Associates a VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 * @param VigenciaDocumento $objVigenciaDocumento
		 * @return void
		*/ 
		public function AssociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO(VigenciaDocumento $objVigenciaDocumento) {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this unsaved ListaDeDocumento.');
			if ((is_null($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO)) || (is_null($objVigenciaDocumento->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this ListaDeDocumento with an unsaved VigenciaDocumento.');

			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`VIGENCIA_DOCUMENTO`
				SET
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LICENCIAIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates a VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 * @param VigenciaDocumento $objVigenciaDocumento
		 * @return void
		*/ 
		public function UnassociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO(VigenciaDocumento $objVigenciaDocumento) {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this unsaved ListaDeDocumento.');
			if ((is_null($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO)) || (is_null($objVigenciaDocumento->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this ListaDeDocumento with an unsaved VigenciaDocumento.');

			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`VIGENCIA_DOCUMENTO`
				SET
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = null
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LICENCIAIdLICENCIA) . ' AND
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '
			');
		}

		/**
		 * Unassociates all VigenciaDocumentosAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 * @return void
		*/ 
		public function UnassociateAllVigenciaDocumentosAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO() {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`VIGENCIA_DOCUMENTO`
				SET
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = null
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '
			');
		}

		/**
		 * Deletes an associated VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 * @param VigenciaDocumento $objVigenciaDocumento
		 * @return void
		*/ 
		public function DeleteAssociatedVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO(VigenciaDocumento $objVigenciaDocumento) {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this unsaved ListaDeDocumento.');
			if ((is_null($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO)) || (is_null($objVigenciaDocumento->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this ListaDeDocumento with an unsaved VigenciaDocumento.');

			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`VIGENCIA_DOCUMENTO`
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LICENCIAIdLICENCIA) . ' AND
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '
			');
		}

		/**
		 * Deletes all associated VigenciaDocumentosAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 * @return void
		*/ 
		public function DeleteAllVigenciaDocumentosAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO() {
			if ((is_null($this->intDOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO on this unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = ListaDeDocumento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`VIGENCIA_DOCUMENTO`
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="ListaDeDocumento"><sequence>';
			$strToReturn .= '<element name="DOCUMENTOIdDOCUMENTOObject" type="xsd1:Documento"/>';
			$strToReturn .= '<element name="PROCESOIdPROCESOObject" type="xsd1:Proceso"/>';
			$strToReturn .= '<element name="FASEIdFASEObject" type="xsd1:Fase"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ListaDeDocumento', $strComplexTypeArray)) {
				$strComplexTypeArray['ListaDeDocumento'] = ListaDeDocumento::GetSoapComplexTypeXml();
				Documento::AlterSoapComplexTypeArray($strComplexTypeArray);
				Proceso::AlterSoapComplexTypeArray($strComplexTypeArray);
				Fase::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ListaDeDocumento::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ListaDeDocumento();
			if ((property_exists($objSoapObject, 'DOCUMENTOIdDOCUMENTOObject')) &&
				($objSoapObject->DOCUMENTOIdDOCUMENTOObject))
				$objToReturn->DOCUMENTOIdDOCUMENTOObject = Documento::GetObjectFromSoapObject($objSoapObject->DOCUMENTOIdDOCUMENTOObject);
			if ((property_exists($objSoapObject, 'PROCESOIdPROCESOObject')) &&
				($objSoapObject->PROCESOIdPROCESOObject))
				$objToReturn->PROCESOIdPROCESOObject = Proceso::GetObjectFromSoapObject($objSoapObject->PROCESOIdPROCESOObject);
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
				array_push($objArrayToReturn, ListaDeDocumento::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objDOCUMENTOIdDOCUMENTOObject)
				$objObject->objDOCUMENTOIdDOCUMENTOObject = Documento::GetSoapObjectFromObject($objObject->objDOCUMENTOIdDOCUMENTOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDOCUMENTOIdDOCUMENTO = null;
			if ($objObject->objPROCESOIdPROCESOObject)
				$objObject->objPROCESOIdPROCESOObject = Proceso::GetSoapObjectFromObject($objObject->objPROCESOIdPROCESOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPROCESOIdPROCESO = null;
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
			$iArray['DOCUMENTOIdDOCUMENTO'] = $this->intDOCUMENTOIdDOCUMENTO;
			$iArray['PROCESOIdPROCESO'] = $this->intPROCESOIdPROCESO;
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
     * @property-read QQNode $DOCUMENTOIdDOCUMENTO
     * @property-read QQNodeDocumento $DOCUMENTOIdDOCUMENTOObject
     * @property-read QQNode $PROCESOIdPROCESO
     * @property-read QQNodeProceso $PROCESOIdPROCESOObject
     * @property-read QQNode $FASEIdFASE
     * @property-read QQNodeFase $FASEIdFASEObject
     *
     *
     * @property-read QQReverseReferenceNodeVigenciaDocumento $VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO

     * @property-read QQNodeDocumento $_PrimaryKeyNode
     **/
	class QQNodeListaDeDocumento extends QQNode {
		protected $strTableName = 'LISTA_DE_DOCUMENTO';
		protected $strPrimaryKey = 'DOCUMENTO_idDOCUMENTO';
		protected $strClassName = 'ListaDeDocumento';
		public function __get($strName) {
			switch ($strName) {
				case 'DOCUMENTOIdDOCUMENTO':
					return new QQNode('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTO', 'Integer', $this);
				case 'DOCUMENTOIdDOCUMENTOObject':
					return new QQNodeDocumento('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTOObject', 'Integer', $this);
				case 'PROCESOIdPROCESO':
					return new QQNode('PROCESO_idPROCESO', 'PROCESOIdPROCESO', 'Integer', $this);
				case 'PROCESOIdPROCESOObject':
					return new QQNodeProceso('PROCESO_idPROCESO', 'PROCESOIdPROCESOObject', 'Integer', $this);
				case 'FASEIdFASE':
					return new QQNode('FASE_idFASE', 'FASEIdFASE', 'Integer', $this);
				case 'FASEIdFASEObject':
					return new QQNodeFase('FASE_idFASE', 'FASEIdFASEObject', 'Integer', $this);
				case 'VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO':
					return new QQReverseReferenceNodeVigenciaDocumento($this, 'vigenciadocumentoaslistadedocumentodocumentoiddocumento', 'reverse_reference', 'LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO');

				case '_PrimaryKeyNode':
					return new QQNodeDocumento('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTO', 'Integer', $this);
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
     * @property-read QQNode $DOCUMENTOIdDOCUMENTO
     * @property-read QQNodeDocumento $DOCUMENTOIdDOCUMENTOObject
     * @property-read QQNode $PROCESOIdPROCESO
     * @property-read QQNodeProceso $PROCESOIdPROCESOObject
     * @property-read QQNode $FASEIdFASE
     * @property-read QQNodeFase $FASEIdFASEObject
     *
     *
     * @property-read QQReverseReferenceNodeVigenciaDocumento $VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO

     * @property-read QQNodeDocumento $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeListaDeDocumento extends QQReverseReferenceNode {
		protected $strTableName = 'LISTA_DE_DOCUMENTO';
		protected $strPrimaryKey = 'DOCUMENTO_idDOCUMENTO';
		protected $strClassName = 'ListaDeDocumento';
		public function __get($strName) {
			switch ($strName) {
				case 'DOCUMENTOIdDOCUMENTO':
					return new QQNode('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTO', 'integer', $this);
				case 'DOCUMENTOIdDOCUMENTOObject':
					return new QQNodeDocumento('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTOObject', 'integer', $this);
				case 'PROCESOIdPROCESO':
					return new QQNode('PROCESO_idPROCESO', 'PROCESOIdPROCESO', 'integer', $this);
				case 'PROCESOIdPROCESOObject':
					return new QQNodeProceso('PROCESO_idPROCESO', 'PROCESOIdPROCESOObject', 'integer', $this);
				case 'FASEIdFASE':
					return new QQNode('FASE_idFASE', 'FASEIdFASE', 'integer', $this);
				case 'FASEIdFASEObject':
					return new QQNodeFase('FASE_idFASE', 'FASEIdFASEObject', 'integer', $this);
				case 'VigenciaDocumentoAsLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO':
					return new QQReverseReferenceNodeVigenciaDocumento($this, 'vigenciadocumentoaslistadedocumentodocumentoiddocumento', 'reverse_reference', 'LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO');

				case '_PrimaryKeyNode':
					return new QQNodeDocumento('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTO', 'integer', $this);
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
