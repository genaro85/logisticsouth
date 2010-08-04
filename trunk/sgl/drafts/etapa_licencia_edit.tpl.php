<?php
	// This is the HTML template include file (.tpl.php) for the etapa_licencia_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('EtapaLicencia') . ' - ' . $this->mctEtapaLicencia->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctEtapaLicencia->TitleVerb); ?></h2>
		<h1><?php _t('EtapaLicencia')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>

		<?php $this->lstETAPAIdETAPAObject->RenderWithName(); ?>

		<?php $this->calETAPAFechaInicio->RenderWithName(); ?>

		<?php $this->calETAPAFechaFin->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>