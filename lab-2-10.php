<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border=1>
    <?php
    $d = 0;
    for ($i=1; $i<=10; $i++) { // запускаем первый цикл
        echo ("<tr>"); // начало строки таблицы
        for ($k=1; $k<=10; $k++) { // запускаем второй цикл
            echo ("<td align=center>"); // открываем ячейку таблицы
            $d++;
            switch ($d) {
                case ($d%2==0) :
                    echo '<p style="color: red">'.$d.'</p>';break;
                default:
                    echo '<p style="color: black">'.$d.'</p>';break;
            }
            echo ("</td>"); // а потом закрываем ячейку
        }
        echo ("</tr>"); // конец строки таблицы
    }
    ?>
</TABLE>
</body>
</html>