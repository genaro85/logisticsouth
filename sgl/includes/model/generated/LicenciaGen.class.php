<?php
	/**
	 * The abstract LicenciaGen class defined here is
	 * code-generated and contains all the basic CRUD-type functionality as well as
	 * basic methods to handle relationships and index-based loading.
	 *
	 * To use, you should use the Licencia subclass which
	 * extends this LicenciaGen class.
	 *
	 * Because subsequent re-code generations will overwrite any changes to this
	 * file, you should leave this file unaltered to prevent yourself from losing
	 * any information or code changes.  All customizations should be done by
	 * overriding existing or implementing new methods, properties and variables
	 * in the Licencia class.
	 * 
	 * @package My QCubed Application
	 * @subpackage GeneratedDataObjects
	 * @property-read integer $IdLICENCIA the value for intIdLICENCIA (Read-Only PK)
	 * @property integer $EMPRESAIdEMPRESA the value for intEMPRESAIdEMPRESA (Not Null)
	 * @property integer $PROVEEDORIdPROVEEDOR the value for intPROVEEDORIdPROVEEDOR (Not Null)
	 * @property QDateTime $FechaInicio the value for dttFechaInicio (Not Null)
	 * @property QDateTime $FechaFin the value for dttFechaFin 
	 * @property QDateTime $FechaFinEstimada the value for dttFechaFinEstimada 
	 * @property string $NumeroProforma the value for strNumeroProforma (Not Null)
	 * @property string $NumeroCNP the value for strNumeroCNP 
	 * @property QDateTime $VencimientoCNP the value for dttVencimientoCNP 
	 * @property string $Status the value for strStatus (Not Null)
	 * @property string $FormaPago the value for strFormaPago 
	 * @property string $Tipo the value for strTipo 
	 * @property double $Flete the value for fltFlete 
	 * @property string $Seguro the value for strSeguro 
	 * @property integer $PROCESOIdPROCESO the value for intPROCESOIdPROCESO (Not Null)
	 * @property Empresa $EMPRESAIdEMPRESAObject the value for the Empresa object referenced by intEMPRESAIdEMPRESA (Not Null)
	 * @property Proveedor $PROVEEDORIdPROVEEDORObject the value for the Proveedor object referenced by intPROVEEDORIdPROVEEDOR (Not Null)
	 * @property Proceso $PROCESOIdPROCESOObject the value for the Proceso object referenced by intPROCESOIdPROCESO (Not Null)
	 * @property-read CodigoPago $_CodigoPagoAsLICENCIAIdLICENCIA the value for the private _objCodigoPagoAsLICENCIAIdLICENCIA (Read-Only) if set due to an expansion on the CODIGO_PAGO.LICENCIA_idLICENCIA reverse relationship
	 * @property-read CodigoPago[] $_CodigoPagoAsLICENCIAIdLICENCIAArray the value for the private _objCodigoPagoAsLICENCIAIdLICENCIAArray (Read-Only) if set due to an ExpandAsArray on the CODIGO_PAGO.LICENCIA_idLICENCIA reverse relationship
	 * @property-read EtapaLicencia $_EtapaLicenciaAsLICENCIAIdLICENCIA the value for the private _objEtapaLicenciaAsLICENCIAIdLICENCIA (Read-Only) if set due to an expansion on the ETAPA_LICENCIA.LICENCIA_idLICENCIA reverse relationship
	 * @property-read EtapaLicencia[] $_EtapaLicenciaAsLICENCIAIdLICENCIAArray the value for the private _objEtapaLicenciaAsLICENCIAIdLICENCIAArray (Read-Only) if set due to an ExpandAsArray on the ETAPA_LICENCIA.LICENCIA_idLICENCIA reverse relationship
	 * @property-read ListaProducto $_ListaProductoAsLICENCIAIdLICENCIA the value for the private _objListaProductoAsLICENCIAIdLICENCIA (Read-Only) if set due to an expansion on the LISTA_PRODUCTO.LICENCIA_idLICENCIA reverse relationship
	 * @property-read ListaProducto[] $_ListaProductoAsLICENCIAIdLICENCIAArray the value for the private _objListaProductoAsLICENCIAIdLICENCIAArray (Read-Only) if set due to an ExpandAsArray on the LISTA_PRODUCTO.LICENCIA_idLICENCIA reverse relationship
	 * @property-read Responsable $_ResponsableAsLICENCIAIdLICENCIA the value for the private _objResponsableAsLICENCIAIdLICENCIA (Read-Only) if set due to an expansion on the RESPONSABLE.LICENCIA_idLICENCIA reverse relationship
	 * @property-read Responsable[] $_ResponsableAsLICENCIAIdLICENCIAArray the value for the private _objResponsableAsLICENCIAIdLICENCIAArray (Read-Only) if set due to an ExpandAsArray on the RESPONSABLE.LICENCIA_idLICENCIA reverse relationship
	 * @property-read VigenciaDocumento $_VigenciaDocumentoAsLICENCIAIdLICENCIA the value for the private _objVigenciaDocumentoAsLICENCIAIdLICENCIA (Read-Only) if set due to an expansion on the VIGENCIA_DOCUMENTO.LICENCIA_idLICENCIA reverse relationship
	 * @property-read VigenciaDocumento[] $_VigenciaDocumentoAsLICENCIAIdLICENCIAArray the value for the private _objVigenciaDocumentoAsLICENCIAIdLICENCIAArray (Read-Only) if set due to an ExpandAsArray on the VIGENCIA_DOCUMENTO.LICENCIA_idLICENCIA reverse relationship
	 * @property-read boolean $__Restored whether or not this object was restored from the database (as opposed to created new)
	 */
	class LicenciaGen extends QBaseClass implements IteratorAggregate {

		///////////////////////////////////////////////////////////////////////
		// PROTECTED MEMBER VARIABLES and TEXT FIELD MAXLENGTHS (if applicable)
		///////////////////////////////////////////////////////////////////////
		
		/**
		 * Protected member variable that maps to the database PK Identity column LICENCIA.idLICENCIA
		 * @var integer intIdLICENCIA
		 */
		protected $intIdLICENCIA;
		const IdLICENCIADefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.EMPRESA_idEMPRESA
		 * @var integer intEMPRESAIdEMPRESA
		 */
		protected $intEMPRESAIdEMPRESA;
		const EMPRESAIdEMPRESADefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.PROVEEDOR_idPROVEEDOR
		 * @var integer intPROVEEDORIdPROVEEDOR
		 */
		protected $intPROVEEDORIdPROVEEDOR;
		const PROVEEDORIdPROVEEDORDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.fechaInicio
		 * @var QDateTime dttFechaInicio
		 */
		protected $dttFechaInicio;
		const FechaInicioDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.fechaFin
		 * @var QDateTime dttFechaFin
		 */
		protected $dttFechaFin;
		const FechaFinDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.fechaFinEstimada
		 * @var QDateTime dttFechaFinEstimada
		 */
		protected $dttFechaFinEstimada;
		const FechaFinEstimadaDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.numeroProforma
		 * @var string strNumeroProforma
		 */
		protected $strNumeroProforma;
		const NumeroProformaMaxLength = 45;
		const NumeroProformaDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.numeroCNP
		 * @var string strNumeroCNP
		 */
		protected $strNumeroCNP;
		const NumeroCNPMaxLength = 45;
		const NumeroCNPDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.vencimientoCNP
		 * @var QDateTime dttVencimientoCNP
		 */
		protected $dttVencimientoCNP;
		const VencimientoCNPDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.status
		 * @var string strStatus
		 */
		protected $strStatus;
		const StatusMaxLength = 45;
		const StatusDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.formaPago
		 * @var string strFormaPago
		 */
		protected $strFormaPago;
		const FormaPagoMaxLength = 45;
		const FormaPagoDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.tipo
		 * @var string strTipo
		 */
		protected $strTipo;
		const TipoMaxLength = 45;
		const TipoDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.flete
		 * @var double fltFlete
		 */
		protected $fltFlete;
		const FleteDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.seguro
		 * @var string strSeguro
		 */
		protected $strSeguro;
		const SeguroMaxLength = 45;
		const SeguroDefault = null;


		/**
		 * Protected member variable that maps to the database column LICENCIA.PROCESO_idPROCESO
		 * @var integer intPROCESOIdPROCESO
		 */
		protected $intPROCESOIdPROCESO;
		const PROCESOIdPROCESODefault = null;


		/**
		 * Private member variable that stores a reference to a single CodigoPagoAsLICENCIAIdLICENCIA object
		 * (of type CodigoPago), if this Licencia object was restored with
		 * an expansion on the CODIGO_PAGO association table.
		 * @var CodigoPago _objCodigoPagoAsLICENCIAIdLICENCIA;
		 */
		private $_objCodigoPagoAsLICENCIAIdLICENCIA;

		/**
		 * Private member variable that stores a reference to an array of CodigoPagoAsLICENCIAIdLICENCIA objects
		 * (of type CodigoPago[]), if this Licencia object was restored with
		 * an ExpandAsArray on the CODIGO_PAGO association table.
		 * @var CodigoPago[] _objCodigoPagoAsLICENCIAIdLICENCIAArray;
		 */
		private $_objCodigoPagoAsLICENCIAIdLICENCIAArray = array();

		/**
		 * Private member variable that stores a reference to a single EtapaLicenciaAsLICENCIAIdLICENCIA object
		 * (of type EtapaLicencia), if this Licencia object was restored with
		 * an expansion on the ETAPA_LICENCIA association table.
		 * @var EtapaLicencia _objEtapaLicenciaAsLICENCIAIdLICENCIA;
		 */
		private $_objEtapaLicenciaAsLICENCIAIdLICENCIA;

		/**
		 * Private member variable that stores a reference to an array of EtapaLicenciaAsLICENCIAIdLICENCIA objects
		 * (of type EtapaLicencia[]), if this Licencia object was restored with
		 * an ExpandAsArray on the ETAPA_LICENCIA association table.
		 * @var EtapaLicencia[] _objEtapaLicenciaAsLICENCIAIdLICENCIAArray;
		 */
		private $_objEtapaLicenciaAsLICENCIAIdLICENCIAArray = array();

		/**
		 * Private member variable that stores a reference to a single ListaProductoAsLICENCIAIdLICENCIA object
		 * (of type ListaProducto), if this Licencia object was restored with
		 * an expansion on the LISTA_PRODUCTO association table.
		 * @var ListaProducto _objListaProductoAsLICENCIAIdLICENCIA;
		 */
		private $_objListaProductoAsLICENCIAIdLICENCIA;

		/**
		 * Private member variable that stores a reference to an array of ListaProductoAsLICENCIAIdLICENCIA objects
		 * (of type ListaProducto[]), if this Licencia object was restored with
		 * an ExpandAsArray on the LISTA_PRODUCTO association table.
		 * @var ListaProducto[] _objListaProductoAsLICENCIAIdLICENCIAArray;
		 */
		private $_objListaProductoAsLICENCIAIdLICENCIAArray = array();

		/**
		 * Private member variable that stores a reference to a single ResponsableAsLICENCIAIdLICENCIA object
		 * (of type Responsable), if this Licencia object was restored with
		 * an expansion on the RESPONSABLE association table.
		 * @var Responsable _objResponsableAsLICENCIAIdLICENCIA;
		 */
		private $_objResponsableAsLICENCIAIdLICENCIA;

		/**
		 * Private member variable that stores a reference to an array of ResponsableAsLICENCIAIdLICENCIA objects
		 * (of type Responsable[]), if this Licencia object was restored with
		 * an ExpandAsArray on the RESPONSABLE association table.
		 * @var Responsable[] _objResponsableAsLICENCIAIdLICENCIAArray;
		 */
		private $_objResponsableAsLICENCIAIdLICENCIAArray = array();

		/**
		 * Private member variable that stores a reference to a single VigenciaDocumentoAsLICENCIAIdLICENCIA object
		 * (of type VigenciaDocumento), if this Licencia object was restored with
		 * an expansion on the VIGENCIA_DOCUMENTO association table.
		 * @var VigenciaDocumento _objVigenciaDocumentoAsLICENCIAIdLICENCIA;
		 */
		private $_objVigenciaDocumentoAsLICENCIAIdLICENCIA;

		/**
		 * Private member variable that stores a reference to an array of VigenciaDocumentoAsLICENCIAIdLICENCIA objects
		 * (of type VigenciaDocumento[]), if this Licencia object was restored with
		 * an ExpandAsArray on the VIGENCIA_DOCUMENTO association table.
		 * @var VigenciaDocumento[] _objVigenciaDocumentoAsLICENCIAIdLICENCIAArray;
		 */
		private $_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray = array();

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
		 * in the database column LICENCIA.EMPRESA_idEMPRESA.
		 *
		 * NOTE: Always use the EMPRESAIdEMPRESAObject property getter to correctly retrieve this Empresa object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Empresa objEMPRESAIdEMPRESAObject
		 */
		protected $objEMPRESAIdEMPRESAObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column LICENCIA.PROVEEDOR_idPROVEEDOR.
		 *
		 * NOTE: Always use the PROVEEDORIdPROVEEDORObject property getter to correctly retrieve this Proveedor object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Proveedor objPROVEEDORIdPROVEEDORObject
		 */
		protected $objPROVEEDORIdPROVEEDORObject;

		/**
		 * Protected member variable that contains the object pointed by the reference
		 * in the database column LICENCIA.PROCESO_idPROCESO.
		 *
		 * NOTE: Always use the PROCESOIdPROCESOObject property getter to correctly retrieve this Proceso object.
		 * (Because this class implements late binding, this variable reference MAY be null.)
		 * @var Proceso objPROCESOIdPROCESOObject
		 */
		protected $objPROCESOIdPROCESOObject;



		/**
		 * Initialize each property with default values from database definition
		 */
		public function Initialize()
		{
			$this->intIdLICENCIA = Licencia::IdLICENCIADefault;
			$this->intEMPRESAIdEMPRESA = Licencia::EMPRESAIdEMPRESADefault;
			$this->intPROVEEDORIdPROVEEDOR = Licencia::PROVEEDORIdPROVEEDORDefault;
			$this->dttFechaInicio = (Licencia::FechaInicioDefault === null)?null:new QDateTime(Licencia::FechaInicioDefault);
			$this->dttFechaFin = (Licencia::FechaFinDefault === null)?null:new QDateTime(Licencia::FechaFinDefault);
			$this->dttFechaFinEstimada = (Licencia::FechaFinEstimadaDefault === null)?null:new QDateTime(Licencia::FechaFinEstimadaDefault);
			$this->strNumeroProforma = Licencia::NumeroProformaDefault;
			$this->strNumeroCNP = Licencia::NumeroCNPDefault;
			$this->dttVencimientoCNP = (Licencia::VencimientoCNPDefault === null)?null:new QDateTime(Licencia::VencimientoCNPDefault);
			$this->strStatus = Licencia::StatusDefault;
			$this->strFormaPago = Licencia::FormaPagoDefault;
			$this->strTipo = Licencia::TipoDefault;
			$this->fltFlete = Licencia::FleteDefault;
			$this->strSeguro = Licencia::SeguroDefault;
			$this->intPROCESOIdPROCESO = Licencia::PROCESOIdPROCESODefault;
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
		 * Load a Licencia from PK Info
		 * @param integer $intIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia
		 */
		public static function Load($intIdLICENCIA, $objOptionalClauses = null) {
			// Use QuerySingle to Perform the Query
			return Licencia::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Licencia()->IdLICENCIA, $intIdLICENCIA)
				),
				$objOptionalClauses
			);
		}

		/**
		 * Load all Licencias
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia[]
		 */
		public static function LoadAll($objOptionalClauses = null) {
			if (func_num_args() > 1) {
				throw new QCallerException("LoadAll must be called with an array of optional clauses as a single argument");
			}
			// Call Licencia::QueryArray to perform the LoadAll query
			try {
				return Licencia::QueryArray(QQ::All(), $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count all Licencias
		 * @return int
		 */
		public static function CountAll() {
			// Call Licencia::QueryCount to perform the CountAll query
			return Licencia::QueryCount(QQ::All());
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
			$objDatabase = Licencia::GetDatabase();

			// Create/Build out the QueryBuilder object with Licencia-specific SELET and FROM fields
			$objQueryBuilder = new QQueryBuilder($objDatabase, 'LICENCIA');
			Licencia::GetSelectFields($objQueryBuilder);
			$objQueryBuilder->AddFromItem('LICENCIA');

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
		 * Static Qcubed Query method to query for a single Licencia object.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Licencia the queried object
		 */
		public static function QuerySingle(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Licencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
			
			// Perform the Query, Get the First Row, and Instantiate a new Licencia object
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			
			// Do we have to expand anything?
			if ($objQueryBuilder->ExpandAsArrayNodes) {
				$objToReturn = array();
				while ($objDbRow = $objDbResult->GetNextRow()) {
					$objItem = Licencia::InstantiateDbRow($objDbRow, null, $objQueryBuilder->ExpandAsArrayNodes, $objToReturn, $objQueryBuilder->ColumnAliasArray);
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
				return Licencia::InstantiateDbRow($objDbRow, null, null, null, $objQueryBuilder->ColumnAliasArray);
			}
		}

		/**
		 * Static Qcubed Query method to query for an array of Licencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return Licencia[] the queried objects as an array
		 */
		public static function QueryArray(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Licencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Perform the Query and Instantiate the Array Result
			$objDbResult = $objQueryBuilder->Database->Query($strQuery);
			return Licencia::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
		}

		/**
		 * Static Qcubed Query method to query for a count of Licencia objects.
		 * Uses BuildQueryStatment to perform most of the work.
		 * @param QQCondition $objConditions any conditions on the query, itself
		 * @param QQClause[] $objOptionalClausees additional optional QQClause objects for this query
		 * @param mixed[] $mixParameterArray a array of name-value pairs to perform PrepareStatement with
		 * @return integer the count of queried objects as an integer
		 */
		public static function QueryCount(QQCondition $objConditions, $objOptionalClauses = null, $mixParameterArray = null) {
			// Get the Query Statement
			try {
				$strQuery = Licencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, true);
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
			$objDatabase = Licencia::GetDatabase();

			$strQuery = Licencia::BuildQueryStatement($objQueryBuilder, $objConditions, $objOptionalClauses, $mixParameterArray, false);
			
			$objCache = new QCache('qquery/licencia', $strQuery);
			$cacheData = $objCache->GetData();
			
			if (!$cacheData || $blnForceUpdate) {
				$objDbResult = $objQueryBuilder->Database->Query($strQuery);
				$arrResult = Licencia::InstantiateDbResult($objDbResult, $objQueryBuilder->ExpandAsArrayNodes, $objQueryBuilder->ColumnAliasArray);
				$objCache->SaveData(serialize($arrResult));
			} else {
				$arrResult = unserialize($cacheData);
			}
			
			return $arrResult;
		}

		/**
		 * Updates a QQueryBuilder with the SELECT fields for this Licencia
		 * @param QQueryBuilder $objBuilder the Query Builder object to update
		 * @param string $strPrefix optional prefix to add to the SELECT fields
		 */
		public static function GetSelectFields(QQueryBuilder $objBuilder, $strPrefix = null) {
			if ($strPrefix) {
				$strTableName = $strPrefix;
				$strAliasPrefix = $strPrefix . '__';
			} else {
				$strTableName = 'LICENCIA';
				$strAliasPrefix = '';
			}

			$objBuilder->AddSelectItem($strTableName, 'idLICENCIA', $strAliasPrefix . 'idLICENCIA');
			$objBuilder->AddSelectItem($strTableName, 'EMPRESA_idEMPRESA', $strAliasPrefix . 'EMPRESA_idEMPRESA');
			$objBuilder->AddSelectItem($strTableName, 'PROVEEDOR_idPROVEEDOR', $strAliasPrefix . 'PROVEEDOR_idPROVEEDOR');
			$objBuilder->AddSelectItem($strTableName, 'fechaInicio', $strAliasPrefix . 'fechaInicio');
			$objBuilder->AddSelectItem($strTableName, 'fechaFin', $strAliasPrefix . 'fechaFin');
			$objBuilder->AddSelectItem($strTableName, 'fechaFinEstimada', $strAliasPrefix . 'fechaFinEstimada');
			$objBuilder->AddSelectItem($strTableName, 'numeroProforma', $strAliasPrefix . 'numeroProforma');
			$objBuilder->AddSelectItem($strTableName, 'numeroCNP', $strAliasPrefix . 'numeroCNP');
			$objBuilder->AddSelectItem($strTableName, 'vencimientoCNP', $strAliasPrefix . 'vencimientoCNP');
			$objBuilder->AddSelectItem($strTableName, 'status', $strAliasPrefix . 'status');
			$objBuilder->AddSelectItem($strTableName, 'formaPago', $strAliasPrefix . 'formaPago');
			$objBuilder->AddSelectItem($strTableName, 'tipo', $strAliasPrefix . 'tipo');
			$objBuilder->AddSelectItem($strTableName, 'flete', $strAliasPrefix . 'flete');
			$objBuilder->AddSelectItem($strTableName, 'seguro', $strAliasPrefix . 'seguro');
			$objBuilder->AddSelectItem($strTableName, 'PROCESO_idPROCESO', $strAliasPrefix . 'PROCESO_idPROCESO');
		}



		///////////////////////////////
		// INSTANTIATION-RELATED METHODS
		///////////////////////////////

		/**
		 * Instantiate a Licencia from a Database Row.
		 * Takes in an optional strAliasPrefix, used in case another Object::InstantiateDbRow
		 * is calling this Licencia::InstantiateDbRow in order to perform
		 * early binding on referenced objects.
		 * @param DatabaseRowBase $objDbRow
		 * @param string $strAliasPrefix
		 * @param string $strExpandAsArrayNodes
		 * @param QBaseClass $arrPreviousItem
		 * @param string[] $strColumnAliasArray
		 * @return Licencia
		*/
		public static function InstantiateDbRow($objDbRow, $strAliasPrefix = null, $strExpandAsArrayNodes = null, $arrPreviousItems = null, $strColumnAliasArray = array()) {
			// If blank row, return null
			if (!$objDbRow) {
				return null;
			}
			// See if we're doing an array expansion on the previous item
			$strAlias = $strAliasPrefix . 'idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (($strExpandAsArrayNodes) && is_array($arrPreviousItems) && count($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {            
					if ($objPreviousItem->intIdLICENCIA == $objDbRow->GetColumn($strAliasName, 'Integer')) {        
						// We are.  Now, prepare to check for ExpandAsArray clauses
						$blnExpandedViaArray = false;
						if (!$strAliasPrefix)
							$strAliasPrefix = 'LICENCIA__';


						// Expanding reverse references: CodigoPagoAsLICENCIAIdLICENCIA
						$strAlias = $strAliasPrefix . 'codigopagoaslicenciaidlicencia__LICENCIA_idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objCodigoPagoAsLICENCIAIdLICENCIAArray)) {
								$objPreviousChildItems = $objPreviousItem->_objCodigoPagoAsLICENCIAIdLICENCIAArray;
								$objChildItem = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoaslicenciaidlicencia__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objCodigoPagoAsLICENCIAIdLICENCIAArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objCodigoPagoAsLICENCIAIdLICENCIAArray[] = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: EtapaLicenciaAsLICENCIAIdLICENCIA
						$strAlias = $strAliasPrefix . 'etapalicenciaaslicenciaidlicencia__LICENCIA_idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray)) {
								$objPreviousChildItems = $objPreviousItem->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray;
								$objChildItem = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaaslicenciaidlicencia__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray[] = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ListaProductoAsLICENCIAIdLICENCIA
						$strAlias = $strAliasPrefix . 'listaproductoaslicenciaidlicencia__LICENCIA_idLICENCIA';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objListaProductoAsLICENCIAIdLICENCIAArray)) {
								$objPreviousChildItems = $objPreviousItem->_objListaProductoAsLICENCIAIdLICENCIAArray;
								$objChildItem = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoaslicenciaidlicencia__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objListaProductoAsLICENCIAIdLICENCIAArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objListaProductoAsLICENCIAIdLICENCIAArray[] = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: ResponsableAsLICENCIAIdLICENCIA
						$strAlias = $strAliasPrefix . 'responsableaslicenciaidlicencia__EMPLEADO_idEMPLEADO';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objResponsableAsLICENCIAIdLICENCIAArray)) {
								$objPreviousChildItems = $objPreviousItem->_objResponsableAsLICENCIAIdLICENCIAArray;
								$objChildItem = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableaslicenciaidlicencia__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objResponsableAsLICENCIAIdLICENCIAArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objResponsableAsLICENCIAIdLICENCIAArray[] = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Expanding reverse references: VigenciaDocumentoAsLICENCIAIdLICENCIA
						$strAlias = $strAliasPrefix . 'vigenciadocumentoaslicenciaidlicencia__LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO';
						$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
						if ((array_key_exists($strAlias, $strExpandAsArrayNodes)) &&
							(!is_null($objDbRow->GetColumn($strAliasName)))) {
							if ($intPreviousChildItemCount = count($objPreviousItem->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray)) {
								$objPreviousChildItems = $objPreviousItem->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray;
								$objChildItem = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslicenciaidlicencia__', $strExpandAsArrayNodes, $objPreviousChildItems, $strColumnAliasArray);
								if ($objChildItem) {
									$objPreviousItem->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray[] = $objChildItem;
								}
							} else {
								$objPreviousItem->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray[] = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
							}
							$blnExpandedViaArray = true;
						}

						// Either return false to signal array expansion, or check-to-reset the Alias prefix and move on
						if ($blnExpandedViaArray) {
							return false;
						} else if ($strAliasPrefix == 'LICENCIA__') {
							$strAliasPrefix = null;
						}
					}
				}
			}

			// Create a new instance of the Licencia object
			$objToReturn = new Licencia();
			$objToReturn->__blnRestored = true;

			$strAliasName = array_key_exists($strAliasPrefix . 'idLICENCIA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'idLICENCIA'] : $strAliasPrefix . 'idLICENCIA';
			$objToReturn->intIdLICENCIA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'EMPRESA_idEMPRESA', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'EMPRESA_idEMPRESA'] : $strAliasPrefix . 'EMPRESA_idEMPRESA';
			$objToReturn->intEMPRESAIdEMPRESA = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'PROVEEDOR_idPROVEEDOR', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PROVEEDOR_idPROVEEDOR'] : $strAliasPrefix . 'PROVEEDOR_idPROVEEDOR';
			$objToReturn->intPROVEEDORIdPROVEEDOR = $objDbRow->GetColumn($strAliasName, 'Integer');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaInicio', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaInicio'] : $strAliasPrefix . 'fechaInicio';
			$objToReturn->dttFechaInicio = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaFin', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaFin'] : $strAliasPrefix . 'fechaFin';
			$objToReturn->dttFechaFin = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'fechaFinEstimada', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'fechaFinEstimada'] : $strAliasPrefix . 'fechaFinEstimada';
			$objToReturn->dttFechaFinEstimada = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'numeroProforma', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'numeroProforma'] : $strAliasPrefix . 'numeroProforma';
			$objToReturn->strNumeroProforma = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'numeroCNP', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'numeroCNP'] : $strAliasPrefix . 'numeroCNP';
			$objToReturn->strNumeroCNP = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'vencimientoCNP', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'vencimientoCNP'] : $strAliasPrefix . 'vencimientoCNP';
			$objToReturn->dttVencimientoCNP = $objDbRow->GetColumn($strAliasName, 'Date');
			$strAliasName = array_key_exists($strAliasPrefix . 'status', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'status'] : $strAliasPrefix . 'status';
			$objToReturn->strStatus = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'formaPago', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'formaPago'] : $strAliasPrefix . 'formaPago';
			$objToReturn->strFormaPago = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'tipo', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'tipo'] : $strAliasPrefix . 'tipo';
			$objToReturn->strTipo = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'flete', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'flete'] : $strAliasPrefix . 'flete';
			$objToReturn->fltFlete = $objDbRow->GetColumn($strAliasName, 'Float');
			$strAliasName = array_key_exists($strAliasPrefix . 'seguro', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'seguro'] : $strAliasPrefix . 'seguro';
			$objToReturn->strSeguro = $objDbRow->GetColumn($strAliasName, 'VarChar');
			$strAliasName = array_key_exists($strAliasPrefix . 'PROCESO_idPROCESO', $strColumnAliasArray) ? $strColumnAliasArray[$strAliasPrefix . 'PROCESO_idPROCESO'] : $strAliasPrefix . 'PROCESO_idPROCESO';
			$objToReturn->intPROCESOIdPROCESO = $objDbRow->GetColumn($strAliasName, 'Integer');

			if (isset($arrPreviousItems) && is_array($arrPreviousItems)) {
				foreach ($arrPreviousItems as $objPreviousItem) {
					if ($objToReturn->IdLICENCIA != $objPreviousItem->IdLICENCIA) {
						continue;
					}
					if (array_diff($objPreviousItem->_objCodigoPagoAsLICENCIAIdLICENCIAArray, $objToReturn->_objCodigoPagoAsLICENCIAIdLICENCIAArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray, $objToReturn->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objListaProductoAsLICENCIAIdLICENCIAArray, $objToReturn->_objListaProductoAsLICENCIAIdLICENCIAArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objResponsableAsLICENCIAIdLICENCIAArray, $objToReturn->_objResponsableAsLICENCIAIdLICENCIAArray) != null) {
						continue;
					}
					if (array_diff($objPreviousItem->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray, $objToReturn->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray) != null) {
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
				$strAliasPrefix = 'LICENCIA__';

			// Check for EMPRESAIdEMPRESAObject Early Binding
			$strAlias = $strAliasPrefix . 'EMPRESA_idEMPRESA__idEMPRESA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objEMPRESAIdEMPRESAObject = Empresa::InstantiateDbRow($objDbRow, $strAliasPrefix . 'EMPRESA_idEMPRESA__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PROVEEDORIdPROVEEDORObject Early Binding
			$strAlias = $strAliasPrefix . 'PROVEEDOR_idPROVEEDOR__idPROVEEDOR';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPROVEEDORIdPROVEEDORObject = Proveedor::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PROVEEDOR_idPROVEEDOR__', $strExpandAsArrayNodes, null, $strColumnAliasArray);

			// Check for PROCESOIdPROCESOObject Early Binding
			$strAlias = $strAliasPrefix . 'PROCESO_idPROCESO__idPROCESO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName)))
				$objToReturn->objPROCESOIdPROCESOObject = Proceso::InstantiateDbRow($objDbRow, $strAliasPrefix . 'PROCESO_idPROCESO__', $strExpandAsArrayNodes, null, $strColumnAliasArray);




			// Check for CodigoPagoAsLICENCIAIdLICENCIA Virtual Binding
			$strAlias = $strAliasPrefix . 'codigopagoaslicenciaidlicencia__LICENCIA_idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objCodigoPagoAsLICENCIAIdLICENCIAArray[] = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objCodigoPagoAsLICENCIAIdLICENCIA = CodigoPago::InstantiateDbRow($objDbRow, $strAliasPrefix . 'codigopagoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for EtapaLicenciaAsLICENCIAIdLICENCIA Virtual Binding
			$strAlias = $strAliasPrefix . 'etapalicenciaaslicenciaidlicencia__LICENCIA_idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray[] = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objEtapaLicenciaAsLICENCIAIdLICENCIA = EtapaLicencia::InstantiateDbRow($objDbRow, $strAliasPrefix . 'etapalicenciaaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ListaProductoAsLICENCIAIdLICENCIA Virtual Binding
			$strAlias = $strAliasPrefix . 'listaproductoaslicenciaidlicencia__LICENCIA_idLICENCIA';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objListaProductoAsLICENCIAIdLICENCIAArray[] = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objListaProductoAsLICENCIAIdLICENCIA = ListaProducto::InstantiateDbRow($objDbRow, $strAliasPrefix . 'listaproductoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for ResponsableAsLICENCIAIdLICENCIA Virtual Binding
			$strAlias = $strAliasPrefix . 'responsableaslicenciaidlicencia__EMPLEADO_idEMPLEADO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objResponsableAsLICENCIAIdLICENCIAArray[] = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objResponsableAsLICENCIAIdLICENCIA = Responsable::InstantiateDbRow($objDbRow, $strAliasPrefix . 'responsableaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			// Check for VigenciaDocumentoAsLICENCIAIdLICENCIA Virtual Binding
			$strAlias = $strAliasPrefix . 'vigenciadocumentoaslicenciaidlicencia__LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO';
			$strAliasName = array_key_exists($strAlias, $strColumnAliasArray) ? $strColumnAliasArray[$strAlias] : $strAlias;
			if (!is_null($objDbRow->GetColumn($strAliasName))) {
				if (($strExpandAsArrayNodes) && (array_key_exists($strAlias, $strExpandAsArrayNodes)))
					$objToReturn->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray[] = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
				else
					$objToReturn->_objVigenciaDocumentoAsLICENCIAIdLICENCIA = VigenciaDocumento::InstantiateDbRow($objDbRow, $strAliasPrefix . 'vigenciadocumentoaslicenciaidlicencia__', $strExpandAsArrayNodes, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}

		/**
		 * Instantiate an array of Licencias from a Database Result
		 * @param DatabaseResultBase $objDbResult
		 * @param string $strExpandAsArrayNodes
		 * @param string[] $strColumnAliasArray
		 * @return Licencia[]
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
					$objItem = Licencia::InstantiateDbRow($objDbRow, null, $strExpandAsArrayNodes, $objToReturn, $strColumnAliasArray);
					if ($objItem) {
						$objToReturn[] = $objItem;
					}
				}
			} else {
				while ($objDbRow = $objDbResult->GetNextRow())
					$objToReturn[] = Licencia::InstantiateDbRow($objDbRow, null, null, null, $strColumnAliasArray);
			}

			return $objToReturn;
		}



		///////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Single Load and Array)
		///////////////////////////////////////////////////
			
		/**
		 * Load a single Licencia object,
		 * by IdLICENCIA Index(es)
		 * @param integer $intIdLICENCIA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia
		*/
		public static function LoadByIdLICENCIA($intIdLICENCIA, $objOptionalClauses = null) {
			return Licencia::QuerySingle(
				QQ::AndCondition(
					QQ::Equal(QQN::Licencia()->IdLICENCIA, $intIdLICENCIA)
				),
				$objOptionalClauses
			);
		}
			
		/**
		 * Load an array of Licencia objects,
		 * by EMPRESAIdEMPRESA Index(es)
		 * @param integer $intEMPRESAIdEMPRESA
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia[]
		*/
		public static function LoadArrayByEMPRESAIdEMPRESA($intEMPRESAIdEMPRESA, $objOptionalClauses = null) {
			// Call Licencia::QueryArray to perform the LoadArrayByEMPRESAIdEMPRESA query
			try {
				return Licencia::QueryArray(
					QQ::Equal(QQN::Licencia()->EMPRESAIdEMPRESA, $intEMPRESAIdEMPRESA),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Licencias
		 * by EMPRESAIdEMPRESA Index(es)
		 * @param integer $intEMPRESAIdEMPRESA
		 * @return int
		*/
		public static function CountByEMPRESAIdEMPRESA($intEMPRESAIdEMPRESA) {
			// Call Licencia::QueryCount to perform the CountByEMPRESAIdEMPRESA query
			return Licencia::QueryCount(
				QQ::Equal(QQN::Licencia()->EMPRESAIdEMPRESA, $intEMPRESAIdEMPRESA)
			);
		}
			
		/**
		 * Load an array of Licencia objects,
		 * by PROVEEDORIdPROVEEDOR Index(es)
		 * @param integer $intPROVEEDORIdPROVEEDOR
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia[]
		*/
		public static function LoadArrayByPROVEEDORIdPROVEEDOR($intPROVEEDORIdPROVEEDOR, $objOptionalClauses = null) {
			// Call Licencia::QueryArray to perform the LoadArrayByPROVEEDORIdPROVEEDOR query
			try {
				return Licencia::QueryArray(
					QQ::Equal(QQN::Licencia()->PROVEEDORIdPROVEEDOR, $intPROVEEDORIdPROVEEDOR),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Licencias
		 * by PROVEEDORIdPROVEEDOR Index(es)
		 * @param integer $intPROVEEDORIdPROVEEDOR
		 * @return int
		*/
		public static function CountByPROVEEDORIdPROVEEDOR($intPROVEEDORIdPROVEEDOR) {
			// Call Licencia::QueryCount to perform the CountByPROVEEDORIdPROVEEDOR query
			return Licencia::QueryCount(
				QQ::Equal(QQN::Licencia()->PROVEEDORIdPROVEEDOR, $intPROVEEDORIdPROVEEDOR)
			);
		}
			
		/**
		 * Load an array of Licencia objects,
		 * by PROCESOIdPROCESO Index(es)
		 * @param integer $intPROCESOIdPROCESO
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Licencia[]
		*/
		public static function LoadArrayByPROCESOIdPROCESO($intPROCESOIdPROCESO, $objOptionalClauses = null) {
			// Call Licencia::QueryArray to perform the LoadArrayByPROCESOIdPROCESO query
			try {
				return Licencia::QueryArray(
					QQ::Equal(QQN::Licencia()->PROCESOIdPROCESO, $intPROCESOIdPROCESO),
					$objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Count Licencias
		 * by PROCESOIdPROCESO Index(es)
		 * @param integer $intPROCESOIdPROCESO
		 * @return int
		*/
		public static function CountByPROCESOIdPROCESO($intPROCESOIdPROCESO) {
			// Call Licencia::QueryCount to perform the CountByPROCESOIdPROCESO query
			return Licencia::QueryCount(
				QQ::Equal(QQN::Licencia()->PROCESOIdPROCESO, $intPROCESOIdPROCESO)
			);
		}



		////////////////////////////////////////////////////
		// INDEX-BASED LOAD METHODS (Array via Many to Many)
		////////////////////////////////////////////////////




		//////////////////////////
		// SAVE, DELETE AND RELOAD
		//////////////////////////

		/**
		 * Save this Licencia
		 * @param bool $blnForceInsert
		 * @param bool $blnForceUpdate
		 * @return int
		 */
		public function Save($blnForceInsert = false, $blnForceUpdate = false) {
			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			$mixToReturn = null;

			try {
				if ((!$this->__blnRestored) || ($blnForceInsert)) {
					// Perform an INSERT query
					$objDatabase->NonQuery('
						INSERT INTO `LICENCIA` (
							`EMPRESA_idEMPRESA`,
							`PROVEEDOR_idPROVEEDOR`,
							`fechaInicio`,
							`fechaFin`,
							`fechaFinEstimada`,
							`numeroProforma`,
							`numeroCNP`,
							`vencimientoCNP`,
							`status`,
							`formaPago`,
							`tipo`,
							`flete`,
							`seguro`,
							`PROCESO_idPROCESO`
						) VALUES (
							' . $objDatabase->SqlVariable($this->intEMPRESAIdEMPRESA) . ',
							' . $objDatabase->SqlVariable($this->intPROVEEDORIdPROVEEDOR) . ',
							' . $objDatabase->SqlVariable($this->dttFechaInicio) . ',
							' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
							' . $objDatabase->SqlVariable($this->dttFechaFinEstimada) . ',
							' . $objDatabase->SqlVariable($this->strNumeroProforma) . ',
							' . $objDatabase->SqlVariable($this->strNumeroCNP) . ',
							' . $objDatabase->SqlVariable($this->dttVencimientoCNP) . ',
							' . $objDatabase->SqlVariable($this->strStatus) . ',
							' . $objDatabase->SqlVariable($this->strFormaPago) . ',
							' . $objDatabase->SqlVariable($this->strTipo) . ',
							' . $objDatabase->SqlVariable($this->fltFlete) . ',
							' . $objDatabase->SqlVariable($this->strSeguro) . ',
							' . $objDatabase->SqlVariable($this->intPROCESOIdPROCESO) . '
						)
					');

					// Update Identity column and return its value
					$mixToReturn = $this->intIdLICENCIA = $objDatabase->InsertId('LICENCIA', 'idLICENCIA');
				} else {
					// Perform an UPDATE query

					// First checking for Optimistic Locking constraints (if applicable)

					// Perform the UPDATE query
					$objDatabase->NonQuery('
						UPDATE
							`LICENCIA`
						SET
							`EMPRESA_idEMPRESA` = ' . $objDatabase->SqlVariable($this->intEMPRESAIdEMPRESA) . ',
							`PROVEEDOR_idPROVEEDOR` = ' . $objDatabase->SqlVariable($this->intPROVEEDORIdPROVEEDOR) . ',
							`fechaInicio` = ' . $objDatabase->SqlVariable($this->dttFechaInicio) . ',
							`fechaFin` = ' . $objDatabase->SqlVariable($this->dttFechaFin) . ',
							`fechaFinEstimada` = ' . $objDatabase->SqlVariable($this->dttFechaFinEstimada) . ',
							`numeroProforma` = ' . $objDatabase->SqlVariable($this->strNumeroProforma) . ',
							`numeroCNP` = ' . $objDatabase->SqlVariable($this->strNumeroCNP) . ',
							`vencimientoCNP` = ' . $objDatabase->SqlVariable($this->dttVencimientoCNP) . ',
							`status` = ' . $objDatabase->SqlVariable($this->strStatus) . ',
							`formaPago` = ' . $objDatabase->SqlVariable($this->strFormaPago) . ',
							`tipo` = ' . $objDatabase->SqlVariable($this->strTipo) . ',
							`flete` = ' . $objDatabase->SqlVariable($this->fltFlete) . ',
							`seguro` = ' . $objDatabase->SqlVariable($this->strSeguro) . ',
							`PROCESO_idPROCESO` = ' . $objDatabase->SqlVariable($this->intPROCESOIdPROCESO) . '
						WHERE
							`idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
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
		 * Delete this Licencia
		 * @return void
		 */
		public function Delete() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Cannot delete this Licencia with an unset primary key.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();


			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`
				WHERE
					`idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '');
		}

		/**
		 * Delete all Licencias
		 * @return void
		 */
		public static function DeleteAll() {
			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LICENCIA`');
		}

		/**
		 * Truncate LICENCIA table
		 * @return void
		 */
		public static function Truncate() {
			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the Query
			$objDatabase->NonQuery('
				TRUNCATE `LICENCIA`');
		}

		/**
		 * Reload this Licencia from the database.
		 * @return void
		 */
		public function Reload() {
			// Make sure we are actually Restored from the database
			if (!$this->__blnRestored)
				throw new QCallerException('Cannot call Reload() on a new, unsaved Licencia object.');

			// Reload the Object
			$objReloaded = Licencia::Load($this->intIdLICENCIA);

			// Update $this's local variables to match
			$this->EMPRESAIdEMPRESA = $objReloaded->EMPRESAIdEMPRESA;
			$this->PROVEEDORIdPROVEEDOR = $objReloaded->PROVEEDORIdPROVEEDOR;
			$this->dttFechaInicio = $objReloaded->dttFechaInicio;
			$this->dttFechaFin = $objReloaded->dttFechaFin;
			$this->dttFechaFinEstimada = $objReloaded->dttFechaFinEstimada;
			$this->strNumeroProforma = $objReloaded->strNumeroProforma;
			$this->strNumeroCNP = $objReloaded->strNumeroCNP;
			$this->dttVencimientoCNP = $objReloaded->dttVencimientoCNP;
			$this->strStatus = $objReloaded->strStatus;
			$this->strFormaPago = $objReloaded->strFormaPago;
			$this->strTipo = $objReloaded->strTipo;
			$this->fltFlete = $objReloaded->fltFlete;
			$this->strSeguro = $objReloaded->strSeguro;
			$this->PROCESOIdPROCESO = $objReloaded->PROCESOIdPROCESO;
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
				case 'IdLICENCIA':
					/**
					 * Gets the value for intIdLICENCIA (Read-Only PK)
					 * @return integer
					 */
					return $this->intIdLICENCIA;

				case 'EMPRESAIdEMPRESA':
					/**
					 * Gets the value for intEMPRESAIdEMPRESA (Not Null)
					 * @return integer
					 */
					return $this->intEMPRESAIdEMPRESA;

				case 'PROVEEDORIdPROVEEDOR':
					/**
					 * Gets the value for intPROVEEDORIdPROVEEDOR (Not Null)
					 * @return integer
					 */
					return $this->intPROVEEDORIdPROVEEDOR;

				case 'FechaInicio':
					/**
					 * Gets the value for dttFechaInicio (Not Null)
					 * @return QDateTime
					 */
					return $this->dttFechaInicio;

				case 'FechaFin':
					/**
					 * Gets the value for dttFechaFin 
					 * @return QDateTime
					 */
					return $this->dttFechaFin;

				case 'FechaFinEstimada':
					/**
					 * Gets the value for dttFechaFinEstimada 
					 * @return QDateTime
					 */
					return $this->dttFechaFinEstimada;

				case 'NumeroProforma':
					/**
					 * Gets the value for strNumeroProforma (Not Null)
					 * @return string
					 */
					return $this->strNumeroProforma;

				case 'NumeroCNP':
					/**
					 * Gets the value for strNumeroCNP 
					 * @return string
					 */
					return $this->strNumeroCNP;

				case 'VencimientoCNP':
					/**
					 * Gets the value for dttVencimientoCNP 
					 * @return QDateTime
					 */
					return $this->dttVencimientoCNP;

				case 'Status':
					/**
					 * Gets the value for strStatus (Not Null)
					 * @return string
					 */
					return $this->strStatus;

				case 'FormaPago':
					/**
					 * Gets the value for strFormaPago 
					 * @return string
					 */
					return $this->strFormaPago;

				case 'Tipo':
					/**
					 * Gets the value for strTipo 
					 * @return string
					 */
					return $this->strTipo;

				case 'Flete':
					/**
					 * Gets the value for fltFlete 
					 * @return double
					 */
					return $this->fltFlete;

				case 'Seguro':
					/**
					 * Gets the value for strSeguro 
					 * @return string
					 */
					return $this->strSeguro;

				case 'PROCESOIdPROCESO':
					/**
					 * Gets the value for intPROCESOIdPROCESO (Not Null)
					 * @return integer
					 */
					return $this->intPROCESOIdPROCESO;


				///////////////////
				// Member Objects
				///////////////////
				case 'EMPRESAIdEMPRESAObject':
					/**
					 * Gets the value for the Empresa object referenced by intEMPRESAIdEMPRESA (Not Null)
					 * @return Empresa
					 */
					try {
						if ((!$this->objEMPRESAIdEMPRESAObject) && (!is_null($this->intEMPRESAIdEMPRESA)))
							$this->objEMPRESAIdEMPRESAObject = Empresa::Load($this->intEMPRESAIdEMPRESA);
						return $this->objEMPRESAIdEMPRESAObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PROVEEDORIdPROVEEDORObject':
					/**
					 * Gets the value for the Proveedor object referenced by intPROVEEDORIdPROVEEDOR (Not Null)
					 * @return Proveedor
					 */
					try {
						if ((!$this->objPROVEEDORIdPROVEEDORObject) && (!is_null($this->intPROVEEDORIdPROVEEDOR)))
							$this->objPROVEEDORIdPROVEEDORObject = Proveedor::Load($this->intPROVEEDORIdPROVEEDOR);
						return $this->objPROVEEDORIdPROVEEDORObject;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PROCESOIdPROCESOObject':
					/**
					 * Gets the value for the Proceso object referenced by intPROCESOIdPROCESO (Not Null)
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


				////////////////////////////
				// Virtual Object References (Many to Many and Reverse References)
				// (If restored via a "Many-to" expansion)
				////////////////////////////

				case '_CodigoPagoAsLICENCIAIdLICENCIA':
					/**
					 * Gets the value for the private _objCodigoPagoAsLICENCIAIdLICENCIA (Read-Only)
					 * if set due to an expansion on the CODIGO_PAGO.LICENCIA_idLICENCIA reverse relationship
					 * @return CodigoPago
					 */
					return $this->_objCodigoPagoAsLICENCIAIdLICENCIA;

				case '_CodigoPagoAsLICENCIAIdLICENCIAArray':
					/**
					 * Gets the value for the private _objCodigoPagoAsLICENCIAIdLICENCIAArray (Read-Only)
					 * if set due to an ExpandAsArray on the CODIGO_PAGO.LICENCIA_idLICENCIA reverse relationship
					 * @return CodigoPago[]
					 */
					return (array) $this->_objCodigoPagoAsLICENCIAIdLICENCIAArray;

				case '_EtapaLicenciaAsLICENCIAIdLICENCIA':
					/**
					 * Gets the value for the private _objEtapaLicenciaAsLICENCIAIdLICENCIA (Read-Only)
					 * if set due to an expansion on the ETAPA_LICENCIA.LICENCIA_idLICENCIA reverse relationship
					 * @return EtapaLicencia
					 */
					return $this->_objEtapaLicenciaAsLICENCIAIdLICENCIA;

				case '_EtapaLicenciaAsLICENCIAIdLICENCIAArray':
					/**
					 * Gets the value for the private _objEtapaLicenciaAsLICENCIAIdLICENCIAArray (Read-Only)
					 * if set due to an ExpandAsArray on the ETAPA_LICENCIA.LICENCIA_idLICENCIA reverse relationship
					 * @return EtapaLicencia[]
					 */
					return (array) $this->_objEtapaLicenciaAsLICENCIAIdLICENCIAArray;

				case '_ListaProductoAsLICENCIAIdLICENCIA':
					/**
					 * Gets the value for the private _objListaProductoAsLICENCIAIdLICENCIA (Read-Only)
					 * if set due to an expansion on the LISTA_PRODUCTO.LICENCIA_idLICENCIA reverse relationship
					 * @return ListaProducto
					 */
					return $this->_objListaProductoAsLICENCIAIdLICENCIA;

				case '_ListaProductoAsLICENCIAIdLICENCIAArray':
					/**
					 * Gets the value for the private _objListaProductoAsLICENCIAIdLICENCIAArray (Read-Only)
					 * if set due to an ExpandAsArray on the LISTA_PRODUCTO.LICENCIA_idLICENCIA reverse relationship
					 * @return ListaProducto[]
					 */
					return (array) $this->_objListaProductoAsLICENCIAIdLICENCIAArray;

				case '_ResponsableAsLICENCIAIdLICENCIA':
					/**
					 * Gets the value for the private _objResponsableAsLICENCIAIdLICENCIA (Read-Only)
					 * if set due to an expansion on the RESPONSABLE.LICENCIA_idLICENCIA reverse relationship
					 * @return Responsable
					 */
					return $this->_objResponsableAsLICENCIAIdLICENCIA;

				case '_ResponsableAsLICENCIAIdLICENCIAArray':
					/**
					 * Gets the value for the private _objResponsableAsLICENCIAIdLICENCIAArray (Read-Only)
					 * if set due to an ExpandAsArray on the RESPONSABLE.LICENCIA_idLICENCIA reverse relationship
					 * @return Responsable[]
					 */
					return (array) $this->_objResponsableAsLICENCIAIdLICENCIAArray;

				case '_VigenciaDocumentoAsLICENCIAIdLICENCIA':
					/**
					 * Gets the value for the private _objVigenciaDocumentoAsLICENCIAIdLICENCIA (Read-Only)
					 * if set due to an expansion on the VIGENCIA_DOCUMENTO.LICENCIA_idLICENCIA reverse relationship
					 * @return VigenciaDocumento
					 */
					return $this->_objVigenciaDocumentoAsLICENCIAIdLICENCIA;

				case '_VigenciaDocumentoAsLICENCIAIdLICENCIAArray':
					/**
					 * Gets the value for the private _objVigenciaDocumentoAsLICENCIAIdLICENCIAArray (Read-Only)
					 * if set due to an ExpandAsArray on the VIGENCIA_DOCUMENTO.LICENCIA_idLICENCIA reverse relationship
					 * @return VigenciaDocumento[]
					 */
					return (array) $this->_objVigenciaDocumentoAsLICENCIAIdLICENCIAArray;


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
				case 'EMPRESAIdEMPRESA':
					/**
					 * Sets the value for intEMPRESAIdEMPRESA (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objEMPRESAIdEMPRESAObject = null;
						return ($this->intEMPRESAIdEMPRESA = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PROVEEDORIdPROVEEDOR':
					/**
					 * Sets the value for intPROVEEDORIdPROVEEDOR (Not Null)
					 * @param integer $mixValue
					 * @return integer
					 */
					try {
						$this->objPROVEEDORIdPROVEEDORObject = null;
						return ($this->intPROVEEDORIdPROVEEDOR = QType::Cast($mixValue, QType::Integer));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaInicio':
					/**
					 * Sets the value for dttFechaInicio (Not Null)
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaInicio = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaFin':
					/**
					 * Sets the value for dttFechaFin 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaFin = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FechaFinEstimada':
					/**
					 * Sets the value for dttFechaFinEstimada 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttFechaFinEstimada = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NumeroProforma':
					/**
					 * Sets the value for strNumeroProforma (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNumeroProforma = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'NumeroCNP':
					/**
					 * Sets the value for strNumeroCNP 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strNumeroCNP = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'VencimientoCNP':
					/**
					 * Sets the value for dttVencimientoCNP 
					 * @param QDateTime $mixValue
					 * @return QDateTime
					 */
					try {
						return ($this->dttVencimientoCNP = QType::Cast($mixValue, QType::DateTime));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Status':
					/**
					 * Sets the value for strStatus (Not Null)
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strStatus = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'FormaPago':
					/**
					 * Sets the value for strFormaPago 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strFormaPago = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Tipo':
					/**
					 * Sets the value for strTipo 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strTipo = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Flete':
					/**
					 * Sets the value for fltFlete 
					 * @param double $mixValue
					 * @return double
					 */
					try {
						return ($this->fltFlete = QType::Cast($mixValue, QType::Float));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'Seguro':
					/**
					 * Sets the value for strSeguro 
					 * @param string $mixValue
					 * @return string
					 */
					try {
						return ($this->strSeguro = QType::Cast($mixValue, QType::String));
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}

				case 'PROCESOIdPROCESO':
					/**
					 * Sets the value for intPROCESOIdPROCESO (Not Null)
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


				///////////////////
				// Member Objects
				///////////////////
				case 'EMPRESAIdEMPRESAObject':
					/**
					 * Sets the value for the Empresa object referenced by intEMPRESAIdEMPRESA (Not Null)
					 * @param Empresa $mixValue
					 * @return Empresa
					 */
					if (is_null($mixValue)) {
						$this->intEMPRESAIdEMPRESA = null;
						$this->objEMPRESAIdEMPRESAObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Empresa object
						try {
							$mixValue = QType::Cast($mixValue, 'Empresa');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Empresa object
						if (is_null($mixValue->IdEMPRESA))
							throw new QCallerException('Unable to set an unsaved EMPRESAIdEMPRESAObject for this Licencia');

						// Update Local Member Variables
						$this->objEMPRESAIdEMPRESAObject = $mixValue;
						$this->intEMPRESAIdEMPRESA = $mixValue->IdEMPRESA;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PROVEEDORIdPROVEEDORObject':
					/**
					 * Sets the value for the Proveedor object referenced by intPROVEEDORIdPROVEEDOR (Not Null)
					 * @param Proveedor $mixValue
					 * @return Proveedor
					 */
					if (is_null($mixValue)) {
						$this->intPROVEEDORIdPROVEEDOR = null;
						$this->objPROVEEDORIdPROVEEDORObject = null;
						return null;
					} else {
						// Make sure $mixValue actually is a Proveedor object
						try {
							$mixValue = QType::Cast($mixValue, 'Proveedor');
						} catch (QInvalidCastException $objExc) {
							$objExc->IncrementOffset();
							throw $objExc;
						} 

						// Make sure $mixValue is a SAVED Proveedor object
						if (is_null($mixValue->IdPROVEEDOR))
							throw new QCallerException('Unable to set an unsaved PROVEEDORIdPROVEEDORObject for this Licencia');

						// Update Local Member Variables
						$this->objPROVEEDORIdPROVEEDORObject = $mixValue;
						$this->intPROVEEDORIdPROVEEDOR = $mixValue->IdPROVEEDOR;

						// Return $mixValue
						return $mixValue;
					}
					break;

				case 'PROCESOIdPROCESOObject':
					/**
					 * Sets the value for the Proceso object referenced by intPROCESOIdPROCESO (Not Null)
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
							throw new QCallerException('Unable to set an unsaved PROCESOIdPROCESOObject for this Licencia');

						// Update Local Member Variables
						$this->objPROCESOIdPROCESOObject = $mixValue;
						$this->intPROCESOIdPROCESO = $mixValue->IdPROCESO;

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

			
		
		// Related Objects' Methods for CodigoPagoAsLICENCIAIdLICENCIA
		//-------------------------------------------------------------------

		/**
		 * Gets all associated CodigoPagosAsLICENCIAIdLICENCIA as an array of CodigoPago objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return CodigoPago[]
		*/ 
		public function GetCodigoPagoAsLICENCIAIdLICENCIAArray($objOptionalClauses = null) {
			if ((is_null($this->intIdLICENCIA)))
				return array();

			try {
				return CodigoPago::LoadArrayByLICENCIAIdLICENCIA($this->intIdLICENCIA, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated CodigoPagosAsLICENCIAIdLICENCIA
		 * @return int
		*/ 
		public function CountCodigoPagosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				return 0;

			return CodigoPago::CountByLICENCIAIdLICENCIA($this->intIdLICENCIA);
		}

		/**
		 * Associates a CodigoPagoAsLICENCIAIdLICENCIA
		 * @param CodigoPago $objCodigoPago
		 * @return void
		*/ 
		public function AssociateCodigoPagoAsLICENCIAIdLICENCIA(CodigoPago $objCodigoPago) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCodigoPagoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objCodigoPago->LICENCIAIdLICENCIA)) || (is_null($objCodigoPago->TIPODEPAGOIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateCodigoPagoAsLICENCIAIdLICENCIA on this Licencia with an unsaved CodigoPago.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`CODIGO_PAGO`
				SET
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objCodigoPago->LICENCIAIdLICENCIA) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($objCodigoPago->TIPODEPAGOIdTIPODEPAGO) . '
			');
		}

		/**
		 * Unassociates a CodigoPagoAsLICENCIAIdLICENCIA
		 * @param CodigoPago $objCodigoPago
		 * @return void
		*/ 
		public function UnassociateCodigoPagoAsLICENCIAIdLICENCIA(CodigoPago $objCodigoPago) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objCodigoPago->LICENCIAIdLICENCIA)) || (is_null($objCodigoPago->TIPODEPAGOIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsLICENCIAIdLICENCIA on this Licencia with an unsaved CodigoPago.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`CODIGO_PAGO`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objCodigoPago->LICENCIAIdLICENCIA) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($objCodigoPago->TIPODEPAGOIdTIPODEPAGO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates all CodigoPagosAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function UnassociateAllCodigoPagosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`CODIGO_PAGO`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes an associated CodigoPagoAsLICENCIAIdLICENCIA
		 * @param CodigoPago $objCodigoPago
		 * @return void
		*/ 
		public function DeleteAssociatedCodigoPagoAsLICENCIAIdLICENCIA(CodigoPago $objCodigoPago) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objCodigoPago->LICENCIAIdLICENCIA)) || (is_null($objCodigoPago->TIPODEPAGOIdTIPODEPAGO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsLICENCIAIdLICENCIA on this Licencia with an unsaved CodigoPago.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`CODIGO_PAGO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objCodigoPago->LICENCIAIdLICENCIA) . ' AND
					`TIPO_DE_PAGO_idTIPO_DE_PAGO` = ' . $objDatabase->SqlVariable($objCodigoPago->TIPODEPAGOIdTIPODEPAGO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes all associated CodigoPagosAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function DeleteAllCodigoPagosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateCodigoPagoAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`CODIGO_PAGO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

			
		
		// Related Objects' Methods for EtapaLicenciaAsLICENCIAIdLICENCIA
		//-------------------------------------------------------------------

		/**
		 * Gets all associated EtapaLicenciasAsLICENCIAIdLICENCIA as an array of EtapaLicencia objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return EtapaLicencia[]
		*/ 
		public function GetEtapaLicenciaAsLICENCIAIdLICENCIAArray($objOptionalClauses = null) {
			if ((is_null($this->intIdLICENCIA)))
				return array();

			try {
				return EtapaLicencia::LoadArrayByLICENCIAIdLICENCIA($this->intIdLICENCIA, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated EtapaLicenciasAsLICENCIAIdLICENCIA
		 * @return int
		*/ 
		public function CountEtapaLicenciasAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				return 0;

			return EtapaLicencia::CountByLICENCIAIdLICENCIA($this->intIdLICENCIA);
		}

		/**
		 * Associates a EtapaLicenciaAsLICENCIAIdLICENCIA
		 * @param EtapaLicencia $objEtapaLicencia
		 * @return void
		*/ 
		public function AssociateEtapaLicenciaAsLICENCIAIdLICENCIA(EtapaLicencia $objEtapaLicencia) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaLicenciaAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objEtapaLicencia->LICENCIAIdLICENCIA)) || (is_null($objEtapaLicencia->ETAPAIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateEtapaLicenciaAsLICENCIAIdLICENCIA on this Licencia with an unsaved EtapaLicencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA_LICENCIA`
				SET
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->LICENCIAIdLICENCIA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->ETAPAIdETAPA) . '
			');
		}

		/**
		 * Unassociates a EtapaLicenciaAsLICENCIAIdLICENCIA
		 * @param EtapaLicencia $objEtapaLicencia
		 * @return void
		*/ 
		public function UnassociateEtapaLicenciaAsLICENCIAIdLICENCIA(EtapaLicencia $objEtapaLicencia) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objEtapaLicencia->LICENCIAIdLICENCIA)) || (is_null($objEtapaLicencia->ETAPAIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsLICENCIAIdLICENCIA on this Licencia with an unsaved EtapaLicencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA_LICENCIA`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->LICENCIAIdLICENCIA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->ETAPAIdETAPA) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates all EtapaLicenciasAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function UnassociateAllEtapaLicenciasAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`ETAPA_LICENCIA`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes an associated EtapaLicenciaAsLICENCIAIdLICENCIA
		 * @param EtapaLicencia $objEtapaLicencia
		 * @return void
		*/ 
		public function DeleteAssociatedEtapaLicenciaAsLICENCIAIdLICENCIA(EtapaLicencia $objEtapaLicencia) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objEtapaLicencia->LICENCIAIdLICENCIA)) || (is_null($objEtapaLicencia->ETAPAIdETAPA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsLICENCIAIdLICENCIA on this Licencia with an unsaved EtapaLicencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA_LICENCIA`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->LICENCIAIdLICENCIA) . ' AND
					`ETAPA_idETAPA` = ' . $objDatabase->SqlVariable($objEtapaLicencia->ETAPAIdETAPA) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes all associated EtapaLicenciasAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function DeleteAllEtapaLicenciasAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateEtapaLicenciaAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`ETAPA_LICENCIA`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

			
		
		// Related Objects' Methods for ListaProductoAsLICENCIAIdLICENCIA
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ListaProductosAsLICENCIAIdLICENCIA as an array of ListaProducto objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return ListaProducto[]
		*/ 
		public function GetListaProductoAsLICENCIAIdLICENCIAArray($objOptionalClauses = null) {
			if ((is_null($this->intIdLICENCIA)))
				return array();

			try {
				return ListaProducto::LoadArrayByLICENCIAIdLICENCIA($this->intIdLICENCIA, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ListaProductosAsLICENCIAIdLICENCIA
		 * @return int
		*/ 
		public function CountListaProductosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				return 0;

			return ListaProducto::CountByLICENCIAIdLICENCIA($this->intIdLICENCIA);
		}

		/**
		 * Associates a ListaProductoAsLICENCIAIdLICENCIA
		 * @param ListaProducto $objListaProducto
		 * @return void
		*/ 
		public function AssociateListaProductoAsLICENCIAIdLICENCIA(ListaProducto $objListaProducto) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaProductoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objListaProducto->LICENCIAIdLICENCIA)) || (is_null($objListaProducto->PRODUCTOIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateListaProductoAsLICENCIAIdLICENCIA on this Licencia with an unsaved ListaProducto.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_PRODUCTO`
				SET
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objListaProducto->LICENCIAIdLICENCIA) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($objListaProducto->PRODUCTOIdPRODUCTO) . '
			');
		}

		/**
		 * Unassociates a ListaProductoAsLICENCIAIdLICENCIA
		 * @param ListaProducto $objListaProducto
		 * @return void
		*/ 
		public function UnassociateListaProductoAsLICENCIAIdLICENCIA(ListaProducto $objListaProducto) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objListaProducto->LICENCIAIdLICENCIA)) || (is_null($objListaProducto->PRODUCTOIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsLICENCIAIdLICENCIA on this Licencia with an unsaved ListaProducto.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_PRODUCTO`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objListaProducto->LICENCIAIdLICENCIA) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($objListaProducto->PRODUCTOIdPRODUCTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates all ListaProductosAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function UnassociateAllListaProductosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`LISTA_PRODUCTO`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes an associated ListaProductoAsLICENCIAIdLICENCIA
		 * @param ListaProducto $objListaProducto
		 * @return void
		*/ 
		public function DeleteAssociatedListaProductoAsLICENCIAIdLICENCIA(ListaProducto $objListaProducto) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objListaProducto->LICENCIAIdLICENCIA)) || (is_null($objListaProducto->PRODUCTOIdPRODUCTO)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsLICENCIAIdLICENCIA on this Licencia with an unsaved ListaProducto.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_PRODUCTO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objListaProducto->LICENCIAIdLICENCIA) . ' AND
					`PRODUCTO_idPRODUCTO` = ' . $objDatabase->SqlVariable($objListaProducto->PRODUCTOIdPRODUCTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes all associated ListaProductosAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function DeleteAllListaProductosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateListaProductoAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`LISTA_PRODUCTO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

			
		
		// Related Objects' Methods for ResponsableAsLICENCIAIdLICENCIA
		//-------------------------------------------------------------------

		/**
		 * Gets all associated ResponsablesAsLICENCIAIdLICENCIA as an array of Responsable objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return Responsable[]
		*/ 
		public function GetResponsableAsLICENCIAIdLICENCIAArray($objOptionalClauses = null) {
			if ((is_null($this->intIdLICENCIA)))
				return array();

			try {
				return Responsable::LoadArrayByLICENCIAIdLICENCIA($this->intIdLICENCIA, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated ResponsablesAsLICENCIAIdLICENCIA
		 * @return int
		*/ 
		public function CountResponsablesAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				return 0;

			return Responsable::CountByLICENCIAIdLICENCIA($this->intIdLICENCIA);
		}

		/**
		 * Associates a ResponsableAsLICENCIAIdLICENCIA
		 * @param Responsable $objResponsable
		 * @return void
		*/ 
		public function AssociateResponsableAsLICENCIAIdLICENCIA(Responsable $objResponsable) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResponsableAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objResponsable->EMPLEADOIdEMPLEADO)) || (is_null($objResponsable->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateResponsableAsLICENCIAIdLICENCIA on this Licencia with an unsaved Responsable.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`RESPONSABLE`
				SET
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($objResponsable->EMPLEADOIdEMPLEADO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objResponsable->LICENCIAIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates a ResponsableAsLICENCIAIdLICENCIA
		 * @param Responsable $objResponsable
		 * @return void
		*/ 
		public function UnassociateResponsableAsLICENCIAIdLICENCIA(Responsable $objResponsable) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objResponsable->EMPLEADOIdEMPLEADO)) || (is_null($objResponsable->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsLICENCIAIdLICENCIA on this Licencia with an unsaved Responsable.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`RESPONSABLE`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($objResponsable->EMPLEADOIdEMPLEADO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objResponsable->LICENCIAIdLICENCIA) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates all ResponsablesAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function UnassociateAllResponsablesAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`RESPONSABLE`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes an associated ResponsableAsLICENCIAIdLICENCIA
		 * @param Responsable $objResponsable
		 * @return void
		*/ 
		public function DeleteAssociatedResponsableAsLICENCIAIdLICENCIA(Responsable $objResponsable) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objResponsable->EMPLEADOIdEMPLEADO)) || (is_null($objResponsable->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsLICENCIAIdLICENCIA on this Licencia with an unsaved Responsable.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`RESPONSABLE`
				WHERE
					`EMPLEADO_idEMPLEADO` = ' . $objDatabase->SqlVariable($objResponsable->EMPLEADOIdEMPLEADO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objResponsable->LICENCIAIdLICENCIA) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes all associated ResponsablesAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function DeleteAllResponsablesAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateResponsableAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`RESPONSABLE`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

			
		
		// Related Objects' Methods for VigenciaDocumentoAsLICENCIAIdLICENCIA
		//-------------------------------------------------------------------

		/**
		 * Gets all associated VigenciaDocumentosAsLICENCIAIdLICENCIA as an array of VigenciaDocumento objects
		 * @param QQClause[] $objOptionalClauses additional optional QQClause objects for this query
		 * @return VigenciaDocumento[]
		*/ 
		public function GetVigenciaDocumentoAsLICENCIAIdLICENCIAArray($objOptionalClauses = null) {
			if ((is_null($this->intIdLICENCIA)))
				return array();

			try {
				return VigenciaDocumento::LoadArrayByLICENCIAIdLICENCIA($this->intIdLICENCIA, $objOptionalClauses);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * Counts all associated VigenciaDocumentosAsLICENCIAIdLICENCIA
		 * @return int
		*/ 
		public function CountVigenciaDocumentosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				return 0;

			return VigenciaDocumento::CountByLICENCIAIdLICENCIA($this->intIdLICENCIA);
		}

		/**
		 * Associates a VigenciaDocumentoAsLICENCIAIdLICENCIA
		 * @param VigenciaDocumento $objVigenciaDocumento
		 * @return void
		*/ 
		public function AssociateVigenciaDocumentoAsLICENCIAIdLICENCIA(VigenciaDocumento $objVigenciaDocumento) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO)) || (is_null($objVigenciaDocumento->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call AssociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this Licencia with an unsaved VigenciaDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`VIGENCIA_DOCUMENTO`
				SET
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LICENCIAIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates a VigenciaDocumentoAsLICENCIAIdLICENCIA
		 * @param VigenciaDocumento $objVigenciaDocumento
		 * @return void
		*/ 
		public function UnassociateVigenciaDocumentoAsLICENCIAIdLICENCIA(VigenciaDocumento $objVigenciaDocumento) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO)) || (is_null($objVigenciaDocumento->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this Licencia with an unsaved VigenciaDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`VIGENCIA_DOCUMENTO`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LICENCIAIdLICENCIA) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Unassociates all VigenciaDocumentosAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function UnassociateAllVigenciaDocumentosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				UPDATE
					`VIGENCIA_DOCUMENTO`
				SET
					`LICENCIA_idLICENCIA` = null
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes an associated VigenciaDocumentoAsLICENCIAIdLICENCIA
		 * @param VigenciaDocumento $objVigenciaDocumento
		 * @return void
		*/ 
		public function DeleteAssociatedVigenciaDocumentoAsLICENCIAIdLICENCIA(VigenciaDocumento $objVigenciaDocumento) {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this unsaved Licencia.');
			if ((is_null($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO)) || (is_null($objVigenciaDocumento->LICENCIAIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this Licencia with an unsaved VigenciaDocumento.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`VIGENCIA_DOCUMENTO`
				WHERE
					`LISTA_DE_DOCUMENTO_DOCUMENTO_idDOCUMENTO` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($objVigenciaDocumento->LICENCIAIdLICENCIA) . ' AND
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}

		/**
		 * Deletes all associated VigenciaDocumentosAsLICENCIAIdLICENCIA
		 * @return void
		*/ 
		public function DeleteAllVigenciaDocumentosAsLICENCIAIdLICENCIA() {
			if ((is_null($this->intIdLICENCIA)))
				throw new QUndefinedPrimaryKeyException('Unable to call UnassociateVigenciaDocumentoAsLICENCIAIdLICENCIA on this unsaved Licencia.');

			// Get the Database Object for this Class
			$objDatabase = Licencia::GetDatabase();

			// Perform the SQL Query
			$objDatabase->NonQuery('
				DELETE FROM
					`VIGENCIA_DOCUMENTO`
				WHERE
					`LICENCIA_idLICENCIA` = ' . $objDatabase->SqlVariable($this->intIdLICENCIA) . '
			');
		}





		////////////////////////////////////////
		// METHODS for SOAP-BASED WEB SERVICES
		////////////////////////////////////////

		public static function GetSoapComplexTypeXml() {
			$strToReturn = '<complexType name="Licencia"><sequence>';
			$strToReturn .= '<element name="IdLICENCIA" type="xsd:int"/>';
			$strToReturn .= '<element name="EMPRESAIdEMPRESAObject" type="xsd1:Empresa"/>';
			$strToReturn .= '<element name="PROVEEDORIdPROVEEDORObject" type="xsd1:Proveedor"/>';
			$strToReturn .= '<element name="FechaInicio" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaFin" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="FechaFinEstimada" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="NumeroProforma" type="xsd:string"/>';
			$strToReturn .= '<element name="NumeroCNP" type="xsd:string"/>';
			$strToReturn .= '<element name="VencimientoCNP" type="xsd:dateTime"/>';
			$strToReturn .= '<element name="Status" type="xsd:string"/>';
			$strToReturn .= '<element name="FormaPago" type="xsd:string"/>';
			$strToReturn .= '<element name="Tipo" type="xsd:string"/>';
			$strToReturn .= '<element name="Flete" type="xsd:float"/>';
			$strToReturn .= '<element name="Seguro" type="xsd:string"/>';
			$strToReturn .= '<element name="PROCESOIdPROCESOObject" type="xsd1:Proceso"/>';
			$strToReturn .= '<element name="__blnRestored" type="xsd:boolean"/>';
			$strToReturn .= '</sequence></complexType>';
			return $strToReturn;
		}

		public static function AlterSoapComplexTypeArray(&$strComplexTypeArray) {
			if (!array_key_exists('Licencia', $strComplexTypeArray)) {
				$strComplexTypeArray['Licencia'] = Licencia::GetSoapComplexTypeXml();
				Empresa::AlterSoapComplexTypeArray($strComplexTypeArray);
				Proveedor::AlterSoapComplexTypeArray($strComplexTypeArray);
				Proceso::AlterSoapComplexTypeArray($strComplexTypeArray);
			}
		}

		public static function GetArrayFromSoapArray($objSoapArray) {
			$objArrayToReturn = array();

			foreach ($objSoapArray as $objSoapObject)
				array_push($objArrayToReturn, Licencia::GetObjectFromSoapObject($objSoapObject));

			return $objArrayToReturn;
		}

		public static function GetObjectFromSoapObject($objSoapObject) {
			$objToReturn = new Licencia();
			if (property_exists($objSoapObject, 'IdLICENCIA'))
				$objToReturn->intIdLICENCIA = $objSoapObject->IdLICENCIA;
			if ((property_exists($objSoapObject, 'EMPRESAIdEMPRESAObject')) &&
				($objSoapObject->EMPRESAIdEMPRESAObject))
				$objToReturn->EMPRESAIdEMPRESAObject = Empresa::GetObjectFromSoapObject($objSoapObject->EMPRESAIdEMPRESAObject);
			if ((property_exists($objSoapObject, 'PROVEEDORIdPROVEEDORObject')) &&
				($objSoapObject->PROVEEDORIdPROVEEDORObject))
				$objToReturn->PROVEEDORIdPROVEEDORObject = Proveedor::GetObjectFromSoapObject($objSoapObject->PROVEEDORIdPROVEEDORObject);
			if (property_exists($objSoapObject, 'FechaInicio'))
				$objToReturn->dttFechaInicio = new QDateTime($objSoapObject->FechaInicio);
			if (property_exists($objSoapObject, 'FechaFin'))
				$objToReturn->dttFechaFin = new QDateTime($objSoapObject->FechaFin);
			if (property_exists($objSoapObject, 'FechaFinEstimada'))
				$objToReturn->dttFechaFinEstimada = new QDateTime($objSoapObject->FechaFinEstimada);
			if (property_exists($objSoapObject, 'NumeroProforma'))
				$objToReturn->strNumeroProforma = $objSoapObject->NumeroProforma;
			if (property_exists($objSoapObject, 'NumeroCNP'))
				$objToReturn->strNumeroCNP = $objSoapObject->NumeroCNP;
			if (property_exists($objSoapObject, 'VencimientoCNP'))
				$objToReturn->dttVencimientoCNP = new QDateTime($objSoapObject->VencimientoCNP);
			if (property_exists($objSoapObject, 'Status'))
				$objToReturn->strStatus = $objSoapObject->Status;
			if (property_exists($objSoapObject, 'FormaPago'))
				$objToReturn->strFormaPago = $objSoapObject->FormaPago;
			if (property_exists($objSoapObject, 'Tipo'))
				$objToReturn->strTipo = $objSoapObject->Tipo;
			if (property_exists($objSoapObject, 'Flete'))
				$objToReturn->fltFlete = $objSoapObject->Flete;
			if (property_exists($objSoapObject, 'Seguro'))
				$objToReturn->strSeguro = $objSoapObject->Seguro;
			if ((property_exists($objSoapObject, 'PROCESOIdPROCESOObject')) &&
				($objSoapObject->PROCESOIdPROCESOObject))
				$objToReturn->PROCESOIdPROCESOObject = Proceso::GetObjectFromSoapObject($objSoapObject->PROCESOIdPROCESOObject);
			if (property_exists($objSoapObject, '__blnRestored'))
				$objToReturn->__blnRestored = $objSoapObject->__blnRestored;
			return $objToReturn;
		}

		public static function GetSoapArrayFromArray($objArray) {
			if (!$objArray)
				return null;

			$objArrayToReturn = array();

			foreach ($objArray as $objObject)
				array_push($objArrayToReturn, Licencia::GetSoapObjectFromObject($objObject, true));

			return unserialize(serialize($objArrayToReturn));
		}

		public static function GetSoapObjectFromObject($objObject, $blnBindRelatedObjects) {
			if ($objObject->objEMPRESAIdEMPRESAObject)
				$objObject->objEMPRESAIdEMPRESAObject = Empresa::GetSoapObjectFromObject($objObject->objEMPRESAIdEMPRESAObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intEMPRESAIdEMPRESA = null;
			if ($objObject->objPROVEEDORIdPROVEEDORObject)
				$objObject->objPROVEEDORIdPROVEEDORObject = Proveedor::GetSoapObjectFromObject($objObject->objPROVEEDORIdPROVEEDORObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPROVEEDORIdPROVEEDOR = null;
			if ($objObject->dttFechaInicio)
				$objObject->dttFechaInicio = $objObject->dttFechaInicio->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFechaFin)
				$objObject->dttFechaFin = $objObject->dttFechaFin->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttFechaFinEstimada)
				$objObject->dttFechaFinEstimada = $objObject->dttFechaFinEstimada->qFormat(QDateTime::FormatSoap);
			if ($objObject->dttVencimientoCNP)
				$objObject->dttVencimientoCNP = $objObject->dttVencimientoCNP->qFormat(QDateTime::FormatSoap);
			if ($objObject->objPROCESOIdPROCESOObject)
				$objObject->objPROCESOIdPROCESOObject = Proceso::GetSoapObjectFromObject($objObject->objPROCESOIdPROCESOObject, false);
			else if (!$blnBindRelatedObjects)
				$objObject->intPROCESOIdPROCESO = null;
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
			$iArray['IdLICENCIA'] = $this->intIdLICENCIA;
			$iArray['EMPRESAIdEMPRESA'] = $this->intEMPRESAIdEMPRESA;
			$iArray['PROVEEDORIdPROVEEDOR'] = $this->intPROVEEDORIdPROVEEDOR;
			$iArray['FechaInicio'] = $this->dttFechaInicio;
			$iArray['FechaFin'] = $this->dttFechaFin;
			$iArray['FechaFinEstimada'] = $this->dttFechaFinEstimada;
			$iArray['NumeroProforma'] = $this->strNumeroProforma;
			$iArray['NumeroCNP'] = $this->strNumeroCNP;
			$iArray['VencimientoCNP'] = $this->dttVencimientoCNP;
			$iArray['Status'] = $this->strStatus;
			$iArray['FormaPago'] = $this->strFormaPago;
			$iArray['Tipo'] = $this->strTipo;
			$iArray['Flete'] = $this->fltFlete;
			$iArray['Seguro'] = $this->strSeguro;
			$iArray['PROCESOIdPROCESO'] = $this->intPROCESOIdPROCESO;
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
     * @property-read QQNode $IdLICENCIA
     * @property-read QQNode $EMPRESAIdEMPRESA
     * @property-read QQNodeEmpresa $EMPRESAIdEMPRESAObject
     * @property-read QQNode $PROVEEDORIdPROVEEDOR
     * @property-read QQNodeProveedor $PROVEEDORIdPROVEEDORObject
     * @property-read QQNode $FechaInicio
     * @property-read QQNode $FechaFin
     * @property-read QQNode $FechaFinEstimada
     * @property-read QQNode $NumeroProforma
     * @property-read QQNode $NumeroCNP
     * @property-read QQNode $VencimientoCNP
     * @property-read QQNode $Status
     * @property-read QQNode $FormaPago
     * @property-read QQNode $Tipo
     * @property-read QQNode $Flete
     * @property-read QQNode $Seguro
     * @property-read QQNode $PROCESOIdPROCESO
     * @property-read QQNodeProceso $PROCESOIdPROCESOObject
     *
     *
     * @property-read QQReverseReferenceNodeCodigoPago $CodigoPagoAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeEtapaLicencia $EtapaLicenciaAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeListaProducto $ListaProductoAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeResponsable $ResponsableAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeVigenciaDocumento $VigenciaDocumentoAsLICENCIAIdLICENCIA

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQNodeLicencia extends QQNode {
		protected $strTableName = 'LICENCIA';
		protected $strPrimaryKey = 'idLICENCIA';
		protected $strClassName = 'Licencia';
		public function __get($strName) {
			switch ($strName) {
				case 'IdLICENCIA':
					return new QQNode('idLICENCIA', 'IdLICENCIA', 'Integer', $this);
				case 'EMPRESAIdEMPRESA':
					return new QQNode('EMPRESA_idEMPRESA', 'EMPRESAIdEMPRESA', 'Integer', $this);
				case 'EMPRESAIdEMPRESAObject':
					return new QQNodeEmpresa('EMPRESA_idEMPRESA', 'EMPRESAIdEMPRESAObject', 'Integer', $this);
				case 'PROVEEDORIdPROVEEDOR':
					return new QQNode('PROVEEDOR_idPROVEEDOR', 'PROVEEDORIdPROVEEDOR', 'Integer', $this);
				case 'PROVEEDORIdPROVEEDORObject':
					return new QQNodeProveedor('PROVEEDOR_idPROVEEDOR', 'PROVEEDORIdPROVEEDORObject', 'Integer', $this);
				case 'FechaInicio':
					return new QQNode('fechaInicio', 'FechaInicio', 'Date', $this);
				case 'FechaFin':
					return new QQNode('fechaFin', 'FechaFin', 'Date', $this);
				case 'FechaFinEstimada':
					return new QQNode('fechaFinEstimada', 'FechaFinEstimada', 'Date', $this);
				case 'NumeroProforma':
					return new QQNode('numeroProforma', 'NumeroProforma', 'VarChar', $this);
				case 'NumeroCNP':
					return new QQNode('numeroCNP', 'NumeroCNP', 'VarChar', $this);
				case 'VencimientoCNP':
					return new QQNode('vencimientoCNP', 'VencimientoCNP', 'Date', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'VarChar', $this);
				case 'FormaPago':
					return new QQNode('formaPago', 'FormaPago', 'VarChar', $this);
				case 'Tipo':
					return new QQNode('tipo', 'Tipo', 'VarChar', $this);
				case 'Flete':
					return new QQNode('flete', 'Flete', 'Float', $this);
				case 'Seguro':
					return new QQNode('seguro', 'Seguro', 'VarChar', $this);
				case 'PROCESOIdPROCESO':
					return new QQNode('PROCESO_idPROCESO', 'PROCESOIdPROCESO', 'Integer', $this);
				case 'PROCESOIdPROCESOObject':
					return new QQNodeProceso('PROCESO_idPROCESO', 'PROCESOIdPROCESOObject', 'Integer', $this);
				case 'CodigoPagoAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeCodigoPago($this, 'codigopagoaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'EtapaLicenciaAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeEtapaLicencia($this, 'etapalicenciaaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'ListaProductoAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeListaProducto($this, 'listaproductoaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'ResponsableAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeResponsable($this, 'responsableaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'VigenciaDocumentoAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeVigenciaDocumento($this, 'vigenciadocumentoaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');

				case '_PrimaryKeyNode':
					return new QQNode('idLICENCIA', 'IdLICENCIA', 'Integer', $this);
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
     * @property-read QQNode $IdLICENCIA
     * @property-read QQNode $EMPRESAIdEMPRESA
     * @property-read QQNodeEmpresa $EMPRESAIdEMPRESAObject
     * @property-read QQNode $PROVEEDORIdPROVEEDOR
     * @property-read QQNodeProveedor $PROVEEDORIdPROVEEDORObject
     * @property-read QQNode $FechaInicio
     * @property-read QQNode $FechaFin
     * @property-read QQNode $FechaFinEstimada
     * @property-read QQNode $NumeroProforma
     * @property-read QQNode $NumeroCNP
     * @property-read QQNode $VencimientoCNP
     * @property-read QQNode $Status
     * @property-read QQNode $FormaPago
     * @property-read QQNode $Tipo
     * @property-read QQNode $Flete
     * @property-read QQNode $Seguro
     * @property-read QQNode $PROCESOIdPROCESO
     * @property-read QQNodeProceso $PROCESOIdPROCESOObject
     *
     *
     * @property-read QQReverseReferenceNodeCodigoPago $CodigoPagoAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeEtapaLicencia $EtapaLicenciaAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeListaProducto $ListaProductoAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeResponsable $ResponsableAsLICENCIAIdLICENCIA
     * @property-read QQReverseReferenceNodeVigenciaDocumento $VigenciaDocumentoAsLICENCIAIdLICENCIA

     * @property-read QQNode $_PrimaryKeyNode
     **/
	class QQReverseReferenceNodeLicencia extends QQReverseReferenceNode {
		protected $strTableName = 'LICENCIA';
		protected $strPrimaryKey = 'idLICENCIA';
		protected $strClassName = 'Licencia';
		public function __get($strName) {
			switch ($strName) {
				case 'IdLICENCIA':
					return new QQNode('idLICENCIA', 'IdLICENCIA', 'integer', $this);
				case 'EMPRESAIdEMPRESA':
					return new QQNode('EMPRESA_idEMPRESA', 'EMPRESAIdEMPRESA', 'integer', $this);
				case 'EMPRESAIdEMPRESAObject':
					return new QQNodeEmpresa('EMPRESA_idEMPRESA', 'EMPRESAIdEMPRESAObject', 'integer', $this);
				case 'PROVEEDORIdPROVEEDOR':
					return new QQNode('PROVEEDOR_idPROVEEDOR', 'PROVEEDORIdPROVEEDOR', 'integer', $this);
				case 'PROVEEDORIdPROVEEDORObject':
					return new QQNodeProveedor('PROVEEDOR_idPROVEEDOR', 'PROVEEDORIdPROVEEDORObject', 'integer', $this);
				case 'FechaInicio':
					return new QQNode('fechaInicio', 'FechaInicio', 'QDateTime', $this);
				case 'FechaFin':
					return new QQNode('fechaFin', 'FechaFin', 'QDateTime', $this);
				case 'FechaFinEstimada':
					return new QQNode('fechaFinEstimada', 'FechaFinEstimada', 'QDateTime', $this);
				case 'NumeroProforma':
					return new QQNode('numeroProforma', 'NumeroProforma', 'string', $this);
				case 'NumeroCNP':
					return new QQNode('numeroCNP', 'NumeroCNP', 'string', $this);
				case 'VencimientoCNP':
					return new QQNode('vencimientoCNP', 'VencimientoCNP', 'QDateTime', $this);
				case 'Status':
					return new QQNode('status', 'Status', 'string', $this);
				case 'FormaPago':
					return new QQNode('formaPago', 'FormaPago', 'string', $this);
				case 'Tipo':
					return new QQNode('tipo', 'Tipo', 'string', $this);
				case 'Flete':
					return new QQNode('flete', 'Flete', 'double', $this);
				case 'Seguro':
					return new QQNode('seguro', 'Seguro', 'string', $this);
				case 'PROCESOIdPROCESO':
					return new QQNode('PROCESO_idPROCESO', 'PROCESOIdPROCESO', 'integer', $this);
				case 'PROCESOIdPROCESOObject':
					return new QQNodeProceso('PROCESO_idPROCESO', 'PROCESOIdPROCESOObject', 'integer', $this);
				case 'CodigoPagoAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeCodigoPago($this, 'codigopagoaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'EtapaLicenciaAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeEtapaLicencia($this, 'etapalicenciaaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'ListaProductoAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeListaProducto($this, 'listaproductoaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'ResponsableAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeResponsable($this, 'responsableaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');
				case 'VigenciaDocumentoAsLICENCIAIdLICENCIA':
					return new QQReverseReferenceNodeVigenciaDocumento($this, 'vigenciadocumentoaslicenciaidlicencia', 'reverse_reference', 'LICENCIA_idLICENCIA');

				case '_PrimaryKeyNode':
					return new QQNode('idLICENCIA', 'IdLICENCIA', 'integer', $this);
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
