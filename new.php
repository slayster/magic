<?php

session_start();

unset($_SESSION["mtgs_p1_name"]);
unset($_SESSION["mtgs_p1_deck"]);
unset($_SESSION["mtgs_p1_life"]);

unset($_SESSION["mtgs_p2_name"]);
unset($_SESSION["mtgs_p2_deck"]);
unset($_SESSION["mtgs_p2_life"]);

unset($_SESSION["mtgs_p3_name"]);
unset($_SESSION["mtgs_p3_deck"]);
unset($_SESSION["mtgs_p3_life"]);

unset($_SESSION["mtgs_p4_name"]);
unset($_SESSION["mtgs_p4_deck"]);
unset($_SESSION["mtgs_p4_life"]);

unset($_SESSION["mtgs_p5_name"]);
unset($_SESSION["mtgs_p5_deck"]);
unset($_SESSION["mtgs_p5_life"]);

unset($_SESSION["mtgs_p6_name"]);
unset($_SESSION["mtgs_p6_deck"]);
unset($_SESSION["mtgs_p6_life"]);

unset($_SESSION["mtgs_player_count"]);

unset($_SESSION["mtgs_score_style"]);

header("Location: ./");


?>
