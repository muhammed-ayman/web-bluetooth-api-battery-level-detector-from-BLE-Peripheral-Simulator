<?php

  $servername = 'localhost';
  $username = 'root';
  $password = '';

  try {
    $conn = new PDO("mysql:host=$servername;dbname=battery_level_detector", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  $sql = "SELECT * FROM `data`";
  $stmt = $conn->prepare($sql);

  if ($stmt->execute()) {
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $res = $stmt->fetchAll();
    echo json_encode($res);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
