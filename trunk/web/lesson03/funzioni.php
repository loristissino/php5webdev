<pre style="color:blue">
<?php

function iscomment($testo)
{
  if (substr($testo,0,1)=='#')
  {
    return true;
  }
  else
  {
    return false;
  }
}

function iscomment_v2($testo)
{
  return (substr($testo,0,1)=='#');
}



$linea='#ssd';

if(iscomment($linea))
{
  echo "salto perché è un commento";
}
else
{
  echo "eseguo";
}


function somma($a, $b=6)
{
  return $a+$b;
}

$n=somma(5);


function sistemalaboratorio($lab, $internet=true, $proiettore=true)
{
}


//sistemalaboratorio(); // non valida

sistemalaboratorio(1); 

sistemalaboratorio(1, false); 

$richiestadocente=true;

sistemalaboratorio(1, $richiestadocente); 

sistemalaboratorio(1, null , false); // non valida


function sistemalaboratorio2($lab, $options=array())
{
  
  
  
}

/* esempi di chiamate ...

sistemalaboratorio2(1); 

sistemalaboratorio2(1, array('internet'=>true)); 

sistemalaboratorio2(1, array(
  'internet'=>true, 
  'ariacondizionata'=>true)
  ); 


sistemalaboratorio2(1, array(
  'internet'=>true, 
  'ariacondizionata'=>true)
  'proiettore'=>false)
  ); 

*/