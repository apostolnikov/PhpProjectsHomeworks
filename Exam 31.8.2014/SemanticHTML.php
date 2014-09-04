<?php
$html = $_GET['html'];
$inputArr = explode("\"",$html);
$tags = [];

foreach ($inputArr as $tag) {
    if ($tag == 'article' || $tag == 'section' || $tag == 'header' || $tag == 'main' || $tag == 'footer' || $tag == 'aside' || $tag = 'nav') {
        array_push($tags,$tag);
    }
}

for ($i = 0; $i < length; $i++) {

}


$patern = '/div/';

$replace = $tags[0];


$resultStr = preg_replace($patern,$replace,$html);
echo $resultStr;



?>