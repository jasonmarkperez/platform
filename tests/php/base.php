<?php

ini_set('track_errors', 1); 
error_reporting(-1); // report all errors

function terminator($errno, $errstr, $errfile, $errline)
{
	fwrite(STDERR,"$errstr in $errfile line $errline");
	exit(1);
}

set_error_handler("terminator");

// All tests should include this file, so we can modify basic test functionality
// here without needing to modify all our tests

// this includes the basic SimpleTest library
require_once('tests/lib/simpletest/autorun.php');

// this loads CASH Music DIY
require_once('framework/php/cashmusic.php');

require_once('framework/php/classes/seeds/S3Seed.php');

?>
