<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Most frequent tag</title>
</head>
<body>
<form method="post" action="">
    <label for="text">Enter tags:</label><br>
    <input type="text" name="text" id="text">
    <input type="submit" name="submit"><br>
<?php
if ($_POST && isset($_POST["submit"])) {
    $tags = explode(", ",$_POST["text"]);
    $c = array_count_values($tags);
    arsort($c);
    $valMax = array_search(max($c),$c);
    foreach ($c as $key => $value) {
        echo "$key : $value times <br>";
    }
    echo "<p>Most frequent tag is: $valMax</p>";

}
?>

</form>
</body>
</html>
