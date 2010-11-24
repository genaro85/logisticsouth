<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Fase class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Fase object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a FaseMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Fase $Fase the actual Fase data class being edited
	 * @property QLabel $IdFASEControl
	 * @property-read QLabel $IdFASELabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QIntegerTextBox $DuracionControl
	 * @property-read QLabel $DuracionLabel
	 * @property QTextBox $IconoControl
	 * @property-read QLabel $IconoLabel
	 * @property QListBox $PROCESOIdPROCESOControl
	 * @property-read QLabel $PROCESOIdPROCESOLabel
	 * @property QListBox $FASEIdFASEControl
	 * @property-read QLabel $FASEIdFASELabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class FaseMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Fase objFase
		 */
		protected $objFase;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Fase's individual data fields
		/**
		 * @var QLabel intIdFASE
		 */
		protected $lblIdFASE;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;
		/**
		 * @var QIntegerTextBox intDuracion
		 */
		protected $txtDuracion;
		/**
		 * @var QTextBox strIcono
		 */
		protected $txtIcono;
		/**
		 * @var QListBox intPROCESOIdPROCESO
		 */
		protected $lstPROCESOIdPROCESOObject;
		/**
		 * @var QListBox intFASEIdFASE
		 */
		protected $lstFASEIdFASEObject;

		// Controls that allow the viewing of Fase's individual data fields
		protected $lblNombre;
		protected $lblDuracion;
		protected $lblIcono;
		protected $lblPROCESOIdPROCESO;
		protected $lblFASEIdFASE;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * FaseMetaControl to edit a single Fase object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Fase object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseMetaControl
		 * @param Fase $objFase new or existing Fase object
		 */
		 public function __construct($objParentObject, Fase $objFase) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this FaseMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Fase object
			$this->objFase = $objFase;

			// Figure out if we're Editing or Creating New
			if ($this->objFase->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseMetaControl
		 * @param integer $intIdFASE primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Fase object creation - defaults to CreateOrEdit
 		 * @return FaseMetaControl
		 */
		public static function Create($objParentObject, $intIdFASE = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdFASE)) {
				$objFase = Fase::Load($intIdFASE);

				// Fase was found -- return it!
				if ($objFase)
					return new FaseMetaControl($objParentObject, $objFase);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Fase object with PK arguments: ' . $intIdFASE);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new FaseMetaControl($objParentObject, new Fase());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Fase object creation - defaults to CreateOrEdit
		 * @return FaseMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFASE = QApplication::PathInfo(0);
			return FaseMetaControl::Create($objParentObject, $intIdFASE, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this FaseMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Fase object creation - defaults to CreateOrEdit
		 * @return FaseMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdFASE = QApplication::QueryString('intIdFASE');
			return FaseMetaControl::Create($objParentObject, $intIdFASE, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdFASE
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdFASE_Create($strControlId = null) {
			$this->lblIdFASE = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdFASE->Name = QApplication::Translate('Id F A S E');
			if ($this->blnEditMode)
				$this->lblIdFASE->Text = $this->objFase->IdFASE;
			else
				$this->lblIdFASE->Text = 'N/A';
			return $this->lblIdFASE;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objFase->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Fase::NombreMaxLength;
			return $this->txtNombre;
		}

		/**
		 * Create and setup QLabel lblNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNombre_Create($strControlId = null) {
			$this->lblNombre = new QLabel($this->objParentObject, $strControlId);
			$this->lblNombre->Name = QApplication::Translate('Nombre');
			$this->lblNombre->Text = $this->objFase->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QIntegerTextBox txtDuracion
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtDuracion_Create($strControlId = null) {
			$this->txtDuracion = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtDuracion->Name = QApplication::Translate('Duracion');
			$this->txtDuracion->Text = $this->objFase->Duracion;
			return $this->txtDuracion;
		}

		/**
		 * Create and setup QLabel lblDuracion
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblDuracion_Create($strControlId = null, $strFormat = null) {
			$this->lblDuracion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDuracion->Name = QApplication::Translate('Duracion');
			$this->lblDuracion->Text = $this->objFase->Duracion;
			$this->lblDuracion->Format = $strFormat;
			return $this->lblDuracion;
		}

		/**
		 * Create and setup QTextBox txtIcono
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtIcono_Create($strControlId = null) {
			$this->txtIcono = new QTextBox($this->objParentObject, $strControlId);
			$this->txtIcono->Name = QApplication::Translate('Icono');
			$this->txtIcono->Text = $this->objFase->Icono;
			$this->txtIcono->TextMode = QTextMode::MultiLine;
			return $this->txtIcono;
		}

		/**
		 * Create and setup QLabel lblIcono
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIcono_Create($strControlId = null) {
			$this->lblIcono = new QLabel($this->objParentObject, $strControlId);
			$this->lblIcono->Name = QApplication::Translate('Icono');
			$this->lblIcono->Text = $this->objFase->Icono;
			return $this->lblIcono;
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
				if (($this->objFase->PROCESOIdPROCESOObject) && ($this->objFase->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
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
			$this->lblPROCESOIdPROCESO->Text = ($this->objFase->PROCESOIdPROCESOObject) ? $this->objFase->PROCESOIdPROCESOObject->__toString() : null;
			$this->lblPROCESOIdPROCESO->Required = true;
			return $this->lblPROCESOIdPROCESO;
		}

		/**
		 * Create and setup QListBox lstFASEIdFASEObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstFASEIdFASEObject_Create($strControlId = null) {
			$this->lstFASEIdFASEObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstFASEIdFASEObject->Name = QApplication::Translate('F A S E Id F A S E Object');
			$this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objFASEIdFASEObjectArray = Fase::LoadAll();
			if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
				$objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
				if (($this->objFase->FASEIdFASEObject) && ($this->objFase->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
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
			$this->lblFASEIdFASE->Text = ($this->objFase->FASEIdFASEObject) ? $this->objFase->FASEIdFASEObject->__toString() : null;
			return $this->lblFASEIdFASE;
		}



		/**
		 * Refresh this MetaControl with Data from the local Fase object.
		 * @param boolean $blnReload reload Fase from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objFase->Reload();

			if ($this->lblIdFASE) if ($this->blnEditMode) $this->lblIdFASE->Text = $this->objFase->IdFASE;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objFase->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objFase->Nombre;

			if ($this->txtDuracion) $this->txtDuracion->Text = $this->objFase->Duracion;
			if ($this->lblDuracion) $this->lblDuracion->Text = $this->objFase->Duracion;

			if ($this->txtIcono) $this->txtIcono->Text = $this->objFase->Icono;
			if ($this->lblIcono) $this->lblIcono->Text = $this->objFase->Icono;

			if ($this->lstPROCESOIdPROCESOObject) {
					$this->lstPROCESOIdPROCESOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPROCESOIdPROCESOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPROCESOIdPROCESOObjectArray = Proceso::LoadAll();
				if ($objPROCESOIdPROCESOObjectArray) foreach ($objPROCESOIdPROCESOObjectArray as $objPROCESOIdPROCESOObject) {
					$objListItem = new QListItem($objPROCESOIdPROCESOObject->__toString(), $objPROCESOIdPROCESOObject->IdPROCESO);
					if (($this->objFase->PROCESOIdPROCESOObject) && ($this->objFase->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
						$objListItem->Selected = true;
					$this->lstPROCESOIdPROCESOObject->AddItem($objListItem);
				}
			}
			if ($this->lblPROCESOIdPROCESO) $this->lblPROCESOIdPROCESO->Text = ($this->objFase->PROCESOIdPROCESOObject) ? $this->objFase->PROCESOIdPROCESOObject->__toString() : null;

			if ($this->lstFASEIdFASEObject) {
					$this->lstFASEIdFASEObject->RemoveAllItems();
				$this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objFASEIdFASEObjectArray = Fase::LoadAll();
				if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
					$objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
					if (($this->objFase->FASEIdFASEObject) && ($this->objFase->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
						$objListItem->Selected = true;
					$this->lstFASEIdFASEObject->AddItem($objListItem);
				}
			}
			if ($this->lblFASEIdFASE) $this->lblFASEIdFASE->Text = ($this->objFase->FASEIdFASEObject) ? $this->objFase->FASEIdFASEObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC FASE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Fase instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveFase() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objFase->Nombre = $this->txtNombre->Text;
				if ($this->txtDuracion) $this->objFase->Duracion = $this->txtDuracion->Text;
				if ($this->txtIcono) $this->objFase->Icono = $this->txtIcono->Text;
				if ($this->lstPROCESOIdPROCESOObject) $this->objFase->PROCESOIdPROCESO = $this->lstPROCESOIdPROCESOObject->SelectedValue;
				if ($this->lstFASEIdFASEObject) $this->objFase->FASEIdFASE = $this->lstFASEIdFASEObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Fase object
				$this->objFase->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Fase instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteFase() {
			$this->objFase->Delete();
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
				case 'Fase': return $this->objFase;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Fase fields -- will be created dynamically if not yet created
				case 'IdFASEControl':
					if (!$this->lblIdFASE) return $this->lblIdFASE_Create();
					return $this->lblIdFASE;
				case 'IdFASELabel':
					if (!$this->lblIdFASE) return $this->lblIdFASE_Create();
					return $this->lblIdFASE;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'DuracionControl':
					if (!$this->txtDuracion) return $this->txtDuracion_Create();
					return $this->txtDuracion;
				case 'DuracionLabel':
					if (!$this->lblDuracion) return $this->lblDuracion_Create();
					return $this->lblDuracion;
				case 'IconoControl':
					if (!$this->txtIcono) return $this->txtIcono_Create();
					return $this->txtIcono;
				case 'IconoLabel':
					if (!$this->lblIcono) return $this->lblIcono_Create();
					return $this->lblIcono;
				case 'PROCESOIdPROCESOControl':
					if (!$this->lstPROCESOIdPROCESOObject) return $this->lstPROCESOIdPROCESOObject_Create();
					return $this->lstPROCESOIdPROCESOObject;
				case 'PROCESOIdPROCESOLabel':
					if (!$this->lblPROCESOIdPROCESO) return $this->lblPROCESOIdPROCESO_Create();
					return $this->lblPROCESOIdPROCESO;
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
					// Controls that point to Fase fields
					case 'IdFASEControl':
						return ($this->lblIdFASE = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'DuracionControl':
						return ($this->txtDuracion = QType::Cast($mixValue, 'QControl'));
					case 'IconoControl':
						return ($this->txtIcono = QType::Cast($mixValue, 'QControl'));
					case 'PROCESOIdPROCESOControl':
						return ($this->lstPROCESOIdPROCESOObject = QType::Cast($mixValue, 'QControl'));
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