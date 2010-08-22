<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the VigenciaDocumento class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single VigenciaDocumento object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a VigenciaDocumentoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read VigenciaDocumento $VigenciaDocumento the actual VigenciaDocumento data class being edited
	 * @property QListBox $LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOControl
	 * @property-read QLabel $LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOLabel
	 * @property QListBox $LICENCIAIdLICENCIAControl
	 * @property-read QLabel $LICENCIAIdLICENCIALabel
	 * @property QDateTimePicker $FechaOtorgadoControl
	 * @property-read QLabel $FechaOtorgadoLabel
	 * @property QDateTimePicker $FechaVencimietoControl
	 * @property-read QLabel $FechaVencimietoLabel
	 * @property QTextBox $NumRefControl
	 * @property-read QLabel $NumRefLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class VigenciaDocumentoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var VigenciaDocumento objVigenciaDocumento
		 */
		protected $objVigenciaDocumento;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of VigenciaDocumento's individual data fields
		/**
		 * @var QListBox intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 */
		protected $lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject;
		/**
		 * @var QListBox intLICENCIAIdLICENCIA
		 */
		protected $lstLICENCIAIdLICENCIAObject;
		/**
		 * @var QDateTimePicker dttFechaOtorgado
		 */
		protected $calFechaOtorgado;
		/**
		 * @var QDateTimePicker dttFechaVencimieto
		 */
		protected $calFechaVencimieto;
		/**
		 * @var QTextBox strNumRef
		 */
		protected $txtNumRef;

		// Controls that allow the viewing of VigenciaDocumento's individual data fields
		protected $lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO;
		protected $lblLICENCIAIdLICENCIA;
		protected $lblFechaOtorgado;
		protected $lblFechaVencimieto;
		protected $lblNumRef;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * VigenciaDocumentoMetaControl to edit a single VigenciaDocumento object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single VigenciaDocumento object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VigenciaDocumentoMetaControl
		 * @param VigenciaDocumento $objVigenciaDocumento new or existing VigenciaDocumento object
		 */
		 public function __construct($objParentObject, VigenciaDocumento $objVigenciaDocumento) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this VigenciaDocumentoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked VigenciaDocumento object
			$this->objVigenciaDocumento = $objVigenciaDocumento;

			// Figure out if we're Editing or Creating New
			if ($this->objVigenciaDocumento->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this VigenciaDocumentoMetaControl
		 * @param integer $intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO primary key value
		 * @param integer $intLICENCIAIdLICENCIA primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing VigenciaDocumento object creation - defaults to CreateOrEdit
 		 * @return VigenciaDocumentoMetaControl
		 */
		public static function Create($objParentObject, $intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO = null, $intLICENCIAIdLICENCIA = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) && strlen($intLICENCIAIdLICENCIA)) {
				$objVigenciaDocumento = VigenciaDocumento::Load($intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO, $intLICENCIAIdLICENCIA);

				// VigenciaDocumento was found -- return it!
				if ($objVigenciaDocumento)
					return new VigenciaDocumentoMetaControl($objParentObject, $objVigenciaDocumento);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a VigenciaDocumento object with PK arguments: ' . $intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO . ', ' . $intLICENCIAIdLICENCIA);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new VigenciaDocumentoMetaControl($objParentObject, new VigenciaDocumento());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VigenciaDocumentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing VigenciaDocumento object creation - defaults to CreateOrEdit
		 * @return VigenciaDocumentoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO = QApplication::PathInfo(0);
			$intLICENCIAIdLICENCIA = QApplication::PathInfo(1);
			return VigenciaDocumentoMetaControl::Create($objParentObject, $intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO, $intLICENCIAIdLICENCIA, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this VigenciaDocumentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing VigenciaDocumento object creation - defaults to CreateOrEdit
		 * @return VigenciaDocumentoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO = QApplication::QueryString('intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO');
			$intLICENCIAIdLICENCIA = QApplication::QueryString('intLICENCIAIdLICENCIA');
			return VigenciaDocumentoMetaControl::Create($objParentObject, $intLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO, $intLICENCIAIdLICENCIA, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject_Create($strControlId = null) {
			$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->Name = QApplication::Translate('L I S T A D E D O C U M E N T O D O C U M E N T O Id D O C U M E N T O Object');
			$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray = DocumentosFase::LoadAll();
			if ($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray) foreach ($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray as $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) {
				$objListItem = new QListItem($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->__toString(), $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO);
				if (($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) && ($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO == $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO))
					$objListItem->Selected = true;
				$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
			}
			return $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject;
		}

		/**
		 * Create and setup QLabel lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO_Create($strControlId = null) {
			$this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO = new QLabel($this->objParentObject, $strControlId);
			$this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO->Name = QApplication::Translate('L I S T A D E D O C U M E N T O D O C U M E N T O Id D O C U M E N T O Object');
			$this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO->Text = ($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) ? $this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->__toString() : null;
			$this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO->Required = true;
			return $this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO;
		}

		/**
		 * Create and setup QListBox lstLICENCIAIdLICENCIAObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstLICENCIAIdLICENCIAObject_Create($strControlId = null) {
			$this->lstLICENCIAIdLICENCIAObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstLICENCIAIdLICENCIAObject->Name = QApplication::Translate('L I C E N C I A Id L I C E N C I A Object');
			$this->lstLICENCIAIdLICENCIAObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
			if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
				$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
				if (($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject) && ($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
					$objListItem->Selected = true;
				$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
			}
			return $this->lstLICENCIAIdLICENCIAObject;
		}

		/**
		 * Create and setup QLabel lblLICENCIAIdLICENCIA
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLICENCIAIdLICENCIA_Create($strControlId = null) {
			$this->lblLICENCIAIdLICENCIA = new QLabel($this->objParentObject, $strControlId);
			$this->lblLICENCIAIdLICENCIA->Name = QApplication::Translate('L I C E N C I A Id L I C E N C I A Object');
			$this->lblLICENCIAIdLICENCIA->Text = ($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject) ? $this->objVigenciaDocumento->LICENCIAIdLICENCIAObject->__toString() : null;
			$this->lblLICENCIAIdLICENCIA->Required = true;
			return $this->lblLICENCIAIdLICENCIA;
		}

		/**
		 * Create and setup QDateTimePicker calFechaOtorgado
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaOtorgado_Create($strControlId = null) {
			$this->calFechaOtorgado = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaOtorgado->Name = QApplication::Translate('Fecha Otorgado');
			$this->calFechaOtorgado->DateTime = $this->objVigenciaDocumento->FechaOtorgado;
			$this->calFechaOtorgado->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaOtorgado;
		}

		/**
		 * Create and setup QLabel lblFechaOtorgado
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaOtorgado_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaOtorgado = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaOtorgado->Name = QApplication::Translate('Fecha Otorgado');
			$this->strFechaOtorgadoDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaOtorgado->Text = sprintf($this->objVigenciaDocumento->FechaOtorgado) ? $this->objVigenciaDocumento->FechaOtorgado->qFormat($this->strFechaOtorgadoDateTimeFormat) : null;
			return $this->lblFechaOtorgado;
		}

		protected $strFechaOtorgadoDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calFechaVencimieto
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaVencimieto_Create($strControlId = null) {
			$this->calFechaVencimieto = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaVencimieto->Name = QApplication::Translate('Fecha Vencimieto');
			$this->calFechaVencimieto->DateTime = $this->objVigenciaDocumento->FechaVencimieto;
			$this->calFechaVencimieto->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaVencimieto;
		}

		/**
		 * Create and setup QLabel lblFechaVencimieto
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaVencimieto_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaVencimieto = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaVencimieto->Name = QApplication::Translate('Fecha Vencimieto');
			$this->strFechaVencimietoDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaVencimieto->Text = sprintf($this->objVigenciaDocumento->FechaVencimieto) ? $this->objVigenciaDocumento->FechaVencimieto->qFormat($this->strFechaVencimietoDateTimeFormat) : null;
			return $this->lblFechaVencimieto;
		}

		protected $strFechaVencimietoDateTimeFormat;


		/**
		 * Create and setup QTextBox txtNumRef
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNumRef_Create($strControlId = null) {
			$this->txtNumRef = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNumRef->Name = QApplication::Translate('Num Ref');
			$this->txtNumRef->Text = $this->objVigenciaDocumento->NumRef;
			$this->txtNumRef->MaxLength = VigenciaDocumento::NumRefMaxLength;
			return $this->txtNumRef;
		}

		/**
		 * Create and setup QLabel lblNumRef
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNumRef_Create($strControlId = null) {
			$this->lblNumRef = new QLabel($this->objParentObject, $strControlId);
			$this->lblNumRef->Name = QApplication::Translate('Num Ref');
			$this->lblNumRef->Text = $this->objVigenciaDocumento->NumRef;
			return $this->lblNumRef;
		}



		/**
		 * Refresh this MetaControl with Data from the local VigenciaDocumento object.
		 * @param boolean $blnReload reload VigenciaDocumento from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objVigenciaDocumento->Reload();

			if ($this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) {
					$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray = DocumentosFase::LoadAll();
				if ($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray) foreach ($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObjectArray as $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) {
					$objListItem = new QListItem($objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->__toString(), $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO);
					if (($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) && ($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO == $objLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTO))
						$objListItem->Selected = true;
					$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
				}
			}
			if ($this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) $this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO->Text = ($this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) ? $this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->__toString() : null;

			if ($this->lstLICENCIAIdLICENCIAObject) {
					$this->lstLICENCIAIdLICENCIAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
				if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
					$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
					if (($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject) && ($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
						$objListItem->Selected = true;
					$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
				}
			}
			if ($this->lblLICENCIAIdLICENCIA) $this->lblLICENCIAIdLICENCIA->Text = ($this->objVigenciaDocumento->LICENCIAIdLICENCIAObject) ? $this->objVigenciaDocumento->LICENCIAIdLICENCIAObject->__toString() : null;

			if ($this->calFechaOtorgado) $this->calFechaOtorgado->DateTime = $this->objVigenciaDocumento->FechaOtorgado;
			if ($this->lblFechaOtorgado) $this->lblFechaOtorgado->Text = sprintf($this->objVigenciaDocumento->FechaOtorgado) ? $this->objVigenciaDocumento->FechaOtorgado->qFormat($this->strFechaOtorgadoDateTimeFormat) : null;

			if ($this->calFechaVencimieto) $this->calFechaVencimieto->DateTime = $this->objVigenciaDocumento->FechaVencimieto;
			if ($this->lblFechaVencimieto) $this->lblFechaVencimieto->Text = sprintf($this->objVigenciaDocumento->FechaVencimieto) ? $this->objVigenciaDocumento->FechaVencimieto->qFormat($this->strFechaVencimietoDateTimeFormat) : null;

			if ($this->txtNumRef) $this->txtNumRef->Text = $this->objVigenciaDocumento->NumRef;
			if ($this->lblNumRef) $this->lblNumRef->Text = $this->objVigenciaDocumento->NumRef;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC VIGENCIADOCUMENTO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's VigenciaDocumento instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveVigenciaDocumento() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) $this->objVigenciaDocumento->LISTADEDOCUMENTODOCUMENTOIdDOCUMENTO = $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject->SelectedValue;
				if ($this->lstLICENCIAIdLICENCIAObject) $this->objVigenciaDocumento->LICENCIAIdLICENCIA = $this->lstLICENCIAIdLICENCIAObject->SelectedValue;
				if ($this->calFechaOtorgado) $this->objVigenciaDocumento->FechaOtorgado = $this->calFechaOtorgado->DateTime;
				if ($this->calFechaVencimieto) $this->objVigenciaDocumento->FechaVencimieto = $this->calFechaVencimieto->DateTime;
				if ($this->txtNumRef) $this->objVigenciaDocumento->NumRef = $this->txtNumRef->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the VigenciaDocumento object
				$this->objVigenciaDocumento->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's VigenciaDocumento instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteVigenciaDocumento() {
			$this->objVigenciaDocumento->Delete();
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
				case 'VigenciaDocumento': return $this->objVigenciaDocumento;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to VigenciaDocumento fields -- will be created dynamically if not yet created
				case 'LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOControl':
					if (!$this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject) return $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject_Create();
					return $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject;
				case 'LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOLabel':
					if (!$this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO) return $this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO_Create();
					return $this->lblLISTADEDOCUMENTODOCUMENTOIdDOCUMENTO;
				case 'LICENCIAIdLICENCIAControl':
					if (!$this->lstLICENCIAIdLICENCIAObject) return $this->lstLICENCIAIdLICENCIAObject_Create();
					return $this->lstLICENCIAIdLICENCIAObject;
				case 'LICENCIAIdLICENCIALabel':
					if (!$this->lblLICENCIAIdLICENCIA) return $this->lblLICENCIAIdLICENCIA_Create();
					return $this->lblLICENCIAIdLICENCIA;
				case 'FechaOtorgadoControl':
					if (!$this->calFechaOtorgado) return $this->calFechaOtorgado_Create();
					return $this->calFechaOtorgado;
				case 'FechaOtorgadoLabel':
					if (!$this->lblFechaOtorgado) return $this->lblFechaOtorgado_Create();
					return $this->lblFechaOtorgado;
				case 'FechaVencimietoControl':
					if (!$this->calFechaVencimieto) return $this->calFechaVencimieto_Create();
					return $this->calFechaVencimieto;
				case 'FechaVencimietoLabel':
					if (!$this->lblFechaVencimieto) return $this->lblFechaVencimieto_Create();
					return $this->lblFechaVencimieto;
				case 'NumRefControl':
					if (!$this->txtNumRef) return $this->txtNumRef_Create();
					return $this->txtNumRef;
				case 'NumRefLabel':
					if (!$this->lblNumRef) return $this->lblNumRef_Create();
					return $this->lblNumRef;
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
					// Controls that point to VigenciaDocumento fields
					case 'LISTADEDOCUMENTODOCUMENTOIdDOCUMENTOControl':
						return ($this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject = QType::Cast($mixValue, 'QControl'));
					case 'LICENCIAIdLICENCIAControl':
						return ($this->lstLICENCIAIdLICENCIAObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaOtorgadoControl':
						return ($this->calFechaOtorgado = QType::Cast($mixValue, 'QControl'));
					case 'FechaVencimietoControl':
						return ($this->calFechaVencimieto = QType::Cast($mixValue, 'QControl'));
					case 'NumRefControl':
						return ($this->txtNumRef = QType::Cast($mixValue, 'QControl'));
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