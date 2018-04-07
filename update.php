<?php

session_start();
$table = $_SESSION['user'];
$conn = new mysqli('localhost', 'root', 'ashSQLpassword', 'agendaDB');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT food, calories FROM $table WHERE eatdate='" . date("Y-m-d") . "'";
$result = $conn->query($sql);

echo "<div id='foodEaten' style='display: block;'>";
if ($result->num_rows > 0) {
  echo "<table border='1' class='foodTab'><tr><th>Food</th><th>Calories</th></tr>";
  while($row = $result->fetch_assoc()) {
    $arrDP = explode("-", $rowP["due"]);
    $dayP = date("D", mktime(0, 0, 0, $arrDP[1], $arrDP[2], $arrDP[0]));
    $dateP = $arrDP[1] . "/" .  $arrDP[2] . ", " . $dayP;
    $linkDoneP = "finished.php?id=" . $rowP["id"]/* . "&user=$table"*/;
    echo "<tr><td>" . $row["food"] . "</td><td>" . $rowP["calories"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No food eaten today yet.";
}
echo "</div>";

?>