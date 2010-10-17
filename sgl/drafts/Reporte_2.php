<?php

require('../qcubed.inc.php');

$idEmpresa = QApplication::PathInfo(0);
$objEmpresa = Empresa::Load($idEmpresa);

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
	.foot {
		font-size: 10px;
		color: #FFF;
		background-color: #3f3f3f;
	}
	#data {
		float: left;
		/*width: 40%;*/
		font-size: 12px;
		color: #FFF;
		background-color: #b6b8ba;
	}
	#tableTitle {
		text-align: right;
		width: 10%;
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
	}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Reporte</title>
</head>

<body>
<div class="head">
<table width="100%" border="0" cellspacing="10">
  <tr>
    <td width="20%">Logo</td>
    <td width="60%"><h1>Reporte de Empresas</h1></td>
    <td width="20%">Fecha <p id="tableData"> ';
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
            <td id="tableTitle">Nombre</td>
            <td id="tableData"> ';
            $html.= $objEmpresa->Nombre.'
            </td>
            <td id="tableTitle">Teléfono</td>
            <td id="tableData"> ';
            $html.= $objEmpresa->Telefono.'
            </td>
          </tr>
          <tr>
            <td id="tableTitle">R.I.F.</td>
            <td id="tableData"> ';
            $html.= $objEmpresa->Rif.'
            </td>
            <td id="tableTitle">Email</td>
            <td id="tableData"> ';
            $html.= $objEmpresa->Email.'
            </td>
          </tr>
          <tr>
            <td id="tableTitle">Dirección</td>
            <td id="tableData"> ';
            $html.= $objEmpresa->Direccion.'
            </td>
            <td id="tableTitle">Número<br />Registro</td>
            <td id="tableData"> ';
            $html.= $objEmpresa->IdEMPRESA.'
            </td>
          </tr>
        </table>
    </td>
  </tr>
</table>
&nbsp;
<div>
	<h3>Licencias</h3>
  <div align="center">
  	<table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
      <tr>
        <td id="tableTitle2">No Solicitud</td>
        <td id="tableTitle2">Fecha</td>
        <td id="tableTitle2">Cod. Arancelario</td>
        <td id="tableTitle2">Descripción</td>
        <td id="tableTitle2">Pais Origen</td>
        <td id="tableTitle2">Estatus</td>
      </tr>';
$ListaLicenciaArray=Licencia::LoadArrayByEMPRESAIdEMPRESA($idEmpresa);
foreach ($ListaLicenciaArray as $objLicencia){
    if($objLicencia){
        $ListaProductoArray=ListaProducto::LoadArrayByLICENCIAIdLICENCIA($objLicencia->IdLICENCIA);
        foreach ($ListaProductoArray as $objProducto){
            if($objProducto){
                $html.='<tr>
                        <td>'.$objLicencia->NumeroCNP.'</td>
                        <td>'.$objLicencia->FechaInicio.'</td>
                        <td>'.$objProducto->PRODUCTOIdPRODUCTOObject->CodigoArancelario.'</td>
                        <td>'.$objProducto->PRODUCTOIdPRODUCTOObject->Descripcion.'</td>
                        <td>'.$objLicencia->PROVEEDORIdPROVEEDORObject->PAISIdPAISObject->Nombre.'</td>
                        <td>'.$objLicencia->Status.'</td>
                        </tr>';
            }

        }
    }
}

$html.='</table>
  </div>
</div>
</body>
</html>';

file_put_contents("" . "Reporte.html", $html);

header('Location: ../www_examples.php');

?>