<?php
	/**
	 * The abstract EmpresaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Empresa subclass which
	 * extends this EmpresaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Empresa class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdEMPRESA the value for intIdEMPRESA (Read-Only PK)
	 * @property string $Nombre the value for strNombre (Not Null)
	 * @property string $Rif the value for strRif (Not Null)
	 * @property string $Direccion the value for strDireccion (Not Null)
	 * @property string $Telefono the value for strTelefono 
	 * @property string $Email the value for strEmail 
	 * @property string $Login the value for strLogin 
	 * @property string $Password the value for strPassword 
	 * @property-read Licencia $_LicenciaAsEMPRESAIdEMPRESA the value for the private _objLicenciaAsEMPRESAIdEMPRESA (Read-Only) if set due to an expansion on the LICENCIA.EMPRESA_idEMPRESA reverse relationship
	 * @property-read Licencia[] $_LicenciaAsEMPRESAIdEMPRESAArray the value for the private _objLicenciaAsEMPRESAIdEMPRESAArray (Read-Only) if set due to an ExpandAsArray on the LICENCIA.EMPRESA_idEMPRESA reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class EmpresaGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column EMPRESA.idEMPRESA
		 * @var integer intIdEMPRESA
		 */
		protected $intIdEMPRESA;
		const IdEMPRESADefault = null;


		/**
		 * Protected member variable that maps to the database column EMPRESA.nombre
		 * @var string strNombre
		 */
		protected $strNombre;
		const NombreMaxLength = 70;
		const NombreDefault = null;


		/**
		 * Protected member variable that maps to the database column EMPRESA.rif
		 * @var string strRif
		 */
		protected $strRif;
		const RifMaxLength = 45;
		const RifDefault = null;


		/**
		 * Protected member variable that maps to the database column EMPRESA.direccion
		 * @var string strDireccion
		 */
		protected $strDireccion;
		const DireccionDefault = null;


		/**
		 * Protected member variable that maps to the database column EMPRESA.telefono
		 * @var string strTelefono
		 */
		protected $strTelefono;
		const TelefonoMaxLength = 15;
		const TelefonoDefault = null;


		/**
		 * Protected member variable that maps to the database column EMPRESA.email
		 * @var string strEmail
		 */
		protected $strEmail;
		const EmailMaxLength = 70;
		const EmailDefault = null;


		/**
		 * Protected member variable that maps to the database column EMPRESA.login
		 * @var string strLogin
		 */
		protected $strLogin;
		const LoginMaxLength = 45;
		const LoginDefault = null;


		/**
		 * Protected member variable that maps to the database column EMPRESA.password
		 * @var string strPassword
		 */
		protected $strPassword;
		const PasswordMaxLength = 45;
		const PasswordDefault = null;


		/**
		 * Private member variable that stores a reference to a single LicenciaAsEMPRESAIdEMPRESA object
		 * (of type Licencia), if this Empresa object was restored with
		 * an expansion on the LICENCIA association table.
		 * @var Licencia _objLicenciaAsEMPRESAIdEMPRESA;
		 */
		private $_objLicenciaAsEMPRESAIdEMPRESA;

		/**
		 * Private member variable that stores a reference to an array of LicenciaAsEMPRESAIdEMPRESA objects
		 * (of type Licencia[]), if this Empresa object was restored with
		 * an ExpandAsArray on the LICENCIA association table.
		 * @var Licencia[] _objLicenciaAsEMPRESAIdEMPRESAArray;
		 */
		private $_objLicenciaAsEMPRESAIdEMPRESAArray = array();

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
			$this->intIdEMPRESA = Empresa::IdEMPRESADefault;
			$this->strNombre = Empresa::NombreDefault;
			$this->strRif = Empresa::RifDefault;
			$this->strDireccion = Empresa::DireccionDefault;
			$this->strTelefono = Empresa::TelefonoDefault;
			$this->strEmail = Empresa::EmailDefault;
			$this->strLogin = Empresa::LoginDefault;
			$this->strPassword = Empresa::PasswordDefault;
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
		 * Load a Empresa from PK Info
		 * @param integer $intIdEMPRESA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Empresa
		 */
		public static function Load($intIdEMPRESA, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Empresa::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Empresa()->IdEMPRESA, $intIdEMPRESA)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Empresas
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Empresa[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Empresa::QueryArray to perform the LoadAll query
			try {
				return Empresa::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Empresas
		 * @return int
		 */
		public static function CountAll() {
			// Call Empresa::QueryCount to perform the CountAll query
			return Empresa::QueryCount(QQ::All());
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
			$objDatabase = Empresa::GetDatabase();

			// Create/Build out the QueryBuilder object with Empresa-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'EMPRESA');
			Empresa::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('EMPRESA');

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
		 * Static Qcubed Query method to query for a single Empresa object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Empresa the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Empresa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Empresa object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Empresa::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Empresa::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Empresa objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Empresa[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Empresa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Empresa::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Empresa objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Empresa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Empresa::GetDatabase();

			$strQuery = Empresa::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/empresa', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Empresa::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Empresa
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'EMPRESA';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idEMPRESA', $strAliasPrefix . 'idEMPRESA');
			$objBuilder->AddSelectItem($strTableName, 'nombre', $strAliasPrefix . 'nombre');
			$objBuilder->AddSelectItem($strTableName, 'rif', $strAliasPrefix . 'rif');
			$objBuilder->AddSelectItem($strTableName, 'direccion', $strAliasPrefix . 'direccion');
			$objBuilder->AddSelectItem($strTableName, 'telefono', $strAliasPrefix . 'telefono');
			$objBuilder->AddSelectItem($strTableName, 'email', $strAliasPrefix . 'email');
			$objBuilder->AddSelectItem($strTableName, 'login', $strAliasPrefix . 'login');
			$objBuilder->AddSelectItem($strTableName, 'password', $strAliasPrefix . 'password');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Empresa from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Empresa::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Empresa
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idEMPRESA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdEMPRESA == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'EMPRESA__';


						// Expanding reverse references: LicenciaAsEMPRESAIdEMPRESA
						$strAlias = $strAliasPrefix . 'licenciaasempresaidempresa__idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objLicenciaAsEMPRESAIdEMPRESAArray)) {
								$objPreviousChildItems = $objPreviousItem->_objLicenciaAsEMPRESAIdEMPRESAArray;
								$objChildItem = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasempresaidempresa__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objLicenciaAsEMPRESAIdEMPRESAArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objLicenciaAsEMPRESAIdEMPRESAArray[] = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasempresaidempresa__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'EMPRESA__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Empresa object
			$objToReturn = new Empresa();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idEMPRESA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idEMPRESA'] : $strAliasPrefix . 'idEMPRESA';
			$objToReturn->intIdEMPRESA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'nombre', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'nombre'] : $strAliasPrefix . 'nombre';
			$objToReturn->strNombre = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'rif', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'rif'] : $strAliasPrefix . 'rif';
			$objToReturn->strRif = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'direccion', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'direccion'] : $strAliasPrefix . 'direccion';
			$objToReturn->strDireccion = $objDbRow->GetColumn($strAliasName, 'Blob');
			$strAliasName = array_key_exists($strAliasPrefix . 'telefono', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'telefono'] : $strAliasPrefix . 'telefono';
			$objToReturn->strTelefono = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'email', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'email'] : $strAliasPrefix . 'email';
			$objToReturn->strEmail = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'login', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'login'] : $strAliasPrefix . 'login';
			$objToReturn->strLogin = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'password', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'password'] : $strAliasPrefix . 'password';
			$objToReturn->strPassword = $objDbRow->GetColumn($strAliasName, 'VarChar');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdEMPRESA != $objPreviousItem->IdEMPRESA) {
						continue;
					}
					if (array_diff($objPreviousItem->_objLicenciaAsEMPRESAIdEMPRESAArray, $objToReturn->_objLicenciaAsEMPRESAIdEMPRESAArray) != null) {
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
				$strAliasPrefix = 'EMPRESA__';




			// Check for LicenciaAsEMPRESAIdEMPRESA Virtual Binding
			$strAlias = $strAliasPrefix . 'licenciaasempresaidempresa__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objLicenciaAsEMPRESAIdEMPRESAArray[] = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasempresaidempresa__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objLicenciaAsEMPRESAIdEMPRESA = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'licenciaasempresaidempresa__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Empresas from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Empresa[]
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
					$objItem = Empresa::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Empresa::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Empresa object,
		 * by IdEMPRESA Index(es)
		 * @param integer $intIdEMPRESA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Empresa
		*/
		public static function LoadByIdEMPRESA($intIdEMPRESA, $objOptionalClauses = null) {
			return Empresa::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Empresa()->IdEMPRESA, $intIdEMPRESA)
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
		 * Save this Empresa
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `EMPRESA` (
							`nombre`,
							`rif`,
							`direccion`,
							`telefono`,
							`email`,
							`login`,
							`password`
						) VALUES (
							' . $objDatabase->SqlVariable($this->strNombre) . ',
							' . $objDatabase->SqlVariable($this->strRif) . ',
							' . $objDatabase->SqlVariable($this->strDireccion) . ',
							' . $objDatabase->SqlVariable($this->strTelefono) . ',
							' . $objDatabase->SqlVariable($this->strEmail) . ',
							' . $objDatabase->SqlVariable($this->strLogin) . ',
							' . $objDatabase->SqlVariable($this->strPassword) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdEMPRESA = $objDatabase->InsertId('EMPRESA', 'idEMPRESA');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`EMPRESA`
						SET
							`nombre` = ' . $objDatabase->SqlVariable($this->strNombre) . ',
							`rif` = ' . $objDatabase->SqlVariable($this->strRif) . ',
							`direccion` = ' . $objDatabase->SqlVariable($this->strDireccion) . ',
							`telefono` = ' . $objDatabase->SqlVariable($this->strTelefono) . ',
							`email` = ' . $objDatabase->SqlVariable($this->strEmail) . ',
							`login` = ' . $objDatabase->SqlVariable($this->strLogin) . ',
							`password` = ' . $objDatabase->SqlVariable($this->strPassword) . '
						WHERE
							`idEMPRESA` = ' . $objDatabase->SqlVariable($this->intIdEMPRESA) . '
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
		 * Delete this Empresa
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdEMPRESA)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Empresa with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`EMPRESA`
				WHERE
					`idEMPRESA` = ' . $objDatabase->SqlVariable($this->intIdEMPRESA) . '');
		}

		/**
		 * Delete all Empresas
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`EMPRESA`');
		}

		/**
		 * Truncate EMPRESA table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `EMPRESA`');
		}

		/**
		 * Reload this Empresa from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Empresa object.');

			// Reload the Object
			$objReloaded = Empresa::Load($this->intIdEMPRESA);

			// Update $this's local variables to match
			$this->strNombre = $objReloaded->strNombre;
			$this->strRif = $objReloaded->strRif;
			$this->strDireccion = $objReloaded->strDireccion;
			$this->strTelefono = $objReloaded->strTelefono;
			$this->strEmail = $objReloaded->strEmail;
			$this->strLogin = $objReloaded->strLogin;
			$this->strPassword = $objReloaded->strPassword;
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
				case 'IdEMPRESA':
					/**
					 * Gets the value for intIdEMPRESA (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdEMPRESA;

				case 'Nombre':
					/**
					 * Gets the value for strNombre (Not Null)
					 * @return string
					 */
					return $this->strNombre;

				case 'Rif':
					/**
					 * Gets the value for strRif (Not Null)
					 * @return string
					 */
					return $this->strRif;

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

				case 'Login':
					/**
					 * Gets the value for strLogin 
					 * @return string
					 */
					return $this->strLogin;

				case 'Password':
					/**
					 * Gets the value for strPassword 
					 * @return string
					 */
					return $this->strPassword;


				///////////////////
				// Member Objects
				///////////////////

				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_LicenciaAsEMPRESAIdEMPRESA':
					/**
					 * Gets the value for the private _objLicenciaAsEMPRESAIdEMPRESA (Read-Only)
					 * if set due to an expansion on the LICENCIA.EMPRESA_idEMPRESA reverse relationship
					 * @return Licencia
					 */
					return $this->_objLicenciaAsEMPRESAIdEMPRESA;

				case '_LicenciaAsEMPRESAIdEMPRESAArray':
					/**
					 * Gets the value for the private _objLicenciaAsEMPRESAIdEMPRESAArray (Read-Only)
					 * if set due to an ExpandAsArray on the LICENCIA.EMPRESA_idEMPRESA reverse relationship
					 * @return Licencia[]
					 */
					return (array) $this->_objLicenciaAsEMPRESAIdEMPRESAArray;


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

				case 'Rif':
					/**
					 * Sets the value for strRif (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strRif = QType::Cast($mixValue, QType::String));
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

				case 'Login':
					/**
					 * Sets the value for strLogin 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strLogin = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Password':
					/**
					 * Sets the value for strPassword 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strPassword = QType::Cast($mixValue, QType::String));
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

			
		
		// Related Objects' Methods for LicenciaAsEMPRESAIdEMPRESA
		//-------------------------------------------------------------------

		/**
		 * Gets all associated LicenciasAsEMPRESAIdEMPRESA as an array of Licencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia[]
		*/ 
		public function GetLicenciaAsEMPRESAIdEMPRESAArray($objOptionalClauses = null) {
			if ((is_null($this->intIdEMPRESA)))
				return array();

			try {
				return Licencia::LoadArrayByEMPRESAIdEMPRESA($this->intIdEMPRESA, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated LicenciasAsEMPRESAIdEMPRESA
		 * @return int
		*/ 
		public function CountLicenciasAsEMPRESAIdEMPRESA() {
			if ((is_null($this->intIdEMPRESA)))
				return 0;

			return Licencia::CountByEMPRESAIdEMPRESA($this->intIdEMPRESA);
		}

		/**
		 * Associates a LicenciaAsEMPRESAIdEMPRESA
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function AssociateLicenciaAsEMPRESAIdEMPRESA(Licencia $objLicencia) {
			if ((is_null($this->intIdEMPRESA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLicenciaAsEMPRESAIdEMPRESA on this unsaved Empresa.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateLicenciaAsEMPRESAIdEMPRESA on this Empresa with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`EMPRESA_idEMPRESA` = ' . $objDatabase->SqlVariable($this->intIdEMPRESA) . '
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . '
			');
		}

		/**
		 * Unassociates a LicenciaAsEMPRESAIdEMPRESA
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function UnassociateLicenciaAsEMPRESAIdEMPRESA(Licencia $objLicencia) {
			if ((is_null($this->intIdEMPRESA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsEMPRESAIdEMPRESA on this unsaved Empresa.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsEMPRESAIdEMPRESA on this Empresa with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`EMPRESA_idEMPRESA` = null
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . ' AND
					`EMPRESA_idEMPRESA` = ' . $objDatabase->SqlVariable($this->intIdEMPRESA) . '
			');
		}

		/**
		 * Unassociates all LicenciasAsEMPRESAIdEMPRESA
		 * @return void
		*/ 
		public function UnassociateAllLicenciasAsEMPRESAIdEMPRESA() {
			if ((is_null($this->intIdEMPRESA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsEMPRESAIdEMPRESA on this unsaved Empresa.');

			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LICENCIA`
				SET
					`EMPRESA_idEMPRESA` = null
				WHERE
					`EMPRESA_idEMPRESA` = ' . $objDatabase->SqlVariable($this->intIdEMPRESA) . '
			');
		}

		/**
		 * Deletes an associated LicenciaAsEMPRESAIdEMPRESA
		 * @param Licencia $objLicencia
		 * @return void
		*/ 
		public function DeleteAssociatedLicenciaAsEMPRESAIdEMPRESA(Licencia $objLicencia) {
			if ((is_null($this->intIdEMPRESA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsEMPRESAIdEMPRESA on this unsaved Empresa.');
			if ((is_null($objLicencia->IdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsEMPRESAIdEMPRESA on this Empresa with an unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($objLicencia->IdLICENCIA) . ' AND
					`EMPRESA_idEMPRESA` = ' . $objDatabase->SqlVariable($this->intIdEMPRESA) . '
			');
		}

		/**
		 * Deletes all associated LicenciasAsEMPRESAIdEMPRESA
		 * @return void
		*/ 
		public function DeleteAllLicenciasAsEMPRESAIdEMPRESA() {
			if ((is_null($this->intIdEMPRESA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateLicenciaAsEMPRESAIdEMPRESA on this unsaved Empresa.');

			// Get the Database Object for this Class
			$objDatabase = Empresa::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`
				WHERE
					`EMPRESA_idEMPRESA` = ' . $objDatabase->SqlVariable($this->intIdEMPRESA) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Empresa"><sequence>';
			$strToReturn .= '<element name="IdEMPRESA" type="xsd:int"/>';
			$strToReturn .= '<element name="Nombre" type="xsd:string"/>';
			$strToReturn .= '<element name="Rif" type="xsd:string"/>';
			$strToReturn .= '<element name="Direccion" type="xsd:string"/>';
			$strToReturn .= '<element name="Telefono" type="xsd:string"/>';
			$strToReturn .= '<element name="Email" type="xsd:string"/>';
			$strToReturn .= '<element name="Login" type="xsd:string"/>';
			$strToReturn .= '<element name="Password" type="xsd:string"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Empresa', $strComplexTypeArray)) {
				$strComplexTypeArray['Empresa'] = Empresa::GetSoapComplexTypeXml();
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Empresa::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Empresa();
			if (property_exists($objSoapObject, 'IdEMPRESA'))
				$objToReturn->intIdEMPRESA = $objSoapObject->IdEMPRESA;
			if (property_exists($objSoapObject, 'Nombre'))
				$objToReturn->strNombre = $objSoapObject->Nombre;
			if (property_exists($objSoapObject, 'Rif'))
				$objToReturn->strRif = $objSoapObject->Rif;
			if (property_exists($objSoapObject, 'Direccion'))
				$objToReturn->strDireccion = $objSoapObject->Direccion;
			if (property_exists($objSoapObject, 'Telefono'))
				$objToReturn->strTelefono = $objSoapObject->Telefono;
			if (property_exists($objSoapObject, 'Email'))
				$objToReturn->strEmail = $objSoapObject->Email;
			if (property_exists($objSoapObject, 'Login'))
				$objToReturn->strLogin = $objSoapObject->Login;
			if (property_exists($objSoapObject, 'Password'))
				$objToReturn->strPassword = $objSoapObject->Password;
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Empresa::GetSoapObjectFromObject($objObject, true));

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
			$iArray['IdEMPRESA'] = $this->intIdEMPRESA;
			$iArray['Nombre'] = $this->strNombre;
			$iArray['Rif'] = $this->strRif;
			$iArray['Direccion'] = $this->strDireccion;
			$iArray['Telefono'] = $this->strTelefono;
			$iArray['Email'] = $this->strEmail;
			$iArray['Login'] = $this->strLogin;
			$iArray['Password'] = $this->strPassword;
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
     * @property-read QQNode $IdEMPRESA
     * @property-read QQNode $Nombre
     * @property-read QQNode $Rif
     * @property-read QQNode $Direccion
     * @property-read QQNode $Telefono
     * @property-read QQNode $Email
     * @property-read QQNode $Login
     * @property-read QQNode $Password
     *
     *
     * @property-read QQReverseReferenceNodeLicencia $LicenciaAsEMPRESAIdEMPRESA

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeEmpresa extends QQNode {
		protected $strTableName = 'EMPRESA';
		protected $strPrimaryKey = 'idEMPRESA';
		protected $strClassName = 'Empresa';
		public function __get($strName) {
			switch ($strName) {
				case 'IdEMPRESA':
					return new QQNode('idEMPRESA', 'IdEMPRESA', 'Integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'VarChar', $this);
				case 'Rif':
					return new QQNode('rif', 'Rif', 'VarChar', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'Blob', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'VarChar', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'VarChar', $this);
				case 'Login':
					return new QQNode('login', 'Login', 'VarChar', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'VarChar', $this);
				case 'LicenciaAsEMPRESAIdEMPRESA':
					return new QQReverseReferenceNodeLicencia($this, 'licenciaasempresaidempresa', 'reverse_reference', 'EMPRESA_idEMPRESA');

				case '_PrimaryKeyNode':
					return new QQNode('idEMPRESA', 'IdEMPRESA', 'Integer', $this);
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
     * @property-read QQNode $IdEMPRESA
     * @property-read QQNode $Nombre
     * @property-read QQNode $Rif
     * @property-read QQNode $Direccion
     * @property-read QQNode $Telefono
     * @property-read QQNode $Email
     * @property-read QQNode $Login
     * @property-read QQNode $Password
     *
     *
     * @property-read QQReverseReferenceNodeLicencia $LicenciaAsEMPRESAIdEMPRESA

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeEmpresa extends QQReverseReferenceNode {
		protected $strTableName = 'EMPRESA';
		protected $strPrimaryKey = 'idEMPRESA';
		protected $strClassName = 'Empresa';
		public function __get($strName) {
			switch ($strName) {
				case 'IdEMPRESA':
					return new QQNode('idEMPRESA', 'IdEMPRESA', 'integer', $this);
				case 'Nombre':
					return new QQNode('nombre', 'Nombre', 'string', $this);
				case 'Rif':
					return new QQNode('rif', 'Rif', 'string', $this);
				case 'Direccion':
					return new QQNode('direccion', 'Direccion', 'string', $this);
				case 'Telefono':
					return new QQNode('telefono', 'Telefono', 'string', $this);
				case 'Email':
					return new QQNode('email', 'Email', 'string', $this);
				case 'Login':
					return new QQNode('login', 'Login', 'string', $this);
				case 'Password':
					return new QQNode('password', 'Password', 'string', $this);
				case 'LicenciaAsEMPRESAIdEMPRESA':
					return new QQReverseReferenceNodeLicencia($this, 'licenciaasempresaidempresa', 'reverse_reference', 'EMPRESA_idEMPRESA');

				case '_PrimaryKeyNode':
					return new QQNode('idEMPRESA', 'IdEMPRESA', 'integer', $this);
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
