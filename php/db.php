<?php

// Credentials
$dbhost = "donorilmu.com";
$dbname = "donorilm_main";
$dbuser = "donorilm_admin";
$dbpass = "sinawid12345678";

//	Connection
global $test_db;

$test_db = new mysqli();
$test_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$test_db->set_charset("utf8");

//	Check Connection
if ($test_db->connect_errno) {
    printf("Connect failed: %s\n", $test_db->connect_error);
    exit();
}
?>