<?php

session_start();
$table = $_SESSION['user'];
$conn = new mysqli('localhost', 'root', 'ashSQLpassword', 'agendaDB');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$date = date("Y-m-d");
$sql = "SELECT food, calories FROM $table";// WHERE eatdate='$date'";
$result = $conn->query($sql);

echo "<div id='foodEaten' style='display: block;'>";
if ($result->num_rows > 0) {
  echo "<table border='1' class='foodTab'><tr><th>Food</th><th>Calories</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["food"] . "</td><td>" . $row["calories"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No food eaten today yet.";
}
echo "</div>";

?>