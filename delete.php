<?php
if (isset($_POST['id'])){
	include 'db.php';

	// Making a prepared SQL INSERT statement
	$stmt = $pdo->prepare("DELETE FROM todos WHERE id = ?");

	// Injecting variable in prepared statement
	$stmt->execute([$_POST['id']]);

	echo json_encode(array("status"=>"Todo Deleted"));
}
else{
	echo json_encode(array("status"=>"Please provide a todo ID"));
}
?>