<?php

    $num1 = readline("Informe o primeiro número: ");
    $num2 = readline("Informe o segundo número: ");
    $num3 = readline("Informe o terceiro número: ");

    if($num1 > $num2 and $num1 > $num3){

        if($num2 > $num3){

            echo "O número menor entre eles é " . $num3;
            
        } 

        if($num3 > $num2){

            echo "O número menor entre eles é " . $num2;

        }
            
        }

    if($num2 > $num1 and $num2 > $num3){

            if($num1 > $num3){
    
                echo "O número menor entre eles é " . $num3;
                
            } 
    
            if($num3 > $num1){
    
                echo "O número menor entre eles é " . $num1;
    
            }
                
            }
    if($num3 > $num2 and $num3 > $num1){

        if($num2 > $num1){
        
            echo "O número menor entre eles é " . $num1;
                    
         } 
        
        if($num1 > $num2){
        
            echo "O número menor entre eles é " . $num2;
        
        }
                    
    }