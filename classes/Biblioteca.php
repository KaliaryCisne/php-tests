<?php


namespace Classes;


class Biblioteca
{
    private \DateTime $dataDeEntrega;
    private \DateTime $dataDePagamento;
    private float $valor;


    /**
     * @codeCoverageIgnore
     */
    public function alugarLivro()
    {
        $this->dataDeEntrega = new \DateTime();
        $this->dataDePagamento = new \DateTime();
        $this->valor = 3;
        $interval = new \DateInterval('P7D');
        $this->dataDePagamento->add($interval);
        echo "" . PHP_EOL;
        echo "data de entrega:" . $this->dataDeEntrega->format('Y-m-d') . PHP_EOL;
        echo "data de pagamento:" . $this->dataDePagamento->format('Y-m-d') . PHP_EOL;
    }

    public function consultarValorPagamento(): float
    {
        $hoje = new \DateTime();

        $diasDeAtraso = 0;

        if($hoje >  $this->dataDePagamento) {
            $diasDeAtraso = $this->dataDePagamento->diff($hoje);
        }

        if($diasDeAtraso > 0) {
            $novoValor = $this->valor * 1.2;
            echo "valor a ser pago: " . $novoValor . PHP_EOL;
            return $novoValor;
        }

        echo "valor a ser pago: " . $this->valor . PHP_EOL;
        return $this->valor;
    }
}