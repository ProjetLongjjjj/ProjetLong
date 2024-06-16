<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
        <title>Page d'accueil</title>
        <link rel="stylesheet" href="accueil.css" />
    </head>     
    <body>
        <form action="test.php" method="post">
            Name: <input type="text" name="name"><br>
            <input type="submit">
        </form>

        <?php
            echo "<script>console.log('Hey!');</script>";
        ?>
    </body>
</html>