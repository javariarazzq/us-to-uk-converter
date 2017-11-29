<?php
require('AmericanBritishSpellings.php');
$american_british_spellings = new AmericanBritishSpellings('$var');
$text = "accessorise ageing aggrandisement agonise agonised agonises british to american";
$textx = "accessorize aging aggrandizement agonize agonized agonizes american to british";
$new_text = $american_british_spellings->SwapBritishSpellingsForAmericanSpellings(['text'=>$text]);
print_r($text);
echo "<br>";
print($new_text); 
$american = $american_british_spellings->SwapAmericanSpellingsForBritishSpellings(['text'=>$textx]);
echo "<br>";
print_r($textx);
echo "<br>";
print_r($american);
?>