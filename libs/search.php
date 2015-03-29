<?php
function searchByUserChunk($chunkOfName, $pathFile) {
    $search = $chunkOfName;
    $lines = file($pathFile);
    foreach ($lines as $num_line => $line_value) {
        if (strpos($line_value, $search) !== false)

            return true;
    }
    return false;
}
