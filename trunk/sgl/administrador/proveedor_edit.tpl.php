<?php
// This is the HTML template include file (.tpl.php) for the proveedor_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Proveedor') . ' - ' . $this->mctProveedor->TitleVerb;
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctProveedor->TitleVerb); ?></h2>
    <h1><?php _t('Proveedor') ?></h1>
</div>

<div id="formControls">
    <?php //$this->lblIdPROVEEDOR->RenderWithName();  ?>

    <?php $this->txtNombre->RenderWithName(); ?>

    <?php $this->txtDireccion->RenderWithName(); ?>

    <?php $this->txtTelefono->RenderWithName(); ?>

    <?php $this->txtEmail->RenderWithName(); ?>

    <?php $this->lstPAISIdPAISObject->RenderWithName(); ?>
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

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>