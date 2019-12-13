<?php
@require('./connect.php');


$tableName = "task";
$response = $conn->query("SHOW TABLES LIKE '$tableName'");
if($response->num_rows > 0){ echo "<script> alert('Podana tabela już instnieje')</script>";} else{

$sql = "CREATE TABLE $tableName (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
messageFromUser VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "<script> alert('Tabela została utworzona')</script>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
}
?>