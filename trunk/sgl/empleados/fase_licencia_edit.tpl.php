<?php
// This is the HTML template include file (.tpl.php) for the fase_licencia_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Periodo Licencia por Fase') . ' - ' . $this->mctFaseLicencia->TitleVerb;
require(__CONFIGURATION__ . '/headerEmp.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctFaseLicencia->TitleVerb); ?></h2>
    <h1><?php _t('Periodo Licencia por Fase')?></h1>
</div>

<div id="formControls">
    <?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>

    <?php $this->lstFASEIdFASEObject->RenderWithName(); ?>

    <?php $this->calFASEFechaInicio->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendar6->Render(); ?></div>

    <?php $this->calFASEFechaFin->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendar7->Render(); ?></div>
    
</div>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>