<?php
if (isset($_POST['id']) && isset($_POST['todo'])){
	include 'db.php';

	// Making a prepared SQL INSERT statement
	$stmt = $pdo->prepare("UPDATE todos SET task = ? WHERE id = ?");

	// Injecting variable in prepared statement
	$stmt->execute([$_POST['todo'],$_POST['id']]);

	echo json_encode(array("status"=>"Todo Updated"));
}
else{
	echo json_encode(array("status"=>"Please provide a todo ID"));
}
?>