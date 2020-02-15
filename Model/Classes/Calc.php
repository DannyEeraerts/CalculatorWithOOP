<?php

class Calc
{

    private $num1;
    private $num2;
    private $operator;

    public function __construct(float $num1, float $num2, string $operator)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }

    public function calcmethode()
    {
        echo $this->operator;

        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'multi':
                $result = $this->num1 * $this->num2;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                break;
            case 'mod':
                $result = $this->num1 % $this->num2;
                break;
            case 'square':
                $result = pow($this->num1, 2);
                break;
            case 'root':
                $result = sqrt($this->num1);
                break;
            case 'exponent':
                $result = pow($this->num1, $this->num2);
                break;
            case 'faculty':
                $int = round($this->num1);
                $result = 1;
                for($i=$int ; $i>0 ;$i--){
                     $result *= $i;
                }
                break;
            default:
                $result = "Error";
                break;
        }
        return $result;
    }
}
