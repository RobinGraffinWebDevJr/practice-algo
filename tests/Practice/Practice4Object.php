<?php

namespace App\Tests\Practice;

class Practice4Object
{
    // $result doit valoir ['a' => 1, 'b' => 2, 'c' => 3]
    public static function exercice1($a)
    {
        // dd($a);
        $result1 = array(1,2,3);

        $result = array_combine($a , $result1);
        // dd($result);

        return $result;
    }

    // $result doit valoir ['a' => 1, 'b' => 3.5, 'c' => 3]
    public static function exercice2($a)
    {
        $result = array_map(function($a) {
            return is_array($a) ? array_sum(array_values($a)) : $a;
        }, $a);
        // dd($result);
        return $result;
    }

    // $result doit valoir ['a' => 1, 'b' => 2, 'c' => 3]
    public static function exercice3($a)
    {

        foreach ($a as $key => $value) {
            if (is_array($value)) {
                // Si la valeur est un tableau, appliquer récursivement
                $result[$key] = convertToAssociativeArray($value);
            } else {
                // Si la valeur n'est pas un tableau, utiliser la valeur telle quelle
                $result[$key] = $value;
            }
        }

        dd($a);
        // $result1 = array();

        // $result = 

        return $result;
    }

    // $result doit valoir ['a' => [ 'b' => 1, 'c' => 2 ]]
    public static function exercice4($a)
    {
        dd($a);

        // $result = 

        return $result;
    }

    // $result doit valoir ['a' => 1, 'b' => [ 'bleu' => 1, 'vert' => 2, 'rouge' => 3], 'c' => 3]
    public static function exercice5($a)
    {
        dd($a);

        // $result = 

        return $result;
    }

    // $result doit valoir ['a' => 'bleu', 'b' => 'vert', 'c' => 'rouge']
    public static function exercice6($a)
    {
        dd($a);

        // $result = 

        return $result;
    }

    // $result doit valoir ['bleu' => 'a', 'vert' => 'b', 'rouge' => 'c']
    public static function exercice7($a)
    {
        dd($a);

        // $result = 

        return $result;
    }

    // $result doit valoir ['a' => 10, 'b' => 14, 'c' => 10]
    public static function exercice8($a, $b)
    {
        dd($a, $b);

        // $result = 

        return $result;
    }

    // $result doit valoir ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6]
    public static function exercice9($a, $b)
    {
        dd($a, $b);

        // $result = 

        return $result;
    }

    // $result doit valoir ['a1', 'b2', 'c3', 'd4', 'e5', 'f6', 'g7', 'h8', 'i9']
    public static function exercice10($a, $b, $c)
    {
        dd($a, $b, $c);

        // $result = 

        return $result;
    }
}