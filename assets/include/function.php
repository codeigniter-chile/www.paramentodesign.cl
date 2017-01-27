<?php
    function damelista($cadena)
    {
      $porciones = explode(",", $cadena);
      $items = count($porciones);

     for ($x = 0; $x < $items; $x++)
       { 
        echo "<li><i class='icon-ok'></i>".$porciones[$x]."</li>";
       }
    }
 ?>