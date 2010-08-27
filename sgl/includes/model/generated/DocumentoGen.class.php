<?php
	/**
	 * The abstract DocumentoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Documento subclass which
	 * extends this DocumentoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Documento class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdDOCUMENTO the value for intIdDOCUMENTO (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property integer $Duracion the value for intDuracion 
	 * @property integer $DOCUMENTOIdDOCUMENTO the value for intDOCUMENTOIdDOCUMENTO 
	 * @property Documento $DOCUMENTOIdDOCUMENTOObject the value for the Documento object referenced by intDOCUMENTOIdDOCUMENTO 
	 * @property DocumentosFase $DocumentosFase the value for the DocumentosFase object that uniquely references this Documento
	 * @property-read Documento $_DocumentoAsDOCUMENTOIdDOCUMENTO the value for the private _objDocumentoAsDOCUMENTOIdDOCUMENTO (Read-Only) if set due to an expansion on the DOCUMENTO.DOCUMENTO_idDOCUMENTO reverse relationship
	 * @property-read Documento[] $_DocumentoAsDOCUMENTOIdDOCUMENTOArray the value for the private _objDocumentoAsDOCUMENTOIdDOCUMENTOArray (Read-Only) if set due to an ExpandAsArray on the DOCUMENTO.DOCUMENTO_idDOCUMENTO reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class DocumentoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column DOCUMENTO.idDOCUMENTO
		 * @var integer intIdDOCUMENTO
		 */
		protected $intIdDOCUMENTO;
		const IdDOCUMENTODefault = null;


		/**
		 * Protected member variable that maps to the database column DOCUMENTO.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 70;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column DOCUMENTO.duracion
		 * @var integer intDuracion
		 */
		protected $intDuracion;
		const DuracionDefault = null;


		/**
		 * Protected member variable that maps to the database column DOCUMENTO.DOCUMENTO_idDOCUMENTO
		 * @var integer intDOCUMENTOIdDOCUMENTO
		 */
		protected $intDOCUMENTOIdDOCUMENTO;
		const DOCUMENTOIdDOCUMENTODefault = null;


		/**
		 * Private member variable that stores a reference to a single DocumentoAsDOCUMENTOIdDOCUMENTO object
		 * (of type Documento), if this Documento object was restored with
		 * an expansion on the DOCUMENTO association table.
		 * @var Documento _objDocumentoAsDOCUMENTOIdDOCUMENTO;
		 */
		private $_objDocumentoAsDOCUMENTOIdDOCUMENTO;

		/**
		 * Private member variable that stores a reference to an array of DocumentoAsDOCUMENTOIdDOCUMENTO objects
		 * (of type Documento[]), if this Documento object was restored with
		 * an ExpandAsArray on the DOCUMENTO association table.
		 * @var Documento[] _objDocumentoAsDOCUMENTOIdDOCUMENTOArray;
		 */
		private $_objDocumentoAsDOCUMENTOIdDOCUMENTOArray = array();

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
		 * in the database column DOCUMENTO.DOCUMENTO_idDOCUMENTO.
		 *
		 * NOTE: Always use the DOCUMENTOIdDOCUMENTOObject property getter to correctly retrieve this Documento object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Documento objDOCUMENTOIdDOCUMENTOObject
		 */
		protected $objDOCUMENTOIdDOCUMENTOObject;

		/**
		 * Protected member variable that contains the object which points to
		 * this object by the reference in the unique database column DOCUMENTOS_FASE.DOCUMENTO_idDOCUMENTO.
		 *
		 * NOTE: Always use the DocumentosFase property getter to correctly retrieve this DocumentosFase object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DocumentosFase objDocumentosFase
		 */
		protected $objDocumentosFase;
		
		/**
		 * Used internally to manage whether the adjoined DocumentosFase object
		 * needs to be updated on save.
		 * 
		 * NOTE: Do not manually update this value 
		 */
		protected $blnDirtyDocumentosFase;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdDOCUMENTO = Documento::IdDOCUMENTODefault;
			$this->strNombre = Documento::NombreDefault;
			$this->intDuracion = Documento::DuracionDefault;
			$this->intDOCUMENTOIdDOCUMENTO = Documento::DOCUMENTOIdDOCUMENTODefault;
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
		 * Load a Documento from PK Info
		 * @param integer $intIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Documento
		 */
		public static function Load($intIdDOCUMENTO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Documento::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Documento()->IdDOCUMENTO, $intIdDOCUMENTO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Documentos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Documento[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Documento::QueryArray to perform the LoadAll query
			try {
				return Documento::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Documentos
		 * @return int
		 */
		public static function CountAll() {
			// Call Documento::QueryCount to perform the CountAll query
			return Documento::QueryCount(QQ::All());
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
			$objDatabase = Documento::GetDatabase();

			// Create/Build out the QueryBuilder object with Documento-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'DOCUMENTO');
			Documento::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('DOCUMENTO');

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
		 * Static Qcubed Query method to query for a single Documento object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Documento the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Documento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Documento object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Documento::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Documento::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Documento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Documento[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Documento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Documento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Documento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Documento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Documento::GetDatabase();

			$strQuery = Documento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/documento', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Documento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Documento
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'DOCUMENTO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idDOCUMENTO', $strAliasPrefix . 'idDOCUMENTO');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'duracion', $strAliasPrefix . 'duracion');
			$objBuilder->AddSelectItem($strTableName, 'DOCUMENTO_idDOCUMENTO', $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Documento from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Documento::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Documento
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdDOCUMENTO == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'DOCUMENTO__';


						// Expanding reverse references: DocumentoAsDOCUMENTOIdDOCUMENTO
						$strAlias = $strAliasPrefix . 'documentoasdocumentoiddocumento__idDOCUMENTO';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray)) {
								$objPreviousChildItems = $objPreviousItem->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray;
								$objChildItem = Documento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'documentoasdocumentoiddocumento__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray[] = Documento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'documentoasdocumentoiddocumento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'DOCUMENTO__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Documento object
			$objToReturn = new Documento();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idDOCUMENTO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idDOCUMENTO'] : $strAliasPrefix . 'idDOCUMENTO';
			$objToReturn->intIdDOCUMENTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'duracion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'duracion'] : $strAliasPrefix . 'duracion';
			$objToReturn->intDuracion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'DOCUMENTO_idDOCUMENTO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'DOCUMENTO_idDOCUMENTO'] : $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO';
			$objToReturn->intDOCUMENTOIdDOCUMENTO = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdDOCUMENTO != $objPreviousItem->IdDOCUMENTO) {
						continue;
					}
					if (array_diff($objPreviousItem->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray, $objToReturn->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray) != null) {
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
				$strAliasPrefix = 'DOCUMENTO__';

			// Check for DOCUMENTOIdDOCUMENTOObject Early Binding
			$strAlias = $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO__idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDOCUMENTOIdDOCUMENTOObject = Documento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'DOCUMENTO_idDOCUMENTO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);


			// Check for DocumentosFase Unique ReverseReference Binding
			$strAlias = $strAliasPrefix . 'documentosfase__DOCUMENTO_idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if ($objDbRow->ColumnExists($strAliasName)) {
				if (!is_null($objDbRow->GetColumn($strAliasName)))
					$objToReturn->objDocumentosFase = DocumentosFase::InstantiateDbRow($objDbRow, $strAliasPrefix . 'documentosfase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					// We ATTEMPTED to do an Early Bind but the Object Doesn't Exist
					// Let's set to FALSE so that the object knows not to try and re-query again
					$objToReturn->objDocumentosFase = false;
			}



			// Check for DocumentoAsDOCUMENTOIdDOCUMENTO Virtual Binding
			$strAlias = $strAliasPrefix . 'documentoasdocumentoiddocumento__idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray[] = Documento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'documentoasdocumentoiddocumento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objDocumentoAsDOCUMENTOIdDOCUMENTO = Documento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'documentoasdocumentoiddocumento__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Documentos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Documento[]
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
					$objItem = Documento::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Documento::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Documento object,
		 * by IdDOCUMENTO Index(es)
		 * @param integer $intIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Documento
		*/
		public static function LoadByIdDOCUMENTO($intIdDOCUMENTO, $objOptionalClauses = null) {
			return Documento::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Documento()->IdDOCUMENTO, $intIdDOCUMENTO)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Documento objects,
		 * by DOCUMENTOIdDOCUMENTO Index(es)
		 * @param integer $intDOCUMENTOIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Documento[]
		*/
		public static function LoadArrayByDOCUMENTOIdDOCUMENTO($intDOCUMENTOIdDOCUMENTO, $objOptionalClauses = null) {
			// Call Documento::QueryArray to perform the LoadArrayByDOCUMENTOIdDOCUMENTO query
			try {
				return Documento::QueryArray(
					QQ::Equal(QQN::Documento()->DOCUMENTOIdDOCUMENTO, $intDOCUMENTOIdDOCUMENTO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Documentos
		 * by DOCUMENTOIdDOCUMENTO Index(es)
		 * @param integer $intDOCUMENTOIdDOCUMENTO
		 * @return int
		*/
		public static function CountByDOCUMENTOIdDOCUMENTO($intDOCUMENTOIdDOCUMENTO) {
			// Call Documento::QueryCount to perform the CountByDOCUMENTOIdDOCUMENTO query
			return Documento::QueryCount(
				QQ::Equal(QQN::Documento()->DOCUMENTOIdDOCUMENTO, $intDOCUMENTOIdDOCUMENTO)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Documento
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `DOCUMENTO` (
							`nombre`,
							`duracion`,
							`DOCUMENTO_idDOCUMENTO`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intDuracion) . ',
							' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdDOCUMENTO = $objDatabase->InsertId('DOCUMENTO', 'idDOCUMENTO');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`DOCUMENTO`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`duracion` = ' . $objDatabase->SqlVariable($this->intDuracion) . ',
							`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOIdDOCUMENTO) . '
						WHERE
							`idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intIdDOCUMENTO) . '
					');
				}

		
		
				// Update the adjoined DocumentosFase object (if applicable)
				// TODO: Make this into hard-coded SQL queries
				if ($this->blnDirtyDocumentosFase) {
					// Unassociate the old one (if applicable)
					if ($objAssociated = DocumentosFase::LoadByDOCUMENTOIdDOCUMENTO($this->intIdDOCUMENTO)) {
						$objAssociated->DOCUMENTOIdDOCUMENTO = null;
						$objAssociated->Save();
					}

					// Associate the new one (if applicable)
					if ($this->objDocumentosFase) {
						$this->objDocumentosFase->DOCUMENTOIdDOCUMENTO = $this->intIdDOCUMENTO;
						$this->objDocumentosFase->Save();
					}

					// Reset the "Dirty" flag
					$this->blnDirtyDocumentosFase = false;
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
		 * Delete this Documento
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Documento with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			
			
			// Update the adjoined DocumentosFase object (if applicable) and perform a delete

			// Optional -- if you **KNOW** that you do not want to EVER run any level of business logic on the disassocation,
			// you *could* override Delete() so that this step can be a single hard coded query to optimize performance.
			if ($objAssociated = DocumentosFase::LoadByDOCUMENTOIdDOCUMENTO($this->intIdDOCUMENTO)) {
				$objAssociated->Delete();
			}

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`DOCUMENTO`
				WHERE
					`idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intIdDOCUMENTO) . '');
		}

		/**
		 * Delete all Documentos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`DOCUMENTO`');
		}

		/**
		 * Truncate DOCUMENTO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `DOCUMENTO`');
		}

		/**
		 * Reload this Documento from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Documento object.');

			// Reload the Object
			$objReloaded = Documento::Load($this->intIdDOCUMENTO);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->intDuracion = $objReloaded->intDuracion;
			$this->DOCUMENTOIdDOCUMENTO = $objReloaded->DOCUMENTOIdDOCUMENTO;
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
				case 'IdDOCUMENTO':
					/**
					 * Gets the value for intIdDOCUMENTO (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdDOCUMENTO;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'Duracion':
					/**
					 * Gets the value for intDuracion 
					 * @return integer
					 */
					return $this->intDuracion;

				case 'DOCUMENTOIdDOCUMENTO':
					/**
					 * Gets the value for intDOCUMENTOIdDOCUMENTO 
					 * @return integer
					 */
					return $this->intDOCUMENTOIdDOCUMENTO;


				///////////////////
				// Member Objects
				///////////////////
				case 'DOCUMENTOIdDOCUMENTOObject':
					/**
					 * Gets the value for the Documento object referenced by intDOCUMENTOIdDOCUMENTO 
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

		
		
				case 'DocumentosFase':
					/**
					 * Gets the value for the DocumentosFase object that uniquely references this Documento
					 * by objDocumentosFase (Unique)
					 * @return DocumentosFase
					 */
					try {
						if ($this->objDocumentosFase === false)
							// We've attempted early binding -- and the reverse reference object does not exist
							return null;
						if (!$this->objDocumentosFase)
							$this->objDocumentosFase = DocumentosFase::LoadByDOCUMENTOIdDOCUMENTO($this->intIdDOCUMENTO);
						return $this->objDocumentosFase;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_DocumentoAsDOCUMENTOIdDOCUMENTO':
					/**
					 * Gets the value for the private _objDocumentoAsDOCUMENTOIdDOCUMENTO (Read-Only)
					 * if set due to an expansion on the DOCUMENTO.DOCUMENTO_idDOCUMENTO reverse relationship
					 * @return Documento
					 */
					return $this->_objDocumentoAsDOCUMENTOIdDOCUMENTO;

				case '_DocumentoAsDOCUMENTOIdDOCUMENTOArray':
					/**
					 * Gets the value for the private _objDocumentoAsDOCUMENTOIdDOCUMENTOArray (Read-Only)
					 * if set due to an ExpandAsArray on the DOCUMENTO.DOCUMENTO_idDOCUMENTO reverse relationship
					 * @return Documento[]
					 */
					return (array) $this->_objDocumentoAsDOCUMENTOIdDOCUMENTOArray;


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

				case 'Duracion':
					/**
					 * Sets the value for intDuracion 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intDuracion = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'DOCUMENTOIdDOCUMENTO':
					/**
					 * Sets the value for intDOCUMENTOIdDOCUMENTO 
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


				///////////////////
				// Member Objects
				///////////////////
				case 'DOCUMENTOIdDOCUMENTOObject':
					/**
					 * Sets the value for the Documento object referenced by intDOCUMENTOIdDOCUMENTO 
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
							throw new QCallerException('Unable to set an unsaved DOCUMENTOIdDOCUMENTOObject for this Documento');

						// Update Local Member Variables
						$this->objDOCUMENTOIdDOCUMENTOObject = $mixValue;
						$this->intDOCUMENTOIdDOCUMENTO = $mixValue->IdDOCUMENTO;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DocumentosFase':
					/**
					 * Sets the value for the DocumentosFase object referenced by objDocumentosFase (Unique)
					 * @param DocumentosFase $mixValue
					 * @return DocumentosFase
					 */
					if (is_null($mixValue)) {
						$this->objDocumentosFase = null;

						// Make sure we update the adjoined DocumentosFase object the next time we call Save()
						$this->blnDirtyDocumentosFase = true;

						return null;
					} else {
						// Make sure $mixValue actually is a DocumentosFase object
						try {
							$mixValue = QType::Cast($mixValue, 'DocumentosFase');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						}

						// Are we setting objDocumentosFase to a DIFFERENT $mixValue?
						if ((!$this->DocumentosFase) || ($this->DocumentosFase->DOCUMENTOIdDOCUMENTO != $mixValue->DOCUMENTOIdDOCUMENTO)) {
							// Yes -- therefore, set the "Dirty" flag to true
							// to make sure we update the adjoined DocumentosFase object the next time we call Save()
							$this->blnDirtyDocumentosFase = true;

							// Update Local Member Variable
							$this->objDocumentosFase = $mixValue;
						} else {
							// Nope -- therefore, make no changes
						}

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

			
		
		// Related Objects' Methods for DocumentoAsDOCUMENTOIdDOCUMENTO
		//-------------------------------------------------------------------

		/**
		 * Gets all associated DocumentosAsDOCUMENTOIdDOCUMENTO as an array of Documento objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Documento[]
		*/ 
		public function GetDocumentoAsDOCUMENTOIdDOCUMENTOArray($objOptionalClauses = null) {
			if ((is_null($this->intIdDOCUMENTO)))
				return array();

			try {
				return Documento::LoadArrayByDOCUMENTOIdDOCUMENTO($this->intIdDOCUMENTO, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated DocumentosAsDOCUMENTOIdDOCUMENTO
		 * @return int
		*/ 
		public function CountDocumentosAsDOCUMENTOIdDOCUMENTO() {
			if ((is_null($this->intIdDOCUMENTO)))
				return 0;

			return Documento::CountByDOCUMENTOIdDOCUMENTO($this->intIdDOCUMENTO);
		}

		/**
		 * Associates a DocumentoAsDOCUMENTOIdDOCUMENTO
		 * @param Documento $objDocumento
		 * @return void
		*/ 
		public function AssociateDocumentoAsDOCUMENTOIdDOCUMENTO(Documento $objDocumento) {
			if ((is_null($this->intIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocumentoAsDOCUMENTOIdDOCUMENTO on this unsaved Documento.');
			if ((is_null($objDocumento->IdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateDocumentoAsDOCUMENTOIdDOCUMENTO on this Documento with an unsaved Documento.');

			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`DOCUMENTO`
				SET
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intIdDOCUMENTO) . '
				WHERE
					`idDOCUMENTO` = ' . $objDatabase->SqlVariable($objDocumento->IdDOCUMENTO) . '
			');
		}

		/**
		 * Unassociates a DocumentoAsDOCUMENTOIdDOCUMENTO
		 * @param Documento $objDocumento
		 * @return void
		*/ 
		public function UnassociateDocumentoAsDOCUMENTOIdDOCUMENTO(Documento $objDocumento) {
			if ((is_null($this->intIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocumentoAsDOCUMENTOIdDOCUMENTO on this unsaved Documento.');
			if ((is_null($objDocumento->IdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocumentoAsDOCUMENTOIdDOCUMENTO on this Documento with an unsaved Documento.');

			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`DOCUMENTO`
				SET
					`DOCUMENTO_idDOCUMENTO` = null
				WHERE
					`idDOCUMENTO` = ' . $objDatabase->SqlVariable($objDocumento->IdDOCUMENTO) . ' AND
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intIdDOCUMENTO) . '
			');
		}

		/**
		 * Unassociates all DocumentosAsDOCUMENTOIdDOCUMENTO
		 * @return void
		*/ 
		public function UnassociateAllDocumentosAsDOCUMENTOIdDOCUMENTO() {
			if ((is_null($this->intIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocumentoAsDOCUMENTOIdDOCUMENTO on this unsaved Documento.');

			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`DOCUMENTO`
				SET
					`DOCUMENTO_idDOCUMENTO` = null
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intIdDOCUMENTO) . '
			');
		}

		/**
		 * Deletes an associated DocumentoAsDOCUMENTOIdDOCUMENTO
		 * @param Documento $objDocumento
		 * @return void
		*/ 
		public function DeleteAssociatedDocumentoAsDOCUMENTOIdDOCUMENTO(Documento $objDocumento) {
			if ((is_null($this->intIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocumentoAsDOCUMENTOIdDOCUMENTO on this unsaved Documento.');
			if ((is_null($objDocumento->IdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocumentoAsDOCUMENTOIdDOCUMENTO on this Documento with an unsaved Documento.');

			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`DOCUMENTO`
				WHERE
					`idDOCUMENTO` = ' . $objDatabase->SqlVariable($objDocumento->IdDOCUMENTO) . ' AND
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intIdDOCUMENTO) . '
			');
		}

		/**
		 * Deletes all associated DocumentosAsDOCUMENTOIdDOCUMENTO
		 * @return void
		*/ 
		public function DeleteAllDocumentosAsDOCUMENTOIdDOCUMENTO() {
			if ((is_null($this->intIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateDocumentoAsDOCUMENTOIdDOCUMENTO on this unsaved Documento.');

			// Get the Database Object for this Class
			$objDatabase = Documento::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`DOCUMENTO`
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intIdDOCUMENTO) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Documento"><sequence>';
			$strToReturn .= '<element name="IdDOCUMENTO" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Duracion" type="xsd:int"/>';
			$strToReturn .= '<element name="DOCUMENTOIdDOCUMENTOObject" type="xsd1:Documento"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Documento', $strComplexTypeArray)) {
				$strComplexTypeArray['Documento'] = Documento::GetSoapComplexTypeXml();
				Documento::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Documento::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Documento();
			if (property_exists($objSoapObject, 'IdDOCUMENTO'))
				$objToReturn->intIdDOCUMENTO = $objSoapObject->IdDOCUMENTO;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Duracion'))
				$objToReturn->intDuracion = $objSoapObject->Duracion;
			if ((property_exists($objSoapObject, 'DOCUMENTOIdDOCUMENTOObject')) &&
				($objSoapObject->DOCUMENTOIdDOCUMENTOObject))
				$objToReturn->DOCUMENTOIdDOCUMENTOObject = Documento::GetObjectFromSoapObject($objSoapObject->DOCUMENTOIdDOCUMENTOObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Documento::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objDOCUMENTOIdDOCUMENTOObject)
				$objObject->objDOCUMENTOIdDOCUMENTOObject = Documento::GetSoapObjectFromObject($objObject->objDOCUMENTOIdDOCUMENTOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDOCUMENTOIdDOCUMENTO = null;
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
			$iArray['IdDOCUMENTO'] = $this->intIdDOCUMENTO;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['Duracion'] = $this->intDuracion;
			$iArray['DOCUMENTOIdDOCUMENTO'] = $this->intDOCUMENTOIdDOCUMENTO;
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
     * @property-read QQNode $IdDOCUMENTO
     * @property-read QQNode $Nombre
     * @property-read QQNode $Duracion
     * @property-read QQNode $DOCUMENTOIdDOCUMENTO
     * @property-read QQNodeDocumento $DOCUMENTOIdDOCUMENTOObject
     *
     *
     * @property-read QQReverseReferenceNodeDocumento $DocumentoAsDOCUMENTOIdDOCUMENTO
     * @property-read QQReverseReferenceNodeDocumentosFase $DocumentosFase

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeDocumento extends QQNode {
		protected $strTableName = 'DOCUMENTO';
		protected $strPrimaryKey = 'idDOCUMENTO';
		protected $strClassName = 'Documento';
		public function __get($strName) {
			switch ($strName) {
				case 'IdDOCUMENTO':
					return new QQNode('idDOCUMENTO', 'IdDOCUMENTO', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Duracion':
					return new QQNode('duracion', 'Duracion', 'Integer', $this);
				case 'DOCUMENTOIdDOCUMENTO':
					return new QQNode('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTO', 'Integer', $this);
				case 'DOCUMENTOIdDOCUMENTOObject':
					return new QQNodeDocumento('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTOObject', 'Integer', $this);
				case 'DocumentoAsDOCUMENTOIdDOCUMENTO':
					return new QQReverseReferenceNodeDocumento($this, 'documentoasdocumentoiddocumento', 'reverse_reference', 'DOCUMENTO_idDOCUMENTO');
				case 'DocumentosFase':
					return new QQReverseReferenceNodeDocumentosFase($this, 'documentosfase', 'reverse_reference', 'DOCUMENTO_idDOCUMENTO', 'DocumentosFase');

				case '_PrimaryKeyNode':
					return new QQNode('idDOCUMENTO', 'IdDOCUMENTO', 'Integer', $this);
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
     * @property-read QQNode $IdDOCUMENTO
     * @property-read QQNode $Nombre
     * @property-read QQNode $Duracion
     * @property-read QQNode $DOCUMENTOIdDOCUMENTO
     * @property-read QQNodeDocumento $DOCUMENTOIdDOCUMENTOObject
     *
     *
     * @property-read QQReverseReferenceNodeDocumento $DocumentoAsDOCUMENTOIdDOCUMENTO
     * @property-read QQReverseReferenceNodeDocumentosFase $DocumentosFase

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeDocumento extends QQReverseReferenceNode {
		protected $strTableName = 'DOCUMENTO';
		protected $strPrimaryKey = 'idDOCUMENTO';
		protected $strClassName = 'Documento';
		public function __get($strName) {
			switch ($strName) {
				case 'IdDOCUMENTO':
					return new QQNode('idDOCUMENTO', 'IdDOCUMENTO', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Duracion':
					return new QQNode('duracion', 'Duracion', 'integer', $this);
				case 'DOCUMENTOIdDOCUMENTO':
					return new QQNode('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTO', 'integer', $this);
				case 'DOCUMENTOIdDOCUMENTOObject':
					return new QQNodeDocumento('DOCUMENTO_idDOCUMENTO', 'DOCUMENTOIdDOCUMENTOObject', 'integer', $this);
				case 'DocumentoAsDOCUMENTOIdDOCUMENTO':
					return new QQReverseReferenceNodeDocumento($this, 'documentoasdocumentoiddocumento', 'reverse_reference', 'DOCUMENTO_idDOCUMENTO');
				case 'DocumentosFase':
					return new QQReverseReferenceNodeDocumentosFase($this, 'documentosfase', 'reverse_reference', 'DOCUMENTO_idDOCUMENTO', 'DocumentosFase');

				case '_PrimaryKeyNode':
					return new QQNode('idDOCUMENTO', 'IdDOCUMENTO', 'integer', $this);
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
