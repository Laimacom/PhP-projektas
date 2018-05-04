<?php
//basename
echo basename('abrakadabra/tekstai/tekstas.txt');
echo '<br>';

//copy
copy('tekstai/tekstas.txt', 'tekstai/tekstas-copy.txt');
echo 'failas nukopijuotas <br>';

rename('tekstai/tekstas-copy.txt','tekstai/tekstas2.txt');
echo 'failas pervardintas';