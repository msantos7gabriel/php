<?php
function soma_multiplica($x, $y)
{
    return $x / $y * ($x + $y);
}

function potencia($x, $y)
{
    $x = soma_multiplica($x, $y);
    return $x * 2;
}

echo soma_multiplica(10, 20);
echo "<br>" . potencia(10, 2);