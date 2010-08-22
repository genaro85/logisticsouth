<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Transporte class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Transporte object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a TransporteMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Transporte $Transporte the actual Transporte data class being edited
	 * @property QLabel $IdTRANSPORTEControl
	 * @property-read QLabel $IdTRANSPORTELabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QTextBox $DireccionControl
	 * @property-read QLabel $DireccionLabel
	 * @property QTextBox $TelefonoControl
	 * @property-read QLabel $TelefonoLabel
	 * @property QListBox $PAISIdPAISControl
	 * @property-read QLabel $PAISIdPAISLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class TransporteMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Transporte objTransporte
		 */
		protected $objTransporte;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Transporte's individual data fields
		/**
		 * @var QLabel intIdTRANSPORTE
		 */
		protected $lblIdTRANSPORTE;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;
		/**
		 * @var QTextBox strDireccion
		 */
		protected $txtDireccion;
		/**
		 * @var QTextBox strTelefono
		 */
		protected $txtTelefono;
		/**
		 * @var QListBox intPAISIdPAIS
		 */
		protected $lstPAISIdPAISObject;

		// Controls that allow the viewing of Transporte's individual data fields
		protected $lblNombre;
		protected $lblDireccion;
		protected $lblTelefono;
		protected $lblPAISIdPAIS;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * TransporteMetaControl to edit a single Transporte object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Transporte object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TransporteMetaControl
		 * @param Transporte $objTransporte new or existing Transporte object
		 */
		 public function __construct($objParentObject, Transporte $objTransporte) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this TransporteMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Transporte object
			$this->objTransporte = $objTransporte;

			// Figure out if we're Editing or Creating New
			if ($this->objTransporte->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this TransporteMetaControl
		 * @param integer $intIdTRANSPORTE primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Transporte object creation - defaults to CreateOrEdit
 		 * @return TransporteMetaControl
		 */
		public static function Create($objParentObject, $intIdTRANSPORTE = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdTRANSPORTE)) {
				$objTransporte = Transporte::Load($intIdTRANSPORTE);

				// Transporte was found -- return it!
				if ($objTransporte)
					return new TransporteMetaControl($objParentObject, $objTransporte);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Transporte object with PK arguments: ' . $intIdTRANSPORTE);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new TransporteMetaControl($objParentObject, new Transporte());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TransporteMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Transporte object creation - defaults to CreateOrEdit
		 * @return TransporteMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTRANSPORTE = QApplication::PathInfo(0);
			return TransporteMetaControl::Create($objParentObject, $intIdTRANSPORTE, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this TransporteMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Transporte object creation - defaults to CreateOrEdit
		 * @return TransporteMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdTRANSPORTE = QApplication::QueryString('intIdTRANSPORTE');
			return TransporteMetaControl::Create($objParentObject, $intIdTRANSPORTE, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdTRANSPORTE
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdTRANSPORTE_Create($strControlId = null) {
			$this->lblIdTRANSPORTE = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdTRANSPORTE->Name = QApplication::Translate('Id T R A N S P O R T E');
			if ($this->blnEditMode)
				$this->lblIdTRANSPORTE->Text = $this->objTransporte->IdTRANSPORTE;
			else
				$this->lblIdTRANSPORTE->Text = 'N/A';
			return $this->lblIdTRANSPORTE;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objTransporte->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Transporte::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objTransporte->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtDireccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDireccion_Create($strControlId = null) {
			$this->txtDireccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDireccion->Name = QApplication::Translate('Direccion');
			$this->txtDireccion->Text = $this->objTransporte->Direccion;
			$this->txtDireccion->MaxLength = Transporte::DireccionMaxLength;
			return $this->txtDireccion;
		}

		/**
		 * Create and setup QLabel lblDireccion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDireccion_Create($strControlId = null) {
			$this->lblDireccion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDireccion->Name = QApplication::Translate('Direccion');
			$this->lblDireccion->Text = $this->objTransporte->Direccion;
			return $this->lblDireccion;
		}

		/**
		 * Create and setup QTextBox txtTelefono
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtTelefono_Create($strControlId = null) {
			$this->txtTelefono = new QTextBox($this->objParentObject, $strControlId);
			$this->txtTelefono->Name = QApplication::Translate('Telefono');
			$this->txtTelefono->Text = $this->objTransporte->Telefono;
			$this->txtTelefono->MaxLength = Transporte::TelefonoMaxLength;
			return $this->txtTelefono;
		}

		/**
		 * Create and setup QLabel lblTelefono
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblTelefono_Create($strControlId = null) {
			$this->lblTelefono = new QLabel($this->objParentObject, $strControlId);
			$this->lblTelefono->Name = QApplication::Translate('Telefono');
			$this->lblTelefono->Text = $this->objTransporte->Telefono;
			return $this->lblTelefono;
		}

		/**
		 * Create and setup QListBox lstPAISIdPAISObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstPAISIdPAISObject_Create($strControlId = null) {
			$this->lstPAISIdPAISObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstPAISIdPAISObject->Name = QApplication::Translate('P A I S Id P A I S Object');
			$this->lstPAISIdPAISObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstPAISIdPAISObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objPAISIdPAISObjectArray = Pais::LoadAll();
			if ($objPAISIdPAISObjectArray) foreach ($objPAISIdPAISObjectArray as $objPAISIdPAISObject) {
				$objListItem = new QListItem($objPAISIdPAISObject->__toString(), $objPAISIdPAISObject->IdPAIS);
				if (($this->objTransporte->PAISIdPAISObject) && ($this->objTransporte->PAISIdPAISObject->IdPAIS == $objPAISIdPAISObject->IdPAIS))
					$objListItem->Selected = true;
				$this->lstPAISIdPAISObject->AddItem($objListItem);
			}
			return $this->lstPAISIdPAISObject;
		}

		/**
		 * Create and setup QLabel lblPAISIdPAIS
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPAISIdPAIS_Create($strControlId = null) {
			$this->lblPAISIdPAIS = new QLabel($this->objParentObject, $strControlId);
			$this->lblPAISIdPAIS->Name = QApplication::Translate('P A I S Id P A I S Object');
			$this->lblPAISIdPAIS->Text = ($this->objTransporte->PAISIdPAISObject) ? $this->objTransporte->PAISIdPAISObject->__toString() : null;
			$this->lblPAISIdPAIS->Required = true;
			return $this->lblPAISIdPAIS;
		}



		/**
		 * Refresh this MetaControl with Data from the local Transporte object.
		 * @param boolean $blnReload reload Transporte from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objTransporte->Reload();

			if ($this->lblIdTRANSPORTE) if ($this->blnEditMode) $this->lblIdTRANSPORTE->Text = $this->objTransporte->IdTRANSPORTE;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objTransporte->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objTransporte->Nombre;

			if ($this->txtDireccion) $this->txtDireccion->Text = $this->objTransporte->Direccion;
			if ($this->lblDireccion) $this->lblDireccion->Text = $this->objTransporte->Direccion;

			if ($this->txtTelefono) $this->txtTelefono->Text = $this->objTransporte->Telefono;
			if ($this->lblTelefono) $this->lblTelefono->Text = $this->objTransporte->Telefono;

			if ($this->lstPAISIdPAISObject) {
					$this->lstPAISIdPAISObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPAISIdPAISObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPAISIdPAISObjectArray = Pais::LoadAll();
				if ($objPAISIdPAISObjectArray) foreach ($objPAISIdPAISObjectArray as $objPAISIdPAISObject) {
					$objListItem = new QListItem($objPAISIdPAISObject->__toString(), $objPAISIdPAISObject->IdPAIS);
					if (($this->objTransporte->PAISIdPAISObject) && ($this->objTransporte->PAISIdPAISObject->IdPAIS == $objPAISIdPAISObject->IdPAIS))
						$objListItem->Selected = true;
					$this->lstPAISIdPAISObject->AddItem($objListItem);
				}
			}
			if ($this->lblPAISIdPAIS) $this->lblPAISIdPAIS->Text = ($this->objTransporte->PAISIdPAISObject) ? $this->objTransporte->PAISIdPAISObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC TRANSPORTE OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Transporte instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveTransporte() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objTransporte->Nombre = $this->txtNombre->Text;
				if ($this->txtDireccion) $this->objTransporte->Direccion = $this->txtDireccion->Text;
				if ($this->txtTelefono) $this->objTransporte->Telefono = $this->txtTelefono->Text;
				if ($this->lstPAISIdPAISObject) $this->objTransporte->PAISIdPAIS = $this->lstPAISIdPAISObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Transporte object
				$this->objTransporte->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Transporte instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteTransporte() {
			$this->objTransporte->Delete();
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
				case 'Transporte': return $this->objTransporte;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Transporte fields -- will be created dynamically if not yet created
				case 'IdTRANSPORTEControl':
					if (!$this->lblIdTRANSPORTE) return $this->lblIdTRANSPORTE_Create();
					return $this->lblIdTRANSPORTE;
				case 'IdTRANSPORTELabel':
					if (!$this->lblIdTRANSPORTE) return $this->lblIdTRANSPORTE_Create();
					return $this->lblIdTRANSPORTE;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'DireccionControl':
					if (!$this->txtDireccion) return $this->txtDireccion_Create();
					return $this->txtDireccion;
				case 'DireccionLabel':
					if (!$this->lblDireccion) return $this->lblDireccion_Create();
					return $this->lblDireccion;
				case 'TelefonoControl':
					if (!$this->txtTelefono) return $this->txtTelefono_Create();
					return $this->txtTelefono;
				case 'TelefonoLabel':
					if (!$this->lblTelefono) return $this->lblTelefono_Create();
					return $this->lblTelefono;
				case 'PAISIdPAISControl':
					if (!$this->lstPAISIdPAISObject) return $this->lstPAISIdPAISObject_Create();
					return $this->lstPAISIdPAISObject;
				case 'PAISIdPAISLabel':
					if (!$this->lblPAISIdPAIS) return $this->lblPAISIdPAIS_Create();
					return $this->lblPAISIdPAIS;
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
					// Controls that point to Transporte fields
					case 'IdTRANSPORTEControl':
						return ($this->lblIdTRANSPORTE = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'DireccionControl':
						return ($this->txtDireccion = QType::Cast($mixValue, 'QControl'));
					case 'TelefonoControl':
						return ($this->txtTelefono = QType::Cast($mixValue, 'QControl'));
					case 'PAISIdPAISControl':
						return ($this->lstPAISIdPAISObject = QType::Cast($mixValue, 'QControl'));
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