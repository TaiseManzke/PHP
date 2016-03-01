<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Criar um programa que atribua a uma variável chamada administrador um valor boleano (true ou false). 
Em outra variável atribua um nome do administrador e em outra o nome de uma empresa.
	Retornar a seguinte mensagem em uma div, de acordo com o valor da variável administrador:
	XXXXX, você é administrador da empresa XXXXX.
	Ou
	XXXXX, você não é administrador da empresa XXXXX.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Lista 1 - Exercício 4</h3>
        <?php
        $nomeAdm = "Fulano";
        $nomeEmp = "Nadas";
        $administrador = false;
        
        if($administrador == true){
            $mensagem = $nomeAdm . ", você é administrador da empresa " . $nomeEmp;
        }
        else{
            $mensagem = $nomeAdm . ", você não é administrador da empresa " . $nomeEmp;
        }
        ?>
        <div><?php echo $mensagem ?></div>
    </body>
</html>
