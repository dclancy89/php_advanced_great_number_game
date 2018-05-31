<?php

session_start();

if(!isset($_SESSION['answer'])) {
    $_SESSION['answer'] = random_int(1,100);
}

$guess = $_POST['guess'];

if($guess > $_SESSION['answer']) {
    $_SESSION["response"] = "Too high";
    $_SESSION["win"] = false;
} else if ($guess < $_SESSION['answer']) {
    $_SESSION["response"] = "Too low";
    $_SESSION["win"] = false;
} else if ( $guess == $_SESSION["answer"]) {
    $_SESSION["response"] = $_SESSION['answer'] . " was the number!";
    $_SESSION["win"] = true;
}

header('Location: index.php');