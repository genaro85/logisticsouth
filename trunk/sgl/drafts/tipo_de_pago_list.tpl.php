<?php
	// This is the HTML template include file (.tpl.php) for the tipo_de_pago_list.php
	// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.

	// Be sure to move this out of this directory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.

	$strPageTitle = QApplication::Translate('TipoDePagos') . ' - ' . QApplication::Translate('List All');
	require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

	<?php $this->RenderBegin() ?>

	<div id="titleBar">
		<h2 id="right"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/index.php">&laquo; <?php _t('Go to "Form Drafts"'); ?></a></h2>
		<h2><?php _t('List All'); ?></h2>
		<h1><?php _t('TipoDePagos'); ?></h1>
	</div>

	<?php $this->dtgTipoDePagos->Render(); ?>

	<p class="create">
		<a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/tipo_de_pago_edit.php"><?php _t('Create a New'); ?> <?php _t('TipoDePago');?></a>
	</p>

	<?php $this->RenderEnd() ?>
	
<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>