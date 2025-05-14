<?php

$nome_aluno = $_POST ['nome_aluno'];
$nota1 = $_POST ['nota01'];
$nota1 = $_POST ['nota02'];
$nota1 = $_POST ['nota03'];

$media = ($nota01+$nota02+$nota03)/3;

echo "Aluno: ".$nome_Aluno;
echo "<br>";
echo "Sua média é: ".$Media;

if ($Media > 5)
{
    echo "Aprovado";
}

elseif ($Media == 5)
{
    echo "<br>";
    echo "Recuperação";
}   

else
{
    echo "<br>";
    echo "Reprovado";
}

?>