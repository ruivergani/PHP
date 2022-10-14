<?php
  $num_to_guess = 42;
  $message = "";
  if (!isset($_POST['guess'])){
    $message = "Welcome!";
  } 
  else if ($_POST['guess'] > $num_to_guess) {
    $message = $_POST['guess'] . " is too big!";
  } 
  else if ($_POST['guess'] < $num_to_guess) {
    $message = $_POST['guess'] . " is too small!";
  } 
  else {
    $message = "Well done!";
  }
  $guess = (int)$_POST['guess'];
  $num_tries = (int) $_POST['num_tries'];
  $num_tries ++;
  ?>
<html>
<head>
<title>Page 1</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <!-- Form with hidden value to count tries -->
        <form method="post" action="<?php print $_SERVER ['PHP_SELF']?>">
            <input type="hidden" name="num_tries" value="<?php print $num_tries?>"/> 
            Type your guess here: 
            <input type="text" name="guess" value="<?php print $guess?>" />
        </form>
        Quantity Trying: <?php print $num_tries ?><br/>
        <?php print $message ?>
    </div>
</body>
</html>