<?php
	/**
	 * This is a MetaControl class, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality
	 * of the Documento class.  This code-generated class
	 * contains all the basic elements to help a QPanel or QForm display an HTML form that can
	 * manipulate a single Documento object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DocumentoMetaControl
	 * class.
	 *
	 * Any and all changes to this file will be overwritten with any subsequent
	 * code re-generation.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 * @property-read Documento $Documento the actual Documento data class being edited
	 * @property QLabel $IdDOCUMENTOControl
	 * @property-read QLabel $IdDOCUMENTOLabel
	 * @property QTextBox $NombreControl
	 * @property-read QLabel $NombreLabel
	 * @property QIntegerTextBox $DuracionControl
	 * @property-read QLabel $DuracionLabel
	 * @property QListBox $DOCUMENTOIdDOCUMENTOControl
	 * @property-read QLabel $DOCUMENTOIdDOCUMENTOLabel
	 * @property QListBox $DocumentosFaseControl
	 * @property-read QLabel $DocumentosFaseLabel
	 * @property-read string $TitleVerb a verb indicating whether or not this is being edited or created
	 * @property-read boolean $EditMode a boolean indicating whether or not this is being edited or created
	 */

	class DocumentoMetaControlGen extends QBaseClass {
		// General Variables
		/**
		 * @var Documento objDocumento
		 */
		protected $objDocumento;
		protected $objParentObject;
		/**
		 * @var string TitleVerb
		 */
		protected $strTitleVerb;
		/**
		 * @var boolean EditMode
		 */
		protected $blnEditMode;

		// Controls that allow the editing of Documento's individual data fields
		/**
		 * @var QLabel intIdDOCUMENTO
		 */
		protected $lblIdDOCUMENTO;
		/**
		 * @var QTextBox strNombre
		 */
		protected $txtNombre;
		/**
		 * @var QIntegerTextBox intDuracion
		 */
		protected $txtDuracion;
		/**
		 * @var QListBox intDOCUMENTOIdDOCUMENTO
		 */
		protected $lstDOCUMENTOIdDOCUMENTOObject;

		// Controls that allow the viewing of Documento's individual data fields
		protected $lblNombre;
		protected $lblDuracion;
		protected $lblDOCUMENTOIdDOCUMENTO;

		// QListBox Controls (if applicable) to edit Unique ReverseReferences and ManyToMany References
		protected $lstDocumentosFase;

		// QLabel Controls (if applicable) to view Unique ReverseReferences and ManyToMany References
		protected $lblDocumentosFase;


		/**
		 * Main constructor.  Constructor OR static create methods are designed to be called in either
		 * a parent QPanel or the main QForm when wanting to create a
		 * DocumentoMetaControl to edit a single Documento object within the
		 * QPanel or QForm.
		 *
		 * This constructor takes in a single Documento object, while any of the static
		 * create methods below can be used to construct based off of individual PK ID(s).
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentoMetaControl
		 * @param Documento $objDocumento new or existing Documento object
		 */
		 public function __construct($objParentObject, Documento $objDocumento) {
			// Setup Parent Object (e.g. QForm or QPanel which will be using this DocumentoMetaControl)
			$this->objParentObject = $objParentObject;

			// Setup linked Documento object
			$this->objDocumento = $objDocumento;

			// Figure out if we're Editing or Creating New
			if ($this->objDocumento->__Restored) {
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
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentoMetaControl
		 * @param integer $intIdDOCUMENTO primary key value
		 * @param QMetaControlCreateType $intCreateType rules governing Documento object creation - defaults to CreateOrEdit
 		 * @return DocumentoMetaControl
		 */
		public static function Create($objParentObject, $intIdDOCUMENTO = null, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			// Attempt to Load from PK Arguments
			if (strlen($intIdDOCUMENTO)) {
				$objDocumento = Documento::Load($intIdDOCUMENTO);

				// Documento was found -- return it!
				if ($objDocumento)
					return new DocumentoMetaControl($objParentObject, $objDocumento);

				// If CreateOnRecordNotFound not specified, throw an exception
				else if ($intCreateType != QMetaControlCreateType::CreateOnRecordNotFound)
					throw new QCallerException('Could not find a Documento object with PK arguments: ' . $intIdDOCUMENTO);

			// If EditOnly is specified, throw an exception
			} else if ($intCreateType == QMetaControlCreateType::EditOnly)
				throw new QCallerException('No PK arguments specified');

			// If we are here, then we need to create a new record
			return new DocumentoMetaControl($objParentObject, new Documento());
		}

		/**
		 * Static Helper Method to Create using PathInfo arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Documento object creation - defaults to CreateOrEdit
		 * @return DocumentoMetaControl
		 */
		public static function CreateFromPathInfo($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdDOCUMENTO = QApplication::PathInfo(0);
			return DocumentoMetaControl::Create($objParentObject, $intIdDOCUMENTO, $intCreateType);
		}

		/**
		 * Static Helper Method to Create using QueryString arguments
		 *
		 * @param mixed $objParentObject QForm or QPanel which will be using this DocumentoMetaControl
		 * @param QMetaControlCreateType $intCreateType rules governing Documento object creation - defaults to CreateOrEdit
		 * @return DocumentoMetaControl
		 */
		public static function CreateFromQueryString($objParentObject, $intCreateType = QMetaControlCreateType::CreateOrEdit) {
			$intIdDOCUMENTO = QApplication::QueryString('intIdDOCUMENTO');
			return DocumentoMetaControl::Create($objParentObject, $intIdDOCUMENTO, $intCreateType);
		}



		///////////////////////////////////////////////
		// PUBLIC CREATE and REFRESH METHODS
		///////////////////////////////////////////////

		/**
		 * Create and setup QLabel lblIdDOCUMENTO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblIdDOCUMENTO_Create($strControlId = null) {
			$this->lblIdDOCUMENTO = new QLabel($this->objParentObject, $strControlId);
			$this->lblIdDOCUMENTO->Name = QApplication::Translate('Id D O C U M E N T O');
			if ($this->blnEditMode)
				$this->lblIdDOCUMENTO->Text = $this->objDocumento->IdDOCUMENTO;
			else
				$this->lblIdDOCUMENTO->Text = 'N/A';
			return $this->lblIdDOCUMENTO;
		}

		/**
		 * Create and setup QTextBox txtNombre
		 * @param string $strControlId optional ControlId to use
		 * @return QTextBox
		 */
		public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objDocumento->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Documento::NombreMaxLength;
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
			$this->lblNombre->Text = $this->objDocumento->Nombre;
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
			$this->txtDuracion->Text = $this->objDocumento->Duracion;
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
			$this->lblDuracion->Text = $this->objDocumento->Duracion;
			$this->lblDuracion->Format = $strFormat;
			return $this->lblDuracion;
		}

		/**
		 * Create and setup QListBox lstDOCUMENTOIdDOCUMENTOObject
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDOCUMENTOIdDOCUMENTOObject_Create($strControlId = null) {
			$this->lstDOCUMENTOIdDOCUMENTOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstDOCUMENTOIdDOCUMENTOObject->Name = QApplication::Translate('D O C U M E N T O Id D O C U M E N T O Object');
			$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
			$objDOCUMENTOIdDOCUMENTOObjectArray = Documento::LoadAll();
			if ($objDOCUMENTOIdDOCUMENTOObjectArray) foreach ($objDOCUMENTOIdDOCUMENTOObjectArray as $objDOCUMENTOIdDOCUMENTOObject) {
				$objListItem = new QListItem($objDOCUMENTOIdDOCUMENTOObject->__toString(), $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO);
				if (($this->objDocumento->DOCUMENTOIdDOCUMENTOObject) && ($this->objDocumento->DOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO == $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO))
					$objListItem->Selected = true;
				$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
			}
			return $this->lstDOCUMENTOIdDOCUMENTOObject;
		}

		/**
		 * Create and setup QLabel lblDOCUMENTOIdDOCUMENTO
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDOCUMENTOIdDOCUMENTO_Create($strControlId = null) {
			$this->lblDOCUMENTOIdDOCUMENTO = new QLabel($this->objParentObject, $strControlId);
			$this->lblDOCUMENTOIdDOCUMENTO->Name = QApplication::Translate('D O C U M E N T O Id D O C U M E N T O Object');
			$this->lblDOCUMENTOIdDOCUMENTO->Text = ($this->objDocumento->DOCUMENTOIdDOCUMENTOObject) ? $this->objDocumento->DOCUMENTOIdDOCUMENTOObject->__toString() : null;
			return $this->lblDOCUMENTOIdDOCUMENTO;
		}

		/**
		 * Create and setup QListBox lstDocumentosFase
		 * @param string $strControlId optional ControlId to use
		 * @return QListBox
		 */
		public function lstDocumentosFase_Create($strControlId = null) {
			$this->lstDocumentosFase = new QListBox($this->objParentObject, $strControlId);
			$this->lstDocumentosFase->Name = QApplication::Translate('Documentos Fase');
			$this->lstDocumentosFase->AddItem(QApplication::Translate('- Select One -'), null);
			$objDocumentosFaseArray = DocumentosFase::LoadAll();
			if ($objDocumentosFaseArray) foreach ($objDocumentosFaseArray as $objDocumentosFase) {
				$objListItem = new QListItem($objDocumentosFase->__toString(), $objDocumentosFase->DOCUMENTOIdDOCUMENTO);
				if ($objDocumentosFase->DOCUMENTOIdDOCUMENTO == $this->objDocumento->IdDOCUMENTO)
					$objListItem->Selected = true;
				$this->lstDocumentosFase->AddItem($objListItem);
			}
			// Because DocumentosFase's DocumentosFase is not null, if a value is already selected, it cannot be changed.
			if ($this->lstDocumentosFase->SelectedValue)
				$this->lstDocumentosFase->Enabled = false;
			return $this->lstDocumentosFase;
		}

		/**
		 * Create and setup QLabel lblDocumentosFase
		 * @param string $strControlId optional ControlId to use
		 * @return QLabel
		 */
		public function lblDocumentosFase_Create($strControlId = null) {
			$this->lblDocumentosFase = new QLabel($this->objParentObject, $strControlId);
			$this->lblDocumentosFase->Name = QApplication::Translate('Documentos Fase');
			$this->lblDocumentosFase->Text = ($this->objDocumento->DocumentosFase) ? $this->objDocumento->DocumentosFase->__toString() : null;
			return $this->lblDocumentosFase;
		}



		/**
		 * Refresh this MetaControl with Data from the local Documento object.
		 * @param boolean $blnReload reload Documento from the database
		 * @return void
		 */
		public function Refresh($blnReload = false) {
			if ($blnReload)
				$this->objDocumento->Reload();

			if ($this->lblIdDOCUMENTO) if ($this->blnEditMode) $this->lblIdDOCUMENTO->Text = $this->objDocumento->IdDOCUMENTO;

			if ($this->txtNombre) $this->txtNombre->Text = $this->objDocumento->Nombre;
			if ($this->lblNombre) $this->lblNombre->Text = $this->objDocumento->Nombre;

			if ($this->txtDuracion) $this->txtDuracion->Text = $this->objDocumento->Duracion;
			if ($this->lblDuracion) $this->lblDuracion->Text = $this->objDocumento->Duracion;

			if ($this->lstDOCUMENTOIdDOCUMENTOObject) {
					$this->lstDOCUMENTOIdDOCUMENTOObject->RemoveAllItems();
				$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem(QApplication::Translate('- Select One -'), null);
				$objDOCUMENTOIdDOCUMENTOObjectArray = Documento::LoadAll();
				if ($objDOCUMENTOIdDOCUMENTOObjectArray) foreach ($objDOCUMENTOIdDOCUMENTOObjectArray as $objDOCUMENTOIdDOCUMENTOObject) {
					$objListItem = new QListItem($objDOCUMENTOIdDOCUMENTOObject->__toString(), $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO);
					if (($this->objDocumento->DOCUMENTOIdDOCUMENTOObject) && ($this->objDocumento->DOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO == $objDOCUMENTOIdDOCUMENTOObject->IdDOCUMENTO))
						$objListItem->Selected = true;
					$this->lstDOCUMENTOIdDOCUMENTOObject->AddItem($objListItem);
				}
			}
			if ($this->lblDOCUMENTOIdDOCUMENTO) $this->lblDOCUMENTOIdDOCUMENTO->Text = ($this->objDocumento->DOCUMENTOIdDOCUMENTOObject) ? $this->objDocumento->DOCUMENTOIdDOCUMENTOObject->__toString() : null;

			if ($this->lstDocumentosFase) {
				$this->lstDocumentosFase->RemoveAllItems();
				$this->lstDocumentosFase->AddItem(QApplication::Translate('- Select One -'), null);
				$objDocumentosFaseArray = DocumentosFase::LoadAll();
				if ($objDocumentosFaseArray) foreach ($objDocumentosFaseArray as $objDocumentosFase) {
					$objListItem = new QListItem($objDocumentosFase->__toString(), $objDocumentosFase->DOCUMENTOIdDOCUMENTO);
					if ($objDocumentosFase->DOCUMENTOIdDOCUMENTO == $this->objDocumento->IdDOCUMENTO)
						$objListItem->Selected = true;
					$this->lstDocumentosFase->AddItem($objListItem);
				}
				// Because DocumentosFase's DocumentosFase is not null, if a value is already selected, it cannot be changed.
				if ($this->lstDocumentosFase->SelectedValue)
					$this->lstDocumentosFase->Enabled = false;
				else
					$this->lstDocumentosFase->Enabled = true;
			}
			if ($this->lblDocumentosFase) $this->lblDocumentosFase->Text = ($this->objDocumento->DocumentosFase) ? $this->objDocumento->DocumentosFase->__toString() : null;

		}



		///////////////////////////////////////////////
		// PROTECTED UPDATE METHODS for ManyToManyReferences (if any)
		///////////////////////////////////////////////





		///////////////////////////////////////////////
		// PUBLIC DOCUMENTO OBJECT MANIPULATORS
		///////////////////////////////////////////////

		/**
		 * This will save this object's Documento instance,
		 * updating only the fields which have had a control created for it.
		 */
		public function SaveDocumento() {
			try {
				// Update any fields for controls that have been created
				if ($this->txtNombre) $this->objDocumento->Nombre = $this->txtNombre->Text;
				if ($this->txtDuracion) $this->objDocumento->Duracion = $this->txtDuracion->Text;
				if ($this->lstDOCUMENTOIdDOCUMENTOObject) $this->objDocumento->DOCUMENTOIdDOCUMENTO = $this->lstDOCUMENTOIdDOCUMENTOObject->SelectedValue;

				// Update any UniqueReverseReferences (if any) for controls that have been created for it
				if ($this->lstDocumentosFase) $this->objDocumento->DocumentosFase = DocumentosFase::Load($this->lstDocumentosFase->SelectedValue);

				// Save the Documento object
				$this->objDocumento->Save();

				// Finally, update any ManyToManyReferences (if any)
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
		}

		/**
		 * This will DELETE this object's Documento instance from the database.
		 * It will also unassociate itself from any ManyToManyReferences.
		 */
		public function DeleteDocumento() {
			$this->objDocumento->Delete();
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
				case 'Documento': return $this->objDocumento;
				case 'TitleVerb': return $this->strTitleVerb;
				case 'EditMode': return $this->blnEditMode;

				// Controls that point to Documento fields -- will be created dynamically if not yet created
				case 'IdDOCUMENTOControl':
					if (!$this->lblIdDOCUMENTO) return $this->lblIdDOCUMENTO_Create();
					return $this->lblIdDOCUMENTO;
				case 'IdDOCUMENTOLabel':
					if (!$this->lblIdDOCUMENTO) return $this->lblIdDOCUMENTO_Create();
					return $this->lblIdDOCUMENTO;
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
				case 'DOCUMENTOIdDOCUMENTOControl':
					if (!$this->lstDOCUMENTOIdDOCUMENTOObject) return $this->lstDOCUMENTOIdDOCUMENTOObject_Create();
					return $this->lstDOCUMENTOIdDOCUMENTOObject;
				case 'DOCUMENTOIdDOCUMENTOLabel':
					if (!$this->lblDOCUMENTOIdDOCUMENTO) return $this->lblDOCUMENTOIdDOCUMENTO_Create();
					return $this->lblDOCUMENTOIdDOCUMENTO;
				case 'DocumentosFaseControl':
					if (!$this->lstDocumentosFase) return $this->lstDocumentosFase_Create();
					return $this->lstDocumentosFase;
				case 'DocumentosFaseLabel':
					if (!$this->lblDocumentosFase) return $this->lblDocumentosFase_Create();
					return $this->lblDocumentosFase;
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
					// Controls that point to Documento fields
					case 'IdDOCUMENTOControl':
						return ($this->lblIdDOCUMENTO = QType::Cast($mixValue, 'QControl'));
					case 'NombreControl':
						return ($this->txtNombre = QType::Cast($mixValue, 'QControl'));
					case 'DuracionControl':
						return ($this->txtDuracion = QType::Cast($mixValue, 'QControl'));
					case 'DOCUMENTOIdDOCUMENTOControl':
						return ($this->lstDOCUMENTOIdDOCUMENTOObject = QType::Cast($mixValue, 'QControl'));
					case 'DocumentosFaseControl':
						return ($this->lstDocumentosFase = QType::Cast($mixValue, 'QControl'));
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