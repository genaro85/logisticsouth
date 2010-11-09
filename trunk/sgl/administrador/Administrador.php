<?php
require('../qcubed.inc.php');
$strPageTitle = 'Administrador';
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
?>

<div id="bodyBottomPan">
    <div id="AdministradorPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/administrador_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/administrador_edit.php">nuevo</a></p>
    </div>
    <div id="ResponsablePan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/responsable_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/responsable_edit.php">nuevo</a></p>
    </div>
    <div id="EmpleadoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/empleado_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_ADMINISTRADOR__) ?>/empleado_edit.php">nuevo</a></p>
    </div>


    <div id="divisor"></div>
</div>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
