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
    $sum=0;
    for ($i = 0; $i <= 5; $i++)
    {
        $arr[$i]=rand(-10,10);
        $s= $i*$i;
        if (abs($arr[$i])<$s)
            $sum = $sum + $arr[$i];
    }
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo('<br>'.'Сумма элементов = '.$sum)
    ?>
<p>  СР№1 Лобанова Д. В. Вариант 16
<p>
    <?php
    for ($i = 0; $i <= 9; $i++)
    {
        $arr[$i]=rand(-10,10);
    }
    echo "<pre> Начальный массив: </pre>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    $k = 0;
    for ($j = 0; $j < 8; $j++)
    {
        $j++;
        $k = $arr[$j];
        $arr[$j] = $arr[$j + 1];
        $arr[$j + 1] = $k;
    }
    echo "<pre> Измененный массив: </pre>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    ?>
</body>
</html>