<?php
// This is the HTML template include file (.tpl.php) for the importacion_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Importacion') . ' - ' . $this->mctImportacion->TitleVerb;
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctImportacion->TitleVerb); ?></h2>
    <h1><?php _t('Importacion')?></h1>
</div>

<div id="formControls">
    <?php $this->lstTRANSPORTEIdTRANSPORTEObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/transporte_edit.php"><?php _t('Create a New'); ?> <?php _t('Transporte');?></a>
    </div>

    <?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/licencia_edit.php"><?php _t('Create a New'); ?> <?php _t('Licencia');?></a>
    </div>

    <?php $this->calFechaDeSalida->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendarIni->Render(); ?></div>

    <?php $this->calFechaLlegada->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendarFin->Render(); ?></div>

    <?php $this->txtTipo->RenderWithName(); ?>

    <?php $this->lstPAISOrigenObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/pais_edit.php"><?php _t('Create a New'); ?> <?php _t('Pais');?></a>
    </div>

    <?php $this->lstPAISDestinoObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/pais_edit.php"><?php _t('Create a New'); ?> <?php _t('Pais');?></a>
    </div>

</div>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>