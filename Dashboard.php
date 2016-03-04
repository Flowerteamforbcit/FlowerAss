<?php
session_start();
require 'db.php';
include 'head.php';
?>
<h2>Dashboard</h2>







<?php

try {

	$sql = "SELECT * FROM customer";

	$statement = $dbh->prepare($sql);
	$statement->execute();
        // $count = $statement->rowCount();
        // echo "Number of returned values is $count.";

        // PDO::FETCH_ASSOC: returns an array indexed by column name as returned in your result set
        // http://php.net/manual/en/pdostatement.fetch.php
        // basically we want an associate array for each row
	$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

        // http://stackoverflow.com/questions/15287905/convert-pdo-recordset-to-json-in-php
        // echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));


	echo "<table>";
	echo "<h2>Customers</h2>";
	echo "<th>id</th><th>name</th><th>email</th><th>password</th>";

	foreach ($rows as $row) {
        	# code...
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>" ."<td>" . $row['name'] . "</td>" ."<td>" . $row['email'] . "</td>" . "<td>" . $row['pw'] . "</td>" ;
		echo "</tr>";

	}
	echo "</table>";


} catch(PDOException $e) {
	echo "<p style='color: red;'>From the SQL code: $sql</p>";
	$error = $e->getMessage();
	echo "<p style='color: red;'>$error</p>";
}



include 'footer.php';
?>
