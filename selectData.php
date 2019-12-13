<?php

@require('./connect.php');

$sql1 = "SELECT COUNT('id') as c
FROM tasks";
$sql = "SELECT id, firstname, lastname, email, messageFromUser  FROM tasks";
$result = $conn->query($sql);
$count = $conn->query($sql1);
if ($count->num_rows > 0) {
  $row = $count->fetch_assoc();
echo "<h3 class='mt-4'> Suma wszystkich złoszeń: ".          $row['c']." </h3>";
} else {echo "error";}
if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'><tr><th scope='col'>ID</th><th scope='col'>Imię</th><th scope='col'>Nazwisko</th><th scope='col'>Email</th><th scope='col'>Message</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo
      
   "<tr><th scope='row'>" . $row["id"]. "</th><td>" . $row["firstname"]. " </td>" . "<td>". $row["lastname"]. "</td>"."<td> " . $row["email"]. "</td><td> " . $row["messageFromUser"].  "</td></tr>";;
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
