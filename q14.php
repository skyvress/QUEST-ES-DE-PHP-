<?php
/*Escreva um programa que calcule o salário semanal de um trabalhador. As entradas são o número de horas trabalhadas na semana e o valor da hora. Até 40 h/semana não se acrescenta nenhum adicional. Acima de 40h e até 60h há um bônus de 50% para essas horas adicionais. Acima de 60h há um bônus de 100% para essas horas adicionais. */

$hr= 90;
$vh= 10; 

if ($hr >0 and $hr <=40 ){
    $s1= ($hr * $vh);
    echo "Seu sálario é igual $s1 pois você trabalhou ate 40 horas, mas não acima disso , ganhando seu sálario normal ";
}

if ($hr > 40 and $hr <= 60 ){
    $s2 = ((($vh * $hr )*50)/100);
    echo "Seu sálario é igual a $s2 porque voce trabalhou acima de 40 horas, mas, não acima de 60 horas.  ";
}

if ($hr > 60 ){
    $s3 = (($vh * $hr )*100);
    echo "Parabéns , CLT , você trabalhou acima de 60 horas por causa de um sistema capitalista que menospreza as pessoas, as reduzindo a máquinario, mão de obra e escravidão. Descanse, mas, lute pelos seus direitos. Se tudo a classe trabalhadora produz, a ela tudo pertence. Bom burnout. Seu trabalho árduo foi reduzido a menos que seu valor, ou seja, $s3";
}
?>