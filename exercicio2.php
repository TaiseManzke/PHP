<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Adaptar o exercício anterior, atribuindo em uma variável o nome do funcionário. 
Quando escrever o resultado colocar o nome do funcionário junto.
Exemplo:
	Marcelo, você é programador.

* colocar o nome do funcionário em negrito.


-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $nome = "Taise";
        $salario = 1345.00;
        
        if ($salario < 400){
            $texto = "Você é estagiário";
        }
        else{
            if($salario <= 800){
               $texto = "Você é um Programador Jr";
            }
            else{
                if($salario <= 1500){
                    $texto = "Você é um Programador Pleno";
                }
                else{
                    $texto = "Você é um Programador Sênior";
                }
            }
        }
        
        ?>
        <h1>Lista 1 – Exercício 2</h1>
        <div><?php echo $nome . ', ' .$texto?></div>
        
    </body>
</html>
