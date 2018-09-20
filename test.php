<?php

include 'db.php';

foreach ($dbh->query('SELECT * from login') as $row) {
	print_r($row);
}


?>