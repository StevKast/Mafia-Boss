<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Mafia Boss</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <h1>
    Welcome!
  </h1>

  <div class="center">

    <!-- Player Join Game -->
    <form class="" action="player.php" method="post">
      <input type="text" name="roomcode" value="">
      <input type="submit" name="join" value="Join Game">
    </form>

    <!-- Host Create Game -->
    <form class="" action="host.php" method="post">
      <input type="submit" name="create" value="New Game">
    </form>
  </div>

</body>
</html>
