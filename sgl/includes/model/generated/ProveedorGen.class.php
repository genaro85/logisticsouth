<?php
	/**
	 * The abstract ProveedorGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Proveedor subclass which
	 * extends this ProveedorGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Proveedor class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdPROVEEDOR the value for intIdPROVEEDOR (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property string $Direccion the value for strDireccion (Not Null)
	 * @property string $Telefono the value for strTelefono 
	 * @property string $Email the value for strEmail 
	 * @property integer $PAISIdPAIS the value for intPAISIdPAIS (Not Null)
	 * @property Pais $PAISIdPAISObject the value for the Pais object referenced by intPAISIdPAIS (Not Null)
	 * @property-read Licencia $_LicenciaAsPROVEEDORIdPROVEEDOR the value for the private _objLicenciaAsPROVEEDORIdPROVEEDOR (Read-Only) if set due to an expansion on the LICENCIA.PROVEEDOR_idPROVEEDOR reverse relationship
	 * @property-read Licencia[] $_LicenciaAsPROVEEDORIdPROVEEDORArray the value for the private _objLicenciaAsPROVEEDORIdPROVEEDORArray (Read-Only) if set due to an ExpandAsArray on the LICENCIA.PROVEEDOR_idPROVEEDOR reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ProveedorGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column PROVEEDOR.idPROVEEDOR
		 * @var integer intIdPROVEEDOR
		 */
		protected $intIdPROVEEDOR;
		const IdPROVEEDORDefault = null;


		/**
		 * Protected member variable that maps to the database column PROVEEDOR.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 45;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column PROVEEDOR.direccion
		 * @var string strDireccion
		 */
		protected $strDireccion;
		const DireccionDefault = null;


		/**
		 * Protected member variable that maps to the database column PROVEEDOR.telefono
		 * @var string strTelefono
		 */
		protected $strTelefono;
		const TelefonoMaxLength = 15;
		const TelefonoDefault = null;


		/**
		 * Protected member variable that maps to the database column PROVEEDOR.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 70;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column PROVEEDOR.PAIS_idPAIS
		 * @var integer intPAISIdPAIS
		 */
		protected $intPAISIdPAIS;
		const PAISIdPAISDefault = null;


		/**
		 * Private member variable that stores a reference to a single LicenciaAsPROVEEDORIdPROVEEDOR object
		 * (of type Licencia), if this Proveedor object was restored with
		 * an expansion on the LICENCIA association table.
		 * @var Licencia _objLicenciaAsPROVEEDORIdPROVEEDOR;
		 */
		private $_objLicenciaAsPROVEEDORIdPROVEEDOR;

		/**
		 * Private member variable that stores a reference to an array of LicenciaAsPROVEEDORIdPROVEEDOR objects
		 * (of type Licencia[]), if this Proveedor object was restored with
		 * an ExpandAsArray on the LICENCIA association table.
		 * @var Licencia[] _objLicenciaAsPROVEEDORIdPROVEEDORArray;
		 */
		private $_objLicenciaAsPROVEEDORIdPROVEEDORArray = array();

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
		 * in the database column PROVEEDOR.PAIS_idPAIS.
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
			$this->intIdPROVEEDOR = Proveedor::IdPROVEEDORDefault;
			$this->strNombre = Proveedor::NombreDefault;
			$this->strDireccion = Proveedor::DireccionDefault;
			$this->strTelefono = Proveedor::TelefonoDefault;
			$this->strEmail = Proveedor::EmailDefault;
			$this->intPAISIdPAIS = Proveedor::PAISIdPAISDefault;
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
		 * Load a Proveedor from PK Info
		 * @param integer $intIdPROVEEDOR
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proveedor
		 */
		public static function Load($intIdPROVEEDOR, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Proveedor::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Proveedor()->IdPROVEEDOR, $intIdPROVEEDOR)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Proveedors
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proveedor[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Proveedor::QueryArray to perform the LoadAll query
			try {
				return Proveedor::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Proveedors
		 * @return int
		 */
		public static function CountAll() {
			// Call Proveedor::QueryCount to perform the CountAll query
			return Proveedor::QueryCount(QQ::All());
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
			$objDatabase = Proveedor::GetDatabase();

			// Create/Build out the QueryBuilder object with Proveedor-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'PROVEEDOR');
			Proveedor::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('PROVEEDOR');

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
		 * Static Qcubed Query method to query for a single Proveedor object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Proveedor the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Proveedor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Proveedor object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Proveedor::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Proveedor::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Proveedor objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Proveedor[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Proveedor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Proveedor::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Proveedor objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Proveedor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Proveedor::GetDatabase();

			$strQuery = Proveedor::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/proveedor', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Proveedor::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Proveedor
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'PROVEEDOR';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idPROVEEDOR', $strAliasPrefix . 'idPROVEEDOR');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'direccion', $strAliasPrefix . 'direccion');
			$objBuilder->AddSelectItem($strTableName, 'telefono', $strAliasPrefix . 'telefono');
			$objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			$objBuilder->AddSelectItem($strTableName, 'PAIS_idPAIS', $strAliasPrefix . 'PAIS_idPAIS');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Proveedor from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Proveedor::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Proveedor
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idPROVEEDOR';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdPROVEEDOR == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'PROVEEDOR__';


						// Expanding reverse references: LicenciaAsPROVEEDORIdPROVEEDOR
						$strAlias = $strAliasPrefix . 'licenciaasproveedoridproveedor__idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLicenciaAsPROVEEDORIdPROVEEDORArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLicenciaAsPROVEEDORIdPROVEEDORArray;
								$objChildItem = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasproveedoridproveedor__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLicenciaAsPROVEEDORIdPROVEEDORArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLicenciaAsPROVEEDORIdPROVEEDORArray[] = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasproveedoridproveedor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'PROVEEDOR__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Proveedor object
			$objToReturn = new Proveedor();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idPROVEEDOR', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idPROVEEDOR'] : $strAliasPrefix . 'idPROVEEDOR';
			$objToReturn->intIdPROVEEDOR = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'direccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'direccion'] : $strAliasPrefix . 'direccion';
			$objToReturn->strDireccion = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'telefono', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'telefono'] : $strAliasPrefix . 'telefono';
			$objToReturn->strTelefono = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email'] : $strAliasPrefix . 'email';
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PAIS_idPAIS', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PAIS_idPAIS'] : $strAliasPrefix . 'PAIS_idPAIS';
			$objToReturn->intPAISIdPAIS = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdPROVEEDOR != $objPreviousItem->IdPROVEEDOR) {
						continue;
					}
					if (array_diff($objPreviousItem->_objLicenciaAsPROVEEDORIdPROVEEDORArray, $objToReturn->_objLicenciaAsPROVEEDORIdPROVEEDORArray) != null) {
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
				$strAliasPrefix = 'PROVEEDOR__';

			// Check for PAISIdPAISObject Early Binding
			$strAlias = $strAliasPrefix . 'PAIS_idPAIS__idPAIS';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPAISIdPAISObject = Pais::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PAIS_idPAIS__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for LicenciaAsPROVEEDORIdPROVEEDOR Virtual Binding
			$strAlias = $strAliasPrefix . 'licenciaasproveedoridproveedor__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objLicenciaAsPROVEEDORIdPROVEEDORArray[] = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasproveedoridproveedor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLicenciaAsPROVEEDORIdPROVEEDOR = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasproveedoridproveedor__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Proveedors from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Proveedor[]
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
					$objItem = Proveedor::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Proveedor::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Proveedor object,
		 * by IdPROVEEDOR Index(es)
		 * @param integer $intIdPROVEEDOR
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proveedor
		*/
		public static function LoadByIdPROVEEDOR($intIdPROVEEDOR, $objOptionalClauses = null) {
			return Proveedor::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Proveedor()->IdPROVEEDOR, $intIdPROVEEDOR)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Proveedor objects,
		 * by PAISIdPAIS Index(es)
		 * @param integer $intPAISIdPAIS
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Proveedor[]
		*/
		public static function LoadArrayByPAISIdPAIS($intPAISIdPAIS, $objOptionalClauses = null) {
			// Call Proveedor::QueryArray to perform the LoadArrayByPAISIdPAIS query
			try {
				return Proveedor::QueryArray(
					QQ::Equal(QQN::Proveedor()->PAISIdPAIS, $intPAISIdPAIS),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Proveedors
		 * by PAISIdPAIS Index(es)
		 * @param integer $intPAISIdPAIS
		 * @return int
		*/
		public static function CountByPAISIdPAIS($intPAISIdPAIS) {
			// Call Proveedor::QueryCount to perform the CountByPAISIdPAIS query
			return Proveedor::QueryCount(
				QQ::Equal(QQN::Proveedor()->PAISIdPAIS, $intPAISIdPAIS)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Proveedor
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `PROVEEDOR` (
							`nombre`,
							`direccion`,
							`telefono`,
							`email`,
							`PAIS_idPAIS`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strDireccion) . ',
							' . $objDatabase->SqlVariable($this->strTelefono) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->intPAISIdPAIS) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdPROVEEDOR = $objDatabase->InsertId('PROVEEDOR', 'idPROVEEDOR');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`PROVEEDOR`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`direccion` = ' . $objDatabase->SqlVariable($this->strDireccion) . ',
							`telefono` = ' . $objDatabase->SqlVariable($this->strTelefono) . ',
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`PAIS_idPAIS` = ' . $objDatabase->SqlVariable($this->intPAISIdPAIS) . '
						WHERE
							`idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intIdPROVEEDOR) . '
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
		 * Delete this Proveedor
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Proveedor with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PROVEEDOR`
				WHERE
					`idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intIdPROVEEDOR) . '');
		}

		/**
		 * Delete all Proveedors
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`PROVEEDOR`');
		}

		/**
		 * Truncate PROVEEDOR table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `PROVEEDOR`');
		}

		/**
		 * Reload this Proveedor from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Proveedor object.');

			// Reload the Object
			$objReloaded = Proveedor::Load($this->intIdPROVEEDOR);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->strDireccion = $objReloaded->strDireccion;
			$this->strTelefono = $objReloaded->strTelefono;
			$this->strEmail = $objReloaded->strEmail;
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
				case 'IdPROVEEDOR':
					/**
					 * Gets the value for intIdPROVEEDOR (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdPROVEEDOR;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'Direccion':
					/**
					 * Gets the value for strDireccion (Not Null)
					 * @return string
					 */
					return $this->strDireccion;

				case 'Telefono':
					/**
					 * Gets the value for strTelefono 
					 * @return string
					 */
					return $this->strTelefono;

				case 'Email':
					/**
					 * Gets the value for strEmail 
					 * @return string
					 */
					return $this->strEmail;

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

				case '_LicenciaAsPROVEEDORIdPROVEEDOR':
					/**
					 * Gets the value for the private _objLicenciaAsPROVEEDORIdPROVEEDOR (Read-Only)
					 * if set due to an expansion on the LICENCIA.PROVEEDOR_idPROVEEDOR reverse relationship
					 * @return Licencia
					 */
					return $this->_objLicenciaAsPROVEEDORIdPROVEEDOR;

				case '_LicenciaAsPROVEEDORIdPROVEEDORArray':
					/**
					 * Gets the value for the private _objLicenciaAsPROVEEDORIdPROVEEDORArray (Read-Only)
					 * if set due to an ExpandAsArray on the LICENCIA.PROVEEDOR_idPROVEEDOR reverse relationship
					 * @return Licencia[]
					 */
					return (array) $this->_objLicenciaAsPROVEEDORIdPROVEEDORArray;


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
					 * Sets the value for strDireccion (Not Null)
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

				case 'Email':
					/**
					 * Sets the value for strEmail 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strEmail = QType::Cast($mixValue, QType::String));
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
							throw new QCallerException('Unable to set an unsaved PAISIdPAISObject for this Proveedor');

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

			
		
		// Related Objects' Methods for LicenciaAsPROVEEDORIdPROVEEDOR
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LicenciasAsPROVEEDORIdPROVEEDOR as an array of Licencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia[]
		*/ 
		public function GetLicenciaAsPROVEEDORIdPROVEEDORArray($objOptionalClauses = null) {
			if ((is_null($this->intIdPROVEEDOR)))
				return array();

			try {
				return Licencia::LoadArrayByPROVEEDORIdPROVEEDOR($this->intIdPROVEEDOR, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LicenciasAsPROVEEDORIdPROVEEDOR
		 * @return int
		*/ 
		public function CountLicenciasAsPROVEEDORIdPROVEEDOR() {
			if ((is_null($this->intIdPROVEEDOR)))
				return 0;

			return Licencia::CountByPROVEEDORIdPROVEEDOR($this->intIdPROVEEDOR);
		}

		/**
		 * Associates a LicenciaAsPROVEEDORIdPROVEEDOR
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function AssociateLicenciaAsPROVEEDORIdPROVEEDOR(Licencia $objLicencia) {
			if ((is_null($this->intIdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLicenciaAsPROVEEDORIdPROVEEDOR on this unsaved Proveedor.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLicenciaAsPROVEEDORIdPROVEEDOR on this Proveedor with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`PROVEEDOR_idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intIdPROVEEDOR) . '
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . '
			');
		}

		/**
		 * Unassociates a LicenciaAsPROVEEDORIdPROVEEDOR
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function UnassociateLicenciaAsPROVEEDORIdPROVEEDOR(Licencia $objLicencia) {
			if ((is_null($this->intIdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROVEEDORIdPROVEEDOR on this unsaved Proveedor.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROVEEDORIdPROVEEDOR on this Proveedor with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`PROVEEDOR_idPROVEEDOR` = null
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . ' AND
					`PROVEEDOR_idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intIdPROVEEDOR) . '
			');
		}

		/**
		 * Unassociates all LicenciasAsPROVEEDORIdPROVEEDOR
		 * @return void
		*/ 
		public function UnassociateAllLicenciasAsPROVEEDORIdPROVEEDOR() {
			if ((is_null($this->intIdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROVEEDORIdPROVEEDOR on this unsaved Proveedor.');

			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`PROVEEDOR_idPROVEEDOR` = null
				WHERE
					`PROVEEDOR_idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intIdPROVEEDOR) . '
			');
		}

		/**
		 * Deletes an associated LicenciaAsPROVEEDORIdPROVEEDOR
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function DeleteAssociatedLicenciaAsPROVEEDORIdPROVEEDOR(Licencia $objLicencia) {
			if ((is_null($this->intIdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROVEEDORIdPROVEEDOR on this unsaved Proveedor.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROVEEDORIdPROVEEDOR on this Proveedor with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . ' AND
					`PROVEEDOR_idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intIdPROVEEDOR) . '
			');
		}

		/**
		 * Deletes all associated LicenciasAsPROVEEDORIdPROVEEDOR
		 * @return void
		*/ 
		public function DeleteAllLicenciasAsPROVEEDORIdPROVEEDOR() {
			if ((is_null($this->intIdPROVEEDOR)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsPROVEEDORIdPROVEEDOR on this unsaved Proveedor.');

			// Get the Database Object for this Class
			$objDatabase = Proveedor::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`
				WHERE
					`PROVEEDOR_idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intIdPROVEEDOR) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Proveedor"><sequence>';
			$strToReturn .= '<element name="IdPROVEEDOR" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Direccion" type="xsd:string"/>';
			$strToReturn .= '<element name="Telefono" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="PAISIdPAISObject" type="xsd1:Pais"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Proveedor', $strComplexTypeArray)) {
				$strComplexTypeArray['Proveedor'] = Proveedor::GetSoapComplexTypeXml();
				Pais::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Proveedor::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Proveedor();
			if (property_exists($objSoapObject, 'IdPROVEEDOR'))
				$objToReturn->intIdPROVEEDOR = $objSoapObject->IdPROVEEDOR;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Direccion'))
				$objToReturn->strDireccion = $objSoapObject->Direccion;
			if (property_exists($objSoapObject, 'Telefono'))
				$objToReturn->strTelefono = $objSoapObject->Telefono;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
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
				array_push($objArrayToReturn, Proveedor::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdPROVEEDOR'] = $this->intIdPROVEEDOR;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['Direccion'] = $this->strDireccion;
			$iArray['Telefono'] = $this->strTelefono;
			$iArray['Email'] = $this->strEmail;
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
     * @property-read QQNode $IdPROVEEDOR
     * @property-read QQNode $Nombre
     * @property-read QQNode $Direccion
     * @property-read QQNode $Telefono
     * @property-read QQNode $Email
     * @property-read QQNode $PAISIdPAIS
     * @property-read QQNodePais $PAISIdPAISObject
     *
     *
     * @property-read QQReverseReferenceNodeLicencia $LicenciaAsPROVEEDORIdPROVEEDOR

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeProveedor extends QQNode {
		protected $strTableName = 'PROVEEDOR';
		protected $strPrimaryKey = 'idPROVEEDOR';
		protected $strClassName = 'Proveedor';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPROVEEDOR':
					return new QQNode('idPROVEEDOR', 'IdPROVEEDOR', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'Blob', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'VarChar', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'VarChar', $this);
				case 'PAISIdPAIS':
					return new QQNode('PAIS_idPAIS', 'PAISIdPAIS', 'Integer', $this);
				case 'PAISIdPAISObject':
					return new QQNodePais('PAIS_idPAIS', 'PAISIdPAISObject', 'Integer', $this);
				case 'LicenciaAsPROVEEDORIdPROVEEDOR':
					return new QQReverseReferenceNodeLicencia($this, 'licenciaasproveedoridproveedor', 'reverse_reference', 'PROVEEDOR_idPROVEEDOR');

				case '_PrimaryKeyNode':
					return new QQNode('idPROVEEDOR', 'IdPROVEEDOR', 'Integer', $this);
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
     * @property-read QQNode $IdPROVEEDOR
     * @property-read QQNode $Nombre
     * @property-read QQNode $Direccion
     * @property-read QQNode $Telefono
     * @property-read QQNode $Email
     * @property-read QQNode $PAISIdPAIS
     * @property-read QQNodePais $PAISIdPAISObject
     *
     *
     * @property-read QQReverseReferenceNodeLicencia $LicenciaAsPROVEEDORIdPROVEEDOR

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeProveedor extends QQReverseReferenceNode {
		protected $strTableName = 'PROVEEDOR';
		protected $strPrimaryKey = 'idPROVEEDOR';
		protected $strClassName = 'Proveedor';
		public function __get($strName) {
			switch ($strName) {
				case 'IdPROVEEDOR':
					return new QQNode('idPROVEEDOR', 'IdPROVEEDOR', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'string', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'PAISIdPAIS':
					return new QQNode('PAIS_idPAIS', 'PAISIdPAIS', 'integer', $this);
				case 'PAISIdPAISObject':
					return new QQNodePais('PAIS_idPAIS', 'PAISIdPAISObject', 'integer', $this);
				case 'LicenciaAsPROVEEDORIdPROVEEDOR':
					return new QQReverseReferenceNodeLicencia($this, 'licenciaasproveedoridproveedor', 'reverse_reference', 'PROVEEDOR_idPROVEEDOR');

				case '_PrimaryKeyNode':
					return new QQNode('idPROVEEDOR', 'IdPROVEEDOR', 'integer', $this);
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
