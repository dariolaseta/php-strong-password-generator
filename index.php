<?php 


?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong password generator</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center mt-5 text-secondary">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>
            <form action="./index.php" method="get" class="mt-5">
                <label for="characterLength">Lunghezza password:</label>
                <input type="number" name="characterLength" id="characterLength" placeholder="inserisci un numero..." class="ms-5">
            </form>
        </div>
    </body>
</html>