<?php
class Math {

    public static string $nome = 'Pedro';

    public static function somar($x, $y) {
        return $x + $y;
    }

}

Math::$nome; //acessando variável (propriedade) da classe sem precisar criar um objeto

Math::somar(20, 30); //se é uma função estática, consigo usá-la sem precisar criar um objeto, usando ::