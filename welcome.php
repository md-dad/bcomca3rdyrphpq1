<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the entered name
  $name = $_POST["name"];

  // Display a greeting message
  echo "<h3>Hello, $name!</h3>";
}
?>