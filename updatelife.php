<?php

session_start();

$_SESSION["mtgs_p".$_GET["player"]."_life"] = $_GET["life"];

header("HTTP/1.0 204 No Content");

?>
