<?php
$name = 'Gosho';
$phoneNum = '0882-321-423';
$age = 24;
$address = 'Hadji Dimitar';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTML table</title>
        <meta charset="utf-8"/>
        <style>
            table, tr, td {
                border: 1px solid black;
                border-collapse: collapse;

            }
            tr > td:first-child {
                background-color: #FF9C00;
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><?php echo $phoneNum; ?></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </table>

    </body>

</html>