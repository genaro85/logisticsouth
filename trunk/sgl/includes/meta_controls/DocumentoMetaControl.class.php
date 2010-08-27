<?php
	require(__META_CONTROLS_GEN__ . '/DocumentoMetaControlGen.class.php');

	/**
	 * This is a MetaControl customizable subclass, providing a QForm or QPanel access to event handlers
	 * and QControls to perform the Create, Edit, and Delete functionality of the
	 * Documento class.  This code-generated class extends from
	 * the generated MetaControl class, which contains all the basic elements to help a QPanel or QForm
	 * display an HTML form that can manipulate a single Documento object.
	 *
	 * To take advantage of some (or all) of these control objects, you
	 * must create a new QForm or QPanel which instantiates a DocumentoMetaControl
	 * class.
	 *
	 * This file is intended to be modified.  Subsequent code regenerations will NOT modify
	 * or overwrite this file.
	 * 
	 * @package My QCubed Application
	 * @subpackage MetaControls
	 */
	class DocumentoMetaControl extends DocumentoMetaControlGen {
		// Initialize fields with default values from database definition
/*		
		public function __construct($objParentObject, Documento $objDocumento) {
			parent::__construct($objParentObject,$objDocumento);
			if ( !$this->blnEditMode ){
				$this->objDocumento->Initialize();
			}
		}
*/
            public function txtNombre_Create($strControlId = null) {
			$this->txtNombre = new QTextBox($this->objParentObject, $strControlId);
			$this->txtNombre->Name = QApplication::Translate('Nombre');
			$this->txtNombre->Text = $this->objDocumento->Nombre;
			$this->txtNombre->Required = true;
			$this->txtNombre->MaxLength = Documento::NombreMaxLength;
			return $this->txtNombre;
		}

                public function txtDuracion_Create($strControlId = null) {
			$this->txtDuracion = new QIntegerTextBox($this->objParentObject, $strControlId);
			$this->txtDuracion->Name = QApplication::Translate('Duracion (en días)');
			$this->txtDuracion->Text = $this->objDocumento->Duracion;
			return $this->txtDuracion;
		}
/*
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
*/
                public function lstDOCUMENTOIdDOCUMENTOObject_Create($strControlId = null) {
			$this->lstDOCUMENTOIdDOCUMENTOObject = new QListBox($this->objParentObject, $strControlId);
			$this->lstDOCUMENTOIdDOCUMENTOObject->Name = QApplication::Translate('Documento Predecesor');
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

	}
?>