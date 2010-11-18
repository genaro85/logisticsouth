<?php

require('../qcubed.inc.php');


$idProducto = QApplication::PathInfo(0);
$objProducto = Producto::Load($idProducto);

// Licencias Internas
$sql = 'SELECT e.rif RIF, e.nombre Nombre, m.numeroCNP CNP, m.fechaInicio Fecha,
        TIMESTAMPDIFF(DAY,sysdate(),m.fechaFin) Diff, l.PRODUCTO_cantidad Qty 
        FROM lista_producto l
        JOIN licencia m ON l.LICENCIA_idLICENCIA = m.idLICENCIA
        JOIN empresa e on e.idEMPRESA = m.EMPRESA_idEMPRESA
        WHERE m.status = "Interna"
        AND l.PRODUCTO_idPRODUCTO = ' . $objProducto->IdPRODUCTO;

$objDatabase = ListaProducto::GetDatabase();
$objDbResult = $objDatabase->Query($sql);

$arrayInternas = array();
while ($mixRow = $objDbResult->FetchArray()) {
    $arrayInternas[] = $mixRow;
}

// Licencias Externas
$sql2 = 'SELECT e.rif RIF, e.nombre Nombre, m.numeroCNP CNP, m.fechaInicio Fecha,
        TIMESTAMPDIFF(DAY,sysdate(),m.fechaFin) Diff, l.PRODUCTO_cantidad Qty
        FROM lista_producto l
        JOIN licencia m ON l.LICENCIA_idLICENCIA = m.idLICENCIA
        JOIN empresa e on e.idEMPRESA = m.EMPRESA_idEMPRESA
        WHERE m.status = "Externa"
        AND l.PRODUCTO_idPRODUCTO = ' . $objProducto->IdPRODUCTO;

$objDatabase2 = ListaProducto::GetDatabase();
$objDbResult2 = $objDatabase2->Query($sql2);

$arrayExternas = array();
while ($mixRow2 = $objDbResult2->FetchArray()) {
    $arrayExternas[] = $mixRow2;
}

// Licencias Nacionalizadas
$sql3 = 'SELECT e.rif RIF, e.nombre Nombre, m.numeroCNP CNP, m.fechaInicio Fecha,
        TIMESTAMPDIFF(DAY,sysdate(),m.fechaFin) Diff, l.PRODUCTO_cantidad Qty
        FROM lista_producto l
        JOIN licencia m ON l.LICENCIA_idLICENCIA = m.idLICENCIA
        JOIN empresa e on e.idEMPRESA = m.EMPRESA_idEMPRESA
        WHERE m.status = "Nacionalizada"
        AND l.PRODUCTO_idPRODUCTO = ' . $objProducto->IdPRODUCTO;

$objDatabase3 = ListaProducto::GetDatabase();
$objDbResult3 = $objDatabase3->Query($sql3);

$arrayNac = array();
while ($mixRow3 = $objDbResult3->FetchArray()) {
    $arrayNac[] = $mixRow3;
}


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
        <td id="tableTitle2" width="18%">R.I.F.</td>
        <td id="tableTitle2" width="30%">Nombre</td>
        <td id="tableTitle2" width="18%">C.N.P.</td>
        <td id="tableTitle2" width="14%">Fecha</td>
        <td id="tableTitle2" width="10%">Vence (Días)</td>
        <td id="tableTitle2" width="10%">Cantidad</td>
      </tr>';
foreach ($arrayInternas as $value) {
    $html.='<tr>
              <td>'. $value[RIF] .'</td>
              <td>'. $value[Nombre] .'</td>
              <td>'. $value[CNP] .'</td>
              <td>'. $value[Fecha] .'</td>
              <td>'. $value[Diff] .'</td>
              <td>'. $value[Qty] .'</td>
            </tr>';

};

$html.='</table>
  </div>
  &nbsp;
  <h3>Ejecución Externa</h3>
  <div align="center">
  	<table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
      <tr>
        <td id="tableTitle2" width="18%">R.I.F.</td>
        <td id="tableTitle2" width="30%">Nombre</td>
        <td id="tableTitle2" width="18%">C.N.P.</td>
        <td id="tableTitle2" width="14%">Fecha</td>
        <td id="tableTitle2" width="10%">Vence (Días)</td>
        <td id="tableTitle2" width="10%">Cantidad</td>
      </tr>';
foreach ($arrayExternas as $value2) {
    $html.='<tr>
              <td>'. $value2[RIF] .'</td>
              <td>'. $value2[Nombre] .'</td>
              <td>'. $value2[CNP] .'</td>
              <td>'. $value2[Fecha] .'</td>
              <td>'. $value2[Diff] .'</td>
              <td>'. $value2[Qty] .'</td>
            </tr>';

};

$html.='</table>
  </div>
  &nbsp;
  <h3>Nacionalizada</h3>
  <div align="center">
  	<table width="100%" border="1" bordercolor="#999999" cellspacing="0" cellpadding="0">
      <tr>
        <td id="tableTitle2" width="18%">R.I.F.</td>
        <td id="tableTitle2" width="30%">Nombre</td>
        <td id="tableTitle2" width="18%">C.N.P.</td>
        <td id="tableTitle2" width="14%">Fecha</td>
        <td id="tableTitle2" width="10%">Vence (Días)</td>
        <td id="tableTitle2" width="10%">Cantidad</td>
      </tr>';
foreach ($arrayNac as $value3) {
    $html.='<tr>
              <td>'. $value3[RIF] .'</td>
              <td>'. $value3[Nombre] .'</td>
              <td>'. $value3[CNP] .'</td>
              <td>'. $value3[Fecha] .'</td>
              <td>'. $value3[Diff] .'</td>
              <td>'. $value3[Qty] .'</td>
            </tr>';

};

$html.='</table>
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