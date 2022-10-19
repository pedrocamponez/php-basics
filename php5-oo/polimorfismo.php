<?php
interface Forma {
    public function getTipo();
    public function getArea();
}
class Quadrado implements Forma {
    private $largura;
    private $altura;

    public function __construct($l, $a) {
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getTipo() {
        return 'quadrado';
    }
    public function getArea() {
        return $this->largura * $this->altura;
    }
}
class Circulo implements Forma {
    private $raio;

    public function __construct($r) {
        $this->raio = $r;
    }

    public function getTipo() {
        return 'circulo';
    }
    public function getArea() {
        return ($this->raio * $this->raio) * pi();
    }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

foreach($objetos as $objeto) {
    $tipo = $objeto->getTipo(); //aqui está o polimorfismo. O mesmo método pode pertencer a diferentes classes
    $area = $objeto->getArea(); 

    echo 'AREA '.$tipo.': '.$area."<br/>";
}