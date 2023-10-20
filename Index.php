<?php 

$url = $_SERVER['REQUEST_URI'];

if (
    $url == '/inicio' ||
    $url == '/' ||
    $url == '/Index.php' ||
    $url == '/index.php' ||
    $url == '/index' 
) {
    header("location: control.php");
} else {
    echo "Not Found 404.";
}

?>