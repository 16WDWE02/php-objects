<?php

// Require the person class
require 'person.php';
require 'cyborg.php';

$ben 		= new Person('Ben Abbott', 5);
$sam 		= new Cyborg('Sam Gamgee');
$michael 	= new Person('Michael Rowlands', 42);

// $ben->introduceSelf();
// $sam->introduceSelf();
// $michael->introduceSelf();

$sam->introduceSelf();
$ben->introduceSelf();
$michael->introduceSelf();


require 'page.php';
require 'homepage.php';

$homePage = new HomePage();


















