<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

require(__CONFIGURATION__ . '/headerAdmin.inc.php');

// BY PAM
    echo '<p class="create">
            <a href="../Reporte_3.php">Reporte</a>
          </p>';

$idLicencia = QApplication::PathInfo(0);
$IdPRODUCTO = QApplication::PathInfo(1);

$objLicencia = Licencia::Load($idLicencia);


if ($objLicencia) {

    echo '<div><b>Empresa : </b>'.$objLicencia->EMPRESAIdEMPRESAObject->Nombre.'<p></p></div>';
    echo '<div><b>C.N.P. : </b>'.$objLicencia->NumeroProforma.'<p></p></div>';
    $day = 86400;
    $sTime = strtotime(date("j F Y")); // Start as time
    $eTime = strtotime($objLicencia->VencimientoCNP); // End as time
    $numDays = round(($eTime - $sTime) / $day) + 1;
    if ($numDays>0)
        echo '<div><b>D&iacute;as restantes : </b>'.$numDays.'<p></p></div>';
    else
        echo '<div><b>D&iacute;as restantes : </b>0<p></p></div>';

    echo '<div><b>Estatus : </b><a id="estatus">'.$objLicencia->Status.'</a></div>';

    echo '<div id="divisor2"></div>';

    echo '<table>';





//    $Fase=FaseLicencia::Load($idLicencia);
//    $Fase->FASEFechaFin;
//    $Doc=DocumentosFase::Load($idLicencia);
//    $Doc->DOCUMENTOIdDOCUMENTOObject->Nombre;
    $FaseLicArray = FaseLicencia::LoadArrayByLICENCIAIdLICENCIA($idLicencia);

    echo '<thead class="seglic">';
    echo '<td class="th1"></td>';
    foreach ($FaseLicArray as $FaseLicObj) {

        if ($FaseLicObj->FASEIdFASEObject->Nombre)
            echo '<td width="300px" align="center">' . $FaseLicObj->FASEIdFASEObject->Nombre . '</td>';
        else {
            echo '<td width="300px" align="center">&nbsp;</td>';
        }
    }
    echo '</thead>';

    echo '<tr class="tablafase">';
    echo '<td class="th1"></td>';
    echo '<td COLSPAN=' . count($FaseLicArray) . ' height="30px">';
    echo '</td>';
    echo '<tr class="tablafase">';
    echo '<td class="th1"></td>';

//    $FaseLicArray=FaseLicencia::LoadArrayByLICENCIAIdLICENCIA($idLicencia);
    foreach ($FaseLicArray as $FaseLicObj) {
        if ($FaseLicObj->FASEIdFASEObject->Icono)
            echo '<td width="300px" align="center"><div><img  src="' . __ARCHIVE_DIRECTORY_PARTIAL__ . $FaseLicObj->FASEIdFASEObject->Icono . '" width="60px"></div></td>';
        else {
            echo '<td width="300px" align="center">&nbsp;</td>';
        }
    }
    echo '</tr>';

    echo '<tr class="tablafase">';
    echo '<td class="th1"></td>';
    foreach ($FaseLicArray as $FaseLicObj) {

        if ($FaseLicObj->FASEFechaFin)
            echo '<td width="300px" align="center"><div id="check"></div></td>';
        else {
            if ($FaseLicObj->FASEFechaInicio) {
                $day = 86400;
                $sTime = strtotime(date("j F Y")); // Start as time
                $eTime = strtotime($objLicencia->VencimientoCNP); // End as time
                $numDays = round(($eTime - $sTime) / $day) + 1;
                if ($numDays > 1)
                    echo '<td width="300px" align="center">&nbsp;</td>';
                else
                    echo '<td width="300px" align="center"><div id="notcheck"></div></td>';
            }
            else
                echo '<td width="300px" align="center">&nbsp;</td>';
        }
    }
    echo '</tr>';


    $countDocs = 0;

    foreach ($FaseLicArray as $FaseLicObj) {
        if ($FaseLicObj->FASEIdFASEObject->IdFASE) {
            $DocsFaseArray = DocumentosFase::LoadArrayByFASEIdFASE($FaseLicObj->FASEIdFASEObject->IdFASE);
            if (count($DocsFaseArray) > $countDocs)
                $countDocs = count($DocsFaseArray);
            foreach ($DocsFaseArray as $DocsFaseObj) {
                $DocsFaseObj->DOCUMENTOIdDOCUMENTOObject->Nombre;
            }
        }
    }


    $count = count($FaseLicArray);

    echo '<tr class="tablafase">';
    echo '<td class="th1"></td>';
    echo '<td COLSPAN=' . count($FaseLicArray) . ' height="30px">';
    echo '</td>';
    echo '</tr>';

    echo '<tr class="tablafecha">';
    echo '<td class="th1">Fechas</td>';
    foreach ($FaseLicArray as $FaseLicObj) {

        if ($FaseLicObj->FASEFechaInicio)
            echo '<td width="300px" align="center">'.$FaseLicObj->FASEFechaInicio.'</td>';
        else
            echo '<td width="300px" align="center">&nbsp;</td>';


    }
    echo '</tr>';

    echo '<tr class="tablafecha">';
    echo '<td class="th1">Tiempos</td>';
    foreach ($FaseLicArray as $FaseLicObj) {


        if ($FaseLicObj->FASEFechaInicio&&$FaseLicObj->FASEFechaInicio) {
            $day = 86400;
            $sTime = strtotime($FaseLicObj->FASEFechaInicio); // Start as time
            $eTime = strtotime($FaseLicObj->FASEFechaFin); // End as time
            $numDays = round(($eTime - $sTime) / $day) + 1;
            if ($numDays>1)
                echo '<td width="300px" align="center">'.$numDays.' d&iacute;as</td>';
            else
                echo '<td width="300px" align="center"><b color:red;>&nbsp;</b></td>';
        }
        else
            echo '<td width="300px" align="center">&nbsp;</td>';


    }
    echo '</tr>';



    for ($i = 0; $i < $countDocs; $i++) {
        echo '<tr class="tablafecha">';
        if ($i == 0)
            echo '<td class="th1">Documentos</td>';
        else
            echo '<td class="th1"></td>';
        foreach ($FaseLicArray as $FaseLicObj) {
            if ($FaseLicObj->FASEIdFASEObject->IdFASE) {
                $DocsFaseArray = DocumentosFase::LoadArrayByFASEIdFASE($FaseLicObj->FASEIdFASEObject->IdFASE);
                $j = 0;
                $DocAux = '&nbsp;';
                foreach ($DocsFaseArray as $DocsFaseObj) {
                    $j = $j + 1;
                    if ($j == ($i + 1))
                        $DocAux = htmlentities($DocsFaseObj->DOCUMENTOIdDOCUMENTOObject->Nombre, ENT_COMPAT, 'UTF-8');
                }
                echo '<td width="300px" height="50px" align="center">' . $DocAux . '</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';



//
//    echo '<tr>';
//    $FaseLicArray=FaseLicencia::LoadArrayByLICENCIAIdLICENCIA($idLicencia);
//    foreach ($FaseLicArray as $FaseLicObj) {
//        if ($FaseLicObj->FASEIdFASEObject->IdFASE) {
//            echo '<td width="300px" align="center">';
//            echo '<table border="2>';
//            $DocsFaseArray=DocumentosFase::LoadArrayByFASEIdFASE($FaseLicObj->FASEIdFASEObject->IdFASE);
//            foreach ($DocsFaseArray as $DocsFaseObj) {
//                if ($DocsFaseObj->DOCUMENTOIdDOCUMENTOObject->Nombre)
//                    echo '<tr><td width="300px" align="center">'.$DocsFaseObj->DOCUMENTOIdDOCUMENTOObject->Nombre.'</td></tr>';
//
//                else {
//                    echo '<tr><td>&nbsp;</td></tr>';
//                }
//            }
//
//            echo '</table>';
//            echo '</td>';
//        }
//        else {
//            echo '<td width="300px" align="center">&nbsp;</td>';
//        }
//
//        echo '</td>';
//    }
//    echo '</tr>';
//
///        $DocsFase=DocumentosFase::LoadArrayByFASEIdFASE($intFASEIdFASE);
////
////        $DocsLicArray=VigenciaDocumento::LoadArrayByLICENCIAIdLICENCIA($idLicencia);
////
////
////
////        echo '<tr>';
////        foreach ($DocsLicArray as $DocsLicObj) {
////            if ($DocsLicObj->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTOObject)
////                echo '<td width="300px" align="center">'.$DocsLicObj->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTOObject->Nombre.'</td>';
////            else {
////                echo '<td width="300px" align="center">&nbsp;</td>';
////            }
////
////        }
////        echo '</tr>';
    
}

    
require(__CONFIGURATION__ . '/footer.inc.php');
?>
