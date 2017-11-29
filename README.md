# PHP US English-to-UK-English-converter 

Converts textual content in order that British spellings are swapped with their Americanized shape or vice versa.

## Features:

* 20,000 words covered;
* Multiple Sources: Words come from VarCon/ISpell (18,000 phrases) and WordsWorldWide (8,000 phrases), each lists have been used to cross-check each different, correct errors, and cast off duplicates.
* Variants for British phrases ('unrealisable' and 'unrealiseable');
 

## Functionality:

* Does everyday expression checking with /bWORDb/, so, it will no longer corrupt phrases.  "Ax" becomes "Axe", but "Axiomatic" will continue to be as "Axiomatic";
* Checks each phrase in the word list and its ucwords (higher-cased words) formatted model, so no acronyms may be negatively affected ("our group, AX, Avenger Xenophiles," will not be converted to "our group, AXE, Avenger Xenophiles");
* Atomic / Deterministic : American-ize/British-ify will not corrupt meaning ('discus' and 'diskus' have reverse meanings in US/UK, swapping them in/out will reason the textual content to alternate each time you "Americanize" or "Britishify" it, so we do not do those sorts of swaps);

## Sample Usage:

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