<?php
/**
 * Test.php
 * This is a test of the Email Parser class developed by Danny Grove
 * This will take in a raw email and parse it for the necessary information.
 *
 * For this test I have included a raw email saved in a .msg file format
 */

// Includes Email Parser Class
include('email.php');


$emailStr = file_get_contents('email.msg');
$email = new Email($emailStr);
$email->printEmail();
?>
