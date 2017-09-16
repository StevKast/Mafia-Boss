<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Game</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="center">

  <p>
    <?php

      $roomcode = $_POST["roomcode"];
      $roomcode_string = "game_$roomcode";

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


      //TODO Add entering nickname;
      //Add player to table
      $sqlAddPlayer = "INSERT INTO $roomcode_string (host, player, role)
        VALUES ('0', 'Bob', 'Player')";

      if ($conn->query($sqlAddPlayer) === TRUE) {
        echo "<br>New Player add created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }




    ?>
  </p>
</div>

</body>
</html>
