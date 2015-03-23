<?php
function logs($message, $pathToLog) {
  file_put_contents($message, $pathToLog);
    if (file_exists(PATH_TO_LOG)) {

        logs ('Test', PATH_TO_LOG);
    }
    else {
        echo 'Error. File doesnt exist';
    }
}


