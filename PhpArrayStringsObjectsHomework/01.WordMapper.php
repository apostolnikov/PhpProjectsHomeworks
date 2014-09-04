<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Word mapper</title>
    <style>
        textarea {
            width: 25%;
            height 200px;
        }
        table, tr, td {
            border: 1px solid black;
        }
    </style>

</head>
<body>
<form method="post" action="">
    <textarea name="input"></textarea><br>
    <input type="submit" value="Count words" name="submit">
</form>

<?php
if (isset($_POST['input']) && isset($_POST['submit']) && !empty($_POST['input'])):
    $input = strtolower($_POST['input']);
    $words = preg_split('/\W+/' ,  $input, 0 , PREG_SPLIT_NO_EMPTY);
    $count = array_count_values($words);
    arsort($count);
?>
    <table>
<?php foreach ($count as $key => $value):?>
        <tr>
            <td><?=$key ?></td>
            <td><?=$value ?></td>
        </tr>
<?php endforeach;?>
    </table>
<?php endif;?>


</body>
</html>