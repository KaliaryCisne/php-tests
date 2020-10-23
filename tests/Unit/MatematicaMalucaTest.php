<?php


namespace Unit;


use Classes\MatematicaMaluca;
use PHPUnit\Framework\TestCase;

class MatematicaMalucaTest extends TestCase
{
    public function testeContaMaluca()
    {
        $conta = new MatematicaMaluca();
        $this->assertEquals(124, $conta->contaMaluca(31));
        $this->assertEquals(33, $conta->contaMaluca(11));
        $this->assertEquals(10, $conta->contaMaluca(5));
    }
}