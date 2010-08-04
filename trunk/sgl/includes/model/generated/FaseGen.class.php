<?php
	/**
	 * The abstract FaseGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Fase subclass which
	 * extends this FaseGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Fase class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdFASE the value for intIdFASE (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property integer $Duracion the value for intDuracion 
	 * @property string $Icono the value for strIcono (Not Null)
	 * @property-read Etapa $_EtapaAsFASEIdFASE the value for the private _objEtapaAsFASEIdFASE (Read-Only) if set due to an expansion on the ETAPA.FASE_idFASE reverse relationship
	 * @property-read Etapa[] $_EtapaAsFASEIdFASEArray the value for the private _objEtapaAsFASEIdFASEArray (Read-Only) if set due to an ExpandAsArray on the ETAPA.FASE_idFASE reverse relationship
	 * @property-read ListaDeDocumento $_ListaDeDocumentoAsFASEIdFASE the value for the private _objListaDeDocumentoAsFASEIdFASE (Read-Only) if set due to an expansion on the LISTA_DE_DOCUMENTO.FASE_idFASE reverse relationship
	 * @property-read ListaDeDocumento[] $_ListaDeDocumentoAsFASEIdFASEArray the value for the private _objListaDeDocumentoAsFASEIdFASEArray (Read-Only) if set due to an ExpandAsArray on the LISTA_DE_DOCUMENTO.FASE_idFASE reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class FaseGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column FASE.idFASE
		 * @var integer intIdFASE
		 */
		protected $intIdFASE;
		const IdFASEDefault = null;


		/**
		 * Protected member variable that maps to the database column FASE.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column FASE.duracion
		 * @var integer intDuracion
		 */
		protected $intDuracion;
		const DuracionDefault = null;


		/**
		 * Protected member variable that maps to the database column FASE.icono
		 * @var string strIcono
		 */
		protected $strIcono;
		const IconoDefault = null;


		/**
		 * Private member variable that stores a reference to a single EtapaAsFASEIdFASE object
		 * (of type Etapa), if this Fase object was restored with
		 * an expansion on the ETAPA association table.
		 * @var Etapa _objEtapaAsFASEIdFASE;
		 */
		private $_objEtapaAsFASEIdFASE;

		/**
		 * Private member variable that stores a reference to an array of EtapaAsFASEIdFASE objects
		 * (of type Etapa[]), if this Fase object was restored with
		 * an ExpandAsArray on the ETAPA association table.
		 * @var Etapa[] _objEtapaAsFASEIdFASEArray;
		 */
		private $_objEtapaAsFASEIdFASEArray = array();

		/**
		 * Private member variable that stores a reference to a single ListaDeDocumentoAsFASEIdFASE object
		 * (of type ListaDeDocumento), if this Fase object was restored with
		 * an expansion on the LISTA_DE_DOCUMENTO association table.
		 * @var ListaDeDocumento _objListaDeDocumentoAsFASEIdFASE;
		 */
		private $_objListaDeDocumentoAsFASEIdFASE;

		/**
		 * Private member variable that stores a reference to an array of ListaDeDocumentoAsFASEIdFASE objects
		 * (of type ListaDeDocumento[]), if this Fase object was restored with
		 * an ExpandAsArray on the LISTA_DE_DOCUMENTO association table.
		 * @var ListaDeDocumento[] _objListaDeDocumentoAsFASEIdFASEArray;
		 */
		private $_objListaDeDocumentoAsFASEIdFASEArray = array();

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
			$this->intIdFASE = Fase::IdFASEDefault;
			$this->strNombre = Fase::NombreDefault;
			$this->intDuracion = Fase::DuracionDefault;
			$this->strIcono = Fase::IconoDefault;
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
		 * Load a Fase from PK Info
		 * @param integer $intIdFASE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fase
		 */
		public static function Load($intIdFASE, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Fase::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Fase()->IdFASE, $intIdFASE)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Fases
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fase[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Fase::QueryArray to perform the LoadAll query
			try {
				return Fase::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Fases
		 * @return int
		 */
		public static function CountAll() {
			// Call Fase::QueryCount to perform the CountAll query
			return Fase::QueryCount(QQ::All());
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
			$objDatabase = Fase::GetDatabase();

			// Create/Build out the QueryBuilder object with Fase-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'FASE');
			Fase::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('FASE');

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
		 * Static Qcubed Query method to query for a single Fase object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Fase the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fase::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Fase object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Fase::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Fase::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Fase objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Fase[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fase::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Fase::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Fase objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Fase::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Fase::GetDatabase();

			$strQuery = Fase::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/fase', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Fase::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Fase
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'FASE';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idFASE', $strAliasPrefix . 'idFASE');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'duracion', $strAliasPrefix . 'duracion');
			$objBuilder->AddSelectItem($strTableName, 'icono', $strAliasPrefix . 'icono');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Fase from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Fase::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Fase
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idFASE';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdFASE == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'FASE__';


						// Expanding reverse references: EtapaAsFASEIdFASE
						$strAlias = $strAliasPrefix . 'etapaasfaseidfase__idETAPA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEtapaAsFASEIdFASEArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEtapaAsFASEIdFASEArray;
								$objChildItem = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasfaseidfase__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEtapaAsFASEIdFASEArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEtapaAsFASEIdFASEArray[] = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasfaseidfase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ListaDeDocumentoAsFASEIdFASE
						$strAlias = $strAliasPrefix . 'listadedocumentoasfaseidfase__DOCUMENTO_idDOCUMENTO';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objListaDeDocumentoAsFASEIdFASEArray)) {
								$objPreviousChildItems = $objPreviousItem->_objListaDeDocumentoAsFASEIdFASEArray;
								$objChildItem = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasfaseidfase__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objListaDeDocumentoAsFASEIdFASEArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objListaDeDocumentoAsFASEIdFASEArray[] = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasfaseidfase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'FASE__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Fase object
			$objToReturn = new Fase();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idFASE', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idFASE'] : $strAliasPrefix . 'idFASE';
			$objToReturn->intIdFASE = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'duracion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'duracion'] : $strAliasPrefix . 'duracion';
			$objToReturn->intDuracion = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'icono', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'icono'] : $strAliasPrefix . 'icono';
			$objToReturn->strIcono = $objDbRow->GetColumn($strAliasName, 'Blob');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdFASE != $objPreviousItem->IdFASE) {
						continue;
					}
					if (array_diff($objPreviousItem->_objEtapaAsFASEIdFASEArray, $objToReturn->_objEtapaAsFASEIdFASEArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objListaDeDocumentoAsFASEIdFASEArray, $objToReturn->_objListaDeDocumentoAsFASEIdFASEArray) != null) {
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
				$strAliasPrefix = 'FASE__';




			// Check for EtapaAsFASEIdFASE Virtual Binding
			$strAlias = $strAliasPrefix . 'etapaasfaseidfase__idETAPA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objEtapaAsFASEIdFASEArray[] = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasfaseidfase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEtapaAsFASEIdFASE = Etapa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapaasfaseidfase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ListaDeDocumentoAsFASEIdFASE Virtual Binding
			$strAlias = $strAliasPrefix . 'listadedocumentoasfaseidfase__DOCUMENTO_idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objListaDeDocumentoAsFASEIdFASEArray[] = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasfaseidfase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objListaDeDocumentoAsFASEIdFASE = ListaDeDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listadedocumentoasfaseidfase__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Fases from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Fase[]
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
					$objItem = Fase::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Fase::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Fase object,
		 * by IdFASE Index(es)
		 * @param integer $intIdFASE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Fase
		*/
		public static function LoadByIdFASE($intIdFASE, $objOptionalClauses = null) {
			return Fase::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Fase()->IdFASE, $intIdFASE)
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
		 * Save this Fase
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `FASE` (
							`nombre`,
							`duracion`,
							`icono`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->intDuracion) . ',
							' . $objDatabase->SqlVariable($this->strIcono) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdFASE = $objDatabase->InsertId('FASE', 'idFASE');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`FASE`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`duracion` = ' . $objDatabase->SqlVariable($this->intDuracion) . ',
							`icono` = ' . $objDatabase->SqlVariable($this->strIcono) . '
						WHERE
							`idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
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
		 * Delete this Fase
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Fase with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`FASE`
				WHERE
					`idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '');
		}

		/**
		 * Delete all Fases
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`FASE`');
		}

		/**
		 * Truncate FASE table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `FASE`');
		}

		/**
		 * Reload this Fase from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Fase object.');

			// Reload the Object
			$objReloaded = Fase::Load($this->intIdFASE);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->intDuracion = $objReloaded->intDuracion;
			$this->strIcono = $objReloaded->strIcono;
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
				case 'IdFASE':
					/**
					 * Gets the value for intIdFASE (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdFASE;

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

				case 'Icono':
					/**
					 * Gets the value for strIcono (Not Null)
					 * @return string
					 */
					return $this->strIcono;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_EtapaAsFASEIdFASE':
					/**
					 * Gets the value for the private _objEtapaAsFASEIdFASE (Read-Only)
					 * if set due to an expansion on the ETAPA.FASE_idFASE reverse relationship
					 * @return Etapa
					 */
					return $this->_objEtapaAsFASEIdFASE;

				case '_EtapaAsFASEIdFASEArray':
					/**
					 * Gets the value for the private _objEtapaAsFASEIdFASEArray (Read-Only)
					 * if set due to an ExpandAsArray on the ETAPA.FASE_idFASE reverse relationship
					 * @return Etapa[]
					 */
					return (array) $this->_objEtapaAsFASEIdFASEArray;

				case '_ListaDeDocumentoAsFASEIdFASE':
					/**
					 * Gets the value for the private _objListaDeDocumentoAsFASEIdFASE (Read-Only)
					 * if set due to an expansion on the LISTA_DE_DOCUMENTO.FASE_idFASE reverse relationship
					 * @return ListaDeDocumento
					 */
					return $this->_objListaDeDocumentoAsFASEIdFASE;

				case '_ListaDeDocumentoAsFASEIdFASEArray':
					/**
					 * Gets the value for the private _objListaDeDocumentoAsFASEIdFASEArray (Read-Only)
					 * if set due to an ExpandAsArray on the LISTA_DE_DOCUMENTO.FASE_idFASE reverse relationship
					 * @return ListaDeDocumento[]
					 */
					return (array) $this->_objListaDeDocumentoAsFASEIdFASEArray;


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

				case 'Icono':
					/**
					 * Sets the value for strIcono (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strIcono = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for EtapaAsFASEIdFASE
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EtapasAsFASEIdFASE as an array of Etapa objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Etapa[]
		*/ 
		public function GetEtapaAsFASEIdFASEArray($objOptionalClauses = null) {
			if ((is_null($this->intIdFASE)))
				return array();

			try {
				return Etapa::LoadArrayByFASEIdFASE($this->intIdFASE, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EtapasAsFASEIdFASE
		 * @return int
		*/ 
		public function CountEtapasAsFASEIdFASE() {
			if ((is_null($this->intIdFASE)))
				return 0;

			return Etapa::CountByFASEIdFASE($this->intIdFASE);
		}

		/**
		 * Associates a EtapaAsFASEIdFASE
		 * @param Etapa $objEtapa
		 * @return void
		*/ 
		public function AssociateEtapaAsFASEIdFASE(Etapa $objEtapa) {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaAsFASEIdFASE on this unsaved Fase.');
			if ((is_null($objEtapa->IdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaAsFASEIdFASE on this Fase with an unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA`
				SET
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
				WHERE
					`idETAPA` = ' . $objDatabase->SqlVariable($objEtapa->IdETAPA) . '
			');
		}

		/**
		 * Unassociates a EtapaAsFASEIdFASE
		 * @param Etapa $objEtapa
		 * @return void
		*/ 
		public function UnassociateEtapaAsFASEIdFASE(Etapa $objEtapa) {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsFASEIdFASE on this unsaved Fase.');
			if ((is_null($objEtapa->IdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsFASEIdFASE on this Fase with an unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA`
				SET
					`FASE_idFASE` = null
				WHERE
					`idETAPA` = ' . $objDatabase->SqlVariable($objEtapa->IdETAPA) . ' AND
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}

		/**
		 * Unassociates all EtapasAsFASEIdFASE
		 * @return void
		*/ 
		public function UnassociateAllEtapasAsFASEIdFASE() {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsFASEIdFASE on this unsaved Fase.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA`
				SET
					`FASE_idFASE` = null
				WHERE
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}

		/**
		 * Deletes an associated EtapaAsFASEIdFASE
		 * @param Etapa $objEtapa
		 * @return void
		*/ 
		public function DeleteAssociatedEtapaAsFASEIdFASE(Etapa $objEtapa) {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsFASEIdFASE on this unsaved Fase.');
			if ((is_null($objEtapa->IdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsFASEIdFASE on this Fase with an unsaved Etapa.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA`
				WHERE
					`idETAPA` = ' . $objDatabase->SqlVariable($objEtapa->IdETAPA) . ' AND
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}

		/**
		 * Deletes all associated EtapasAsFASEIdFASE
		 * @return void
		*/ 
		public function DeleteAllEtapasAsFASEIdFASE() {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaAsFASEIdFASE on this unsaved Fase.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA`
				WHERE
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}

			
		
		// Related Objects' Methods for ListaDeDocumentoAsFASEIdFASE
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ListaDeDocumentosAsFASEIdFASE as an array of ListaDeDocumento objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaDeDocumento[]
		*/ 
		public function GetListaDeDocumentoAsFASEIdFASEArray($objOptionalClauses = null) {
			if ((is_null($this->intIdFASE)))
				return array();

			try {
				return ListaDeDocumento::LoadArrayByFASEIdFASE($this->intIdFASE, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ListaDeDocumentosAsFASEIdFASE
		 * @return int
		*/ 
		public function CountListaDeDocumentosAsFASEIdFASE() {
			if ((is_null($this->intIdFASE)))
				return 0;

			return ListaDeDocumento::CountByFASEIdFASE($this->intIdFASE);
		}

		/**
		 * Associates a ListaDeDocumentoAsFASEIdFASE
		 * @param ListaDeDocumento $objListaDeDocumento
		 * @return void
		*/ 
		public function AssociateListaDeDocumentoAsFASEIdFASE(ListaDeDocumento $objListaDeDocumento) {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaDeDocumentoAsFASEIdFASE on this unsaved Fase.');
			if ((is_null($objListaDeDocumento->DOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaDeDocumentoAsFASEIdFASE on this Fase with an unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_DE_DOCUMENTO`
				SET
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objListaDeDocumento->DOCUMENTOIdDOCUMENTO) . '
			');
		}

		/**
		 * Unassociates a ListaDeDocumentoAsFASEIdFASE
		 * @param ListaDeDocumento $objListaDeDocumento
		 * @return void
		*/ 
		public function UnassociateListaDeDocumentoAsFASEIdFASE(ListaDeDocumento $objListaDeDocumento) {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsFASEIdFASE on this unsaved Fase.');
			if ((is_null($objListaDeDocumento->DOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsFASEIdFASE on this Fase with an unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_DE_DOCUMENTO`
				SET
					`FASE_idFASE` = null
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objListaDeDocumento->DOCUMENTOIdDOCUMENTO) . ' AND
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}

		/**
		 * Unassociates all ListaDeDocumentosAsFASEIdFASE
		 * @return void
		*/ 
		public function UnassociateAllListaDeDocumentosAsFASEIdFASE() {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsFASEIdFASE on this unsaved Fase.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_DE_DOCUMENTO`
				SET
					`FASE_idFASE` = null
				WHERE
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}

		/**
		 * Deletes an associated ListaDeDocumentoAsFASEIdFASE
		 * @param ListaDeDocumento $objListaDeDocumento
		 * @return void
		*/ 
		public function DeleteAssociatedListaDeDocumentoAsFASEIdFASE(ListaDeDocumento $objListaDeDocumento) {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsFASEIdFASE on this unsaved Fase.');
			if ((is_null($objListaDeDocumento->DOCUMENTOIdDOCUMENTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsFASEIdFASE on this Fase with an unsaved ListaDeDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_DE_DOCUMENTO`
				WHERE
					`DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objListaDeDocumento->DOCUMENTOIdDOCUMENTO) . ' AND
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}

		/**
		 * Deletes all associated ListaDeDocumentosAsFASEIdFASE
		 * @return void
		*/ 
		public function DeleteAllListaDeDocumentosAsFASEIdFASE() {
			if ((is_null($this->intIdFASE)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaDeDocumentoAsFASEIdFASE on this unsaved Fase.');

			// Get the Database Object for this Class
			$objDatabase = Fase::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_DE_DOCUMENTO`
				WHERE
					`FASE_idFASE` = ' . $objDatabase->SqlVariable($this->intIdFASE) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Fase"><sequence>';
			$strToReturn .= '<element name="IdFASE" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Duracion" type="xsd:int"/>';
			$strToReturn .= '<element name="Icono" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Fase', $strComplexTypeArray)) {
				$strComplexTypeArray['Fase'] = Fase::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Fase::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Fase();
			if (property_exists($objSoapObject, 'IdFASE'))
				$objToReturn->intIdFASE = $objSoapObject->IdFASE;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Duracion'))
				$objToReturn->intDuracion = $objSoapObject->Duracion;
			if (property_exists($objSoapObject, 'Icono'))
				$objToReturn->strIcono = $objSoapObject->Icono;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Fase::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdFASE'] = $this->intIdFASE;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['Duracion'] = $this->intDuracion;
			$iArray['Icono'] = $this->strIcono;
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
     * @property-read QQNode $IdFASE
     * @property-read QQNode $Nombre
     * @property-read QQNode $Duracion
     * @property-read QQNode $Icono
     *
     *
     * @property-read QQReverseReferenceNodeEtapa $EtapaAsFASEIdFASE
     * @property-read QQReverseReferenceNodeListaDeDocumento $ListaDeDocumentoAsFASEIdFASE

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeFase extends QQNode {
		protected $strTableName = 'FASE';
		protected $strPrimaryKey = 'idFASE';
		protected $strClassName = 'Fase';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFASE':
					return new QQNode('idFASE', 'IdFASE', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Duracion':
					return new QQNode('duracion', 'Duracion', 'Integer', $this);
				case 'Icono':
					return new QQNode('icono', 'Icono', 'Blob', $this);
				case 'EtapaAsFASEIdFASE':
					return new QQReverseReferenceNodeEtapa($this, 'etapaasfaseidfase', 'reverse_reference', 'FASE_idFASE');
				case 'ListaDeDocumentoAsFASEIdFASE':
					return new QQReverseReferenceNodeListaDeDocumento($this, 'listadedocumentoasfaseidfase', 'reverse_reference', 'FASE_idFASE');

				case '_PrimaryKeyNode':
					return new QQNode('idFASE', 'IdFASE', 'Integer', $this);
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
     * @property-read QQNode $IdFASE
     * @property-read QQNode $Nombre
     * @property-read QQNode $Duracion
     * @property-read QQNode $Icono
     *
     *
     * @property-read QQReverseReferenceNodeEtapa $EtapaAsFASEIdFASE
     * @property-read QQReverseReferenceNodeListaDeDocumento $ListaDeDocumentoAsFASEIdFASE

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeFase extends QQReverseReferenceNode {
		protected $strTableName = 'FASE';
		protected $strPrimaryKey = 'idFASE';
		protected $strClassName = 'Fase';
		public function __get($strName) {
			switch ($strName) {
				case 'IdFASE':
					return new QQNode('idFASE', 'IdFASE', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Duracion':
					return new QQNode('duracion', 'Duracion', 'integer', $this);
				case 'Icono':
					return new QQNode('icono', 'Icono', 'string', $this);
				case 'EtapaAsFASEIdFASE':
					return new QQReverseReferenceNodeEtapa($this, 'etapaasfaseidfase', 'reverse_reference', 'FASE_idFASE');
				case 'ListaDeDocumentoAsFASEIdFASE':
					return new QQReverseReferenceNodeListaDeDocumento($this, 'listadedocumentoasfaseidfase', 'reverse_reference', 'FASE_idFASE');

				case '_PrimaryKeyNode':
					return new QQNode('idFASE', 'IdFASE', 'integer', $this);
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
