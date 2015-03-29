<?php
function searchByUserChunk($chunkOfName, $pathFile) {
    $search = $chunkOfName;
    $lines = file($pathFile);
    $temp=array();
    foreach ($lines as $num_line => $line_value) {
        if (strpos($line_value, $search) !== false) {

            $pieces = explode(";", $line_value);
            echo "$pieces[1].<br>";
        }

    }
    return false;
}


