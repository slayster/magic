<?php

function show_deck_choices($player) {
?>
<select name="p<?php echo $player; ?>_deck" id="p<?php echo $player; ?>_deck">
    <option value="0">(select deck colour)</option>
    <option value="1">Black - Liliana Vess</option>
    <option value="2">White - Gideon Jura</option>
    <option value="3">Red - Chandra Nalaar</option>
    <option value="4">Blue - Jace Beleren</option>
    <option value="5">Green - Garruk Wildspeaker</option>
    <option value="6">Red/Blue - Ral Zarek</option>
    <option value="7">Red - Koth</option>
    <option value="8">Green/Black - Nissa Revane</option>
    <option value="9">Green/Blue - Kiora Atua</option>
    <option value="10">Red/Black - Sarkhan Vol</option>
    <option value="11">Black - Sorin Markov</option>
    <option value="12">White/Blue/Black - Tezzeret</option>
    <option value="13">White/Red - March To War</option>
    <option value="14">Black - Ghoulkeeper</option>
    <option value="15">Green/White - Ajani Goldmane</option>
</select>
<?php
}

?>