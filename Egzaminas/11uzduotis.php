<?php

session_start();
$_SESSION['sarasas'][] = $_POST;
var_dump($_SESSION);
echo '<a href="11.html">Atgal</a>';