<?php


namespace Tests\Unit;


use Classes\Eleitor;
use PHPUnit\Framework\TestCase;

class EleitorTest extends TestCase
{
    /**
     * @covers \Classes\Eleitor::podeVotar
     */
    public function testPodeVotar()
    {
        $eleitor = new Eleitor();
        $this->assertEquals("não pode votar", $eleitor->podeVotar(16));
        $this->assertEquals("é obrigado a votar", $eleitor->podeVotar(18));
        $this->assertEquals("tem voto facultativo", $eleitor->podeVotar(60));
    }
}