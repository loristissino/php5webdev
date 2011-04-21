<?php
// see http://knol.google.com/k/loris-tissino/lezione-04-oop/3s6hcvstzhgkg/3

class Calculator
{
    private    $operands;
    private    $operator;

    function __construct()
    {
        $this->operands=array();
    }
   
    public function setOperand($n, $v)
    {
        $this->operands[$n]=$v;
        return $this;
    }
   
    public function getOperands()
    {
        return $this->operands;
    }
   
    public function getOperand($n)
    {
        $operands=$this->getOperands();
        if (array_key_exists($n, $this->getOperands()))
        {
            return $operands[$n];
        }
        else
        {
            return false;
        }
    }
   
    public function setOperator($v)
    {
        if (!in_array($v, array('+', '-', '*', '/')))
        {
            throw new InvalidArgumentException('Value ' . $v . ' is not allowed');
        }
       
        $this->operator=$v;
        return $this;
    }

    public function getOperator()
    {
        return $this->operator;
    }
}
