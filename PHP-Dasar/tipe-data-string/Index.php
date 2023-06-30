
<!-- Single Qoute -->
<?php
// Single Quote, tidak bisa menggunakan \t, \n dan lain lain
echo 'Ini single qoute: ' ;
echo "\n";
?>

<!-- Double Qoute -->
<?php
// Double Quote, bisa menggunakan \t, \n dan lain lain
echo "Ini Double qoute: \t ini Double qoute";
echo "\n";
?>

<!-- Heredoc -->
<?php
// Multiple String menggunakan heredoc atau newdoc
// Hereoc, bisa melakukan parsing variable
echo <<<YP
Ini adalah text
text
dan 
text
YP;
echo "\n";
?>

<!-- Newdoc -->
<?php
// newdoc, tidak bisa melakukan parsing variable
echo <<<'YP'
Ini adalah text
text
dan 
text
YP;
echo "\n";
?>

