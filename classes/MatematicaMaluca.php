<?php


namespace Classes;


class MatematicaMaluca
{
    public function contaMaluca(int $numero): int
    {
        if($numero > 30) {
            return $numero * 4;
        } elseif ($numero > 10) {
            return $numero * 3;
        } else {
            return $numero * 2;
        }
    }
}