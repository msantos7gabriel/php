<?php

$array = [
    "alunos" => [
        [
            'nome' => 'fabio',
            'nota' => random_int(1, 10)
        ],
        [
            'nome' => 'Gabriel',
            'nota' => random_int(1, 10)
        ],
        [
            'nome' => 'Robério Robson',
            'nota' => random_int(1, 10)
        ],
        [
            'nome' => 'Gustavo',
            'nota' => random_int(1, 10)
        ],
        [
            'nome' => 'Joel',
            'nota' => random_int(1, 10)
        ],
        [
            'nome' => 'Bruno',
            'nota' => random_int(1, 10)
        ]
    ]
];

foreach ($array as $alunos) {
    foreach ($alunos as $keys => $x) {
        foreach ($x as $y) {

            if (is_int($y) === true) {
                if ($y < 3) {
                    echo " Nota: $y Status: Reprovado <br>";
                } else {
                    echo "Nota: $y Status: Aprovado <br>";
                }
            } else {
                echo "$y ";
            }
        }
    }
}