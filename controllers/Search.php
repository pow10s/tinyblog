<?php
    include ('views/searchForm.php');
    include ('libs/search.php');
    if (isset($_POST['search_btn'])){
        echo searchByUserChunk($_POST['chunkOfName']);
    }
