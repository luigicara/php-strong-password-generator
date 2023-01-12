<?php
        $pswLength = $_GET['pswlength'] ?? 0;
        $repeatChr = $_GET['repeatchr'] ?? false;
        $letters = $_GET['letters'] ?? false;
        $numbers = $_GET['numbers'] ?? false;
        $symbols = $_GET['symbols'] ?? false;

        function generateRandomString($length, $repeat, $letters, $numbers, $symbols) {
            $characters = '';

            if ($letters) {
                $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            }

            if ($numbers) {
                $characters .= '0123456789';
            }

            if ($symbols) {
                $characters .= '"#$%&()*+,-./:;=?@[\]^_`{|}~';
            }

            $charactersLength = strlen($characters);

            $randomString = '';
         
            while (strlen($randomString) < $length) {

                $newCharachter = $characters[rand(0, $charactersLength - 1)];

                if ($repeat || !str_contains($randomString, $newCharachter)) {

                    $randomString .= $newCharachter;

                } 
    
            }
            
            return $randomString;
        }
    ?>