<pre style="color:blue">
<?php

$nazioni=file('nazioni.txt');

//print_r($nazioni);

$testo='';

foreach($nazioni as $nazione)
{
  $testo .= chop($nazione) . '*';
}

echo $testo . "\n";

echo "---\n";

$nazioni2=array();

foreach($nazioni as $nazione)
{
  $nazioni2[]=chop($nazione);
}



echo implode('*', $nazioni2);


