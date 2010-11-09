<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>

<div id="body1">
   <?php $this->RenderBegin() ?>
    <table width="514" border="0">

        <tr>
            <td width="237" rowspan="2"><label>Usuario Login:</label></td>
            <td width="168"><?php $this->txtUsername->Render(); ?></td>
        </tr>
        <tr>
            <td width="168" valign="top"><?php $this->txtPassword->Render(); ?></td>
            <td width="95" rowspan="2" valign="center"><?php $this->btnLogin->Render() ?></td>
        </tr>
    </table>
    <?php $this->RenderEnd() ?>
</div>

<div id="bodymiddlePan" align="justify">
    <h2>Soluci&oacute;n Log&iacute;stica Integrada?</h2>
    <p align="justify">Surlogistica SGL utiliza una base de datos centralizada que permite
        accesos remotos vía Internet. </p>
    <p align="justify">Su diseño estructural
	  permite operar con múltiples idiomas, clientes, bases
	  operativas y almacenes.
	  Incrementa la calidad del servicio a los clientes por una
	  mejor planificación de las entregas y la reducción de
        errores en la preparación de los pedidos.	  </p>
    <p align="justify">&nbsp;</p>
    <p align="justify">Facilita la gestión y el control de una flota de transporte,
	  administración. Resuelve todas las operaciones de un Centro de
	  Distribución de alta complejidad, incluyendo la recepción
	  de la mercadería, la preparación de los pedidos, el
	  despacho y la trazabilidad de los productos (historia de los
	  procesos aplicados al producto, distribución y localización
	  después de su entrega).</p>
    <p class="lasttext"></p>
</div>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>
