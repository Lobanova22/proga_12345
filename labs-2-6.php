<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лобанова Д. В.</title>
</head>
<body>
<p>  СР№2 Лобанова Д. В. Вариант 11/16
<p>
    <?php
    echo "Заменить значение каждого элемента двумерной таблицы A(m,n) на сумму элементов, соседних с ним в строке, оставляя границу массива неизменной.";
    echo "<br>";
    echo "Исходный:";
    echo "<br>";
    for($y=0;$y<=3;$y++){
        echo('<br>');
        for($yx=0;$yx<=3;$yx++){
            $tab[$y][$yx]=rand(-10,10);
            echo($tab[$y][$yx].' ');
        }
    }
    echo "<br>";
    echo "<br>";
    echo "Измененный:";
    for($yy=0;$yy<=3;$yy++){
        echo "<br>";
        echo($tab[$yy][0].' ');
        for($yyx=1;$yyx<=3;$yyx++){
            $tab1[$yy][$yyx]=$tab[$yy][$yyx-1] + $tab[$yy][$yyx+1];
            echo($tab1[$yy][$yyx].' ');
        }
        echo($tab[$yy][3]);
    }
    echo "<br>";
    echo "<br>";
    echo "В квадратной матрице A порядка N найти сумму элементов, расположенных на главной диагонали, и произведение элементов, расположенных на побочной диагонали.";
    echo "<br>";
    $sum=0;
    $p=1;
    for($yyy=0;$yyy<=3;$yyy++){
        $sum=$sum+$tab[$yyy][$yyy];
        $p=$p*$tab[3-$yyy][3-$yyy];
    }
    echo "<br>";
    echo('Сумма элементов главной диаголнали = '.$sum);
    echo "<br>";
    echo('Произведение элементов побочной диаголнали = '.$p);
    ?>
</body>
</html>