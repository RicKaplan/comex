<?php
require_once 'funcoes.php';

$produtos = [
    1 => [
        'descricao' => 'Produto 1',
        'preco' => 101.01,
        'qtd' => 101
    ],
    2 => [
        'descricao' => 'Produto 2',
        'preco' => 102.02,
        'qtd' => 102
    ],
    3 => [
        'descricao' => 'Produto 3',
        'preco' => 103.03,
        'qtd' => 103
    ],
    4 => [
        'descricao' => 'Produto 4',
        'preco' => 104.04,
        'qtd' => 104
    ],
    5 => [
        'descricao' => 'Produto 5',
        'preco' => 105.05,
        'qtd' => 105
    ],
    6 => [
        'descricao' => 'Produto 6',
        'preco' => 106.06,
        'qtd' => 106
    ],
    7 => [
        'descricao' => 'Produto 7',
        'preco' => 107.07,
        'qtd' => 107
    ],
    8 => [
        'descricao' => 'Produto 8',
        'preco' => 108.08,
        'qtd' => 108
    ],
    9 => [
        'descricao' => 'Produto 9',
        'preco' => 109.09,
        'qtd' => 109
    ],
    10 => [
        'descricao' => 'Produto 10',
        'preco' => 110.10,
        'qtd' => 110
    ]
];

foreach ($produtos as $codigo => $produto) {
    exibeMensagem("Código: " . $codigo . " Descrição: " . $produto['descricao'] . " Preço: " . $produto['preco'] . " Quant.: " . $produto['qtd']);
}
// subtracao de qtd
$produtos[1] = subtrair($produtos[1], 11);
$produtos[2] = subtrair($produtos[2], 12);
$produtos[3] = subtrair($produtos[3], 13);
$produtos[4] = subtrair($produtos[4], 14);
$produtos[5] = subtrair($produtos[5], 15);
$produtos[6] = subtrair($produtos[6], 16);
$produtos[7] = subtrair($produtos[7], 17);
$produtos[8] = subtrair($produtos[8], 18);
$produtos[9] = subtrair($produtos[9], 19);
$produtos[10] = subtrair($produtos[10], 20);

foreach ($produtos as $codigo => $produto) {
    exibeMensagem("Subtração ==> Código: " . $codigo . " Descrição: " . $produto['descricao'] . " Preço: " . $produto['preco'] . " Quant.: " . $produto['qtd']);
}

// adicao de qtd
$produtos[1] = adicionar($produtos[1], 11);
$produtos[2] = adicionar($produtos[2], 12);
$produtos[3] = adicionar($produtos[3], 13);
$produtos[4] = adicionar($produtos[4], 14);
$produtos[5] = adicionar($produtos[5], 15);
$produtos[6] = adicionar($produtos[6], 16);
$produtos[7] = adicionar($produtos[7], 17);
$produtos[8] = adicionar($produtos[8], 18);
$produtos[9] = adicionar($produtos[9], 19);
$produtos[10] = adicionar($produtos[10], 20);

foreach ($produtos as $codigo => $produto) {
    exibeMensagem("Adição ==> Código: " . $codigo . " Descrição: " . $produto['descricao'] . " Preço: " . $produto['preco'] . " Quant.: " . $produto['qtd']);
}

echo "Disponível" . PHP_EOL;

foreach ($produtos as $codigo => $produto) {
    exibeDisponivel($produtos[$codigo]);
}
