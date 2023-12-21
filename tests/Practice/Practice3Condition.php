<?php

namespace App\Tests\Practice;

class Practice3Condition
{
    // $condition doit tester si $a contient 3 elements 
    // la condition doit retourner true
    public static function exercice1($a)
    {
        $condition = count($a) === 3;

        // le triple egal sert a rien, le == suffit, sount renvera toujours un int y'a pas d'ambiguité possible qui merite le ===
    
        return $condition;
    }

    // use ctype_upper pour vérifier qu'il y'a des majuscules dans un élément
    // $condition doit tester si $a contient exclusivement des majuscules 
    // la condition doit retourner false
    public static function exercice2($a)
    {
        // $condition = !in_array(false, array_map('ctype_upper', $a));

        // là ton in_array test si il y a un element dans l'array "a" qui n'est pas une majuscule. l'exo c'est tester si tout les element de "a" sont des majuscules.
        // tes pas loin mais c'est pas exactement ce qui est demandé

        return $condition;
    }

    // use is_string pour tester qu'il y'a bien des string dans un élément.
    // $condition doit tester si $a contient exclusivement des strings 
    // la condition doit retourner false
    public static function exercice3($a)
    {
        // $condition = !in_array(false, array_map('is_string', $a));

        // pareil la ton in_array test si y'a un element qui n'est pas une string dans l'array, c'est pas ce qu'on demande
        // tes pas loin mais c'est pas exactement ce qui est demandé

        return $condition;
    }

    // $condition doit tester si $a est inclus dans $b 
    // la condition doit retourner true
    public static function exercice4($a, $b)
    {
        $condition = in_array($a, $b);

        return $condition;
    }

    // $condition doit tester si $a est bien le deuxième élement de $b 
    // la condition doit retourner true
    public static function exercice5($a, $b)
    {
        $condition = ($a === $b[1]);

        // tes parentaise servent a rien

        return $condition;
    }

    // $condition doit tester si la somme de tout les $element de $a est égal à $b 
    // la condition doit retourner true
    public static function exercice6($a, $b)
    {
        $condition = array_sum($b) === $a;

        return $condition;
    }

    // $condition doit tester si tous les élements de $a font le meme nombre de caractère que l'element $b 
    // la condition doit retourner true
    public static function exercice7($a, $b)
    {
        // $condition = empty(array_diff($b, [$a]));
        // $condition = !$condition;

        // non la tu test la différence entre le contenu de a et b c'est pas ce que demande

        return $condition;
    }

    // $condition doit tester si $a est différent de $b 
    // la condition doit retourner false
    public static function exercice8($a, $b)
    {
        $condition = $a != $b;

        return $condition;
    }

    // $condition doit tester si $a et le tableau inverse de $b 
    // la condition doit retourner true
    public static function exercice9($a, $b)
    {

        $condition1 = array_reverse($b);
        $condition = ($a == $condition1);

        // en une ligne stp ta "condition1" sert a rien

        return $condition;
    }

    // $condition doit tester si le tableau $a en majuscule est egal au tableau $b 
    // la condition doit retourner true
    public static function exercice10($a, $b)
    {

        $condition1 = array_map('strtoupper', $a);
        $condition = ($condition1 == $b);

        // en une ligne stp ta "condition1" sert a rien

        return $condition;
    }
}