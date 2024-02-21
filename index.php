<?php 

//Recupero password
$lunghezza_password = $_GET['password'] ?? '';

//Creo array con tutti i possibili simboli 
$caracter_array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z','0', '1', '2', '3', '4', '5', '6', '7', '8', '9','!', '"', '£', '$', '%', '&', '/', '(', ')', '=', '?', '^', '*', '[', ']'];

//Mi ricavo la lunghezza totale dellàrray di caratteri
$length = count($caracter_array) - 1 ;

//genero la password
for($i=0; $i > $lunghezza_password; $i++) {
    $caracter = rand(0, $length);
    $pass[] = $caracter_array[$caracter];
}
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
            <div class="my-5 text-center">
                <h3>La password è:</h3>
                <p><?php  echo $pass ?></p>
            </div>
        </form>
    </div>
</body>
</html>