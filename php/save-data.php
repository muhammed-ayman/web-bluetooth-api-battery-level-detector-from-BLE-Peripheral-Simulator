<?php

  if (isset($_POST['data'])) {
    $_data = $_POST['data'];
  } else {
    exit('No POST request is available');
  }

  $servername = 'localhost';
  $username = 'root';
  $password = '';

  try {
    $conn = new PDO("mysql:host=$servername;dbname=battery_level_detector", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $sql = "INSERT INTO `data` (data, timestamp)
  VALUES ($_data, CURRENT_TIMESTAMP())";
  $stmt = $conn->prepare($sql);

  if ($stmt->execute()) {
    echo "New record created successfully";
    echo time();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
