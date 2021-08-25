<?php
if (isset($_POST['todo'])){
	include 'db.php';

	// Making a prepared SQL INSERT statement
	$stmt = $pdo->prepare("INSERT INTO todos (task,isCompleted) VALUES (?,0)");

	// Injecting variable in prepared statement
	$stmt->execute([$_POST['todo']]);

	echo json_encode(array("status"=>"Todo Added"));
}
else{
	echo json_encode(array("status"=>"Please type a todo"));	
}
?>