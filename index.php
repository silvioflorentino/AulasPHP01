<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    <h1>Variáveis</h1>
<?php
echo("Hoje é um grande Dia...Estou aprendendo a linguagem de programação PHP");

$nomeCompleto = "Silvio Florentino";

echo("<br> Nome: $nomeCompleto <br>");

$carro = "Mercedez";

print("Carro: $carro");

echo("<br>O meu carro é uma $carro. Esta $carro é muito veloz. Gosto dos carros da $carro");

$valor01 = 1120;
$valor02 = 234;

$soma = $valor01 + $valor02;
$subtrair = $valor01 - $valor02;
$divisao = $valor01 / $valor02;
$multiplicacao = $valor01 * $valor02;

echo("<p> Os valores $valor01 e $valor02 são:</p>");

echo("<p>Quando somandos são: $soma</p>");
echo("<p>Quando subtraidos são: $subtrair</p>");
echo("<p>Quando dividios temos: $divisao </p>");
echo("<p>Quando multiplicado temos: $multiplicacao</p>"); 

?>
<hr>
<?php
$idade = 10;

if($idade <= 12){
echo("<p>Criança</p>");
}elseif($idade <= 20){
    echo("<p>Jovem</p>");
}else{
    echo("<p>Adulta</p>");
}

$nota = 4;

if($nota <3){
    echo("Reprovado");
}elseif($nota >=3 && $nota <=5 ){
    echo("Recuperação");
}else{
    echo("Aprovado");
}

$heroe = "Cyborg";

switch($heroe){
    case "Superman":
        echo("<p>Ele sabe voar e ver sobre as paredes</p>");
        break;
    case "Batman" :
        echo("<p>Morcego de Godam City</p>");
        break;
    case "Mulher Maravilha":
        echo("<p>Ela é uma Deusa Amazonas</p>");
        break;
    case "Cyborg":
        echo("<p>Homem com corpo de robo</p>");
        break;
    default:
        echo("<p>Este personagem não é da DC.</p>");
        break;
}

?>
<hr>
<h1>For -> Função de loop</h1>
<?php 
for($n=10;$n<10;$n++){
 echo("O número é for $n</br>");
}

$n=10;
while($n<10){
    echo("O número é  while$n</br>");
    $n++;
}

$n=10;
do{
    echo("O número é do while$n</br>");
    $n++;
}while($n<10);
?>
<br>
</body>
</html>