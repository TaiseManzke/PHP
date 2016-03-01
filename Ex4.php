<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Atribuir a uma variável um número qualquer. Escrever, um abaixo do outro, os  10 números que seguem ao atribuído.
* adaptar  o exemplo para exibir os 10 próximos números pares.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Lista 1 - Exercício 4</h3>
        <?php
        $x = 5;
        
        for($y = $x+1; $y<=($x+10);$y++){
            echo "<br>" . $y . "</br>";
        }
        
        if($x%2 == 0){
            for($z = $x+2; $z<=($x+20);$z=$z+2){
                echo "<br>" . $z . "</br>";
            }
        }
        else{
            for($z = $x+1; $z<=($x+20);$z=$z+2){
                echo "<br>" . $z . "</br>";
            }
        }
        ?>
        
        
    </body>
</html>
