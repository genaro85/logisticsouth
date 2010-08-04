<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Producto class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Producto object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ProductoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Producto $Producto the actual Producto data class being edited
	 * @property QLabel $IdPRODUCTOControl
	 * @property-read QLabel $IdPRODUCTOLabel
	 * @property QTextBox $CodigoArancelarioControl
	 * @property-read QLabel $CodigoArancelarioLabel
	 * @property QTextBox $DescripcionControl
	 * @property-read QLabel $DescripcionLabel
	 * @property QTextBox $NumeroRegSanitarioControl
	 * @property-read QLabel $NumeroRegSanitarioLabel
	 * @property QIntegerTextBox $VolumenControl
	 * @property-read QLabel $VolumenLabel
	 * @property QTextBox $UnidadControl
	 * @property-read QLabel $UnidadLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ProductoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Producto objProducto
		 */
		protected $objProducto;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Producto's individual data fields
		/**
		 * @var QLabel intIdPRODUCTO
		 */
		protected $lblIdPRODUCTO;
		/**
		 * @var QTextBox strCodigoArancelario
		 */
		protected $txtCodigoArancelario;
		/**
		 * @var QTextBox strDescripcion
		 */
		protected $txtDescripcion;
		/**
		 * @var QTextBox strNumeroRegSanitario
		 */
		protected $txtNumeroRegSanitario;
		/**
		 * @var QIntegerTextBox intVolumen
		 */
		protected $txtVolumen;
		/**
		 * @var QTextBox strUnidad
		 */
		protected $txtUnidad;

		// Controls that allow the viewing of Producto's individual data fields
		protected $lblCodigoArancelario;
		protected $lblDescripcion;
		protected $lblNumeroRegSanitario;
		protected $lblVolumen;
		protected $lblUnidad;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ProductoMetaControl to edit a single Producto object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Producto object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProductoMetaControl
		 * @param Producto $objProducto new or existing Producto object
		 */
		 public function __construct($objParentObject, Producto $objProducto) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ProductoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Producto object
			$this->objProducto = $objProducto;

			// Figure out if we're Editing or Creating New
			if ($this->objProducto->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProductoMetaControl
		 * @param integer $intIdPRODUCTO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Producto object creation - defaults to CreateOrEdit
 		 * @return ProductoMetaControl
		 */
		public static function Create($objParentObject, $intIdPRODUCTO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdPRODUCTO)) {
				$objProducto = Producto::Load($intIdPRODUCTO);

				// Producto was found -- return it!
				if ($objProducto)
					return new ProductoMetaControl($objParentObject, $objProducto);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Producto object with PK arguments: ' . $intIdPRODUCTO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ProductoMetaControl($objParentObject, new Producto());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProductoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Producto object creation - defaults to CreateOrEdit
		 * @return ProductoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPRODUCTO = QApplication::PathInfo(0);
			return ProductoMetaControl::Create($objParentObject, $intIdPRODUCTO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ProductoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Producto object creation - defaults to CreateOrEdit
		 * @return ProductoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdPRODUCTO = QApplication::QueryString('intIdPRODUCTO');
			return ProductoMetaControl::Create($objParentObject, $intIdPRODUCTO, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdPRODUCTO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdPRODUCTO_Create($strControlId = null) {
			$this->lblIdPRODUCTO = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdPRODUCTO->Name = QApplication::Translate('Id P R O D U C T O');
			if ($this->blnEditMode)
				$this->lblIdPRODUCTO->Text = $this->objProducto->IdPRODUCTO;
			else
				$this->lblIdPRODUCTO->Text = 'N/A';
			return $this->lblIdPRODUCTO;
		}

		/**
		 * Create and setup QTextBox txtCodigoArancelario
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtCodigoArancelario_Create($strControlId = null) {
			$this->txtCodigoArancelario = new QTextBox($this->objParentObject, $strControlId);
			$this->txtCodigoArancelario->Name = QApplication::Translate('Codigo Arancelario');
			$this->txtCodigoArancelario->Text = $this->objProducto->CodigoArancelario;
			$this->txtCodigoArancelario->Required = true;
			$this->txtCodigoArancelario->MaxLength = Producto::CodigoArancelarioMaxLength;
			return $this->txtCodigoArancelario;
		}

		/**
		 * Create and setup QLabel lblCodigoArancelario
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblCodigoArancelario_Create($strControlId = null) {
			$this->lblCodigoArancelario = new QLabel($this->objParentObject, $strControlId);
			$this->lblCodigoArancelario->Name = QApplication::Translate('Codigo Arancelario');
			$this->lblCodigoArancelario->Text = $this->objProducto->CodigoArancelario;
			$this->lblCodigoArancelario->Required = true;
			return $this->lblCodigoArancelario;
		}

		/**
		 * Create and setup QTextBox txtDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtDescripcion_Create($strControlId = null) {
			$this->txtDescripcion = new QTextBox($this->objParentObject, $strControlId);
			$this->txtDescripcion->Name = QApplication::Translate('Descripcion');
			$this->txtDescripcion->Text = $this->objProducto->Descripcion;
			$this->txtDescripcion->Required = true;
			$this->txtDescripcion->TextMode = QTextMode::MultiLine;
			return $this->txtDescripcion;
		}

		/**
		 * Create and setup QLabel lblDescripcion
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDescripcion_Create($strControlId = null) {
			$this->lblDescripcion = new QLabel($this->objParentObject, $strControlId);
			$this->lblDescripcion->Name = QApplication::Translate('Descripcion');
			$this->lblDescripcion->Text = $this->objProducto->Descripcion;
			$this->lblDescripcion->Required = true;
			return $this->lblDescripcion;
		}

		/**
		 * Create and setup QTextBox txtNumeroRegSanitario
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNumeroRegSanitario_Create($strControlId = null) {
			$this->txtNumeroRegSanitario = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNumeroRegSanitario->Name = QApplication::Translate('Numero Reg Sanitario');
			$this->txtNumeroRegSanitario->Text = $this->objProducto->NumeroRegSanitario;
			$this->txtNumeroRegSanitario->MaxLength = Producto::NumeroRegSanitarioMaxLength;
			return $this->txtNumeroRegSanitario;
		}

		/**
		 * Create and setup QLabel lblNumeroRegSanitario
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblNumeroRegSanitario_Create($strControlId = null) {
			$this->lblNumeroRegSanitario = new QLabel($this->objParentObject, $strControlId);
			$this->lblNumeroRegSanitario->Name = QApplication::Translate('Numero Reg Sanitario');
			$this->lblNumeroRegSanitario->Text = $this->objProducto->NumeroRegSanitario;
			return $this->lblNumeroRegSanitario;
		}

		/**
		 * Create and setup QIntegerTextBox txtVolumen
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtVolumen_Create($strControlId = null) {
			$this->txtVolumen = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtVolumen->Name = QApplication::Translate('Volumen');
			$this->txtVolumen->Text = $this->objProducto->Volumen;
			return $this->txtVolumen;
		}

		/**
		 * Create and setup QLabel lblVolumen
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblVolumen_Create($strControlId = null, $strFormat = null) {
			$this->lblVolumen = new QLabel($this->objParentObject, $strControlId);
			$this->lblVolumen->Name = QApplication::Translate('Volumen');
			$this->lblVolumen->Text = $this->objProducto->Volumen;
			$this->lblVolumen->Format = $strFormat;
			return $this->lblVolumen;
		}

		/**
		 * Create and setup QTextBox txtUnidad
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtUnidad_Create($strControlId = null) {
			$this->txtUnidad = new QTextBox($this->objParentObject, $strControlId);
			$this->txtUnidad->Name = QApplication::Translate('Unidad');
			$this->txtUnidad->Text = $this->objProducto->Unidad;
			$this->txtUnidad->MaxLength = Producto::UnidadMaxLength;
			return $this->txtUnidad;
		}

		/**
		 * Create and setup QLabel lblUnidad
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblUnidad_Create($strControlId = null) {
			$this->lblUnidad = new QLabel($this->objParentObject, $strControlId);
			$this->lblUnidad->Name = QApplication::Translate('Unidad');
			$this->lblUnidad->Text = $this->objProducto->Unidad;
			return $this->lblUnidad;
		}



		/**
		 * Refresh this MetaControl with Data from the local Producto object.
		 * @param boolean $blnReload reload Producto from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objProducto->Reload();

			if ($this->lblIdPRODUCTO) if ($this->blnEditMode) $this->lblIdPRODUCTO->Text = $this->objProducto->IdPRODUCTO;

			if ($this->txtCodigoArancelario) $this->txtCodigoArancelario->Text = $this->objProducto->CodigoArancelario;
			if ($this->lblCodigoArancelario) $this->lblCodigoArancelario->Text = $this->objProducto->CodigoArancelario;

			if ($this->txtDescripcion) $this->txtDescripcion->Text = $this->objProducto->Descripcion;
			if ($this->lblDescripcion) $this->lblDescripcion->Text = $this->objProducto->Descripcion;

			if ($this->txtNumeroRegSanitario) $this->txtNumeroRegSanitario->Text = $this->objProducto->NumeroRegSanitario;
			if ($this->lblNumeroRegSanitario) $this->lblNumeroRegSanitario->Text = $this->objProducto->NumeroRegSanitario;

			if ($this->txtVolumen) $this->txtVolumen->Text = $this->objProducto->Volumen;
			if ($this->lblVolumen) $this->lblVolumen->Text = $this->objProducto->Volumen;

			if ($this->txtUnidad) $this->txtUnidad->Text = $this->objProducto->Unidad;
			if ($this->lblUnidad) $this->lblUnidad->Text = $this->objProducto->Unidad;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC PRODUCTO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Producto instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveProducto() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtCodigoArancelario) $this->objProducto->CodigoArancelario = $this->txtCodigoArancelario->Text;
				if ($this->txtDescripcion) $this->objProducto->Descripcion = $this->txtDescripcion->Text;
				if ($this->txtNumeroRegSanitario) $this->objProducto->NumeroRegSanitario = $this->txtNumeroRegSanitario->Text;
				if ($this->txtVolumen) $this->objProducto->Volumen = $this->txtVolumen->Text;
				if ($this->txtUnidad) $this->objProducto->Unidad = $this->txtUnidad->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the Producto object
				$this->objProducto->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Producto instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteProducto() {
			$this->objProducto->Delete();
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
				case 'Producto': return $this->objProducto;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Producto fields -- will be created dynamically if not yet created
				case 'IdPRODUCTOControl':
					if (!$this->lblIdPRODUCTO) return $this->lblIdPRODUCTO_Create();
					return $this->lblIdPRODUCTO;
				case 'IdPRODUCTOLabel':
					if (!$this->lblIdPRODUCTO) return $this->lblIdPRODUCTO_Create();
					return $this->lblIdPRODUCTO;
				case 'CodigoArancelarioControl':
					if (!$this->txtCodigoArancelario) return $this->txtCodigoArancelario_Create();
					return $this->txtCodigoArancelario;
				case 'CodigoArancelarioLabel':
					if (!$this->lblCodigoArancelario) return $this->lblCodigoArancelario_Create();
					return $this->lblCodigoArancelario;
				case 'DescripcionControl':
					if (!$this->txtDescripcion) return $this->txtDescripcion_Create();
					return $this->txtDescripcion;
				case 'DescripcionLabel':
					if (!$this->lblDescripcion) return $this->lblDescripcion_Create();
					return $this->lblDescripcion;
				case 'NumeroRegSanitarioControl':
					if (!$this->txtNumeroRegSanitario) return $this->txtNumeroRegSanitario_Create();
					return $this->txtNumeroRegSanitario;
				case 'NumeroRegSanitarioLabel':
					if (!$this->lblNumeroRegSanitario) return $this->lblNumeroRegSanitario_Create();
					return $this->lblNumeroRegSanitario;
				case 'VolumenControl':
					if (!$this->txtVolumen) return $this->txtVolumen_Create();
					return $this->txtVolumen;
				case 'VolumenLabel':
					if (!$this->lblVolumen) return $this->lblVolumen_Create();
					return $this->lblVolumen;
				case 'UnidadControl':
					if (!$this->txtUnidad) return $this->txtUnidad_Create();
					return $this->txtUnidad;
				case 'UnidadLabel':
					if (!$this->lblUnidad) return $this->lblUnidad_Create();
					return $this->lblUnidad;
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
					// Controls that point to Producto fields
					case 'IdPRODUCTOControl':
						return ($this->lblIdPRODUCTO = QType::Cast($mixValue, 'QControl'));
					case 'CodigoArancelarioControl':
						return ($this->txtCodigoArancelario = QType::Cast($mixValue, 'QControl'));
					case 'DescripcionControl':
						return ($this->txtDescripcion = QType::Cast($mixValue, 'QControl'));
					case 'NumeroRegSanitarioControl':
						return ($this->txtNumeroRegSanitario = QType::Cast($mixValue, 'QControl'));
					case 'VolumenControl':
						return ($this->txtVolumen = QType::Cast($mixValue, 'QControl'));
					case 'UnidadControl':
						return ($this->txtUnidad = QType::Cast($mixValue, 'QControl'));
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