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
                "Squadra di casa" => "Looney Tunes", 
                "Squadra ospite"=>"Monstars", 
                "Punteggio casa"=>"78", 
                "Punteggio ospite"=>"77"
            ),
            array(
                "Squadra di casa" => "Atomic Superman", 
                "Squadra ospite" => "Cascade Jaguars", 
                "Punteggio casa" => "65", 
                "Punteggio ospite" => "52"
            ),
            array(
                "Squadra di casa" => "Basin City Blues", 
                "Squadra ospite" => "Charlotte Banshees", 
                "Punteggio casa" => "99", 
                "Punteggio ospite" => "92"
            ),
        );

    ?>

    
    <?php 

        for ($i = 0; $i < count($matches); $i++) {
            $number = 0;
            $number = $i + 1;
            echo "<h2>Match $number</h2>";
            echo "<p><strong>".$matches[$i]["Squadra di casa"]." - ".$matches[$i]["Squadra ospite"]." | ".$matches[$i]["Punteggio casa"]." - ".$matches[$i]["Punteggio ospite"]."</strong></p>";
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