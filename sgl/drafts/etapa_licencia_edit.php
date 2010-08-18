<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/EtapaLicenciaEditFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the EtapaLicencia class.  It uses the code-generated
 * EtapaLicenciaMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a EtapaLicencia columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both etapa_licencia_edit.php AND
 * etapa_licencia_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class EtapaLicenciaEditForm extends EtapaLicenciaEditFormBase {

    // Override Form Event Handlers as Needed
    protected $calCalendar2;
    protected $calCalendar3;

//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();

        // Use the CreateFromPathInfo shortcut (this can also be done manually using the EtapaLicenciaMetaControl constructor)
        // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
        $this->mctEtapaLicencia = EtapaLicenciaMetaControl::CreateFromPathInfo($this);

        // Call MetaControl's methods to create qcontrols based on EtapaLicencia's data fields
        $this->lstLICENCIAIdLICENCIAObject = $this->mctEtapaLicencia->lstLICENCIAIdLICENCIAObject_Create();
        $this->lstETAPAIdETAPAObject = $this->mctEtapaLicencia->lstETAPAIdETAPAObject_Create();
        //$this->calETAPAFechaInicio = $this->mctEtapaLicencia->calETAPAFechaInicio_Create();
        //$this->calETAPAFechaFin = $this->mctEtapaLicencia->calETAPAFechaFin_Create();
        $this->calCalendar2 = new QCalendar($this, $this->calETAPAFechaInicio);
        $this->calETAPAFechaInicio->AddAction(new QFocusEvent(), new QBlurControlAction($this->calETAPAFechaInicio));
        $this->calETAPAFechaInicio->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendar2));

        $this->calCalendar3 = new QCalendar($this, $this->calETAPAFechaFin);
        $this->calETAPAFechaFin->AddAction(new QFocusEvent(), new QBlurControlAction($this->calETAPAFechaFin));
        $this->calETAPAFechaFin->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendar3));

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
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('EtapaLicencia') . '?'));
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = $this->mctEtapaLicencia->EditMode;
    }
    
}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// etapa_licencia_edit.tpl.php as the included HTML template file
EtapaLicenciaEditForm::Run('EtapaLicenciaEditForm');
?>