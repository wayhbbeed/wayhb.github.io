<?php
require "./adodb.inc.php";
$conn = new com("ADODB.Connection");
$connstr = "DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=" . realpath("bookinfo.mdb ");

$conn->Open($connstr);