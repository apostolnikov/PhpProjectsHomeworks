<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Text filter</title>

</head>
<body>
<form method="post" action="">
    <label for="text">Enter text here: </label><br>
    <textarea name="text" id="text"></textarea><br>
    <label for="bannWords">Banlist: </label><br>
    <input type="text" name="banlist" id="bannWords"><br>
    <input type="submit" value="submit" name="submit">

<?php if (isset($_POST['text']) && isset($_POST['banlist']) && isset($_POST['submit']) &&
    (!empty($_POST['text']) || !empty($_POST['banlist']) || !empty($_POST['submit']))):
    $banList = explode(", ", $_POST['banlist']);
    $text = $_POST['text'];

?>
<?php
    foreach ($banList as $word) {
        $stars = str_repeat('*',strlen($word));
        $text = str_replace($word,$stars,$text);

    }
    echo $text;

?>


<?php endif;?>
</form>
</body>
</html>