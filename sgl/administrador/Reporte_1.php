<?php

require('../qcubed.inc.php');

$idLicencia = QApplication::PathInfo(0);
$idProducto = QApplication::PathInfo(1);
$objLicencia = Licencia::Load($idLicencia);
$objProducto = Producto::Load($idProducto);
$objListaProd = ListaProducto::Load($idLicencia, $idProducto);
$objEmpresa = $objLicencia->EMPRESAIdEMPRESAObject;

$html= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
	body {
		font-family: Helvetica;
	}
	.head {
		background-color: #3f3f3f;
		font-size:12px;
		color: #FFF;
		border-bottom:solid;
		border-bottom-color:#e1e0e0;
		border-bottom-width:thick;
	}
	h1 {
		text-transform: capitalize;
		font-size: 18px;
		font-weight: normal;
		text-align:center
	}
	.content {
		vertical-align:middle;
		margin: 10px;
		height: 120px;
	}
	.foot {
		font-size: 10px;
		color: #FFF;
		background-color: #3f3f3f;
	}
	#data {
		float: left;
		width: 50%;
		font-size: 12px;
		color: #FFF;
		background-color: #b6b8ba;
	}
	#tableTitle {
		text-align: right;
		width: 30%;
	}
	#tableTitle2 {
		font-size: 12px;
		font-weight:100;
		color:#FFF;
		text-align: center;
		background-color: #3f3f3f;

	}
	#tableData {
		border:thin;
		border-color:#000;
		background-color:#FFF;
		padding:4px;
		color:#000
	}
	#graphic {
		float: rigth;
		width: 50%;
		font-size: 12px;
		background-color: #FFF;
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Reporte</title>
</head>
<body>
<div class="head">
<table width="100%" border="0" cellspacing="10">
  <tr>
    <td><img src="../archivos/LogoSGL.png"/></td>
    <td width="50%"><h1>Reporte Empresa por Producto</h1></td>
    <td width="30%">Fecha <p id="tableData"> ';
        $sTime = date("j F Y");
        $html.= $sTime.'
    </p></td>
  </tr>
</table>
</div>
<div class="content">
<table width="100%" border="0" cellspacing="10">
  <tr>
    <td id="data" align="center">
        <table width="100%" border="0" cellspacing="10">
          <tr>
            <td id="tableTitle">Descripción</td>
            <td id="tableData"> '. $objProducto->Descripcion .' </td>
          </tr>
          <tr>
            <td id="tableTitle">Código<br />Arancelario</td>
            <td id="tableData"> '. $objProducto->CodigoArancelario .' </td>
          </tr>
          <tr>
            <td id="tableTitle">Unidad</td>
            <td id="tableData"> '. $objProducto->Unidad .' </td>
          </tr>
        </table>
    </td>
    <!--<td id="graphic" align="center">Gráfico</td>-->
  </tr>
</table>
&nbsp;
<div>
	<h3>Ejecución Interna</h3>
  <div align="center">
  	<table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
      <tr>
        <td id="tableTitle2">R.I.F.</td>
        <td id="tableTitle2">Nombre</td>
        <td id="tableTitle2">C.N.P.</td>
        <td id="tableTitle2">Fecha</td>
        <td id="tableTitle2">Vence (Días)</td>
        <td id="tableTitle2">Cantidad</td>
      </tr>
      <tr>
        <td>'. $objEmpresa->Rif .'</td>
        <td>'. $objEmpresa->Nombre .'</td>
        <td>'. $objLicencia->NumeroCNP .'</td>
        <td>'. $objLicencia->FechaInicio .'</td>
        <td>'. $objLicencia->FechaFin .'</td>
        <td>'. $objListaProd->PRODUCTOCantidad .'</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
  &nbsp;
  <h3>Ejecución Externa</h3>
  <div align="center">
  	<table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
      <tr>
        <td id="tableTitle2">R.I.F.</td>
        <td id="tableTitle2">Nombre</td>
        <td id="tableTitle2">C.N.P.</td>
        <td id="tableTitle2">Fecha</td>
        <td id="tableTitle2">Vence (Días)</td>
        <td id="tableTitle2">Cantidad</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
</div>
<!--<div class="foot">
  &nbsp;
</div>-->
</body>
</html>';

file_put_contents("" . "Reporte.html", $html);

header('Location: /sgl/administrador/www_examples.php');

?>