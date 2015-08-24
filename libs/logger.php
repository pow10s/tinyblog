<?php
namespace libs;
function logs($message, $pathToLog) {
    if (file_exists($pathToLog)) {
        file_put_contents($message, $pathToLog);
        return true;
    }
        return false;
}