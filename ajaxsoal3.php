<?php
$inputangka = $_POST['inputangka'];

$hasil = array();
for($i=1; $i < $inputangka ; $i++ ){
    if(checkprime($i) == 1){
        $hasil[] = array($i);
    };
    
}

function checkprime($num){
    if($num == 1){
        return 0;
    }else{
        for($i= 2; $i <= $num/2; $i++){
            if($num % $i == 0){
                return 0;
            }
        }
        return 1;
    }    
}


echo json_encode($hasil);
?>