<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        label, input {
            margin: 5px 0;
        }
        input[type="number"] {
            margin-left: 5px;
            width: 120px;
        }
        .roots {
            font-size: 16pt;
        }
    </style>
</head>
<body>
    <h1>Решение квадратного уравнения</h1>
    <form action="index.php" method="post">
        <label>Коэффициент A</label> 
        <input type="number" name="a" required="" value="1" />
<br>
        <label>Коэффициент B</label> 
        <input type="number" name="b" required="" value="-3" />
<br>
        <label>Коэффициент C</label>
        <input type="number" name="c" required="" value="2" /> 
<br>        
        <input type="submit" value="Решить" /></p>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = floatval($_POST['c']);

        $d = $b * $b - 4 * $a * $c; // дискриминант
        
        if ($d > 0) {
            $x1 = (-$b + sqrt($d)) / (2 * $a);
            $x2 = (-$b - sqrt($d)) / (2 * $a);

            echo "<h3>Корни уравнения</h3>";

            echo "<div class='roots'>x1 = $x1 <br>";
            echo "x2 = $x2 </div>";
        } elseif ($d == 0) {
            $x = -$b / (2 * $a);

            echo "<h3>Уравнение имеет корень:</h3>";
            echo "x = $x <br>";
        } else {
            echo "<p>Уравнение не имеет действительных корней</p>";
        }
    }
?>
</body>
</html>