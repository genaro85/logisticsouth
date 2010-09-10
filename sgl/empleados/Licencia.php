<?php

require('../qcubed.inc.php');
$strPageTitle = 'Licencias';
require(__CONFIGURATION__ . '/headerEmp.inc.php');
?>

<div id="bodyBottomPan">
    <div id="LicenciaPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/licencia_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/licencia_edit.php">nuevo</a></p>
    </div>
    <div id="CodigoDePagoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/codigo_pago_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/codigo_pago_edit.php">nuevo</a></p>
    </div>
    <div id="TipoDePagoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/tipo_de_pago_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/tipo_de_pago_edit.php">nuevo</a></p>
    </div>
    <div id="divisor"></div>

    <div id="EmpresaPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/empresa_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/empresa_edit.php">nuevo</a></p>
    </div>
    <div id="FaseLicenciaPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/fase_licencia_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/fase_licencia_edit.php">nuevo</a></p>
    </div>
    <div id="VigenciaDeDocumentoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/vigencia_documento_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/vigencia_documento_edit.php">nuevo</a></p>
    </div>
    <div id="divisor"></div>

    <div id="ImportacionPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/importacion_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/importacion_edit.php">nuevo</a></p>
    </div>
    <div id="ProductoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/producto_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/producto_edit.php">nuevo</a></p>
    </div>
    <div id="ListaDeProductoPan">
        <p class="ver"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/lista_producto_list.php">ver</a></p>
        <p class="nuevo"><a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_EMPLEADO__) ?>/lista_producto_edit.php">nuevo</a></p>
    </div>

    <div id="divisor"></div>
</div>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
