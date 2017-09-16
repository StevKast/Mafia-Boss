<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Game</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body onunload="">
  <h1>
    HOST
  </h1>


  <p>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    //Connection test
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    //end connection test

    mysqli_select_db($conn, "currentgames");

    //Generate random number for room code
    $roomcode = (rand(1, 10));
    echo "<br>Room Code is: ".$roomcode."<br>";
    $roomcode_string = "game_$roomcode"; //Format roomcode


    //Check if room code already exists and if so, delete it.
    if($conn->query("DESCRIBE $roomcode_string")) {
      $conn->query("DROP TABLE $roomcode_string");
    }

    //Create new table for running the game
    $sqlCreate = "CREATE TABLE $roomcode_string (
      playerNum INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      host INT(1) NOT NULL,
      player VARCHAR(30) NOT NULL,
      role VARCHAR(30),
      reg_date TIMESTAMP
    )";

    if ($conn->query($sqlCreate) === TRUE) {
      echo "Table ". $roomcode ." created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }

    //TODO Add entering nickname;
    //Add host player to table
    $sqlAddHost = "INSERT INTO $roomcode_string (host, player, role)
      VALUES ('1', 'Doe', 'Host')";

    if ($conn->query($sqlAddHost) === TRUE) {
      echo "<br>New host add created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    ?>

  </p>


</body>
</html>
