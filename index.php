<?php

// This Method is not clean code
//include_once 'Classes/Home.class.php';
//include_once 'Classes/Login.class.php';
//include_once 'Classes/profile.class.php';

// This method is clean code
include 'autoload.php';

$home = new Home();
print_r($home);
echo "<br>";

$login = new Login();
print_r($login);
echo "<br>";

$profile = new profile();
print_r($profile);