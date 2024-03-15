<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<pre>";
        var_dump($_POST);
        $username = $_POST["username"];
        $password = $_POST["password"];

        $correctUsername = "Owen";
        $correctPassword = "1234";

        if ($correctUsername == $username && $correctPassword == $password) {
            echo "Inloggen gelukt";
        } else {
            echo "Inloggen mislukt";
        }
    ?>
</body>
</html>
