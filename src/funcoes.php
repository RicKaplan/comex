<?php

function exibeMensagem(string $mensagem): void
{
    echo $mensagem . PHP_EOL;
}

function subtrair(array $produto, float $qtdASubtrair): array
{
    if ($qtdASubtrair > $produto['qtd']) {
        exibeMensagem("Você não pode subtrair esta quantidade");
    } else {
        $produto['qtd'] -= $qtdASubtrair;
    }

    return $produto;
}

function adicionar(array $produto, float $valorAAdicionar): array
{
    if ($valorAAdicionar > 0) {
        $produto['qtd'] += $valorAAdicionar;
    } else {
        exibeMensagem("Adições precisam ser positivas!");
    }

    return $produto;
}
function exibeDisponivel(array $produto) {
       ['descricao' => $descricao, 'qtd' => $qtd] = $produto;
       echo "$descricao Quantidade: $qtd" . PHP_EOL;
}