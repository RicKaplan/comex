<?php

class Produto
{
    private string $nome;
    private  float $preco;

    private float $qtdEstoque;

    public function __construct(string $nome, float $preco, float $qtdEstoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->qtdEstoque = $qtdEstoque;

    }

    // métodos setters - métodos que inicializam valores

    public function atualizarNome(string $nome)
    {
        $this->nome = $nome;

    }

    public function atualizarPreco(float $preco)
    {
        if ($preco <= 0) {
            echo "Preco precisa ser positivo".PHP_EOL;
            return;
        }
        $this->preco = $preco;
    }

    public function atualizarQtdEstoque(float $qtdEstoque)
    {
        if ($qtdEstoque <= 0) {
            echo "Quantidade disponivel precisa ser positiva".PHP_EOL;
            return;
        }
        $this->qtdEstoque = $qtdEstoque;
    }

    // getters - métodos que recuperam valores

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarPreco(): float
    {
        return $this->preco;
    }

    public function recuperarQtdEstoque(): float
    {
        return $this->qtdEstoque;
    }

    public function reduzirEstoque(float $qtdAReduzir): void
    {
        if ($qtdAReduzir > $this->qtdEstoque) {
            echo "Quantidade indisponível".PHP_EOL;
            return;
        }

        $this->qtdEstoque -= $qtdAReduzir;
    }

    public function incrementarEtoque(float $valorAIncrementar): void
    {
        if ($$valorAIncrementar < 0) {
            echo "Valor a incrementar precisa ser positivo".PHP_EOL;
            return;
        }
        $this->qtdEstoque += $$valorAIncrementar;
    }

    public function listarDisponivel(): void
    {
            echo "Quantidade disponível = " . number_format($this->qtdEstoque, 2, ',', '.').PHP_EOL;
    }

    public function listarValorEstoque(): void
    {
        echo "Valor do inventário de estoque é : " . number_format($this->qtdEstoque * $this->preco, 2, ',', '.').PHP_EOL;
    }
}
