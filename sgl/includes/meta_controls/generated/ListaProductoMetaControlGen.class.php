<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the ListaProducto class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single ListaProducto object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a ListaProductoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read ListaProducto $ListaProducto the actual ListaProducto data class being edited
	 * @property QListBox $LICENCIAIdLICENCIAControl
	 * @property-read QLabel $LICENCIAIdLICENCIALabel
	 * @property QListBox $PRODUCTOIdPRODUCTOControl
	 * @property-read QLabel $PRODUCTOIdPRODUCTOLabel
	 * @property QIntegerTextBox $PRODUCTOCantidadControl
	 * @property-read QLabel $PRODUCTOCantidadLabel
	 * @property QIntegerTextBox $PRODUCTOVolumenControl
	 * @property-read QLabel $PRODUCTOVolumenLabel
	 * @property QTextBox $PRODUCTOUnidadControl
	 * @property-read QLabel $PRODUCTOUnidadLabel
	 * @property QTextBox $PRODUCTOCostoUnitarioControl
	 * @property-read QLabel $PRODUCTOCostoUnitarioLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class ListaProductoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var ListaProducto objListaProducto
		 */
		protected $objListaProducto;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of ListaProducto's individual data fields
		/**
		 * @var QListBox intLICENCIAIdLICENCIA
		 */
		protected $lstLICENCIAIdLICENCIAObject;
		/**
		 * @var QListBox intPRODUCTOIdPRODUCTO
		 */
		protected $lstPRODUCTOIdPRODUCTOObject;
		/**
		 * @var QIntegerTextBox intPRODUCTOCantidad
		 */
		protected $txtPRODUCTOCantidad;
		/**
		 * @var QIntegerTextBox intPRODUCTOVolumen
		 */
		protected $txtPRODUCTOVolumen;
		/**
		 * @var QTextBox strPRODUCTOUnidad
		 */
		protected $txtPRODUCTOUnidad;
		/**
		 * @var QTextBox strPRODUCTOCostoUnitario
		 */
		protected $txtPRODUCTOCostoUnitario;

		// Controls that allow the viewing of ListaProducto's individual data fields
		protected $lblLICENCIAIdLICENCIA;
		protected $lblPRODUCTOIdPRODUCTO;
		protected $lblPRODUCTOCantidad;
		protected $lblPRODUCTOVolumen;
		protected $lblPRODUCTOUnidad;
		protected $lblPRODUCTOCostoUnitario;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * ListaProductoMetaControl to edit a single ListaProducto object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single ListaProducto object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaProductoMetaControl
		 * @param ListaProducto $objListaProducto new or existing ListaProducto object
		 */
		 public function __construct($objParentObject, ListaProducto $objListaProducto) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this ListaProductoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked ListaProducto object
			$this->objListaProducto = $objListaProducto;

			// Figure out if we're Editing or Creating New
			if ($this->objListaProducto->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaProductoMetaControl
		 * @param integer $intLICENCIAIdLICENCIA primary key value
		 * @param integer $intPRODUCTOIdPRODUCTO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing ListaProducto object creation - defaults to CreateOrEdit
 		 * @return ListaProductoMetaControl
		 */
		public static function Create($objParentObject, $intLICENCIAIdLICENCIA = null, $intPRODUCTOIdPRODUCTO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intLICENCIAIdLICENCIA) && strlen($intPRODUCTOIdPRODUCTO)) {
				$objListaProducto = ListaProducto::Load($intLICENCIAIdLICENCIA, $intPRODUCTOIdPRODUCTO);

				// ListaProducto was found -- return it!
				if ($objListaProducto)
					return new ListaProductoMetaControl($objParentObject, $objListaProducto);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a ListaProducto object with PK arguments: ' . $intLICENCIAIdLICENCIA . ', ' . $intPRODUCTOIdPRODUCTO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new ListaProductoMetaControl($objParentObject, new ListaProducto());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaProductoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ListaProducto object creation - defaults to CreateOrEdit
		 * @return ListaProductoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::PathInfo(0);
			$intPRODUCTOIdPRODUCTO = QApplication::PathInfo(1);
			return ListaProductoMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intPRODUCTOIdPRODUCTO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this ListaProductoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing ListaProducto object creation - defaults to CreateOrEdit
		 * @return ListaProductoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intLICENCIAIdLICENCIA = QApplication::QueryString('intLICENCIAIdLICENCIA');
			$intPRODUCTOIdPRODUCTO = QApplication::QueryString('intPRODUCTOIdPRODUCTO');
			return ListaProductoMetaControl::Create($objParentObject, $intLICENCIAIdLICENCIA, $intPRODUCTOIdPRODUCTO, $intCreateType);
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
				if (($this->objListaProducto->LICENCIAIdLICENCIAObject) && ($this->objListaProducto->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
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
			$this->lblLICENCIAIdLICENCIA->Text = ($this->objListaProducto->LICENCIAIdLICENCIAObject) ? $this->objListaProducto->LICENCIAIdLICENCIAObject->__toString() : null;
			$this->lblLICENCIAIdLICENCIA->Required = true;
			return $this->lblLICENCIAIdLICENCIA;
		}

		/**
		 * Create and setup QListBox lstPRODUCTOIdPRODUCTOObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstPRODUCTOIdPRODUCTOObject_Create($strControlId = null) {
			$this->lstPRODUCTOIdPRODUCTOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstPRODUCTOIdPRODUCTOObject->Name = QApplication::Translate('P R O D U C T O Id P R O D U C T O Object');
			$this->lstPRODUCTOIdPRODUCTOObject->Required = true;
			if (!$this->blnEditMode)
				$this->lstPRODUCTOIdPRODUCTOObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objPRODUCTOIdPRODUCTOObjectArray = Producto::LoadAll();
			if ($objPRODUCTOIdPRODUCTOObjectArray) foreach ($objPRODUCTOIdPRODUCTOObjectArray as $objPRODUCTOIdPRODUCTOObject) {
				$objListItem = new QListItem($objPRODUCTOIdPRODUCTOObject->__toString(), $objPRODUCTOIdPRODUCTOObject->IdPRODUCTO);
				if (($this->objListaProducto->PRODUCTOIdPRODUCTOObject) && ($this->objListaProducto->PRODUCTOIdPRODUCTOObject->IdPRODUCTO == $objPRODUCTOIdPRODUCTOObject->IdPRODUCTO))
					$objListItem->Selected = true;
				$this->lstPRODUCTOIdPRODUCTOObject->AddItem($objListItem);
			}
			return $this->lstPRODUCTOIdPRODUCTOObject;
		}

		/**
		 * Create and setup QLabel lblPRODUCTOIdPRODUCTO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPRODUCTOIdPRODUCTO_Create($strControlId = null) {
			$this->lblPRODUCTOIdPRODUCTO = new QLabel($this->objParentObject, $strControlId);
			$this->lblPRODUCTOIdPRODUCTO->Name = QApplication::Translate('P R O D U C T O Id P R O D U C T O Object');
			$this->lblPRODUCTOIdPRODUCTO->Text = ($this->objListaProducto->PRODUCTOIdPRODUCTOObject) ? $this->objListaProducto->PRODUCTOIdPRODUCTOObject->__toString() : null;
			$this->lblPRODUCTOIdPRODUCTO->Required = true;
			return $this->lblPRODUCTOIdPRODUCTO;
		}

		/**
		 * Create and setup QIntegerTextBox txtPRODUCTOCantidad
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtPRODUCTOCantidad_Create($strControlId = null) {
			$this->txtPRODUCTOCantidad = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtPRODUCTOCantidad->Name = QApplication::Translate('P R O D U C T O Cantidad');
			$this->txtPRODUCTOCantidad->Text = $this->objListaProducto->PRODUCTOCantidad;
			$this->txtPRODUCTOCantidad->Required = true;
			return $this->txtPRODUCTOCantidad;
		}

		/**
		 * Create and setup QLabel lblPRODUCTOCantidad
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPRODUCTOCantidad_Create($strControlId = null, $strFormat = null) {
			$this->lblPRODUCTOCantidad = new QLabel($this->objParentObject, $strControlId);
			$this->lblPRODUCTOCantidad->Name = QApplication::Translate('P R O D U C T O Cantidad');
			$this->lblPRODUCTOCantidad->Text = $this->objListaProducto->PRODUCTOCantidad;
			$this->lblPRODUCTOCantidad->Required = true;
			$this->lblPRODUCTOCantidad->Format = $strFormat;
			return $this->lblPRODUCTOCantidad;
		}

		/**
		 * Create and setup QIntegerTextBox txtPRODUCTOVolumen
		 * @param string $strControlId optional ControlId to use
		 * @return QIntegerTextBox
		 */
		public function txtPRODUCTOVolumen_Create($strControlId = null) {
			$this->txtPRODUCTOVolumen = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtPRODUCTOVolumen->Name = QApplication::Translate('P R O D U C T O Volumen');
			$this->txtPRODUCTOVolumen->Text = $this->objListaProducto->PRODUCTOVolumen;
			$this->txtPRODUCTOVolumen->Required = true;
			return $this->txtPRODUCTOVolumen;
		}

		/**
		 * Create and setup QLabel lblPRODUCTOVolumen
		 * @param string $strControlId optional ControlId to use
		 * @param string $strFormat optional sprintf format to use
		 * @return QLabel
		 */
		public function lblPRODUCTOVolumen_Create($strControlId = null, $strFormat = null) {
			$this->lblPRODUCTOVolumen = new QLabel($this->objParentObject, $strControlId);
			$this->lblPRODUCTOVolumen->Name = QApplication::Translate('P R O D U C T O Volumen');
			$this->lblPRODUCTOVolumen->Text = $this->objListaProducto->PRODUCTOVolumen;
			$this->lblPRODUCTOVolumen->Required = true;
			$this->lblPRODUCTOVolumen->Format = $strFormat;
			return $this->lblPRODUCTOVolumen;
		}

		/**
		 * Create and setup QTextBox txtPRODUCTOUnidad
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPRODUCTOUnidad_Create($strControlId = null) {
			$this->txtPRODUCTOUnidad = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPRODUCTOUnidad->Name = QApplication::Translate('P R O D U C T O Unidad');
			$this->txtPRODUCTOUnidad->Text = $this->objListaProducto->PRODUCTOUnidad;
			$this->txtPRODUCTOUnidad->Required = true;
			$this->txtPRODUCTOUnidad->MaxLength = ListaProducto::PRODUCTOUnidadMaxLength;
			return $this->txtPRODUCTOUnidad;
		}

		/**
		 * Create and setup QLabel lblPRODUCTOUnidad
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPRODUCTOUnidad_Create($strControlId = null) {
			$this->lblPRODUCTOUnidad = new QLabel($this->objParentObject, $strControlId);
			$this->lblPRODUCTOUnidad->Name = QApplication::Translate('P R O D U C T O Unidad');
			$this->lblPRODUCTOUnidad->Text = $this->objListaProducto->PRODUCTOUnidad;
			$this->lblPRODUCTOUnidad->Required = true;
			return $this->lblPRODUCTOUnidad;
		}

		/**
		 * Create and setup QTextBox txtPRODUCTOCostoUnitario
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtPRODUCTOCostoUnitario_Create($strControlId = null) {
			$this->txtPRODUCTOCostoUnitario = new QTextBox($this->objParentObject, $strControlId);
			$this->txtPRODUCTOCostoUnitario->Name = QApplication::Translate('P R O D U C T O Costo Unitario');
			$this->txtPRODUCTOCostoUnitario->Text = $this->objListaProducto->PRODUCTOCostoUnitario;
			$this->txtPRODUCTOCostoUnitario->MaxLength = ListaProducto::PRODUCTOCostoUnitarioMaxLength;
			return $this->txtPRODUCTOCostoUnitario;
		}

		/**
		 * Create and setup QLabel lblPRODUCTOCostoUnitario
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblPRODUCTOCostoUnitario_Create($strControlId = null) {
			$this->lblPRODUCTOCostoUnitario = new QLabel($this->objParentObject, $strControlId);
			$this->lblPRODUCTOCostoUnitario->Name = QApplication::Translate('P R O D U C T O Costo Unitario');
			$this->lblPRODUCTOCostoUnitario->Text = $this->objListaProducto->PRODUCTOCostoUnitario;
			return $this->lblPRODUCTOCostoUnitario;
		}



		/**
		 * Refresh this MetaControl with Data from the local ListaProducto object.
		 * @param boolean $blnReload reload ListaProducto from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objListaProducto->Reload();

			if ($this->lstLICENCIAIdLICENCIAObject) {
					$this->lstLICENCIAIdLICENCIAObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstLICENCIAIdLICENCIAObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objLICENCIAIdLICENCIAObjectArray = Licencia::LoadAll();
				if ($objLICENCIAIdLICENCIAObjectArray) foreach ($objLICENCIAIdLICENCIAObjectArray as $objLICENCIAIdLICENCIAObject) {
					$objListItem = new QListItem($objLICENCIAIdLICENCIAObject->__toString(), $objLICENCIAIdLICENCIAObject->IdLICENCIA);
					if (($this->objListaProducto->LICENCIAIdLICENCIAObject) && ($this->objListaProducto->LICENCIAIdLICENCIAObject->IdLICENCIA == $objLICENCIAIdLICENCIAObject->IdLICENCIA))
						$objListItem->Selected = true;
					$this->lstLICENCIAIdLICENCIAObject->AddItem($objListItem);
				}
			}
			if ($this->lblLICENCIAIdLICENCIA) $this->lblLICENCIAIdLICENCIA->Text = ($this->objListaProducto->LICENCIAIdLICENCIAObject) ? $this->objListaProducto->LICENCIAIdLICENCIAObject->__toString() : null;

			if ($this->lstPRODUCTOIdPRODUCTOObject) {
					$this->lstPRODUCTOIdPRODUCTOObject->RemoveAllItems();
				if (!$this->blnEditMode)
					$this->lstPRODUCTOIdPRODUCTOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objPRODUCTOIdPRODUCTOObjectArray = Producto::LoadAll();
				if ($objPRODUCTOIdPRODUCTOObjectArray) foreach ($objPRODUCTOIdPRODUCTOObjectArray as $objPRODUCTOIdPRODUCTOObject) {
					$objListItem = new QListItem($objPRODUCTOIdPRODUCTOObject->__toString(), $objPRODUCTOIdPRODUCTOObject->IdPRODUCTO);
					if (($this->objListaProducto->PRODUCTOIdPRODUCTOObject) && ($this->objListaProducto->PRODUCTOIdPRODUCTOObject->IdPRODUCTO == $objPRODUCTOIdPRODUCTOObject->IdPRODUCTO))
						$objListItem->Selected = true;
					$this->lstPRODUCTOIdPRODUCTOObject->AddItem($objListItem);
				}
			}
			if ($this->lblPRODUCTOIdPRODUCTO) $this->lblPRODUCTOIdPRODUCTO->Text = ($this->objListaProducto->PRODUCTOIdPRODUCTOObject) ? $this->objListaProducto->PRODUCTOIdPRODUCTOObject->__toString() : null;

			if ($this->txtPRODUCTOCantidad) $this->txtPRODUCTOCantidad->Text = $this->objListaProducto->PRODUCTOCantidad;
			if ($this->lblPRODUCTOCantidad) $this->lblPRODUCTOCantidad->Text = $this->objListaProducto->PRODUCTOCantidad;

			if ($this->txtPRODUCTOVolumen) $this->txtPRODUCTOVolumen->Text = $this->objListaProducto->PRODUCTOVolumen;
			if ($this->lblPRODUCTOVolumen) $this->lblPRODUCTOVolumen->Text = $this->objListaProducto->PRODUCTOVolumen;

			if ($this->txtPRODUCTOUnidad) $this->txtPRODUCTOUnidad->Text = $this->objListaProducto->PRODUCTOUnidad;
			if ($this->lblPRODUCTOUnidad) $this->lblPRODUCTOUnidad->Text = $this->objListaProducto->PRODUCTOUnidad;

			if ($this->txtPRODUCTOCostoUnitario) $this->txtPRODUCTOCostoUnitario->Text = $this->objListaProducto->PRODUCTOCostoUnitario;
			if ($this->lblPRODUCTOCostoUnitario) $this->lblPRODUCTOCostoUnitario->Text = $this->objListaProducto->PRODUCTOCostoUnitario;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC LISTAPRODUCTO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's ListaProducto instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveListaProducto() {
			try {
				// Update any fields for controls that have been created
				if ($this->lstLICENCIAIdLICENCIAObject) $this->objListaProducto->LICENCIAIdLICENCIA = $this->lstLICENCIAIdLICENCIAObject->SelectedValue;
				if ($this->lstPRODUCTOIdPRODUCTOObject) $this->objListaProducto->PRODUCTOIdPRODUCTO = $this->lstPRODUCTOIdPRODUCTOObject->SelectedValue;
				if ($this->txtPRODUCTOCantidad) $this->objListaProducto->PRODUCTOCantidad = $this->txtPRODUCTOCantidad->Text;
				if ($this->txtPRODUCTOVolumen) $this->objListaProducto->PRODUCTOVolumen = $this->txtPRODUCTOVolumen->Text;
				if ($this->txtPRODUCTOUnidad) $this->objListaProducto->PRODUCTOUnidad = $this->txtPRODUCTOUnidad->Text;
				if ($this->txtPRODUCTOCostoUnitario) $this->objListaProducto->PRODUCTOCostoUnitario = $this->txtPRODUCTOCostoUnitario->Text;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it

				// Save the ListaProducto object
				$this->objListaProducto->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's ListaProducto instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteListaProducto() {
			$this->objListaProducto->Delete();
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
				case 'ListaProducto': return $this->objListaProducto;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to ListaProducto fields -- will be created dynamically if not yet created
				case 'LICENCIAIdLICENCIAControl':
					if (!$this->lstLICENCIAIdLICENCIAObject) return $this->lstLICENCIAIdLICENCIAObject_Create();
					return $this->lstLICENCIAIdLICENCIAObject;
				case 'LICENCIAIdLICENCIALabel':
					if (!$this->lblLICENCIAIdLICENCIA) return $this->lblLICENCIAIdLICENCIA_Create();
					return $this->lblLICENCIAIdLICENCIA;
				case 'PRODUCTOIdPRODUCTOControl':
					if (!$this->lstPRODUCTOIdPRODUCTOObject) return $this->lstPRODUCTOIdPRODUCTOObject_Create();
					return $this->lstPRODUCTOIdPRODUCTOObject;
				case 'PRODUCTOIdPRODUCTOLabel':
					if (!$this->lblPRODUCTOIdPRODUCTO) return $this->lblPRODUCTOIdPRODUCTO_Create();
					return $this->lblPRODUCTOIdPRODUCTO;
				case 'PRODUCTOCantidadControl':
					if (!$this->txtPRODUCTOCantidad) return $this->txtPRODUCTOCantidad_Create();
					return $this->txtPRODUCTOCantidad;
				case 'PRODUCTOCantidadLabel':
					if (!$this->lblPRODUCTOCantidad) return $this->lblPRODUCTOCantidad_Create();
					return $this->lblPRODUCTOCantidad;
				case 'PRODUCTOVolumenControl':
					if (!$this->txtPRODUCTOVolumen) return $this->txtPRODUCTOVolumen_Create();
					return $this->txtPRODUCTOVolumen;
				case 'PRODUCTOVolumenLabel':
					if (!$this->lblPRODUCTOVolumen) return $this->lblPRODUCTOVolumen_Create();
					return $this->lblPRODUCTOVolumen;
				case 'PRODUCTOUnidadControl':
					if (!$this->txtPRODUCTOUnidad) return $this->txtPRODUCTOUnidad_Create();
					return $this->txtPRODUCTOUnidad;
				case 'PRODUCTOUnidadLabel':
					if (!$this->lblPRODUCTOUnidad) return $this->lblPRODUCTOUnidad_Create();
					return $this->lblPRODUCTOUnidad;
				case 'PRODUCTOCostoUnitarioControl':
					if (!$this->txtPRODUCTOCostoUnitario) return $this->txtPRODUCTOCostoUnitario_Create();
					return $this->txtPRODUCTOCostoUnitario;
				case 'PRODUCTOCostoUnitarioLabel':
					if (!$this->lblPRODUCTOCostoUnitario) return $this->lblPRODUCTOCostoUnitario_Create();
					return $this->lblPRODUCTOCostoUnitario;
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
					// Controls that point to ListaProducto fields
					case 'LICENCIAIdLICENCIAControl':
						return ($this->lstLICENCIAIdLICENCIAObject = QType::Cast($mixValue, 'QControl'));
					case 'PRODUCTOIdPRODUCTOControl':
						return ($this->lstPRODUCTOIdPRODUCTOObject = QType::Cast($mixValue, 'QControl'));
					case 'PRODUCTOCantidadControl':
						return ($this->txtPRODUCTOCantidad = QType::Cast($mixValue, 'QControl'));
					case 'PRODUCTOVolumenControl':
						return ($this->txtPRODUCTOVolumen = QType::Cast($mixValue, 'QControl'));
					case 'PRODUCTOUnidadControl':
						return ($this->txtPRODUCTOUnidad = QType::Cast($mixValue, 'QControl'));
					case 'PRODUCTOCostoUnitarioControl':
						return ($this->txtPRODUCTOCostoUnitario = QType::Cast($mixValue, 'QControl'));
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