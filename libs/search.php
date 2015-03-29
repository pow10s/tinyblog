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

/*$raw_query_string = 'act=search&sw=%E1%CC%D8%C2%CF%CD&where=news&cp=35&cp=2';
preg_match ("/^(.+)(&cp\=\d+)+/", $raw_query_string, $query_string);
echo "$query_string[1]\n"; // act=search&sw=%E1%CC%D8%C2%CF%CD&where=news&cp=35
echo "$query_string[2]\n"; // &cp=2*/

$text = FILE("user.txt");
$search = "abra";
for ($i = 0; $i < count($text); $i++){
    if (!(stripos($text[$i],$search) === FALSE)) echo $text[$i]."<br>";
}

?>
