<?php

$s = "<strong>abc</strong>";
echo $s . "<br>";

echo htmlspecialchars($s) . "<br>"; //isveda visus ir spec simbolius
echo htmlspecialchars_decode($s) . "<br>";
