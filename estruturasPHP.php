<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Atribuir um valor qualquer a uma variável que represente salário. 
Se o salário for menor que 400 escrever: Você é estagiário, se ficar entre 400 e 800 escrever Programador JR,
na faixa seguinte (até 1500) escrever Programador Pleno e na última faixa escrever Programador Sênior.
A estrutura do html deve ser basicamente a seguinte:

<h1>Lista 1 – Exercício 1</h1>
<div></div>
Escrever o texto dentro da div.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
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
        <h1>Lista 1 – Exercício 1</h1>
        <div><?php echo $texto?></div>
       
    </body>
</html>
