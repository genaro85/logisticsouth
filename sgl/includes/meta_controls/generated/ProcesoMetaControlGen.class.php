<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Proceso class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Proceso object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ProcesoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Proceso $Proceso the actual Proceso data class being edited
	 * @property QLabel $IdPROCESOControl
	 * @property-read QLabel $IdPROCESOLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QIntegerTextBox $DuracionControl
	 * @property-read QLabel $DuracionLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ProcesoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Proceso objProceso
		 */
		protected $objProceso;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Proceso's individual data fields
		/**
		 * @var QLabel intIdPROCESO
		 */
		protected $lblIdPROCESO;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;
		/**
		 * @var QIntegerTextBox intDuracion
		 */
		protected $txtDuracion;

		// Controls that allow the viewing of Proceso's individual data fields
		protected $lblNombre;
		protected $lblDuracion;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ProcesoMetaControl to edit a single Proceso object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Proceso object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProcesoMetaControl
		 * @param Proceso $objProceso new or existing Proceso object
		 */
		 public function __construct($objParentObject, Proceso $objProceso) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ProcesoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Proceso object
			$this->objProceso = $objProceso;

			// Figure out if we're Editing or Creating New
			if ($this->objProceso->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProcesoMetaControl
		 * @param integer $intIdPROCESO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Proceso object creation - defaults to CreateOrEdit
 		 * @return ProcesoMetaControl
		 */
		public static function Create($objParentObject, $intIdPROCESO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdPROCESO)) {
				$objProceso = Proceso::Load($intIdPROCESO);

				// Proceso was found -- return it!
				if ($objProceso)
					return new ProcesoMetaControl($objParentObject, $objProceso);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Proceso object with PK arguments: ' . $intIdPROCESO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ProcesoMetaControl($objParentObject, new Proceso());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProcesoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Proceso object creation - defaults to CreateOrEdit
		 * @return ProcesoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPROCESO = QApplication::PathInfo(0);
			return ProcesoMetaControl::Create($objParentObject, $intIdPROCESO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProcesoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Proceso object creation - defaults to CreateOrEdit
		 * @return ProcesoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPROCESO = QApplication::QueryString('intIdPROCESO');
			return ProcesoMetaControl::Create($objParentObject, $intIdPROCESO, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdPROCESO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdPROCESO_Create($strControlId = null) {
			$this->lblIdPROCESO = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdPROCESO->Name = QApplication::Translate('Id P R O C E S O');
			if ($this->blnEditMode)
				$this->lblIdPROCESO->Text = $this->objProceso->IdPROCESO;
			else
				$this->lblIdPROCESO->Text = 'N/A';
			return $this->lblIdPROCESO;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objProceso->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Proceso::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objProceso->Nombre;
			$this->lblNombre->Required = true;
			return $this->lblNombre;
		}

		/**
		 * Create and setup QIntegerTextBox txtDuracion
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtDuracion_Create($strControlId = null) {
			$this->txtDuracion = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtDuracion->Name = QApplication::Translate('Duracion');
			$this->txtDuracion->Text = $this->objProceso->Duracion;
			$this->txtDuracion->Required = true;
			return $this->txtDuracion;
		}

		/**
		 * Create and setup QLabel lblDuracion
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblDuracion_Create($strControlId = null, $strFormat = null) {
			$this->lblDuracion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDuracion->Name = QApplication::Translate('Duracion');
			$this->lblDuracion->Text = $this->objProceso->Duracion;
			$this->lblDuracion->Required = true;
			$this->lblDuracion->Format = $strFormat;
			return $this->lblDuracion;
		}



		/**
		 * Refresh this MetaControl with Data from the local Proceso object.
		 * @param boolean $blnReload reload Proceso from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objProceso->Reload();

			if ($this->lblIdPROCESO) if ($this->blnEditMode) $this->lblIdPROCESO->Text = $this->objProceso->IdPROCESO;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objProceso->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objProceso->Nombre;

			if ($this->txtDuracion) $this->txtDuracion->Text = $this->objProceso->Duracion;
			if ($this->lblDuracion) $this->lblDuracion->Text = $this->objProceso->Duracion;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC PROCESO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Proceso instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveProceso() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objProceso->Nombre = $this->txtNombre->Text;
				if ($this->txtDuracion) $this->objProceso->Duracion = $this->txtDuracion->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Proceso object
				$this->objProceso->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Proceso instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteProceso() {
			$this->objProceso->Delete();
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
				case 'Proceso': return $this->objProceso;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Proceso fields -- will be created dynamically if not yet created
				case 'IdPROCESOControl':
					if (!$this->lblIdPROCESO) return $this->lblIdPROCESO_Create();
					return $this->lblIdPROCESO;
				case 'IdPROCESOLabel':
					if (!$this->lblIdPROCESO) return $this->lblIdPROCESO_Create();
					return $this->lblIdPROCESO;
				case 'NombreControl':
					if (!$this->txtNombre) return $this->txtNombre_Create();
					return $this->txtNombre;
				case 'NombreLabel':
					if (!$this->lblNombre) return $this->lblNombre_Create();
					return $this->lblNombre;
				case 'DuracionControl':
					if (!$this->txtDuracion) return $this->txtDuracion_Create();
					return $this->txtDuracion;
				case 'DuracionLabel':
					if (!$this->lblDuracion) return $this->lblDuracion_Create();
					return $this->lblDuracion;
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
					// Controls that point to Proceso fields
					case 'IdPROCESOControl':
						return ($this->lblIdPROCESO = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'DuracionControl':
						return ($this->txtDuracion = QType::Cast($mixValue, 'QControl'));
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