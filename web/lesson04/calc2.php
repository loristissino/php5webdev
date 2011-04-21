<pre>
<?php
// see http://knol.google.com/k/loris-tissino/lezione-04-oop/3s6hcvstzhgkg/3

ini_set('error_reporting', E_ALL);

function __autoload($className)
{
    $filename=$className.'.class.php';
    include($filename);
}

$calculator = new Calculator();

$calculator
->setOperand(1, 5)
->setOperand(2, 10)
->setOperator('*');

print_r($calculator->getOperands());
echo sprintf("Operator: '%s'\n", $calculator->getOperator());

unset($calculator);
