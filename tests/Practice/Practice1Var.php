<?php

namespace App\Tests\Practice;

class Practice1Var
{
    // $result doit valoir deux fois $a
    public static function exercice1($a)
    {
        $result = $a*2;

        return $result;
    }

    // $result doit valoir la moitier de $a
    public static function exercice2($a)
    {
        $result = $a / 2;

        return $result;
    }

    // $result doit valoir $a au carré
    public static function exercice3($a)
    {  
        $result = $a ** 2;

        return $result;
    }

    // $result doit valoir 'bonjour les gens'
    public static function exercice4($a)
    {
        $result = $a ." les gens";

        return $result;
    }

    // $result doit valoir 'bonjour les gens'
    public static function exercice5($a)
    {
        $result = "bonjour " . $a;

        return $result;
    }

    // $result doit valoir 'bonjour les gens'
    public static function exercice6($a)
    {
        $result = "bonjour " . $a . " gens";

        return $result;
    }

    // $result doit valoir 'bonjour les gens'
    public static function exercice7($a)
    {
        $result = substr_replace('bonjour gens', ' les ', 7, 1);

        return $result;
    }

    // $result doit valoir 3.0
    public static function exercice8($a)
    {
        $result = floatval($a);

        return $result;
    }

    // $result doit valoir 3
    public static function exercice9($a)
    {
        $result = intval($a / 2);

        return $result;
    }

    // $result doit valoir l'inverse de $a
    public static function exercice10($a)
    {
        $result = !$a;

        return $result;
    }
}
