<?php
$dbh = new PDO ( 'mysql:dbname=nopagy;host=localhost', 'nopagy', 'waIkinded2@') ;
$sth = $dbh->prepare("SELECT * from atraccion");
$sth->execute();

/* Fetch all of the remaining rows in the result set */
print("Fetch all of the remaining rows in the result set:\n");
$result = $sth->fetchAll();
print_r($result);
?>