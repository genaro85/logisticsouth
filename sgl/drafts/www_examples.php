<?php


require("../assets/php/dompdf/dompdf_config.inc.php");

$dompdf = new DOMPDF();
$dompdf->load_html_file("Reporte.html");
$dompdf->set_paper("letter","portrait");
$dompdf->render();
//$pdf = $dompdf->output();
$dompdf->stream("out.pdf");

?>

