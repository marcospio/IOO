<!DOCTYPE html>

<html lang = "pt-br">

    <head>
        <meta charset = "UTF-8" />

    </head>

    <body>
        <?php

            include("cadeira.php");

            $c1 = new Cadeira("Azul", "5.3", "Ferro", "10", "120", true, "0.4", "0.85");
            
            $c2 = new Cadeira("Preto", "2.3", "Plástico", "5", "40", false, "0.4", "0.85");
                    
            $c1->aumentar(0.5);

            echo "<table border = '1'>";
            
            echo "<tr>
                    <th>Cor</th>
                    <th>Peso</th>
                    <th>Material</th>
                    <th>Durabilidade</th>
                    <th>Custo</th>
                    <th>Tamanho</th>
                    <th>Encosto</th>
                    <th>Regulagem Mínima</th>
                    <th>Regulagem Máxima</th>
                </tr>";
              
            echo "<tr>
                    <th>$c1->cor</th>
                    <th>$c1->peso</th>
                    <th>$c1->material</th>
                    <th>$c1->durabilidade</th>
                    <th>$c1->custo</th>
                    <th>$c1->tamanho</th>
                    <th>$c1->encosto</th>
                    <th>$c1->regulagem_minima</th>
                    <th>$c1->regulagem_maxima</th>
                </tr>";



            echo"<br /><br />";


            echo "<tr>
                    <th>Cor</th>
                    <th>Peso</th>
                    <th>Material</th>
                    <th>Durabilidade</th>
                    <th>Custo</th>
                    <th>Tamanho</th>
                    <th>Encosto</th>
                    <th>Regulagem Mínima</th>
                    <th>Regulagem Máxima</th>
                </tr>";
              
            echo "<tr>
                    <th>$c2->cor</th>
                    <th>$c2->peso</th>
                    <th>$c2->material</th>
                    <th>$c2->durabilidade</th>
                    <th>$c2->custo</th>
                    <th>$c2->tamanho</th>
                    <th>$c2->encosto</th>
                    <th>$c2->regulagem_minima</th>
                    <th>$c2->regulagem_maxima</th>
                </tr>";







         




          /*print_r($c1);*/

           /* $c1->cor = "Azul";
            $c1->peso = "5.3";
            $c1->material = "Ferro";
            $c1->durabilidade = "10";
            $c1->custo = "120";
            $c1->tamanho = "0.4";
            $c1->encosto = true;
            $c1->regulagem_minima = "0.4";
            $c1->regulagem_maxima = "0.85";*/

           /* print_r($c1);*/

/*
            $c2 = new Cadeira();

            print_r($c2);

            $c2->cor = "Preto";
            $c2->peso = "2.3";
            $c2->material = "Plástico";
            $c2->durabilidade = "5";
            $c2->custo = "40";
            $c2->tamanho = "0.4";
            $c2->encosto = false;
            $c2->regulagem_minima = "0.4";
            $c2->regulagem_maxima = "0.85";

            print_r($c2);

*/
        ?>

</html>
