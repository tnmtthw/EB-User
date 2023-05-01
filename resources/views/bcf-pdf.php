<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml('hello world');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();