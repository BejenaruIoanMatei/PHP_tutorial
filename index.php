<?php

// Heredoc

$x = 1;
$y = 2;

$text = <<<TEXT
Line {$x}
Line {$y}
TEXT;

echo nl2br($text);

// Nowdoc

$text = <<<'TEXT'
Line {$x}
Line {$y}
TEXT;

echo '<br />';
echo nl2br($text);