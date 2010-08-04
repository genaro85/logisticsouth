<?php
	/**
	 * The abstract ProductoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Producto subclass which
	 * extends this ProductoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Producto class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdPRODUCTO the value for intIdPRODUCTO (Read-Only PK)
	 * @property string $CodigoArancelario the value for strCodigoArancelario (Not Null)
	 * @property string $Descripcion the value for strDescripcion (Not Null)
	 * @property string $NumeroRegSanitario the value for strNumeroRegSanitario 
	 * @property integer $Volumen the value for intVolumen 
	 * @property string $Unidad the value for strUnidad 
	 * @property-read ListaProducto $_ListaProductoAsPRODUCTOIdPRODUCTO the value for the private _objListaProductoAsPRODUCTOIdPRODUCTO (Read-Only) if set due to an expansion on the LISTA_PRODUCTO.PRODUCTO_idPRODUCTO reverse relationship
	 * @property-read ListaProducto[] $_ListaProductoAsPRODUCTOIdPRODUCTOArray the value for the private _objListaProductoAsPRODUCTOIdPRODUCTOArray (Read-Only) if set due to an ExpandAsArray on the LISTA_PRODUCTO.PRODUCTO_idPRODUCTO reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ProductoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column PRODUCTO.idPRODUCTO
		 * @var integer intIdPRODUCTO
		 */
		protected $intIdPRODUCTO;
		const IdPRODUCTODefault = null;


		/**
		 * Protected member variable that maps to the database column PRODUCTO.codigoArancelario
		 * @var string strCodigoArancelario
		 */
		protected $strCodigoArancelario;
		const CodigoArancelarioMaxLength = 45;
		const CodigoArancelarioDefault = null;


		/**
		 * Protected member variable that maps to the database column PRODUCTO.descripcion
		 * @var string strDescripcion
		 */
		protected $strDescripcion;
		const DescripcionDefault = null;


		/**
		 * Protected member variable that maps to the database column PRODUCTO.numeroRegSanitario
		 * @var string strNumeroRegSanitario
		 */
		protected $strNumeroRegSanitario;
		const NumeroRegSanitarioMaxLength = 45;
		const NumeroRegSanitarioDefault = null;


		/**
		 * Protected member variable that maps to the database column PRODUCTO.volumen
		 * @var integer intVolumen
		 */
		protected $intVolumen;
		const VolumenDefault = null;


		/**
		 * Protected member variable that maps to the database column PRODUCTO.unidad
		 * @var string strUnidad
		 */
		protected $strUnidad;
		const UnidadMaxLength = 45;
		const UnidadDefault = null;


		/**
		 * Private member variable that stores a reference to a single ListaProductoAsPRODUCTOIdPRODUCTO object
		 * (of type ListaProducto), if this Producto object was restored with
		 * an expansion on the LISTA_PRODUCTO association table.
		 * @var ListaProducto _objListaProductoAsPRODUCTOIdPRODUCTO;
		 */
		private $_objListaProductoAsPRODUCTOIdPRODUCTO;

		/**
		 * Private member variable that stores a reference to an array of ListaProductoAsPRODUCTOIdPRODUCTO objects
		 * (of type ListaProducto[]), if this Producto object was restored with
		 * an ExpandAsArray on the LISTA_PRODUCTO association table.
		 * @var ListaProducto[] _objListaProductoAsPRODUCTOIdPRODUCTOArray;
		 */
		private $_objListaProductoAsPRODUCTOIdPRODUCTOArray = array();

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
			$this->intIdPRODUCTO = Producto::IdPRODUCTODefault;
			$this->strCodigoArancelario = Producto::CodigoArancelarioDefault;
			$this->strDescripcion = Producto::DescripcionDefault;
			$this->strNumeroRegSanitario = Producto::NumeroRegSanitarioDefault;
			$this->intVolumen = Producto::VolumenDefault;
			$this->strUnidad = Producto::UnidadDefault;
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
		 * Load a Producto from PK Info
		 * @param integer $intIdPRODUCTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Producto
		 */
		public static function Load($intIdPRODUCTO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Producto::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Producto()->IdPRODUCTO, $intIdPRODUCTO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Productos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Producto[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Producto::QueryArray to perform the LoadAll query
			try {
				return Producto::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Productos
		 * @return int
		 */
		public static function CountAll() {
			// Call Producto::QueryCount to perform the CountAll query
			return Producto::QueryCount(QQ::All());
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
			$objDatabase = Producto::GetDatabase();

			// Create/Build out the QueryBuilder object with Producto-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'PRODUCTO');
			Producto::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('PRODUCTO');

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
		 * Static Qcubed Query method to query for a single Producto object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Producto the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Producto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Producto object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Producto::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Producto::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Producto objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Producto[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Producto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Producto::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Producto objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Producto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Producto::GetDatabase();

			$strQuery = Producto::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/producto', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Producto::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Producto
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'PRODUCTO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idPRODUCTO', $strAliasPrefix . 'idPRODUCTO');
			$objBuilder->AddSelectItem($strTableName, 'codigoArancelario', $strAliasPrefix . 'codigoArancelario');
			$objBuilder->AddSelectItem($strTableName, 'descripcion', $strAliasPrefix . 'descripcion');
			$objBuilder->AddSelectItem($strTableName, 'numeroRegSanitario', $strAliasPrefix . 'numeroRegSanitario');
			$objBuilder->AddSelectItem($strTableName, 'volumen', $strAliasPrefix . 'volumen');
			$objBuilder->AddSelectItem($strTableName, 'unidad', $strAliasPrefix . 'unidad');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Producto from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Producto::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Producto
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idPRODUCTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdPRODUCTO == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'PRODUCTO__';


						// Expanding reverse references: ListaProductoAsPRODUCTOIdPRODUCTO
						$strAlias = $strAliasPrefix . 'listaproductoasproductoidproducto__LICENCIA_idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objListaProductoAsPRODUCTOIdPRODUCTOArray)) {
								$objPreviousChildItems = $objPreviousItem->_objListaProductoAsPRODUCTOIdPRODUCTOArray;
								$objChildItem = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoasproductoidproducto__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objListaProductoAsPRODUCTOIdPRODUCTOArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objListaProductoAsPRODUCTOIdPRODUCTOArray[] = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoasproductoidproducto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'PRODUCTO__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Producto object
			$objToReturn = new Producto();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idPRODUCTO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idPRODUCTO'] : $strAliasPrefix . 'idPRODUCTO';
			$objToReturn->intIdPRODUCTO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'codigoArancelario', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'codigoArancelario'] : $strAliasPrefix . 'codigoArancelario';
			$objToReturn->strCodigoArancelario = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'descripcion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'descripcion'] : $strAliasPrefix . 'descripcion';
			$objToReturn->strDescripcion = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'numeroRegSanitario', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'numeroRegSanitario'] : $strAliasPrefix . 'numeroRegSanitario';
			$objToReturn->strNumeroRegSanitario = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'volumen', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'volumen'] : $strAliasPrefix . 'volumen';
			$objToReturn->intVolumen = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'unidad', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'unidad'] : $strAliasPrefix . 'unidad';
			$objToReturn->strUnidad = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdPRODUCTO != $objPreviousItem->IdPRODUCTO) {
						continue;
					}
					if (array_diff($objPreviousItem->_objListaProductoAsPRODUCTOIdPRODUCTOArray, $objToReturn->_objListaProductoAsPRODUCTOIdPRODUCTOArray) != null) {
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
				$strAliasPrefix = 'PRODUCTO__';




			// Check for ListaProductoAsPRODUCTOIdPRODUCTO Virtual Binding
			$strAlias = $strAliasPrefix . 'listaproductoasproductoidproducto__LICENCIA_idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objListaProductoAsPRODUCTOIdPRODUCTOArray[] = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoasproductoidproducto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objListaProductoAsPRODUCTOIdPRODUCTO = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoasproductoidproducto__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Productos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Producto[]
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
					$objItem = Producto::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Producto::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Producto object,
		 * by IdPRODUCTO Index(es)
		 * @param integer $intIdPRODUCTO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Producto
		*/
		public static function LoadByIdPRODUCTO($intIdPRODUCTO, $objOptionalClauses = null) {
			return Producto::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Producto()->IdPRODUCTO, $intIdPRODUCTO)
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
		 * Save this Producto
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `PRODUCTO` (
							`codigoArancelario`,
							`descripcion`,
							`numeroRegSanitario`,
							`volumen`,
							`unidad`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strCodigoArancelario) . ',
							' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							' . $objDatabase->SqlVariable($this->strNumeroRegSanitario) . ',
							' . $objDatabase->SqlVariable($this->intVolumen) . ',
							' . $objDatabase->SqlVariable($this->strUnidad) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdPRODUCTO = $objDatabase->InsertId('PRODUCTO', 'idPRODUCTO');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`PRODUCTO`
						SET
							`codigoArancelario` = ' . $objDatabase->SqlVariable($this->strCodigoArancelario) . ',
							`descripcion` = ' . $objDatabase->SqlVariable($this->strDescripcion) . ',
							`numeroRegSanitario` = ' . $objDatabase->SqlVariable($this->strNumeroRegSanitario) . ',
							`volumen` = ' . $objDatabase->SqlVariable($this->intVolumen) . ',
							`unidad` = ' . $objDatabase->SqlVariable($this->strUnidad) . '
						WHERE
							`idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intIdPRODUCTO) . '
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
		 * Delete this Producto
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Producto with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PRODUCTO`
				WHERE
					`idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intIdPRODUCTO) . '');
		}

		/**
		 * Delete all Productos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PRODUCTO`');
		}

		/**
		 * Truncate PRODUCTO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `PRODUCTO`');
		}

		/**
		 * Reload this Producto from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Producto object.');

			// Reload the Object
			$objReloaded = Producto::Load($this->intIdPRODUCTO);

			// Update $this's local variables to match
			$this->strCodigoArancelario = $objReloaded->strCodigoArancelario;
			$this->strDescripcion = $objReloaded->strDescripcion;
			$this->strNumeroRegSanitario = $objReloaded->strNumeroRegSanitario;
			$this->intVolumen = $objReloaded->intVolumen;
			$this->strUnidad = $objReloaded->strUnidad;
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
				case 'IdPRODUCTO':
					/**
					 * Gets the value for intIdPRODUCTO (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdPRODUCTO;

				case 'CodigoArancelario':
					/**
					 * Gets the value for strCodigoArancelario (Not Null)
					 * @return string
					 */
					return $this->strCodigoArancelario;

				case 'Descripcion':
					/**
					 * Gets the value for strDescripcion (Not Null)
					 * @return string
					 */
					return $this->strDescripcion;

				case 'NumeroRegSanitario':
					/**
					 * Gets the value for strNumeroRegSanitario 
					 * @return string
					 */
					return $this->strNumeroRegSanitario;

				case 'Volumen':
					/**
					 * Gets the value for intVolumen 
					 * @return integer
					 */
					return $this->intVolumen;

				case 'Unidad':
					/**
					 * Gets the value for strUnidad 
					 * @return string
					 */
					return $this->strUnidad;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_ListaProductoAsPRODUCTOIdPRODUCTO':
					/**
					 * Gets the value for the private _objListaProductoAsPRODUCTOIdPRODUCTO (Read-Only)
					 * if set due to an expansion on the LISTA_PRODUCTO.PRODUCTO_idPRODUCTO reverse relationship
					 * @return ListaProducto
					 */
					return $this->_objListaProductoAsPRODUCTOIdPRODUCTO;

				case '_ListaProductoAsPRODUCTOIdPRODUCTOArray':
					/**
					 * Gets the value for the private _objListaProductoAsPRODUCTOIdPRODUCTOArray (Read-Only)
					 * if set due to an ExpandAsArray on the LISTA_PRODUCTO.PRODUCTO_idPRODUCTO reverse relationship
					 * @return ListaProducto[]
					 */
					return (array) $this->_objListaProductoAsPRODUCTOIdPRODUCTOArray;


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
				case 'CodigoArancelario':
					/**
					 * Sets the value for strCodigoArancelario (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strCodigoArancelario = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Descripcion':
					/**
					 * Sets the value for strDescripcion (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strDescripcion = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NumeroRegSanitario':
					/**
					 * Sets the value for strNumeroRegSanitario 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNumeroRegSanitario = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Volumen':
					/**
					 * Sets the value for intVolumen 
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intVolumen = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Unidad':
					/**
					 * Sets the value for strUnidad 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strUnidad = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for ListaProductoAsPRODUCTOIdPRODUCTO
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ListaProductosAsPRODUCTOIdPRODUCTO as an array of ListaProducto objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaProducto[]
		*/ 
		public function GetListaProductoAsPRODUCTOIdPRODUCTOArray($objOptionalClauses = null) {
			if ((is_null($this->intIdPRODUCTO)))
				return array();

			try {
				return ListaProducto::LoadArrayByPRODUCTOIdPRODUCTO($this->intIdPRODUCTO, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ListaProductosAsPRODUCTOIdPRODUCTO
		 * @return int
		*/ 
		public function CountListaProductosAsPRODUCTOIdPRODUCTO() {
			if ((is_null($this->intIdPRODUCTO)))
				return 0;

			return ListaProducto::CountByPRODUCTOIdPRODUCTO($this->intIdPRODUCTO);
		}

		/**
		 * Associates a ListaProductoAsPRODUCTOIdPRODUCTO
		 * @param ListaProducto $objListaProducto
		 * @return void
		*/ 
		public function AssociateListaProductoAsPRODUCTOIdPRODUCTO(ListaProducto $objListaProducto) {
			if ((is_null($this->intIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaProductoAsPRODUCTOIdPRODUCTO on this unsaved Producto.');
			if ((is_null($objListaProducto->LICENCIAIdLICENCIA)) || (is_null($objListaProducto->PRODUCTOIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaProductoAsPRODUCTOIdPRODUCTO on this Producto with an unsaved ListaProducto.');

			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_PRODUCTO`
				SET
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intIdPRODUCTO) . '
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objListaProducto->LICENCIAIdLICENCIA) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($objListaProducto->PRODUCTOIdPRODUCTO) . '
			');
		}

		/**
		 * Unassociates a ListaProductoAsPRODUCTOIdPRODUCTO
		 * @param ListaProducto $objListaProducto
		 * @return void
		*/ 
		public function UnassociateListaProductoAsPRODUCTOIdPRODUCTO(ListaProducto $objListaProducto) {
			if ((is_null($this->intIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsPRODUCTOIdPRODUCTO on this unsaved Producto.');
			if ((is_null($objListaProducto->LICENCIAIdLICENCIA)) || (is_null($objListaProducto->PRODUCTOIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsPRODUCTOIdPRODUCTO on this Producto with an unsaved ListaProducto.');

			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_PRODUCTO`
				SET
					`PRODUCTO_idPRODUCTO` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objListaProducto->LICENCIAIdLICENCIA) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($objListaProducto->PRODUCTOIdPRODUCTO) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intIdPRODUCTO) . '
			');
		}

		/**
		 * Unassociates all ListaProductosAsPRODUCTOIdPRODUCTO
		 * @return void
		*/ 
		public function UnassociateAllListaProductosAsPRODUCTOIdPRODUCTO() {
			if ((is_null($this->intIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsPRODUCTOIdPRODUCTO on this unsaved Producto.');

			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_PRODUCTO`
				SET
					`PRODUCTO_idPRODUCTO` = null
				WHERE
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intIdPRODUCTO) . '
			');
		}

		/**
		 * Deletes an associated ListaProductoAsPRODUCTOIdPRODUCTO
		 * @param ListaProducto $objListaProducto
		 * @return void
		*/ 
		public function DeleteAssociatedListaProductoAsPRODUCTOIdPRODUCTO(ListaProducto $objListaProducto) {
			if ((is_null($this->intIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsPRODUCTOIdPRODUCTO on this unsaved Producto.');
			if ((is_null($objListaProducto->LICENCIAIdLICENCIA)) || (is_null($objListaProducto->PRODUCTOIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsPRODUCTOIdPRODUCTO on this Producto with an unsaved ListaProducto.');

			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_PRODUCTO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objListaProducto->LICENCIAIdLICENCIA) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($objListaProducto->PRODUCTOIdPRODUCTO) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intIdPRODUCTO) . '
			');
		}

		/**
		 * Deletes all associated ListaProductosAsPRODUCTOIdPRODUCTO
		 * @return void
		*/ 
		public function DeleteAllListaProductosAsPRODUCTOIdPRODUCTO() {
			if ((is_null($this->intIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsPRODUCTOIdPRODUCTO on this unsaved Producto.');

			// Get the Database Object for this Class
			$objDatabase = Producto::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_PRODUCTO`
				WHERE
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($this->intIdPRODUCTO) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Producto"><sequence>';
			$strToReturn .= '<element name="IdPRODUCTO" type="xsd:int"/>';
			$strToReturn .= '<element name="CodigoArancelario" type="xsd:string"/>';
			$strToReturn .= '<element name="Descripcion" type="xsd:string"/>';
			$strToReturn .= '<element name="NumeroRegSanitario" type="xsd:string"/>';
			$strToReturn .= '<element name="Volumen" type="xsd:int"/>';
			$strToReturn .= '<element name="Unidad" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Producto', $strComplexTypeArray)) {
				$strComplexTypeArray['Producto'] = Producto::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Producto::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Producto();
			if (property_exists($objSoapObject, 'IdPRODUCTO'))
				$objToReturn->intIdPRODUCTO = $objSoapObject->IdPRODUCTO;
			if (property_exists($objSoapObject, 'CodigoArancelario'))
				$objToReturn->strCodigoArancelario = $objSoapObject->CodigoArancelario;
			if (property_exists($objSoapObject, 'Descripcion'))
				$objToReturn->strDescripcion = $objSoapObject->Descripcion;
			if (property_exists($objSoapObject, 'NumeroRegSanitario'))
				$objToReturn->strNumeroRegSanitario = $objSoapObject->NumeroRegSanitario;
			if (property_exists($objSoapObject, 'Volumen'))
				$objToReturn->intVolumen = $objSoapObject->Volumen;
			if (property_exists($objSoapObject, 'Unidad'))
				$objToReturn->strUnidad = $objSoapObject->Unidad;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Producto::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdPRODUCTO'] = $this->intIdPRODUCTO;
			$iArray['CodigoArancelario'] = $this->strCodigoArancelario;
			$iArray['Descripcion'] = $this->strDescripcion;
			$iArray['NumeroRegSanitario'] = $this->strNumeroRegSanitario;
			$iArray['Volumen'] = $this->intVolumen;
			$iArray['Unidad'] = $this->strUnidad;
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
     * @property-read QQNode $IdPRODUCTO
     * @property-read QQNode $CodigoArancelario
     * @property-read QQNode $Descripcion
     * @property-read QQNode $NumeroRegSanitario
     * @property-read QQNode $Volumen
     * @property-read QQNode $Unidad
     *
     *
     * @property-read QQReverseReferenceNodeListaProducto $ListaProductoAsPRODUCTOIdPRODUCTO

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeProducto extends QQNode {
		protected $strTableName = 'PRODUCTO';
		protected $strPrimaryKey = 'idPRODUCTO';
		protected $strClassName = 'Producto';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPRODUCTO':
					return new QQNode('idPRODUCTO', 'IdPRODUCTO', 'Integer', $this);
				case 'CodigoArancelario':
					return new QQNode('codigoArancelario', 'CodigoArancelario', 'VarChar', $this);
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'Blob', $this);
				case 'NumeroRegSanitario':
					return new QQNode('numeroRegSanitario', 'NumeroRegSanitario', 'VarChar', $this);
				case 'Volumen':
					return new QQNode('volumen', 'Volumen', 'Integer', $this);
				case 'Unidad':
					return new QQNode('unidad', 'Unidad', 'VarChar', $this);
				case 'ListaProductoAsPRODUCTOIdPRODUCTO':
					return new QQReverseReferenceNodeListaProducto($this, 'listaproductoasproductoidproducto', 'reverse_reference', 'PRODUCTO_idPRODUCTO');

				case '_PrimaryKeyNode':
					return new QQNode('idPRODUCTO', 'IdPRODUCTO', 'Integer', $this);
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
     * @property-read QQNode $IdPRODUCTO
     * @property-read QQNode $CodigoArancelario
     * @property-read QQNode $Descripcion
     * @property-read QQNode $NumeroRegSanitario
     * @property-read QQNode $Volumen
     * @property-read QQNode $Unidad
     *
     *
     * @property-read QQReverseReferenceNodeListaProducto $ListaProductoAsPRODUCTOIdPRODUCTO

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeProducto extends QQReverseReferenceNode {
		protected $strTableName = 'PRODUCTO';
		protected $strPrimaryKey = 'idPRODUCTO';
		protected $strClassName = 'Producto';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPRODUCTO':
					return new QQNode('idPRODUCTO', 'IdPRODUCTO', 'integer', $this);
				case 'CodigoArancelario':
					return new QQNode('codigoArancelario', 'CodigoArancelario', 'string', $this);
				case 'Descripcion':
					return new QQNode('descripcion', 'Descripcion', 'string', $this);
				case 'NumeroRegSanitario':
					return new QQNode('numeroRegSanitario', 'NumeroRegSanitario', 'string', $this);
				case 'Volumen':
					return new QQNode('volumen', 'Volumen', 'integer', $this);
				case 'Unidad':
					return new QQNode('unidad', 'Unidad', 'string', $this);
				case 'ListaProductoAsPRODUCTOIdPRODUCTO':
					return new QQReverseReferenceNodeListaProducto($this, 'listaproductoasproductoidproducto', 'reverse_reference', 'PRODUCTO_idPRODUCTO');

				case '_PrimaryKeyNode':
					return new QQNode('idPRODUCTO', 'IdPRODUCTO', 'integer', $this);
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
