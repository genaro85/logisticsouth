<?php
	// This is the HTML template include file (.tpl.php) for licenciaEditPanel.
	// Remember that this is a DRAFT.  It is MEANT to be altered/modified.
	// Be sure to move this out of the drafts/dashboard subdirectory before modifying to ensure that subsequent 
	// code re-generations do not overwrite your changes.
?>
	<div id="formControls">
		<?php $_CONTROL->lblIdLICENCIA->RenderWithName(); ?>

		<?php $_CONTROL->lstEMPRESAIdEMPRESAObject->RenderWithName(); ?>

		<?php $_CONTROL->lstPROVEEDORIdPROVEEDORObject->RenderWithName(); ?>

		<?php $_CONTROL->calFechaInicio->RenderWithName(); ?>

		<?php $_CONTROL->calFechaFin->RenderWithName(); ?>

		<?php $_CONTROL->calFechaFinEstimada->RenderWithName(); ?>

		<?php $_CONTROL->txtNumeroProforma->RenderWithName(); ?>

		<?php $_CONTROL->txtNumeroCNP->RenderWithName(); ?>

		<?php $_CONTROL->calVencimientoCNP->RenderWithName(); ?>

		<?php $_CONTROL->txtStatus->RenderWithName(); ?>

		<?php $_CONTROL->txtFormaPago->RenderWithName(); ?>

		<?php $_CONTROL->txtTipo->RenderWithName(); ?>

		<?php $_CONTROL->txtFlete->RenderWithName(); ?>

		<?php $_CONTROL->txtSeguro->RenderWithName(); ?>

		<?php $_CONTROL->lstPROCESOIdPROCESOObject->RenderWithName(); ?>

	</div>

	<div id="formActions">
		<div id="save"><?php $_CONTROL->btnSave->Render(); ?></div>
		<div id="cancel"><?php $_CONTROL->btnCancel->Render(); ?></div>
		<div id="delete"><?php $_CONTROL->btnDelete->Render(); ?></div>
	</div>
