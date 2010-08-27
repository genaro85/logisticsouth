<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Empleado class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Empleado object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a EmpleadoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Empleado $Empleado the actual Empleado data class being edited
	 * @property QLabel $IdEMPLEADOControl
	 * @property-read QLabel $IdEMPLEADOLabel
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

	class EmpleadoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Empleado objEmpleado
		 */
		protected $objEmpleado;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Empleado's individual data fields
		/**
		 * @var QLabel intIdEMPLEADO
		 */
		protected $lblIdEMPLEADO;
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

		// Controls that allow the viewing of Empleado's individual data fields
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
		 * EmpleadoMetaControl to edit a single Empleado object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Empleado object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpleadoMetaControl
		 * @param Empleado $objEmpleado new or existing Empleado object
		 */
		 public function __construct($objParentObject, Empleado $objEmpleado) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this EmpleadoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Empleado object
			$this->objEmpleado = $objEmpleado;

			// Figure out if we're Editing or Creating New
			if ($this->objEmpleado->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpleadoMetaControl
		 * @param integer $intIdEMPLEADO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Empleado object creation - defaults to CreateOrEdit
 		 * @return EmpleadoMetaControl
		 */
		public static function Create($objParentObject, $intIdEMPLEADO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdEMPLEADO)) {
				$objEmpleado = Empleado::Load($intIdEMPLEADO);

				// Empleado was found -- return it!
				if ($objEmpleado)
					return new EmpleadoMetaControl($objParentObject, $objEmpleado);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Empleado object with PK arguments: ' . $intIdEMPLEADO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new EmpleadoMetaControl($objParentObject, new Empleado());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpleadoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Empleado object creation - defaults to CreateOrEdit
		 * @return EmpleadoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEMPLEADO = QApplication::PathInfo(0);
			return EmpleadoMetaControl::Create($objParentObject, $intIdEMPLEADO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this EmpleadoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Empleado object creation - defaults to CreateOrEdit
		 * @return EmpleadoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdEMPLEADO = QApplication::QueryString('intIdEMPLEADO');
			return EmpleadoMetaControl::Create($objParentObject, $intIdEMPLEADO, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdEMPLEADO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdEMPLEADO_Create($strControlId = null) {
			$this->lblIdEMPLEADO = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdEMPLEADO->Name = QApplication::Translate('Id E M P L E A D O');
			if ($this->blnEditMode)
				$this->lblIdEMPLEADO->Text = $this->objEmpleado->IdEMPLEADO;
			else
				$this->lblIdEMPLEADO->Text = 'N/A';
			return $this->lblIdEMPLEADO;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objEmpleado->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Empleado::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objEmpleado->Nombre;
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
			$this->txtApellido->Text = $this->objEmpleado->Apellido;
			$this->txtApellido->Required = true;
			$this->txtApellido->MaxLength = Empleado::ApellidoMaxLength;
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
			$this->lblApellido->Text = $this->objEmpleado->Apellido;
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
			$this->txtCedula->Text = $this->objEmpleado->Cedula;
			$this->txtCedula->MaxLength = Empleado::CedulaMaxLength;
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
			$this->lblCedula->Text = $this->objEmpleado->Cedula;
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
			$this->txtLogin->Text = $this->objEmpleado->Login;
			$this->txtLogin->Required = true;
			$this->txtLogin->MaxLength = Empleado::LoginMaxLength;
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
			$this->lblLogin->Text = $this->objEmpleado->Login;
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
			$this->txtPassword->Text = $this->objEmpleado->Password;
			$this->txtPassword->Required = true;
			$this->txtPassword->MaxLength = Empleado::PasswordMaxLength;
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
			$this->lblPassword->Text = $this->objEmpleado->Password;
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
			$this->txtEmail->Text = $this->objEmpleado->Email;
			$this->txtEmail->MaxLength = Empleado::EmailMaxLength;
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
			$this->lblEmail->Text = $this->objEmpleado->Email;
			return $this->lblEmail;
		}



		/**
		 * Refresh this MetaControl with Data from the local Empleado object.
		 * @param boolean $blnReload reload Empleado from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objEmpleado->Reload();

			if ($this->lblIdEMPLEADO) if ($this->blnEditMode) $this->lblIdEMPLEADO->Text = $this->objEmpleado->IdEMPLEADO;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objEmpleado->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objEmpleado->Nombre;

			if ($this->txtApellido) $this->txtApellido->Text = $this->objEmpleado->Apellido;
			if ($this->lblApellido) $this->lblApellido->Text = $this->objEmpleado->Apellido;

			if ($this->txtCedula) $this->txtCedula->Text = $this->objEmpleado->Cedula;
			if ($this->lblCedula) $this->lblCedula->Text = $this->objEmpleado->Cedula;

			if ($this->txtLogin) $this->txtLogin->Text = $this->objEmpleado->Login;
			if ($this->lblLogin) $this->lblLogin->Text = $this->objEmpleado->Login;

			if ($this->txtPassword) $this->txtPassword->Text = $this->objEmpleado->Password;
			if ($this->lblPassword) $this->lblPassword->Text = $this->objEmpleado->Password;

			if ($this->txtEmail) $this->txtEmail->Text = $this->objEmpleado->Email;
			if ($this->lblEmail) $this->lblEmail->Text = $this->objEmpleado->Email;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC EMPLEADO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Empleado instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveEmpleado() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objEmpleado->Nombre = $this->txtNombre->Text;
				if ($this->txtApellido) $this->objEmpleado->Apellido = $this->txtApellido->Text;
				if ($this->txtCedula) $this->objEmpleado->Cedula = $this->txtCedula->Text;
				if ($this->txtLogin) $this->objEmpleado->Login = $this->txtLogin->Text;
				if ($this->txtPassword) $this->objEmpleado->Password = $this->txtPassword->Text;
				if ($this->txtEmail) $this->objEmpleado->Email = $this->txtEmail->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Empleado object
				$this->objEmpleado->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Empleado instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteEmpleado() {
			$this->objEmpleado->Delete();
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
				case 'Empleado': return $this->objEmpleado;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Empleado fields -- will be created dynamically if not yet created
				case 'IdEMPLEADOControl':
					if (!$this->lblIdEMPLEADO) return $this->lblIdEMPLEADO_Create();
					return $this->lblIdEMPLEADO;
				case 'IdEMPLEADOLabel':
					if (!$this->lblIdEMPLEADO) return $this->lblIdEMPLEADO_Create();
					return $this->lblIdEMPLEADO;
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
					// Controls that point to Empleado fields
					case 'IdEMPLEADOControl':
						return ($this->lblIdEMPLEADO = QType::Cast($mixValue, 'QControl'));
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