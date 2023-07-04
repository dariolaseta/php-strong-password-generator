<?php 
$passwordLength = $_GET["character-length"];
$charactersList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()[]";
//echo $passwordLength;

function generatePassword($length, $characters){
    $password = array();
    $availableCharacters = strlen($characters);
    
    if(empty($length) || !is_numeric($length)){
        return false;
    }else{
        for($i = 0; $i < $length; $i++){
            $randomNumber = rand(0, $availableCharacters);
            
            array_push($password, $characters[$randomNumber]);
        }

        return implode($password);
    }
}

$generatedPassword = generatePassword($passwordLength, $charactersList);
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strong password generator</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-primary">
        <div class="container">
            <h1 class="text-center mt-5 text-secondary">Strong Password Generator</h1>
            <h2 class="text-center">Genera una password sicura</h2>
            <div class="bg-light">
                <form action="./index.php" method="get" class="mt-5 px-5 py-5">
                    <label for="character-length">Lunghezza password:</label>
                    <input type="number" name="character-length" id="character-length" placeholder="Inserisci un numero..." class="ms-5">
                    <button type="submit" class="btn btn-primary mx-5">Invia</button>
                </form>

                <p class="text-center pb-5 pt-5">
                    <?php 
                        echo "La password generata è: " . $generatedPassword;
                    ?>
                </p>
            </div>
        </div>
    </body>
</html>