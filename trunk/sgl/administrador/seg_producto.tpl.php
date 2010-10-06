<?php

// This is the HTML template include file (.tpl.php) for the producto_list.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of this directory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Seguimiento de Productos') . ' - ' . QApplication::Translate('List All');
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<?php $this->RenderBegin() ?>

<?php $this->dtgProductos->Render(); ?>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>