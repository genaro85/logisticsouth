<?php
require('../qcubed.inc.php');
$strPageTitle = 'Licencias';
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>
<div id="bodyBottomPan">
    <div id="TransportePan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/transporte_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/transporte_edit.php">nuevo</a></p>
    </div>
    <div id="ProveedorPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/proveedor_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/proveedor_edit.php">nuevo</a></p>
    </div>
    <div id="PaisPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/pais_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/pais_edit.php">nuevo</a></p>
    </div>
    <div id="divisor"></div>
</div>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
