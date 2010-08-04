<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Etapa class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Etapa object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EtapaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Etapa $Etapa the actual Etapa data class being edited
	 * @property QLabel $IdETAPAControl
	 * @property-read QLabel $IdETAPALabel
	 * @property QListBox $FASEIdFASEControl
	 * @property-read QLabel $FASEIdFASELabel
	 * @property QListBox $PROCESOIdPROCESOControl
	 * @property-read QLabel $PROCESOIdPROCESOLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EtapaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Etapa objEtapa
		 */
		protected $objEtapa;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Etapa's individual data fields
		/**
		 * @var QLabel intIdETAPA
		 */
		protected $lblIdETAPA;
		/**
		 * @var QListBox intFASEIdFASE
		 */
		protected $lstFASEIdFASEObject;
		/**
		 * @var QListBox intPROCESOIdPROCESO
		 */
		protected $lstPROCESOIdPROCESOObject;

		// Controls that allow the viewing of Etapa's individual data fields
		protected $lblFASEIdFASE;
		protected $lblPROCESOIdPROCESO;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * EtapaMetaControl to edit a single Etapa object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Etapa object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaMetaControl
		 * @param Etapa $objEtapa new or existing Etapa object
		 */
		 public function __construct($objParentObject, Etapa $objEtapa) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EtapaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Etapa object
			$this->objEtapa = $objEtapa;

			// Figure out if we're Editing or Creating New
			if ($this->objEtapa->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaMetaControl
		 * @param integer $intIdETAPA primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Etapa object creation - defaults to CreateOrEdit
 		 * @return EtapaMetaControl
		 */
		public static function Create($objParentObject, $intIdETAPA = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdETAPA)) {
				$objEtapa = Etapa::Load($intIdETAPA);

				// Etapa was found -- return it!
				if ($objEtapa)
					return new EtapaMetaControl($objParentObject, $objEtapa);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Etapa object with PK arguments: ' . $intIdETAPA);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EtapaMetaControl($objParentObject, new Etapa());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Etapa object creation - defaults to CreateOrEdit
		 * @return EtapaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdETAPA = QApplication::PathInfo(0);
			return EtapaMetaControl::Create($objParentObject, $intIdETAPA, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EtapaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Etapa object creation - defaults to CreateOrEdit
		 * @return EtapaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdETAPA = QApplication::QueryString('intIdETAPA');
			return EtapaMetaControl::Create($objParentObject, $intIdETAPA, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdETAPA
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdETAPA_Create($strControlId = null) {
			$this->lblIdETAPA = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdETAPA->Name = QApplication::Translate('Id E T A P A');
			if ($this->blnEditMode)
				$this->lblIdETAPA->Text = $this->objEtapa->IdETAPA;
			else
				$this->lblIdETAPA->Text = 'N/A';
			return $this->lblIdETAPA;
		}

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
				if (($this->objEtapa->FASEIdFASEObject) && ($this->objEtapa->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
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
			$this->lblFASEIdFASE->Text = ($this->objEtapa->FASEIdFASEObject) ? $this->objEtapa->FASEIdFASEObject->__toString() : null;
			$this->lblFASEIdFASE->Required = true;
			return $this->lblFASEIdFASE;
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
				if (($this->objEtapa->PROCESOIdPROCESOObject) && ($this->objEtapa->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
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
			$this->lblPROCESOIdPROCESO->Text = ($this->objEtapa->PROCESOIdPROCESOObject) ? $this->objEtapa->PROCESOIdPROCESOObject->__toString() : null;
			$this->lblPROCESOIdPROCESO->Required = true;
			return $this->lblPROCESOIdPROCESO;
		}



		/**
		 * Refresh this MetaControl with Data from the local Etapa object.
		 * @param boolean $blnReload reload Etapa from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEtapa->Reload();

			if ($this->lblIdETAPA) if ($this->blnEditMode) $this->lblIdETAPA->Text = $this->objEtapa->IdETAPA;

			if ($this->lstFASEIdFASEObject) {
					$this->lstFASEIdFASEObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objFASEIdFASEObjectArray = Fase::LoadAll();
				if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
					$objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
					if (($this->objEtapa->FASEIdFASEObject) && ($this->objEtapa->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
						$objListItem->Selected = true;
					$this->lstFASEIdFASEObject->AddItem($objListItem);
				}
			}
			if ($this->lblFASEIdFASE) $this->lblFASEIdFASE->Text = ($this->objEtapa->FASEIdFASEObject) ? $this->objEtapa->FASEIdFASEObject->__toString() : null;

			if ($this->lstPROCESOIdPROCESOObject) {
					$this->lstPROCESOIdPROCESOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPROCESOIdPROCESOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPROCESOIdPROCESOObjectArray = Proceso::LoadAll();
				if ($objPROCESOIdPROCESOObjectArray) foreach ($objPROCESOIdPROCESOObjectArray as $objPROCESOIdPROCESOObject) {
					$objListItem = new QListItem($objPROCESOIdPROCESOObject->__toString(), $objPROCESOIdPROCESOObject->IdPROCESO);
					if (($this->objEtapa->PROCESOIdPROCESOObject) && ($this->objEtapa->PROCESOIdPROCESOObject->IdPROCESO == $objPROCESOIdPROCESOObject->IdPROCESO))
						$objListItem->Selected = true;
					$this->lstPROCESOIdPROCESOObject->AddItem($objListItem);
				}
			}
			if ($this->lblPROCESOIdPROCESO) $this->lblPROCESOIdPROCESO->Text = ($this->objEtapa->PROCESOIdPROCESOObject) ? $this->objEtapa->PROCESOIdPROCESOObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ETAPA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Etapa instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEtapa() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstFASEIdFASEObject) $this->objEtapa->FASEIdFASE = $this->lstFASEIdFASEObject->SelectedValue;
				if ($this->lstPROCESOIdPROCESOObject) $this->objEtapa->PROCESOIdPROCESO = $this->lstPROCESOIdPROCESOObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Etapa object
				$this->objEtapa->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Etapa instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEtapa() {
			$this->objEtapa->Delete();
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
				case 'Etapa': return $this->objEtapa;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Etapa fields -- will be created dynamically if not yet created
				case 'IdETAPAControl':
					if (!$this->lblIdETAPA) return $this->lblIdETAPA_Create();
					return $this->lblIdETAPA;
				case 'IdETAPALabel':
					if (!$this->lblIdETAPA) return $this->lblIdETAPA_Create();
					return $this->lblIdETAPA;
				case 'FASEIdFASEControl':
					if (!$this->lstFASEIdFASEObject) return $this->lstFASEIdFASEObject_Create();
					return $this->lstFASEIdFASEObject;
				case 'FASEIdFASELabel':
					if (!$this->lblFASEIdFASE) return $this->lblFASEIdFASE_Create();
					return $this->lblFASEIdFASE;
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
					// Controls that point to Etapa fields
					case 'IdETAPAControl':
						return ($this->lblIdETAPA = QType::Cast($mixValue, 'QControl'));
					case 'FASEIdFASEControl':
						return ($this->lstFASEIdFASEObject = QType::Cast($mixValue, 'QControl'));
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