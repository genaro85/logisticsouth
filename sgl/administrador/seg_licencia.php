<?php

// Load the QCubed Development Framework
require('../qcubed.inc.php');

$idLicencia="3";

$objLicencia = Licencia::Load($idLicencia);
echo '<b>'.$objLicencia->NumeroProforma.'</b>';
echo '<table border="1">';

if ($objLicencia) {
    $FaseLicArray=FaseLicencia::LoadArrayByLICENCIAIdLICENCIA($idLicencia);
    $Fase=Fase::Load($idLicencia);
    $Fase->Nombre;
    echo '<tr>';
    foreach ($FaseLicArray as $FaseLicObj) {
        if ($FaseLicObj->FASEIdFASEObject->Nombre)
            echo '<td width="100px" align="center">'.$FaseLicObj->FASEIdFASEObject->Nombre.'</td>';
        else {
            echo '<td width="100px" align="center">&nbsp;</td>';
        }

    }
    echo '</tr>';
    echo '<tr>';
    foreach ($FaseLicArray as $FaseLicObj) {

        if ($FaseLicObj->FASEIdFASEObject->Icono)
            echo '<td width="100px" align="center"><div><img  src="'.__ARCHIVE_DIRECTORY_PARTIAL__.$FaseLicObj->FASEIdFASEObject->Icono.'" width="60px"></div></td>';
        else {
            echo '<td width="100px" align="center">&nbsp;</td>';
        }
    }
    echo '</tr>';

   echo '<tr>';
    foreach ($FaseLicArray as $FaseLicObj) {

        if ($FaseLicObj->FASEIdFASEObject->Icono)
            echo '<td width="100px" align="center"><div><img  src="'.__ARCHIVE_DIRECTORY_PARTIAL__.$FaseLicObj->FASEIdFASEObject->Icono.'" width="60px"></div></td>';
        else {
            echo '<td width="100px" align="center">&nbsp;</td>';
        }
    }
    echo '</tr>';


    
    
    $DocsLicArray=VigenciaDocumento::LoadArrayByLICENCIAIdLICENCIA($idLicencia);



    echo '<tr>';
    foreach ($DocsLicArray as $DocsLicObj) {
        if ($DocsLicObj->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTOObject)
            echo '<td width="100px" align="center">'.$DocsLicObj->DOCUMENTOSFASEDOCUMENTOIdDOCUMENTOObject->DOCUMENTOIdDOCUMENTOObject->Nombre.'</td>';
        else {
            echo '<td width="100px" align="center">&nbsp;</td>';
        }

    }
    echo '</tr>';
}
echo '</table>';



?>