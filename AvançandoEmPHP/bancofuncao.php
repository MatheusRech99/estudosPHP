<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}
function sacar(array $conta, float $valorSaque): array
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem('voce nao pode sacar dessa conta');
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}
function depositar(array $conta, float $valorDeposito): array
{
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem('Depositos precisam ser positivos');
    }
    return $conta;
};

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

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] .  " " . "R$" . $conta['saldo'] . ",00");
}


// subrotina executa tudo que é esperado dentro dela mesma, porem nao retorna nenhum valor
// ja uma funçao ela executa e retorna um valor

// boa pratica informar o tipo do dado a receber e retornar