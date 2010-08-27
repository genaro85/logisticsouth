<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Administrador class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Administrador object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a AdministradorMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Administrador $Administrador the actual Administrador data class being edited
	 * @property QLabel $IdADMINISTRADORControl
	 * @property-read QLabel $IdADMINISTRADORLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QTextBox $ApellidoControl
	 * @property-read QLabel $ApellidoLabel
	 * @property QTextBox $CedulaControl
	 * @property-read QLabel $CedulaLabel
	 * @property QTextBox $LoginControl
	 * @property-read QLabel $LoginLabel
	 * @property QTextBox $PasswordControl
	 * @property-read QLabel $PasswordLabel
	 * @property QTextBox $EmailControl
	 * @property-read QLabel $EmailLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class AdministradorMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Administrador objAdministrador
		 */
		protected $objAdministrador;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Administrador's individual data fields
		/**
		 * @var QLabel intIdADMINISTRADOR
		 */
		protected $lblIdADMINISTRADOR;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;
		/**
		 * @var QTextBox strApellido
		 */
		protected $txtApellido;
		/**
		 * @var QTextBox strCedula
		 */
		protected $txtCedula;
		/**
		 * @var QTextBox strLogin
		 */
		protected $txtLogin;
		/**
		 * @var QTextBox strPassword
		 */
		protected $txtPassword;
		/**
		 * @var QTextBox strEmail
		 */
		protected $txtEmail;

		// Controls that allow the viewing of Administrador's individual data fields
		protected $lblNombre;
		protected $lblApellido;
		protected $lblCedula;
		protected $lblLogin;
		protected $lblPassword;
		protected $lblEmail;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * AdministradorMetaControl to edit a single Administrador object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Administrador object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministradorMetaControl
		 * @param Administrador $objAdministrador new or existing Administrador object
		 */
		 public function __construct($objParentObject, Administrador $objAdministrador) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this AdministradorMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Administrador object
			$this->objAdministrador = $objAdministrador;

			// Figure out if we're Editing or Creating New
			if ($this->objAdministrador->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministradorMetaControl
		 * @param integer $intIdADMINISTRADOR primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Administrador object creation - defaults to CreateOrEdit
 		 * @return AdministradorMetaControl
		 */
		public static function Create($objParentObject, $intIdADMINISTRADOR = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdADMINISTRADOR)) {
				$objAdministrador = Administrador::Load($intIdADMINISTRADOR);

				// Administrador was found -- return it!
				if ($objAdministrador)
					return new AdministradorMetaControl($objParentObject, $objAdministrador);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Administrador object with PK arguments: ' . $intIdADMINISTRADOR);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new AdministradorMetaControl($objParentObject, new Administrador());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministradorMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Administrador object creation - defaults to CreateOrEdit
		 * @return AdministradorMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdADMINISTRADOR = QApplication::PathInfo(0);
			return AdministradorMetaControl::Create($objParentObject, $intIdADMINISTRADOR, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this AdministradorMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Administrador object creation - defaults to CreateOrEdit
		 * @return AdministradorMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdADMINISTRADOR = QApplication::QueryString('intIdADMINISTRADOR');
			return AdministradorMetaControl::Create($objParentObject, $intIdADMINISTRADOR, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdADMINISTRADOR
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdADMINISTRADOR_Create($strControlId = null) {
			$this->lblIdADMINISTRADOR = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdADMINISTRADOR->Name = QApplication::Translate('Id A D M I N I S T R A D O R');
			if ($this->blnEditMode)
				$this->lblIdADMINISTRADOR->Text = $this->objAdministrador->IdADMINISTRADOR;
			else
				$this->lblIdADMINISTRADOR->Text = 'N/A';
			return $this->lblIdADMINISTRADOR;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objAdministrador->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Administrador::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objAdministrador->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QTextBox txtApellido
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtApellido_Create($strControlId = null) {
			$this->txtApellido = new QTextBox($this->objParentObject, $strControlId);
			$this->txtApellido->Name = QApplication::Translate('Apellido');
			$this->txtApellido->Text = $this->objAdministrador->Apellido;
			$this->txtApellido->Required = true;
			$this->txtApellido->MaxLength = Administrador::ApellidoMaxLength;
			return $this->txtApellido;
		}

		/**
		 * Create and setup QLabel lblApellido
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblApellido_Create($strControlId = null) {
			$this->lblApellido = new QLabel($this->objParentObject, $strControlId);
			$this->lblApellido->Name = QApplication::Translate('Apellido');
			$this->lblApellido->Text = $this->objAdministrador->Apellido;
			$this->lblApellido->Required = true;
			return $this->lblApellido;
		}

		/**
		 * Create and setup QTextBox txtCedula
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCedula_Create($strControlId = null) {
			$this->txtCedula = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCedula->Name = QApplication::Translate('Cedula');
			$this->txtCedula->Text = $this->objAdministrador->Cedula;
			$this->txtCedula->MaxLength = Administrador::CedulaMaxLength;
			return $this->txtCedula;
		}

		/**
		 * Create and setup QLabel lblCedula
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCedula_Create($strControlId = null) {
			$this->lblCedula = new QLabel($this->objParentObject, $strControlId);
			$this->lblCedula->Name = QApplication::Translate('Cedula');
			$this->lblCedula->Text = $this->objAdministrador->Cedula;
			return $this->lblCedula;
		}

		/**
		 * Create and setup QTextBox txtLogin
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtLogin_Create($strControlId = null) {
			$this->txtLogin = new QTextBox($this->objParentObject, $strControlId);
			$this->txtLogin->Name = QApplication::Translate('Login');
			$this->txtLogin->Text = $this->objAdministrador->Login;
			$this->txtLogin->Required = true;
			$this->txtLogin->MaxLength = Administrador::LoginMaxLength;
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
			$this->lblLogin->Text = $this->objAdministrador->Login;
			$this->lblLogin->Required = true;
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
			$this->txtPassword->Text = $this->objAdministrador->Password;
			$this->txtPassword->Required = true;
			$this->txtPassword->MaxLength = Administrador::PasswordMaxLength;
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
			$this->lblPassword->Text = $this->objAdministrador->Password;
			$this->lblPassword->Required = true;
			return $this->lblPassword;
		}

		/**
		 * Create and setup QTextBox txtEmail
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtEmail_Create($strControlId = null) {
			$this->txtEmail = new QTextBox($this->objParentObject, $strControlId);
			$this->txtEmail->Name = QApplication::Translate('Email');
			$this->txtEmail->Text = $this->objAdministrador->Email;
			$this->txtEmail->MaxLength = Administrador::EmailMaxLength;
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
			$this->lblEmail->Text = $this->objAdministrador->Email;
			return $this->lblEmail;
		}



		/**
		 * Refresh this MetaControl with Data from the local Administrador object.
		 * @param boolean $blnReload reload Administrador from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objAdministrador->Reload();

			if ($this->lblIdADMINISTRADOR) if ($this->blnEditMode) $this->lblIdADMINISTRADOR->Text = $this->objAdministrador->IdADMINISTRADOR;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objAdministrador->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objAdministrador->Nombre;

			if ($this->txtApellido) $this->txtApellido->Text = $this->objAdministrador->Apellido;
			if ($this->lblApellido) $this->lblApellido->Text = $this->objAdministrador->Apellido;

			if ($this->txtCedula) $this->txtCedula->Text = $this->objAdministrador->Cedula;
			if ($this->lblCedula) $this->lblCedula->Text = $this->objAdministrador->Cedula;

			if ($this->txtLogin) $this->txtLogin->Text = $this->objAdministrador->Login;
			if ($this->lblLogin) $this->lblLogin->Text = $this->objAdministrador->Login;

			if ($this->txtPassword) $this->txtPassword->Text = $this->objAdministrador->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objAdministrador->Password;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objAdministrador->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objAdministrador->Email;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC ADMINISTRADOR OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Administrador instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveAdministrador() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objAdministrador->Nombre = $this->txtNombre->Text;
				if ($this->txtApellido) $this->objAdministrador->Apellido = $this->txtApellido->Text;
				if ($this->txtCedula) $this->objAdministrador->Cedula = $this->txtCedula->Text;
				if ($this->txtLogin) $this->objAdministrador->Login = $this->txtLogin->Text;
				if ($this->txtPassword) $this->objAdministrador->Password = $this->txtPassword->Text;
				if ($this->txtEmail) $this->objAdministrador->Email = $this->txtEmail->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Administrador object
				$this->objAdministrador->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Administrador instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteAdministrador() {
			$this->objAdministrador->Delete();
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
				case 'Administrador': return $this->objAdministrador;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Administrador fields -- will be created dynamically if not yet created
				case 'IdADMINISTRADORControl':
					if (!$this->lblIdADMINISTRADOR) return $this->lblIdADMINISTRADOR_Create();
					return $this->lblIdADMINISTRADOR;
				case 'IdADMINISTRADORLabel':
					if (!$this->lblIdADMINISTRADOR) return $this->lblIdADMINISTRADOR_Create();
					return $this->lblIdADMINISTRADOR;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'ApellidoControl':
					if (!$this->txtApellido) return $this->txtApellido_Create();
					return $this->txtApellido;
				case 'ApellidoLabel':
					if (!$this->lblApellido) return $this->lblApellido_Create();
					return $this->lblApellido;
				case 'CedulaControl':
					if (!$this->txtCedula) return $this->txtCedula_Create();
					return $this->txtCedula;
				case 'CedulaLabel':
					if (!$this->lblCedula) return $this->lblCedula_Create();
					return $this->lblCedula;
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
				case 'EmailControl':
					if (!$this->txtEmail) return $this->txtEmail_Create();
					return $this->txtEmail;
				case 'EmailLabel':
					if (!$this->lblEmail) return $this->lblEmail_Create();
					return $this->lblEmail;
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
					// Controls that point to Administrador fields
					case 'IdADMINISTRADORControl':
						return ($this->lblIdADMINISTRADOR = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'ApellidoControl':
						return ($this->txtApellido = QType::Cast($mixValue, 'QControl'));
					case 'CedulaControl':
						return ($this->txtCedula = QType::Cast($mixValue, 'QControl'));
					case 'LoginControl':
						return ($this->txtLogin = QType::Cast($mixValue, 'QControl'));
					case 'PasswordControl':
						return ($this->txtPassword = QType::Cast($mixValue, 'QControl'));
					case 'EmailControl':
						return ($this->txtEmail = QType::Cast($mixValue, 'QControl'));
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