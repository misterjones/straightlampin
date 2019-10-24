<?php

  $servername = "localhost";
  $username = "root";
  $password = "root";

  $eol = "<br/>" . PHP_EOL;

  // Create connection
  $conn = new mysqli($servername, $username, $password, 'lampdb');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . $eol);
  }
  echo "Connected successfully" . $eol;
  $res = mysqli_query($conn, 'SELECT * FROM hello');
  while($row = mysqli_fetch_assoc($res)) {
    echo "hello " . $row['planet'] . $eol;
  }

?>