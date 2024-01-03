<html>
    <head>
        <meta charset="utf-8">
        <title>Cálculo de imposto PHP</title>
    </head>

    <?php

        function calcularIRPF($salario){
            $imposto = 0;
            if($salario <= 1903.98){
                $imposto = 0;
            } else if($salario >= 1903.99 && $salario <= 2826.65){
                $imposto = ($salario * 7.5) /100;
            }else if($salario >= 2826.66 && $salario <= 3751.05){
                $imposto = ($salario * 15) /100;
            }else if($salario >= 3571.06 && $salario <= 4664.68){
                $imposto = ($salario * 22.5) /100;
            }else if($salario > 4664.68){
                $imposto = ($salario * 27) /100;
            }
            return $imposto;
        }

        //Chama/imprime o retorno da função passando o salário por parâmetro echo calcularIRPF(valor do salário)

        echo calcularIRPF(1904);
    ?>
</html>