<?php
// This is the HTML template include file (.tpl.php) for the responsable_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Responsable') . ' - ' . $this->mctResponsable->TitleVerb;
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctResponsable->TitleVerb); ?></h2>
    <h1><?php _t('Responsable') ?></h1>
</div>

<div id="formControls">
    <?php $this->lstEMPLEADOIdEMPLEADOObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/empleado_edit.php"><?php _t('Create a New'); ?> <?php _t('Empleado');?></a>
    </div>
    
    <?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/licencia_edit.php"><?php _t('Create a New'); ?> <?php _t('Licencia');?></a>
    </div>

    <?php $this->calFechaInicio->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendar1->Render(); ?></div>

    <?php $this->calFechaFin->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendar2->Render(); ?></div>

</div>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>