<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лобанова Д. В.</title>
</head>
<body>
<p> СР№1 Лобанова Д. В. Вариант 11
<p>
    <?php
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    print "a = $a <br>";
    print "b= $b <br>";
    $z = sin(fun($a, $b)) + sqrt(abs(fun($a, $b)));
    echo("Значение z = " . $z . "<br>");
    function fun($u, $t)
    {
        if ($u > 2) {
            $r = (((($u ** 2) + $t) ** (2 / 3)) * ((sin($t)) ** 2));
        } elseif ($u <= 2) {
            $r = log(abs(($u ** 2) / ($u + $t)));
        }

        return $r;
    }

    ?>
<p> СР№1 Лобанова Д. В. Вариант 16
<p>
    <?php
    $a = rand(-10, 10);
    $b = rand(-10, 10);
    print "a = $a <br>";
    print "b= $b <br>";
    $z = log(abs(func($a / $b, sin($b)))) + func($b, sqrt($a + $b));
    echo("Значение z = " . $z . "<br>");
    function func($u, $t)
    {
        if ($u <= $t)
            $r = (pow($u, 4) + $t) / cos($u + M_PI / 4);
        else
            $r = log(abs($u + 4)) / sqrt(abs($t - 3));
        return $r;
    }

    ?>

</body>
</html>