<?php

namespace App\Tests\Practice;

class Practice2Array
{
    // $result doit valoir ['A', 'B', 'C', 'D']
    public static function exercice1($a)
    {
        // dd($a);
        $a[] = "D";
        $result = $a;
        // dd($result);

        return $result;
    }

    // $result doit valoir ['B', 'C']
    public static function exercice2($a)
    {
        // dd($a);

        $result = array_slice($a, 1);
        // dd($result);
        return $result;
    }

    // $result doit valoir ['A', 'D', 'B', 'C']
    public static function exercice3($a)
    {
        array_splice($a, 1, 0, "D");
        $result = $a;
        // dd($result);
        return $result;
    }

    // $result doit valoir ['a', 'b', 'c']
    public static function exercice4($a)
    {
        $result = array_map('strtolower', $a);
        // dd($result);

        return $result;
    }

    // $result doit valoir [2, 4, 6, 8]
    public static function exercice5($a)
    {
        $result = array_map(fn($value) => $value * 2, $a);
        // dd($result);

        // $result = 

        return $result;
    }

    // $result doit valoir [1, 2, 9, 4]
    public static function exercice6($a)
    {
        $result = array();
        foreach ($a as $key => $value) {
            $result[$key] = ($key == 2) ? $value * $value : $value; 
        }
        // dd($result);

        // $result = 

        return $result;
    }

    // $result doit valoir '1,2,3,4'
    public static function exercice7($a)
    {
        // dd($a);
        $result = implode(',', $a);
        // dd($result);

        return $result;
    }

    // $result doit valoir [ 'a1', 'a2', 'a3']
    public static function exercice8($a)
    {
        foreach ($a as $key => $value) {
            $result[] = $value . ($key + 1);
        }
        // dd($result);

        return $result;
    }

    // $result doit valoir [4, 3, 2, 1]
    public static function exercice9($a)
    {
        $result = array_reverse($a);
        // dd($result);
        // $result = 

        return $result;
    }

    // $result doit valoir [ 'a1', 'b2', 'c3']
    public static function exercice10($a, $b)
    {
        $result = array();
        $b = array_reverse($b);

        for ($i = 0; $i < count($a); $i++) {
            $result[] = $a[$i] . $b[$i];
        }

    //    dd($result);

        return $result;
    }
}
