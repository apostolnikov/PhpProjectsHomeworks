<?php
$list = $_GET['list'];
$maxSize = $_GET['maxSize'];
$listArray = explode('
',$list);
$countArr = count($listArray);
for ($i = 0; $i < $countArr; $i++) {
    $listArray[$i] = trim($listArray[$i]);
    if (strlen($listArray[$i]) > $maxSize) {
        $listArray[$i] = substr($listArray[$i],0,$maxSize). "...";
    }
}


$newArr = [];
for ($i = 0; $i < $countArr; $i++) {
    if ($listArray[$i] != '') {
        array_push($newArr,$listArray[$i]);
    }

}

echo "<ul>";
$newCount = count($newArr);
for ($i = 0; $i < $newCount; $i++) {
    $newArr[$i] = htmlspecialchars($newArr[$i]);
    echo "<li>$newArr[$i]</li>";
}

echo "</ul>";



?>





