<?php

// include 'funcoesbanco.php'; //  inclui um arquivo externo que talvez nao seja essencial para o funcionamento programa
// require 'funcoesbanco.php'; //  inclui um arquivo externo que é obrigatorio para o funcionamento do programa
require_once 'funcoesbanco.php'; //  verifica se o arquivo ja foi importado, caso sim, ele nao repete o import

$contasCorrentes = [
    '564.022.852-63' => [
        'titular' => 'Matheus',
        'saldo' => 800
    ],
    '654.035.589-53' => [
        'titular' => 'Magui',
        'saldo' => 3000
    ],
    '460.152.233-68' => [
        'titular' => 'Gelasio',
        'saldo' => 250000
    ]
];

$contasCorrentes['564.022.852-63'] = sacar($contasCorrentes['564.022.852-63'], 500);

$contasCorrentes['654.035.589-53'] = depositar($contasCorrentes['654.035.589-53'], 1000);

titularMaisculo($contasCorrentes['564.022.852-63']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem("$cpf  $titular $saldo");
}


// subrotina executa tudo que é esperado dentro dela mesma, porem nao retorna nenhum valor
// ja uma funçao ela executa e retorna um valor