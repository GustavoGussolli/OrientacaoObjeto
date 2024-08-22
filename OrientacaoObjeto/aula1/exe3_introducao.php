<?php

   for ($ano=1980; $ano <= 2024; $ano++) { 

      $anobi = $ano % 4 ;

      if ($anobi == 0) {
         echo $ano . " é ano bissexto \n";
      }

   }
