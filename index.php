<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>

<div class="pagewrap">

<h1>Welcome to the Great Number Game</h1>
<p>I am thinking of a number between 1 and 100.</p>
<p>Take a guess</p>


<?php
if(isset($_SESSION["response"])) {
    ?>
<div class="response <?php if(isset($_SESSION["win"]) && $_SESSION['win'] == true ){echo "success";}else{echo "error";} ?>">
<?php
    
        echo "<p>" . $_SESSION["response"];
        if($_SESSION['win'] == true) {
            echo "<br /><a href='reset.php'><button>Play Again</button></a>";
        }
        echo "</p>";
?>
</div>

<?php } ?>

<form action="process.php" method="post">
<input type="text" name="guess">
<input type="submit" value="Guess">
</form>

</div>
    
</body>
</html>