<?php
// This is the HTML template include file (.tpl.php) for the pais_list.php
// form DRAFT page.  Remember that this is a DRAFT.  It is MEANT to be altered/modified.
// Be sure to move this out of this directory before modifying to ensure that subsequent
// code re-generations do not overwrite your changes.
require('../qcubed.inc.php');

$strPageTitle = QApplication::Translate('Seguimiento') . ' - ' . QApplication::Translate('Productos');
require(__CONFIGURATION__ . '/headerAdmin.inc.php');
$IdProducto = QApplication::PathInfo(0);
$objProducto = Producto::Load($IdProducto);

// Licencias Internas
$sql = 'SELECT l.PRODUCTO_idPRODUCTO, count(l.LICENCIA_idLICENCIA) LicInternas 
        FROM lista_producto l 
        JOIN licencia m ON l.LICENCIA_idLICENCIA = m.idLICENCIA
        WHERE m.status = "Interna"
        GROUP BY l.PRODUCTO_idPRODUCTO
        HAVING l.PRODUCTO_idPRODUCTO = ' . $IdProducto;

$objDatabase = ListaProducto::GetDatabase();
$objDbResult = $objDatabase->Query($sql);

$arrayInternas = array();
while ($mixRow = $objDbResult->FetchArray()) {
    $arrayInternas[] = $mixRow;
}

foreach ($arrayInternas as $value) {
    $licInternas = $value[LicInternas];
}

if (!isset ($licInternas)){
    $licInternas = 0;
}
//echo $licInternas;

// Licencias Externas
$sql2 = 'SELECT l.PRODUCTO_idPRODUCTO, count(l.LICENCIA_idLICENCIA) LicExternas
        FROM lista_producto l
        JOIN licencia m ON l.LICENCIA_idLICENCIA = m.idLICENCIA
        WHERE m.status = "Externa"
        GROUP BY l.PRODUCTO_idPRODUCTO
        HAVING l.PRODUCTO_idPRODUCTO = ' . $IdProducto;

$objDatabase2 = ListaProducto::GetDatabase();
$objDbResult2 = $objDatabase2->Query($sql2);

$arrayExternas = array();
while ($mixRow2 = $objDbResult2->FetchArray()) {
    $arrayExternas[] = $mixRow2;
}

foreach ($arrayExternas as $value2) {
    $licExternas = $value2[LicExternas];
}

if (!isset ($licExternas)){
    $licExternas = 0;
}
//echo ' ' . $licExternas;

// Licencias Nacionalizadas
$sql3 = 'SELECT l.PRODUCTO_idPRODUCTO, count(l.LICENCIA_idLICENCIA) LicNac
        FROM lista_producto l
        JOIN licencia m ON l.LICENCIA_idLICENCIA = m.idLICENCIA
        WHERE m.status = "Nacionalizada"
        GROUP BY l.PRODUCTO_idPRODUCTO
        HAVING l.PRODUCTO_idPRODUCTO = ' . $IdProducto;

$objDatabase3 = ListaProducto::GetDatabase();
$objDbResult3 = $objDatabase3->Query($sql3);

$arrayNac = array();
while ($mixRow3 = $objDbResult3->FetchArray()) {
    $arrayNac[] = $mixRow3;
}

foreach ($arrayNac as $value3) {
    $licNac = $value3[LicNac];
}

if (!isset ($licNac)){
    $licNac = 0;
}
//echo ' ' . $licNac;

?>
<div align="center">
<?php
echo '<img src="http://chart.apis.google.com/chart?chf=bg,s,FFFFFF'.
     '&chs=300x225'.
     '&cht=p'.
     '&chd=t:' . $licInternas . ',' . $licExternas . ',' . $licNac .
     '&chdl=Internas|Externas|Nacionalizadas'.
     '&chdlp=b'.
     '&chp=0.1'.
     '&chtt=C.N.P+' . $objProducto->Descripcion . '" '.
     'width="300" '.
     'height="225" '.
     'alt="C.N.P+' . $objProducto->Descripcion . '" />';
?>
</div>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>