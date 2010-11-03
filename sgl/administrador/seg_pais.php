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
        GROUP BY a.idPAIS, l.fechaInicio
        HAVING a.idPAIS = ' . $IdPAIS .
        ' ORDER BY Month(l.fechaInicio)';

$objDatabase = Empresa::GetDatabase();
$objDbResult = $objDatabase->Query($sql);

$arrayOtorgadas = array();
while ($mixRow = $objDbResult->FetchArray()) {
    $arrayOtorgadas[] = $mixRow;
}

foreach ($arrayOtorgadas as $value) {
    $MesOtorgadas = $value[MesOtorgadas];

    for ($i = 1 ; $i <= 12 ; $i ++){
        if($MesOtorgadas == $i){
            if($i == 1){
                $LicOtorgadas = $value[LicOtorgadas];
            }else{
                $LicOtorgadas = $LicOtorgadas . ',' . $value[LicOtorgadas];
            }
        }else{
            if($i == 1){
                $LicOtorgadas = $LicOtorgadas = '0';
            }else{
                $LicOtorgadas = $LicOtorgadas . ',0';
            }
        }
    }
}

// Licencias Ejecutadas
$sql2 = 'SELECT a.idPAIS, count(l.idLICENCIA) LicOtorgadas, Month(l.fechaInicio) MesOtorgadas
        FROM licencia l
        JOIN Proveedor b ON l.PROVEEDOR_idPROVEEDOR = b.idPROVEEDOR
        JOIN Pais a ON a.idPAIS = b.PAIS_idPAIS
        WHERE status = "En Proceso"
        GROUP BY a.idPAIS, l.fechaInicio
        HAVING a.idPAIS = ' . $IdPAIS .
        ' ORDER BY Month(l.fechaInicio)';

$objDatabase2 = Empresa::GetDatabase();
$objDbResult2 = $objDatabase2->Query($sql2);

$arrayEjecutadas = array();
while ($mixRow2 = $objDbResult2->FetchArray()) {
    $arrayEjecutadas[] = $mixRow2;
}

foreach ($arrayEjecutadas as $value2) {
    $MesEjecutadas = $value2[MesOtorgadas];

    for ($j = 1 ; $j <= 12 ; $j ++){
        if($MesEjecutadas == $j){
            if($j == 1){
                $LicEjecutadas = $value2[LicOtorgadas];
            }else{
                $LicEjecutadas = $LicEjecutadas . ',' . $value2[LicOtorgadas];
            }
        }else{
            if($j == 1){
                $LicEjecutadas = $LicEjecutadas = '0';
            }else{
                $LicEjecutadas = $LicEjecutadas . ',0';
            }
        }
    }
}
//print_r(array_values($array));

?>
<div align="center">
<?php

echo '<img src="http://chart.apis.google.com/chart?chf=bg,s,807F7F|c,s,999999' .
    '&chxl=1:|Ene|Feb|Mar|Abr|May|Jun|Jul|Ago|Sep|Oct|Nov|Dic' .
    '&chxs=0,FFFFFF,11.5,0,l,FFFFFF|1,FFFFFF,11.5,0,l,676767' .
    '&chxt=y,t' .
    '&chbh=a,4,4' .
    '&chs=400x300' .
    '&cht=bvs' .
    '&chco=FF9900,FFCC33' .
    '&chds=0,100,0,100' .
    '&chd=t:' . $LicOtorgadas . '|' . $LicOtorgadas .//5,10,20,25,30,35,40|10,20,30,40,50,60,70' .
    '&chg=0,-1,0,0' .
    '&chma=0,0,0,10' .
    '&chtt=C.N.P.+'. $objPais->Nombre . '" width="400" height="300" alt="C.N.P. ' . $objPais->Nombre . '" />';
?>
</div>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>