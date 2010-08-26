<?php
/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
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
 * @subpackage FormBaseObjects
 */
abstract class LicenciaEditFormBase extends QForm {
    // Local instance of the LicenciaMetaControl
    /**
     * @var LicenciaMetaControlGen mctLicencia
     */
    protected $mctLicencia;

    // Controls for Licencia's Data Fields
    protected $lblIdLICENCIA;
    protected $lstEMPRESAIdEMPRESAObject;
    protected $lstPROVEEDORIdPROVEEDORObject;
    protected $calFechaInicio;
    protected $calFechaFin;
    protected $calFechaFinEstimada;
    protected $txtNumeroProforma;
    protected $txtNumeroCNP;
    protected $calVencimientoCNP;
    protected $txtStatus;
    protected $txtFormaPago;
    protected $txtTipo;
    protected $txtFlete;
    protected $txtSeguro;
    protected $lstPROCESOIdPROCESOObject;

    // Other ListBoxes (if applicable) via Unique ReverseReferences and ManyToMany References

    // Other Controls
    /**
     * @var QButton Save
     */
    protected $btnSave;
    /**
     * @var QButton Delete
     */
    protected $btnDelete;
    /**
     * @var QButton Cancel
     */
    protected $btnCancel;

    // Create QForm Event Handlers as Needed

//		protected function Form_Exit() {}
//		protected function Form_Load() {}
//		protected function Form_PreRender() {}

    protected function Form_Run() {
        // Security check for ALLOW_REMOTE_ADMIN
        // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        // Use the CreateFromPathInfo shortcut (this can also be done manually using the LicenciaMetaControl constructor)
        // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
        $this->mctLicencia = LicenciaMetaControl::CreateFromPathInfo($this);

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
        $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
        $this->btnSave->CausesValidation = true;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = QApplication::Translate('Cancel');
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = QApplication::Translate('Delete');
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Licencia') . '?'));
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = $this->mctLicencia->EditMode;
    }

    /**
     * This Form_Validate event handler allows you to specify any custom Form Validation rules.
     * It will also Blink() on all invalid controls, as well as Focus() on the top-most invalid control.
     */
    protected function Form_Validate() {
        // By default, we report that Custom Validations passed
        $blnToReturn = true;

        // Custom Validation Rules
        // TODO: Be sure to set $blnToReturn to false if any custom validation fails!


        $blnFocused = false;
        foreach ($this->GetErrorControls() as $objControl) {
            // Set Focus to the top-most invalid control
            if (!$blnFocused) {
                $objControl->Focus();
                $blnFocused = true;
            }

            // Blink on ALL invalid controls
            $objControl->Blink();
        }

        return $blnToReturn;
    }

    // Button Event Handlers

    protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
        // Delegate "Save" processing to the LicenciaMetaControl
        $this->mctLicencia->SaveLicencia();
        $this->RedirectToListPage();
    }

    protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
        // Delegate "Delete" processing to the LicenciaMetaControl
        $this->mctLicencia->DeleteLicencia();
        $this->RedirectToListPage();
    }

    protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
        $this->RedirectToListPage();
    }

    // Other Methods

    protected function RedirectToListPage() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__ . '/licencia_list.php');
    }
}
?>
