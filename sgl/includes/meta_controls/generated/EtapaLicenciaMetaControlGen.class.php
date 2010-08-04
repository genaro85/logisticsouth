<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the EtapaLicencia class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single EtapaLicencia object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EtapaLicenciaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read EtapaLicencia $EtapaLicencia the actual EtapaLicencia data class being edited
	 * @property QListBox $LICENCIAIdLICENCIAControl
	 * @property-read QLabel $LICENCIAIdLICENCIALabel
	 * @property QListBox $ETAPAIdETAPAControl
	 * @property-read QLabel $ETAPAIdETAPALabel
	 * @property QDateTimePicker $ETAPAFechaInicioControl
	 * @property-read QLabel $ETAPAFechaInicioLabel
	 * @property QDateTimePicker $ETAPAFechaFinControl
	 * @property-read QLabel $ETAPAFechaFinLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EtapaLicenciaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var EtapaLicencia objEtapaLicencia
		 */
		protected $objEtapaLicencia;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of EtapaLicencia's individual data fields
		/**
		 * @var QListBox intLICENCIAIdLICENCIA
		 */
		protected $lstLICENCIAIdLICENCIAObject;
		/**
		 * @var QListBox intETAPAIdETAPA
		 */
		protected $lstETAPAIdETAPAObject;
		/**
		 * @var QDateTimePicker dttETAPAFechaInicio
		 */
		protected $calETAPAFechaInicio;
		/**
		 * @var QDateTimePicker dttETAPAFechaFin
		 */
		protected $calETAPAFechaFin;

		// Controls that allow the viewing of EtapaLicencia's individual data fields
		protected $lblLICENCIAIdLICENCIA;
		protected $lblETAPAIdETAPA;
		protected $lblETAPAFechaInicio;
		protected $lblETAPAFechaFin;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * EtapaLicenciaMetaControl to edit a single EtapaLicencia object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single EtapaLicencia object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaLicenciaMetaControl
		 * @param EtapaLicencia $objEtapaLicencia new or existing EtapaLicencia object
		 */
		 public function __construct($objParentObject, EtapaLicencia $objEtapaLicencia) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EtapaLicenciaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked EtapaLicencia object
			$this->objEtapaLicencia = $objEtapaLicencia;

			// Figure out if we're Editing or Creating New
			if ($this->objEtapaLicencia->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaLicenciaMetaControl
		 * @param integer $intLICENCIAIdLICENCIA primary key value
		 * @param integer $intETAPAIdETAPA primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing EtapaLicencia object creation - defaults to CreateOrEdit
 		 * @return EtapaLicenciaMetaControl
		 */
		public static function Create($objParentObject, $intLICENCIAIdLICENCIA = null, $intETAPAIdETAPA = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intLICENCIAIdLICENCIA) && strlen($intETAPAIdETAPA)) {
				$objEtapaLicencia = EtapaLicencia::Load($intLICENCIAIdLICENCIA, $intETAPAIdETAPA);

				// EtapaLicencia was found -- return it!
				if ($objEtapaLicencia)
					return new EtapaLicenciaMetaControl($objParentObject, $objEtapaLicencia);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a EtapaLicencia object with PK arguments: ' . $intLICENCIAIdLICENCIA . ', ' . $intETAPAIdETAPA);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EtapaLicenciaMetaControl($objParentObject, new EtapaLicencia());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaLicenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing EtapaLicencia object creation - defaults to CreateOrEdit
		 * @return EtapaLicenciaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::PathInfo(0);
			$intETAPAIdETAPA = QApplication::PathInfo(1);
			return EtapaLicenciaMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intETAPAIdETAPA, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaLicenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing EtapaLicencia object creation - defaults to CreateOrEdit
		 * @return EtapaLicenciaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::QueryString('intLICENCIAIdLICENCIA');
			$intETAPAIdETAPA = QApplication::QueryString('intETAPAIdETAPA');
			return EtapaLicenciaMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intETAPAIdETAPA, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

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
				if (($this->objEtapaLicencia->LICENCIAIdLICENCIAObject) && ($this->objEtapaLicencia->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
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
			$this->lblLICENCIAIdLICENCIA->Text = ($this->objEtapaLicencia->LICENCIAIdLICENCIAObject) ? $this->objEtapaLicencia->LICENCIAIdLICENCIAObject->__toString() : null;
			$this->lblLICENCIAIdLICENCIA->Required = true;
			return $this->lblLICENCIAIdLICENCIA;
		}

		/**
		 * Create and setup QListBox lstETAPAIdETAPAObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstETAPAIdETAPAObject_Create($strControlId = null) {
			$this->lstETAPAIdETAPAObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstETAPAIdETAPAObject->Name = QApplication::Translate('E T A P A Id E T A P A Object');
			$this->lstETAPAIdETAPAObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstETAPAIdETAPAObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objETAPAIdETAPAObjectArray = Etapa::LoadAll();
			if ($objETAPAIdETAPAObjectArray) foreach ($objETAPAIdETAPAObjectArray as $objETAPAIdETAPAObject) {
				$objListItem = new QListItem($objETAPAIdETAPAObject->__toString(), $objETAPAIdETAPAObject->IdETAPA);
				if (($this->objEtapaLicencia->ETAPAIdETAPAObject) && ($this->objEtapaLicencia->ETAPAIdETAPAObject->IdETAPA == $objETAPAIdETAPAObject->IdETAPA))
					$objListItem->Selected = true;
				$this->lstETAPAIdETAPAObject->AddItem($objListItem);
			}
			return $this->lstETAPAIdETAPAObject;
		}

		/**
		 * Create and setup QLabel lblETAPAIdETAPA
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblETAPAIdETAPA_Create($strControlId = null) {
			$this->lblETAPAIdETAPA = new QLabel($this->objParentObject, $strControlId);
			$this->lblETAPAIdETAPA->Name = QApplication::Translate('E T A P A Id E T A P A Object');
			$this->lblETAPAIdETAPA->Text = ($this->objEtapaLicencia->ETAPAIdETAPAObject) ? $this->objEtapaLicencia->ETAPAIdETAPAObject->__toString() : null;
			$this->lblETAPAIdETAPA->Required = true;
			return $this->lblETAPAIdETAPA;
		}

		/**
		 * Create and setup QDateTimePicker calETAPAFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calETAPAFechaInicio_Create($strControlId = null) {
			$this->calETAPAFechaInicio = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calETAPAFechaInicio->Name = QApplication::Translate('E T A P A Fecha Inicio');
			$this->calETAPAFechaInicio->DateTime = $this->objEtapaLicencia->ETAPAFechaInicio;
			$this->calETAPAFechaInicio->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calETAPAFechaInicio;
		}

		/**
		 * Create and setup QLabel lblETAPAFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblETAPAFechaInicio_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblETAPAFechaInicio = new QLabel($this->objParentObject, $strControlId);
			$this->lblETAPAFechaInicio->Name = QApplication::Translate('E T A P A Fecha Inicio');
			$this->strETAPAFechaInicioDateTimeFormat = $strDateTimeFormat;
			$this->lblETAPAFechaInicio->Text = sprintf($this->objEtapaLicencia->ETAPAFechaInicio) ? $this->objEtapaLicencia->ETAPAFechaInicio->qFormat($this->strETAPAFechaInicioDateTimeFormat) : null;
			return $this->lblETAPAFechaInicio;
		}

		protected $strETAPAFechaInicioDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calETAPAFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calETAPAFechaFin_Create($strControlId = null) {
			$this->calETAPAFechaFin = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calETAPAFechaFin->Name = QApplication::Translate('E T A P A Fecha Fin');
			$this->calETAPAFechaFin->DateTime = $this->objEtapaLicencia->ETAPAFechaFin;
			$this->calETAPAFechaFin->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calETAPAFechaFin;
		}

		/**
		 * Create and setup QLabel lblETAPAFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblETAPAFechaFin_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblETAPAFechaFin = new QLabel($this->objParentObject, $strControlId);
			$this->lblETAPAFechaFin->Name = QApplication::Translate('E T A P A Fecha Fin');
			$this->strETAPAFechaFinDateTimeFormat = $strDateTimeFormat;
			$this->lblETAPAFechaFin->Text = sprintf($this->objEtapaLicencia->ETAPAFechaFin) ? $this->objEtapaLicencia->ETAPAFechaFin->qFormat($this->strETAPAFechaFinDateTimeFormat) : null;
			return $this->lblETAPAFechaFin;
		}

		protected $strETAPAFechaFinDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local EtapaLicencia object.
		 * @param boolean $blnReload reload EtapaLicencia from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEtapaLicencia->Reload();

			if ($this->lstLICENCIAIdLICENCIAObject) {
					$this->lstLICENCIAIdLICENCIAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
				if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
					$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
					if (($this->objEtapaLicencia->LICENCIAIdLICENCIAObject) && ($this->objEtapaLicencia->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
						$objListItem->Selected = true;
					$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
				}
			}
			if ($this->lblLICENCIAIdLICENCIA) $this->lblLICENCIAIdLICENCIA->Text = ($this->objEtapaLicencia->LICENCIAIdLICENCIAObject) ? $this->objEtapaLicencia->LICENCIAIdLICENCIAObject->__toString() : null;

			if ($this->lstETAPAIdETAPAObject) {
					$this->lstETAPAIdETAPAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstETAPAIdETAPAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objETAPAIdETAPAObjectArray = Etapa::LoadAll();
				if ($objETAPAIdETAPAObjectArray) foreach ($objETAPAIdETAPAObjectArray as $objETAPAIdETAPAObject) {
					$objListItem = new QListItem($objETAPAIdETAPAObject->__toString(), $objETAPAIdETAPAObject->IdETAPA);
					if (($this->objEtapaLicencia->ETAPAIdETAPAObject) && ($this->objEtapaLicencia->ETAPAIdETAPAObject->IdETAPA == $objETAPAIdETAPAObject->IdETAPA))
						$objListItem->Selected = true;
					$this->lstETAPAIdETAPAObject->AddItem($objListItem);
				}
			}
			if ($this->lblETAPAIdETAPA) $this->lblETAPAIdETAPA->Text = ($this->objEtapaLicencia->ETAPAIdETAPAObject) ? $this->objEtapaLicencia->ETAPAIdETAPAObject->__toString() : null;

			if ($this->calETAPAFechaInicio) $this->calETAPAFechaInicio->DateTime = $this->objEtapaLicencia->ETAPAFechaInicio;
			if ($this->lblETAPAFechaInicio) $this->lblETAPAFechaInicio->Text = sprintf($this->objEtapaLicencia->ETAPAFechaInicio) ? $this->objEtapaLicencia->ETAPAFechaInicio->qFormat($this->strETAPAFechaInicioDateTimeFormat) : null;

			if ($this->calETAPAFechaFin) $this->calETAPAFechaFin->DateTime = $this->objEtapaLicencia->ETAPAFechaFin;
			if ($this->lblETAPAFechaFin) $this->lblETAPAFechaFin->Text = sprintf($this->objEtapaLicencia->ETAPAFechaFin) ? $this->objEtapaLicencia->ETAPAFechaFin->qFormat($this->strETAPAFechaFinDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ETAPALICENCIA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's EtapaLicencia instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEtapaLicencia() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstLICENCIAIdLICENCIAObject) $this->objEtapaLicencia->LICENCIAIdLICENCIA = $this->lstLICENCIAIdLICENCIAObject->SelectedValue;
				if ($this->lstETAPAIdETAPAObject) $this->objEtapaLicencia->ETAPAIdETAPA = $this->lstETAPAIdETAPAObject->SelectedValue;
				if ($this->calETAPAFechaInicio) $this->objEtapaLicencia->ETAPAFechaInicio = $this->calETAPAFechaInicio->DateTime;
				if ($this->calETAPAFechaFin) $this->objEtapaLicencia->ETAPAFechaFin = $this->calETAPAFechaFin->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the EtapaLicencia object
				$this->objEtapaLicencia->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's EtapaLicencia instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEtapaLicencia() {
			$this->objEtapaLicencia->Delete();
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
				case 'EtapaLicencia': return $this->objEtapaLicencia;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to EtapaLicencia fields -- will be created dynamically if not yet created
				case 'LICENCIAIdLICENCIAControl':
					if (!$this->lstLICENCIAIdLICENCIAObject) return $this->lstLICENCIAIdLICENCIAObject_Create();
					return $this->lstLICENCIAIdLICENCIAObject;
				case 'LICENCIAIdLICENCIALabel':
					if (!$this->lblLICENCIAIdLICENCIA) return $this->lblLICENCIAIdLICENCIA_Create();
					return $this->lblLICENCIAIdLICENCIA;
				case 'ETAPAIdETAPAControl':
					if (!$this->lstETAPAIdETAPAObject) return $this->lstETAPAIdETAPAObject_Create();
					return $this->lstETAPAIdETAPAObject;
				case 'ETAPAIdETAPALabel':
					if (!$this->lblETAPAIdETAPA) return $this->lblETAPAIdETAPA_Create();
					return $this->lblETAPAIdETAPA;
				case 'ETAPAFechaInicioControl':
					if (!$this->calETAPAFechaInicio) return $this->calETAPAFechaInicio_Create();
					return $this->calETAPAFechaInicio;
				case 'ETAPAFechaInicioLabel':
					if (!$this->lblETAPAFechaInicio) return $this->lblETAPAFechaInicio_Create();
					return $this->lblETAPAFechaInicio;
				case 'ETAPAFechaFinControl':
					if (!$this->calETAPAFechaFin) return $this->calETAPAFechaFin_Create();
					return $this->calETAPAFechaFin;
				case 'ETAPAFechaFinLabel':
					if (!$this->lblETAPAFechaFin) return $this->lblETAPAFechaFin_Create();
					return $this->lblETAPAFechaFin;
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
					// Controls that point to EtapaLicencia fields
					case 'LICENCIAIdLICENCIAControl':
						return ($this->lstLICENCIAIdLICENCIAObject = QType::Cast($mixValue, 'QControl'));
					case 'ETAPAIdETAPAControl':
						return ($this->lstETAPAIdETAPAObject = QType::Cast($mixValue, 'QControl'));
					case 'ETAPAFechaInicioControl':
						return ($this->calETAPAFechaInicio = QType::Cast($mixValue, 'QControl'));
					case 'ETAPAFechaFinControl':
						return ($this->calETAPAFechaFin = QType::Cast($mixValue, 'QControl'));
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