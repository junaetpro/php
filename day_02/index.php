<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 02</title>
</head>
<body>
    <h3>from -01</h3>
    <form action="form01.php" method="POST">
        name: <input type="text" name="name">
        <br>
        pass: <input type="password" name="pass">
        <input type="submit" value="submit">
    </form>
    
    <br><br>
    <?php
    //========================================
    echo "today is ". date("d-m/Y");
    echo "Today is " . date("l");
    ?>

    &copy; 2001- <?php echo date("Y"); ?>
    <br>

    <?php
    //--==================
     readfile("form01.php") 
    ?>

    
</body>
</html>