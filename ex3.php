<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Criar três variáveis representando:
•	nome de um país;
•	capital;
•	Continente.
Escrever no html essas informações da seguinte forma:
<div>XXXXX é um do continente XXXXX. Sua capital é XXXXX</div>.
Trocar os XXXXX pelo valor das variáveis.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $pais = "Paquistão";
        $capital = "Islamabad";
        $continente = "asiático";
        
        
        ?>
        <h3>Lista 1 - Exercício 3</h3>
        <div><?php echo $pais . " é um país do continente " . $continente .". Sua capital é " . $capital ?></div>
    </body>
</html>
