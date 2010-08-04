<?php
	/**
	 * The abstract ListaProductoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the ListaProducto subclass which
	 * extends this ListaProductoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the ListaProducto class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $LICENCIAIdLICENCIA the value for intLICENCIAIdLICENCIA (PK)
	 * @property integer $PRODUCTOIdPRODUCTO the value for intPRODUCTOIdPRODUCTO (PK)
	 * @property string $PRODUCTOCantidad the value for strPRODUCTOCantidad (Not Null)
	 * @property integer $PRODUCTOVolumen the value for intPRODUCTOVolumen (Not Null)
	 * @property string $PRODUCTOUnidad the value for strPRODUCTOUnidad (Not Null)
	 * @property string $PRODUCTOCostoUnitario the value for strPRODUCTOCostoUnitario 
	 * @property Licencia $LICENCIAIdLICENCIAObject the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
	 * @property Producto $PRODUCTOIdPRODUCTOObject the value for the Producto object referenced by intPRODUCTOIdPRODUCTO (PK)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ListaProductoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column LISTA_PRODUCTO.LICENCIA_idLICENCIA
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
		 * Protected member variable that maps to the database PK column LISTA_PRODUCTO.PRODUCTO_idPRODUCTO
		 * @var integer intPRODUCTOIdPRODUCTO
		 */
		protected $intPRODUCTOIdPRODUCTO;
		const PRODUCTOIdPRODUCTODefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intPRODUCTOIdPRODUCTO;
		 */
		protected $__intPRODUCTOIdPRODUCTO;

		/**
		 * Protected member variable that maps to the database column LISTA_PRODUCTO.PRODUCTO_cantidad
		 * @var string strPRODUCTOCantidad
		 */
		protected $strPRODUCTOCantidad;
		const PRODUCTOCantidadMaxLength = 45;
		const PRODUCTOCantidadDefault = null;


		/**
		 * Protected member variable that maps to the database column LISTA_PRODUCTO.PRODUCTO_volumen
		 * @var integer intPRODUCTOVolumen
		 */
		protected $intPRODUCTOVolumen;
		const PRODUCTOVolumenDefault = null;


		/**
		 * Protected member variable that maps to the database column LISTA_PRODUCTO.PRODUCTO_unidad
		 * @var string strPRODUCTOUnidad
		 */
		protected $strPRODUCTOUnidad;
		const PRODUCTOUnidadMaxLength = 45;
		const PRODUCTOUnidadDefault = null;


		/**
		 * Protected member variable that maps to the database column LISTA_PRODUCTO.PRODUCTO_costoUnitario
		 * @var string strPRODUCTOCostoUnitario
		 */
		protected $strPRODUCTOCostoUnitario;
		const PRODUCTOCostoUnitarioMaxLength = 45;
		const PRODUCTOCostoUnitarioDefault = null;


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
		 * in the database column LISTA_PRODUCTO.LICENCIA_idLICENCIA.
		 *
		 * NOTE: Always use the LICENCIAIdLICENCIAObject property getter to correctly retrieve this Licencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Licencia objLICENCIAIdLICENCIAObject
		 */
		protected $objLICENCIAIdLICENCIAObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column LISTA_PRODUCTO.PRODUCTO_idPRODUCTO.
		 *
		 * NOTE: Always use the PRODUCTOIdPRODUCTOObject property getter to correctly retrieve this Producto object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Producto objPRODUCTOIdPRODUCTOObject
		 */
		protected $objPRODUCTOIdPRODUCTOObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intLICENCIAIdLICENCIA = ListaProducto::LICENCIAIdLICENCIADefault;
			$this->intPRODUCTOIdPRODUCTO = ListaProducto::PRODUCTOIdPRODUCTODefault;
			$this->strPRODUCTOCantidad = ListaProducto::PRODUCTOCantidadDefault;
			$this->intPRODUCTOVolumen = ListaProducto::PRODUCTOVolumenDefault;
			$this->strPRODUCTOUnidad = ListaProducto::PRODUCTOUnidadDefault;
			$this->strPRODUCTOCostoUnitario = ListaProducto::PRODUCTOCostoUnitarioDefault;
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
		 * Load a ListaProducto from PK Info
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intPRODUCTOIdPRODUCTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaProducto
		 */
		public static function Load($intLICENCIAIdLICENCIA, $intPRODUCTOIdPRODUCTO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return ListaProducto::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ListaProducto()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::ListaProducto()->PRODUCTOIdPRODUCTO, $intPRODUCTOIdPRODUCTO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all ListaProductos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaProducto[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call ListaProducto::QueryArray to perform the LoadAll query
			try {
				return ListaProducto::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all ListaProductos
		 * @return int
		 */
		public static function CountAll() {
			// Call ListaProducto::QueryCount to perform the CountAll query
			return ListaProducto::QueryCount(QQ::All());
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
			$objDatabase = ListaProducto::GetDatabase();

			// Create/Build out the QueryBuilder object with ListaProducto-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'LISTA_PRODUCTO');
			ListaProducto::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('LISTA_PRODUCTO');

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
		 * Static Qcubed Query method to query for a single ListaProducto object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ListaProducto the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ListaProducto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new ListaProducto object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = ListaProducto::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return ListaProducto::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of ListaProducto objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return ListaProducto[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ListaProducto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return ListaProducto::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of ListaProducto objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = ListaProducto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = ListaProducto::GetDatabase();

			$strQuery = ListaProducto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/listaproducto', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = ListaProducto::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this ListaProducto
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'LISTA_PRODUCTO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'LICENCIA_idLICENCIA', $strAliasPrefix . 'LICENCIA_idLICENCIA');
			$objBuilder->AddSelectItem($strTableName, 'PRODUCTO_idPRODUCTO', $strAliasPrefix . 'PRODUCTO_idPRODUCTO');
			$objBuilder->AddSelectItem($strTableName, 'PRODUCTO_cantidad', $strAliasPrefix . 'PRODUCTO_cantidad');
			$objBuilder->AddSelectItem($strTableName, 'PRODUCTO_volumen', $strAliasPrefix . 'PRODUCTO_volumen');
			$objBuilder->AddSelectItem($strTableName, 'PRODUCTO_unidad', $strAliasPrefix . 'PRODUCTO_unidad');
			$objBuilder->AddSelectItem($strTableName, 'PRODUCTO_costoUnitario', $strAliasPrefix . 'PRODUCTO_costoUnitario');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a ListaProducto from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this ListaProducto::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return ListaProducto
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the ListaProducto object
			$objToReturn = new ListaProducto();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'LICENCIA_idLICENCIA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'LICENCIA_idLICENCIA'] : $strAliasPrefix . 'LICENCIA_idLICENCIA';
			$objToReturn->intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'PRODUCTO_idPRODUCTO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PRODUCTO_idPRODUCTO'] : $strAliasPrefix . 'PRODUCTO_idPRODUCTO';
			$objToReturn->intPRODUCTOIdPRODUCTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intPRODUCTOIdPRODUCTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'PRODUCTO_cantidad', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PRODUCTO_cantidad'] : $strAliasPrefix . 'PRODUCTO_cantidad';
			$objToReturn->strPRODUCTOCantidad = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PRODUCTO_volumen', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PRODUCTO_volumen'] : $strAliasPrefix . 'PRODUCTO_volumen';
			$objToReturn->intPRODUCTOVolumen = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'PRODUCTO_unidad', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PRODUCTO_unidad'] : $strAliasPrefix . 'PRODUCTO_unidad';
			$objToReturn->strPRODUCTOUnidad = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PRODUCTO_costoUnitario', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PRODUCTO_costoUnitario'] : $strAliasPrefix . 'PRODUCTO_costoUnitario';
			$objToReturn->strPRODUCTOCostoUnitario = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->LICENCIAIdLICENCIA != $objPreviousItem->LICENCIAIdLICENCIA) {
						continue;
					}
					if ($objToReturn->PRODUCTOIdPRODUCTO != $objPreviousItem->PRODUCTOIdPRODUCTO) {
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
				$strAliasPrefix = 'LISTA_PRODUCTO__';

			// Check for LICENCIAIdLICENCIAObject Early Binding
			$strAlias = $strAliasPrefix . 'LICENCIA_idLICENCIA__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLICENCIAIdLICENCIAObject = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'LICENCIA_idLICENCIA__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PRODUCTOIdPRODUCTOObject Early Binding
			$strAlias = $strAliasPrefix . 'PRODUCTO_idPRODUCTO__idPRODUCTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPRODUCTOIdPRODUCTOObject = Producto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PRODUCTO_idPRODUCTO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of ListaProductos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return ListaProducto[]
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
					$objItem = ListaProducto::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = ListaProducto::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single ListaProducto object,
		 * by LICENCIAIdLICENCIA, PRODUCTOIdPRODUCTO Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param integer $intPRODUCTOIdPRODUCTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaProducto
		*/
		public static function LoadByLICENCIAIdLICENCIAPRODUCTOIdPRODUCTO($intLICENCIAIdLICENCIA, $intPRODUCTOIdPRODUCTO, $objOptionalClauses = null) {
			return ListaProducto::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::ListaProducto()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					QQ::Equal(QQN::ListaProducto()->PRODUCTOIdPRODUCTO, $intPRODUCTOIdPRODUCTO)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of ListaProducto objects,
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaProducto[]
		*/
		public static function LoadArrayByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Call ListaProducto::QueryArray to perform the LoadArrayByLICENCIAIdLICENCIA query
			try {
				return ListaProducto::QueryArray(
					QQ::Equal(QQN::ListaProducto()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ListaProductos
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @return int
		*/
		public static function CountByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA) {
			// Call ListaProducto::QueryCount to perform the CountByLICENCIAIdLICENCIA query
			return ListaProducto::QueryCount(
				QQ::Equal(QQN::ListaProducto()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
			);
		}
			
		/**
		 * Load an array of ListaProducto objects,
		 * by PRODUCTOIdPRODUCTO Index(es)
		 * @param integer $intPRODUCTOIdPRODUCTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaProducto[]
		*/
		public static function LoadArrayByPRODUCTOIdPRODUCTO($intPRODUCTOIdPRODUCTO, $objOptionalClauses = null) {
			// Call ListaProducto::QueryArray to perform the LoadArrayByPRODUCTOIdPRODUCTO query
			try {
				return ListaProducto::QueryArray(
					QQ::Equal(QQN::ListaProducto()->PRODUCTOIdPRODUCTO, $intPRODUCTOIdPRODUCTO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count ListaProductos
		 * by PRODUCTOIdPRODUCTO Index(es)
		 * @param integer $intPRODUCTOIdPRODUCTO
		 * @return int
		*/
		public static function CountByPRODUCTOIdPRODUCTO($intPRODUCTOIdPRODUCTO) {
			// Call ListaProducto::QueryCount to perform the CountByPRODUCTOIdPRODUCTO query
			return ListaProducto::QueryCount(
				QQ::Equal(QQN::ListaProducto()->PRODUCTOIdPRODUCTO, $intPRODUCTOIdPRODUCTO)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this ListaProducto
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = ListaProducto::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `LISTA_PRODUCTO` (
							`LICENCIA_idLICENCIA`,
							`PRODUCTO_idPRODUCTO`,
							`PRODUCTO_cantidad`,
							`PRODUCTO_volumen`,
							`PRODUCTO_unidad`,
							`PRODUCTO_costoUnitario`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							' . $objDatabase->SqlVariable($this->intPRODUCTOIdPRODUCTO) . ',
							' . $objDatabase->SqlVariable($this->strPRODUCTOCantidad) . ',
							' . $objDatabase->SqlVariable($this->intPRODUCTOVolumen) . ',
							' . $objDatabase->SqlVariable($this->strPRODUCTOUnidad) . ',
							' . $objDatabase->SqlVariable($this->strPRODUCTOCostoUnitario) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`LISTA_PRODUCTO`
						SET
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intPRODUCTOIdPRODUCTO) . ',
							`PRODUCTO_cantidad` = ' . $objDatabase->SqlVariable($this->strPRODUCTOCantidad) . ',
							`PRODUCTO_volumen` = ' . $objDatabase->SqlVariable($this->intPRODUCTOVolumen) . ',
							`PRODUCTO_unidad` = ' . $objDatabase->SqlVariable($this->strPRODUCTOUnidad) . ',
							`PRODUCTO_costoUnitario` = ' . $objDatabase->SqlVariable($this->strPRODUCTOCostoUnitario) . '
						WHERE
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->__intLICENCIAIdLICENCIA) . ' AND
							`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->__intPRODUCTOIdPRODUCTO) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->__intPRODUCTOIdPRODUCTO = $this->intPRODUCTOIdPRODUCTO;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this ListaProducto
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intLICENCIAIdLICENCIA)) || (is_null($this->intPRODUCTOIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this ListaProducto with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = ListaProducto::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_PRODUCTO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intPRODUCTOIdPRODUCTO) . '');
		}

		/**
		 * Delete all ListaProductos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = ListaProducto::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_PRODUCTO`');
		}

		/**
		 * Truncate LISTA_PRODUCTO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = ListaProducto::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `LISTA_PRODUCTO`');
		}

		/**
		 * Reload this ListaProducto from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved ListaProducto object.');

			// Reload the Object
			$objReloaded = ListaProducto::Load($this->intLICENCIAIdLICENCIA, $this->intPRODUCTOIdPRODUCTO);

			// Update $this's local variables to match
			$this->LICENCIAIdLICENCIA = $objReloaded->LICENCIAIdLICENCIA;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->PRODUCTOIdPRODUCTO = $objReloaded->PRODUCTOIdPRODUCTO;
			$this->__intPRODUCTOIdPRODUCTO = $this->intPRODUCTOIdPRODUCTO;
			$this->strPRODUCTOCantidad = $objReloaded->strPRODUCTOCantidad;
			$this->intPRODUCTOVolumen = $objReloaded->intPRODUCTOVolumen;
			$this->strPRODUCTOUnidad = $objReloaded->strPRODUCTOUnidad;
			$this->strPRODUCTOCostoUnitario = $objReloaded->strPRODUCTOCostoUnitario;
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

				case 'PRODUCTOIdPRODUCTO':
					/**
					 * Gets the value for intPRODUCTOIdPRODUCTO (PK)
					 * @return integer
					 */
					return $this->intPRODUCTOIdPRODUCTO;

				case 'PRODUCTOCantidad':
					/**
					 * Gets the value for strPRODUCTOCantidad (Not Null)
					 * @return string
					 */
					return $this->strPRODUCTOCantidad;

				case 'PRODUCTOVolumen':
					/**
					 * Gets the value for intPRODUCTOVolumen (Not Null)
					 * @return integer
					 */
					return $this->intPRODUCTOVolumen;

				case 'PRODUCTOUnidad':
					/**
					 * Gets the value for strPRODUCTOUnidad (Not Null)
					 * @return string
					 */
					return $this->strPRODUCTOUnidad;

				case 'PRODUCTOCostoUnitario':
					/**
					 * Gets the value for strPRODUCTOCostoUnitario 
					 * @return string
					 */
					return $this->strPRODUCTOCostoUnitario;


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

				case 'PRODUCTOIdPRODUCTOObject':
					/**
					 * Gets the value for the Producto object referenced by intPRODUCTOIdPRODUCTO (PK)
					 * @return Producto
					 */
					try {
						if ((!$this->objPRODUCTOIdPRODUCTOObject) && (!is_null($this->intPRODUCTOIdPRODUCTO)))
							$this->objPRODUCTOIdPRODUCTOObject = Producto::Load($this->intPRODUCTOIdPRODUCTO);
						return $this->objPRODUCTOIdPRODUCTOObject;
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

				case 'PRODUCTOIdPRODUCTO':
					/**
					 * Sets the value for intPRODUCTOIdPRODUCTO (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPRODUCTOIdPRODUCTOObject = null;
						return ($this->intPRODUCTOIdPRODUCTO = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PRODUCTOCantidad':
					/**
					 * Sets the value for strPRODUCTOCantidad (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPRODUCTOCantidad = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PRODUCTOVolumen':
					/**
					 * Sets the value for intPRODUCTOVolumen (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intPRODUCTOVolumen = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PRODUCTOUnidad':
					/**
					 * Sets the value for strPRODUCTOUnidad (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPRODUCTOUnidad = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PRODUCTOCostoUnitario':
					/**
					 * Sets the value for strPRODUCTOCostoUnitario 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPRODUCTOCostoUnitario = QType::Cast($mixValue, QType::String));
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
							throw new QCallerException('Unable to set an unsaved LICENCIAIdLICENCIAObject for this ListaProducto');

						// Update Local Member Variables
						$this->objLICENCIAIdLICENCIAObject = $mixValue;
						$this->intLICENCIAIdLICENCIA = $mixValue->IdLICENCIA;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PRODUCTOIdPRODUCTOObject':
					/**
					 * Sets the value for the Producto object referenced by intPRODUCTOIdPRODUCTO (PK)
					 * @param Producto $mixValue
					 * @return Producto
					 */
					if (is_null($mixValue)) {
						$this->intPRODUCTOIdPRODUCTO = null;
						$this->objPRODUCTOIdPRODUCTOObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Producto object
						try {
							$mixValue = QType::Cast($mixValue, 'Producto');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Producto object
						if (is_null($mixValue->IdPRODUCTO))
							throw new QCallerException('Unable to set an unsaved PRODUCTOIdPRODUCTOObject for this ListaProducto');

						// Update Local Member Variables
						$this->objPRODUCTOIdPRODUCTOObject = $mixValue;
						$this->intPRODUCTOIdPRODUCTO = $mixValue->IdPRODUCTO;

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
			$strToReturn = '<complexType name="ListaProducto"><sequence>';
			$strToReturn .= '<element name="LICENCIAIdLICENCIAObject" type="xsd1:Licencia"/>';
			$strToReturn .= '<element name="PRODUCTOIdPRODUCTOObject" type="xsd1:Producto"/>';
			$strToReturn .= '<element name="PRODUCTOCantidad" type="xsd:string"/>';
			$strToReturn .= '<element name="PRODUCTOVolumen" type="xsd:int"/>';
			$strToReturn .= '<element name="PRODUCTOUnidad" type="xsd:string"/>';
			$strToReturn .= '<element name="PRODUCTOCostoUnitario" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('ListaProducto', $strComplexTypeArray)) {
				$strComplexTypeArray['ListaProducto'] = ListaProducto::GetSoapComplexTypeXml();
				Licencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				Producto::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, ListaProducto::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new ListaProducto();
			if ((property_exists($objSoapObject, 'LICENCIAIdLICENCIAObject')) &&
				($objSoapObject->LICENCIAIdLICENCIAObject))
				$objToReturn->LICENCIAIdLICENCIAObject = Licencia::GetObjectFromSoapObject($objSoapObject->LICENCIAIdLICENCIAObject);
			if ((property_exists($objSoapObject, 'PRODUCTOIdPRODUCTOObject')) &&
				($objSoapObject->PRODUCTOIdPRODUCTOObject))
				$objToReturn->PRODUCTOIdPRODUCTOObject = Producto::GetObjectFromSoapObject($objSoapObject->PRODUCTOIdPRODUCTOObject);
			if (property_exists($objSoapObject, 'PRODUCTOCantidad'))
				$objToReturn->strPRODUCTOCantidad = $objSoapObject->PRODUCTOCantidad;
			if (property_exists($objSoapObject, 'PRODUCTOVolumen'))
				$objToReturn->intPRODUCTOVolumen = $objSoapObject->PRODUCTOVolumen;
			if (property_exists($objSoapObject, 'PRODUCTOUnidad'))
				$objToReturn->strPRODUCTOUnidad = $objSoapObject->PRODUCTOUnidad;
			if (property_exists($objSoapObject, 'PRODUCTOCostoUnitario'))
				$objToReturn->strPRODUCTOCostoUnitario = $objSoapObject->PRODUCTOCostoUnitario;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, ListaProducto::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objLICENCIAIdLICENCIAObject)
				$objObject->objLICENCIAIdLICENCIAObject = Licencia::GetSoapObjectFromObject($objObject->objLICENCIAIdLICENCIAObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLICENCIAIdLICENCIA = null;
			if ($objObject->objPRODUCTOIdPRODUCTOObject)
				$objObject->objPRODUCTOIdPRODUCTOObject = Producto::GetSoapObjectFromObject($objObject->objPRODUCTOIdPRODUCTOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPRODUCTOIdPRODUCTO = null;
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
			$iArray['PRODUCTOIdPRODUCTO'] = $this->intPRODUCTOIdPRODUCTO;
			$iArray['PRODUCTOCantidad'] = $this->strPRODUCTOCantidad;
			$iArray['PRODUCTOVolumen'] = $this->intPRODUCTOVolumen;
			$iArray['PRODUCTOUnidad'] = $this->strPRODUCTOUnidad;
			$iArray['PRODUCTOCostoUnitario'] = $this->strPRODUCTOCostoUnitario;
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
     * @property-read QQNode $PRODUCTOIdPRODUCTO
     * @property-read QQNodeProducto $PRODUCTOIdPRODUCTOObject
     * @property-read QQNode $PRODUCTOCantidad
     * @property-read QQNode $PRODUCTOVolumen
     * @property-read QQNode $PRODUCTOUnidad
     * @property-read QQNode $PRODUCTOCostoUnitario
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQNodeListaProducto extends QQNode {
		protected $strTableName = 'LISTA_PRODUCTO';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'ListaProducto';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'Integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'Integer', $this);
				case 'PRODUCTOIdPRODUCTO':
					return new QQNode('PRODUCTO_idPRODUCTO', 'PRODUCTOIdPRODUCTO', 'Integer', $this);
				case 'PRODUCTOIdPRODUCTOObject':
					return new QQNodeProducto('PRODUCTO_idPRODUCTO', 'PRODUCTOIdPRODUCTOObject', 'Integer', $this);
				case 'PRODUCTOCantidad':
					return new QQNode('PRODUCTO_cantidad', 'PRODUCTOCantidad', 'VarChar', $this);
				case 'PRODUCTOVolumen':
					return new QQNode('PRODUCTO_volumen', 'PRODUCTOVolumen', 'Integer', $this);
				case 'PRODUCTOUnidad':
					return new QQNode('PRODUCTO_unidad', 'PRODUCTOUnidad', 'VarChar', $this);
				case 'PRODUCTOCostoUnitario':
					return new QQNode('PRODUCTO_costoUnitario', 'PRODUCTOCostoUnitario', 'VarChar', $this);

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
     * @property-read QQNode $PRODUCTOIdPRODUCTO
     * @property-read QQNodeProducto $PRODUCTOIdPRODUCTOObject
     * @property-read QQNode $PRODUCTOCantidad
     * @property-read QQNode $PRODUCTOVolumen
     * @property-read QQNode $PRODUCTOUnidad
     * @property-read QQNode $PRODUCTOCostoUnitario
     *
     *

     * @property-read QQNodeLicencia $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeListaProducto extends QQReverseReferenceNode {
		protected $strTableName = 'LISTA_PRODUCTO';
		protected $strPrimaryKey = 'LICENCIA_idLICENCIA';
		protected $strClassName = 'ListaProducto';
		public function __get($strName) {
			switch ($strName) {
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'integer', $this);
				case 'PRODUCTOIdPRODUCTO':
					return new QQNode('PRODUCTO_idPRODUCTO', 'PRODUCTOIdPRODUCTO', 'integer', $this);
				case 'PRODUCTOIdPRODUCTOObject':
					return new QQNodeProducto('PRODUCTO_idPRODUCTO', 'PRODUCTOIdPRODUCTOObject', 'integer', $this);
				case 'PRODUCTOCantidad':
					return new QQNode('PRODUCTO_cantidad', 'PRODUCTOCantidad', 'string', $this);
				case 'PRODUCTOVolumen':
					return new QQNode('PRODUCTO_volumen', 'PRODUCTOVolumen', 'integer', $this);
				case 'PRODUCTOUnidad':
					return new QQNode('PRODUCTO_unidad', 'PRODUCTOUnidad', 'string', $this);
				case 'PRODUCTOCostoUnitario':
					return new QQNode('PRODUCTO_costoUnitario', 'PRODUCTOCostoUnitario', 'string', $this);

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
