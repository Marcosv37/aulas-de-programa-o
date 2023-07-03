 primeiro php

<?php
$nome="marcos";
$escola = "Grau técnico";
$nota1 = 10;
$nota2 = 8;
$nota3 = 5;
$nota4 = 9;
$soma = $nota1+$nota2+$nota3+$nota4;
$media = ($nota1+$nota2+$nota3+$nota4)/4;
if($media>=7){
	echo "sua média é ".$media. " Voçê estara Aprovado"
	    ;
}elseif($media>=6){
	echo "Ficou em Recuperação";
}else{
	echo "sua média é ".$media.  "Voçe foi 
	Reprovado";
}
  segundo php

$usuario ="marcos";
$senhausuario = "1239";
$nome = "marcos";
$senha ="123";
if ($nome == $usuario && $senhausuario == $senha)
	echo "seja bem vindo";
else{
	echo "usuario ou senha incorreta";
}

segundo caso

$peso =92;
$altura =1.70;
$imc = $peso /($altura*$altura);
if($imc<=24.5){
  echo "peso normal";
}elseif($imc<=29.9){
	echo "sobrepeso";
}
elseif($imc<=39.9){
		echo "acima do peso";
	}
terceiro caso


$palavra= "anna";
$palavrainvertida = strrev($palavra);
if ($palavra==$palavrainvertida) {
echo "a palavra e um palindromo" ; }
else {
echo "a palavra não é um palindromo" ; }

  quarto caso                                                             
$valor=1000;
$parcelas=12;
$taxa=1.70/100;
$valordaparcelas=$valor*$parcelas*$taxa ;
echo  "o valor da parcelas é: '$valordaparcelas'";
 
  quinto caso

$quantidadeestoque =10;
if($quantidadeestoque >5){
echo "Produto disponível em estoque. Quantidade: " . $quantidadeestoque;
} elseif($quantidadeestoque > 0) 
echo "produto em estoque baixo. quantidade: " . $quantidadeestoque;
else{ 
	echo "Produto esgotado. Por favor, aguarde a reposição do estoque.";
}	

 quarto php 

Primeiro caso:
&lt;?php
$numero = 1;

while ($numero &lt;= 10) {
echo $numero . &quot;\n&quot;;
$numero++;
}

Segundo caso:
&lt;?php
$numero = 10;

while ($numero &gt;= 1) {
echo $numero . &quot;\n&quot;;
$numero--;
}

Terceiro caso:
&lt;?php
echo &quot;Digite um número positivo: &quot;;
$num = 10;

if ($num &lt;= 0) {
echo &quot;O número deve ser positivo.&quot;;
} else {
$contador = 2;
while ($contador &lt;= $num) {
if ($contador % 2 == 0) {
echo $contador . &quot; &quot;;
}
$contador++;
}
Quarto caso:
&lt;?php
echo &quot;Digite um número: &quot; ;
$num = 10;
$sum = 5;

while ($num &gt; 0) {
$digit = $num % 10;
$sum += $digit;
$num = intval($num / 10);
}

echo &quot;A soma dos dígitos é: &quot; . $sum;
?&gt;

For
Primeiro caso:
&lt;?php
for ($numero = 1; $numero &lt;= 10; $numero++) {
echo $numero;
}

Segundo caso:
&lt;?php
echo &quot;Digite um número:&quot;;
$num = 100;

echo &quot;Tabuada de multiplicação do número &quot; . $num . &quot;:\n&quot;;
for ($i = 1; $i &lt;= 10; $i++) {
$resultado = $num * $i;
echo $num . &quot; x &quot; . $i . &quot; = &quot; . $resultado . &quot;\n&quot;;
}
Terceiro caso :
&lt;?php
echo &quot;Números primos de 1 a 100:\n&quot;;

for ($num = 2; $num &lt;= 100; $num++) {
$isPrime = true;

for ($i = 2; $i &lt; $num; $i++) {
if ($num % $i == 0) {
$isPrime = false;
break;
}
}
if ($isPrime) {
echo $num . &quot; &quot;;
}
}
Quarto caso:
&lt;?php
echo &quot;Digite um número: &quot;;
$num = 100;
$fatorial = 1;

for ($i = 1; $i &lt;= $num; $i++) {
$fatorial *= $i;
}

echo &quot;O fatorial de &quot; . $num . &quot; é: &quot; . $fatorial;

quinto php 

$nota1=7;
$nota2=6;
$nota3=5;
$nota4=4;
$media=intval( ($nota1+ $nota2+$nota3+ $nota4)/4);
switch ($media){
	case 10:
		echo "você foi aprovado";
		break;
	case 9:
		echo "você foi aprovado";
		break;
	case 8:
		echo "você foi aprovado";
		break;
	case 7:
		echo "você foi aprovado";
		break;
	case 6:
		echo "você está em recuperação";
		break;
    case 4:
	    echo "você foi reprovado";
    break; 
     case 3:
	    echo "você foi reprovado";
    break; 
     case 2:
	    echo "você foi reprovado";
    break; 
     case 1:
	    echo "você foi reprovado";
    break; 
	case 5:
	    echo "você está em dependencia";
	    break;
	    default;
	    echo "erro";
}
	

    segundo caso

$idade=18;
switch ($idade){
	case 16:
		echo "você pode entra";
		break;
	case 18:
		echo "você pode ficar com a garota";
		break;
	case 61:
		echo "você so vai poder olhar";
		break;
		default;
		echo "mostra a indentidade na bancada";
}

    terceiro caso

$alunos = array ("marcos","filipe","cladio","carlos","jorge");
  echo $alunos[0]."\n".$alunos[1]."\n".$alunos[2]."\n".$alunos[3]."\n".$alunos[4];


  quarto caso


$alunos = "marcos";
$notas= array ("10","10","10","10");
$media=($notas [0]+$notas[1]+$notas[2]+$notas[3])/4;
 echo "sua media é ". $media;
 switch ($media){
case 10:
		echo " você foi aprovado ";
		break;
	case 9:
		echo " você foi aprovado ";
		break;
	case 8:
		echo " você foi aprovado";
		break;
	case 7:
		echo " você foi aprovado ";
		break;
	case 6:
		echo " você está em recuperação ";
		break;
    case 4:
	    echo " você foi reprovado ";
    break; 
     case 3:
	    echo "você foi reprovado ";
    break; 
     case 2:
	    echo "você foi reprovado ";
    break; 
     case 1:
	    echo " você foi reprovado ";
    break; 
	case 5:
	    echo " você está em dependencia ";
	    break;
	    default;
	    echo "erro";
}