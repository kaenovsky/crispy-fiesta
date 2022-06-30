<?php

include_once 'includes/bd.php';
include_once 'includes/queries.php';

session_start();

echo "hello from php!\n";
echo "</br>";
echo "get data from mysql:";

echo "<p>$name[0]</p>";
echo "<p>$lastName[0]</p>";

?>