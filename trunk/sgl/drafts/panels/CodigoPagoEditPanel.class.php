<?php
	/**
	 * This is a quick-and-dirty draft QPanel object to do Create, Edit, and Delete functionality
	 * of the CodigoPago class.  It uses the code-generated
	 * CodigoPagoMetaControl class, which has meta-methods to help with
	 * easily creating/defining controls to modify the fields of a CodigoPago columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both codigo_pago_edit.php AND
	 * codigo_pago_edit.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class CodigoPagoEditPanel extends QPanel {
		// Local instance of the CodigoPagoMetaControl
		/**
		 * @var CodigoPagoMetaControl
		 */
		protected $mctCodigoPago;

		// Controls for CodigoPago's Data Fields
		public $lstLICENCIAIdLICENCIAObject;
		public $lstTIPODEPAGOIdTIPODEPAGOObject;
		public $txtNumRef;
		public $txtFecha;
		public $txtDivisa;
		public $txtMonto;

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

		public function __construct($objParentObject, $strClosePanelMethod, $intLICENCIAIdLICENCIA = null, $intTIPODEPAGOIdTIPODEPAGO = null, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			// Setup Callback and Template
			$this->strTemplate = __DOCROOT__ . __PANEL_DRAFTS__ . '/CodigoPagoEditPanel.tpl.php';
			$this->strClosePanelMethod = $strClosePanelMethod;

			// Construct the CodigoPagoMetaControl
			// MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
			$this->mctCodigoPago = CodigoPagoMetaControl::Create($this, $intLICENCIAIdLICENCIA, $intTIPODEPAGOIdTIPODEPAGO);

			// Call MetaControl's methods to create qcontrols based on CodigoPago's data fields
			$this->lstLICENCIAIdLICENCIAObject = $this->mctCodigoPago->lstLICENCIAIdLICENCIAObject_Create();
			$this->lstTIPODEPAGOIdTIPODEPAGOObject = $this->mctCodigoPago->lstTIPODEPAGOIdTIPODEPAGOObject_Create();
			$this->txtNumRef = $this->mctCodigoPago->txtNumRef_Create();
			$this->txtFecha = $this->mctCodigoPago->txtFecha_Create();
			$this->txtDivisa = $this->mctCodigoPago->txtDivisa_Create();
			$this->txtMonto = $this->mctCodigoPago->txtMonto_Create();

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
			$this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'),  QApplication::Translate('CodigoPago'))));
			$this->btnDelete->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnDelete_Click'));
			$this->btnDelete->Visible = $this->mctCodigoPago->EditMode;
		}

		// Control AjaxAction Event Handlers
		public function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the CodigoPagoMetaControl
			$this->mctCodigoPago->SaveCodigoPago();
			$this->CloseSelf(true);
		}

		public function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Delete" processing to the CodigoPagoMetaControl
			$this->mctCodigoPago->DeleteCodigoPago();
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