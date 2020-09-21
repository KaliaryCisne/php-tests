<?php


namespace Tests\Unit;


use Classes\Biblioteca;
use PHPUnit\Framework\TestCase;

class BibliotecaTest extends TestCase
{

    /**
     * @covers \Classes\Biblioteca::consultarValorPagamento
     */
    public function testConsultarValorPagamento()
    {
        $biblioteca = new Biblioteca();
        $biblioteca->alugarLivro();
        $this->assertEquals(3, $biblioteca->consultarValorPagamento());
    }
}