<?php

include('nit.php');
function name(){
  global $nama;
  echo $nama;
}

tes();


function tes(){
  $var = ["1", "2", "3"];
  for ($i = 0; $i < count($var); $i++)
  {
    print_r($var[$i] . "\n");
  }
}

 ?>
