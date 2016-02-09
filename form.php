<html>
<head>
  <title>Personalised greeting form</title>
</head>

<body>

<?php

/**
 * Show the customised greeting.
 *
 * Takes the input of the name text box (if not empty) and prints it within the
 * greeting message.
 */
if (!empty($_POST['name'])) {
  echo "Greetings, {$_POST['name']}, and welcome.";
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="name">Enter your name: </label>
  <input type="text" name="name" id="name"/>
  <input type="submit" />
</form>
</body>
</html>
