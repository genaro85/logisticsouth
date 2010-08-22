<?php
	/**
	 * The abstract VigenciaDocumentoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the VigenciaDocumento subclass which
	 * extends this VigenciaDocumentoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the VigenciaDocumento class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $LICENCIAIdLICENCIA the value for intLICENCIAIdLICENCIA (PK)
	 * @property integer $DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO the value for intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO (PK)
	 * @property QDateTime $FechaOtorgado the value for dttFechaOtorgado 
	 * @property QDateTime $FechaVencimieto the value for dttFechaVencimieto 
	 * @property string $NumRef the value for strNumRef 
	 * @property Licencia $LICENCIAIdLICENCIAObject the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
	 * @property DocumentosFase $DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject the value for the DocumentosFase object referenced by intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class VigenciaDocumentoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column VIGENCIA_DOCUMENTO.LICENCIA_idLICENCIA
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
		 * Protected member variable that maps to the database PK column VIGENCIA_DOCUMENTO.DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO
		 * @var integer intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO
		 */
		protected $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;
		const DOCUMENTOSFASEDOCUMENTOIdDOCUMENTODefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;
		 */
		protected $__intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;

		/**
		 * Protected member variable that maps to the database column VIGENCIA_DOCUMENTO.fechaOtorgado
		 * @var QDateTime dttFechaOtorgado
		 */
		protected $dttFechaOtorgado;
		const FechaOtorgadoDefault = null;


		/**
		 * Protected member variable that maps to the database column VIGENCIA_DOCUMENTO.fechaVencimieto
		 * @var QDateTime dttFechaVencimieto
		 */
		protected $dttFechaVencimieto;
		const FechaVencimietoDefault = null;


		/**
		 * Protected member variable that maps to the database column VIGENCIA_DOCUMENTO.numRef
		 * @var string strNumRef
		 */
		protected $strNumRef;
		const NumRefMaxLength = 45;
		const NumRefDefault = null;


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
		 * in the database column VIGENCIA_DOCUMENTO.LICENCIA_idLICENCIA.
		 *
		 * NOTE: Always use the LICENCIAIdLICENCIAObject property getter to correctly retrieve this Licencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Licencia objLICENCIAIdLICENCIAObject
		 */
		protected $objLICENCIAIdLICENCIAObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column VIGENCIA_DOCUMENTO.DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO.
		 *
		 * NOTE: Always use the DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject property getter to correctly retrieve this DocumentosFase object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var DocumentosFase objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject
		 */
		protected $objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intLICENCIAIdLICENCIA = VigenciaDocumento::LICENCIAIdLICENCIADefault;
			$this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = VigenciaDocumento::DOCUMENTOSFASEDOCUMENTOIdDOCUMENTODefault;
			$this->dttFechaOtorgado = (VigenciaDocumento::FechaOtorgadoDefault === null)?null:new QDateTime(VigenciaDocumento::FechaOtorgadoDefault);
			$this->dttFechaVencimieto = (VigenciaDocumento::FechaVencimietoDefault === null)?null:new QDateTime(VigenciaDocumento::FechaVencimietoDefault);
			$this->strNumRef = VigenciaDocumento::NumRefDefault;
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
		 * Load a VigenciaDocumento from PK Info
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VigenciaDocumento
		 */
		public static function Load($intLICENCIAIdLICENCIA, $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return VigenciaDocumento::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::VigenciaDocumento()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::VigenciaDocumento()->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO, $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all VigenciaDocumentos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VigenciaDocumento[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call VigenciaDocumento::QueryArray to perform the LoadAll query
			try {
				return VigenciaDocumento::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all VigenciaDocumentos
		 * @return int
		 */
		public static function CountAll() {
			// Call VigenciaDocumento::QueryCount to perform the CountAll query
			return VigenciaDocumento::QueryCount(QQ::All());
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
			$objDatabase = VigenciaDocumento::GetDatabase();

			// Create/Build out the QueryBuilder object with VigenciaDocumento-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'VIGENCIA_DOCUMENTO');
			VigenciaDocumento::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('VIGENCIA_DOCUMENTO');

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
		 * Static Qcubed Query method to query for a single VigenciaDocumento object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return VigenciaDocumento the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VigenciaDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new VigenciaDocumento object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = VigenciaDocumento::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return VigenciaDocumento::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of VigenciaDocumento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return VigenciaDocumento[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VigenciaDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return VigenciaDocumento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of VigenciaDocumento objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = VigenciaDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = VigenciaDocumento::GetDatabase();

			$strQuery = VigenciaDocumento::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/vigenciadocumento', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = VigenciaDocumento::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this VigenciaDocumento
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'VIGENCIA_DOCUMENTO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'LICENCIA_idLICENCIA', $strAliasPrefix . 'LICENCIA_idLICENCIA');
			$objBuilder->AddSelectItem($strTableName, 'DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO', $strAliasPrefix . 'DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO');
			$objBuilder->AddSelectItem($strTableName, 'fechaOtorgado', $strAliasPrefix . 'fechaOtorgado');
			$objBuilder->AddSelectItem($strTableName, 'fechaVencimieto', $strAliasPrefix . 'fechaVencimieto');
			$objBuilder->AddSelectItem($strTableName, 'numRef', $strAliasPrefix . 'numRef');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a VigenciaDocumento from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this VigenciaDocumento::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return VigenciaDocumento
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the VigenciaDocumento object
			$objToReturn = new VigenciaDocumento();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'LICENCIA_idLICENCIA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'LICENCIA_idLICENCIA'] : $strAliasPrefix . 'LICENCIA_idLICENCIA';
			$objToReturn->intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO'] : $strAliasPrefix . 'DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO';
			$objToReturn->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaOtorgado', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaOtorgado'] : $strAliasPrefix . 'fechaOtorgado';
			$objToReturn->dttFechaOtorgado = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaVencimieto', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaVencimieto'] : $strAliasPrefix . 'fechaVencimieto';
			$objToReturn->dttFechaVencimieto = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'numRef', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'numRef'] : $strAliasPrefix . 'numRef';
			$objToReturn->strNumRef = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LICENCIAIdLICENCIA != $objPreviousItem->LICENCIAIdLICENCIA) {
						continue;
					}
					if ($objToReturn->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO != $objPreviousItem->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO) {
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
				$strAliasPrefix = 'VIGENCIA_DOCUMENTO__';

			// Check for LICENCIAIdLICENCIAObject Early Binding
			$strAlias = $strAliasPrefix . 'LICENCIA_idLICENCIA__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLICENCIAIdLICENCIAObject = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'LICENCIA_idLICENCIA__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject Early Binding
			$strAlias = $strAliasPrefix . 'DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO__DOCUMENTO_idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = DocumentosFase::InstantiateDbRow($objDbRow, $strAliasPrefix . 'DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of VigenciaDocumentos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return VigenciaDocumento[]
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
					$objItem = VigenciaDocumento::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = VigenciaDocumento::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single VigenciaDocumento object,
		 * by LICENCIAIdLICENCIA, DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VigenciaDocumento
		*/
		public static function LoadByLICENCIAIdLICENCIADOCUMENTOSFASEDOCUMENTOIdDOCUMENTO($intLICENCIAIdLICENCIA, $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO, $objOptionalClauses = null) {
			return VigenciaDocumento::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::VigenciaDocumento()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::VigenciaDocumento()->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO, $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of VigenciaDocumento objects,
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VigenciaDocumento[]
		*/
		public static function LoadArrayByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Call VigenciaDocumento::QueryArray to perform the LoadArrayByLICENCIAIdLICENCIA query
			try {
				return VigenciaDocumento::QueryArray(
					QQ::Equal(QQN::VigenciaDocumento()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count VigenciaDocumentos
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @return int
		*/
		public static function CountByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA) {
			// Call VigenciaDocumento::QueryCount to perform the CountByLICENCIAIdLICENCIA query
			return VigenciaDocumento::QueryCount(
				QQ::Equal(QQN::VigenciaDocumento()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
			);
		}
			
		/**
		 * Load an array of VigenciaDocumento objects,
		 * by DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO Index(es)
		 * @param integer $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VigenciaDocumento[]
		*/
		public static function LoadArrayByDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO($intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO, $objOptionalClauses = null) {
			// Call VigenciaDocumento::QueryArray to perform the LoadArrayByDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO query
			try {
				return VigenciaDocumento::QueryArray(
					QQ::Equal(QQN::VigenciaDocumento()->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO, $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count VigenciaDocumentos
		 * by DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO Index(es)
		 * @param integer $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO
		 * @return int
		*/
		public static function CountByDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO($intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO) {
			// Call VigenciaDocumento::QueryCount to perform the CountByDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO query
			return VigenciaDocumento::QueryCount(
				QQ::Equal(QQN::VigenciaDocumento()->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO, $intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this VigenciaDocumento
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = VigenciaDocumento::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `VIGENCIA_DOCUMENTO` (
							`LICENCIA_idLICENCIA`,
							`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO`,
							`fechaOtorgado`,
							`fechaVencimieto`,
							`numRef`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							' . $objDatabase->SqlVariable($this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO) . ',
							' . $objDatabase->SqlVariable($this->dttFechaOtorgado) . ',
							' . $objDatabase->SqlVariable($this->dttFechaVencimieto) . ',
							' . $objDatabase->SqlVariable($this->strNumRef) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`VIGENCIA_DOCUMENTO`
						SET
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO) . ',
							`fechaOtorgado` = ' . $objDatabase->SqlVariable($this->dttFechaOtorgado) . ',
							`fechaVencimieto` = ' . $objDatabase->SqlVariable($this->dttFechaVencimieto) . ',
							`numRef` = ' . $objDatabase->SqlVariable($this->strNumRef) . '
						WHERE
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->__intLICENCIAIdLICENCIA) . ' AND
							`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->__intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->__intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = $this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this VigenciaDocumento
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLICENCIAIdLICENCIA)) || (is_null($this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this VigenciaDocumento with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = VigenciaDocumento::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`VIGENCIA_DOCUMENTO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ' AND
					`DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO) . '');
		}

		/**
		 * Delete all VigenciaDocumentos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = VigenciaDocumento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`VIGENCIA_DOCUMENTO`');
		}

		/**
		 * Truncate VIGENCIA_DOCUMENTO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = VigenciaDocumento::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `VIGENCIA_DOCUMENTO`');
		}

		/**
		 * Reload this VigenciaDocumento from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved VigenciaDocumento object.');

			// Reload the Object
			$objReloaded = VigenciaDocumento::Load($this->intLICENCIAIdLICENCIA, $this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO);

			// Update $this's local variables to match
			$this->LICENCIAIdLICENCIA = $objReloaded->LICENCIAIdLICENCIA;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = $objReloaded->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;
			$this->__intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = $this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;
			$this->dttFechaOtorgado = $objReloaded->dttFechaOtorgado;
			$this->dttFechaVencimieto = $objReloaded->dttFechaVencimieto;
			$this->strNumRef = $objReloaded->strNumRef;
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

				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO':
					/**
					 * Gets the value for intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO (PK)
					 * @return integer
					 */
					return $this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;

				case 'FechaOtorgado':
					/**
					 * Gets the value for dttFechaOtorgado 
					 * @return QDateTime
					 */
					return $this->dttFechaOtorgado;

				case 'FechaVencimieto':
					/**
					 * Gets the value for dttFechaVencimieto 
					 * @return QDateTime
					 */
					return $this->dttFechaVencimieto;

				case 'NumRef':
					/**
					 * Gets the value for strNumRef 
					 * @return string
					 */
					return $this->strNumRef;


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

				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject':
					/**
					 * Gets the value for the DocumentosFase object referenced by intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO (PK)
					 * @return DocumentosFase
					 */
					try {
						if ((!$this->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject) && (!is_null($this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO)))
							$this->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = DocumentosFase::Load($this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO);
						return $this->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject;
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

				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO':
					/**
					 * Sets the value for intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = null;
						return ($this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaOtorgado':
					/**
					 * Sets the value for dttFechaOtorgado 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaOtorgado = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaVencimieto':
					/**
					 * Sets the value for dttFechaVencimieto 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaVencimieto = QType::Cast($mixValue, QType::DateTime));
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
							throw new QCallerException('Unable to set an unsaved LICENCIAIdLICENCIAObject for this VigenciaDocumento');

						// Update Local Member Variables
						$this->objLICENCIAIdLICENCIAObject = $mixValue;
						$this->intLICENCIAIdLICENCIA = $mixValue->IdLICENCIA;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject':
					/**
					 * Sets the value for the DocumentosFase object referenced by intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO (PK)
					 * @param DocumentosFase $mixValue
					 * @return DocumentosFase
					 */
					if (is_null($mixValue)) {
						$this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = null;
						$this->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a DocumentosFase object
						try {
							$mixValue = QType::Cast($mixValue, 'DocumentosFase');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED DocumentosFase object
						if (is_null($mixValue->DOCUMENTOIdDOCUMENTO))
							throw new QCallerException('Unable to set an unsaved DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject for this VigenciaDocumento');

						// Update Local Member Variables
						$this->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = $mixValue;
						$this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = $mixValue->DOCUMENTOIdDOCUMENTO;

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
			$strToReturn = '<complexType name="VigenciaDocumento"><sequence>';
			$strToReturn .= '<element name="LICENCIAIdLICENCIAObject" type="xsd1:Licencia"/>';
			$strToReturn .= '<element name="DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject" type="xsd1:DocumentosFase"/>';
			$strToReturn .= '<element name="FechaOtorgado" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaVencimieto" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="NumRef" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('VigenciaDocumento', $strComplexTypeArray)) {
				$strComplexTypeArray['VigenciaDocumento'] = VigenciaDocumento::GetSoapComplexTypeXml();
				Licencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				DocumentosFase::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, VigenciaDocumento::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new VigenciaDocumento();
			if ((property_exists($objSoapObject, 'LICENCIAIdLICENCIAObject')) &&
				($objSoapObject->LICENCIAIdLICENCIAObject))
				$objToReturn->LICENCIAIdLICENCIAObject = Licencia::GetObjectFromSoapObject($objSoapObject->LICENCIAIdLICENCIAObject);
			if ((property_exists($objSoapObject, 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject')) &&
				($objSoapObject->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject))
				$objToReturn->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = DocumentosFase::GetObjectFromSoapObject($objSoapObject->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject);
			if (property_exists($objSoapObject, 'FechaOtorgado'))
				$objToReturn->dttFechaOtorgado = new QDateTime($objSoapObject->FechaOtorgado);
			if (property_exists($objSoapObject, 'FechaVencimieto'))
				$objToReturn->dttFechaVencimieto = new QDateTime($objSoapObject->FechaVencimieto);
			if (property_exists($objSoapObject, 'NumRef'))
				$objToReturn->strNumRef = $objSoapObject->NumRef;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, VigenciaDocumento::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLICENCIAIdLICENCIAObject)
				$objObject->objLICENCIAIdLICENCIAObject = Licencia::GetSoapObjectFromObject($objObject->objLICENCIAIdLICENCIAObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLICENCIAIdLICENCIA = null;
			if ($objObject->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject)
				$objObject->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject = DocumentosFase::GetSoapObjectFromObject($objObject->objDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO = null;
			if ($objObject->dttFechaOtorgado)
				$objObject->dttFechaOtorgado = $objObject->dttFechaOtorgado->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFechaVencimieto)
				$objObject->dttFechaVencimieto = $objObject->dttFechaVencimieto->qFormat(QDateTime::FormatSoap);
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
			$iArray['DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO'] = $this->intDOCUMENTOSFASEDOCUMENTOIdDOCUMENTO;
			$iArray['FechaOtorgado'] = $this->dttFechaOtorgado;
			$iArray['FechaVencimieto'] = $this->dttFechaVencimieto;
			$iArray['NumRef'] = $this->strNumRef;
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
     * @property-read QQNode $DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO
     * @property-read QQNodeDocumentosFase $DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject
     * @property-read QQNode $FechaOtorgado
     * @property-read QQNode $FechaVencimieto
     * @property-read QQNode $NumRef
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQNodeVigenciaDocumento extends QQNode {
		protected $strTableName = 'VIGENCIA_DOCUMENTO';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'VigenciaDocumento';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'Integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'Integer', $this);
				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO':
					return new QQNode('DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO', 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO', 'Integer', $this);
				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject':
					return new QQNodeDocumentosFase('DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO', 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject', 'Integer', $this);
				case 'FechaOtorgado':
					return new QQNode('fechaOtorgado', 'FechaOtorgado', 'Date', $this);
				case 'FechaVencimieto':
					return new QQNode('fechaVencimieto', 'FechaVencimieto', 'Date', $this);
				case 'NumRef':
					return new QQNode('numRef', 'NumRef', 'VarChar', $this);

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
     * @property-read QQNode $DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO
     * @property-read QQNodeDocumentosFase $DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject
     * @property-read QQNode $FechaOtorgado
     * @property-read QQNode $FechaVencimieto
     * @property-read QQNode $NumRef
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeVigenciaDocumento extends QQReverseReferenceNode {
		protected $strTableName = 'VIGENCIA_DOCUMENTO';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'VigenciaDocumento';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'integer', $this);
				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO':
					return new QQNode('DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO', 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTO', 'integer', $this);
				case 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject':
					return new QQNodeDocumentosFase('DOCUMENTOS_FASE_DOCUMENTO_idDOCUMENTO', 'DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject', 'integer', $this);
				case 'FechaOtorgado':
					return new QQNode('fechaOtorgado', 'FechaOtorgado', 'QDateTime', $this);
				case 'FechaVencimieto':
					return new QQNode('fechaVencimieto', 'FechaVencimieto', 'QDateTime', $this);
				case 'NumRef':
					return new QQNode('numRef', 'NumRef', 'string', $this);

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
