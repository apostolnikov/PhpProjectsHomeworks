<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pretty text hasher</title>
</head>
<body>
<form method="get" action="">
    Text:
    <input type="text" name="text"><br>
    Hash value:
    <input type="text" name="hashValue"><br>
    Font:

    <input type="text" name="fontSize"><br>
    Style:
    <input type="text" name="style">
    <input type="submit" name="submit">
    <?php
    if (isset($_GET['text']) && isset($_GET['hashValue']) && isset($_GET['fontSize']) && isset($_GET['style']) && isset($_GET['submit'])):
        $text = str_split($_GET['text']);
        $arrLenght = count($text);
        $hashValue = $_GET['hashValue'];
        $font = $_GET['fontSize'];
        $style = $_GET['style'];




        ?>

        <?php

        for ($i = 0; $i < $arrLenght; $i++) {
            $result = ord($text[$i]);
            if ($i % 2 == 0) {
                $result = ord($text[$i]);
                $text[$i] = chr($result + $hashValue);
            } else {
                $text[$i] = chr($result - $hashValue);
            }



        }
        ?>


        <?php

        echo "<p style=\"font-size: $font;font-weight: $style\">";
        foreach ($text as $letter) {
            echo $letter;
        }
        echo "</p>";



        ?>

    <?php endif;?>

</form>
</body>
</html>
