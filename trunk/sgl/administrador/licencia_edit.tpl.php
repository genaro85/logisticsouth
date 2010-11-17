<?php
// This is the HTML template include file (.tpl.php) for the licencia_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Licencia') . ' - ' . $this->mctLicencia->TitleVerb;
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctLicencia->TitleVerb); ?></h2>
    <h1><?php _t('Licencia') ?></h1>
</div>

<div id="formControls">
    <?php // $this->lblIdLICENCIA->RenderWithName();  ?>

    <?php $this->lstPROCESOIdPROCESOObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/proceso_edit.php"><?php _t('Create a New'); ?> <?php _t('Proceso');?></a>
    </div>

    <?php $this->lstEMPRESAIdEMPRESAObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/empresa_edit.php"><?php _t('Create a New'); ?> <?php _t('Empresa');?></a>
    </div>

    <?php $this->lstPROVEEDORIdPROVEEDORObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/proveedor_edit.php"><?php _t('Create a New'); ?> <?php _t('Proveedor');?></a>
    </div>

    <?php $this->calFechaInicio->RenderWithName(); ?>

    <div style="margin-left: 415px;"><?php $this->calCalendarIni->Render(); ?></div>

    <?php $this->calFechaFin->RenderWithName(); ?>

    <div style="margin-left: 415px;"><?php $this->calCalendarFin->Render(); ?></div>

    <?php //Eliminado $this->calFechaFinEstimada->RenderWithName(); ?>

    <?php $this->txtNumeroProforma->RenderWithName(); ?>

    <?php $this->txtNumeroCNP->RenderWithName(); ?>

    <?php $this->calVencimientoCNP->RenderWithName(); ?>

    <div style="margin-left: 415px;"><?php $this->calCalendarCNP->Render(); ?></div>

    <?php $this->txtStatus->RenderWithName(); ?>

    <?php $this->txtFormaPago->RenderWithName(); ?>

    <?php $this->txtTipo->RenderWithName(); ?>

    <?php $this->txtFlete->RenderWithName(); ?>

    <?php $this->txtSeguro->RenderWithName(); ?>



</div>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>