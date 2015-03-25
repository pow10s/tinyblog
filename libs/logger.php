<?php
function logs($message, $pathToLog) {
    if (file_exists($pathToLog)) {

        file_put_contents($message, $pathToLog);
    }
    else {
        echo 'Error. File doesnt exist';
    }


}

