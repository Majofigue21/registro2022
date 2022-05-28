<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de notas</title>
</head>
<body>
    <h1>Calculo de notas</h1>
    <form action="index.php" method="POST">
    <table border="1">
        <tr>
            <th>Laboratorio 1:</th>
            <td><input type="number" name="n1" id="n1"></td>
        </tr>
        <tr>
            <th>Laboratorio 2:</th>
            <td><input type="number" name="n2" id="n2"></td>
        </tr>
        <tr>
            <th>Parcial:</th>
            <td><input type="number" name="n3" id="n3"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Calcular">
                <input type="reset" value="Borrar">
            </td>
        </tr>
    </table>
    </form>
    <?php
    if (isset($_POST["n1"])) {
        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        $n3=$_POST["n3"];
        $promedio=$n1*0.25+$n2*0.25+$n3*0.50;
        echo "<h2>El promedio es:$promedio</h2>";
    }
    ?>
</body>
</html>