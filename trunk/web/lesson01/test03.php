<?php

const LIM=12;

$limite=array_key_exists('limite', $_GET) ? $_GET['limite']: LIM;

function mostrasaluto() 
{
  $saluto= "hello, world";
  return $saluto;
}

function commento($numero, $limite=LIM)
{
  if ($numero>=$limite)
  {
    return "grande!"; 

  }
  else
  {
    return "piccolo...";
  }
}


$contenuto="";


for($n=1; $n<=15; $n++)
{
  $contenuto .= $n . " " . commento($n, $limite) . "\n";
}



require('templates/layout.php');

