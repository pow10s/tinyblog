<?php
function validationUserNamePass($Name, $Password , $pathFile,$cookieName) {
    $searchName = $Name;
    $searchPassword = $Password;
    $lines = file($pathFile);
    foreach ($lines as $num_line => $line_value) {
        if (strpos($line_value, $searchName) !== false && strpos($line_value, $searchPassword) !== false) {
            $pieces = explode(";", $line_value);
            if($Name!==$pieces[1] && $Password!==$pieces[2]){
                    return false;
            }
            return true;

        }

    }

}