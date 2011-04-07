<pre style="color:blue">
<?php
$ruolo="redattore";

$possib='';

switch ($ruolo)
{
  case 'admin':
    $possib .= 'cancella tutto';
  case 'direttore':
    $possib .= 'autorizza';
  case 'redattore':
    $possib .= 'scrivi';
  case 'lettore':
    $possib .= 'leggi';
    break;
  default:
    echo "nessuna azione specificata\n";
   
}

echo $possib;