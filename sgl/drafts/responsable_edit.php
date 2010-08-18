<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ResponsableEditFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the Responsable class.  It uses the code-generated
 * ResponsableMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a Responsable columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 * 
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both responsable_edit.php AND
 * responsable_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class ResponsableEditForm extends ResponsableEditFormBase {

    protected $calCalendar;
    protected $calCalendar1;

    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}
//		protected function Form_Load() {}

    protected function Form_Create() {
        parent::Form_Create();
        $this->calCalendar = new QCalendar($this, $this->calFechaInicio);
        $this->calCalendar1 = new QCalendar($this, $this->calFechaFin);
        // Use the CreateFromPathInfo shortcut (this can also be done manually using the ResponsableMetaControl constructor)
        // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
        $this->mctResponsable = ResponsableMetaControl::CreateFromPathInfo($this);

        // Call MetaControl's methods to create qcontrols based on Responsable's data fields
        $this->lstEMPLEADOIdEMPLEADOObject = $this->mctResponsable->lstEMPLEADOIdEMPLEADOObject_Create();
        $this->lstLICENCIAIdLICENCIAObject = $this->mctResponsable->lstLICENCIAIdLICENCIAObject_Create();
        //Calendars Actions
        $this->calFechaInicio->AddAction(new QFocusEvent(), new QBlurControlAction($this->calFechaInicio));
        $this->calFechaInicio->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendar));

        $this->calFechaFin->AddAction(new QFocusEvent(), new QBlurControlAction($this->calFechaFin));
        $this->calFechaFin->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendar1));

        //$this->calFechaInicio = $this->mctResponsable->calFechaInicio_Create();
        //$this->calFechaFin = $this->mctResponsable->calFechaFin_Create();
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
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Seguro que desea BORRAR a') . ' ' . QApplication::Translate('Responsable') . '?'));
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = $this->mctResponsable->EditMode;
    }

}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// responsable_edit.tpl.php as the included HTML template file
ResponsableEditForm::Run('ResponsableEditForm');
?>