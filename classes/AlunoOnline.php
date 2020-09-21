<?php

namespace Classes;

class AlunoOnline
{
    private float $nota;

    /**
     * @param float $nota
     */
    public function setNota(float $nota): string
    {
        if($nota < 0 || $nota > 10) {
            return "Nota invalida";
        }

        $this->nota = $nota;

        return "Nota inserida com sucesso";
    }
}