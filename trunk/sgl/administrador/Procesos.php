<?php
require('../qcubed.inc.php');
$strPageTitle = 'Procesos';
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>
<div id="bodyBottomPan">
    <div id="ProcesoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/proceso_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/proceso_edit.php">nuevo</a></p>
    </div>
    <div id="FasePan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/fase_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/fase_edit.php">nuevo</a></p>
    </div>
    <div id="DocumentoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/documento_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/documento_edit.php">nuevo</a></p>
    </div>
    <div id="divisor"></div>
    <div id="DocumentoFasePan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/documento_fase_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/documento_edit_list.php">nuevo</a></p>
    </div>
    <div id="divisor"></div>
</div>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
