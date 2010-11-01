<?php

require('../qcubed.inc.php');

$idLicencia = 1;//QApplication::PathInfo(0);
$idProducto = 4;//QApplication::PathInfo(1);
$objLicencia = Licencia::Load($idLicencia);
$objProducto = Producto::Load($idProducto);
$objEmpresa = $objLicencia->EMPRESAIdEMPRESAObject;

$html= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
	body {
		font-family: Helvetica, Arial;
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
		font-size: 18px;
		font-weight: normal;
		text-align:center
	}
	.content {
		vertical-align:middle;
		margin: 10px;
		height: 120px;
	}
	#data {
		float: left;
		width: 40%;
		font-size: 12px;
		color: #FFF;
		background-color: #b6b8ba;
	}
	#tableTitle {
		text-align: right;
		width: 15%;
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
		color:#000;
                width: 30%;
	}
	#graphic {
		float: right;
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
<table width="100%" border="0" cellspacing="0">
  <tr>
    <td width="20%">Logo</td>
    <td width="60%"><h1>Reporte de Estatus</h1></td>
    <td width="20%">Fecha <p id="tableData" style="width:100%">';
        $sTime = date("j F Y");
        $html.= $sTime.'
    </p></td>
  </tr>
</table>
</div>
<div class="content">
<h3>Licencia</h3>
<table width="100%" border="0" cellspacing="0">
  <tr>
    <td id="data" align="center">
        <table width="100%" border="0" cellspacing="10">
          <tr>
            <td id="tableTitle">No. Solicitud</td>
            <td id="tableData"> '.$objLicencia->IdLICENCIA.' </td>
            <td id="tableTitle">No. Proforma</td>
            <td id="tableData"> '.$objLicencia->NumeroProforma.' </td>
          </tr>
          <tr>
            <td id="tableTitle">Fecha</td>
            <td id="tableData"> '.$objLicencia->FechaInicio.' </td>
            <td id="tableTitle">No. C.N.P.</td>
            <td id="tableData"> '.$objLicencia->NumeroCNP.' </td>
          </tr>
          <tr>
            <td id="tableTitle">Estatus</td>
            <td id="tableData"> '.$objLicencia->Status.' </td>
            <td id="tableTitle">Vigencia<br />C.N.P.</td>';

$day = 86400;
$sTime = strtotime(date("j F Y")); // Start as time
$eTime = strtotime($objLicencia->VencimientoCNP); // End as time
$numDays = round(($eTime - $sTime)/$day);
if ($numDays > 0)
    $html.= '<td id="tableData">'.$numDays.'</td>';
else {
    $html.= '<td id="tableData">0</td>';
}

$html.='</tr>
        </table>
    </td>
  </tr>
</table>
<h3>Empresa</h3>
<table width="100%" border="0" cellspacing="0">
  <tr>
    <td id="data" align="center">
        <table width="100%" border="0" cellspacing="10">
          <tr>
            <td id="tableTitle">Nombre</td>
            <td id="tableData"> '.$objEmpresa->Nombre.' </td>
            <td id="tableTitle">Teléfono</td>
            <td id="tableData"> '.$objEmpresa->Telefono.' </td>
          </tr>
          <tr>
            <td id="tableTitle">R.I.F.</td>
            <td id="tableData"> '.$objEmpresa->Rif.' </td>
            <td id="tableTitle">Email</td>
            <td id="tableData"> '.$objEmpresa->Email.' </td>
          </tr>
          <tr>
            <td id="tableTitle">Número<br /> Registro</td>
            <td id="tableData"> '.$objEmpresa->IdEMPRESA.' </td>
            <td id="tableTitle">Dirección</td>
            <td id="tableData"> '.$objEmpresa->Direccion.' </td>            
          </tr>
        </table>
    </td>
  </tr>
</table>
<h3>Producto</h3>
<table width="100%" border="0" cellspacing="10">
  <tr>
    <td id="data" align="center">
        <table width="100%" border="0" cellspacing="10">
          <tr>
            <td id="tableTitle">Descripción</td>
            <td id="tableData"> '.$objProducto->Descripcion.' </td>
            <td id="tableTitle">Pais Origen</td>
            <td id="tableData"> '.$objLicencia->PROVEEDORIdPROVEEDORObject->PAISIdPAISObject->Nombre.' </td>
          </tr>
          <tr>
            <td id="tableTitle">Volumen</td>
            <td id="tableData"> '.$objProducto->Volumen.' </td>
            <td id="tableTitle">Unidad</td>
            <td id="tableData"> '.$objProducto->Unidad.' </td>
          </tr>
          <tr>
            <td id="tableTitle">Cod.<br />Arancelario</td>
            <td id="tableData"> '.$objProducto->CodigoArancelario.' </td>
            <td id="tableTitle">Reg.<br />Sanitario</td>
            <td id="tableData"> '.$objProducto->NumeroRegSanitario.' </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
<div>
  <div align="center">
  	<table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
      <tr>
        <td id="tableTitle2">Fase</td>
        <td id="tableTitle2">Fecha Inicio</td>
        <td id="tableTitle2">Tiempos</td>
      </tr>';

//Fases
$FaseLicArray=FaseLicencia::LoadArrayByLICENCIAIdLICENCIA($idLicencia);
foreach ($FaseLicArray as $FaseLicObj) {
    if ($FaseLicObj) {
        $html .= '<tr>
                <td>'.$FaseLicObj->FASEIdFASEObject->Nombre.'</td>
                <td>'.$FaseLicObj->FASEFechaInicio.'</td>';

                $day1 = 86400;
                $sTime1 = strtotime($FaseLicObj->FASEFechaInicio); // Start as time
                $eTime1 = strtotime($FaseLicObj->FASEFechaFin); // End as time
                $numDays1 = round(($eTime1 - $sTime1)/$day1);
                
                if ($numDays1 > 0){
                    $html.= '<td>'.$numDays1.'</td></tr>';
                }else{
                    $html.= '<td>&nbsp;</td></tr>';
                }
        }

}

$html .= '</table>
  </div>
</div>
</body>
</html>';

file_put_contents("" . "Reporte.html", $html);

header('Location: /sgl/administrador/www_examples.php');

?>