<?php // login.php
$hn = 'localhost';
$db = 'publications';
$un = 'username'; // Change this
$pw = 'password'; // Change this
?>
<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");
?>