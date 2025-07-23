<?php

$emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

$allSplitted = explode("\n", $emailContent);
$splitted = $allSplitted[8];
$authorAnQuote = explode(":", $splitted);
$author = $authorAnQuote[0];
$quote = $authorAnQuote[1];

$stringBefore = $author . ':' . $quote;
$string = $quote . ' - ' . $author;

$explodeAll = explode($stringBefore, $emailContent);
$modifiedEmailContent =  implode($string, $explodeAll);


var_dump($update);