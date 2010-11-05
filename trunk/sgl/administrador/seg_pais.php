<?php
// This is the HTML template include file (.tpl.php) for the pais_list.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of this directory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.
require('../qcubed.inc.php');

$strPageTitle = QApplication::Translate('Seguimiento') . ' - ' . QApplication::Translate('Paises');
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
$IdPAIS = QApplication::PathInfo(0);
$objPais = Pais::Load($IdPAIS);

// Licencias Otorgadas
$sql = 'SELECT a.idPAIS, count(l.idLICENCIA) LicOtorgadas, Month(l.fechaInicio) MesOtorgadas
        FROM licencia l
        JOIN Proveedor b ON l.PROVEEDOR_idPROVEEDOR = b.idPROVEEDOR
        JOIN Pais a ON a.idPAIS = b.PAIS_idPAIS
        GROUP BY a.idPAIS,MesOtorgadas
        HAVING a.idPAIS = ' . $IdPAIS .
        ' ORDER BY MesOtorgadas';

$objDatabase = Empresa::GetDatabase();
$objDbResult = $objDatabase->Query($sql);

$arrayOtorgadas = array();
while ($mixRow = $objDbResult->FetchArray()) {
    $arrayOtorgadas[] = $mixRow;
}

$aux = 1;
$LicOtorgadas = "";
$MesOtorgadas = 0;
foreach ($arrayOtorgadas as $value) {
    $MesOtorgadas = $value[MesOtorgadas];

    while ($MesOtorgadas != $aux) {
        if ($MesOtorgadas != 12) {
            $LicOtorgadas = $LicOtorgadas . '0,';
        } else {
            $LicOtorgadas = $LicOtorgadas . '0';
        }
        $aux++;
    }

    if ($MesOtorgadas != 12) {
        $LicOtorgadas = $LicOtorgadas .  $value[LicOtorgadas] . ',';
    } else {
        $LicOtorgadas = $LicOtorgadas .  $value[LicOtorgadas];
    }
    $aux++;
  
}

for ($index = $MesOtorgadas+1; $index <= 12; $index++) {
    if ($index != 12) {
        $LicOtorgadas = $LicOtorgadas . '0,';
    } else {
        $LicOtorgadas = $LicOtorgadas . '0';
    }
    
}
//echo $LicOtorgadas;

// Licencias Ejecutadas
$sql2 = 'SELECT a.idPAIS, count(l.idLICENCIA) LicOtorgadas, Month(l.fechaInicio) MesOtorgadas
        FROM licencia l
        JOIN Proveedor b ON l.PROVEEDOR_idPROVEEDOR = b.idPROVEEDOR
        JOIN Pais a ON a.idPAIS = b.PAIS_idPAIS
        WHERE l.status = "Nacionalizada"
        GROUP BY a.idPAIS,MesOtorgadas
        HAVING a.idPAIS = ' . $IdPAIS .
        ' ORDER BY MesOtorgadas';

$objDatabase2 = Empresa::GetDatabase();
$objDbResult2 = $objDatabase2->Query($sql2);

$arrayEjecutadas = array();
while ($mixRow2 = $objDbResult2->FetchArray()) {
    $arrayEjecutadas[] = $mixRow2;
}

$aux2 = 1;
$LicEjecutadas = "";
$MesEjecutadas = 0;
foreach ($arrayEjecutadas as $value2) {
    $MesEjecutadas = $value2[MesOtorgadas];
    
    while ($MesEjecutadas != $aux2) {
        
        if ($MesEjecutadas != 12) {
            $LicEjecutadas = $LicEjecutadas . '0,';
        } else {
            $LicEjecutadas = $LicEjecutadas . '0';
        }
        $aux2++;
    }

    if ($MesEjecutadas != 12) {
        $LicEjecutadas = $LicEjecutadas .  $value2[LicOtorgadas] . ',';
    } else {
        $LicEjecutadas = $LicEjecutadas .  $value2[LicOtorgadas];
    }
    $aux2++;
  
}

for ($index = $MesEjecutadas+1; $index <= 12; $index++) {
    if ($index != 12) {
        $LicEjecutadas = $LicEjecutadas . '0,';
    } else {
        $LicEjecutadas = $LicEjecutadas . '0';
    }
    
}
//echo ' ' . $LicEjecutadas;

//print_r(array_values($arrayOtorgadas));
//print_r(array_values($arrayEjecutadas));

?>
<div align="center">
<?php

echo '<img src="http://chart.apis.google.com/chart?chf=bg,s,807F7F|c,s,999999' .
    '?chf=bg,s,FFFFFF' .
    '&chxl=1:|Ene|Feb|Mar|Abr|May|Jun|Jul|Ago|Sep|Oct|Nov|Dic' .
    '&chxs=0,676767,11.5,0,l,676767|1,676767,11.5,0,l,676767' .
    '&chxt=y,t' .
    '&chbh=a,4,4' .
    '&chs=500x375' .
    '&cht=bvs' .
    '&chco=FF9900,FFCC33' .
    '&chds=0,100,0,100' .
    '&chd=t:' . $LicEjecutadas . '|' .$LicOtorgadas  .//5,10,20,25,30,35,40|10,20,30,40,50,60,70' .
    '&chdl=C.N.P.+Nacionalizadas|C.N.P+Totales' .
    '&chg=0,-1,0,0' .
    '&chma=0,0,0,10' .
    '&chtt=C.N.P.+'. $objPais->Nombre . '" width="500" height="375" alt="C.N.P. ' . $objPais->Nombre . '" />';
?>
</div>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>