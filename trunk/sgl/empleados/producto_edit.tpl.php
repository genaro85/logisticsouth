<?php
// This is the HTML template include file (.tpl.php) for the producto_edit.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Producto') . ' - ' . $this->mctProducto->TitleVerb;
require(__CONFIGURATION__ . '/headerEmp.inc.php');
?>

<?php $this->RenderBegin() ?>

<div id="titleBar">
    <h2><?php _p($this->mctProducto->TitleVerb); ?></h2>
    <h1><?php _t('Producto') ?></h1>
</div>

<div id="formControls">
    <?php //$this->lblIdPRODUCTO->RenderWithName();  ?>

    <?php $this->txtCodigoArancelario->RenderWithName(); ?>

    <?php $this->txtDescripcion->RenderWithName(); ?>

    <?php $this->txtNumeroRegSanitario->RenderWithName(); ?>

    <?php $this->txtVolumen->RenderWithName(); ?>

    <?php $this->txtUnidad->RenderWithName(); ?>

</div>

<div id="formActions">
    <div id="save"><?php $this->btnSave->Render(); ?></div>
    <div id="cancel"><?php $this->btnCancel->Render(); ?></div>
    <div id="delete"><?php $this->btnDelete->Render(); ?></div>
</div>

<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>