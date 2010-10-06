<?php

require_once("../assets/php/dompdf/dompdf_config.inc.php");


$html ="http://" . $_SERVER['SERVER_NAME']  ."/sgl/drafts/Chart.php";
echo $html;

$dompdf = new DOMPDF();
$dompdf->load_html_file($html);
$dompdf->render();
$pdf = $dompdf->output();

file_put_contents("" . "pruaba.pdf", $pdf);

?>