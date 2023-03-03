<?php
$inputangka = $_POST['inputangka'];

$aarrangka = str_split($inputangka);

echo json_encode($aarrangka);
?>