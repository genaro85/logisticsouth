<?php
require('../qcubed.inc.php');
$strPageTitle = 'Seguimientos';
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<div id="bodyBottomPan">
    <div id="SegLicenciaPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/seg_licencia_list.php">ver</a></p>
    </div>
    <div id="SegEmpresaPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/seg_empresa.php">ver</a></p>
    </div>
    <div id="SegProductoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/seg_producto.php">ver</a></p>
    </div>
    <div id="SegPaisesPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/seg_pais_list.php">ver</a></p>
    </div>


    <div id="divisor"></div>
</div>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
