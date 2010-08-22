<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Importacion class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Importacion object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ImportacionMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Importacion $Importacion the actual Importacion data class being edited
	 * @property QListBox $TRANSPORTEIdTRANSPORTEControl
	 * @property-read QLabel $TRANSPORTEIdTRANSPORTELabel
	 * @property QListBox $LICENCIAIdLICENCIAControl
	 * @property-read QLabel $LICENCIAIdLICENCIALabel
	 * @property QDateTimePicker $FechaDeSalidaControl
	 * @property-read QLabel $FechaDeSalidaLabel
	 * @property QDateTimePicker $FechaLlegadaControl
	 * @property-read QLabel $FechaLlegadaLabel
	 * @property QTextBox $TipoControl
	 * @property-read QLabel $TipoLabel
	 * @property QListBox $PAISOrigenControl
	 * @property-read QLabel $PAISOrigenLabel
	 * @property QListBox $PAISDestinoControl
	 * @property-read QLabel $PAISDestinoLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ImportacionMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Importacion objImportacion
		 */
		protected $objImportacion;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Importacion's individual data fields
		/**
		 * @var QListBox intTRANSPORTEIdTRANSPORTE
		 */
		protected $lstTRANSPORTEIdTRANSPORTEObject;
		/**
		 * @var QListBox intLICENCIAIdLICENCIA
		 */
		protected $lstLICENCIAIdLICENCIAObject;
		/**
		 * @var QDateTimePicker dttFechaDeSalida
		 */
		protected $calFechaDeSalida;
		/**
		 * @var QDateTimePicker dttFechaLlegada
		 */
		protected $calFechaLlegada;
		/**
		 * @var QTextBox strTipo
		 */
		protected $txtTipo;
		/**
		 * @var QListBox intPAISOrigen
		 */
		protected $lstPAISOrigenObject;
		/**
		 * @var QListBox intPAISDestino
		 */
		protected $lstPAISDestinoObject;

		// Controls that allow the viewing of Importacion's individual data fields
		protected $lblTRANSPORTEIdTRANSPORTE;
		protected $lblLICENCIAIdLICENCIA;
		protected $lblFechaDeSalida;
		protected $lblFechaLlegada;
		protected $lblTipo;
		protected $lblPAISOrigen;
		protected $lblPAISDestino;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ImportacionMetaControl to edit a single Importacion object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Importacion object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImportacionMetaControl
		 * @param Importacion $objImportacion new or existing Importacion object
		 */
		 public function __construct($objParentObject, Importacion $objImportacion) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ImportacionMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Importacion object
			$this->objImportacion = $objImportacion;

			// Figure out if we're Editing or Creating New
			if ($this->objImportacion->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImportacionMetaControl
		 * @param integer $intTRANSPORTEIdTRANSPORTE primary key value
		 * @param integer $intLICENCIAIdLICENCIA primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Importacion object creation - defaults to CreateOrEdit
 		 * @return ImportacionMetaControl
		 */
		public static function Create($objParentObject, $intTRANSPORTEIdTRANSPORTE = null, $intLICENCIAIdLICENCIA = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intTRANSPORTEIdTRANSPORTE) && strlen($intLICENCIAIdLICENCIA)) {
				$objImportacion = Importacion::Load($intTRANSPORTEIdTRANSPORTE, $intLICENCIAIdLICENCIA);

				// Importacion was found -- return it!
				if ($objImportacion)
					return new ImportacionMetaControl($objParentObject, $objImportacion);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Importacion object with PK arguments: ' . $intTRANSPORTEIdTRANSPORTE . ', ' . $intLICENCIAIdLICENCIA);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ImportacionMetaControl($objParentObject, new Importacion());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImportacionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Importacion object creation - defaults to CreateOrEdit
		 * @return ImportacionMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intTRANSPORTEIdTRANSPORTE = QApplication::PathInfo(0);
			$intLICENCIAIdLICENCIA = QApplication::PathInfo(1);
			return ImportacionMetaControl::Create($objParentObject, $intTRANSPORTEIdTRANSPORTE, $intLICENCIAIdLICENCIA, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ImportacionMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Importacion object creation - defaults to CreateOrEdit
		 * @return ImportacionMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intTRANSPORTEIdTRANSPORTE = QApplication::QueryString('intTRANSPORTEIdTRANSPORTE');
			$intLICENCIAIdLICENCIA = QApplication::QueryString('intLICENCIAIdLICENCIA');
			return ImportacionMetaControl::Create($objParentObject, $intTRANSPORTEIdTRANSPORTE, $intLICENCIAIdLICENCIA, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstTRANSPORTEIdTRANSPORTEObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstTRANSPORTEIdTRANSPORTEObject_Create($strControlId = null) {
			$this->lstTRANSPORTEIdTRANSPORTEObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstTRANSPORTEIdTRANSPORTEObject->Name = QApplication::Translate('T R A N S P O R T E Id T R A N S P O R T E Object');
			$this->lstTRANSPORTEIdTRANSPORTEObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstTRANSPORTEIdTRANSPORTEObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objTRANSPORTEIdTRANSPORTEObjectArray = Transporte::LoadAll();
			if ($objTRANSPORTEIdTRANSPORTEObjectArray) foreach ($objTRANSPORTEIdTRANSPORTEObjectArray as $objTRANSPORTEIdTRANSPORTEObject) {
				$objListItem = new QListItem($objTRANSPORTEIdTRANSPORTEObject->__toString(), $objTRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE);
				if (($this->objImportacion->TRANSPORTEIdTRANSPORTEObject) && ($this->objImportacion->TRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE == $objTRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE))
					$objListItem->Selected = true;
				$this->lstTRANSPORTEIdTRANSPORTEObject->AddItem($objListItem);
			}
			return $this->lstTRANSPORTEIdTRANSPORTEObject;
		}

		/**
		 * Create and setup QLabel lblTRANSPORTEIdTRANSPORTE
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTRANSPORTEIdTRANSPORTE_Create($strControlId = null) {
			$this->lblTRANSPORTEIdTRANSPORTE = new QLabel($this->objParentObject, $strControlId);
			$this->lblTRANSPORTEIdTRANSPORTE->Name = QApplication::Translate('T R A N S P O R T E Id T R A N S P O R T E Object');
			$this->lblTRANSPORTEIdTRANSPORTE->Text = ($this->objImportacion->TRANSPORTEIdTRANSPORTEObject) ? $this->objImportacion->TRANSPORTEIdTRANSPORTEObject->__toString() : null;
			$this->lblTRANSPORTEIdTRANSPORTE->Required = true;
			return $this->lblTRANSPORTEIdTRANSPORTE;
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
				if (($this->objImportacion->LICENCIAIdLICENCIAObject) && ($this->objImportacion->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
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
			$this->lblLICENCIAIdLICENCIA->Text = ($this->objImportacion->LICENCIAIdLICENCIAObject) ? $this->objImportacion->LICENCIAIdLICENCIAObject->__toString() : null;
			$this->lblLICENCIAIdLICENCIA->Required = true;
			return $this->lblLICENCIAIdLICENCIA;
		}

		/**
		 * Create and setup QDateTimePicker calFechaDeSalida
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaDeSalida_Create($strControlId = null) {
			$this->calFechaDeSalida = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaDeSalida->Name = QApplication::Translate('Fecha De Salida');
			$this->calFechaDeSalida->DateTime = $this->objImportacion->FechaDeSalida;
			$this->calFechaDeSalida->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaDeSalida;
		}

		/**
		 * Create and setup QLabel lblFechaDeSalida
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaDeSalida_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaDeSalida = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaDeSalida->Name = QApplication::Translate('Fecha De Salida');
			$this->strFechaDeSalidaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaDeSalida->Text = sprintf($this->objImportacion->FechaDeSalida) ? $this->objImportacion->FechaDeSalida->qFormat($this->strFechaDeSalidaDateTimeFormat) : null;
			return $this->lblFechaDeSalida;
		}

		protected $strFechaDeSalidaDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calFechaLlegada
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaLlegada_Create($strControlId = null) {
			$this->calFechaLlegada = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaLlegada->Name = QApplication::Translate('Fecha Llegada');
			$this->calFechaLlegada->DateTime = $this->objImportacion->FechaLlegada;
			$this->calFechaLlegada->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFechaLlegada;
		}

		/**
		 * Create and setup QLabel lblFechaLlegada
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFechaLlegada_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFechaLlegada = new QLabel($this->objParentObject, $strControlId);
			$this->lblFechaLlegada->Name = QApplication::Translate('Fecha Llegada');
			$this->strFechaLlegadaDateTimeFormat = $strDateTimeFormat;
			$this->lblFechaLlegada->Text = sprintf($this->objImportacion->FechaLlegada) ? $this->objImportacion->FechaLlegada->qFormat($this->strFechaLlegadaDateTimeFormat) : null;
			return $this->lblFechaLlegada;
		}

		protected $strFechaLlegadaDateTimeFormat;


		/**
		 * Create and setup QTextBox txtTipo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTipo_Create($strControlId = null) {
			$this->txtTipo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTipo->Name = QApplication::Translate('Tipo');
			$this->txtTipo->Text = $this->objImportacion->Tipo;
			$this->txtTipo->Required = true;
			$this->txtTipo->MaxLength = Importacion::TipoMaxLength;
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
			$this->lblTipo->Text = $this->objImportacion->Tipo;
			$this->lblTipo->Required = true;
			return $this->lblTipo;
		}

		/**
		 * Create and setup QListBox lstPAISOrigenObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstPAISOrigenObject_Create($strControlId = null) {
			$this->lstPAISOrigenObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstPAISOrigenObject->Name = QApplication::Translate('P A I S Origen Object');
			$this->lstPAISOrigenObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstPAISOrigenObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objPAISOrigenObjectArray = Pais::LoadAll();
			if ($objPAISOrigenObjectArray) foreach ($objPAISOrigenObjectArray as $objPAISOrigenObject) {
				$objListItem = new QListItem($objPAISOrigenObject->__toString(), $objPAISOrigenObject->IdPAIS);
				if (($this->objImportacion->PAISOrigenObject) && ($this->objImportacion->PAISOrigenObject->IdPAIS == $objPAISOrigenObject->IdPAIS))
					$objListItem->Selected = true;
				$this->lstPAISOrigenObject->AddItem($objListItem);
			}
			return $this->lstPAISOrigenObject;
		}

		/**
		 * Create and setup QLabel lblPAISOrigen
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPAISOrigen_Create($strControlId = null) {
			$this->lblPAISOrigen = new QLabel($this->objParentObject, $strControlId);
			$this->lblPAISOrigen->Name = QApplication::Translate('P A I S Origen Object');
			$this->lblPAISOrigen->Text = ($this->objImportacion->PAISOrigenObject) ? $this->objImportacion->PAISOrigenObject->__toString() : null;
			$this->lblPAISOrigen->Required = true;
			return $this->lblPAISOrigen;
		}

		/**
		 * Create and setup QListBox lstPAISDestinoObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstPAISDestinoObject_Create($strControlId = null) {
			$this->lstPAISDestinoObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstPAISDestinoObject->Name = QApplication::Translate('P A I S Destino Object');
			$this->lstPAISDestinoObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstPAISDestinoObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objPAISDestinoObjectArray = Pais::LoadAll();
			if ($objPAISDestinoObjectArray) foreach ($objPAISDestinoObjectArray as $objPAISDestinoObject) {
				$objListItem = new QListItem($objPAISDestinoObject->__toString(), $objPAISDestinoObject->IdPAIS);
				if (($this->objImportacion->PAISDestinoObject) && ($this->objImportacion->PAISDestinoObject->IdPAIS == $objPAISDestinoObject->IdPAIS))
					$objListItem->Selected = true;
				$this->lstPAISDestinoObject->AddItem($objListItem);
			}
			return $this->lstPAISDestinoObject;
		}

		/**
		 * Create and setup QLabel lblPAISDestino
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPAISDestino_Create($strControlId = null) {
			$this->lblPAISDestino = new QLabel($this->objParentObject, $strControlId);
			$this->lblPAISDestino->Name = QApplication::Translate('P A I S Destino Object');
			$this->lblPAISDestino->Text = ($this->objImportacion->PAISDestinoObject) ? $this->objImportacion->PAISDestinoObject->__toString() : null;
			$this->lblPAISDestino->Required = true;
			return $this->lblPAISDestino;
		}



		/**
		 * Refresh this MetaControl with Data from the local Importacion object.
		 * @param boolean $blnReload reload Importacion from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objImportacion->Reload();

			if ($this->lstTRANSPORTEIdTRANSPORTEObject) {
					$this->lstTRANSPORTEIdTRANSPORTEObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTRANSPORTEIdTRANSPORTEObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objTRANSPORTEIdTRANSPORTEObjectArray = Transporte::LoadAll();
				if ($objTRANSPORTEIdTRANSPORTEObjectArray) foreach ($objTRANSPORTEIdTRANSPORTEObjectArray as $objTRANSPORTEIdTRANSPORTEObject) {
					$objListItem = new QListItem($objTRANSPORTEIdTRANSPORTEObject->__toString(), $objTRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE);
					if (($this->objImportacion->TRANSPORTEIdTRANSPORTEObject) && ($this->objImportacion->TRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE == $objTRANSPORTEIdTRANSPORTEObject->IdTRANSPORTE))
						$objListItem->Selected = true;
					$this->lstTRANSPORTEIdTRANSPORTEObject->AddItem($objListItem);
				}
			}
			if ($this->lblTRANSPORTEIdTRANSPORTE) $this->lblTRANSPORTEIdTRANSPORTE->Text = ($this->objImportacion->TRANSPORTEIdTRANSPORTEObject) ? $this->objImportacion->TRANSPORTEIdTRANSPORTEObject->__toString() : null;

			if ($this->lstLICENCIAIdLICENCIAObject) {
					$this->lstLICENCIAIdLICENCIAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
				if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
					$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
					if (($this->objImportacion->LICENCIAIdLICENCIAObject) && ($this->objImportacion->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
						$objListItem->Selected = true;
					$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
				}
			}
			if ($this->lblLICENCIAIdLICENCIA) $this->lblLICENCIAIdLICENCIA->Text = ($this->objImportacion->LICENCIAIdLICENCIAObject) ? $this->objImportacion->LICENCIAIdLICENCIAObject->__toString() : null;

			if ($this->calFechaDeSalida) $this->calFechaDeSalida->DateTime = $this->objImportacion->FechaDeSalida;
			if ($this->lblFechaDeSalida) $this->lblFechaDeSalida->Text = sprintf($this->objImportacion->FechaDeSalida) ? $this->objImportacion->FechaDeSalida->qFormat($this->strFechaDeSalidaDateTimeFormat) : null;

			if ($this->calFechaLlegada) $this->calFechaLlegada->DateTime = $this->objImportacion->FechaLlegada;
			if ($this->lblFechaLlegada) $this->lblFechaLlegada->Text = sprintf($this->objImportacion->FechaLlegada) ? $this->objImportacion->FechaLlegada->qFormat($this->strFechaLlegadaDateTimeFormat) : null;

			if ($this->txtTipo) $this->txtTipo->Text = $this->objImportacion->Tipo;
			if ($this->lblTipo) $this->lblTipo->Text = $this->objImportacion->Tipo;

			if ($this->lstPAISOrigenObject) {
					$this->lstPAISOrigenObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPAISOrigenObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPAISOrigenObjectArray = Pais::LoadAll();
				if ($objPAISOrigenObjectArray) foreach ($objPAISOrigenObjectArray as $objPAISOrigenObject) {
					$objListItem = new QListItem($objPAISOrigenObject->__toString(), $objPAISOrigenObject->IdPAIS);
					if (($this->objImportacion->PAISOrigenObject) && ($this->objImportacion->PAISOrigenObject->IdPAIS == $objPAISOrigenObject->IdPAIS))
						$objListItem->Selected = true;
					$this->lstPAISOrigenObject->AddItem($objListItem);
				}
			}
			if ($this->lblPAISOrigen) $this->lblPAISOrigen->Text = ($this->objImportacion->PAISOrigenObject) ? $this->objImportacion->PAISOrigenObject->__toString() : null;

			if ($this->lstPAISDestinoObject) {
					$this->lstPAISDestinoObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPAISDestinoObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPAISDestinoObjectArray = Pais::LoadAll();
				if ($objPAISDestinoObjectArray) foreach ($objPAISDestinoObjectArray as $objPAISDestinoObject) {
					$objListItem = new QListItem($objPAISDestinoObject->__toString(), $objPAISDestinoObject->IdPAIS);
					if (($this->objImportacion->PAISDestinoObject) && ($this->objImportacion->PAISDestinoObject->IdPAIS == $objPAISDestinoObject->IdPAIS))
						$objListItem->Selected = true;
					$this->lstPAISDestinoObject->AddItem($objListItem);
				}
			}
			if ($this->lblPAISDestino) $this->lblPAISDestino->Text = ($this->objImportacion->PAISDestinoObject) ? $this->objImportacion->PAISDestinoObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC IMPORTACION OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Importacion instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveImportacion() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstTRANSPORTEIdTRANSPORTEObject) $this->objImportacion->TRANSPORTEIdTRANSPORTE = $this->lstTRANSPORTEIdTRANSPORTEObject->SelectedValue;
				if ($this->lstLICENCIAIdLICENCIAObject) $this->objImportacion->LICENCIAIdLICENCIA = $this->lstLICENCIAIdLICENCIAObject->SelectedValue;
				if ($this->calFechaDeSalida) $this->objImportacion->FechaDeSalida = $this->calFechaDeSalida->DateTime;
				if ($this->calFechaLlegada) $this->objImportacion->FechaLlegada = $this->calFechaLlegada->DateTime;
				if ($this->txtTipo) $this->objImportacion->Tipo = $this->txtTipo->Text;
				if ($this->lstPAISOrigenObject) $this->objImportacion->PAISOrigen = $this->lstPAISOrigenObject->SelectedValue;
				if ($this->lstPAISDestinoObject) $this->objImportacion->PAISDestino = $this->lstPAISDestinoObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Importacion object
				$this->objImportacion->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Importacion instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteImportacion() {
			$this->objImportacion->Delete();
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
				case 'Importacion': return $this->objImportacion;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Importacion fields -- will be created dynamically if not yet created
				case 'TRANSPORTEIdTRANSPORTEControl':
					if (!$this->lstTRANSPORTEIdTRANSPORTEObject) return $this->lstTRANSPORTEIdTRANSPORTEObject_Create();
					return $this->lstTRANSPORTEIdTRANSPORTEObject;
				case 'TRANSPORTEIdTRANSPORTELabel':
					if (!$this->lblTRANSPORTEIdTRANSPORTE) return $this->lblTRANSPORTEIdTRANSPORTE_Create();
					return $this->lblTRANSPORTEIdTRANSPORTE;
				case 'LICENCIAIdLICENCIAControl':
					if (!$this->lstLICENCIAIdLICENCIAObject) return $this->lstLICENCIAIdLICENCIAObject_Create();
					return $this->lstLICENCIAIdLICENCIAObject;
				case 'LICENCIAIdLICENCIALabel':
					if (!$this->lblLICENCIAIdLICENCIA) return $this->lblLICENCIAIdLICENCIA_Create();
					return $this->lblLICENCIAIdLICENCIA;
				case 'FechaDeSalidaControl':
					if (!$this->calFechaDeSalida) return $this->calFechaDeSalida_Create();
					return $this->calFechaDeSalida;
				case 'FechaDeSalidaLabel':
					if (!$this->lblFechaDeSalida) return $this->lblFechaDeSalida_Create();
					return $this->lblFechaDeSalida;
				case 'FechaLlegadaControl':
					if (!$this->calFechaLlegada) return $this->calFechaLlegada_Create();
					return $this->calFechaLlegada;
				case 'FechaLlegadaLabel':
					if (!$this->lblFechaLlegada) return $this->lblFechaLlegada_Create();
					return $this->lblFechaLlegada;
				case 'TipoControl':
					if (!$this->txtTipo) return $this->txtTipo_Create();
					return $this->txtTipo;
				case 'TipoLabel':
					if (!$this->lblTipo) return $this->lblTipo_Create();
					return $this->lblTipo;
				case 'PAISOrigenControl':
					if (!$this->lstPAISOrigenObject) return $this->lstPAISOrigenObject_Create();
					return $this->lstPAISOrigenObject;
				case 'PAISOrigenLabel':
					if (!$this->lblPAISOrigen) return $this->lblPAISOrigen_Create();
					return $this->lblPAISOrigen;
				case 'PAISDestinoControl':
					if (!$this->lstPAISDestinoObject) return $this->lstPAISDestinoObject_Create();
					return $this->lstPAISDestinoObject;
				case 'PAISDestinoLabel':
					if (!$this->lblPAISDestino) return $this->lblPAISDestino_Create();
					return $this->lblPAISDestino;
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
					// Controls that point to Importacion fields
					case 'TRANSPORTEIdTRANSPORTEControl':
						return ($this->lstTRANSPORTEIdTRANSPORTEObject = QType::Cast($mixValue, 'QControl'));
					case 'LICENCIAIdLICENCIAControl':
						return ($this->lstLICENCIAIdLICENCIAObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaDeSalidaControl':
						return ($this->calFechaDeSalida = QType::Cast($mixValue, 'QControl'));
					case 'FechaLlegadaControl':
						return ($this->calFechaLlegada = QType::Cast($mixValue, 'QControl'));
					case 'TipoControl':
						return ($this->txtTipo = QType::Cast($mixValue, 'QControl'));
					case 'PAISOrigenControl':
						return ($this->lstPAISOrigenObject = QType::Cast($mixValue, 'QControl'));
					case 'PAISDestinoControl':
						return ($this->lstPAISDestinoObject = QType::Cast($mixValue, 'QControl'));
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