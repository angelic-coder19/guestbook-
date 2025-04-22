<?php 
    // Create variables that will contain the contents of the form
    $name = $email = $comment = $time = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = clean_input($_POST['name']);
        $email = clean_input($_POST['email']);
        $comment = clean_input($_POST['comment']);
        $timestamp = strtotime("now"); // This ensures that the timestamp will be for that instance
        $time = date("h:i:sa d-m-Y", $timestamp);            
    }

    // create a function that will validate the input from the user
    function clean_input($input){
        $input = htmlspecialchars($input);
        $input = stripslashes($input);
        $input = trim($input);
        return $input;
    }

    // Displays the input of the user with the timestamp
    echo "$name <br> $email <br> $comment <br> $time"; 
?>