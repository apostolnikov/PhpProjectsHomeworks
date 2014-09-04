<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Print Tags</title>
</head>
<body>
<form method="post" action="">
    <label for="text">Enter tags:</label><br>
    <input type="text" name="text" id="text">
    <input type="submit" name="submit">
<?php
if ($_POST && isset($_POST["submit"])) {
    $tags = explode(",", $_POST["text"]);
    echo "<div id=\"result\">";
    foreach($tags as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

}
echo "</div>";

?>

</form>
</body>
</html>

