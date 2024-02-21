<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="my-5 text-center">
         <h3>La password è:</h3>
         <p><?php echo $_SESSION['password']; ?></p>
      </div>
</body>
</html>