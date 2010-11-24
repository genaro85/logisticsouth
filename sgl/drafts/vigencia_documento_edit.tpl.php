<?php
	// This is the HTML template include file (.tpl.php) for the vigencia_documento_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('VigenciaDocumento') . ' - ' . $this->mctVigenciaDocumento->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctVigenciaDocumento->TitleVerb); ?></h2>
		<h1><?php _t('VigenciaDocumento')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>

		<?php $this->lstDOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->RenderWithName(); ?>

		<?php $this->calFechaOtorgado->RenderWithName(); ?>

		<?php $this->calFechaVencimieto->RenderWithName(); ?>

		<?php $this->txtNumRef->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>