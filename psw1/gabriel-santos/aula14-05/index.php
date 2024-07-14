<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array -> Laços</title>
</head>

<body>
    <h1>Array e Laços</h1>
    <h2>Exemplo 01</h2>
    <pre>
    <?php

    $a1 = array("Antonio", "Luis", "José", "joão");
    foreach ($a1 as $x) {
        echo "<p>Nome: $x</p>";
    }
    // var_dump($a1)
    ?>
    </pre>
    <h2>Array</h2>
    <pre>
        <?php
        $a2 = array(10, 9, 8, 7);
        echo "<p>" . $a2[0] . "</p>";
        ?>
    </pre>
    <h2>Impressão [For:]</h2>
    <pre>
        <?php
        for ($i = 0; $i < sizeof($a2); $i++) {
            echo "<p>" . $a2[$i] . "</p>";
        }

        ?>

    </pre>
    <h2>Impressão [Foreach:]</h2>
    <pre>
        <?php
        foreach ($a2 as $x) {
            echo "<p>" . $x . "</p>";
        }

        ?>

    </pre>
    <h2>Array: Definição Explicita (Com Chave)</h2>
    <pre>
        <?php
        $var = array(
            "Maria" => 25,
            "Joao" => 44,
            "Jose" => 12,
            "Neusa" => 73,
        );
        foreach ($var as $x) {
            echo "<p>" . $x . "</p>";
        }
        ?>
    </pre>
    <h2>Foreach com Chave Valor</h2>
    <pre>
        <?php
        foreach ($var as $x => $y) {
            echo "<p>$x Tem $y Anos </p>";
        }
        ?>
    </pre>
    <h2>Array Multidimensional</h2>
    <pre>
        <?php
        $alunos = array(
            "maria" => array(
                "bairro" => "rebouças",
                "endereço" => "rua chile 1020",
            ),

            "jose" => array(
                "bairro" => "ipanema",
                "endereço" => "rua china 3020",
            ),

            "zeca" => array(
                "bairro" => "santo antonio",
                "endereço" => "hermes fonseca 242",
            ),
        );
        print_r($alunos);

        echo "<p>Maria Mora no Bairro: " . $alunos["maria"]["bairro"] . "<br> e no Endereço: " . $alunos["maria"]["endereço"] . "</p>";
        echo "<p>Zeca Mora no Bairro: " . $alunos["zeca"]["bairro"] . "<br> e no Endereço: " . $alunos["zeca"]["endereço"] . "</p>";


        foreach ($alunos as $chave => $chave2) {
            echo "<p>$chave</p>";
            foreach ($chave2 as $item) {
                echo "<p>$item</p>";
            }
        }

        ?>

    </pre>
</body>

</html>