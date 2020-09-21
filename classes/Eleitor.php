<?php


namespace Classes;


class Eleitor
{
    public function podeVotar($idade): string
    {
        if($idade < 18) {
            return "não pode votar";
        }

        if ($idade >= 60) {
            return "tem voto facultativo";
        }

        return "é obrigado a votar";
    }
}