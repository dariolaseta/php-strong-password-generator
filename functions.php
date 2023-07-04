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