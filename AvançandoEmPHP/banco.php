<?php

$contasCorrentes = [
    '564.022.852-63' => [
        'titular' => 'Matheus',
        'saldo' => 2500
    ],
    '654.035.589-53' => [
        'titular' => 'Magui',
        'saldo' => 300
    ],
    '460.152.233-68' => [
        'titular' => 'Gelasio',
        'saldo' => 250000
    ]
];

$contasCorrentes['564.022.852-63']['saldo'] -= 500;
if (500 > ['654.035.589-53']['saldo']) {
    echo 'vai dar nao' . PHP_EOL;
} else {
    $contasCorrentes['654.035.589-53']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] .  " " . "R$" . $conta['saldo'] . ",00" . PHP_EOL;
}
