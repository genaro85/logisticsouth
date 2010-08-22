<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the FaseLicencia class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single FaseLicencia object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FaseLicenciaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read FaseLicencia $FaseLicencia the actual FaseLicencia data class being edited
	 * @property QListBox $LICENCIAIdLICENCIAControl
	 * @property-read QLabel $LICENCIAIdLICENCIALabel
	 * @property QDateTimePicker $FASEFechaInicioControl
	 * @property-read QLabel $FASEFechaInicioLabel
	 * @property QDateTimePicker $FASEFechaFinControl
	 * @property-read QLabel $FASEFechaFinLabel
	 * @property QListBox $FASEIdFASEControl
	 * @property-read QLabel $FASEIdFASELabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FaseLicenciaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var FaseLicencia objFaseLicencia
		 */
		protected $objFaseLicencia;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of FaseLicencia's individual data fields
		/**
		 * @var QListBox intLICENCIAIdLICENCIA
		 */
		protected $lstLICENCIAIdLICENCIAObject;
		/**
		 * @var QDateTimePicker dttFASEFechaInicio
		 */
		protected $calFASEFechaInicio;
		/**
		 * @var QDateTimePicker dttFASEFechaFin
		 */
		protected $calFASEFechaFin;
		/**
		 * @var QListBox intFASEIdFASE
		 */
		protected $lstFASEIdFASEObject;

		// Controls that allow the viewing of FaseLicencia's individual data fields
		protected $lblLICENCIAIdLICENCIA;
		protected $lblFASEFechaInicio;
		protected $lblFASEFechaFin;
		protected $lblFASEIdFASE;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FaseLicenciaMetaControl to edit a single FaseLicencia object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single FaseLicencia object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseLicenciaMetaControl
		 * @param FaseLicencia $objFaseLicencia new or existing FaseLicencia object
		 */
		 public function __construct($objParentObject, FaseLicencia $objFaseLicencia) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FaseLicenciaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked FaseLicencia object
			$this->objFaseLicencia = $objFaseLicencia;

			// Figure out if we're Editing or Creating New
			if ($this->objFaseLicencia->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseLicenciaMetaControl
		 * @param integer $intLICENCIAIdLICENCIA primary key value
		 * @param integer $intFASEIdFASE primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing FaseLicencia object creation - defaults to CreateOrEdit
 		 * @return FaseLicenciaMetaControl
		 */
		public static function Create($objParentObject, $intLICENCIAIdLICENCIA = null, $intFASEIdFASE = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intLICENCIAIdLICENCIA) && strlen($intFASEIdFASE)) {
				$objFaseLicencia = FaseLicencia::Load($intLICENCIAIdLICENCIA, $intFASEIdFASE);

				// FaseLicencia was found -- return it!
				if ($objFaseLicencia)
					return new FaseLicenciaMetaControl($objParentObject, $objFaseLicencia);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a FaseLicencia object with PK arguments: ' . $intLICENCIAIdLICENCIA . ', ' . $intFASEIdFASE);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FaseLicenciaMetaControl($objParentObject, new FaseLicencia());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseLicenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FaseLicencia object creation - defaults to CreateOrEdit
		 * @return FaseLicenciaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::PathInfo(0);
			$intFASEIdFASE = QApplication::PathInfo(1);
			return FaseLicenciaMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intFASEIdFASE, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseLicenciaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing FaseLicencia object creation - defaults to CreateOrEdit
		 * @return FaseLicenciaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::QueryString('intLICENCIAIdLICENCIA');
			$intFASEIdFASE = QApplication::QueryString('intFASEIdFASE');
			return FaseLicenciaMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intFASEIdFASE, $intCreateType);
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
				if (($this->objFaseLicencia->LICENCIAIdLICENCIAObject) && ($this->objFaseLicencia->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
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
			$this->lblLICENCIAIdLICENCIA->Text = ($this->objFaseLicencia->LICENCIAIdLICENCIAObject) ? $this->objFaseLicencia->LICENCIAIdLICENCIAObject->__toString() : null;
			$this->lblLICENCIAIdLICENCIA->Required = true;
			return $this->lblLICENCIAIdLICENCIA;
		}

		/**
		 * Create and setup QDateTimePicker calFASEFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFASEFechaInicio_Create($strControlId = null) {
			$this->calFASEFechaInicio = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFASEFechaInicio->Name = QApplication::Translate('F A S E Fecha Inicio');
			$this->calFASEFechaInicio->DateTime = $this->objFaseLicencia->FASEFechaInicio;
			$this->calFASEFechaInicio->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFASEFechaInicio;
		}

		/**
		 * Create and setup QLabel lblFASEFechaInicio
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFASEFechaInicio_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFASEFechaInicio = new QLabel($this->objParentObject, $strControlId);
			$this->lblFASEFechaInicio->Name = QApplication::Translate('F A S E Fecha Inicio');
			$this->strFASEFechaInicioDateTimeFormat = $strDateTimeFormat;
			$this->lblFASEFechaInicio->Text = sprintf($this->objFaseLicencia->FASEFechaInicio) ? $this->objFaseLicencia->FASEFechaInicio->qFormat($this->strFASEFechaInicioDateTimeFormat) : null;
			return $this->lblFASEFechaInicio;
		}

		protected $strFASEFechaInicioDateTimeFormat;


		/**
		 * Create and setup QDateTimePicker calFASEFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @return QDateTimePicker
		 */
		public function calFASEFechaFin_Create($strControlId = null) {
			$this->calFASEFechaFin = new QDateTimePicker($this->objParentObject, $strControlId);
			$this->calFASEFechaFin->Name = QApplication::Translate('F A S E Fecha Fin');
			$this->calFASEFechaFin->DateTime = $this->objFaseLicencia->FASEFechaFin;
			$this->calFASEFechaFin->DateTimePickerType = QDateTimePickerType::Date;
			return $this->calFASEFechaFin;
		}

		/**
		 * Create and setup QLabel lblFASEFechaFin
		 * @param string $strControlId optional ControlId to use
		 * @param string $strDateTimeFormat optional DateTimeFormat to use
		 * @return QLabel
		 */
		public function lblFASEFechaFin_Create($strControlId = null, $strDateTimeFormat = null) {
			$this->lblFASEFechaFin = new QLabel($this->objParentObject, $strControlId);
			$this->lblFASEFechaFin->Name = QApplication::Translate('F A S E Fecha Fin');
			$this->strFASEFechaFinDateTimeFormat = $strDateTimeFormat;
			$this->lblFASEFechaFin->Text = sprintf($this->objFaseLicencia->FASEFechaFin) ? $this->objFaseLicencia->FASEFechaFin->qFormat($this->strFASEFechaFinDateTimeFormat) : null;
			return $this->lblFASEFechaFin;
		}

		protected $strFASEFechaFinDateTimeFormat;


		/**
		 * Create and setup QListBox lstFASEIdFASEObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstFASEIdFASEObject_Create($strControlId = null) {
			$this->lstFASEIdFASEObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstFASEIdFASEObject->Name = QApplication::Translate('F A S E Id F A S E Object');
			$this->lstFASEIdFASEObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objFASEIdFASEObjectArray = Fase::LoadAll();
			if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
				$objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
				if (($this->objFaseLicencia->FASEIdFASEObject) && ($this->objFaseLicencia->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
					$objListItem->Selected = true;
				$this->lstFASEIdFASEObject->AddItem($objListItem);
			}
			return $this->lstFASEIdFASEObject;
		}

		/**
		 * Create and setup QLabel lblFASEIdFASE
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblFASEIdFASE_Create($strControlId = null) {
			$this->lblFASEIdFASE = new QLabel($this->objParentObject, $strControlId);
			$this->lblFASEIdFASE->Name = QApplication::Translate('F A S E Id F A S E Object');
			$this->lblFASEIdFASE->Text = ($this->objFaseLicencia->FASEIdFASEObject) ? $this->objFaseLicencia->FASEIdFASEObject->__toString() : null;
			$this->lblFASEIdFASE->Required = true;
			return $this->lblFASEIdFASE;
		}



		/**
		 * Refresh this MetaControl with Data from the local FaseLicencia object.
		 * @param boolean $blnReload reload FaseLicencia from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFaseLicencia->Reload();

			if ($this->lstLICENCIAIdLICENCIAObject) {
					$this->lstLICENCIAIdLICENCIAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
				if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
					$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
					if (($this->objFaseLicencia->LICENCIAIdLICENCIAObject) && ($this->objFaseLicencia->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
						$objListItem->Selected = true;
					$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
				}
			}
			if ($this->lblLICENCIAIdLICENCIA) $this->lblLICENCIAIdLICENCIA->Text = ($this->objFaseLicencia->LICENCIAIdLICENCIAObject) ? $this->objFaseLicencia->LICENCIAIdLICENCIAObject->__toString() : null;

			if ($this->calFASEFechaInicio) $this->calFASEFechaInicio->DateTime = $this->objFaseLicencia->FASEFechaInicio;
			if ($this->lblFASEFechaInicio) $this->lblFASEFechaInicio->Text = sprintf($this->objFaseLicencia->FASEFechaInicio) ? $this->objFaseLicencia->FASEFechaInicio->qFormat($this->strFASEFechaInicioDateTimeFormat) : null;

			if ($this->calFASEFechaFin) $this->calFASEFechaFin->DateTime = $this->objFaseLicencia->FASEFechaFin;
			if ($this->lblFASEFechaFin) $this->lblFASEFechaFin->Text = sprintf($this->objFaseLicencia->FASEFechaFin) ? $this->objFaseLicencia->FASEFechaFin->qFormat($this->strFASEFechaFinDateTimeFormat) : null;

			if ($this->lstFASEIdFASEObject) {
					$this->lstFASEIdFASEObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objFASEIdFASEObjectArray = Fase::LoadAll();
				if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
					$objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
					if (($this->objFaseLicencia->FASEIdFASEObject) && ($this->objFaseLicencia->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
						$objListItem->Selected = true;
					$this->lstFASEIdFASEObject->AddItem($objListItem);
				}
			}
			if ($this->lblFASEIdFASE) $this->lblFASEIdFASE->Text = ($this->objFaseLicencia->FASEIdFASEObject) ? $this->objFaseLicencia->FASEIdFASEObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FASELICENCIA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's FaseLicencia instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFaseLicencia() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstLICENCIAIdLICENCIAObject) $this->objFaseLicencia->LICENCIAIdLICENCIA = $this->lstLICENCIAIdLICENCIAObject->SelectedValue;
				if ($this->calFASEFechaInicio) $this->objFaseLicencia->FASEFechaInicio = $this->calFASEFechaInicio->DateTime;
				if ($this->calFASEFechaFin) $this->objFaseLicencia->FASEFechaFin = $this->calFASEFechaFin->DateTime;
				if ($this->lstFASEIdFASEObject) $this->objFaseLicencia->FASEIdFASE = $this->lstFASEIdFASEObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the FaseLicencia object
				$this->objFaseLicencia->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's FaseLicencia instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFaseLicencia() {
			$this->objFaseLicencia->Delete();
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
				case 'FaseLicencia': return $this->objFaseLicencia;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to FaseLicencia fields -- will be created dynamically if not yet created
				case 'LICENCIAIdLICENCIAControl':
					if (!$this->lstLICENCIAIdLICENCIAObject) return $this->lstLICENCIAIdLICENCIAObject_Create();
					return $this->lstLICENCIAIdLICENCIAObject;
				case 'LICENCIAIdLICENCIALabel':
					if (!$this->lblLICENCIAIdLICENCIA) return $this->lblLICENCIAIdLICENCIA_Create();
					return $this->lblLICENCIAIdLICENCIA;
				case 'FASEFechaInicioControl':
					if (!$this->calFASEFechaInicio) return $this->calFASEFechaInicio_Create();
					return $this->calFASEFechaInicio;
				case 'FASEFechaInicioLabel':
					if (!$this->lblFASEFechaInicio) return $this->lblFASEFechaInicio_Create();
					return $this->lblFASEFechaInicio;
				case 'FASEFechaFinControl':
					if (!$this->calFASEFechaFin) return $this->calFASEFechaFin_Create();
					return $this->calFASEFechaFin;
				case 'FASEFechaFinLabel':
					if (!$this->lblFASEFechaFin) return $this->lblFASEFechaFin_Create();
					return $this->lblFASEFechaFin;
				case 'FASEIdFASEControl':
					if (!$this->lstFASEIdFASEObject) return $this->lstFASEIdFASEObject_Create();
					return $this->lstFASEIdFASEObject;
				case 'FASEIdFASELabel':
					if (!$this->lblFASEIdFASE) return $this->lblFASEIdFASE_Create();
					return $this->lblFASEIdFASE;
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
					// Controls that point to FaseLicencia fields
					case 'LICENCIAIdLICENCIAControl':
						return ($this->lstLICENCIAIdLICENCIAObject = QType::Cast($mixValue, 'QControl'));
					case 'FASEFechaInicioControl':
						return ($this->calFASEFechaInicio = QType::Cast($mixValue, 'QControl'));
					case 'FASEFechaFinControl':
						return ($this->calFASEFechaFin = QType::Cast($mixValue, 'QControl'));
					case 'FASEIdFASEControl':
						return ($this->lstFASEIdFASEObject = QType::Cast($mixValue, 'QControl'));
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