<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the CodigoPago class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single CodigoPago object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a CodigoPagoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read CodigoPago $CodigoPago the actual CodigoPago data class being edited
	 * @property QListBox $LICENCIAIdLICENCIAControl
	 * @property-read QLabel $LICENCIAIdLICENCIALabel
	 * @property QListBox $TIPODEPAGOIdTIPODEPAGOControl
	 * @property-read QLabel $TIPODEPAGOIdTIPODEPAGOLabel
	 * @property QTextBox $CodigoControl
	 * @property-read QLabel $CodigoLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class CodigoPagoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var CodigoPago objCodigoPago
		 */
		protected $objCodigoPago;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of CodigoPago's individual data fields
		/**
		 * @var QListBox intLICENCIAIdLICENCIA
		 */
		protected $lstLICENCIAIdLICENCIAObject;
		/**
		 * @var QListBox intTIPODEPAGOIdTIPODEPAGO
		 */
		protected $lstTIPODEPAGOIdTIPODEPAGOObject;
		/**
		 * @var QTextBox strCodigo
		 */
		protected $txtCodigo;

		// Controls that allow the viewing of CodigoPago's individual data fields
		protected $lblLICENCIAIdLICENCIA;
		protected $lblTIPODEPAGOIdTIPODEPAGO;
		protected $lblCodigo;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * CodigoPagoMetaControl to edit a single CodigoPago object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single CodigoPago object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CodigoPagoMetaControl
		 * @param CodigoPago $objCodigoPago new or existing CodigoPago object
		 */
		 public function __construct($objParentObject, CodigoPago $objCodigoPago) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this CodigoPagoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked CodigoPago object
			$this->objCodigoPago = $objCodigoPago;

			// Figure out if we're Editing or Creating New
			if ($this->objCodigoPago->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this CodigoPagoMetaControl
		 * @param integer $intLICENCIAIdLICENCIA primary key value
		 * @param integer $intTIPODEPAGOIdTIPODEPAGO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing CodigoPago object creation - defaults to CreateOrEdit
 		 * @return CodigoPagoMetaControl
		 */
		public static function Create($objParentObject, $intLICENCIAIdLICENCIA = null, $intTIPODEPAGOIdTIPODEPAGO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intLICENCIAIdLICENCIA) && strlen($intTIPODEPAGOIdTIPODEPAGO)) {
				$objCodigoPago = CodigoPago::Load($intLICENCIAIdLICENCIA, $intTIPODEPAGOIdTIPODEPAGO);

				// CodigoPago was found -- return it!
				if ($objCodigoPago)
					return new CodigoPagoMetaControl($objParentObject, $objCodigoPago);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a CodigoPago object with PK arguments: ' . $intLICENCIAIdLICENCIA . ', ' . $intTIPODEPAGOIdTIPODEPAGO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new CodigoPagoMetaControl($objParentObject, new CodigoPago());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CodigoPagoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CodigoPago object creation - defaults to CreateOrEdit
		 * @return CodigoPagoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::PathInfo(0);
			$intTIPODEPAGOIdTIPODEPAGO = QApplication::PathInfo(1);
			return CodigoPagoMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intTIPODEPAGOIdTIPODEPAGO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this CodigoPagoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing CodigoPago object creation - defaults to CreateOrEdit
		 * @return CodigoPagoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::QueryString('intLICENCIAIdLICENCIA');
			$intTIPODEPAGOIdTIPODEPAGO = QApplication::QueryString('intTIPODEPAGOIdTIPODEPAGO');
			return CodigoPagoMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intTIPODEPAGOIdTIPODEPAGO, $intCreateType);
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
				if (($this->objCodigoPago->LICENCIAIdLICENCIAObject) && ($this->objCodigoPago->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
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
			$this->lblLICENCIAIdLICENCIA->Text = ($this->objCodigoPago->LICENCIAIdLICENCIAObject) ? $this->objCodigoPago->LICENCIAIdLICENCIAObject->__toString() : null;
			$this->lblLICENCIAIdLICENCIA->Required = true;
			return $this->lblLICENCIAIdLICENCIA;
		}

		/**
		 * Create and setup QListBox lstTIPODEPAGOIdTIPODEPAGOObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstTIPODEPAGOIdTIPODEPAGOObject_Create($strControlId = null) {
			$this->lstTIPODEPAGOIdTIPODEPAGOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstTIPODEPAGOIdTIPODEPAGOObject->Name = QApplication::Translate('T I P O D E P A G O Id T I P O D E P A G O Object');
			$this->lstTIPODEPAGOIdTIPODEPAGOObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstTIPODEPAGOIdTIPODEPAGOObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objTIPODEPAGOIdTIPODEPAGOObjectArray = TipoDePago::LoadAll();
			if ($objTIPODEPAGOIdTIPODEPAGOObjectArray) foreach ($objTIPODEPAGOIdTIPODEPAGOObjectArray as $objTIPODEPAGOIdTIPODEPAGOObject) {
				$objListItem = new QListItem($objTIPODEPAGOIdTIPODEPAGOObject->__toString(), $objTIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO);
				if (($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject) && ($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO == $objTIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO))
					$objListItem->Selected = true;
				$this->lstTIPODEPAGOIdTIPODEPAGOObject->AddItem($objListItem);
			}
			return $this->lstTIPODEPAGOIdTIPODEPAGOObject;
		}

		/**
		 * Create and setup QLabel lblTIPODEPAGOIdTIPODEPAGO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTIPODEPAGOIdTIPODEPAGO_Create($strControlId = null) {
			$this->lblTIPODEPAGOIdTIPODEPAGO = new QLabel($this->objParentObject, $strControlId);
			$this->lblTIPODEPAGOIdTIPODEPAGO->Name = QApplication::Translate('T I P O D E P A G O Id T I P O D E P A G O Object');
			$this->lblTIPODEPAGOIdTIPODEPAGO->Text = ($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject) ? $this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject->__toString() : null;
			$this->lblTIPODEPAGOIdTIPODEPAGO->Required = true;
			return $this->lblTIPODEPAGOIdTIPODEPAGO;
		}

		/**
		 * Create and setup QTextBox txtCodigo
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCodigo_Create($strControlId = null) {
			$this->txtCodigo = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCodigo->Name = QApplication::Translate('Codigo');
			$this->txtCodigo->Text = $this->objCodigoPago->Codigo;
			$this->txtCodigo->MaxLength = CodigoPago::CodigoMaxLength;
			return $this->txtCodigo;
		}

		/**
		 * Create and setup QLabel lblCodigo
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCodigo_Create($strControlId = null) {
			$this->lblCodigo = new QLabel($this->objParentObject, $strControlId);
			$this->lblCodigo->Name = QApplication::Translate('Codigo');
			$this->lblCodigo->Text = $this->objCodigoPago->Codigo;
			return $this->lblCodigo;
		}



		/**
		 * Refresh this MetaControl with Data from the local CodigoPago object.
		 * @param boolean $blnReload reload CodigoPago from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objCodigoPago->Reload();

			if ($this->lstLICENCIAIdLICENCIAObject) {
					$this->lstLICENCIAIdLICENCIAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
				if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
					$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
					if (($this->objCodigoPago->LICENCIAIdLICENCIAObject) && ($this->objCodigoPago->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
						$objListItem->Selected = true;
					$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
				}
			}
			if ($this->lblLICENCIAIdLICENCIA) $this->lblLICENCIAIdLICENCIA->Text = ($this->objCodigoPago->LICENCIAIdLICENCIAObject) ? $this->objCodigoPago->LICENCIAIdLICENCIAObject->__toString() : null;

			if ($this->lstTIPODEPAGOIdTIPODEPAGOObject) {
					$this->lstTIPODEPAGOIdTIPODEPAGOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstTIPODEPAGOIdTIPODEPAGOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objTIPODEPAGOIdTIPODEPAGOObjectArray = TipoDePago::LoadAll();
				if ($objTIPODEPAGOIdTIPODEPAGOObjectArray) foreach ($objTIPODEPAGOIdTIPODEPAGOObjectArray as $objTIPODEPAGOIdTIPODEPAGOObject) {
					$objListItem = new QListItem($objTIPODEPAGOIdTIPODEPAGOObject->__toString(), $objTIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO);
					if (($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject) && ($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO == $objTIPODEPAGOIdTIPODEPAGOObject->IdTIPODEPAGO))
						$objListItem->Selected = true;
					$this->lstTIPODEPAGOIdTIPODEPAGOObject->AddItem($objListItem);
				}
			}
			if ($this->lblTIPODEPAGOIdTIPODEPAGO) $this->lblTIPODEPAGOIdTIPODEPAGO->Text = ($this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject) ? $this->objCodigoPago->TIPODEPAGOIdTIPODEPAGOObject->__toString() : null;

			if ($this->txtCodigo) $this->txtCodigo->Text = $this->objCodigoPago->Codigo;
			if ($this->lblCodigo) $this->lblCodigo->Text = $this->objCodigoPago->Codigo;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC CODIGOPAGO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's CodigoPago instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveCodigoPago() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstLICENCIAIdLICENCIAObject) $this->objCodigoPago->LICENCIAIdLICENCIA = $this->lstLICENCIAIdLICENCIAObject->SelectedValue;
				if ($this->lstTIPODEPAGOIdTIPODEPAGOObject) $this->objCodigoPago->TIPODEPAGOIdTIPODEPAGO = $this->lstTIPODEPAGOIdTIPODEPAGOObject->SelectedValue;
				if ($this->txtCodigo) $this->objCodigoPago->Codigo = $this->txtCodigo->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the CodigoPago object
				$this->objCodigoPago->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's CodigoPago instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteCodigoPago() {
			$this->objCodigoPago->Delete();
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
				case 'CodigoPago': return $this->objCodigoPago;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to CodigoPago fields -- will be created dynamically if not yet created
				case 'LICENCIAIdLICENCIAControl':
					if (!$this->lstLICENCIAIdLICENCIAObject) return $this->lstLICENCIAIdLICENCIAObject_Create();
					return $this->lstLICENCIAIdLICENCIAObject;
				case 'LICENCIAIdLICENCIALabel':
					if (!$this->lblLICENCIAIdLICENCIA) return $this->lblLICENCIAIdLICENCIA_Create();
					return $this->lblLICENCIAIdLICENCIA;
				case 'TIPODEPAGOIdTIPODEPAGOControl':
					if (!$this->lstTIPODEPAGOIdTIPODEPAGOObject) return $this->lstTIPODEPAGOIdTIPODEPAGOObject_Create();
					return $this->lstTIPODEPAGOIdTIPODEPAGOObject;
				case 'TIPODEPAGOIdTIPODEPAGOLabel':
					if (!$this->lblTIPODEPAGOIdTIPODEPAGO) return $this->lblTIPODEPAGOIdTIPODEPAGO_Create();
					return $this->lblTIPODEPAGOIdTIPODEPAGO;
				case 'CodigoControl':
					if (!$this->txtCodigo) return $this->txtCodigo_Create();
					return $this->txtCodigo;
				case 'CodigoLabel':
					if (!$this->lblCodigo) return $this->lblCodigo_Create();
					return $this->lblCodigo;
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
					// Controls that point to CodigoPago fields
					case 'LICENCIAIdLICENCIAControl':
						return ($this->lstLICENCIAIdLICENCIAObject = QType::Cast($mixValue, 'QControl'));
					case 'TIPODEPAGOIdTIPODEPAGOControl':
						return ($this->lstTIPODEPAGOIdTIPODEPAGOObject = QType::Cast($mixValue, 'QControl'));
					case 'CodigoControl':
						return ($this->txtCodigo = QType::Cast($mixValue, 'QControl'));
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