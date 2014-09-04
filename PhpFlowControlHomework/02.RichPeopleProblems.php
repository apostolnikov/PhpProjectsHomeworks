<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Car Randomizer</title>
    <style>
        th, td, tr {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="input">
        <input type="submit" value="Show results" name="submit">
    </form>
<?php
if (isset($_POST['input']) && isset($_POST['submit']) && !empty($_POST['input'])) :
    $carsList = $_POST['input'];
    $cars = preg_split('/[ ,]+/',$carsList);   //splitva po vsichko v [] skobi

?>


    <table>
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
<?php foreach ($cars as $car):
    $count = rand(1,5);
    $colors = ['yellow','green','blue','pink', 'black', 'red'];
    $randColor = array_rand($colors);
?>
        <tr>
            <td><?=$car?></td>
            <td><?=$colors[$randColor]?></td>
            <td><?=$count?></td>
        </tr>
<?php endforeach;?>
    </table>
<?php endif;?>

</body>
</html>