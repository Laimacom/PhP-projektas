<?php

class a{
    const x = '123';
}
define ('y', '235'); //paprasta konstanta
echo a::x . '<br>';;   //konstanta klases viduje;
echo a::x . ' ' . y;
