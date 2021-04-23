<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- JSnack 1 -->

    <h1>JSnack 1</h1>

    <?php

        $matches = array(
            array(
                "squadra_di_casa" => "Looney Tunes", 
                "squadra_ospite"=>"Monstars", 
                "punteggio_casa"=>"78", 
                "punteggio_ospite"=>"77"
            ),
            array(
                "squadra_di_casa" => "Atomic Superman", 
                "squadra_ospite" => "Cascade Jaguars", 
                "punteggio_casa" => "65", 
                "punteggio_ospite" => "52"
            ),
            array(
                "squadra_di_casa" => "Basin City Blues", 
                "squadra_ospite" => "Charlotte Banshees", 
                "punteggio_casa" => "99", 
                "punteggio_ospite" => "92"
            ),
        );

    ?>

    
    <?php 

        for ($i = 0; $i < count($matches); $i++) {
            $number = 0;
            $number = $i + 1;
            echo "<h2>Match $number</h2>";
            echo "<p><strong>".$matches[$i]["squadra_di_casa"]." - ".$matches[$i]["squadra_ospite"]." | ".$matches[$i]["punteggio_casa"]." - ".$matches[$i]["punteggio_ospite"]."</strong></p>";
        }
    ?>

    <!-- JSnack 2 -->
    
    <h1>JSnack 2</h1>
    <h2>Fai il Login inserendo i dati nell'URL</h2>
    <p>Esempio:<strong>?name=valore&mail=valore&age=intero</strong></p>

    <?php
    
        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];

        if(strlen($name)>3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age))
            echo "<h1>Accesso Riuscito</h1>";
        else
            echo "<h1>Accesso Negato</h1>"
    
    ?>
</body>
</html>