<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the Licencia class.  It uses the code-generated
	 * LicenciaMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a Licencia columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both licencia_edit.php AND
	 * licencia_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class LicenciaEditPanel extends QPanel {
		// Local instance of the LicenciaMetaControl
		/**
		 * @var LicenciaMetaControl
		 */
		protected $mctLicencia;

		// Controls for Licencia's Data Fields
		public $lblIdLICENCIA;
		public $lstEMPRESAIdEMPRESAObject;
		public $lstPROVEEDORIdPROVEEDORObject;
		public $calFechaInicio;
		public $calFechaFin;
		public $calFechaFinEstimada;
		public $txtNumeroProforma;
		public $txtNumeroCNP;
		public $calVencimientoCNP;
		public $txtStatus;
		public $txtFormaPago;
		public $txtTipo;
		public $txtFlete;
		public $txtSeguro;
		public $lstPROCESOIdPROCESOObject;

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

		public function __construct($objParentObject, $strClosePanelMethod, $intIdLICENCIA = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/LicenciaEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the LicenciaMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctLicencia = LicenciaMetaControl::Create($this, $intIdLICENCIA);

			// Call MetaControl's methods to create qcontrols based on Licencia's data fields
			$this->lblIdLICENCIA = $this->mctLicencia->lblIdLICENCIA_Create();
			$this->lstEMPRESAIdEMPRESAObject = $this->mctLicencia->lstEMPRESAIdEMPRESAObject_Create();
			$this->lstPROVEEDORIdPROVEEDORObject = $this->mctLicencia->lstPROVEEDORIdPROVEEDORObject_Create();
			$this->calFechaInicio = $this->mctLicencia->calFechaInicio_Create();
			$this->calFechaFin = $this->mctLicencia->calFechaFin_Create();
			$this->calFechaFinEstimada = $this->mctLicencia->calFechaFinEstimada_Create();
			$this->txtNumeroProforma = $this->mctLicencia->txtNumeroProforma_Create();
			$this->txtNumeroCNP = $this->mctLicencia->txtNumeroCNP_Create();
			$this->calVencimientoCNP = $this->mctLicencia->calVencimientoCNP_Create();
			$this->txtStatus = $this->mctLicencia->txtStatus_Create();
			$this->txtFormaPago = $this->mctLicencia->txtFormaPago_Create();
			$this->txtTipo = $this->mctLicencia->txtTipo_Create();
			$this->txtFlete = $this->mctLicencia->txtFlete_Create();
			$this->txtSeguro = $this->mctLicencia->txtSeguro_Create();
			$this->lstPROCESOIdPROCESOObject = $this->mctLicencia->lstPROCESOIdPROCESOObject_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('Licencia'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctLicencia->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the LicenciaMetaControl
			$this->mctLicencia->SaveLicencia();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the LicenciaMetaControl
			$this->mctLicencia->DeleteLicencia();
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