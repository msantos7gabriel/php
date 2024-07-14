<?php

require_once('./class/aluno.php');
require_once('./class/professor.php');

$var = array("opa", 2, 3, 4);

foreach ($var as $teste) {

    echo "$teste <br>";
};
$var2 = array(0 => 5, 6 => 8, 9 => 15);

echo "<br>";

$var2[6] = "20";
echo "$var2[6]<br>";

$var2[1] = "salve";
print_r($var2);

foreach ($var2 as $teste1) {
    $r = random_int(0, 255);
    $g = random_int(0, 255);
    $b = random_int(0, 255);
    echo "<p style=\"background-color:rgb($r,$g,$b);\">$teste1 ❤️</p>";
};

$aluno[] = new Aluno('Gabriel', 17, "Rua Oscar Alho, 234", "Guanambi", "BA", "000.000.000-01");
$aluno[] = new Aluno('Bruno', 17, "Rua Oscar Alho, 600", "Montalvânia", "MG", "000.000.000-02");
$professor = new Professor("Fabio", 30, "Rua Lima Mei 420", "Guanambi", "BA", "000.000.000-69");

for ($i = 0; $i < sizeof($aluno); $i++) {
    $aluno[$i]->getInfo();
    echo "<br>";
}
$professor->getInfo();
