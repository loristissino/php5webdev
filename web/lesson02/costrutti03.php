<pre style="color:blue">
<?php


$lista=array(
  'it'=>'Italia', 
  'gb'=>'Regno Unito', 
  'fr'=>'Francia', 
  'de'=>'Germania',
  );

print_r($lista);

asort($lista);

print_r($lista);

ksort($lista);

print_r($lista);




