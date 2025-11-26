<?php

// Activity: PHP Control Structures (Conditional)
// Author: Laxamana, Prince S.
// Section: WD-203
// Date: November 26, 2025

// GAMES

// If elseif else
// Dice Game
$d1 = (rand(1,6));
$d1_img = "img/d" . $d1 . ".jpg";

$d2 = (rand(1,6));
$d2_img = "img/d" . $d2 . ".jpg";

if ($d1 == $d2) {
    $result = "It's a tie.";
} elseif ($d1 > $d2) {
    $result = "Player 1 wins!";
} else {
    $result = "Player 2 wins!";
}

// Switch
// Rock, Paper, Scissors Game
$choices = ["Rock", "Paper", "Scissors"];
$p1 = $choices[rand(0,2)];
$p2 = $choices[rand(0,2)];
$RPSresult = $p1 . " vs " . $p2;

$rock_img = "img/rock.png";
$paper_img = "img/paper.png";
$scissors_img = "img/scissors.png";

switch($p1) {
    case 'Paper':
        $p1_img = $paper_img;
        break;
    case 'Rock':
        $p1_img = $rock_img;
        break;
    case 'Scissors':
        $p1_img = $scissors_img;
        break;
}

switch($p2) {
    case 'Paper':
        $p2_img = $paper_img;
        break;
    case 'Rock':
        $p2_img = $rock_img;
        break;
    case 'Scissors':
        $p2_img = $scissors_img;
        break;
}

switch($RPSresult) {
    case 'Paper vs Rock':
        $display = "Paper beats Rock! Player 1 wins.";
        break;
    case 'Rock vs Paper':
        $display = "Paper beats Rock! Player 2 wins.";
        break;

    case 'Rock vs Scissors':
        $display = "Rock beats Scissors! Player 1 wins.";
        break;
    case 'Scissors vs Rock':
        $display = "Rock beats Scissors! Player 2 wins.";
        break;

    case 'Paper vs Scissors':
        $display = "Scissors beats Paper! Player 1 wins.";
        break;
    case 'Paper vs Scissors':
        $display = "Scissors beats Paper! Player 2 wins.";
        break;
    default:
        $display = "It's a tie.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>
    <link rel="stylesheet" href="css/styles.css"> 
</head>

<body>
    <?php include 'includes/header.php';?>

    <h1>THE GAME STORE</h1>

    <div class="game-container">
        <h2>Roll a Dice!</h2>
        <p class="note">Refresh page to play.</p>

        <div class="players">
            <div class="player">
                <h3>Player 1: <?= $d1 ?></h3>
                <img src=<?=$d1_img?>>
            </div>
            
            <div class="player">
                <h3>Player 2: <?= $d2 ?></h3>
                <img src=<?=$d2_img?>>
            </div>
        </div>
        
        <h2>Result: <?= $result ?></h2>
    </div>

    <div class="game-container">
        <h2>Rock, Paper, Scissors!</h2>
        <p class="note">Refresh page to play.</p>

        <div class="players">
            <div class="player">
                <h3>Player 1: <?= $p1 ?></h3>
                <img src=<?=$p1_img?>>
            </div>
            
            <div class="player">
                <h3>Player 2: <?= $p2 ?></h3>
                <img src=<?=$p2_img?>>
            </div>
        </div>
        
        <h2><?= $display ?></h2>
    </div>

    <?php include 'includes/footer.php';?>
</body>
</html>