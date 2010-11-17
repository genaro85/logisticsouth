<?php
// This is the HTML template include file (.tpl.php) for the lista_producto_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Producto de la Licencia') . ' - ' . $this->mctListaProducto->TitleVerb;
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctListaProducto->TitleVerb); ?></h2>
    <h1><?php _t('Producto del C.N.P.') ?></h1>
</div>

<div id="formControls">
    <?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/licencia_edit.php"><?php _t('Create a New'); ?> <?php _t('Licencia');?></a>
    </div>

    <?php $this->lstPRODUCTOIdPRODUCTOObject->RenderWithName(); ?>
    <div style="margin-left: 450px;">
        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/producto_edit.php"><?php _t('Create a New'); ?> <?php _t('Producto');?></a>
    </div>

    <?php $this->txtPRODUCTOCantidad->RenderWithName(); ?>

    <?php //Eliminado $this->txtPRODUCTOVolumen->RenderWithName(); ?>

    <?php $this->txtPRODUCTOUnidad->RenderWithName(); ?>

    <?php $this->txtPRODUCTOCostoUnitario->RenderWithName(); ?>

</div>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>