<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>

<body>
    <pre>
    <?php
    $array = array(
        "Olá" => "Mundo",
        "Mundo" => "Olá",
    );
    print_r(array_keys($array));
    echo "<p>retorna todas as chaves do array passado como parâmetro</p>";
    print_r(array_values($array));
    echo "<p>retorna todos os valores do array passado como parâmetro</p>";
    echo (array_search("Olá", $array));
    echo "<p>busca pelo valor \"Olá\" no array \$array e retorna a respectiva chave</p>";
    echo "<p>verifica se uma chave ou índice \"Olá\" existe para um array \$array</p>";
    var_dump(array_key_exists("Olá", $array)) . "<br>";
    var_dump(array_key_exists("Oi", $array)) . "<br>";
    echo "<p>Ele retorna 1 para verdadeiro e Null para Falso</p>";
    echo "<p>isset verifica se a variável \$array e \$var foi inicializada</p>";
    echo "<p>Aqui ele verifica \$var e volta um valor nulo</p>";
    var_dump(isset($var));
    echo "<p>Aqui ele verifica \$array e volta \"1\" para verdadeiro</p>";
    var_dump(isset($array));
    echo "<p>destrói a variável \$var</p>";
    unset($var);
    echo "<p>adiciona um ou mais elementos no final do \$array</p>";
    array_push($array, "Estou Aprendendo PHP");
    print_r($array);
    ?>
    </pre>
    <hr>
    <h1>Código da Atividade</h1>
    <hr>
    <pre>
<code>
    $array = array(
        "Olá" => "Mundo",
        "Mundo" => "Olá"
    );
    
    print_r(array_keys($array));
    echo "&lt;p&gt;retorna todas as chaves do array passado como parâmetro&lt;/p&gt;";
    
    print_r(array_values($array));
    echo "&lt;p&gt;retorna todos os valores do array passado como parâmetro&lt;/p&gt;";
    
    echo (array_search("Olá", $array));
    echo "&lt;p&gt;busca pelo valor \"Olá\" no array \$array e retorna a respectiva chave&lt;/p&gt;";
    echo "&lt;p&gt;verifica se uma chave ou índice \"Olá\" existe para um array \$array&lt;/p&gt;";
    
    var_dump(array_key_exists("Olá", $array)) . "&lt;br&gt;";
    var_dump(array_key_exists("Oi", $array)) . "&lt;br&gt;";
    echo "&lt;p&gt;Ele retorna 1 para verdadeiro e Null para Falso&lt;/p&gt;";
    
    echo "&lt;p&gt;isset verifica se a variável \$array e \$var foi inicializada&lt;/p&gt;";
    echo "&lt;p&gt;Aqui ele verifica \$var e volta um valor nulo&lt;/p&gt;";
    
    var_dump(isset($var));
    echo "&lt;p&gt;Aqui ele verifica \$array e volta \"1\" para verdadeiro&lt;/p&gt;";
    var_dump(isset($array));
    
    echo "&lt;p&gt;destrói a variável \$var&lt;/p&gt;";
    unset($var);
    echo &lt;p&gt;adiciona um ou mais elementos no final do \$array&lt;/p&gt;";
    array_push($array, "Estou Aprendendo PHP");
    print_r($array);
    </code>
</pre>
</body>

</html>