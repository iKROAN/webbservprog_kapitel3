<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
    if (!empty($_REQUEST['id']) && !empty($_REQUEST['pass'])) {
        $id = $_REQUEST['id'];
        $pass = $_REQUEST['pass'];
        if ($pass != "123" && $id != "Kappa") {
    ?>
    <!-- Visa formuläret första gången och om fel användarnamn -->
    <form action="ovning32.php" method="post">
    <fieldset>
        <legend>Inloggningsformulär</legend>
        <label>Användarnamn</label>
        <input type="text" name="id"><br>

        <label>Lösenord</label>
        <input type="password" name="pass"><br>

        <input type="submit" value="Loggin">
    </fieldset>
    </form>
    <?php
        }
        else {
    ?>
    <h2>Du är inloggad!</h2>
    <?php
        }
    }
    ?>
</body>
</html>
