<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Text colorer</title>
    <style>
        div {
            display: inline;
        }
        div#red {
            color: red;
        }
        div#blue {
            color: blue;
        }
    </style>

</head>
<body>
    <form method="post" action="">
        <textarea name="input"></textarea><br>
        <input type="submit" value="Color text" name="submit">
    </form>

<?php if(isset($_POST['input']) && isset($_POST['submit']) && !empty($_POST['input'])):
    $input = str_split($_POST['input']);

?>
<?php foreach ($input as $value):
    if (ord($value) % 2 == 0) {
        echo "<div id='red'>$value </div>";
    } else {
        echo "<div id='blue'>$value </div>";
    }
   ?>





<?php endforeach;?>
<?php endif;?>
</body>
</html>