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

            function newCharachter($characters, $charactersLength) {

                return $characters[rand(0, $charactersLength - 1)];

            }
         
            for ($i = 0; $i < $length; $i++) {

                $newCharachter = newCharachter($characters, $charactersLength);

                if ($repeat) {

                    $randomString .= $newCharachter;

                } else {

                    if (str_contains($randomString, $newCharachter)) {

                        $i--;

                    } else {

                        $randomString .= $newCharachter;

                    }

                }
            }
            
            return $randomString;
        }
    ?>