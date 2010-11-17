<?php
	// This is the HTML template include file (.tpl.php) for the codigo_pago_edit.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of the generated/ subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('CodigoPago') . ' - ' . $this->mctCodigoPago->TitleVerb;
	require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2><?php _p($this->mctCodigoPago->TitleVerb); ?></h2>
		<h1><?php _t('Codigo Pago')?></h1>
	</div>

	<div id="formControls">
		<?php $this->lstLICENCIAIdLICENCIAObject->RenderWithName(); ?>
            <div style="margin-left: 450px;">
                <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/licencia_edit.php"><?php _t('Create a New'); ?> <?php _t('Licencia');?></a>
            </div>
		<?php $this->lstTIPODEPAGOIdTIPODEPAGOObject->RenderWithName(); ?>
            <div style="margin-left: 450px;">
                <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/tipo_de_pago_edit.php"><?php _t('Create a New'); ?> <?php _t('Tipo de Pago');?></a>
            </div>
		<?php $this->txtNumRef->RenderWithName(); ?>

		<?php $this->txtFecha->RenderWithName(); ?>

		<?php $this->txtDivisa->RenderWithName(); ?>

		<?php $this->txtMonto->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $this->btnSave->Render(); ?></div>
		<div id="cancel"><?php $this->btnCancel->Render(); ?></div>
		<div id="delete"><?php $this->btnDelete->Render(); ?></div>
	</div>

	<?php $this->RenderEnd() ?>	

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>