<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Site</title>
    </head>
    <body>
        
        
        <form action="site.php" method="get">
            <input type="num" name="n1">
            <br>
            <input type="num" name="n2">
            <input type="submit">
        </form>
        
        <?php
        echo $_GET["n1"] + $_GET["n2"];
        ?>
    </body>
</html>