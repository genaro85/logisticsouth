<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/VigenciaDocumentoEditFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the VigenciaDocumento class.  It uses the code-generated
 * VigenciaDocumentoMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a VigenciaDocumento columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both vigencia_documento_edit.php AND
 * vigencia_documento_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class VigenciaDocumentoEditForm extends VigenciaDocumentoEditFormBase {

    // Override Form Event Handlers as Needed
    protected $calCalendar4;
    protected $calCalendar5;

//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        $this->calCalendar4 = new QCalendar($this, $this->calFechaOtorgado);
        $this->calCalendar5 = new QCalendar($this, $this->calFechaVencimieto);

        // Use the CreateFromPathInfo shortcut (this can also be done manually using the VigenciaDocumentoMetaControl constructor)
        // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
        $this->mctVigenciaDocumento = VigenciaDocumentoMetaControl::CreateFromPathInfo($this);

        // Call MetaControl's methods to create qcontrols based on VigenciaDocumento's data fields
        $this->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject = $this->mctVigenciaDocumento->lstLISTADEDOCUMENTODOCUMENTOIdDOCUMENTOObject_Create();
        $this->lstLICENCIAIdLICENCIAObject = $this->mctVigenciaDocumento->lstLICENCIAIdLICENCIAObject_Create();
        // Calendar Actions
        $this->calFechaOtorgado->AddAction(new QFocusEvent(), new QBlurControlAction($this->calFechaOtorgado));
        $this->calFechaOtorgado->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendar4));

        $this->calFechaVencimieto->AddAction(new QFocusEvent(), new QBlurControlAction($this->calFechaVencimieto));
        $this->calFechaVencimieto->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendar5));
        //$this->calFechaOtorgado = $this->mctVigenciaDocumento->calFechaOtorgado_Create();
        //$this->calFechaVencimieto = $this->mctVigenciaDocumento->calFechaVencimieto_Create();
        
        // Create Buttons and Actions on this Form
        $this->btnSave = new QButton($this);
        $this->btnSave->Text = QApplication::Translate('Guardar');
        $this->btnSave->AddAction(new QClickEvent(), new QAjaxAction('btnSave_Click'));
        $this->btnSave->CausesValidation = true;

        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = QApplication::Translate('Cancelar');
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

        $this->btnDelete = new QButton($this);
        $this->btnDelete->Text = QApplication::Translate('Borrar');
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Seguro que desea BORRAR a') . ' ' . QApplication::Translate('VigenciaDocumento') . '?'));
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = $this->mctVigenciaDocumento->EditMode;
    }

}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// vigencia_documento_edit.tpl.php as the included HTML template file
VigenciaDocumentoEditForm::Run('VigenciaDocumentoEditForm');
?>