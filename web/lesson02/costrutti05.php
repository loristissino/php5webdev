<pre style="color:blue">
<?php

$nazioni=file('nazioni.txt');

//print_r($nazioni);

echo "---\n";

$nazioni = array_map('chop', $nazioni);

echo implode(', ', $nazioni);


