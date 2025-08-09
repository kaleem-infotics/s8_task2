# index.php

<?php
$host = 'db';
$db = 'students';
$user = 'admin';
$pass = 'admin123';
$dsn = "pgsql:host=$host;dbname=$db";

try {
	$pdo = new PDO($dsn, $user, $pass);
	$stmt = $pdo->query("SELECT name FROM student");

	echo "<h1>Student Names</h1>";
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo htmlspecialchars($row['name']) . "<br>";
	}
} catch (PDOException $e) {
	echo "Database error: " . $e->getMessage();
}

?>

