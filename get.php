<?php
include 'db.php';

// Querying for todos ordering with the latest todos added on top
$stmt = $pdo->query('SELECT * FROM todos ORDER BY id DESC');

// Getting all the todos from the query
$todos = $stmt->fetchAll();

echo json_encode($todos);
?>