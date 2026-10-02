<?php
/*Uma raposa está correndo por uma floresta e precisa atravessar uma área de 100 metros. Para correr com segurança, sua velocidade deve estar entre 10 km/h e 20 km/h.
Entretanto:
se estiver cansada, sua velocidade máxima é de 15 km/h;
se estiver chovendo, ela não pode correr a mais de 12 km/h.
O programa deve verificar se a velocidade da raposa está adequada às condições.
*/

$cansada=true;
$bem=false;
$chuva=false;
$sol= true ;
$velocidade= 16;

if ($velocidade >= 10 and $velocidade <= 20){
    $ok=true;
}

else {
    $ok= false;
}

if ($bem == true and $cansada == false and $ok=true){
    echo "você pode correr pela floresta normalmente";
}
if ($cansada == true and $bem == false and $velocidade>= 15 and $ok=true){
    echo "você pode correr ate 12km por hora";
    $can=true;
}

if ($chuva== false and $sol == true and $ok=true and $can=false){
    echo "pode correr normalmente veyrrr";

}

if ($chuva == true and $sol == false and $ok=true){
    echo "pode correr ate 15km/h";
}