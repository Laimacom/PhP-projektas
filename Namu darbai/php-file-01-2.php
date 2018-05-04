<?php
$f2 = fopen('php-file-01-masyvas.txt', 'r');
$x = fread($f2, filesize('php-file-01-masyvas.txt'));
fclose($f2);
$y = explode(',', $x);
var_dump($y);

