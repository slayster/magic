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
    <!--[if lt IE 9]>
    <script src="./res/inc/html5.js"></script>
    <![endif]-->
</head>
<body>

<section class="main">
    <form method="post" action="./startgame.php">

    <section class="main-right">
        <img src="./res/img/mtg-logo.jpg" alt="Magic The Gathering" title="" />
        <h1>SCOREBOARD</h1>
        <p>An online life counter for your Magic The Gathering games.<br />
        <br />
        For 2 to 6 players.<br />
        <br />
        Enter the player details on the left and then click 'Start'<br />to start tracking your life points.<br />
        <br />
        <br />
        <input type="image" src="./res/img/btn-start.jpg" alt="Start" title="" /><br />
        <br />
        Life points can also be updated using keyboard shortcuts:<br />
        Player 1 - q & a<br />
        Player 2 - w & s<br />
        Player 3 - e & d<br />
        Player 4 - r & f<br />
        Player 5 - t & g<br />
        Player 6 - y & h<br />
        </p>
    </section>
    
    <h2>Player 1</h2>
    <label for="p1_name">Name:</label><br />
    <input type="text" name="p1_name" id="p1_name" size="50" /><br />
    <br />
    <label for="p1_deck">Deck / Background:</label><br />
    <?php show_deck_choices(1); ?><br />
    <br />
    
    <h2>Player 2</h2>
    <label for="p2_name">Name:</label><br />
    <input type="text" name="p2_name" id="p2_name" size="50" /><br />
    <br />
    <label for="p2_deck">Deck / Background:</label><br />
    <?php show_deck_choices(2); ?><br />
    <br />
          
    <h2>Player 3</h2>
    <label for="p3_name">Name:</label><br />
    <input type="text" name="p3_name" id="p3_name" size="50" /><br />
    <br />
    <label for="p3_deck">Deck / Background:</label><br />
    <?php show_deck_choices(3); ?><br />
    <br />
          
    <h2>Player 4</h2>
    <label for="p4_name">Name:</label><br />
    <input type="text" name="p4_name" id="p4_name" size="50" /><br />
    <br />
    <label for="p4_deck">Deck / Background:</label><br />
    <?php show_deck_choices(4); ?><br />
    <br />
          
    <h2>Player 5</h2>
    <label for="p5_name">Name:</label><br />
    <input type="text" name="p5_name" id="p5_name" size="50" /><br />
    <br />
    <label for="p5_deck">Deck / Background:</label><br />
    <?php show_deck_choices(5); ?><br />
    <br />

    <h2>Player 6</h2>
    <label for="p6_name">Name:</label><br />
    <input type="text" name="p6_name" id="p6_name" size="50" /><br />
    <br />
    <label for="p6_deck">Deck / Background:</label><br />
    <?php show_deck_choices(6); ?><br />
    <br />
    </form>
</section>


</body>
</html>