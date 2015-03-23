<?php
function logs($message, $pathToLog) {
  file_put_contents($message, $pathToLog);
}


