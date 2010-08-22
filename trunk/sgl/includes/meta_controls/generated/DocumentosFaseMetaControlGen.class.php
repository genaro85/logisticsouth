<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the DocumentosFase class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single DocumentosFase object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DocumentosFaseMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read DocumentosFase $DocumentosFase the actual DocumentosFase data class being edited
	 * @property QListBox $DOCUMENTOIdDOCUMENTOControl
	 * @property-read QLabel $DOCUMENTOIdDOCUMENTOLabel
	 * @property QListBox $FASEIdFASEControl
	 * @property-read QLabel $FASEIdFASELabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DocumentosFaseMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var DocumentosFase objDocumentosFase
		 */
		protected $objDocumentosFase;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of DocumentosFase's individual data fields
		/**
		 * @var QListBox intDOCUMENTOIdDOCUMENTO
		 */
		protected $lstDOCUMENTOIdDOCUMENTOObject;
		/**
		 * @var QListBox intFASEIdFASE
		 */
		protected $lstFASEIdFASEObject;

		// Controls that allow the viewing of DocumentosFase's individual data fields
		protected $lblDOCUMENTOIdDOCUMENTO;
		protected $lblFASEIdFASE;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DocumentosFaseMetaControl to edit a single DocumentosFase object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single DocumentosFase object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentosFaseMetaControl
		 * @param DocumentosFase $objDocumentosFase new or existing DocumentosFase object
		 */
		 public function __construct($objParentObject, DocumentosFase $objDocumentosFase) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DocumentosFaseMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked DocumentosFase object
			$this->objDocumentosFase = $objDocumentosFase;

			// Figure out if we're Editing or Creating New
			if ($this->objDocumentosFase->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentosFaseMetaControl
		 * @param integer $intDOCUMENTOIdDOCUMENTO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing DocumentosFase object creation - defaults to CreateOrEdit
 		 * @return DocumentosFaseMetaControl
		 */
		public static function Create($objParentObject, $intDOCUMENTOIdDOCUMENTO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intDOCUMENTOIdDOCUMENTO)) {
				$objDocumentosFase = DocumentosFase::Load($intDOCUMENTOIdDOCUMENTO);

				// DocumentosFase was found -- return it!
				if ($objDocumentosFase)
					return new DocumentosFaseMetaControl($objParentObject, $objDocumentosFase);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a DocumentosFase object with PK arguments: ' . $intDOCUMENTOIdDOCUMENTO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DocumentosFaseMetaControl($objParentObject, new DocumentosFase());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentosFaseMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DocumentosFase object creation - defaults to CreateOrEdit
		 * @return DocumentosFaseMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intDOCUMENTOIdDOCUMENTO = QApplication::PathInfo(0);
			return DocumentosFaseMetaControl::Create($objParentObject, $intDOCUMENTOIdDOCUMENTO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentosFaseMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing DocumentosFase object creation - defaults to CreateOrEdit
		 * @return DocumentosFaseMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intDOCUMENTOIdDOCUMENTO = QApplication::QueryString('intDOCUMENTOIdDOCUMENTO');
			return DocumentosFaseMetaControl::Create($objParentObject, $intDOCUMENTOIdDOCUMENTO, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QListBox lstDOCUMENTOIdDOCUMENTOObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDOCUMENTOIdDOCUMENTOObject_Create($strControlId = null) {
			$this->lstDOCUMENTOIdDOCUMENTOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstDOCUMENTOIdDOCUMENTOObject->Name = QApplication::Translate('D O C U M E N T O Id D O C U M E N T O Object');
			$this->lstDOCUMENTOIdDOCUMENTOObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objDOCUMENTOIdDOCUMENTOObjectArray = Documento::LoadAll();
			if ($objDOCUMENTOIdDOCUMENTOObjectArray) foreach ($objDOCUMENTOIdDOCUMENTOObjectArray as $objDOCUMENTOIdDOCUMENTOObject) {
				$objListItem = new QListItem($objDOCUMENTOIdDOCUMENTOObject->__toString(), $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO);
				if (($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject) && ($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO == $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO))
					$objListItem->Selected = true;
				$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
			}
			return $this->lstDOCUMENTOIdDOCUMENTOObject;
		}

		/**
		 * Create and setup QLabel lblDOCUMENTOIdDOCUMENTO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDOCUMENTOIdDOCUMENTO_Create($strControlId = null) {
			$this->lblDOCUMENTOIdDOCUMENTO = new QLabel($this->objParentObject, $strControlId);
			$this->lblDOCUMENTOIdDOCUMENTO->Name = QApplication::Translate('D O C U M E N T O Id D O C U M E N T O Object');
			$this->lblDOCUMENTOIdDOCUMENTO->Text = ($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject) ? $this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject->__toString() : null;
			$this->lblDOCUMENTOIdDOCUMENTO->Required = true;
			return $this->lblDOCUMENTOIdDOCUMENTO;
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
				if (($this->objDocumentosFase->FASEIdFASEObject) && ($this->objDocumentosFase->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
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
			$this->lblFASEIdFASE->Text = ($this->objDocumentosFase->FASEIdFASEObject) ? $this->objDocumentosFase->FASEIdFASEObject->__toString() : null;
			return $this->lblFASEIdFASE;
		}



		/**
		 * Refresh this MetaControl with Data from the local DocumentosFase object.
		 * @param boolean $blnReload reload DocumentosFase from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDocumentosFase->Reload();

			if ($this->lstDOCUMENTOIdDOCUMENTOObject) {
					$this->lstDOCUMENTOIdDOCUMENTOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objDOCUMENTOIdDOCUMENTOObjectArray = Documento::LoadAll();
				if ($objDOCUMENTOIdDOCUMENTOObjectArray) foreach ($objDOCUMENTOIdDOCUMENTOObjectArray as $objDOCUMENTOIdDOCUMENTOObject) {
					$objListItem = new QListItem($objDOCUMENTOIdDOCUMENTOObject->__toString(), $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO);
					if (($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject) && ($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO == $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO))
						$objListItem->Selected = true;
					$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
				}
			}
			if ($this->lblDOCUMENTOIdDOCUMENTO) $this->lblDOCUMENTOIdDOCUMENTO->Text = ($this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject) ? $this->objDocumentosFase->DOCUMENTOIdDOCUMENTOObject->__toString() : null;

			if ($this->lstFASEIdFASEObject) {
					$this->lstFASEIdFASEObject->RemoveAllItems();
				$this->lstFASEIdFASEObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objFASEIdFASEObjectArray = Fase::LoadAll();
				if ($objFASEIdFASEObjectArray) foreach ($objFASEIdFASEObjectArray as $objFASEIdFASEObject) {
					$objListItem = new QListItem($objFASEIdFASEObject->__toString(), $objFASEIdFASEObject->IdFASE);
					if (($this->objDocumentosFase->FASEIdFASEObject) && ($this->objDocumentosFase->FASEIdFASEObject->IdFASE == $objFASEIdFASEObject->IdFASE))
						$objListItem->Selected = true;
					$this->lstFASEIdFASEObject->AddItem($objListItem);
				}
			}
			if ($this->lblFASEIdFASE) $this->lblFASEIdFASE->Text = ($this->objDocumentosFase->FASEIdFASEObject) ? $this->objDocumentosFase->FASEIdFASEObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DOCUMENTOSFASE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's DocumentosFase instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDocumentosFase() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstDOCUMENTOIdDOCUMENTOObject) $this->objDocumentosFase->DOCUMENTOIdDOCUMENTO = $this->lstDOCUMENTOIdDOCUMENTOObject->SelectedValue;
				if ($this->lstFASEIdFASEObject) $this->objDocumentosFase->FASEIdFASE = $this->lstFASEIdFASEObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the DocumentosFase object
				$this->objDocumentosFase->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's DocumentosFase instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDocumentosFase() {
			$this->objDocumentosFase->Delete();
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
				case 'DocumentosFase': return $this->objDocumentosFase;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to DocumentosFase fields -- will be created dynamically if not yet created
				case 'DOCUMENTOIdDOCUMENTOControl':
					if (!$this->lstDOCUMENTOIdDOCUMENTOObject) return $this->lstDOCUMENTOIdDOCUMENTOObject_Create();
					return $this->lstDOCUMENTOIdDOCUMENTOObject;
				case 'DOCUMENTOIdDOCUMENTOLabel':
					if (!$this->lblDOCUMENTOIdDOCUMENTO) return $this->lblDOCUMENTOIdDOCUMENTO_Create();
					return $this->lblDOCUMENTOIdDOCUMENTO;
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
					// Controls that point to DocumentosFase fields
					case 'DOCUMENTOIdDOCUMENTOControl':
						return ($this->lstDOCUMENTOIdDOCUMENTOObject = QType::Cast($mixValue, 'QControl'));
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