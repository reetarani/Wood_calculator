<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=circle-wood-report.xls");

// Add data table
include 'data/data-circle-wood-report.php';

?>