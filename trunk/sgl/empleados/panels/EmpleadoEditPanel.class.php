<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Empleado class.  It uses the code-generated
	 * EmpleadoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Empleado columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both empleado_edit.php AND
	 * empleado_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class EmpleadoEditPanel extends QPanel {
		// Local instance of the EmpleadoMetaControl
		/**
		 * @var EmpleadoMetaControl
		 */
		protected $mctEmpleado;

		// Controls for Empleado's Data Fields
		public $lblIdEMPLEADO;
		public $txtNombre;
		public $txtApellido;
		public $txtCedula;
		public $txtLogin;
		public $txtPassword;
		public $txtEmail;

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

		public function __construct($objParentObject, $strClosePanelMethod, $intIdEMPLEADO = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/EmpleadoEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the EmpleadoMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctEmpleado = EmpleadoMetaControl::Create($this, $intIdEMPLEADO);

			// Call MetaControl's methods to create qcontrols based on Empleado's data fields
			$this->lblIdEMPLEADO = $this->mctEmpleado->lblIdEMPLEADO_Create();
			$this->txtNombre = $this->mctEmpleado->txtNombre_Create();
			$this->txtApellido = $this->mctEmpleado->txtApellido_Create();
			$this->txtCedula = $this->mctEmpleado->txtCedula_Create();
			$this->txtLogin = $this->mctEmpleado->txtLogin_Create();
			$this->txtPassword = $this->mctEmpleado->txtPassword_Create();
			$this->txtEmail = $this->mctEmpleado->txtEmail_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Empleado'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctEmpleado->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the EmpleadoMetaControl
			$this->mctEmpleado->SaveEmpleado();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the EmpleadoMetaControl
			$this->mctEmpleado->DeleteEmpleado();
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