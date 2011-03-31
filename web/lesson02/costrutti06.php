<pre style="color:blue">
<?php

$testo="abc;def ghi";

list($codice, $nome)=explode(';', $testo);

echo "codice: $codice, nome: $nome\n";

$nazioni=file('nazioniconcodice.txt');

print_r($nazioni);

