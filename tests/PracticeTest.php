<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Tests\Practice\Practice1Var;
use App\Tests\Practice\Practice2Array;
use App\Tests\Practice\Practice4Object;
use App\Tests\Practice\Practice3Condition;
use App\Tests\Practice\Practice5Loop;


class PracticeTest extends TestCase
{
    public function testCorrectPratice(): void
    {
    	$this->assertSame(4, practice1Var::exercice1(2));
    	$this->assertSame(2, practice1Var::exercice2(4));
    	$this->assertSame(16, practice1Var::exercice3(4));
    	$this->assertSame('bonjour les gens', practice1Var::exercice4('bonjour'));
    	$this->assertSame('bonjour les gens', practice1Var::exercice5('les gens'));
    	$this->assertSame('bonjour les gens', practice1Var::exercice6('les'));
    	$this->assertSame('bonjour les gens', practice1Var::exercice7('bonjour gens'));
    	$this->assertSame(3.0, practice1Var::exercice8(3));
    	$this->assertSame(3, practice1Var::exercice9(6.0));
    	$this->assertSame(false, practice1Var::exercice10(true));

    	$this->assertSame(['A', 'B', 'C', 'D'], practice2Array::exercice1(['A', 'B', 'C']));
    	$this->assertSame(['B', 'C'], practice2Array::exercice2(['A', 'B', 'C']));
    	$this->assertSame(['A', 'D', 'B', 'C'], practice2Array::exercice3(['A', 'B', 'C']));
    	$this->assertSame(['a', 'b', 'c'], practice2Array::exercice4(['A', 'B', 'C']));
    	$this->assertSame([2, 4, 6, 8], practice2Array::exercice5([1, 2, 3, 4]));
    	$this->assertSame([1, 2, 9, 4], practice2Array::exercice6([1, 2, 3, 4]));
    	$this->assertSame('1,2,3,4', practice2Array::exercice7([1, 2, 3, 4]));
    	$this->assertSame([ 'a1', 'a2', 'a3'], practice2Array::exercice8(['a', 'a', 'a']));
    	$this->assertSame([4, 3, 2, 1], practice2Array::exercice9([1, 2, 3, 4]));
    	$this->assertSame([ 'a1', 'b2', 'c3'], practice2Array::exercice10(['a', 'b', 'c'], [3, 2, 1]));

    	$this->assertTrue(practice3Condition::exercice1(['A', 'B', 'C']));
    	$this->assertFalse(practice3Condition::exercice2(['A', 'b', 'C']));
    	$this->assertFalse(practice3Condition::exercice3(['A', 1, 'C']));
    	$this->assertTrue(practice3Condition::exercice4('A', ['A', 'B', 'C']));
    	$this->assertTrue(practice3Condition::exercice5('B', ['A', 'B', 'C']));
    	$this->assertTrue(practice3Condition::exercice6(6, [1, 2, 3]));
    	$this->assertTrue(practice3Condition::exercice7('foo', ['foo', 'bar', 'state', 'gui']));
    	$this->assertFalse(practice3Condition::exercice8('a', 'a'));
    	$this->assertTrue(practice3Condition::exercice9([1, 2, 3], [3, 2, 1]));
    	$this->assertTrue(practice3Condition::exercice10(['a', 'b', 'c'], ['A', 'B', 'C']));

    	$this->assertSame(['a' => 1, 'b' => 2, 'c' => 3], practice4Object::exercice1(['a', 'b', 'c']));
    	$this->assertSame(['a' => 1, 'b' => 3.5, 'c' => 3], practice4Object::exercice2(['a' => 1, 'b' => [ 'ba' => 1.5, 'bb' => 2 ], 'c' => 3]));
    	$this->assertSame(['a' => 1, 'b' => 2, 'c' => 3], practice4Object::exercice3(['a' => 1, 'b' => [ 'ba' => 1.5, 'bb' => 2 ], 'c' => 3]));
    	$this->assertSame(['a' => [ 'b' => 1, 'c' => 2 ]], practice4Object::exercice4(['a' => 1, 'b' => [ 'ba' => 1.5, 'bb' => 2 ], 'c' => 3]));
    	$this->assertSame(['a' => 1, 'b' => [ 'bleu' => 1, 'vert' => 2, 'rouge' => 3], 'c' => 3], practice4Object::exercice5(['a' => 1, 'b' => [ 'bleu', 'vert', 'rouge'], 'c' => 3]));
    	$this->assertSame(['a' => 'bleu', 'b' => 'vert', 'c' => 'rouge'], practice4Object::exercice6(['a' => 1, 'b' => [ 'bleu' => 1, 'vert' => 2, 'rouge' => 3], 'c' => 3]));
    	$this->assertSame(['bleu' => 'a', 'vert' => 'b', 'rouge' => 'c'], practice4Object::exercice7(['a' => 1, 'b' => [ 'bleu' => 1, 'vert' => 2, 'rouge' => 3], 'c' => 3]));
    	$this->assertSame(['a' => 10, 'b' => 14, 'c' => 10], practice4Object::exercice8(['a' => 1, 'b' => 2, 'c' => 3], ['a' => 11, 'b' => 12, 'c' => 13]));
    	$this->assertSame(['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6], practice4Object::exercice9(['a' => 1, 'b' => 2, 'c' => 3], ['d' => 4, 'e' => 5, 'f' => 6]));
    	$this->assertSame(['a1', 'b2', 'c3', 'd4', 'e5', 'f6', 'g7', 'h8', 'i9'], practice4Object::exercice10(['a' => 1, 'b' => 2, 'c' => 3], ['d' => 4, 'e' => 5, 'f' => 6], ['g' => 7, 'h' => 8, 'i' => 9]));

    	$this->assertSame(['a' => 3, 'b' => 2, 'c' => 1], practice5Loop::exercice1(['a', 'b', 'c']));
    	$this->assertSame(['a' => 1, 'b' => 2, 'c' => 3], practice5Loop::exercice2(['a1', 'b2', 'c3']));
    	$this->assertSame([true, false, true, true, false], practice5Loop::exercice3([11, 9, 10, 15, 3]));
    	$this->assertSame(['A', 'b', 'c', 'D', 'e', 'f', 'G'], practice5Loop::exercice4(['a', 'b', 'c', 'd', 'e', 'f', 'g']));
    	$this->assertSame(['a1', 'b2', 'c3'], practice5Loop::exercice5(['a', 'b', 'c']));
    	$this->assertSame(['a' => 2, 'c' => 4, 'e' => 6], practice5Loop::exercice6(['a', 'b', 'c']));
    	$this->assertSame(6, practice5Loop::exercice7(['A', 'B', 'C']));
    	$this->assertSame(10, practice5Loop::exercice8(0));
    	$this->assertSame(4, practice5Loop::exercice9(50));
    	$this->assertSame(22, practice5Loop::exercice10([1, 2, 3, 4], [2, 2, 4, 1]));
    }
}
