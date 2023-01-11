<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congrats!</title>

    <?php
        session_start();

        $password = $_SESSION['pws'];
    ?>
</head>
<body>
    <h1>Congratulazioni la tua password è: <?php echo $password ?></h1>
</body>
</html>