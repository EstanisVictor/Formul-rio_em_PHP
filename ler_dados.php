<?php
print "Dados: <br> <br>";

$file = fopen ('meuarquivo.txt', 'r');

while(!feof($file)){

    $linha = fgets($file, 1024);
    $dadosLidos =  explode("-",$linha);

    if($dadosLidos[0] == null){
        break;
    }

    echo "\n";
    echo "Nome:" ,$dadosLidos[0] , "<br><br>";
    echo "Email: " , $dadosLidos[1] , "<br><br>";
    echo "Sexo: " , $dadosLidos[2] , "<br><br>";
    echo "Escolaridade: " , $dadosLidos[3] , "<br><br>";
    echo "Data e Hora: " , $dadosLidos[4] , "<br><br>";
    echo "<h1><hr>"; 
}