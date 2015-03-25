<?php
function logs($message, $pathToLog) {
    if (file_exists(PATH_TO_LOG)) {

        file_put_contents($message, $pathToLog);
    }
    else {
        echo 'Error. File doesnt exist';
    }


}

