<?php

session_start();

$_SESSION["mtgs_p1_name"] = $_POST["p1_name"];
$_SESSION["mtgs_p1_deck"] = $_POST["p1_deck"];
$_SESSION["mtgs_p1_life"] = 20;

$_SESSION["mtgs_p2_name"] = $_POST["p2_name"];
$_SESSION["mtgs_p2_deck"] = $_POST["p2_deck"];
$_SESSION["mtgs_p2_life"] = 20;

$_SESSION["mtgs_p3_name"] = $_POST["p3_name"];
$_SESSION["mtgs_p3_deck"] = $_POST["p3_deck"];
$_SESSION["mtgs_p3_life"] = 20;

$_SESSION["mtgs_p4_name"] = $_POST["p4_name"];
$_SESSION["mtgs_p4_deck"] = $_POST["p4_deck"];
$_SESSION["mtgs_p4_life"] = 20;

$_SESSION["mtgs_p5_name"] = $_POST["p5_name"];
$_SESSION["mtgs_p5_deck"] = $_POST["p5_deck"];
$_SESSION["mtgs_p5_life"] = 20;

$_SESSION["mtgs_p6_name"] = $_POST["p6_name"];
$_SESSION["mtgs_p6_deck"] = $_POST["p6_deck"];
$_SESSION["mtgs_p6_life"] = 20;

$pc = 0;

if ($_SESSION["mtgs_p1_deck"]!=0) {
    $pc++;
}
if ($_SESSION["mtgs_p2_deck"]!=0) {
    $pc++;
}
if ($_SESSION["mtgs_p3_deck"]!=0) {
    $pc++;
}
if ($_SESSION["mtgs_p4_deck"]!=0) {
    $pc++;
}
if ($_SESSION["mtgs_p5_deck"]!=0) {
    $pc++;
}
if ($_SESSION["mtgs_p6_deck"]!=0) {
    $pc++;
}

$_SESSION["mtgs_player_count"] = $pc;

switch($_SESSION["mtgs_player_count"]) {
    case 1:
        $style = "players2";
        break;
    case 2:
        $style = "players2";
        break;
    case 3:
        $style = "players3";
        break;
    case 4:
        $style = "players4";
        break;
    case 5:
        $style = "players5";
        break;
    case 6:
        $style = "players6";
        break;
    default:
        $style = "players4";
        break;
}

$_SESSION["mtgs_score_style"] = $style;

header("Location: ./scoreboard.php");


?>
