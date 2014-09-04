<?php

header("Content-Type: text/html; charset=utf8");    //Таг за кирилизация!
mb_internal_encoding("utf-8");


$text = '       gosho';
$trimmed = ltrim($text);
echo $trimmed;
?>





echo "<ul>";

    for ($i = 0; $i < $newArrCount; $i++) {
    $listArray[$i] = htmlspecialchars($newArr[$i]);
    echo "<li>$newArr[$i]</li>";
    }

    echo "</ul>";



$kluchove = [];


foreach ($inputArr as $word) {
if ($word == 'div' || $word == 'article' || $word ==) {
// some code here
}
}


