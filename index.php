<?php 
$lunghezza_password = $_GET['password'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOOTSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous">
    <title>Strong Password</title>
</head>
<body>
    <h1 class="text-center my-5">Password Generator</h3>
    <div class="container">
        <form action="index.php" method="GET">
        <div class="mb-3 d-flex justify-content-center m-5">
                    <div>
                        <p>Lunghezza Password:</p>
                    </div>
                    <div>
                        <input type="number" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                     <button type="reset" class="btn btn-secondary">Annulla</button>

            </div>
        </form>
    </div>
</body>
</html>