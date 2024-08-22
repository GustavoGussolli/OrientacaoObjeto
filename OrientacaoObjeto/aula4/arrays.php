<?php 

    $var = array(1,2,3,4,5,6);

    /*echo $var[0] . "\n";*/

    foreach($var as $num){
        echo $num . "\n";
    }

    for($i=0; $i < count($var); $i++){ 
        echo $var[$i] . "\n";
    }