<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the TipoDePago class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single TipoDePago object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TipoDePagoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read TipoDePago $TipoDePago the actual TipoDePago data class being edited
	 * @property QLabel $IdTIPODEPAGOControl
	 * @property-read QLabel $IdTIPODEPAGOLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TipoDePagoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var TipoDePago objTipoDePago
		 */
		protected $objTipoDePago;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of TipoDePago's individual data fields
		/**
		 * @var QLabel intIdTIPODEPAGO
		 */
		protected $lblIdTIPODEPAGO;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;

		// Controls that allow the viewing of TipoDePago's individual data fields
		protected $lblNombre;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TipoDePagoMetaControl to edit a single TipoDePago object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single TipoDePago object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoDePagoMetaControl
		 * @param TipoDePago $objTipoDePago new or existing TipoDePago object
		 */
		 public function __construct($objParentObject, TipoDePago $objTipoDePago) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TipoDePagoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked TipoDePago object
			$this->objTipoDePago = $objTipoDePago;

			// Figure out if we're Editing or Creating New
			if ($this->objTipoDePago->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoDePagoMetaControl
		 * @param integer $intIdTIPODEPAGO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing TipoDePago object creation - defaults to CreateOrEdit
 		 * @return TipoDePagoMetaControl
		 */
		public static function Create($objParentObject, $intIdTIPODEPAGO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdTIPODEPAGO)) {
				$objTipoDePago = TipoDePago::Load($intIdTIPODEPAGO);

				// TipoDePago was found -- return it!
				if ($objTipoDePago)
					return new TipoDePagoMetaControl($objParentObject, $objTipoDePago);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a TipoDePago object with PK arguments: ' . $intIdTIPODEPAGO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TipoDePagoMetaControl($objParentObject, new TipoDePago());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoDePagoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TipoDePago object creation - defaults to CreateOrEdit
		 * @return TipoDePagoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTIPODEPAGO = QApplication::PathInfo(0);
			return TipoDePagoMetaControl::Create($objParentObject, $intIdTIPODEPAGO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TipoDePagoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing TipoDePago object creation - defaults to CreateOrEdit
		 * @return TipoDePagoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTIPODEPAGO = QApplication::QueryString('intIdTIPODEPAGO');
			return TipoDePagoMetaControl::Create($objParentObject, $intIdTIPODEPAGO, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdTIPODEPAGO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdTIPODEPAGO_Create($strControlId = null) {
			$this->lblIdTIPODEPAGO = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTIPODEPAGO->Name = QApplication::Translate('Id T I P O D E P A G O');
			if ($this->blnEditMode)
				$this->lblIdTIPODEPAGO->Text = $this->objTipoDePago->IdTIPODEPAGO;
			else
				$this->lblIdTIPODEPAGO->Text = 'N/A';
			return $this->lblIdTIPODEPAGO;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objTipoDePago->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = TipoDePago::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objTipoDePago->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local TipoDePago object.
		 * @param boolean $blnReload reload TipoDePago from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTipoDePago->Reload();

			if ($this->lblIdTIPODEPAGO) if ($this->blnEditMode) $this->lblIdTIPODEPAGO->Text = $this->objTipoDePago->IdTIPODEPAGO;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objTipoDePago->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objTipoDePago->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TIPODEPAGO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's TipoDePago instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTipoDePago() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objTipoDePago->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the TipoDePago object
				$this->objTipoDePago->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's TipoDePago instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTipoDePago() {
			$this->objTipoDePago->Delete();
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
				case 'TipoDePago': return $this->objTipoDePago;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to TipoDePago fields -- will be created dynamically if not yet created
				case 'IdTIPODEPAGOControl':
					if (!$this->lblIdTIPODEPAGO) return $this->lblIdTIPODEPAGO_Create();
					return $this->lblIdTIPODEPAGO;
				case 'IdTIPODEPAGOLabel':
					if (!$this->lblIdTIPODEPAGO) return $this->lblIdTIPODEPAGO_Create();
					return $this->lblIdTIPODEPAGO;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
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
					// Controls that point to TipoDePago fields
					case 'IdTIPODEPAGOControl':
						return ($this->lblIdTIPODEPAGO = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
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