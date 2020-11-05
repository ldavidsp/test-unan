<?php
$hostname="db";
$username="db";
$password="db";
$dbname="db";

$db = @mysqli_connect($hostname,$username, $password, $dbname);
if ($db->connect_errno != null) {
  echo $db->connect_error;
}
