<?php

// This is the HTML template include file (.tpl.php) for the empresa_list.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of this directory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.

$strPageTitle = QApplication::Translate('Seguimiento de Empresas');
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<?php $this->RenderBegin() ?>

<?php $this->dtgEmpresas->Render(); ?>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>