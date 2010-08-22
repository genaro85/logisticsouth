<?php
	/**
	 * The abstract ImportacionGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Importacion subclass which
	 * extends this ImportacionGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Importacion class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property integer $TRANSPORTEIdTRANSPORTE the value for intTRANSPORTEIdTRANSPORTE (PK)
	 * @property integer $LICENCIAIdLICENCIA the value for intLICENCIAIdLICENCIA (PK)
	 * @property QDateTime $FechaDeSalida the value for dttFechaDeSalida 
	 * @property QDateTime $FechaLlegada the value for dttFechaLlegada 
	 * @property string $Tipo the value for strTipo (Not Null)
	 * @property integer $PAISOrigen the value for intPAISOrigen (Not Null)
	 * @property integer $PAISDestino the value for intPAISDestino (Not Null)
	 * @property Transporte $TRANSPORTEIdTRANSPORTEObject the value for the Transporte object referenced by intTRANSPORTEIdTRANSPORTE (PK)
	 * @property Licencia $LICENCIAIdLICENCIAObject the value for the Licencia object referenced by intLICENCIAIdLICENCIA (PK)
	 * @property Pais $PAISOrigenObject the value for the Pais object referenced by intPAISOrigen (Not Null)
	 * @property Pais $PAISDestinoObject the value for the Pais object referenced by intPAISDestino (Not Null)
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class ImportacionGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK column IMPORTACION.TRANSPORTE_idTRANSPORTE
		 * @var integer intTRANSPORTEIdTRANSPORTE
		 */
		protected $intTRANSPORTEIdTRANSPORTE;
		const TRANSPORTEIdTRANSPORTEDefault = null;


		/**
		 * Protected internal member variable that stores the original version of the PK column value (if restored)
		 * Used by Save() to update a PK column during UPDATE
		 * @var integer __intTRANSPORTEIdTRANSPORTE;
		 */
		protected $__intTRANSPORTEIdTRANSPORTE;

		/**
		 * Protected member variable that maps to the database PK column IMPORTACION.LICENCIA_idLICENCIA
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
		 * Protected member variable that maps to the database column IMPORTACION.fechaDeSalida
		 * @var QDateTime dttFechaDeSalida
		 */
		protected $dttFechaDeSalida;
		const FechaDeSalidaDefault = null;


		/**
		 * Protected member variable that maps to the database column IMPORTACION.fechaLlegada
		 * @var QDateTime dttFechaLlegada
		 */
		protected $dttFechaLlegada;
		const FechaLlegadaDefault = null;


		/**
		 * Protected member variable that maps to the database column IMPORTACION.tipo
		 * @var string strTipo
		 */
		protected $strTipo;
		const TipoMaxLength = 45;
		const TipoDefault = null;


		/**
		 * Protected member variable that maps to the database column IMPORTACION.PAIS_Origen
		 * @var integer intPAISOrigen
		 */
		protected $intPAISOrigen;
		const PAISOrigenDefault = null;


		/**
		 * Protected member variable that maps to the database column IMPORTACION.PAIS_Destino
		 * @var integer intPAISDestino
		 */
		protected $intPAISDestino;
		const PAISDestinoDefault = null;


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
		 * in the database column IMPORTACION.TRANSPORTE_idTRANSPORTE.
		 *
		 * NOTE: Always use the TRANSPORTEIdTRANSPORTEObject property getter to correctly retrieve this Transporte object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Transporte objTRANSPORTEIdTRANSPORTEObject
		 */
		protected $objTRANSPORTEIdTRANSPORTEObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column IMPORTACION.LICENCIA_idLICENCIA.
		 *
		 * NOTE: Always use the LICENCIAIdLICENCIAObject property getter to correctly retrieve this Licencia object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Licencia objLICENCIAIdLICENCIAObject
		 */
		protected $objLICENCIAIdLICENCIAObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column IMPORTACION.PAIS_Origen.
		 *
		 * NOTE: Always use the PAISOrigenObject property getter to correctly retrieve this Pais object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Pais objPAISOrigenObject
		 */
		protected $objPAISOrigenObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column IMPORTACION.PAIS_Destino.
		 *
		 * NOTE: Always use the PAISDestinoObject property getter to correctly retrieve this Pais object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Pais objPAISDestinoObject
		 */
		protected $objPAISDestinoObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intTRANSPORTEIdTRANSPORTE = Importacion::TRANSPORTEIdTRANSPORTEDefault;
			$this->intLICENCIAIdLICENCIA = Importacion::LICENCIAIdLICENCIADefault;
			$this->dttFechaDeSalida = (Importacion::FechaDeSalidaDefault === null)?null:new QDateTime(Importacion::FechaDeSalidaDefault);
			$this->dttFechaLlegada = (Importacion::FechaLlegadaDefault === null)?null:new QDateTime(Importacion::FechaLlegadaDefault);
			$this->strTipo = Importacion::TipoDefault;
			$this->intPAISOrigen = Importacion::PAISOrigenDefault;
			$this->intPAISDestino = Importacion::PAISDestinoDefault;
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
		 * Load a Importacion from PK Info
		 * @param integer $intTRANSPORTEIdTRANSPORTE
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion
		 */
		public static function Load($intTRANSPORTEIdTRANSPORTE, $intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Importacion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Importacion()->TRANSPORTEIdTRANSPORTE, $intTRANSPORTEIdTRANSPORTE),
					QQ::Equal(QQN::Importacion()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Importacions
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Importacion::QueryArray to perform the LoadAll query
			try {
				return Importacion::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Importacions
		 * @return int
		 */
		public static function CountAll() {
			// Call Importacion::QueryCount to perform the CountAll query
			return Importacion::QueryCount(QQ::All());
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
			$objDatabase = Importacion::GetDatabase();

			// Create/Build out the QueryBuilder object with Importacion-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'IMPORTACION');
			Importacion::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('IMPORTACION');

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
		 * Static Qcubed Query method to query for a single Importacion object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Importacion the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Importacion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Importacion object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Importacion::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Importacion::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Importacion objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Importacion[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Importacion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Importacion::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Importacion objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Importacion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Importacion::GetDatabase();

			$strQuery = Importacion::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/importacion', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Importacion::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Importacion
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'IMPORTACION';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'TRANSPORTE_idTRANSPORTE', $strAliasPrefix . 'TRANSPORTE_idTRANSPORTE');
			$objBuilder->AddSelectItem($strTableName, 'LICENCIA_idLICENCIA', $strAliasPrefix . 'LICENCIA_idLICENCIA');
			$objBuilder->AddSelectItem($strTableName, 'fechaDeSalida', $strAliasPrefix . 'fechaDeSalida');
			$objBuilder->AddSelectItem($strTableName, 'fechaLlegada', $strAliasPrefix . 'fechaLlegada');
			$objBuilder->AddSelectItem($strTableName, 'tipo', $strAliasPrefix . 'tipo');
			$objBuilder->AddSelectItem($strTableName, 'PAIS_Origen', $strAliasPrefix . 'PAIS_Origen');
			$objBuilder->AddSelectItem($strTableName, 'PAIS_Destino', $strAliasPrefix . 'PAIS_Destino');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Importacion from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Importacion::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Importacion
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}

			// Create a new instance of the Importacion object
			$objToReturn = new Importacion();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'TRANSPORTE_idTRANSPORTE', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'TRANSPORTE_idTRANSPORTE'] : $strAliasPrefix . 'TRANSPORTE_idTRANSPORTE';
			$objToReturn->intTRANSPORTEIdTRANSPORTE = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intTRANSPORTEIdTRANSPORTE = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'LICENCIA_idLICENCIA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'LICENCIA_idLICENCIA'] : $strAliasPrefix . 'LICENCIA_idLICENCIA';
			$objToReturn->intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$objToReturn->__intLICENCIAIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaDeSalida', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaDeSalida'] : $strAliasPrefix . 'fechaDeSalida';
			$objToReturn->dttFechaDeSalida = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaLlegada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaLlegada'] : $strAliasPrefix . 'fechaLlegada';
			$objToReturn->dttFechaLlegada = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'tipo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tipo'] : $strAliasPrefix . 'tipo';
			$objToReturn->strTipo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PAIS_Origen', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PAIS_Origen'] : $strAliasPrefix . 'PAIS_Origen';
			$objToReturn->intPAISOrigen = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'PAIS_Destino', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PAIS_Destino'] : $strAliasPrefix . 'PAIS_Destino';
			$objToReturn->intPAISDestino = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->TRANSPORTEIdTRANSPORTE != $objPreviousItem->TRANSPORTEIdTRANSPORTE) {
						continue;
					}
					if ($objToReturn->LICENCIAIdLICENCIA != $objPreviousItem->LICENCIAIdLICENCIA) {
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
				$strAliasPrefix = 'IMPORTACION__';

			// Check for TRANSPORTEIdTRANSPORTEObject Early Binding
			$strAlias = $strAliasPrefix . 'TRANSPORTE_idTRANSPORTE__idTRANSPORTE';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objTRANSPORTEIdTRANSPORTEObject = Transporte::InstantiateDbRow($objDbRow, $strAliasPrefix . 'TRANSPORTE_idTRANSPORTE__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for LICENCIAIdLICENCIAObject Early Binding
			$strAlias = $strAliasPrefix . 'LICENCIA_idLICENCIA__idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objLICENCIAIdLICENCIAObject = Licencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'LICENCIA_idLICENCIA__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PAISOrigenObject Early Binding
			$strAlias = $strAliasPrefix . 'PAIS_Origen__idPAIS';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPAISOrigenObject = Pais::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PAIS_Origen__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PAISDestinoObject Early Binding
			$strAlias = $strAliasPrefix . 'PAIS_Destino__idPAIS';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPAISDestinoObject = Pais::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PAIS_Destino__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			return $objToReturn;
		}

		/**
		 * Instantiate an array of Importacions from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Importacion[]
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
					$objItem = Importacion::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Importacion::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Importacion object,
		 * by TRANSPORTEIdTRANSPORTE, LICENCIAIdLICENCIA Index(es)
		 * @param integer $intTRANSPORTEIdTRANSPORTE
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion
		*/
		public static function LoadByTRANSPORTEIdTRANSPORTELICENCIAIdLICENCIA($intTRANSPORTEIdTRANSPORTE, $intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			return Importacion::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Importacion()->TRANSPORTEIdTRANSPORTE, $intTRANSPORTEIdTRANSPORTE),
					QQ::Equal(QQN::Importacion()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Importacion objects,
		 * by TRANSPORTEIdTRANSPORTE Index(es)
		 * @param integer $intTRANSPORTEIdTRANSPORTE
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion[]
		*/
		public static function LoadArrayByTRANSPORTEIdTRANSPORTE($intTRANSPORTEIdTRANSPORTE, $objOptionalClauses = null) {
			// Call Importacion::QueryArray to perform the LoadArrayByTRANSPORTEIdTRANSPORTE query
			try {
				return Importacion::QueryArray(
					QQ::Equal(QQN::Importacion()->TRANSPORTEIdTRANSPORTE, $intTRANSPORTEIdTRANSPORTE),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Importacions
		 * by TRANSPORTEIdTRANSPORTE Index(es)
		 * @param integer $intTRANSPORTEIdTRANSPORTE
		 * @return int
		*/
		public static function CountByTRANSPORTEIdTRANSPORTE($intTRANSPORTEIdTRANSPORTE) {
			// Call Importacion::QueryCount to perform the CountByTRANSPORTEIdTRANSPORTE query
			return Importacion::QueryCount(
				QQ::Equal(QQN::Importacion()->TRANSPORTEIdTRANSPORTE, $intTRANSPORTEIdTRANSPORTE)
			);
		}
			
		/**
		 * Load an array of Importacion objects,
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion[]
		*/
		public static function LoadArrayByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA, $objOptionalClauses = null) {
			// Call Importacion::QueryArray to perform the LoadArrayByLICENCIAIdLICENCIA query
			try {
				return Importacion::QueryArray(
					QQ::Equal(QQN::Importacion()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Importacions
		 * by LICENCIAIdLICENCIA Index(es)
		 * @param integer $intLICENCIAIdLICENCIA
		 * @return int
		*/
		public static function CountByLICENCIAIdLICENCIA($intLICENCIAIdLICENCIA) {
			// Call Importacion::QueryCount to perform the CountByLICENCIAIdLICENCIA query
			return Importacion::QueryCount(
				QQ::Equal(QQN::Importacion()->LICENCIAIdLICENCIA, $intLICENCIAIdLICENCIA)
			);
		}
			
		/**
		 * Load an array of Importacion objects,
		 * by PAISOrigen Index(es)
		 * @param integer $intPAISOrigen
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion[]
		*/
		public static function LoadArrayByPAISOrigen($intPAISOrigen, $objOptionalClauses = null) {
			// Call Importacion::QueryArray to perform the LoadArrayByPAISOrigen query
			try {
				return Importacion::QueryArray(
					QQ::Equal(QQN::Importacion()->PAISOrigen, $intPAISOrigen),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Importacions
		 * by PAISOrigen Index(es)
		 * @param integer $intPAISOrigen
		 * @return int
		*/
		public static function CountByPAISOrigen($intPAISOrigen) {
			// Call Importacion::QueryCount to perform the CountByPAISOrigen query
			return Importacion::QueryCount(
				QQ::Equal(QQN::Importacion()->PAISOrigen, $intPAISOrigen)
			);
		}
			
		/**
		 * Load an array of Importacion objects,
		 * by PAISDestino Index(es)
		 * @param integer $intPAISDestino
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Importacion[]
		*/
		public static function LoadArrayByPAISDestino($intPAISDestino, $objOptionalClauses = null) {
			// Call Importacion::QueryArray to perform the LoadArrayByPAISDestino query
			try {
				return Importacion::QueryArray(
					QQ::Equal(QQN::Importacion()->PAISDestino, $intPAISDestino),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Importacions
		 * by PAISDestino Index(es)
		 * @param integer $intPAISDestino
		 * @return int
		*/
		public static function CountByPAISDestino($intPAISDestino) {
			// Call Importacion::QueryCount to perform the CountByPAISDestino query
			return Importacion::QueryCount(
				QQ::Equal(QQN::Importacion()->PAISDestino, $intPAISDestino)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Importacion
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return void
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Importacion::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `IMPORTACION` (
							`TRANSPORTE_idTRANSPORTE`,
							`LICENCIA_idLICENCIA`,
							`fechaDeSalida`,
							`fechaLlegada`,
							`tipo`,
							`PAIS_Origen`,
							`PAIS_Destino`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intTRANSPORTEIdTRANSPORTE) . ',
							' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							' . $objDatabase->SqlVariable($this->dttFechaDeSalida) . ',
							' . $objDatabase->SqlVariable($this->dttFechaLlegada) . ',
							' . $objDatabase->SqlVariable($this->strTipo) . ',
							' . $objDatabase->SqlVariable($this->intPAISOrigen) . ',
							' . $objDatabase->SqlVariable($this->intPAISDestino) . '
						)
					');


				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`IMPORTACION`
						SET
							`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intTRANSPORTEIdTRANSPORTE) . ',
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . ',
							`fechaDeSalida` = ' . $objDatabase->SqlVariable($this->dttFechaDeSalida) . ',
							`fechaLlegada` = ' . $objDatabase->SqlVariable($this->dttFechaLlegada) . ',
							`tipo` = ' . $objDatabase->SqlVariable($this->strTipo) . ',
							`PAIS_Origen` = ' . $objDatabase->SqlVariable($this->intPAISOrigen) . ',
							`PAIS_Destino` = ' . $objDatabase->SqlVariable($this->intPAISDestino) . '
						WHERE
							`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->__intTRANSPORTEIdTRANSPORTE) . ' AND
							`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->__intLICENCIAIdLICENCIA) . '
					');
				}

			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Update __blnRestored and any Non-Identity PK Columns (if applicable)
			$this->__blnRestored = true;
			$this->__intTRANSPORTEIdTRANSPORTE = $this->intTRANSPORTEIdTRANSPORTE;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;


			// Return 
			return $mixToReturn;
		}

		/**
		 * Delete this Importacion
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intTRANSPORTEIdTRANSPORTE)) || (is_null($this->intLICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Importacion with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Importacion::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`IMPORTACION`
				WHERE
					`TRANSPORTE_idTRANSPORTE` = ' . $objDatabase->SqlVariable($this->intTRANSPORTEIdTRANSPORTE) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intLICENCIAIdLICENCIA) . '');
		}

		/**
		 * Delete all Importacions
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Importacion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`IMPORTACION`');
		}

		/**
		 * Truncate IMPORTACION table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Importacion::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `IMPORTACION`');
		}

		/**
		 * Reload this Importacion from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Importacion object.');

			// Reload the Object
			$objReloaded = Importacion::Load($this->intTRANSPORTEIdTRANSPORTE, $this->intLICENCIAIdLICENCIA);

			// Update $this's local variables to match
			$this->TRANSPORTEIdTRANSPORTE = $objReloaded->TRANSPORTEIdTRANSPORTE;
			$this->__intTRANSPORTEIdTRANSPORTE = $this->intTRANSPORTEIdTRANSPORTE;
			$this->LICENCIAIdLICENCIA = $objReloaded->LICENCIAIdLICENCIA;
			$this->__intLICENCIAIdLICENCIA = $this->intLICENCIAIdLICENCIA;
			$this->dttFechaDeSalida = $objReloaded->dttFechaDeSalida;
			$this->dttFechaLlegada = $objReloaded->dttFechaLlegada;
			$this->strTipo = $objReloaded->strTipo;
			$this->PAISOrigen = $objReloaded->PAISOrigen;
			$this->PAISDestino = $objReloaded->PAISDestino;
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
				case 'TRANSPORTEIdTRANSPORTE':
					/**
					 * Gets the value for intTRANSPORTEIdTRANSPORTE (PK)
					 * @return integer
					 */
					return $this->intTRANSPORTEIdTRANSPORTE;

				case 'LICENCIAIdLICENCIA':
					/**
					 * Gets the value for intLICENCIAIdLICENCIA (PK)
					 * @return integer
					 */
					return $this->intLICENCIAIdLICENCIA;

				case 'FechaDeSalida':
					/**
					 * Gets the value for dttFechaDeSalida 
					 * @return QDateTime
					 */
					return $this->dttFechaDeSalida;

				case 'FechaLlegada':
					/**
					 * Gets the value for dttFechaLlegada 
					 * @return QDateTime
					 */
					return $this->dttFechaLlegada;

				case 'Tipo':
					/**
					 * Gets the value for strTipo (Not Null)
					 * @return string
					 */
					return $this->strTipo;

				case 'PAISOrigen':
					/**
					 * Gets the value for intPAISOrigen (Not Null)
					 * @return integer
					 */
					return $this->intPAISOrigen;

				case 'PAISDestino':
					/**
					 * Gets the value for intPAISDestino (Not Null)
					 * @return integer
					 */
					return $this->intPAISDestino;


				///////////////////
				// Member Objects
				///////////////////
				case 'TRANSPORTEIdTRANSPORTEObject':
					/**
					 * Gets the value for the Transporte object referenced by intTRANSPORTEIdTRANSPORTE (PK)
					 * @return Transporte
					 */
					try {
						if ((!$this->objTRANSPORTEIdTRANSPORTEObject) && (!is_null($this->intTRANSPORTEIdTRANSPORTE)))
							$this->objTRANSPORTEIdTRANSPORTEObject = Transporte::Load($this->intTRANSPORTEIdTRANSPORTE);
						return $this->objTRANSPORTEIdTRANSPORTEObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'PAISOrigenObject':
					/**
					 * Gets the value for the Pais object referenced by intPAISOrigen (Not Null)
					 * @return Pais
					 */
					try {
						if ((!$this->objPAISOrigenObject) && (!is_null($this->intPAISOrigen)))
							$this->objPAISOrigenObject = Pais::Load($this->intPAISOrigen);
						return $this->objPAISOrigenObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PAISDestinoObject':
					/**
					 * Gets the value for the Pais object referenced by intPAISDestino (Not Null)
					 * @return Pais
					 */
					try {
						if ((!$this->objPAISDestinoObject) && (!is_null($this->intPAISDestino)))
							$this->objPAISDestinoObject = Pais::Load($this->intPAISDestino);
						return $this->objPAISDestinoObject;
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
				case 'TRANSPORTEIdTRANSPORTE':
					/**
					 * Sets the value for intTRANSPORTEIdTRANSPORTE (PK)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objTRANSPORTEIdTRANSPORTEObject = null;
						return ($this->intTRANSPORTEIdTRANSPORTE = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

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

				case 'FechaDeSalida':
					/**
					 * Sets the value for dttFechaDeSalida 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaDeSalida = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaLlegada':
					/**
					 * Sets the value for dttFechaLlegada 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaLlegada = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tipo':
					/**
					 * Sets the value for strTipo (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTipo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PAISOrigen':
					/**
					 * Sets the value for intPAISOrigen (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPAISOrigenObject = null;
						return ($this->intPAISOrigen = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PAISDestino':
					/**
					 * Sets the value for intPAISDestino (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPAISDestinoObject = null;
						return ($this->intPAISDestino = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}


				///////////////////
				// Member Objects
				///////////////////
				case 'TRANSPORTEIdTRANSPORTEObject':
					/**
					 * Sets the value for the Transporte object referenced by intTRANSPORTEIdTRANSPORTE (PK)
					 * @param Transporte $mixValue
					 * @return Transporte
					 */
					if (is_null($mixValue)) {
						$this->intTRANSPORTEIdTRANSPORTE = null;
						$this->objTRANSPORTEIdTRANSPORTEObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Transporte object
						try {
							$mixValue = QType::Cast($mixValue, 'Transporte');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Transporte object
						if (is_null($mixValue->IdTRANSPORTE))
							throw new QCallerException('Unable to set an unsaved TRANSPORTEIdTRANSPORTEObject for this Importacion');

						// Update Local Member Variables
						$this->objTRANSPORTEIdTRANSPORTEObject = $mixValue;
						$this->intTRANSPORTEIdTRANSPORTE = $mixValue->IdTRANSPORTE;

						// Return $mixValue
						return $mixValue;
					}
					break;

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
							throw new QCallerException('Unable to set an unsaved LICENCIAIdLICENCIAObject for this Importacion');

						// Update Local Member Variables
						$this->objLICENCIAIdLICENCIAObject = $mixValue;
						$this->intLICENCIAIdLICENCIA = $mixValue->IdLICENCIA;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PAISOrigenObject':
					/**
					 * Sets the value for the Pais object referenced by intPAISOrigen (Not Null)
					 * @param Pais $mixValue
					 * @return Pais
					 */
					if (is_null($mixValue)) {
						$this->intPAISOrigen = null;
						$this->objPAISOrigenObject = null;
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
							throw new QCallerException('Unable to set an unsaved PAISOrigenObject for this Importacion');

						// Update Local Member Variables
						$this->objPAISOrigenObject = $mixValue;
						$this->intPAISOrigen = $mixValue->IdPAIS;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PAISDestinoObject':
					/**
					 * Sets the value for the Pais object referenced by intPAISDestino (Not Null)
					 * @param Pais $mixValue
					 * @return Pais
					 */
					if (is_null($mixValue)) {
						$this->intPAISDestino = null;
						$this->objPAISDestinoObject = null;
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
							throw new QCallerException('Unable to set an unsaved PAISDestinoObject for this Importacion');

						// Update Local Member Variables
						$this->objPAISDestinoObject = $mixValue;
						$this->intPAISDestino = $mixValue->IdPAIS;

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
			$strToReturn = '<complexType name="Importacion"><sequence>';
			$strToReturn .= '<element name="TRANSPORTEIdTRANSPORTEObject" type="xsd1:Transporte"/>';
			$strToReturn .= '<element name="LICENCIAIdLICENCIAObject" type="xsd1:Licencia"/>';
			$strToReturn .= '<element name="FechaDeSalida" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaLlegada" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Tipo" type="xsd:string"/>';
			$strToReturn .= '<element name="PAISOrigenObject" type="xsd1:Pais"/>';
			$strToReturn .= '<element name="PAISDestinoObject" type="xsd1:Pais"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Importacion', $strComplexTypeArray)) {
				$strComplexTypeArray['Importacion'] = Importacion::GetSoapComplexTypeXml();
				Transporte::AlterSoapComplexTypeArray($strComplexTypeArray);
				Licencia::AlterSoapComplexTypeArray($strComplexTypeArray);
				Pais::AlterSoapComplexTypeArray($strComplexTypeArray);
				Pais::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Importacion::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Importacion();
			if ((property_exists($objSoapObject, 'TRANSPORTEIdTRANSPORTEObject')) &&
				($objSoapObject->TRANSPORTEIdTRANSPORTEObject))
				$objToReturn->TRANSPORTEIdTRANSPORTEObject = Transporte::GetObjectFromSoapObject($objSoapObject->TRANSPORTEIdTRANSPORTEObject);
			if ((property_exists($objSoapObject, 'LICENCIAIdLICENCIAObject')) &&
				($objSoapObject->LICENCIAIdLICENCIAObject))
				$objToReturn->LICENCIAIdLICENCIAObject = Licencia::GetObjectFromSoapObject($objSoapObject->LICENCIAIdLICENCIAObject);
			if (property_exists($objSoapObject, 'FechaDeSalida'))
				$objToReturn->dttFechaDeSalida = new QDateTime($objSoapObject->FechaDeSalida);
			if (property_exists($objSoapObject, 'FechaLlegada'))
				$objToReturn->dttFechaLlegada = new QDateTime($objSoapObject->FechaLlegada);
			if (property_exists($objSoapObject, 'Tipo'))
				$objToReturn->strTipo = $objSoapObject->Tipo;
			if ((property_exists($objSoapObject, 'PAISOrigenObject')) &&
				($objSoapObject->PAISOrigenObject))
				$objToReturn->PAISOrigenObject = Pais::GetObjectFromSoapObject($objSoapObject->PAISOrigenObject);
			if ((property_exists($objSoapObject, 'PAISDestinoObject')) &&
				($objSoapObject->PAISDestinoObject))
				$objToReturn->PAISDestinoObject = Pais::GetObjectFromSoapObject($objSoapObject->PAISDestinoObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Importacion::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objTRANSPORTEIdTRANSPORTEObject)
				$objObject->objTRANSPORTEIdTRANSPORTEObject = Transporte::GetSoapObjectFromObject($objObject->objTRANSPORTEIdTRANSPORTEObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intTRANSPORTEIdTRANSPORTE = null;
			if ($objObject->objLICENCIAIdLICENCIAObject)
				$objObject->objLICENCIAIdLICENCIAObject = Licencia::GetSoapObjectFromObject($objObject->objLICENCIAIdLICENCIAObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intLICENCIAIdLICENCIA = null;
			if ($objObject->dttFechaDeSalida)
				$objObject->dttFechaDeSalida = $objObject->dttFechaDeSalida->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFechaLlegada)
				$objObject->dttFechaLlegada = $objObject->dttFechaLlegada->qFormat(QDateTime::FormatSoap);
			if ($objObject->objPAISOrigenObject)
				$objObject->objPAISOrigenObject = Pais::GetSoapObjectFromObject($objObject->objPAISOrigenObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPAISOrigen = null;
			if ($objObject->objPAISDestinoObject)
				$objObject->objPAISDestinoObject = Pais::GetSoapObjectFromObject($objObject->objPAISDestinoObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPAISDestino = null;
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
			$iArray['TRANSPORTEIdTRANSPORTE'] = $this->intTRANSPORTEIdTRANSPORTE;
			$iArray['LICENCIAIdLICENCIA'] = $this->intLICENCIAIdLICENCIA;
			$iArray['FechaDeSalida'] = $this->dttFechaDeSalida;
			$iArray['FechaLlegada'] = $this->dttFechaLlegada;
			$iArray['Tipo'] = $this->strTipo;
			$iArray['PAISOrigen'] = $this->intPAISOrigen;
			$iArray['PAISDestino'] = $this->intPAISDestino;
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
     * @property-read QQNode $TRANSPORTEIdTRANSPORTE
     * @property-read QQNodeTransporte $TRANSPORTEIdTRANSPORTEObject
     * @property-read QQNode $LICENCIAIdLICENCIA
     * @property-read QQNodeLicencia $LICENCIAIdLICENCIAObject
     * @property-read QQNode $FechaDeSalida
     * @property-read QQNode $FechaLlegada
     * @property-read QQNode $Tipo
     * @property-read QQNode $PAISOrigen
     * @property-read QQNodePais $PAISOrigenObject
     * @property-read QQNode $PAISDestino
     * @property-read QQNodePais $PAISDestinoObject
     *
     *

     * @property-read QQNodeTransporte $_PrimaryKeyNode
     **/
	class QQNodeImportacion extends QQNode {
		protected $strTableName = 'IMPORTACION';
		protected $strPrimaryKey = 'TRANSPORTE_idTRANSPORTE';
		protected $strClassName = 'Importacion';
		public function __get($strName) {
			switch ($strName) {
				case 'TRANSPORTEIdTRANSPORTE':
					return new QQNode('TRANSPORTE_idTRANSPORTE', 'TRANSPORTEIdTRANSPORTE', 'Integer', $this);
				case 'TRANSPORTEIdTRANSPORTEObject':
					return new QQNodeTransporte('TRANSPORTE_idTRANSPORTE', 'TRANSPORTEIdTRANSPORTEObject', 'Integer', $this);
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'Integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'Integer', $this);
				case 'FechaDeSalida':
					return new QQNode('fechaDeSalida', 'FechaDeSalida', 'Date', $this);
				case 'FechaLlegada':
					return new QQNode('fechaLlegada', 'FechaLlegada', 'Date', $this);
				case 'Tipo':
					return new QQNode('tipo', 'Tipo', 'VarChar', $this);
				case 'PAISOrigen':
					return new QQNode('PAIS_Origen', 'PAISOrigen', 'Integer', $this);
				case 'PAISOrigenObject':
					return new QQNodePais('PAIS_Origen', 'PAISOrigenObject', 'Integer', $this);
				case 'PAISDestino':
					return new QQNode('PAIS_Destino', 'PAISDestino', 'Integer', $this);
				case 'PAISDestinoObject':
					return new QQNodePais('PAIS_Destino', 'PAISDestinoObject', 'Integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeTransporte('TRANSPORTE_idTRANSPORTE', 'TRANSPORTEIdTRANSPORTE', 'Integer', $this);
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
     * @property-read QQNode $TRANSPORTEIdTRANSPORTE
     * @property-read QQNodeTransporte $TRANSPORTEIdTRANSPORTEObject
     * @property-read QQNode $LICENCIAIdLICENCIA
     * @property-read QQNodeLicencia $LICENCIAIdLICENCIAObject
     * @property-read QQNode $FechaDeSalida
     * @property-read QQNode $FechaLlegada
     * @property-read QQNode $Tipo
     * @property-read QQNode $PAISOrigen
     * @property-read QQNodePais $PAISOrigenObject
     * @property-read QQNode $PAISDestino
     * @property-read QQNodePais $PAISDestinoObject
     *
     *

     * @property-read QQNodeTransporte $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeImportacion extends QQReverseReferenceNode {
		protected $strTableName = 'IMPORTACION';
		protected $strPrimaryKey = 'TRANSPORTE_idTRANSPORTE';
		protected $strClassName = 'Importacion';
		public function __get($strName) {
			switch ($strName) {
				case 'TRANSPORTEIdTRANSPORTE':
					return new QQNode('TRANSPORTE_idTRANSPORTE', 'TRANSPORTEIdTRANSPORTE', 'integer', $this);
				case 'TRANSPORTEIdTRANSPORTEObject':
					return new QQNodeTransporte('TRANSPORTE_idTRANSPORTE', 'TRANSPORTEIdTRANSPORTEObject', 'integer', $this);
				case 'LICENCIAIdLICENCIA':
					return new QQNode('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIA', 'integer', $this);
				case 'LICENCIAIdLICENCIAObject':
					return new QQNodeLicencia('LICENCIA_idLICENCIA', 'LICENCIAIdLICENCIAObject', 'integer', $this);
				case 'FechaDeSalida':
					return new QQNode('fechaDeSalida', 'FechaDeSalida', 'QDateTime', $this);
				case 'FechaLlegada':
					return new QQNode('fechaLlegada', 'FechaLlegada', 'QDateTime', $this);
				case 'Tipo':
					return new QQNode('tipo', 'Tipo', 'string', $this);
				case 'PAISOrigen':
					return new QQNode('PAIS_Origen', 'PAISOrigen', 'integer', $this);
				case 'PAISOrigenObject':
					return new QQNodePais('PAIS_Origen', 'PAISOrigenObject', 'integer', $this);
				case 'PAISDestino':
					return new QQNode('PAIS_Destino', 'PAISDestino', 'integer', $this);
				case 'PAISDestinoObject':
					return new QQNodePais('PAIS_Destino', 'PAISDestinoObject', 'integer', $this);

				case '_PrimaryKeyNode':
					return new QQNodeTransporte('TRANSPORTE_idTRANSPORTE', 'TRANSPORTEIdTRANSPORTE', 'integer', $this);
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
