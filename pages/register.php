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
    <h1>Register</h1>

    <h2 class="col--100">
        Compile the form to take part in Caponago GP 2026
    </h2>
       
    <form action="" method="post" class="form">
        <table>
            <tr>
            <td><label for="nome">Name: </label></td>
            <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
            <td><label for="nome">Surname: </label></td>
            <td><input type="text" name="surname" id="surname"></td>
            </tr>
            <tr>
            <td><label for="telefono">ID: </label></td>
            <td><input type="text" name="ID" id="ID"></td>
            </tr>
            <tr>
            <td><label for="nome">Age: </label></td>
            <td><input type="text" name="age" id="age"></td>
            </tr>
            <tr>
            <td><label for="telefono">Phone: </label></td>
            <td><input type="text" name="phone" id="phone"></td>
            </tr>
            <tr>
            <td><label for="telefono">Email: </label></td>
            <td><input type="text" name="email" id="email"></td>
            </tr>
        </table>
        <input type="submit" value="Send">
    </form>
    </div>

    <p>
    <?php
        if(isset($_POST["surname"]) || isset($_POST["name"]) ||
                 isset($_POST["age"]) || isset($_POST["phone"]) || 
                 isset($_POST["ID"]) || isset($_POST["email"])) {

            if(!isset($_POST["surname"]) || !isset($_POST["name"]) ||
                 !isset($_POST["age"]) || !isset($_POST["phone"]) || 
                 !isset($_POST["ID"]) || !isset($_POST["email"])) {
                echo "Please compile all spaces...";
            }
            else {
                // TODO: insert into the database the participant
                echo <<<EOD
                
                EOD;
            }
        }
    ?>
</body>
</html>