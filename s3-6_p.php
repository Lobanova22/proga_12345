<?php
//Удалить из заданного предложения заданное слово
if (isset($_POST["text"]) and isset($_POST["word"])) {
    $text = str_replace($_POST["word"], "", $_POST["text"]);
    echo $text;
}

//Подсчитать число различных гласных, входящих в данный текст
if (isset($_POST["thirdButton"])) {
    $char = array("а", "е", "ё", "ж", "и", "о", "у", "ы", "э", "ю", "я");
    $string = mb_str_split($_POST["text1"]);
    $count = strlen($_POST["text1"]);
    $sum = 0;
    for ($i = 0; $i <= 10; $i++) {
        for ($k = 0; $k <= $count; $k++) {
            if ($char[$i] == $string[$k]) $sum++;
        }
    }
    echo("В строке " . $sum . " гласных");
}
function mb_str_split($str, $l = 0)
{
    if ($l > 0) {
        $ret = array();
        $len = mb_strlen($str, "UTF-8");
        for ($i = 0; $i < $len; $i += $l) {
            $ret[] = mb_substr($str, $i, $l, "UTF-8");
        }
        return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
}

//Заменить в данном тексте все малые латинские буквы на заглавные
if (isset($_POST["firstButton"])) {
    $mass = str_split($_POST["prhase3"]);
    $lol = iconv_strlen($_POST["prhase3"], 'UTF-8');
    $CountUpp = 0;
    $CountDown = 0;
    for ($i = 0; $i < $lol; $i++) {
        $mass[$i] = iconv("windows-1251","UTF-8", $mass[$i]);
        if ($mass[$i] === strtoupper($mass[$i])) {
            $CountUpp++;
        } else {
            $CountDown++;
        }
    }
    if ($CountUpp > $CountDown) {
        echo mb_strtoupper($_POST["prhase3"]);
    } elseif ($CountUpp < $CountDown) {
        echo mb_strtolower($_POST["prhase3"]);
    } else {
        echo $_POST["prhase3"];
    }
}
?>