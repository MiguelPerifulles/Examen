<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        //INTRODUCE AQUÍ TU CÓDIGO
        $paquetes = $_POST["paquetes"];
    
        $ancho = $_POST["ancho"];
        $largo = $_POST["largo"];
        $alto = $_POST["alto"];
    
        $peso = $_POST["peso"];

        $zona = $_POST["zona"];
        $trans = $_POST["trans"];
    
        $tamanototal = $ancho * $largo * $alto;

        if ($tamanototal < 0.5){
            $preta = $tamanototal * 50;
        } 
        elseif ($tamanototal < 1){
            $preta = $tamanototal * 75;
        } 
        else {
            $preta = $tamanototal * 100;
        }



        if ($peso < 5){
            $pluspeso = $preta;
        } 
        elseif ($peso < 10){
            $pluspeso = $preta + $preta75 * 0.25;
        } 
        elseif ($peso < 15) {
            $pluspeso = $preta + $preta * 0.5;
        }
        else{
            echo "TU PAQUETE PESA DEMASIADO";
            exit();
        }       

        if ($zona == "P"){
            $pluszona = $pluspeso;
        } 
        elseif ($zona == "B"){
            if ($trans == "A") {
                $pluszona = $pluspeso * 0.1 + $pluspeso;   
            }
            else {
                $pluszona = $pluspeso;
            }
        }
        else {
            $pluszona = $pluspeso * 0.1 + $pluspeso; 
        }

        $pretot = $pluszona * $paquetes;

    echo "El tamaño total del paquete es de $tamanototal m3 y cuesta $pretot"."€";

    ?>
    
    <form method="POST" action="">
        <br><br>
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="" min=0>
        <br><br>
    
        <label for="tamano">TAMAÑO (Ancho, largo y alto en metros):</label>
        <input type="number" name="ancho" value="">
        <input type="number" name="largo" value="">
        <input type="number" name="alto" value="">
        <br><br>
    
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <br><br>

        <label for="zona">ZONA:</label>
        <select name="zona">
        <option value="P">Peninsula</option>
        <option value="B">Baleares</option>
        <option value="C">Canarias</option>
        </select>
        <br><br>

        <label for="trans">Tipo de transporte:</label>
        <select name="trans">
        <option value="A">Aereo</option>
        <option value="M">Maritimo</option>
        </select>
    
        <br><br>

        <input type="submit" value="Calcular">
    </form>

</html>