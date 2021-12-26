<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лобанова Д. В.</title>
</head>
<body>
<p>  СР№1 Лобанова Д. В. Вариант 11
<p>
    <?php
    echo('Выражение: ((abs (c-(d / 2))) * (b - 7)) / (2 * a - 1) <br>');
    $a = rand(-20, 20);
    $b = rand(-20, 20);
    $c = rand(-20, 20);
    $d = rand(-20, 20);
    print "a = $a <br>";
    print "b = $b <br>";
    print "c = $c <br>";
    print "d = $d <br>";
    echo("Выражение: ((abs ($c-($d / 2))) * ($b - 7)) / (2 * $a - 1) <br>");
    $result = ((abs($c - ($d / 2))) * ($b - 7)) / (2 * $a - 1);
    echo('Результат:  ' . $result . ' - тип -' . gettype($result));
    ?>
<p>  СР№1 Лобанова Д. В. Вариант 15
<p>
    <?php
    echo('Выражение: ((12/c + 73 - d * d) / ( a * a - 2 * a)) <br>');
    $a = rand(-20, 20);
    $c = rand(-20, 20);
    $d = rand(-20, 20);
    print "a = $a <br>";
    print "c = $c <br>";
    print "d = $d <br>";
    if ($a == 0 or $a == 2 or $c == 0) {
        echo $result = " Результат: Нет такого значения <br>";
    } else {
        $result = ((12 / $c + 73 - $d * $d) / ($a * $a - 2 * $a));
        echo("Выражение: ((12/c + 73 - d * d) / ( a * a - 2 * a)) <br>");
        echo('Результат:  ' . $result . ' - тип -' . gettype($result));
    }
    ?>
</body>
</html>