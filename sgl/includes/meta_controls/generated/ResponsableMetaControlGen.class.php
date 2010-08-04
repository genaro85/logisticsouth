<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Responsable class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Responsable object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ResponsableMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Responsable $Responsable the actual Responsable data class being edited
	 * @property QListBox $EMPLEADOIdEMPLEADOControl
	 * @property-read QLabel $EMPLEADOIdEMPLEADOLabel
	 * @property QListBox $LICENCIAIdLICENCIAControl
	 * @property-read QLabel $LICENCIAIdLICENCIALabel
	 * @property QDateTimePicker $FechaInicioControl
	 * @property-read QLabel $FechaInicioLabel
	 * @property QDateTimePicker $FechaFinControl
	 * @property-read QLabel $FechaFinLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ResponsableMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Responsable objResponsable
		 */
		protected $objResponsable;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Responsable's individual data fields
		/**
		 * @var QListBox intEMPLEADOIdEMPLEADO
		 */
		protected $lstEMPLEADOIdEMPLEADOObject;
		/**
		 * @var QListBox intLICENCIAIdLICENCIA
		 */
		protected $lstLICENCIAIdLICENCIAObject;
		/**
		 * @var QDateTimePicker dttFechaInicio
		 */
		protected $calFechaInicio;
		/**
		 * @var QDateTimePicker dttFechaFin
		 */
		protected $calFechaFin;

		// Controls that allow the viewing of Responsable's individual data fields
		protected $lblEMPLEADOIdEMPLEADO;
		protected $lblLICENCIAIdLICENCIA;
		protected $lblFechaInicio;
		protected $lblFechaFin;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ResponsableMetaControl to edit a single Responsable object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Responsable object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResponsableMetaControl
		 * @param Responsable $objResponsable new or existing Responsable object
		 */
		 public function __construct($objParentObject, Responsable $objResponsable) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ResponsableMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Responsable object
			$this->objResponsable = $objResponsable;

			// Figure out if we're Editing or Creating New
			if ($this->objResponsable->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResponsableMetaControl
		 * @param integer $intEMPLEADOIdEMPLEADO primary key value
		 * @param integer $intLICENCIAIdLICENCIA primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Responsable object creation - defaults to CreateOrEdit
 		 * @return ResponsableMetaControl
		 */
		public static function Create($objParentObject, $intEMPLEADOIdEMPLEADO = null, $intLICENCIAIdLICENCIA = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intEMPLEADOIdEMPLEADO) && strlen($intLICENCIAIdLICENCIA)) {
				$objResponsable = Responsable::Load($intEMPLEADOIdEMPLEADO, $intLICENCIAIdLICENCIA);

				// Responsable was found -- return it!
				if ($objResponsable)
					return new ResponsableMetaControl($objParentObject, $objResponsable);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Responsable object with PK arguments: ' . $intEMPLEADOIdEMPLEADO . ', ' . $intLICENCIAIdLICENCIA);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ResponsableMetaControl($objParentObject, new Responsable());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResponsableMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Responsable object creation - defaults to CreateOrEdit
		 * @return ResponsableMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intEMPLEADOIdEMPLEADO = QApplication::PathInfo(0);
			$intLICENCIAIdLICENCIA = QApplication::PathInfo(1);
			return ResponsableMetaControl::Create($objParentObject, $intEMPLEADOIdEMPLEADO, $intLICENCIAIdLICENCIA, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ResponsableMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Responsable object creation - defaults to CreateOrEdit
		 * @return ResponsableMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intEMPLEADOIdEMPLEADO = QApplication::QueryString('intEMPLEADOIdEMPLEADO');
			$intLICENCIAIdLICENCIA = QApplication::QueryString('intLICENCIAIdLICENCIA');
			return ResponsableMetaControl::Create($objParentObject, $intEMPLEADOIdEMPLEADO, $intLICENCIAIdLICENCIA, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstEMPLEADOIdEMPLEADOObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstEMPLEADOIdEMPLEADOObject_Create($strControlId = null) {
			$this->lstEMPLEADOIdEMPLEADOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstEMPLEADOIdEMPLEADOObject->Name = QApplication::Translate('E M P L E A D O Id E M P L E A D O Object');
			$this->lstEMPLEADOIdEMPLEADOObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstEMPLEADOIdEMPLEADOObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objEMPLEADOIdEMPLEADOObjectArray = Empleado::LoadAll();
			if ($objEMPLEADOIdEMPLEADOObjectArray) foreach ($objEMPLEADOIdEMPLEADOObjectArray as $objEMPLEADOIdEMPLEADOObject) {
				$objListItem = new QListItem($objEMPLEADOIdEMPLEADOObject->__toString(), $objEMPLEADOIdEMPLEADOObject->IdEMPLEADO);
				if (($this->objResponsable->EMPLEADOIdEMPLEADOObject) && ($this->objResponsable->EMPLEADOIdEMPLEADOObject->IdEMPLEADO == $objEMPLEADOIdEMPLEADOObject->IdEMPLEADO))
					$objListItem->Selected = true;
				$this->lstEMPLEADOIdEMPLEADOObject->AddItem($objListItem);
			}
			return $this->lstEMPLEADOIdEMPLEADOObject;
		}

		/**
		 * Create and setup QLabel lblEMPLEADOIdEMPLEADO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEMPLEADOIdEMPLEADO_Create($strControlId = null) {
			$this->lblEMPLEADOIdEMPLEADO = new QLabel($this->objParentObject, $strControlId);
			$this->lblEMPLEADOIdEMPLEADO->Name = QApplication::Translate('E M P L E A D O Id E M P L E A D O Object');
			$this->lblEMPLEADOIdEMPLEADO->Text = ($this->objResponsable->EMPLEADOIdEMPLEADOObject) ? $this->objResponsable->EMPLEADOIdEMPLEADOObject->__toString() : null;
			$this->lblEMPLEADOIdEMPLEADO->Required = true;
			return $this->lblEMPLEADOIdEMPLEADO;
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
				if (($this->objResponsable->LICENCIAIdLICENCIAObject) && ($this->objResponsable->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
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
			$this->lblLICENCIAIdLICENCIA->Text = ($this->objResponsable->LICENCIAIdLICENCIAObject) ? $this->objResponsable->LICENCIAIdLICENCIAObject->__toString() : null;
			$this->lblLICENCIAIdLICENCIA->Required = true;
			return $this->lblLICENCIAIdLICENCIA;
		}

		/**
		 * Create and setup QDateTimePicker calFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFechaInicio_Create($strControlId = null) {
			$this->calFechaInicio = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFechaInicio->Name = QApplication::Translate('Fecha Inicio');
			$this->calFechaInicio->DateTime = $this->objResponsable->FechaInicio;
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
			$this->lblFechaInicio->Text = sprintf($this->objResponsable->FechaInicio) ? $this->objResponsable->FechaInicio->qFormat($this->strFechaInicioDateTimeFormat) : null;
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
			$this->calFechaFin->DateTime = $this->objResponsable->FechaFin;
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
			$this->lblFechaFin->Text = sprintf($this->objResponsable->FechaFin) ? $this->objResponsable->FechaFin->qFormat($this->strFechaFinDateTimeFormat) : null;
			return $this->lblFechaFin;
		}

		protected $strFechaFinDateTimeFormat;




		/**
		 * Refresh this MetaControl with Data from the local Responsable object.
		 * @param boolean $blnReload reload Responsable from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objResponsable->Reload();

			if ($this->lstEMPLEADOIdEMPLEADOObject) {
					$this->lstEMPLEADOIdEMPLEADOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstEMPLEADOIdEMPLEADOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objEMPLEADOIdEMPLEADOObjectArray = Empleado::LoadAll();
				if ($objEMPLEADOIdEMPLEADOObjectArray) foreach ($objEMPLEADOIdEMPLEADOObjectArray as $objEMPLEADOIdEMPLEADOObject) {
					$objListItem = new QListItem($objEMPLEADOIdEMPLEADOObject->__toString(), $objEMPLEADOIdEMPLEADOObject->IdEMPLEADO);
					if (($this->objResponsable->EMPLEADOIdEMPLEADOObject) && ($this->objResponsable->EMPLEADOIdEMPLEADOObject->IdEMPLEADO == $objEMPLEADOIdEMPLEADOObject->IdEMPLEADO))
						$objListItem->Selected = true;
					$this->lstEMPLEADOIdEMPLEADOObject->AddItem($objListItem);
				}
			}
			if ($this->lblEMPLEADOIdEMPLEADO) $this->lblEMPLEADOIdEMPLEADO->Text = ($this->objResponsable->EMPLEADOIdEMPLEADOObject) ? $this->objResponsable->EMPLEADOIdEMPLEADOObject->__toString() : null;

			if ($this->lstLICENCIAIdLICENCIAObject) {
					$this->lstLICENCIAIdLICENCIAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
				if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
					$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
					if (($this->objResponsable->LICENCIAIdLICENCIAObject) && ($this->objResponsable->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
						$objListItem->Selected = true;
					$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
				}
			}
			if ($this->lblLICENCIAIdLICENCIA) $this->lblLICENCIAIdLICENCIA->Text = ($this->objResponsable->LICENCIAIdLICENCIAObject) ? $this->objResponsable->LICENCIAIdLICENCIAObject->__toString() : null;

			if ($this->calFechaInicio) $this->calFechaInicio->DateTime = $this->objResponsable->FechaInicio;
			if ($this->lblFechaInicio) $this->lblFechaInicio->Text = sprintf($this->objResponsable->FechaInicio) ? $this->objResponsable->FechaInicio->qFormat($this->strFechaInicioDateTimeFormat) : null;

			if ($this->calFechaFin) $this->calFechaFin->DateTime = $this->objResponsable->FechaFin;
			if ($this->lblFechaFin) $this->lblFechaFin->Text = sprintf($this->objResponsable->FechaFin) ? $this->objResponsable->FechaFin->qFormat($this->strFechaFinDateTimeFormat) : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC RESPONSABLE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Responsable instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveResponsable() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstEMPLEADOIdEMPLEADOObject) $this->objResponsable->EMPLEADOIdEMPLEADO = $this->lstEMPLEADOIdEMPLEADOObject->SelectedValue;
				if ($this->lstLICENCIAIdLICENCIAObject) $this->objResponsable->LICENCIAIdLICENCIA = $this->lstLICENCIAIdLICENCIAObject->SelectedValue;
				if ($this->calFechaInicio) $this->objResponsable->FechaInicio = $this->calFechaInicio->DateTime;
				if ($this->calFechaFin) $this->objResponsable->FechaFin = $this->calFechaFin->DateTime;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Responsable object
				$this->objResponsable->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Responsable instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteResponsable() {
			$this->objResponsable->Delete();
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
				case 'Responsable': return $this->objResponsable;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Responsable fields -- will be created dynamically if not yet created
				case 'EMPLEADOIdEMPLEADOControl':
					if (!$this->lstEMPLEADOIdEMPLEADOObject) return $this->lstEMPLEADOIdEMPLEADOObject_Create();
					return $this->lstEMPLEADOIdEMPLEADOObject;
				case 'EMPLEADOIdEMPLEADOLabel':
					if (!$this->lblEMPLEADOIdEMPLEADO) return $this->lblEMPLEADOIdEMPLEADO_Create();
					return $this->lblEMPLEADOIdEMPLEADO;
				case 'LICENCIAIdLICENCIAControl':
					if (!$this->lstLICENCIAIdLICENCIAObject) return $this->lstLICENCIAIdLICENCIAObject_Create();
					return $this->lstLICENCIAIdLICENCIAObject;
				case 'LICENCIAIdLICENCIALabel':
					if (!$this->lblLICENCIAIdLICENCIA) return $this->lblLICENCIAIdLICENCIA_Create();
					return $this->lblLICENCIAIdLICENCIA;
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
					// Controls that point to Responsable fields
					case 'EMPLEADOIdEMPLEADOControl':
						return ($this->lstEMPLEADOIdEMPLEADOObject = QType::Cast($mixValue, 'QControl'));
					case 'LICENCIAIdLICENCIAControl':
						return ($this->lstLICENCIAIdLICENCIAObject = QType::Cast($mixValue, 'QControl'));
					case 'FechaInicioControl':
						return ($this->calFechaInicio = QType::Cast($mixValue, 'QControl'));
					case 'FechaFinControl':
						return ($this->calFechaFin = QType::Cast($mixValue, 'QControl'));
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