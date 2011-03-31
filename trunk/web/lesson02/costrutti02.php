<pre style="color:blue">
<?php

$nome = "Mario";

$cognome='Rossi';

//$nomecompleto=$nome . ' ' . $cognome;

$nomecompleto='$nome $cognome';

$nomecompleto="$nome $cognome";

echo $nomecompleto.'\n';

echo "altro\n";

$lista=array(
  'fragola', 
  'limone', 
  'cioccolato', 
  'banana',
  );

print_r($lista);

for($i=0; $i<sizeof($lista); $i++)
{
  echo ">>>>>>$lista[$i]\n";
}


$lista[]='nocciola';

sort($lista);

$input='nocciola';

if (in_array($input, $lista))
{
  echo "esiste";
}
else
{
  echo "non esiste";
}

echo in_array($input, $lista) ? 'esiste' : 'non esiste';

unset($lista);

echo "\n";

$lista=array(
  'fr'=>'fragola', 
  'lm'=>'limone', 
  'ci'=>'cioccolato', 
  'ba'=>'banana',
  );


foreach($lista as $codice=>$gusto)
{
  echo ">>>>>>$codice: $gusto\n";
}



print_r($lista);




