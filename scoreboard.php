<?php
    session_start();
    require_once("./res/inc/func.inc.php");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Magic The Gathering - Scoreboard</title>
    <link rel="stylesheet" href="./res/css/styles.css" />
    <link rel="icon" type="image/x-icon" href="./favicon.ico" />
    <meta name="description" content="An online life counter for your Magic The Gathering games" />
    <meta name="keywords" content="magic,the gathering,mtg,scoreboard,life counter,life points,hit points" />
    <script src="./res/inc/func.js"></script>
    <!--[if lt IE 9]>
    <script src="./res/inc/html5.js"></script>
    <![endif]-->
</head>
<?php
    if (!isset($_SESSION["mtgs_player_count"])) {
?><body>

<section class="options">
    <a href="./new.php"><img src="./res/img/btn-new.jpg" alt="New" title="Enter new player names and decks" /></a>
</section>

</html>
<?php    
    } else {
?>

<body onload="javascript:init(<?php echo $_SESSION["mtgs_p1_life"]; ?>,<?php echo $_SESSION["mtgs_p2_life"]; ?>,<?php echo $_SESSION["mtgs_p3_life"]; ?>,<?php echo $_SESSION["mtgs_p4_life"]; ?>,<?php echo $_SESSION["mtgs_p5_life"]; ?>,<?php echo $_SESSION["mtgs_p6_life"]; ?>,<?php echo $_SESSION["mtgs_player_count"]; ?>);">

<section class="main">
<?php
    for ($i=1; $i<=$_SESSION["mtgs_player_count"]; $i++) {
    ?>
    <section class="<?php echo $_SESSION["mtgs_score_style"]; ?>" style="background:url('./res/img/pw<?php echo $_SESSION["mtgs_p".$i."_deck"]; ?>.jpg') top center no-repeat;">
        <h2><?php echo $_SESSION["mtgs_p".$i."_name"]; ?></h2>
        <div class="player_score" id="p<?php echo $i; ?>_life"><?php echo $_SESSION["mtgs_p".$i."_life"]; ?></div>
            <?php
                if ($_SESSION["mtgs_player_count"]>4) {
                    ?><div class="score_control6"><a href="javascript:decrease(<?php echo $i; ?>);"><img src="./res/img/btn-down.jpg" alt="\/" title="" width="70" /></a><a href="javascript:increase(<?php echo $i; ?>);"><img src="./res/img/btn-up.jpg" alt="/\" title="" width="70" /></a></div><?php
                } else {
                    ?><div class="score_control"><a href="javascript:decrease(<?php echo $i; ?>);"><img src="./res/img/btn-down.jpg" alt="\/" title="" /></a><a href="javascript:increase(<?php echo $i; ?>);"><img src="./res/img/btn-up.jpg" alt="/\" title="" /></a></div><?php
                }
            ?>            
    </section>
    <?php
    }
?>
</section>
<section class="options">
    <a href="javascript:reset_all();"><img src="./res/img/btn-reset.jpg" alt="Reset" title="Reset all life back to 20" /></a> &nbsp; &nbsp; <a href="./new.php"><img src="./res/img/btn-new.jpg" alt="New" title="Enter new player names and decks" /></a>
</section>


</body>
</html>
<?php
    }
?>
