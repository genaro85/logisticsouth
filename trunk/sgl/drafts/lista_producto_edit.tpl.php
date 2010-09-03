<?php
	// This is the HTML template include file (.tpl.php) for the lista_producto_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('ListaProducto') . ' - ' . $this->mctListaProducto->TitleVerb;
	require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctListaProducto->TitleVerb); ?></h2>
		<h1><?php _t('ListaProducto')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>

		<?php $this->lstPRODUCTOIdPRODUCTOObject->RenderWithName(); ?>

		<?php $this->txtPRODUCTOCantidad->RenderWithName(); ?>

		<?php $this->txtPRODUCTOVolumen->RenderWithName(); ?>

		<?php $this->txtPRODUCTOUnidad->RenderWithName(); ?>

		<?php $this->txtPRODUCTOCostoUnitario->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>