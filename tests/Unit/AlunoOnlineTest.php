<?php


namespace Tests\Unit;


use Classes\AlunoOnline;
use PHPUnit\Framework\TestCase;

class AlunoOnlineTest extends TestCase
{
    public function testSetNota()
    {
        $portalAluno = new AlunoOnline();

        $this->assertEquals("Nota inserida com sucesso", $portalAluno->setNota(7.3));
        $this->assertEquals("Nota invalida", $portalAluno->setNota(-2));
        $this->assertEquals("Nota invalida", $portalAluno->setNota(15));
    }
}