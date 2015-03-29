<?php
/*function searchByUserChunk($chunkOfName, $pathFile) {
    $search = $chunkOfName;
    $lines = file($pathFile);
    foreach ($lines as $num_line => $line_value) {
        if (strpos($line_value, $search) !== false)

            return true;
    }
    return false;
}*/

preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+\;$/", "example@mail.ru;example;example1", $matches);
$host = $matches[2];

// извлекаем две последние части имени хоста
preg_match("/\;^[a-z0-9]{6,}+$/i", $host, $matches);
echo "{$matches[0]}\n";
?>