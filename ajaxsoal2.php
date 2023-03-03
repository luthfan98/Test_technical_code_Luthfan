<?php
$inputangka = $_POST['inputangka'];

$hasil = array();
for($i=0; $i < $inputangka ; $i++ ){
    if($i%2 == 0){

    }else{
        $hasil[] = array($i);
    }
    
}
echo json_encode($hasil);
?>