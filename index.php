<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>

    <style>

        * {
            margin: 1rem 0.5rem;
            padding: 0;
            box-sizing: border-box;
        }

    </style>

    <?php

        session_start();

        require_once __DIR__ . "/libs/helper.php";

    ?>
</head>
<body>

<form>
    <label for="pswlenght">Lunghezza Password</label>
    <input type="number" name="pswlength" 
        <?php
            echo 'value="' . $pswLength . '"';
        ?>
    >
    
    <div>
        <label for="repeatchr">Consenti ripetizione caratteri</label>
        <input type="checkbox" name="repeatchr" 
        <?php
            if ($repeatChr) {
                echo 'checked';
            }
        ?>
        >
    </div>

    <label for="letters">Lettere</label>
    <input type="checkbox" name="letters"
    <?php
        if ($letters) {
            echo 'checked';
        }
    ?>
    >

    <label for="numbers">Numeri</label>
    <input type="checkbox" name="numbers"
    <?php
        if ($numbers) {
            echo 'checked';
        }
    ?>
    >

    <label for="symbols">Simboli</label>
    <input type="checkbox" name="symbols"
    <?php
        if ($symbols) {
            echo 'checked';
        }
    ?>
    >

    <input type="submit" value="Genera">
</form>
    

<?php
    if (!is_int($pswLength)){
        if (!$letters && !$numbers && !$symbols) {
            
            echo 'Nessun parametro valido inserito';
    
        } elseif ($pswLength < 6) {
            
            echo "La password dev'essere lunga almeno 6 caratteri";
    
        } else {
            $_SESSION['pws'] = generateRandomString($pswLength, $repeatChr, $letters, $numbers, $symbols);
    
            header('Location: ./yourpassword.php');
        }
    }
    
?>


</body>
</html>