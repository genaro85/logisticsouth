<?php
	// This is the HTML template include file (.tpl.php) for the importacion_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('Importacion') . ' - ' . $this->mctImportacion->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctImportacion->TitleVerb); ?></h2>
		<h1><?php _t('Importacion')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstTRANSPORTEIdTRANSPORTEObject->RenderWithName(); ?>

		<?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>

		<?php $this->calFechaDeSalida->RenderWithName(); ?>

		<?php $this->calFechaLlegada->RenderWithName(); ?>

		<?php $this->txtTipo->RenderWithName(); ?>

		<?php $this->lstPAISOrigenObject->RenderWithName(); ?>

		<?php $this->lstPAISDestinoObject->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>