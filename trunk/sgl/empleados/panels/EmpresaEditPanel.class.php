<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Empresa class.  It uses the code-generated
	 * EmpresaMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Empresa columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both empresa_edit.php AND
	 * empresa_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class EmpresaEditPanel extends QPanel {
		// Local instance of the EmpresaMetaControl
		/**
		 * @var EmpresaMetaControl
		 */
		protected $mctEmpresa;

		// Controls for Empresa's Data Fields
		public $lblIdEMPRESA;
		public $txtNombre;
		public $txtRif;
		public $txtDireccion;
		public $txtTelefono;
		public $txtEmail;
		public $txtLogin;
		public $txtPassword;

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

		public function __construct($objParentObject, $strClosePanelMethod, $intIdEMPRESA = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/EmpresaEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the EmpresaMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctEmpresa = EmpresaMetaControl::Create($this, $intIdEMPRESA);

			// Call MetaControl's methods to create qcontrols based on Empresa's data fields
			$this->lblIdEMPRESA = $this->mctEmpresa->lblIdEMPRESA_Create();
			$this->txtNombre = $this->mctEmpresa->txtNombre_Create();
			$this->txtRif = $this->mctEmpresa->txtRif_Create();
			$this->txtDireccion = $this->mctEmpresa->txtDireccion_Create();
			$this->txtTelefono = $this->mctEmpresa->txtTelefono_Create();
			$this->txtEmail = $this->mctEmpresa->txtEmail_Create();
			$this->txtLogin = $this->mctEmpresa->txtLogin_Create();
			$this->txtPassword = $this->mctEmpresa->txtPassword_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Empresa'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctEmpresa->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the EmpresaMetaControl
			$this->mctEmpresa->SaveEmpresa();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the EmpresaMetaControl
			$this->mctEmpresa->DeleteEmpresa();
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