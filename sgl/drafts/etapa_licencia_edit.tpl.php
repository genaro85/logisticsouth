<?php
// This is the HTML template include file (.tpl.php) for the etapa_licencia_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Etapa Licencia') . ' - ' . $this->mctEtapaLicencia->TitleVerb;
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctEtapaLicencia->TitleVerb); ?></h2>
    <h1><?php _t('Etapa Licencia') ?></h1>
</div>

<div id="formControls">
    <?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>
    <p class="create">
	<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__) ?>/licencia_edit.php"><?php _t('Crear una nueva'); ?> <?php _t('Licencia');?></a>
    </p>

    <?php $this->lstETAPAIdETAPAObject->RenderWithName(); ?>
    <p class="create">
	<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_DRAFTS__) ?>/etapa_edit.php"><?php _t('Crear una nueva'); ?> <?php _t('Etapa');?></a>
    </p>

    <?php $this->calETAPAFechaInicio->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendar2->Render(); ?></div>

    <?php $this->calETAPAFechaFin->RenderWithName(); ?>
    <div style="margin-left: 415px;"><?php $this->calCalendar3->Render(); ?></div>

</div>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>