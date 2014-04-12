<?php
require('Parser.php');
$parser = new Parser;
$parsedPDF = $parser->parseFile('Document1_pdfcreator.pdf');
echo $parsedPDF;
?>