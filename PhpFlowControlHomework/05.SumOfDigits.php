<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>sum of digits</title>
    <style>
        td, tr, table, th {
            border: 1px solid black;
        }
    </style>

</head>
<body>
<form method="post" action="">
    <label for="input">Input string: </label>
    <input type="text" name="input" id="input">
    <input type="submit" name="submit">
</form>

<?php if (isset($_POST['input']) && !empty($_POST['input'])):
    $input = preg_split('/[ ,]+/',$_POST['input']);

?>
    <table>
<?php foreach ($input as $value):
    if (is_numeric($value)) {
        $number = $value;
        $sum = 0;
        while ($number != 0) {
            $sum += $number % 10;
            $number /= 10;
        }
    } else {
        $sum = 'I cannot sum that';
    }
?>
    <tr>
        <td><?=$value?></td>
        <td><?=$sum?></td>
    </tr>


<?php endforeach;?>
    </table>
<?php endif;?>

</body>
</html>