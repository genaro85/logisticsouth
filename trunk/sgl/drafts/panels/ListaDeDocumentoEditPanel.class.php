<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the ListaDeDocumento class.  It uses the code-generated
	 * ListaDeDocumentoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a ListaDeDocumento columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both lista_de_documento_edit.php AND
	 * lista_de_documento_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class ListaDeDocumentoEditPanel extends QPanel {
		// Local instance of the ListaDeDocumentoMetaControl
		/**
		 * @var ListaDeDocumentoMetaControl
		 */
		protected $mctListaDeDocumento;

		// Controls for ListaDeDocumento's Data Fields
		public $lstDOCUMENTOIdDOCUMENTOObject;
		public $lstPROCESOIdPROCESOObject;
		public $lstFASEIdFASEObject;

		// Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

		// Other Controls
		/**
		 * @var QButton Save
		 */
		public $btnSave;
		/**
		 * @var QButton Delete
		 */
		public $btnDelete;
		/**
		 * @var QButton Cancel
		 */
		public $btnCancel;

		// Callback
		protected $strClosePanelMethod;

		public function __construct($objParentObject, $strClosePanelMethod, $intDOCUMENTOIdDOCUMENTO = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/ListaDeDocumentoEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the ListaDeDocumentoMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctListaDeDocumento = ListaDeDocumentoMetaControl::Create($this, $intDOCUMENTOIdDOCUMENTO);

			// Call MetaControl's methods to create qcontrols based on ListaDeDocumento's data fields
			$this->lstDOCUMENTOIdDOCUMENTOObject = $this->mctListaDeDocumento->lstDOCUMENTOIdDOCUMENTOObject_Create();
			$this->lstPROCESOIdPROCESOObject = $this->mctListaDeDocumento->lstPROCESOIdPROCESOObject_Create();
			$this->lstFASEIdFASEObject = $this->mctListaDeDocumento->lstFASEIdFASEObject_Create();

			// Create Buttons and Actions on this Form
			$this->btnSave = new QButton($this);
			$this->btnSave->Text = QApplication::Translate('Save');
			$this->btnSave->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnSave_Click'));
			$this->btnSave->CausesValidation = $this;

			$this->btnCancel = new QButton($this);
			$this->btnCancel->Text = QApplication::Translate('Cancel');
			$this->btnCancel->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnCancel_Click'));

			$this->btnDelete = new QButton($this);
			$this->btnDelete->Text = QApplication::Translate('Delete');
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('ListaDeDocumento'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctListaDeDocumento->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the ListaDeDocumentoMetaControl
			$this->mctListaDeDocumento->SaveListaDeDocumento();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the ListaDeDocumentoMetaControl
			$this->mctListaDeDocumento->DeleteListaDeDocumento();
			$this->CloseSelf(true);
		}

		public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
			$this->CloseSelf(false);
		}

		// Close Myself and Call ClosePanelMethod Callback
		protected function CloseSelf($blnChangesMade) {
			$strMethod = $this->strClosePanelMethod;
			$this->objForm->$strMethod($blnChangesMade);
		}
	
		
	}
?>