<?php

class StringCalculator {
    
    private $operand1 = 0;
    private $operand2 = 0;

    public function calc($formula)
    {
        preg_match_all('/^([\+\-]*\d*\.*\d+)([\+\-\*\/])([\+\-]*\d*\.*\d+)$/', $formula, $matches, PREG_SET_ORDER, 0);
        if (!$matches) {
            return 0;
        }
        $this->setOperand1((float) $matches[0][1]);
        $operator = $matches[0][2];
        $this->setOperand2((float) $matches[0][3]);
        switch ($operator) {
            case '+':
                $result = $this->sum();
                break;
            case '-':
                $result = $this->substract();
                break;
            case '*':
                $result = $this->multiplication();
                break;
            case '/':
                $result = $this->division();
                break;
            default:
                $result = 0;
        }
        return $result;  
    }

    public function setOperand1($value)
    {
        $this->operand1 = $value;
    }

    public function setOperand2($value)
    {
        $this->operand2 = $value;
    }

    public function sum() {
        return $this->operand1 + $this->operand2;
    }

    public function substract() {
        return $this->operand1 - $this->operand2;
    }

    public function multiplication() {
        return $this->operand1 * $this->operand2;
    }

    public function division() {
        return $this->operand1 / $this->operand2;
    }
}