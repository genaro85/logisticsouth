<?php
	// This is the HTML template include file (.tpl.php) for empresaEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblIdEMPRESA->RenderWithName(); ?>

		<?php $_CONTROL->txtNombre->RenderWithName(); ?>

		<?php $_CONTROL->txtRif->RenderWithName(); ?>

		<?php $_CONTROL->txtDireccion->RenderWithName(); ?>

		<?php $_CONTROL->txtTelefono->RenderWithName(); ?>

		<?php $_CONTROL->txtEmail->RenderWithName(); ?>

		<?php $_CONTROL->txtLogin->RenderWithName(); ?>

		<?php $_CONTROL->txtPassword->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
