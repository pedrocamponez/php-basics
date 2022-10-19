<?php
class Calculadora {

    public $total = 0;

    public function __construct($number = 0)
    {
        $this->number = $number;
    }

    public function add($add) {
        $this->number += $add;
    }
    public function sub($sub) {
        $this->number -= $sub;
    }
    public function multiply($multiply) {
        $this->number *= $multiply;
    }
    public function divide($divide) {
        $this->number /= $divide;
    }
    public function total() {
        return $this->number;
    }
    public function clear() {
        return $this->number = 0;
    }
}