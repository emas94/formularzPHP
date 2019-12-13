<?php
@require('./connect.php');
if (empty($_POST["firstName"]) ||

empty($_POST["lastName"]) ||

empty($_POST["email"]) || empty($_POST["message"])) {
  echo 'Proszę wypełnić wymagane pola';} else {
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO tasks (firstname, lastname, email,messageFromUser)
VALUES ('$firstName', '$lastName', '$email' ,'$message')";

if ($conn->query($sql) === TRUE) {
    echo "Rekord został dodany poprawnie";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>