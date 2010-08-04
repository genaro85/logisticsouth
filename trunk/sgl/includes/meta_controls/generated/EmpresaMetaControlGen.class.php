<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Empresa class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Empresa object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EmpresaMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Empresa $Empresa the actual Empresa data class being edited
	 * @property QLabel $IdEMPRESAControl
	 * @property-read QLabel $IdEMPRESALabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QTextBox $RifControl
	 * @property-read QLabel $RifLabel
	 * @property QTextBox $DireccionControl
	 * @property-read QLabel $DireccionLabel
	 * @property QTextBox $TelefonoControl
	 * @property-read QLabel $TelefonoLabel
	 * @property QTextBox $EmailControl
	 * @property-read QLabel $EmailLabel
	 * @property QTextBox $LoginControl
	 * @property-read QLabel $LoginLabel
	 * @property QTextBox $PasswordControl
	 * @property-read QLabel $PasswordLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class EmpresaMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Empresa objEmpresa
		 */
		protected $objEmpresa;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Empresa's individual data fields
		/**
		 * @var QLabel intIdEMPRESA
		 */
		protected $lblIdEMPRESA;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;
		/**
		 * @var QTextBox strRif
		 */
		protected $txtRif;
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
		 * @var QTextBox strLogin
		 */
		protected $txtLogin;
		/**
		 * @var QTextBox strPassword
		 */
		protected $txtPassword;

		// Controls that allow the viewing of Empresa's individual data fields
		protected $lblNombre;
		protected $lblRif;
		protected $lblDireccion;
		protected $lblTelefono;
		protected $lblEmail;
		protected $lblLogin;
		protected $lblPassword;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * EmpresaMetaControl to edit a single Empresa object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Empresa object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpresaMetaControl
		 * @param Empresa $objEmpresa new or existing Empresa object
		 */
		 public function __construct($objParentObject, Empresa $objEmpresa) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EmpresaMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Empresa object
			$this->objEmpresa = $objEmpresa;

			// Figure out if we're Editing or Creating New
			if ($this->objEmpresa->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpresaMetaControl
		 * @param integer $intIdEMPRESA primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Empresa object creation - defaults to CreateOrEdit
 		 * @return EmpresaMetaControl
		 */
		public static function Create($objParentObject, $intIdEMPRESA = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdEMPRESA)) {
				$objEmpresa = Empresa::Load($intIdEMPRESA);

				// Empresa was found -- return it!
				if ($objEmpresa)
					return new EmpresaMetaControl($objParentObject, $objEmpresa);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Empresa object with PK arguments: ' . $intIdEMPRESA);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EmpresaMetaControl($objParentObject, new Empresa());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpresaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Empresa object creation - defaults to CreateOrEdit
		 * @return EmpresaMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEMPRESA = QApplication::PathInfo(0);
			return EmpresaMetaControl::Create($objParentObject, $intIdEMPRESA, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpresaMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Empresa object creation - defaults to CreateOrEdit
		 * @return EmpresaMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEMPRESA = QApplication::QueryString('intIdEMPRESA');
			return EmpresaMetaControl::Create($objParentObject, $intIdEMPRESA, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdEMPRESA
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdEMPRESA_Create($strControlId = null) {
			$this->lblIdEMPRESA = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdEMPRESA->Name = QApplication::Translate('Id E M P R E S A');
			if ($this->blnEditMode)
				$this->lblIdEMPRESA->Text = $this->objEmpresa->IdEMPRESA;
			else
				$this->lblIdEMPRESA->Text = 'N/A';
			return $this->lblIdEMPRESA;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objEmpresa->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Empresa::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objEmpresa->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtRif
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtRif_Create($strControlId = null) {
			$this->txtRif = new QTextBox($this->objParentObject, $strControlId);
			$this->txtRif->Name = QApplication::Translate('Rif');
			$this->txtRif->Text = $this->objEmpresa->Rif;
			$this->txtRif->Required = true;
			$this->txtRif->MaxLength = Empresa::RifMaxLength;
			return $this->txtRif;
		}

		/**
		 * Create and setup QLabel lblRif
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblRif_Create($strControlId = null) {
			$this->lblRif = new QLabel($this->objParentObject, $strControlId);
			$this->lblRif->Name = QApplication::Translate('Rif');
			$this->lblRif->Text = $this->objEmpresa->Rif;
			$this->lblRif->Required = true;
			return $this->lblRif;
		}

		/**
		 * Create and setup QTextBox txtDireccion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDireccion_Create($strControlId = null) {
			$this->txtDireccion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDireccion->Name = QApplication::Translate('Direccion');
			$this->txtDireccion->Text = $this->objEmpresa->Direccion;
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
			$this->lblDireccion->Text = $this->objEmpresa->Direccion;
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
			$this->txtTelefono->Text = $this->objEmpresa->Telefono;
			$this->txtTelefono->MaxLength = Empresa::TelefonoMaxLength;
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
			$this->lblTelefono->Text = $this->objEmpresa->Telefono;
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
			$this->txtEmail->Text = $this->objEmpresa->Email;
			$this->txtEmail->MaxLength = Empresa::EmailMaxLength;
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
			$this->lblEmail->Text = $this->objEmpresa->Email;
			return $this->lblEmail;
		}

		/**
		 * Create and setup QTextBox txtLogin
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLogin_Create($strControlId = null) {
			$this->txtLogin = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLogin->Name = QApplication::Translate('Login');
			$this->txtLogin->Text = $this->objEmpresa->Login;
			$this->txtLogin->MaxLength = Empresa::LoginMaxLength;
			return $this->txtLogin;
		}

		/**
		 * Create and setup QLabel lblLogin
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblLogin_Create($strControlId = null) {
			$this->lblLogin = new QLabel($this->objParentObject, $strControlId);
			$this->lblLogin->Name = QApplication::Translate('Login');
			$this->lblLogin->Text = $this->objEmpresa->Login;
			return $this->lblLogin;
		}

		/**
		 * Create and setup QTextBox txtPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPassword_Create($strControlId = null) {
			$this->txtPassword = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPassword->Name = QApplication::Translate('Password');
			$this->txtPassword->Text = $this->objEmpresa->Password;
			$this->txtPassword->MaxLength = Empresa::PasswordMaxLength;
			return $this->txtPassword;
		}

		/**
		 * Create and setup QLabel lblPassword
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPassword_Create($strControlId = null) {
			$this->lblPassword = new QLabel($this->objParentObject, $strControlId);
			$this->lblPassword->Name = QApplication::Translate('Password');
			$this->lblPassword->Text = $this->objEmpresa->Password;
			return $this->lblPassword;
		}



		/**
		 * Refresh this MetaControl with Data from the local Empresa object.
		 * @param boolean $blnReload reload Empresa from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEmpresa->Reload();

			if ($this->lblIdEMPRESA) if ($this->blnEditMode) $this->lblIdEMPRESA->Text = $this->objEmpresa->IdEMPRESA;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objEmpresa->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objEmpresa->Nombre;

			if ($this->txtRif) $this->txtRif->Text = $this->objEmpresa->Rif;
			if ($this->lblRif) $this->lblRif->Text = $this->objEmpresa->Rif;

			if ($this->txtDireccion) $this->txtDireccion->Text = $this->objEmpresa->Direccion;
			if ($this->lblDireccion) $this->lblDireccion->Text = $this->objEmpresa->Direccion;

			if ($this->txtTelefono) $this->txtTelefono->Text = $this->objEmpresa->Telefono;
			if ($this->lblTelefono) $this->lblTelefono->Text = $this->objEmpresa->Telefono;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objEmpresa->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objEmpresa->Email;

			if ($this->txtLogin) $this->txtLogin->Text = $this->objEmpresa->Login;
			if ($this->lblLogin) $this->lblLogin->Text = $this->objEmpresa->Login;

			if ($this->txtPassword) $this->txtPassword->Text = $this->objEmpresa->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objEmpresa->Password;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC EMPRESA OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Empresa instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEmpresa() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objEmpresa->Nombre = $this->txtNombre->Text;
				if ($this->txtRif) $this->objEmpresa->Rif = $this->txtRif->Text;
				if ($this->txtDireccion) $this->objEmpresa->Direccion = $this->txtDireccion->Text;
				if ($this->txtTelefono) $this->objEmpresa->Telefono = $this->txtTelefono->Text;
				if ($this->txtEmail) $this->objEmpresa->Email = $this->txtEmail->Text;
				if ($this->txtLogin) $this->objEmpresa->Login = $this->txtLogin->Text;
				if ($this->txtPassword) $this->objEmpresa->Password = $this->txtPassword->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Empresa object
				$this->objEmpresa->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Empresa instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEmpresa() {
			$this->objEmpresa->Delete();
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
				case 'Empresa': return $this->objEmpresa;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Empresa fields -- will be created dynamically if not yet created
				case 'IdEMPRESAControl':
					if (!$this->lblIdEMPRESA) return $this->lblIdEMPRESA_Create();
					return $this->lblIdEMPRESA;
				case 'IdEMPRESALabel':
					if (!$this->lblIdEMPRESA) return $this->lblIdEMPRESA_Create();
					return $this->lblIdEMPRESA;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'RifControl':
					if (!$this->txtRif) return $this->txtRif_Create();
					return $this->txtRif;
				case 'RifLabel':
					if (!$this->lblRif) return $this->lblRif_Create();
					return $this->lblRif;
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
				case 'LoginControl':
					if (!$this->txtLogin) return $this->txtLogin_Create();
					return $this->txtLogin;
				case 'LoginLabel':
					if (!$this->lblLogin) return $this->lblLogin_Create();
					return $this->lblLogin;
				case 'PasswordControl':
					if (!$this->txtPassword) return $this->txtPassword_Create();
					return $this->txtPassword;
				case 'PasswordLabel':
					if (!$this->lblPassword) return $this->lblPassword_Create();
					return $this->lblPassword;
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
					// Controls that point to Empresa fields
					case 'IdEMPRESAControl':
						return ($this->lblIdEMPRESA = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'RifControl':
						return ($this->txtRif = QType::Cast($mixValue, 'QControl'));
					case 'DireccionControl':
						return ($this->txtDireccion = QType::Cast($mixValue, 'QControl'));
					case 'TelefonoControl':
						return ($this->txtTelefono = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
					case 'LoginControl':
						return ($this->txtLogin = QType::Cast($mixValue, 'QControl'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
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