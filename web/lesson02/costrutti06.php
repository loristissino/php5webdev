<pre style="color:blue">
<?php

//Obiettivo: prendere il file e per ogni riga
//la prima parte sarà la chiave dell'elemento dell'array
//e la seconda il valore

$nazioni=file('nazioniconcodice.txt');

print_r($nazioni);

$nazioniconcodice=array(); // inizializzo un array vuoto
foreach($nazioni as $nazione)
{
  list($codice, $valore)=explode(';',$nazione);
  $nazioniconcodice[$codice]=$valore;
  // metto nell'array l'elemento corrente
}

print_r($nazioniconcodice);

