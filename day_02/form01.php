<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

<h1>wellcome <?php echo $_POST["name"]?></h1>
<h3>your pass is <?php echo $_POST["pass"]?></h3>

<?php 
//=================================
include "index.php" 
?>
    
</body>
</html>