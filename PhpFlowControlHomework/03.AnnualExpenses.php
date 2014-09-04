<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Annual Expenses</title>
    <style>
        th, td, tr {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form method="post" action="">
    <label for="input">Enter number of years: </label>
    <input type="text" name="input" id="input">
    <input type="submit" value="Show costs" name="submit">
</form>

<?php
if (isset($_POST['input']) && isset($_POST['submit']) && !empty($_POST['input'])):
$n = 2014 - intval($_POST['input']);

?>
    <table>
        <tr>
            <th>Year</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total</th>
        </tr>
<?php
for ($i = 2014; $i > $n; $i--):
    $randJanuary = rand(1,999);
    $randFebruary = rand(1,999);
    $randMarch = rand(1,999);
    $randApril = rand(1,999);
    $randMay = rand(1,999);
    $randJune = rand(1,999);
    $randJuly = rand(1,999);
    $randAugust = rand(1,999);
    $randSeptember = rand(1,999);
    $randOctober = rand(1,999);
    $randNovember = rand(1,999);
    $randDecember = rand(1,999);
    $total = $randJanuary + $randFebruary + $randMarch + $randApril + $randMay + $randJune + $randJuly + $randAugust
        + $randSeptember + $randOctober + $randNovember + $randDecember;
?>
    <tr>
        <td><?=$i?></td>
        <td><?=$randJanuary?></td>
        <td><?=$randFebruary?></td>
        <td><?=$randMarch?></td>
        <td><?=$randApril?></td>
        <td><?=$randMay?></td>
        <td><?=$randJune?></td>
        <td><?=$randJuly?></td>
        <td><?=$randAugust?></td>
        <td><?=$randSeptember?></td>
        <td><?=$randOctober?></td>
        <td><?=$randNovember?></td>
        <td><?=$randDecember?></td>
        <td><?=$total?></td>
    </tr>


<?php endfor;?>

    </table>

<?php endif;?>
</body>
</html>