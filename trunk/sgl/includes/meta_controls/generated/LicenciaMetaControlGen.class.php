<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Licencia class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Licencia object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a LicenciaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Licencia $Licencia the actual Licencia data class being edited
	 * @property QLabel $IdLICENCIAControl
	 * @property-read QLabel $IdLICENCIALabel
	 * @property QListBox $EMPRESAIdEMPRESAControl
	 * @property-read QLabel $EMPRESAIdEMPRESALabel
	 * @property QListBox $PROVEEDORIdPROVEEDORControl
	 * @property-read QLabel $PROVEEDORIdPROVEEDORLabel
	 * @property QDateTimePicker $FechaInicioControl
	 * @property-read QLabel $FechaInicioLabel
	 * @property QDateTimePicker $FechaFinControl
	 * @property-read QLabel $FechaFinLabel
	 * @property QDateTimePicker $FechaFinEstimadaControl
	 * @property-read QLabel $FechaFinEstimadaLabel
	 * @property QTextBox $NumeroProformaControl
	 * @property-read QLabel $NumeroProformaLabel
	 * @property QTextBox $NumeroCNPControl
	 * @property-read QLabel $NumeroCNPLabel
	 * @property QDateTimePicker $VencimientoCNPControl
	 * @property-read QLabel $VencimientoCNPLabel
	 * @property QTextBox $StatusControl
	 * @property-read QLabel $StatusLabel
	 * @property QTextBox $FormaPagoControl
	 * @property-read QLabel $FormaPagoLabel
	 * @property QTextBox $TipoControl
	 * @property-read QLabel $TipoLabel
	 * @property QFloatTextBox $FleteControl
	 * @property-read QLabel $FleteLabel
	 * @property QTextBox $SeguroControl
	 * @property-read QLabel $SeguroLabel
	 * @property QListBox $PROCESOIdPROCESOControl
	 * @property-read QLabel $PROCESOIdPROCESOLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class LicenciaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Licencia objLicencia
		 */
		protected $objLicencia;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Licencia's individual data fields
		/**
		 * @var QLabel intIdLICENCIA
		 */
		protected $lblIdLICENCIA;
		/**
		 * @var QListBox intEMPRESAIdEMPRESA
		 */
		protected $lstEMPRESAIdEMPRESAObject;
		/**
		 * @var QListBox intPROVEEDORIdPROVEEDOR
		 */
		protected $lstPROVEEDORIdPROVEEDORObject;
		/**
		 * @var QDateTimePicker dttFechaInicio
		 */
		protected $calFechaInicio;
		/**
		 * @var QDateTimePicker dttFechaFin
		 */
		protected $calFechaFin;
		/**
		 * @var QDateTimePicker dttFechaFinEstimada
		 */
		protected $calFechaFinEstimada;
		/**
		 * @var QTextBox strNumeroProforma
		 */
		protected $txtNumeroProforma;
		/**
		 * @var QTextBox strNumeroCNP
		 */
		protected $txtNumeroCNP;
		/**
		 * @var QDateTimePicker dttVencimientoCNP
		 */
		protected $calVencimientoCNP;
		/**
		 * @var QTextBox strStatus
		 */
		protected $txtStatus;
		/**
		 * @var QTextBox strFormaPago
		 */
		protected $txtFormaPago;
		/**
		 * @var QTextBox strTipo
		 */
		protected $txtTipo;
		/**
		 * @var QFloatTextBox fltFlete
		 */
		protected $txtFlete;
		/**
		 * @var QTextBox strSeguro
		 */
		protected $txtSeguro;
		/**
		 * @var QListBox intPROCESOIdPROCESO
		 */
		protected $lstPROCESOIdPROCESOObject;

		// Controls that allow the viewing of Licencia's individual data fields
		protected $lblEMPRESAIdEMPRESA;
		protected $lblPROVEEDORIdPROVEEDOR;
		protected $lblFechaInicio;
		protected $lblFechaFin;
		protected $lblFechaFinEstimada;
		protected $lblNumeroProforma;
		protected $lblNumeroCNP;
		protected $lblVencimientoCNP;
		protected $lblStatus;
		protected $lblFormaPago;
		protected $lblTipo;
		protected $lblFlete;
		protected $lblSeguro;
		protected $lblPROCESOIdPROCESO;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * LicenciaMetaControl to edit a single Licencia object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Licencia object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this LicenciaMetaControl
		 * @param Licencia $objLicencia new or existing Licencia object
		 */
		 public function __construct($objParentObject, Licencia $objLicencia) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this LicenciaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Licencia object
			$this->objLicencia = $objLicencia;

			// Figure out if we're Editing or Creating New
			if ($this->objLicencia->__Restored) {
				$this->strTitleVerb = QApplication::Translate('Edit');
				$this->blnEditMode = true;
			} else {
				$this->strTitleVerb = QApplication::Translate('Create');
				$this->blnEditMode = false;
			}
		 }

		/**
		 * Static Helper Method to Create using PK arguments
		 * You must pass in the PK arguments on an object to load, or leave it blank to create a new one.
		 * If you want to load via QueryString or PathInfo, use the CreateFromQueryString or CreateFromPathInfo
		 * static helper methods.  Finally, specify a CreateType to define whether or not we are only allowed to 
		 * edit, or if we are also allowed to create a new one, etc.
		 * 
		 * @param mixed $objParentObject QForm or QPanel which will be using this LicenciaMetaControl
		 * @param integer $intIdLICENCIA primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Licencia object creation - defaults to CreateOrEdit
 		 * @return LicenciaMetaControl
		 */
		public static function Create($objParentObject, $intIdLICENCIA = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdLICENCIA)) {
				$objLicencia = Licencia::Load($intIdLICENCIA);

				// Licencia was found -- return it!
				if ($objLicencia)
					return new LicenciaMetaControl($objParentObject, $objLicencia);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Licencia object with PK arguments: ' . $intIdLICENCIA);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new LicenciaMetaControl($objParentObject, new Licencia());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this LicenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Licencia object creation - defaults to CreateOrEdit
		 * @return LicenciaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdLICENCIA = QApplication::PathInfo(0);
			return LicenciaMetaControl::Create($objParentObject, $intIdLICENCIA, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this LicenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Licencia object creation - defaults to CreateOrEdit
		 * @return LicenciaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdLICENCIA = QApplication::QueryString('intIdLICENCIA');
			return LicenciaMetaControl::Create($objParentObject, $intIdLICENCIA, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdLICENCIA
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdLICENCIA_Create($strControlId = null) {
			$this->lblIdLICENCIA = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdLICENCIA->Name = QApplication::Translate('Id L I C E N C I A');
			if ($this->blnEditMode)
				$this->lblIdLICENCIA->Text = $this->objLicencia->IdLICENCIA;
			else
				$this->lblIdLICENCIA->Text = 'N/A';
			return $this->lblIdLICENCIA;
		}

		/**
		 * Create and setup QListBox lstEMPRESAIdEMPRESAObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstEMPRESAIdEMPRESAObject_Create($strControlId = null) {
			$this->lstEMPRESAIdEMPRESAObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstEMPRESAIdEMPRESAObject->Name = QApplication::Translate('E M P R E S A Id E M P R E S A Object');
			$this->lstEMPRESAIdEMPRESAObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstEMPRESAIdEMPRESAObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objEMPRESAIdEMPRESAObjectArray = Empresa::LoadAll();
			if ($objEMPRESAIdEMPRESAObjectArray) foreach ($objEMPRESAIdEMPRESAObjectArray as $objEMPRESAIdEMPRESAObject) {
				$objListItem = new QListItem($objEMPRESAIdEMPRESAObject->__toString(), $objEMPRESAIdEMPRESAObject->IdEMPRESA);
				if (($this->objLicencia->EMPRESAIdEMPRESAObject) && ($this->objLicencia->EMPRESAIdEMPRESAObject->IdEMPRESA == $objEMPRESAIdEMPRESAObject->IdEMPRESA))
					$objListItem->Selected = true;
				$this->lstEMPRESAIdEMPRESAObject->AddItem($objListItem);
			}
			return $this->lstEMPRESAIdEMPRESAObject;
		}

		/**
		 * Create and setup QLabel lblEMPRESAIdEMPRESA
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEMPRESAIdEMPRESA_Create($strControlId = null) {
			$this->lblEMPRESAIdEMPRESA = new QLabel($this->objParentObject, $strControlId);
			$this->lblEMPRESAIdEMPRESA->Name = QApplication::Translate('E M P R E S A Id E M P R E S A Object');
			$this->lblEMPRESAIdEMPRESA->Text = ($this->objLicencia->EMPRESAIdEMPRESAObject) ? $this->objLicencia->EMPRESAIdEMPRESAObject->__toString() : null;
			$this->lblEMPRESAIdEMPRESA->Required = true;
			return $this->lblEMPRESAIdEMPRESA;
		}

		/**
		 * Create and setup QListBox lstPROVEEDORIdPROVEEDORObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstPROVEEDORIdPROVEEDORObject_Create($strControlId = null) {
			$this->lstPROVEEDORIdPROVEEDORObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstPROVEEDORIdPROVEEDORObject->Name = QApplication::Translate('P R O V E E D O R Id P R O V E E D O R Object');
			$this->lstPROVEEDORIdPROVEEDORObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstPROVEEDORIdPROVEEDORObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objPROVEEDORIdPROVEEDORObjectArray = Proveedor::LoadAll();
			if ($objPROVEEDORIdPROVEEDORObjectArray) foreach ($objPROVEEDORIdPROVEEDORObjectArray as $objPROVEEDORIdPROVEEDORObject) {
				$objListItem = new QListItem($objPROVEEDORIdPROVEEDORObject->__toString(), $objPROVEEDORIdPROVEEDORObject->IdPROVEEDOR);
				if (($this->objLicencia->PROVEEDORIdPROVEEDORObject) && ($this->objLicencia->PROVEEDORIdPROVEEDORObject->IdPROVEEDOR == $objPROVEEDORIdPROVEEDORObject->IdPROVEEDOR))
					$objListItem->Selected = true;
				$this->lstPROVEEDORIdPROVEEDORObject->AddItem($objListItem);
			}
			return $this->lstPROVEEDORIdPROVEEDORObject;
		}

		/**
		 * Create and setup QLabel lblPROVEEDORIdPROVEEDOR
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPROVEEDORIdPROVEEDOR_Create($strControlId = null) {
			$this->lblPROVEEDORIdPROVEEDOR = new QLabel($this->objParentObject, $strControlId);
			$this->lblPROVEEDORIdPROVEEDOR->Name = QApplication::Translate('P R O V E E D O R Id P R O V E E D O R Object');
			$this->lblPROVEEDORIdPROVEEDOR->Text = ($this->objLicencia->PROVEEDORIdPROVEEDORObject) ? $this->objLicencia->PROVEEDORIdPROVEEDORObject->__toString() : null;
			$this->lblPROVEEDORIdPROVEEDOR->Required = true;
			return $this->lblPROVEEDORIdPROVEEDOR;
		}

		/**
		 * Create and setup QDateTimePicker calFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaInicio_Create($strControlId = null) {
			$this->calFechaInicio = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaInicio->Name = QApplication::Translate('Fecha Inicio');
			$this->calFechaInicio->DateTime = $this->objLicencia->FechaInicio;
			$this->calFechaInicio->DateTimePickerType = QDateTimePickerType::Date;
			$this->calFechaInicio->Required = true;
			return $this->calFechaInicio;
		}

		/**
		 * Create and setup QLabel lblFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaInicio_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaInicio = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaInicio->Name = QApplication::Translate('Fecha Inicio');
			$this->strFechaInicioDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaInicio->Text = sprintf($this->objLicencia->FechaInicio) ? $this->objLicencia->FechaInicio->qFormat($this->strFechaInicioDateTimeFormat) : null;
			$this->lblFechaInicio->Required = true;
			return $this->lblFechaInicio;
		}

		protected $strFechaInicioDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaFin_Create($strControlId = null) {
			$this->calFechaFin = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaFin->Name = QApplication::Translate('Fecha Fin');
			$this->calFechaFin->DateTime = $this->objLicencia->FechaFin;
			$this->calFechaFin->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaFin;
		}

		/**
		 * Create and setup QLabel lblFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaFin_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaFin = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaFin->Name = QApplication::Translate('Fecha Fin');
			$this->strFechaFinDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaFin->Text = sprintf($this->objLicencia->FechaFin) ? $this->objLicencia->FechaFin->qFormat($this->strFechaFinDateTimeFormat) : null;
			return $this->lblFechaFin;
		}

		protected $strFechaFinDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calFechaFinEstimada
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaFinEstimada_Create($strControlId = null) {
			$this->calFechaFinEstimada = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaFinEstimada->Name = QApplication::Translate('Fecha Fin Estimada');
			$this->calFechaFinEstimada->DateTime = $this->objLicencia->FechaFinEstimada;
			$this->calFechaFinEstimada->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaFinEstimada;
		}

		/**
		 * Create and setup QLabel lblFechaFinEstimada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaFinEstimada_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaFinEstimada = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaFinEstimada->Name = QApplication::Translate('Fecha Fin Estimada');
			$this->strFechaFinEstimadaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaFinEstimada->Text = sprintf($this->objLicencia->FechaFinEstimada) ? $this->objLicencia->FechaFinEstimada->qFormat($this->strFechaFinEstimadaDateTimeFormat) : null;
			return $this->lblFechaFinEstimada;
		}

		protected $strFechaFinEstimadaDateTimeFormat;


		/**
		 * Create and setup QTextBox txtNumeroProforma
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNumeroProforma_Create($strControlId = null) {
			$this->txtNumeroProforma = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNumeroProforma->Name = QApplication::Translate('Numero Proforma');
			$this->txtNumeroProforma->Text = $this->objLicencia->NumeroProforma;
			$this->txtNumeroProforma->MaxLength = Licencia::NumeroProformaMaxLength;
			return $this->txtNumeroProforma;
		}

		/**
		 * Create and setup QLabel lblNumeroProforma
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNumeroProforma_Create($strControlId = null) {
			$this->lblNumeroProforma = new QLabel($this->objParentObject, $strControlId);
			$this->lblNumeroProforma->Name = QApplication::Translate('Numero Proforma');
			$this->lblNumeroProforma->Text = $this->objLicencia->NumeroProforma;
			return $this->lblNumeroProforma;
		}

		/**
		 * Create and setup QTextBox txtNumeroCNP
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNumeroCNP_Create($strControlId = null) {
			$this->txtNumeroCNP = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNumeroCNP->Name = QApplication::Translate('Numero C N P');
			$this->txtNumeroCNP->Text = $this->objLicencia->NumeroCNP;
			$this->txtNumeroCNP->MaxLength = Licencia::NumeroCNPMaxLength;
			return $this->txtNumeroCNP;
		}

		/**
		 * Create and setup QLabel lblNumeroCNP
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNumeroCNP_Create($strControlId = null) {
			$this->lblNumeroCNP = new QLabel($this->objParentObject, $strControlId);
			$this->lblNumeroCNP->Name = QApplication::Translate('Numero C N P');
			$this->lblNumeroCNP->Text = $this->objLicencia->NumeroCNP;
			return $this->lblNumeroCNP;
		}

		/**
		 * Create and setup QDateTimePicker calVencimientoCNP
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calVencimientoCNP_Create($strControlId = null) {
			$this->calVencimientoCNP = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calVencimientoCNP->Name = QApplication::Translate('Vencimiento C N P');
			$this->calVencimientoCNP->DateTime = $this->objLicencia->VencimientoCNP;
			$this->calVencimientoCNP->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calVencimientoCNP;
		}

		/**
		 * Create and setup QLabel lblVencimientoCNP
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblVencimientoCNP_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblVencimientoCNP = new QLabel($this->objParentObject, $strControlId);
			$this->lblVencimientoCNP->Name = QApplication::Translate('Vencimiento C N P');
			$this->strVencimientoCNPDateTimeFormat = $strDateTimeFormat;
			$this->lblVencimientoCNP->Text = sprintf($this->objLicencia->VencimientoCNP) ? $this->objLicencia->VencimientoCNP->qFormat($this->strVencimientoCNPDateTimeFormat) : null;
			return $this->lblVencimientoCNP;
		}

		protected $strVencimientoCNPDateTimeFormat;


		/**
		 * Create and setup QTextBox txtStatus
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtStatus_Create($strControlId = null) {
			$this->txtStatus = new QTextBox($this->objParentObject, $strControlId);
			$this->txtStatus->Name = QApplication::Translate('Status');
			$this->txtStatus->Text = $this->objLicencia->Status;
			$this->txtStatus->Required = true;
			$this->txtStatus->MaxLength = Licencia::StatusMaxLength;
			return $this->txtStatus;
		}

		/**
		 * Create and setup QLabel lblStatus
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblStatus_Create($strControlId = null) {
			$this->lblStatus = new QLabel($this->objParentObject, $strControlId);
			$this->lblStatus->Name = QApplication::Translate('Status');
			$this->lblStatus->Text = $this->objLicencia->Status;
			$this->lblStatus->Required = true;
			return $this->lblStatus;
		}

		/**
		 * Create and setup QTextBox txtFormaPago
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtFormaPago_Create($strControlId = null) {
			$this->txtFormaPago = new QTextBox($this->objParentObject, $strControlId);
			$this->txtFormaPago->Name = QApplication::Translate('Forma Pago');
			$this->txtFormaPago->Text = $this->objLicencia->FormaPago;
			$this->txtFormaPago->MaxLength = Licencia::FormaPagoMaxLength;
			return $this->txtFormaPago;
		}

		/**
		 * Create and setup QLabel lblFormaPago
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFormaPago_Create($strControlId = null) {
			$this->lblFormaPago = new QLabel($this->objParentObject, $strControlId);
			$this->lblFormaPago->Name = QApplication::Translate('Forma Pago');
			$this->lblFormaPago->Text = $this->objLicencia->FormaPago;
			return $this->lblFormaPago;
		}

		/**
		 * Create and setup QTextBox txtTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTipo_Create($strControlId = null) {
			$this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTipo->Name = QApplication::Translate('Tipo');
			$this->txtTipo->Text = $this->objLicencia->Tipo;
			$this->txtTipo->MaxLength = Licencia::TipoMaxLength;
			return $this->txtTipo;
		}

		/**
		 * Create and setup QLabel lblTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTipo_Create($strControlId = null) {
			$this->lblTipo = new QLabel($this->objParentObject, $strControlId);
			$this->lblTipo->Name = QApplication::Translate('Tipo');
			$this->lblTipo->Text = $this->objLicencia->Tipo;
			return $this->lblTipo;
		}

		/**
		 * Create and setup QFloatTextBox txtFlete
		 * @param string $strControlId optional ControlId to use
		 * @return QFloatTextBox
		 */
		public function txtFlete_Create($strControlId = null) {
			$this->txtFlete = new QFloatTextBox($this->objParentObject, $strControlId);
			$this->txtFlete->Name = QApplication::Translate('Flete');
			$this->txtFlete->Text = $this->objLicencia->Flete;
			return $this->txtFlete;
		}

		/**
		 * Create and setup QLabel lblFlete
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblFlete_Create($strControlId = null, $strFormat = null) {
			$this->lblFlete = new QLabel($this->objParentObject, $strControlId);
			$this->lblFlete->Name = QApplication::Translate('Flete');
			$this->lblFlete->Text = $this->objLicencia->Flete;
			$this->lblFlete->Format = $strFormat;
			return $this->lblFlete;
		}

		/**
		 * Create and setup QTextBox txtSeguro
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtSeguro_Create($strControlId = null) {
			$this->txtSeguro = new QTextBox($this->objParentObject, $strControlId);
			$this->txtSeguro->Name = QApplication::Translate('Seguro');
			$this->txtSeguro->Text = $this->objLicencia->Seguro;
			$this->txtSeguro->MaxLength = Licencia::SeguroMaxLength;
			return $this->txtSeguro;
		}

		/**
		 * Create and setup QLabel lblSeguro
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblSeguro_Create($strControlId = null) {
			$this->lblSeguro = new QLabel($this->objParentObject, $strControlId);
			$this->lblSeguro->Name = QApplication::Translate('Seguro');
			$this->lblSeguro->Text = $this->objLicencia->Seguro;
			return $this->lblSeguro;
		}

		/**
		 * Create and setup QListBox lstPROCESOIdPROCESOObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstPROCESOIdPROCESOObject_Create($strControlId = null) {
			$this->lstPROCESOIdPROCESOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstPROCESOIdPROCESOObject->Name = QApplication::Translate('P R O C E S O Id P R O C E S O Object');
			$this->lstPROCESOIdPROCESOObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstPROCESOIdPROCESOObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objPROCESOIdPROCESOObjectArray = Proceso::LoadAll();
			if ($objPROCESOIdPROCESOObjectArray) foreach ($objPROCESOIdPROCESOObjectArray as $objPROCESOIdPROCESOObject) {
				$objListItem = new QListItem($objPROCESOIdPROCESOObject->__toString(), $objPROCESOIdPROCESOObject->IdPROCESO);
				if (($this->objLicencia->PROCESOIdPROCESOObject) && ($this->objLicencia->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
					$objListItem->Selected = true;
				$this->lstPROCESOIdPROCESOObject->AddItem($objListItem);
			}
			return $this->lstPROCESOIdPROCESOObject;
		}

		/**
		 * Create and setup QLabel lblPROCESOIdPROCESO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPROCESOIdPROCESO_Create($strControlId = null) {
			$this->lblPROCESOIdPROCESO = new QLabel($this->objParentObject, $strControlId);
			$this->lblPROCESOIdPROCESO->Name = QApplication::Translate('P R O C E S O Id P R O C E S O Object');
			$this->lblPROCESOIdPROCESO->Text = ($this->objLicencia->PROCESOIdPROCESOObject) ? $this->objLicencia->PROCESOIdPROCESOObject->__toString() : null;
			$this->lblPROCESOIdPROCESO->Required = true;
			return $this->lblPROCESOIdPROCESO;
		}



		/**
		 * Refresh this MetaControl with Data from the local Licencia object.
		 * @param boolean $blnReload reload Licencia from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objLicencia->Reload();

			if ($this->lblIdLICENCIA) if ($this->blnEditMode) $this->lblIdLICENCIA->Text = $this->objLicencia->IdLICENCIA;

			if ($this->lstEMPRESAIdEMPRESAObject) {
					$this->lstEMPRESAIdEMPRESAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstEMPRESAIdEMPRESAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objEMPRESAIdEMPRESAObjectArray = Empresa::LoadAll();
				if ($objEMPRESAIdEMPRESAObjectArray) foreach ($objEMPRESAIdEMPRESAObjectArray as $objEMPRESAIdEMPRESAObject) {
					$objListItem = new QListItem($objEMPRESAIdEMPRESAObject->__toString(), $objEMPRESAIdEMPRESAObject->IdEMPRESA);
					if (($this->objLicencia->EMPRESAIdEMPRESAObject) && ($this->objLicencia->EMPRESAIdEMPRESAObject->IdEMPRESA == $objEMPRESAIdEMPRESAObject->IdEMPRESA))
						$objListItem->Selected = true;
					$this->lstEMPRESAIdEMPRESAObject->AddItem($objListItem);
				}
			}
			if ($this->lblEMPRESAIdEMPRESA) $this->lblEMPRESAIdEMPRESA->Text = ($this->objLicencia->EMPRESAIdEMPRESAObject) ? $this->objLicencia->EMPRESAIdEMPRESAObject->__toString() : null;

			if ($this->lstPROVEEDORIdPROVEEDORObject) {
					$this->lstPROVEEDORIdPROVEEDORObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPROVEEDORIdPROVEEDORObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPROVEEDORIdPROVEEDORObjectArray = Proveedor::LoadAll();
				if ($objPROVEEDORIdPROVEEDORObjectArray) foreach ($objPROVEEDORIdPROVEEDORObjectArray as $objPROVEEDORIdPROVEEDORObject) {
					$objListItem = new QListItem($objPROVEEDORIdPROVEEDORObject->__toString(), $objPROVEEDORIdPROVEEDORObject->IdPROVEEDOR);
					if (($this->objLicencia->PROVEEDORIdPROVEEDORObject) && ($this->objLicencia->PROVEEDORIdPROVEEDORObject->IdPROVEEDOR == $objPROVEEDORIdPROVEEDORObject->IdPROVEEDOR))
						$objListItem->Selected = true;
					$this->lstPROVEEDORIdPROVEEDORObject->AddItem($objListItem);
				}
			}
			if ($this->lblPROVEEDORIdPROVEEDOR) $this->lblPROVEEDORIdPROVEEDOR->Text = ($this->objLicencia->PROVEEDORIdPROVEEDORObject) ? $this->objLicencia->PROVEEDORIdPROVEEDORObject->__toString() : null;

			if ($this->calFechaInicio) $this->calFechaInicio->DateTime = $this->objLicencia->FechaInicio;
			if ($this->lblFechaInicio) $this->lblFechaInicio->Text = sprintf($this->objLicencia->FechaInicio) ? $this->objLicencia->FechaInicio->qFormat($this->strFechaInicioDateTimeFormat) : null;

			if ($this->calFechaFin) $this->calFechaFin->DateTime = $this->objLicencia->FechaFin;
			if ($this->lblFechaFin) $this->lblFechaFin->Text = sprintf($this->objLicencia->FechaFin) ? $this->objLicencia->FechaFin->qFormat($this->strFechaFinDateTimeFormat) : null;

			if ($this->calFechaFinEstimada) $this->calFechaFinEstimada->DateTime = $this->objLicencia->FechaFinEstimada;
			if ($this->lblFechaFinEstimada) $this->lblFechaFinEstimada->Text = sprintf($this->objLicencia->FechaFinEstimada) ? $this->objLicencia->FechaFinEstimada->qFormat($this->strFechaFinEstimadaDateTimeFormat) : null;

			if ($this->txtNumeroProforma) $this->txtNumeroProforma->Text = $this->objLicencia->NumeroProforma;
			if ($this->lblNumeroProforma) $this->lblNumeroProforma->Text = $this->objLicencia->NumeroProforma;

			if ($this->txtNumeroCNP) $this->txtNumeroCNP->Text = $this->objLicencia->NumeroCNP;
			if ($this->lblNumeroCNP) $this->lblNumeroCNP->Text = $this->objLicencia->NumeroCNP;

			if ($this->calVencimientoCNP) $this->calVencimientoCNP->DateTime = $this->objLicencia->VencimientoCNP;
			if ($this->lblVencimientoCNP) $this->lblVencimientoCNP->Text = sprintf($this->objLicencia->VencimientoCNP) ? $this->objLicencia->VencimientoCNP->qFormat($this->strVencimientoCNPDateTimeFormat) : null;

			if ($this->txtStatus) $this->txtStatus->Text = $this->objLicencia->Status;
			if ($this->lblStatus) $this->lblStatus->Text = $this->objLicencia->Status;

			if ($this->txtFormaPago) $this->txtFormaPago->Text = $this->objLicencia->FormaPago;
			if ($this->lblFormaPago) $this->lblFormaPago->Text = $this->objLicencia->FormaPago;

			if ($this->txtTipo) $this->txtTipo->Text = $this->objLicencia->Tipo;
			if ($this->lblTipo) $this->lblTipo->Text = $this->objLicencia->Tipo;

			if ($this->txtFlete) $this->txtFlete->Text = $this->objLicencia->Flete;
			if ($this->lblFlete) $this->lblFlete->Text = $this->objLicencia->Flete;

			if ($this->txtSeguro) $this->txtSeguro->Text = $this->objLicencia->Seguro;
			if ($this->lblSeguro) $this->lblSeguro->Text = $this->objLicencia->Seguro;

			if ($this->lstPROCESOIdPROCESOObject) {
					$this->lstPROCESOIdPROCESOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPROCESOIdPROCESOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPROCESOIdPROCESOObjectArray = Proceso::LoadAll();
				if ($objPROCESOIdPROCESOObjectArray) foreach ($objPROCESOIdPROCESOObjectArray as $objPROCESOIdPROCESOObject) {
					$objListItem = new QListItem($objPROCESOIdPROCESOObject->__toString(), $objPROCESOIdPROCESOObject->IdPROCESO);
					if (($this->objLicencia->PROCESOIdPROCESOObject) && ($this->objLicencia->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
						$objListItem->Selected = true;
					$this->lstPROCESOIdPROCESOObject->AddItem($objListItem);
				}
			}
			if ($this->lblPROCESOIdPROCESO) $this->lblPROCESOIdPROCESO->Text = ($this->objLicencia->PROCESOIdPROCESOObject) ? $this->objLicencia->PROCESOIdPROCESOObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC LICENCIA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Licencia instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveLicencia() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstEMPRESAIdEMPRESAObject) $this->objLicencia->EMPRESAIdEMPRESA = $this->lstEMPRESAIdEMPRESAObject->SelectedValue;
				if ($this->lstPROVEEDORIdPROVEEDORObject) $this->objLicencia->PROVEEDORIdPROVEEDOR = $this->lstPROVEEDORIdPROVEEDORObject->SelectedValue;
				if ($this->calFechaInicio) $this->objLicencia->FechaInicio = $this->calFechaInicio->DateTime;
				if ($this->calFechaFin) $this->objLicencia->FechaFin = $this->calFechaFin->DateTime;
				if ($this->calFechaFinEstimada) $this->objLicencia->FechaFinEstimada = $this->calFechaFinEstimada->DateTime;
				if ($this->txtNumeroProforma) $this->objLicencia->NumeroProforma = $this->txtNumeroProforma->Text;
				if ($this->txtNumeroCNP) $this->objLicencia->NumeroCNP = $this->txtNumeroCNP->Text;
				if ($this->calVencimientoCNP) $this->objLicencia->VencimientoCNP = $this->calVencimientoCNP->DateTime;
				if ($this->txtStatus) $this->objLicencia->Status = $this->txtStatus->Text;
				if ($this->txtFormaPago) $this->objLicencia->FormaPago = $this->txtFormaPago->Text;
				if ($this->txtTipo) $this->objLicencia->Tipo = $this->txtTipo->Text;
				if ($this->txtFlete) $this->objLicencia->Flete = $this->txtFlete->Text;
				if ($this->txtSeguro) $this->objLicencia->Seguro = $this->txtSeguro->Text;
				if ($this->lstPROCESOIdPROCESOObject) $this->objLicencia->PROCESOIdPROCESO = $this->lstPROCESOIdPROCESOObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Licencia object
				$this->objLicencia->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Licencia instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteLicencia() {
			$this->objLicencia->Delete();
		}		



		///////////////////////////////////////////////
		// PUBLIC GETTERS and SETTERS
		///////////////////////////////////////////////

		/**
		 * Override method to perform a property "Get"
		 * This will get the value of $strName
		 *
		 * @param string $strName Name of the property to get
		 * @return mixed
		 */
		public function __get($strName) {
			switch ($strName) {
				// General MetaControlVariables
				case 'Licencia': return $this->objLicencia;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Licencia fields -- will be created dynamically if not yet created
				case 'IdLICENCIAControl':
					if (!$this->lblIdLICENCIA) return $this->lblIdLICENCIA_Create();
					return $this->lblIdLICENCIA;
				case 'IdLICENCIALabel':
					if (!$this->lblIdLICENCIA) return $this->lblIdLICENCIA_Create();
					return $this->lblIdLICENCIA;
				case 'EMPRESAIdEMPRESAControl':
					if (!$this->lstEMPRESAIdEMPRESAObject) return $this->lstEMPRESAIdEMPRESAObject_Create();
					return $this->lstEMPRESAIdEMPRESAObject;
				case 'EMPRESAIdEMPRESALabel':
					if (!$this->lblEMPRESAIdEMPRESA) return $this->lblEMPRESAIdEMPRESA_Create();
					return $this->lblEMPRESAIdEMPRESA;
				case 'PROVEEDORIdPROVEEDORControl':
					if (!$this->lstPROVEEDORIdPROVEEDORObject) return $this->lstPROVEEDORIdPROVEEDORObject_Create();
					return $this->lstPROVEEDORIdPROVEEDORObject;
				case 'PROVEEDORIdPROVEEDORLabel':
					if (!$this->lblPROVEEDORIdPROVEEDOR) return $this->lblPROVEEDORIdPROVEEDOR_Create();
					return $this->lblPROVEEDORIdPROVEEDOR;
				case 'FechaInicioControl':
					if (!$this->calFechaInicio) return $this->calFechaInicio_Create();
					return $this->calFechaInicio;
				case 'FechaInicioLabel':
					if (!$this->lblFechaInicio) return $this->lblFechaInicio_Create();
					return $this->lblFechaInicio;
				case 'FechaFinControl':
					if (!$this->calFechaFin) return $this->calFechaFin_Create();
					return $this->calFechaFin;
				case 'FechaFinLabel':
					if (!$this->lblFechaFin) return $this->lblFechaFin_Create();
					return $this->lblFechaFin;
				case 'FechaFinEstimadaControl':
					if (!$this->calFechaFinEstimada) return $this->calFechaFinEstimada_Create();
					return $this->calFechaFinEstimada;
				case 'FechaFinEstimadaLabel':
					if (!$this->lblFechaFinEstimada) return $this->lblFechaFinEstimada_Create();
					return $this->lblFechaFinEstimada;
				case 'NumeroProformaControl':
					if (!$this->txtNumeroProforma) return $this->txtNumeroProforma_Create();
					return $this->txtNumeroProforma;
				case 'NumeroProformaLabel':
					if (!$this->lblNumeroProforma) return $this->lblNumeroProforma_Create();
					return $this->lblNumeroProforma;
				case 'NumeroCNPControl':
					if (!$this->txtNumeroCNP) return $this->txtNumeroCNP_Create();
					return $this->txtNumeroCNP;
				case 'NumeroCNPLabel':
					if (!$this->lblNumeroCNP) return $this->lblNumeroCNP_Create();
					return $this->lblNumeroCNP;
				case 'VencimientoCNPControl':
					if (!$this->calVencimientoCNP) return $this->calVencimientoCNP_Create();
					return $this->calVencimientoCNP;
				case 'VencimientoCNPLabel':
					if (!$this->lblVencimientoCNP) return $this->lblVencimientoCNP_Create();
					return $this->lblVencimientoCNP;
				case 'StatusControl':
					if (!$this->txtStatus) return $this->txtStatus_Create();
					return $this->txtStatus;
				case 'StatusLabel':
					if (!$this->lblStatus) return $this->lblStatus_Create();
					return $this->lblStatus;
				case 'FormaPagoControl':
					if (!$this->txtFormaPago) return $this->txtFormaPago_Create();
					return $this->txtFormaPago;
				case 'FormaPagoLabel':
					if (!$this->lblFormaPago) return $this->lblFormaPago_Create();
					return $this->lblFormaPago;
				case 'TipoControl':
					if (!$this->txtTipo) return $this->txtTipo_Create();
					return $this->txtTipo;
				case 'TipoLabel':
					if (!$this->lblTipo) return $this->lblTipo_Create();
					return $this->lblTipo;
				case 'FleteControl':
					if (!$this->txtFlete) return $this->txtFlete_Create();
					return $this->txtFlete;
				case 'FleteLabel':
					if (!$this->lblFlete) return $this->lblFlete_Create();
					return $this->lblFlete;
				case 'SeguroControl':
					if (!$this->txtSeguro) return $this->txtSeguro_Create();
					return $this->txtSeguro;
				case 'SeguroLabel':
					if (!$this->lblSeguro) return $this->lblSeguro_Create();
					return $this->lblSeguro;
				case 'PROCESOIdPROCESOControl':
					if (!$this->lstPROCESOIdPROCESOObject) return $this->lstPROCESOIdPROCESOObject_Create();
					return $this->lstPROCESOIdPROCESOObject;
				case 'PROCESOIdPROCESOLabel':
					if (!$this->lblPROCESOIdPROCESO) return $this->lblPROCESOIdPROCESO_Create();
					return $this->lblPROCESOIdPROCESO;
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
			try {
				switch ($strName) {
					// Controls that point to Licencia fields
					case 'IdLICENCIAControl':
						return ($this->lblIdLICENCIA = QType::Cast($mixValue, 'QControl'));
					case 'EMPRESAIdEMPRESAControl':
						return ($this->lstEMPRESAIdEMPRESAObject = QType::Cast($mixValue, 'QControl'));
					case 'PROVEEDORIdPROVEEDORControl':
						return ($this->lstPROVEEDORIdPROVEEDORObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaInicioControl':
						return ($this->calFechaInicio = QType::Cast($mixValue, 'QControl'));
					case 'FechaFinControl':
						return ($this->calFechaFin = QType::Cast($mixValue, 'QControl'));
					case 'FechaFinEstimadaControl':
						return ($this->calFechaFinEstimada = QType::Cast($mixValue, 'QControl'));
					case 'NumeroProformaControl':
						return ($this->txtNumeroProforma = QType::Cast($mixValue, 'QControl'));
					case 'NumeroCNPControl':
						return ($this->txtNumeroCNP = QType::Cast($mixValue, 'QControl'));
					case 'VencimientoCNPControl':
						return ($this->calVencimientoCNP = QType::Cast($mixValue, 'QControl'));
					case 'StatusControl':
						return ($this->txtStatus = QType::Cast($mixValue, 'QControl'));
					case 'FormaPagoControl':
						return ($this->txtFormaPago = QType::Cast($mixValue, 'QControl'));
					case 'TipoControl':
						return ($this->txtTipo = QType::Cast($mixValue, 'QControl'));
					case 'FleteControl':
						return ($this->txtFlete = QType::Cast($mixValue, 'QControl'));
					case 'SeguroControl':
						return ($this->txtSeguro = QType::Cast($mixValue, 'QControl'));
					case 'PROCESOIdPROCESOControl':
						return ($this->lstPROCESOIdPROCESOObject = QType::Cast($mixValue, 'QControl'));
					default:
						return parent::__set($strName, $mixValue);
				}
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}
	}
?>