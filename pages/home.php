<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location: pagine/home.php');
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Biblioteca-Login</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
       
       

    </div>
</body>
</html>

