<?php
   // Array with names
   $a[] = "Carl";
   $a[] = "Thommy";
   $a[] = "Martin";
   $a[] = "Josephine";
   $a[] = "Mark";
   $a[] = "Alfie";
   $a[] = "Joy";
   $a[] = "Aljun";
   $a[] = "Noel";
   $a[] = "Sarsonas";
   $a[] = "Alvin";
   $a[] = "Romaguerra";
   $a[] = "Calledo";
   $a[] = "Ybanez";
   $a[] = "Salonoy";
   $a[] = "Manalop";
   $a[] = "Villarin";
   $a[] = "Rivera";
   $a[] = "Marcellana";
   $a[] = "De ramos";
   
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
		
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?> 