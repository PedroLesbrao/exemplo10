<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
    <h1>CT Desenvolvimento de Sistemas Back-End</h1>
    <div id="container">
        <?php
        echo "funções matemáticas do PHP<br><br>";
        
        $num1 = 6;
        $num2 = -3;
        $num3 = 2;
        $num4 = 81;
        $num5 = 1.1;
        $num6 = 1.4;
        $num7 = 1.5;
        $num8 = 1.6;
        $num9 = 1.999;

        echo "O valor absoluto de $num2 é igual a ".abs($num2)."<br>";

        echo "O valor de $num1<sup>$num3</sup> é igual a ".pow($num1,$num3)."<br>";

        echo "O valor da raiz quadrada de $num4 é igual a ".sqrt($num4)."<br>";

        echo "A parte inteira de $num9 é igual a ".intval($num9)."<br>";

        echo "O valor arredondado de $num5  é igual a ".round($num5)."<br>";
        echo "O valor arredondado de $num6  é igual a ".round($num6)."<br>";
        echo "O valor arredondado de $num7  é igual a ".round($num7)."<br>";
        echo "O valor arredondado de $num8  é igual a ".round($num8)."<br>";
        echo "O valor arredondado de $num9  é igual a ".round($num9)."<br>";

        echo "O valor arredondado para cima de $num5  é igual a ".ceil($num5)."<br>";
        echo "O valor arredondado para cima de $num9  é igual a ".ceil($num9)."<br>";

        echo "O valor arredondado para baixo de $num5 é igual a ".floor($num5)."<br>";
        echo "O valor arredondado para baixo de $num9  é igual a ".floor($num9)."<br>";
         ?>
        </div>
    </body>
</html>