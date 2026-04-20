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

        <td><label for="nome">Age: </label></td>
        <td><input type="text" name="age" id="age"></td>
        </tr>
                <tr>

        <td><label for="telefono">Phone: </label></td>
        <td><input type="text" name="phone" id="phone"></td>
        </tr>

</table>
    </form>

    </div>
</body>
</html>