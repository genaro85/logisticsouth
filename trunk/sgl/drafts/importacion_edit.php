<?php
// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/ImportacionEditFormBase.class.php');

/**
 * This is a quick-and-dirty draft QForm object to do Create, Edit, and Delete functionality
 * of the Importacion class.  It uses the code-generated
 * ImportacionMetaControl class, which has meta-methods to help with
 * easily creating/defining controls to modify the fields of a Importacion columns.
 *
 * Any display customizations and presentation-tier logic can be implemented
 * here by overriding existing or implementing new methods, properties and variables.
 *
 * NOTE: This file is overwritten on any code regenerations.  If you want to make
 * permanent changes, it is STRONGLY RECOMMENDED to move both importacion_edit.php AND
 * importacion_edit.tpl.php out of this Form Drafts directory.
 *
 * @package My QCubed Application
 * @subpackage Drafts
 */
class ImportacionEditForm extends ImportacionEditFormBase {
    // Override Form Event Handlers as Needed
//		protected function Form_Run() {}

//		protected function Form_Load() {}

//		protected function Form_Create() {}

    protected $calCalendarIni;
    protected $calCalendarFin;

    protected function Form_Create() {
        parent::Form_Create();

        // Use the CreateFromPathInfo shortcut (this can also be done manually using the ImportacionMetaControl constructor)
        // MAKE SURE we specify "$this" as the MetaControl's (and thus all subsequent controls') parent
        $this->mctImportacion = ImportacionMetaControl::CreateFromPathInfo($this);



        // Call MetaControl's methods to create qcontrols based on Importacion's data fields
        $this->lstTRANSPORTEIdTRANSPORTEObject = $this->mctImportacion->lstTRANSPORTEIdTRANSPORTEObject_Create();
        $this->lstLICENCIAIdLICENCIAObject = $this->mctImportacion->lstLICENCIAIdLICENCIAObject_Create();
        $this->calFechaDeSalida = $this->mctImportacion->calFechaDeSalida_Create();
        $this->calFechaLlegada = $this->mctImportacion->calFechaLlegada_Create();
        $this->txtTipo = $this->mctImportacion->txtTipo_Create();
        $this->lstPAISOrigenObject = $this->mctImportacion->lstPAISOrigenObject_Create();
        $this->lstPAISDestinoObject = $this->mctImportacion->lstPAISDestinoObject_Create();

        $this->calCalendarIni = new QCalendar($this, $this->calFechaDeSalida);
        $this->calCalendarFin = new QCalendar($this, $this->calFechaLlegada);

        $this->calFechaDeSalida->AddAction(new QFocusEvent(), new QBlurControlAction($this->calFechaDeSalida));
        $this->calFechaDeSalida->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendarIni));

        $this->calFechaLlegada->AddAction(new QFocusEvent(), new QBlurControlAction($this->calFechaLlegada));
        $this->calFechaLlegada->AddAction(new QClickEvent(), new QShowCalendarAction($this->calCalendarFin));

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
        $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are you SURE you want to DELETE this') . ' ' . QApplication::Translate('Importacion') . '?'));
        $this->btnDelete->AddAction(new QClickEvent(), new QAjaxAction('btnDelete_Click'));
        $this->btnDelete->Visible = $this->mctImportacion->EditMode;
    }

}

// Go ahead and run this form object to render the page and its event handlers, implicitly using
// importacion_edit.tpl.php as the included HTML template file
ImportacionEditForm::Run('ImportacionEditForm');
?>