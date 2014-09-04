<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Side bar builder</title>
    <style>
        aside {
            background-color: #ABC4E6;
            width: 20%;
            height: auto;
            justify-content: center;
            border: 2px solid black;
            margin-bottom: 20px;
            border-radius: 20px;
        }

        aside h3 {
            border-bottom: 2px solid black;
            margin-left: 20px;
            margin-right: 20px;
        }

        aside ul {
            list-style-type: circle;

        }

        aside ul li {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <form method="post" action="">
        <label for="categories">Categories: </label>
        <input type="text" name="categories" id="categories"><br>
        <label for="tags">Tags: </label>
        <input type="text" name="tags" id="tags"><br>
        <label for="months">Months: </label>
        <input type="text" name="months" id="months"><br>
<input type="submit" value="Generate" name="submit">
    </form>

<?php
if (isset($_POST['categories']) && isset($_POST['tags']) && isset($_POST['months']) && isset($_POST['submit']) &&
(!empty($_POST['categories']) || !empty($_POST['tags']) || !empty($_POST['months']))):
    $categories = explode(', ',$_POST['categories']);
    $tags = explode(', ',$_POST['tags']);
    $months = explode(', ',$_POST['months']);


?>

    <aside>
        <h3>Categories</h3>
        <ul>
           <?php foreach ($categories as $cat):?>
            <li><?=$cat?></li>
            <?php endforeach;?>
        </ul>
    </aside>
    <aside>
        <h3>Tags</h3>
        <ul>
            <?php foreach ($tags as $tag):?>
                <li><?=$tag?></li>
            <?php endforeach;?>
        </ul>
    </aside>
    <aside>
        <h3>Months</h3>
        <ul>
            <?php foreach ($months as $month):?>
                <li><?=$month?></li>
            <?php endforeach;?>
        </ul>
    </aside>




<?php endif;?>

</body>
</html>