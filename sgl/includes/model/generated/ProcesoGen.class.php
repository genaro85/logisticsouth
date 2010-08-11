<?php
	/**
	 * The abstract ProcesoGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Proceso subclass which
	 * extends this ProcesoGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Proceso class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdPROCESO the value for intIdPROCESO (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property integer $Duracion the value for intDuracion (Not Null)
	 * @property-read Etapa $_EtapaAsPROCESOIdPROCESO the value for the private _objEtapaAsPROCESOIdPROCESO (Read-Only) if set due to an expansion on the ETAPA.PROCESO_idPROCESO reverse relationship
	 * @property-read Etapa[] $_EtapaAsPROCESOIdPROCESOArray the value for the private _objEtapaAsPROCESOIdPROCESOArray (Read-Only) if set due to an ExpandAsArray on the ETAPA.PROCESO_idPROCESO reverse relationship
	 * @property-read Licencia $_LicenciaAsPROCESOIdPROCESO the value for the private _objLicenciaAsPROCESOIdPROCESO (Read-Only) if set due to an expansion on the LICENCIA.PROCESO_idPROCESO reverse relationship
	 * @property-read Licencia[] $_LicenciaAsPROCESOIdPROCESOArray the value for the private _objLicenciaAsPROCESOIdPROCESOArray (Read-Only) if set due to an ExpandAsArray on the LICENCIA.PROCESO_idPROCESO reverse relationship
	 * @property-read ListaDeDocumento $_ListaDeDocumentoAsPROCESOIdPROCESO the value for the private _objListaDeDocumentoAsPROCESOIdPROCESO (Read-Only) if set due to an expansion on the LISTA_DE_DOCUMENTO.PROCESO_idPROCESO reverse relationship
	 * @property-read ListaDeDocumento[] $_ListaDeDocumentoAsPROCESOIdPROCESOArray the value for the private _objListaDeDocumentoAsPROCESOIdPROCESOArray (Read-Only) if set due to an ExpandAsArray on the LISTA_DE_DOCUMENTO.PROCESO_idPROCESO reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ProcesoGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column PROCESO.idPROCESO
		 * @var integer intIdPROCESO
		 */
		protected $intIdPROCESO;
		const IdPROCESODefault = null;


		/**
		 * Protected member variable that maps to the database column PROCESO.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 90;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column PROCESO.duracion
		 * @var integer intDuracion
		 */
		protected $intDuracion;
		const DuracionDefault = null;


		/**
		 * Private member variable that stores a reference to a single EtapaAsPROCESOIdPROCESO object
		 * (of type Etapa), if this Proceso object was restored with
		 * an expansion on the ETAPA association table.
		 * @var Etapa _objEtapaAsPROCESOIdPROCESO;
		 */
		private $_objEtapaAsPROCESOIdPROCESO;

		/**
		 * Private member variable that stores a reference to an array of EtapaAsPROCESOIdPROCESO objects
		 * (of type Etapa[]), if this Proceso object was restored with
		 * an ExpandAsArray on the ETAPA association table.
		 * @var Etapa[] _objEtapaAsPROCESOIdPROCESOArray;
		 */
		private $_objEtapaAsPROCESOIdPROCESOArray = array();

		/**
		 * Private member variable that stores a reference to a single LicenciaAsPROCESOIdPROCESO object
		 * (of type Licencia), if this Proceso object was restored with
		 * an expansion on the LICENCIA association table.
		 * @var Licencia _objLicenciaAsPROCESOIdPROCESO;
		 */
		private $_objLicenciaAsPROCESOIdPROCESO;

		/**
		 * Private member variable that stores a reference to an array of LicenciaAsPROCESOIdPROCESO objects
		 * (of type Licencia[]), if this Proceso object was restored with
		 * an ExpandAsArray on the LICENCIA association table.
		 * @var Licencia[] _objLicenciaAsPROCESOIdPROCESOArray;
		 */
		private $_objLicenciaAsPROCESOIdPROCESOArray = array();

		/**
		 * Private member variable that stores a reference to a single ListaDeDocumentoAsPROCESOIdPROCESO object
		 * (of type ListaDeDocumento), if this Proceso object was restored with
		 * an expansion on the LISTA_DE_DOCUMENTO association table.
		 * @var ListaDeDocumento _objListaDeDocumentoAsPROCESOIdPROCESO;
		 */
		private $_objListaDeDocumentoAsPROCESOIdPROCESO;

		/**
		 * Private member variable that stores a reference to an array of ListaDeDocumentoAsPROCESOIdPROCESO objects
		 * (of type ListaDeDocumento[]), if this Proceso object was restored with
		 * an ExpandAsArray on the LISTA_DE_DOCUMENTO association table.
		 * @var ListaDeDocumento[] _objListaDeDocumentoAsPROCESOIdPROCESOArray;
		 */
		private $_objListaDeDocumentoAsPROCESOIdPROCESOArray = array();

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
			$this->intIdPROCESO = Proceso::IdPROCESODefault;
			$this->strNombre = Proceso::NombreDefault;
			$this->intDuracion = Proceso::DuracionDefault;
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
		 * Load a Proceso from PK Info
		 * @param integer $intIdPROCESO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proceso
		 */
		public static function Load($intIdPROCESO, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Proceso::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Proceso()->IdPROCESO, $intIdPROCESO)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Procesos
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proceso[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Proceso::QueryArray to perform the LoadAll query
			try {
				return Proceso::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Procesos
		 * @return int
		 */
		public static function CountAll() {
			// Call Proceso::QueryCount to perform the CountAll query
			return Proceso::QueryCount(QQ::All());
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
			$objDatabase = Proceso::GetDatabase();

			// Create/Build out the QueryBuilder object with Proceso-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'PROCESO');
			Proceso::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('PROCESO');

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
		 * Static Qcubed Query method to query for a single Proceso object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Proceso the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Proceso::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Proceso object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Proceso::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Proceso::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Proceso objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Proceso[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Proceso::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Proceso::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Proceso objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Proceso::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Proceso::GetDatabase();

			$strQuery = Proceso::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/proceso', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Proceso::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Proceso
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'PROCESO';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idPROCESO', $strAliasPrefix . 'idPROCESO');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'duracion', $strAliasPrefix . 'duracion');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Proceso from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Proceso::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Proceso
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idPROCESO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdPROCESO == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'PROCESO__';


						// Expanding reverse references: EtapaAsPROCESOIdPROCESO
						$strAlias = $strAliasPrefix . 'etapaasprocesoidproceso__idETAPA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEtapaAsPROCESOIdPROCESOArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEtapaAsPROCESOIdPROCESOArray;
								$objChildItem = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasprocesoidproceso__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEtapaAsPROCESOIdPROCESOArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEtapaAsPROCESOIdPROCESOArray[] = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: LicenciaAsPROCESOIdPROCESO
						$strAlias = $strAliasPrefix . 'licenciaasprocesoidproceso__idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLicenciaAsPROCESOIdPROCESOArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLicenciaAsPROCESOIdPROCESOArray;
								$objChildItem = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasprocesoidproceso__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLicenciaAsPROCESOIdPROCESOArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLicenciaAsPROCESOIdPROCESOArray[] = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ListaDeDocumentoAsPROCESOIdPROCESO
						$strAlias = $strAliasPrefix . 'listadedocumentoasprocesoidproceso__DOCUMENTO_idDOCUMENTO';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objListaDeDocumentoAsPROCESOIdPROCESOArray)) {
								$objPreviousChildItems = $objPreviousItem->_objListaDeDocumentoAsPROCESOIdPROCESOArray;
								$objChildItem = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasprocesoidproceso__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objListaDeDocumentoAsPROCESOIdPROCESOArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objListaDeDocumentoAsPROCESOIdPROCESOArray[] = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'PROCESO__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Proceso object
			$objToReturn = new Proceso();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idPROCESO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idPROCESO'] : $strAliasPrefix . 'idPROCESO';
			$objToReturn->intIdPROCESO = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'duracion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'duracion'] : $strAliasPrefix . 'duracion';
			$objToReturn->intDuracion = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdPROCESO != $objPreviousItem->IdPROCESO) {
						continue;
					}
					if (array_diff($objPreviousItem->_objEtapaAsPROCESOIdPROCESOArray, $objToReturn->_objEtapaAsPROCESOIdPROCESOArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objLicenciaAsPROCESOIdPROCESOArray, $objToReturn->_objLicenciaAsPROCESOIdPROCESOArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objListaDeDocumentoAsPROCESOIdPROCESOArray, $objToReturn->_objListaDeDocumentoAsPROCESOIdPROCESOArray) != null) {
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
				$strAliasPrefix = 'PROCESO__';




			// Check for EtapaAsPROCESOIdPROCESO Virtual Binding
			$strAlias = $strAliasPrefix . 'etapaasprocesoidproceso__idETAPA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objEtapaAsPROCESOIdPROCESOArray[] = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEtapaAsPROCESOIdPROCESO = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for LicenciaAsPROCESOIdPROCESO Virtual Binding
			$strAlias = $strAliasPrefix . 'licenciaasprocesoidproceso__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objLicenciaAsPROCESOIdPROCESOArray[] = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLicenciaAsPROCESOIdPROCESO = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ListaDeDocumentoAsPROCESOIdPROCESO Virtual Binding
			$strAlias = $strAliasPrefix . 'listadedocumentoasprocesoidproceso__DOCUMENTO_idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objListaDeDocumentoAsPROCESOIdPROCESOArray[] = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objListaDeDocumentoAsPROCESOIdPROCESO = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasprocesoidproceso__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Procesos from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Proceso[]
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
					$objItem = Proceso::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Proceso::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Proceso object,
		 * by IdPROCESO Index(es)
		 * @param integer $intIdPROCESO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proceso
		*/
		public static function LoadByIdPROCESO($intIdPROCESO, $objOptionalClauses = null) {
			return Proceso::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Proceso()->IdPROCESO, $intIdPROCESO)
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
		 * Save this Proceso
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `PROCESO` (
							`nombre`,
							`duracion`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intDuracion) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdPROCESO = $objDatabase->InsertId('PROCESO', 'idPROCESO');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`PROCESO`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`duracion` = ' . $objDatabase->SqlVariable($this->intDuracion) . '
						WHERE
							`idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
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
		 * Delete this Proceso
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Proceso with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PROCESO`
				WHERE
					`idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '');
		}

		/**
		 * Delete all Procesos
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PROCESO`');
		}

		/**
		 * Truncate PROCESO table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `PROCESO`');
		}

		/**
		 * Reload this Proceso from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Proceso object.');

			// Reload the Object
			$objReloaded = Proceso::Load($this->intIdPROCESO);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->intDuracion = $objReloaded->intDuracion;
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
				case 'IdPROCESO':
					/**
					 * Gets the value for intIdPROCESO (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdPROCESO;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'Duracion':
					/**
					 * Gets the value for intDuracion (Not Null)
					 * @return integer
					 */
					return $this->intDuracion;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_EtapaAsPROCESOIdPROCESO':
					/**
					 * Gets the value for the private _objEtapaAsPROCESOIdPROCESO (Read-Only)
					 * if set due to an expansion on the ETAPA.PROCESO_idPROCESO reverse relationship
					 * @return Etapa
					 */
					return $this->_objEtapaAsPROCESOIdPROCESO;

				case '_EtapaAsPROCESOIdPROCESOArray':
					/**
					 * Gets the value for the private _objEtapaAsPROCESOIdPROCESOArray (Read-Only)
					 * if set due to an ExpandAsArray on the ETAPA.PROCESO_idPROCESO reverse relationship
					 * @return Etapa[]
					 */
					return (array) $this->_objEtapaAsPROCESOIdPROCESOArray;

				case '_LicenciaAsPROCESOIdPROCESO':
					/**
					 * Gets the value for the private _objLicenciaAsPROCESOIdPROCESO (Read-Only)
					 * if set due to an expansion on the LICENCIA.PROCESO_idPROCESO reverse relationship
					 * @return Licencia
					 */
					return $this->_objLicenciaAsPROCESOIdPROCESO;

				case '_LicenciaAsPROCESOIdPROCESOArray':
					/**
					 * Gets the value for the private _objLicenciaAsPROCESOIdPROCESOArray (Read-Only)
					 * if set due to an ExpandAsArray on the LICENCIA.PROCESO_idPROCESO reverse relationship
					 * @return Licencia[]
					 */
					return (array) $this->_objLicenciaAsPROCESOIdPROCESOArray;

				case '_ListaDeDocumentoAsPROCESOIdPROCESO':
					/**
					 * Gets the value for the private _objListaDeDocumentoAsPROCESOIdPROCESO (Read-Only)
					 * if set due to an expansion on the LISTA_DE_DOCUMENTO.PROCESO_idPROCESO reverse relationship
					 * @return ListaDeDocumento
					 */
					return $this->_objListaDeDocumentoAsPROCESOIdPROCESO;

				case '_ListaDeDocumentoAsPROCESOIdPROCESOArray':
					/**
					 * Gets the value for the private _objListaDeDocumentoAsPROCESOIdPROCESOArray (Read-Only)
					 * if set due to an ExpandAsArray on the LISTA_DE_DOCUMENTO.PROCESO_idPROCESO reverse relationship
					 * @return ListaDeDocumento[]
					 */
					return (array) $this->_objListaDeDocumentoAsPROCESOIdPROCESOArray;


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
					 * Sets the value for intDuracion (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						return ($this->intDuracion = QType::Cast($mixValue, QType::Integer));
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

			
		
		// Related Objects' Methods for EtapaAsPROCESOIdPROCESO
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EtapasAsPROCESOIdPROCESO as an array of Etapa objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Etapa[]
		*/ 
		public function GetEtapaAsPROCESOIdPROCESOArray($objOptionalClauses = null) {
			if ((is_null($this->intIdPROCESO)))
				return array();

			try {
				return Etapa::LoadArrayByPROCESOIdPROCESO($this->intIdPROCESO, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EtapasAsPROCESOIdPROCESO
		 * @return int
		*/ 
		public function CountEtapasAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				return 0;

			return Etapa::CountByPROCESOIdPROCESO($this->intIdPROCESO);
		}

		/**
		 * Associates a EtapaAsPROCESOIdPROCESO
		 * @param Etapa $objEtapa
		 * @return void
		*/ 
		public function AssociateEtapaAsPROCESOIdPROCESO(Etapa $objEtapa) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objEtapa->IdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaAsPROCESOIdPROCESO on this Proceso with an unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA`
				SET
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
				WHERE
					`idETAPA` = ' . $objDatabase->SqlVariable($objEtapa->IdETAPA) . '
			');
		}

		/**
		 * Unassociates a EtapaAsPROCESOIdPROCESO
		 * @param Etapa $objEtapa
		 * @return void
		*/ 
		public function UnassociateEtapaAsPROCESOIdPROCESO(Etapa $objEtapa) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objEtapa->IdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsPROCESOIdPROCESO on this Proceso with an unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA`
				SET
					`PROCESO_idPROCESO` = null
				WHERE
					`idETAPA` = ' . $objDatabase->SqlVariable($objEtapa->IdETAPA) . ' AND
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Unassociates all EtapasAsPROCESOIdPROCESO
		 * @return void
		*/ 
		public function UnassociateAllEtapasAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsPROCESOIdPROCESO on this unsaved Proceso.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA`
				SET
					`PROCESO_idPROCESO` = null
				WHERE
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Deletes an associated EtapaAsPROCESOIdPROCESO
		 * @param Etapa $objEtapa
		 * @return void
		*/ 
		public function DeleteAssociatedEtapaAsPROCESOIdPROCESO(Etapa $objEtapa) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objEtapa->IdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsPROCESOIdPROCESO on this Proceso with an unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA`
				WHERE
					`idETAPA` = ' . $objDatabase->SqlVariable($objEtapa->IdETAPA) . ' AND
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Deletes all associated EtapasAsPROCESOIdPROCESO
		 * @return void
		*/ 
		public function DeleteAllEtapasAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsPROCESOIdPROCESO on this unsaved Proceso.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA`
				WHERE
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

			
		
		// Related Objects' Methods for LicenciaAsPROCESOIdPROCESO
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LicenciasAsPROCESOIdPROCESO as an array of Licencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia[]
		*/ 
		public function GetLicenciaAsPROCESOIdPROCESOArray($objOptionalClauses = null) {
			if ((is_null($this->intIdPROCESO)))
				return array();

			try {
				return Licencia::LoadArrayByPROCESOIdPROCESO($this->intIdPROCESO, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LicenciasAsPROCESOIdPROCESO
		 * @return int
		*/ 
		public function CountLicenciasAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				return 0;

			return Licencia::CountByPROCESOIdPROCESO($this->intIdPROCESO);
		}

		/**
		 * Associates a LicenciaAsPROCESOIdPROCESO
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function AssociateLicenciaAsPROCESOIdPROCESO(Licencia $objLicencia) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLicenciaAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLicenciaAsPROCESOIdPROCESO on this Proceso with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . '
			');
		}

		/**
		 * Unassociates a LicenciaAsPROCESOIdPROCESO
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function UnassociateLicenciaAsPROCESOIdPROCESO(Licencia $objLicencia) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROCESOIdPROCESO on this Proceso with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`PROCESO_idPROCESO` = null
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . ' AND
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Unassociates all LicenciasAsPROCESOIdPROCESO
		 * @return void
		*/ 
		public function UnassociateAllLicenciasAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROCESOIdPROCESO on this unsaved Proceso.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`PROCESO_idPROCESO` = null
				WHERE
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Deletes an associated LicenciaAsPROCESOIdPROCESO
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function DeleteAssociatedLicenciaAsPROCESOIdPROCESO(Licencia $objLicencia) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROCESOIdPROCESO on this Proceso with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . ' AND
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Deletes all associated LicenciasAsPROCESOIdPROCESO
		 * @return void
		*/ 
		public function DeleteAllLicenciasAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROCESOIdPROCESO on this unsaved Proceso.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`
				WHERE
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

			
		
		// Related Objects' Methods for ListaDeDocumentoAsPROCESOIdPROCESO
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ListaDeDocumentosAsPROCESOIdPROCESO as an array of ListaDeDocumento objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaDeDocumento[]
		*/ 
		public function GetListaDeDocumentoAsPROCESOIdPROCESOArray($objOptionalClauses = null) {
			if ((is_null($this->intIdPROCESO)))
				return array();

			try {
				return ListaDeDocumento::LoadArrayByPROCESOIdPROCESO($this->intIdPROCESO, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ListaDeDocumentosAsPROCESOIdPROCESO
		 * @return int
		*/ 
		public function CountListaDeDocumentosAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				return 0;

			return ListaDeDocumento::CountByPROCESOIdPROCESO($this->intIdPROCESO);
		}

		/**
		 * Associates a ListaDeDocumentoAsPROCESOIdPROCESO
		 * @param ListaDeDocumento $objListaDeDocumento
		 * @return void
		*/ 
		public function AssociateListaDeDocumentoAsPROCESOIdPROCESO(ListaDeDocumento $objListaDeDocumento) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaDeDocumentoAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objListaDeDocumento->DOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaDeDocumentoAsPROCESOIdPROCESO on this Proceso with an unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_DE_DOCUMENTO`
				SET
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objListaDeDocumento->DOCUMENTOIdDOCUMENTO) . '
			');
		}

		/**
		 * Unassociates a ListaDeDocumentoAsPROCESOIdPROCESO
		 * @param ListaDeDocumento $objListaDeDocumento
		 * @return void
		*/ 
		public function UnassociateListaDeDocumentoAsPROCESOIdPROCESO(ListaDeDocumento $objListaDeDocumento) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objListaDeDocumento->DOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsPROCESOIdPROCESO on this Proceso with an unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_DE_DOCUMENTO`
				SET
					`PROCESO_idPROCESO` = null
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objListaDeDocumento->DOCUMENTOIdDOCUMENTO) . ' AND
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Unassociates all ListaDeDocumentosAsPROCESOIdPROCESO
		 * @return void
		*/ 
		public function UnassociateAllListaDeDocumentosAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsPROCESOIdPROCESO on this unsaved Proceso.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_DE_DOCUMENTO`
				SET
					`PROCESO_idPROCESO` = null
				WHERE
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Deletes an associated ListaDeDocumentoAsPROCESOIdPROCESO
		 * @param ListaDeDocumento $objListaDeDocumento
		 * @return void
		*/ 
		public function DeleteAssociatedListaDeDocumentoAsPROCESOIdPROCESO(ListaDeDocumento $objListaDeDocumento) {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsPROCESOIdPROCESO on this unsaved Proceso.');
			if ((is_null($objListaDeDocumento->DOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsPROCESOIdPROCESO on this Proceso with an unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_DE_DOCUMENTO`
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objListaDeDocumento->DOCUMENTOIdDOCUMENTO) . ' AND
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}

		/**
		 * Deletes all associated ListaDeDocumentosAsPROCESOIdPROCESO
		 * @return void
		*/ 
		public function DeleteAllListaDeDocumentosAsPROCESOIdPROCESO() {
			if ((is_null($this->intIdPROCESO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsPROCESOIdPROCESO on this unsaved Proceso.');

			// Get the Database Object for this Class
			$objDatabase = Proceso::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_DE_DOCUMENTO`
				WHERE
					`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intIdPROCESO) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Proceso"><sequence>';
			$strToReturn .= '<element name="IdPROCESO" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Duracion" type="xsd:int"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Proceso', $strComplexTypeArray)) {
				$strComplexTypeArray['Proceso'] = Proceso::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Proceso::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Proceso();
			if (property_exists($objSoapObject, 'IdPROCESO'))
				$objToReturn->intIdPROCESO = $objSoapObject->IdPROCESO;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Duracion'))
				$objToReturn->intDuracion = $objSoapObject->Duracion;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Proceso::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdPROCESO'] = $this->intIdPROCESO;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['Duracion'] = $this->intDuracion;
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
     * @property-read QQNode $IdPROCESO
     * @property-read QQNode $Nombre
     * @property-read QQNode $Duracion
     *
     *
     * @property-read QQReverseReferenceNodeEtapa $EtapaAsPROCESOIdPROCESO
     * @property-read QQReverseReferenceNodeLicencia $LicenciaAsPROCESOIdPROCESO
     * @property-read QQReverseReferenceNodeListaDeDocumento $ListaDeDocumentoAsPROCESOIdPROCESO

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeProceso extends QQNode {
		protected $strTableName = 'PROCESO';
		protected $strPrimaryKey = 'idPROCESO';
		protected $strClassName = 'Proceso';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPROCESO':
					return new QQNode('idPROCESO', 'IdPROCESO', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Duracion':
					return new QQNode('duracion', 'Duracion', 'Integer', $this);
				case 'EtapaAsPROCESOIdPROCESO':
					return new QQReverseReferenceNodeEtapa($this, 'etapaasprocesoidproceso', 'reverse_reference', 'PROCESO_idPROCESO');
				case 'LicenciaAsPROCESOIdPROCESO':
					return new QQReverseReferenceNodeLicencia($this, 'licenciaasprocesoidproceso', 'reverse_reference', 'PROCESO_idPROCESO');
				case 'ListaDeDocumentoAsPROCESOIdPROCESO':
					return new QQReverseReferenceNodeListaDeDocumento($this, 'listadedocumentoasprocesoidproceso', 'reverse_reference', 'PROCESO_idPROCESO');

				case '_PrimaryKeyNode':
					return new QQNode('idPROCESO', 'IdPROCESO', 'Integer', $this);
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
     * @property-read QQNode $IdPROCESO
     * @property-read QQNode $Nombre
     * @property-read QQNode $Duracion
     *
     *
     * @property-read QQReverseReferenceNodeEtapa $EtapaAsPROCESOIdPROCESO
     * @property-read QQReverseReferenceNodeLicencia $LicenciaAsPROCESOIdPROCESO
     * @property-read QQReverseReferenceNodeListaDeDocumento $ListaDeDocumentoAsPROCESOIdPROCESO

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeProceso extends QQReverseReferenceNode {
		protected $strTableName = 'PROCESO';
		protected $strPrimaryKey = 'idPROCESO';
		protected $strClassName = 'Proceso';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPROCESO':
					return new QQNode('idPROCESO', 'IdPROCESO', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Duracion':
					return new QQNode('duracion', 'Duracion', 'integer', $this);
				case 'EtapaAsPROCESOIdPROCESO':
					return new QQReverseReferenceNodeEtapa($this, 'etapaasprocesoidproceso', 'reverse_reference', 'PROCESO_idPROCESO');
				case 'LicenciaAsPROCESOIdPROCESO':
					return new QQReverseReferenceNodeLicencia($this, 'licenciaasprocesoidproceso', 'reverse_reference', 'PROCESO_idPROCESO');
				case 'ListaDeDocumentoAsPROCESOIdPROCESO':
					return new QQReverseReferenceNodeListaDeDocumento($this, 'listadedocumentoasprocesoidproceso', 'reverse_reference', 'PROCESO_idPROCESO');

				case '_PrimaryKeyNode':
					return new QQNode('idPROCESO', 'IdPROCESO', 'integer', $this);
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
