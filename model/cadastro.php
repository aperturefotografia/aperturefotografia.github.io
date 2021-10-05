
<?php
  
  include("config.php"); 
  include('../controller/cadastro.php');
    
	// Database connection
	$conn = new mysqli($databaseHost,$databaseUsername,$databasePassword,$databaseName);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into cadastro(username, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss", $username, $email, $password);
		$execval = $stmt->execute();
		header('Location: ../index.php');

		$stmt->close();
		$conn->close();
	}
    