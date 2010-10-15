<?php

require('../qcubed.inc.php');




// Load the QCubed Development Framework


$idLicencia = 1;

$objLicencia = Licencia::Load($idLicencia);

$html= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Untitled Document</title>
    </head>
<font face="Helvetica">
    <body>


  <table width="615px">
  <tr>
    <td><table width="615px" bordercolor="#CCC">
      <tr>
        <td width="200px">&nbsp;</td>
        <td width="200px">&nbsp;</td>
        <td width="215px" align="right">Reporte de Estatus</td>
      </tr>
      <tr>
        <td width="200px">&nbsp;</td>
        <td width="200px">&nbsp;</td>
        <td width="215px" align="right">Fecha:';
        $sTime = date("j F Y");
        $html.= $sTime.'
        </td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td><table width="615px" border="0px" bordercolor="white">
      <tr>
        <td  bgcolor="#CCC"><table width="300px">
          <tr>
            <td colspan="2" bgcolor="#333"><div><font size="5" color="white" color="white"><b>Empresa</b><font>

</div></td>
</tr>
<tr>
<td><div align="right" width="50px">Nombre:</div></td>
<td>'.$objLicencia->EMPRESAIdEMPRESAObject->Nombre.'
</td>
</tr>
<tr>
<td><div align="right" width="50px">RIF:</div></td>
<td>'.$objLicencia->EMPRESAIdEMPRESAObject->Rif.'
</td>
</tr>
<tr>
<td valign="top"><div align="right" width="50px">Dirección:</div></td>
<td>'.$objLicencia->EMPRESAIdEMPRESAObject->Direccion.'
</td>
</tr>
<tr>
<td><div align="right" width="50px">Teléfono:</div></td>
<td>'.$objLicencia->EMPRESAIdEMPRESAObject->Telefono.'
</td>
</tr>
<tr>
<td><div align="right" width="50px">Email:</div></td>
<td>'.$objLicencia->EMPRESAIdEMPRESAObject->Email.'
</td>
</tr>
</table></td>
<td valign="top" bgcolor="#CCC"><table width="300">
<tr>
<td colspan="2" bgcolor="#333"><div><b><font size="5" color="white">Solicitud</b><font></div></td>
</tr>
<tr>
<td><div align="right" width="50px">No Solicitud:</div></td>
<td>'.$objLicencia->IdLICENCIA.'
</td>
</tr>
<tr>
<td><div align="right" width="50px">Fecha:</div></td>
<td>'.$objLicencia->FechaInicio.'
</td>
</tr>
<tr>
<td><div align="right" width="50px">No Proforma:</div></td>
<td>'.$objLicencia->NumeroProforma.'
</td>
</tr>
<tr>
<td><div align="right" width="50px">No C.N.P:</div></td>
<td>'.$objLicencia->NumeroCNP.'
</td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td>';

$ListaProductoArray=ListaProducto::LoadArrayByLICENCIAIdLICENCIA($idLicencia);

$html.= '<table width="615px" bgcolor="#333">
<tr>
<td><font size="5" color="white"><b>Productos</b></font></td>
<td>&nbsp;
</td>
</tr>
</table></td></tr><tr><td>';

foreach ($ListaProductoArray as $ProductoObj) {

    if ($ProductoObj)

        $html.= '<table width="615px" bgcolor="#CCC">

<tr>
<td width="400px">Descripcion:'.$ProductoObj->PRODUCTOIdPRODUCTOObject->Descripcion.'</td>
<td width="200px">Volumen:'.$ProductoObj->PRODUCTOVolumen.'</td>
</tr>
<tr>
<td width="400px">Cod. Arancelario:'.$ProductoObj->PRODUCTOIdPRODUCTOObject->CodigoArancelario.'</td>
<td width="200px">Unidad:'.$ProductoObj->PRODUCTOUnidad.'</td>
</tr>
<tr>
<td width="200px">Reg. Sanitario:'.$ProductoObj->PRODUCTOIdPRODUCTOObject->NumeroRegSanitario.'</td>
<td width="300px">Pais Origen:'.$objLicencia->PROVEEDORIdPROVEEDORObject->PAISIdPAISObject->Nombre.'</td>
</tr>
</table></td>
</tr>
<tr>
<td><table width="615px">';


    else {
        $html.= '<td width="300px" align="center">&nbsp;</td>';
    }

}
$html.= '<tr>
<td>Estatus:'.$objLicencia->Status.'</td>';

$day = 86400;
$sTime = strtotime(date("j F Y")); // Start as time
$eTime = strtotime($objLicencia->VencimientoCNP); // End as time
$numDays = round(($eTime - $sTime) / $day) + 1;
if ($numDays>0)
    $html.= '<td>Vigencia (dias):'.$numDays.'</td>';
else {
    $html.= '<td>Vigencia (dias):0</td>';
}

$html.='</tr>
</table ></td>
</tr>
<tr>
<td><div align="right">';

//Fases

$html.= '<table width="415" bordercolor="white">';

$FaseLicArray=FaseLicencia::LoadArrayByLICENCIAIdLICENCIA($idLicencia);

$html.= '<tr><td  align="center" bgcolor="#333"><font color="white"><b>Fase</b></font></td>';
$html.= '<td  align="center" bgcolor="#333"><font color="white"><b>Fecha</b></td>';
$html.= '<td  align="center" bgcolor="#333"><font color="white"><b>Tiempos</b></td></tr>';

foreach ($FaseLicArray as $FaseLicObj) {
    $html.= '<tr>';
    if ($FaseLicObj) {
        $html.= '<td align="center" bgcolor="#CCC">'.$FaseLicObj->FASEIdFASEObject->Nombre.'</td>';
        if ($FaseLicObj->FASEFechaInicio) {
            $html.= '<td align="center" bgcolor="#CCC">'.$FaseLicObj->FASEFechaInicio.'</td>';
            $day = 86400;
            $sTime = strtotime($FaseLicObj->FASEFechaInicio); // Start as time
            $eTime = strtotime($FaseLicObj->FASEFechaFin); // End as time
            $numDays = round(($eTime - $sTime) / $day) + 1;
            if ($numDays>1)
                $html.= '<td align="center" bgcolor="#CCC">'.$numDays.'</td>';
            else
                $html.= '<td align="center" bgcolor="#CCC"><div id="notcheck"></div></td>';
        }
        else {
            $html.= '<td align="center" bgcolor="#CCC">&nbsp;</td>';
            $html.= '<td align="center" bgcolor="#CCC">&nbsp;</td>';
        }


    }
    else {
        $html.= '<td  align="center" bgcolor="#CCC">&nbsp;</td>';
        $html.= '<td  align="center" bgcolor="#CCC">&nbsp;</td>';
        $html.= '<td  align="center" bgcolor="#CCC">&nbsp;</td>';
    }
    $html.= '<tr>';
}

$html.= '</table>';

//Fases



$html.='</div></td>
</tr>
</table>
</body>
</font>
</html>';




file_put_contents("" . "Reporte.html", $html);

header('Location: www_examples.php');

?>