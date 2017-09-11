<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Processing</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <p>
    <?php

      $name = $_POST["name"];
      $num = rand();

      echo $name . " = " . $num;


    ?>
  </p>

</body>
</html>
