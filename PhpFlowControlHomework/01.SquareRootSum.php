<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Square root sum</title>
    <style>
        th, td, tr {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>
    <?php
    $sum = 0;
    ?>
    <?php for ($i = 0; $i <= 100; $i+=2):?>
    <?php $sum += number_format(sqrt($i),2);?>
    <tr>
        <td><?= $i ?></td>
        <td><?= number_format(sqrt($i),2)?></td>
    </tr>

    <?php endfor;?>
    <tr>
        <td>TOTAL: </td>
        <td><?=$sum ?></td>
    </tr>
</table>

</body>
</html>