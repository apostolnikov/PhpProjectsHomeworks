<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Find prime number</title>
    <style>
        div {
            display: inline;
        }
        #bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
<form method="post" action="">
    <label for="start">Starting Index: </label>
    <input type="text" name="start" id="start">
    <label for="end">End: </label>
    <input type="text" name="end" id="end">
    <input type="submit" value="Submit" name="submit">
</form>

<?php
if (isset($_POST['start']) && isset($_POST['end']) && isset($_POST['submit']) && (!empty($_POST['start']) || !empty($_POST['end']) || !empty($_POST['sumbit']))):
    $start = intval($_POST['start']);
    $end = intval($_POST['end']);
?>

<?php
for ($i = $start; $i <= $end; $i++) {
    $number = $i;
    if ($number == 2 || $number == 3 || $number == 5 || $number == 7) {
       echo "<div id='bold'>$number, </div>";
    } elseif (!(($number % 2 == 0) || ($number % 3 == 0) || ($number % 5 == 0) || ($number % 7 == 0))) {
        echo "<div id='bold'>$number, </div>";
    } else {
        echo "<div>$number, </div>";
    }
}


?>


<?php endif;?>


</body>
</html>