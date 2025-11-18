<?php

declare(strict_types=1); // ativa tipagem forte

function somar(int $a, int $b)
{
    return $a + $b;
}

echo somar("10", 5);

// class Pai {
//     public static function quemSou() {
//         echo "Sou o PAI\n";
//     }

//     public static function testeSelf() {
//         self::quemSou();
//     }

//     public static function testeStatic() {
//         static::quemSou();
//     }
// }

// class Filho extends Pai {
//     public static function quemSou() {
//         echo "Sou o FILHO\n";
//     }
// }

// echo "Usando self::\n";
// Filho::testeSelf();   // => Sou o PAI

// echo "\nUsando static::\n";
// Filho::testeStatic(); // => Sou o FILHO