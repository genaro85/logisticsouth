<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Proveedor class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Proveedor object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ProveedorMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Proveedor $Proveedor the actual Proveedor data class being edited
	 * @property QLabel $IdPROVEEDORControl
	 * @property-read QLabel $IdPROVEEDORLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QTextBox $DireccionControl
	 * @property-read QLabel $DireccionLabel
	 * @property QTextBox $TelefonoControl
	 * @property-read QLabel $TelefonoLabel
	 * @property QTextBox $EmailControl
	 * @property-read QLabel $EmailLabel
	 * @property QListBox $PAISIdPAISControl
	 * @property-read QLabel $PAISIdPAISLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ProveedorMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Proveedor objProveedor
		 */
		protected $objProveedor;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Proveedor's individual data fields
		/**
		 * @var QLabel intIdPROVEEDOR
		 */
		protected $lblIdPROVEEDOR;
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
		 * @var QTextBox strEmail
		 */
		protected $txtEmail;
		/**
		 * @var QListBox intPAISIdPAIS
		 */
		protected $lstPAISIdPAISObject;

		// Controls that allow the viewing of Proveedor's individual data fields
		protected $lblNombre;
		protected $lblDireccion;
		protected $lblTelefono;
		protected $lblEmail;
		protected $lblPAISIdPAIS;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ProveedorMetaControl to edit a single Proveedor object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Proveedor object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProveedorMetaControl
		 * @param Proveedor $objProveedor new or existing Proveedor object
		 */
		 public function __construct($objParentObject, Proveedor $objProveedor) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ProveedorMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Proveedor object
			$this->objProveedor = $objProveedor;

			// Figure out if we're Editing or Creating New
			if ($this->objProveedor->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProveedorMetaControl
		 * @param integer $intIdPROVEEDOR primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Proveedor object creation - defaults to CreateOrEdit
 		 * @return ProveedorMetaControl
		 */
		public static function Create($objParentObject, $intIdPROVEEDOR = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdPROVEEDOR)) {
				$objProveedor = Proveedor::Load($intIdPROVEEDOR);

				// Proveedor was found -- return it!
				if ($objProveedor)
					return new ProveedorMetaControl($objParentObject, $objProveedor);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Proveedor object with PK arguments: ' . $intIdPROVEEDOR);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ProveedorMetaControl($objParentObject, new Proveedor());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProveedorMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Proveedor object creation - defaults to CreateOrEdit
		 * @return ProveedorMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPROVEEDOR = QApplication::PathInfo(0);
			return ProveedorMetaControl::Create($objParentObject, $intIdPROVEEDOR, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProveedorMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Proveedor object creation - defaults to CreateOrEdit
		 * @return ProveedorMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPROVEEDOR = QApplication::QueryString('intIdPROVEEDOR');
			return ProveedorMetaControl::Create($objParentObject, $intIdPROVEEDOR, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdPROVEEDOR
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdPROVEEDOR_Create($strControlId = null) {
			$this->lblIdPROVEEDOR = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdPROVEEDOR->Name = QApplication::Translate('Id P R O V E E D O R');
			if ($this->blnEditMode)
				$this->lblIdPROVEEDOR->Text = $this->objProveedor->IdPROVEEDOR;
			else
				$this->lblIdPROVEEDOR->Text = 'N/A';
			return $this->lblIdPROVEEDOR;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objProveedor->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Proveedor::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objProveedor->Nombre;
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
			$this->txtDireccion->Text = $this->objProveedor->Direccion;
			$this->txtDireccion->Required = true;
			$this->txtDireccion->TextMode = QTextMode::MultiLine;
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
			$this->lblDireccion->Text = $this->objProveedor->Direccion;
			$this->lblDireccion->Required = true;
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
			$this->txtTelefono->Text = $this->objProveedor->Telefono;
			$this->txtTelefono->MaxLength = Proveedor::TelefonoMaxLength;
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
			$this->lblTelefono->Text = $this->objProveedor->Telefono;
			return $this->lblTelefono;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objProveedor->Email;
			$this->txtEmail->MaxLength = Proveedor::EmailMaxLength;
			return $this->txtEmail;
		}

		/**
		 * Create and setup QLabel lblEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblEmail_Create($strControlId = null) {
			$this->lblEmail = new QLabel($this->objParentObject, $strControlId);
			$this->lblEmail->Name = QApplication::Translate('Email');
			$this->lblEmail->Text = $this->objProveedor->Email;
			return $this->lblEmail;
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
				if (($this->objProveedor->PAISIdPAISObject) && ($this->objProveedor->PAISIdPAISObject->IdPAIS == $objPAISIdPAISObject->IdPAIS))
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
			$this->lblPAISIdPAIS->Text = ($this->objProveedor->PAISIdPAISObject) ? $this->objProveedor->PAISIdPAISObject->__toString() : null;
			$this->lblPAISIdPAIS->Required = true;
			return $this->lblPAISIdPAIS;
		}



		/**
		 * Refresh this MetaControl with Data from the local Proveedor object.
		 * @param boolean $blnReload reload Proveedor from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objProveedor->Reload();

			if ($this->lblIdPROVEEDOR) if ($this->blnEditMode) $this->lblIdPROVEEDOR->Text = $this->objProveedor->IdPROVEEDOR;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objProveedor->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objProveedor->Nombre;

			if ($this->txtDireccion) $this->txtDireccion->Text = $this->objProveedor->Direccion;
			if ($this->lblDireccion) $this->lblDireccion->Text = $this->objProveedor->Direccion;

			if ($this->txtTelefono) $this->txtTelefono->Text = $this->objProveedor->Telefono;
			if ($this->lblTelefono) $this->lblTelefono->Text = $this->objProveedor->Telefono;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objProveedor->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objProveedor->Email;

			if ($this->lstPAISIdPAISObject) {
					$this->lstPAISIdPAISObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPAISIdPAISObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPAISIdPAISObjectArray = Pais::LoadAll();
				if ($objPAISIdPAISObjectArray) foreach ($objPAISIdPAISObjectArray as $objPAISIdPAISObject) {
					$objListItem = new QListItem($objPAISIdPAISObject->__toString(), $objPAISIdPAISObject->IdPAIS);
					if (($this->objProveedor->PAISIdPAISObject) && ($this->objProveedor->PAISIdPAISObject->IdPAIS == $objPAISIdPAISObject->IdPAIS))
						$objListItem->Selected = true;
					$this->lstPAISIdPAISObject->AddItem($objListItem);
				}
			}
			if ($this->lblPAISIdPAIS) $this->lblPAISIdPAIS->Text = ($this->objProveedor->PAISIdPAISObject) ? $this->objProveedor->PAISIdPAISObject->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC PROVEEDOR OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Proveedor instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveProveedor() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objProveedor->Nombre = $this->txtNombre->Text;
				if ($this->txtDireccion) $this->objProveedor->Direccion = $this->txtDireccion->Text;
				if ($this->txtTelefono) $this->objProveedor->Telefono = $this->txtTelefono->Text;
				if ($this->txtEmail) $this->objProveedor->Email = $this->txtEmail->Text;
				if ($this->lstPAISIdPAISObject) $this->objProveedor->PAISIdPAIS = $this->lstPAISIdPAISObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Proveedor object
				$this->objProveedor->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Proveedor instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteProveedor() {
			$this->objProveedor->Delete();
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
				case 'Proveedor': return $this->objProveedor;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Proveedor fields -- will be created dynamically if not yet created
				case 'IdPROVEEDORControl':
					if (!$this->lblIdPROVEEDOR) return $this->lblIdPROVEEDOR_Create();
					return $this->lblIdPROVEEDOR;
				case 'IdPROVEEDORLabel':
					if (!$this->lblIdPROVEEDOR) return $this->lblIdPROVEEDOR_Create();
					return $this->lblIdPROVEEDOR;
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
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
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
					// Controls that point to Proveedor fields
					case 'IdPROVEEDORControl':
						return ($this->lblIdPROVEEDOR = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'DireccionControl':
						return ($this->txtDireccion = QType::Cast($mixValue, 'QControl'));
					case 'TelefonoControl':
						return ($this->txtTelefono = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
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