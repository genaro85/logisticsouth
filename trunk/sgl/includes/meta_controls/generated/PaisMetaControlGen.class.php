<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Pais class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Pais object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a PaisMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Pais $Pais the actual Pais data class being edited
	 * @property QLabel $IdPAISControl
	 * @property-read QLabel $IdPAISLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class PaisMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Pais objPais
		 */
		protected $objPais;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Pais's individual data fields
		/**
		 * @var QLabel intIdPAIS
		 */
		protected $lblIdPAIS;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;

		// Controls that allow the viewing of Pais's individual data fields
		protected $lblNombre;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * PaisMetaControl to edit a single Pais object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Pais object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PaisMetaControl
		 * @param Pais $objPais new or existing Pais object
		 */
		 public function __construct($objParentObject, Pais $objPais) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this PaisMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Pais object
			$this->objPais = $objPais;

			// Figure out if we're Editing or Creating New
			if ($this->objPais->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this PaisMetaControl
		 * @param integer $intIdPAIS primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Pais object creation - defaults to CreateOrEdit
 		 * @return PaisMetaControl
		 */
		public static function Create($objParentObject, $intIdPAIS = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdPAIS)) {
				$objPais = Pais::Load($intIdPAIS);

				// Pais was found -- return it!
				if ($objPais)
					return new PaisMetaControl($objParentObject, $objPais);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Pais object with PK arguments: ' . $intIdPAIS);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new PaisMetaControl($objParentObject, new Pais());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PaisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Pais object creation - defaults to CreateOrEdit
		 * @return PaisMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPAIS = QApplication::PathInfo(0);
			return PaisMetaControl::Create($objParentObject, $intIdPAIS, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this PaisMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Pais object creation - defaults to CreateOrEdit
		 * @return PaisMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPAIS = QApplication::QueryString('intIdPAIS');
			return PaisMetaControl::Create($objParentObject, $intIdPAIS, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdPAIS
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdPAIS_Create($strControlId = null) {
			$this->lblIdPAIS = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdPAIS->Name = QApplication::Translate('Id P A I S');
			if ($this->blnEditMode)
				$this->lblIdPAIS->Text = $this->objPais->IdPAIS;
			else
				$this->lblIdPAIS->Text = 'N/A';
			return $this->lblIdPAIS;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objPais->Nombre;
			$this->txtNombre->MaxLength = Pais::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objPais->Nombre;
			return $this->lblNombre;
		}



		/**
		 * Refresh this MetaControl with Data from the local Pais object.
		 * @param boolean $blnReload reload Pais from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objPais->Reload();

			if ($this->lblIdPAIS) if ($this->blnEditMode) $this->lblIdPAIS->Text = $this->objPais->IdPAIS;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objPais->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objPais->Nombre;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC PAIS OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Pais instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SavePais() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objPais->Nombre = $this->txtNombre->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Pais object
				$this->objPais->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Pais instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeletePais() {
			$this->objPais->Delete();
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
				case 'Pais': return $this->objPais;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Pais fields -- will be created dynamically if not yet created
				case 'IdPAISControl':
					if (!$this->lblIdPAIS) return $this->lblIdPAIS_Create();
					return $this->lblIdPAIS;
				case 'IdPAISLabel':
					if (!$this->lblIdPAIS) return $this->lblIdPAIS_Create();
					return $this->lblIdPAIS;
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
					// Controls that point to Pais fields
					case 'IdPAISControl':
						return ($this->lblIdPAIS = QType::Cast($mixValue, 'QControl'));
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