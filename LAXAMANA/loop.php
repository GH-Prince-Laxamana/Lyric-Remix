<?php

// Activity: PHP Control Structures (Loops)
// Author: Laxamana, Prince S.
// Section: WD-203
// Date: November 26, 2025

$prices = [
            "Pork" => 9.50,
            "Gabi" => 2.50,
            "Kangkong" => 3.00,
            "Sibuyas" => 1.50,
            "Pan" => 4.50
        ];

$grocery_list = [
            "Pork" => 1,
            "Gabi" => 2,
            "Kangkong" => 3,
            "Sibuyas" => 5,
            "Pan" => 1
        ];

$grocery_price = [
            "Pork" => 0,
            "Gabi" => 0,
            "Kangkong" => 0,
            "Sibuyas" => 0,
            "Pan" => 0
        ];

$total_prices = [];

// FOREACH LOOP
$total = 0;
foreach($grocery_price as $item => $value) {
    $grocery_price[$item] = $grocery_list[$item] * $prices[$item];
    $total += $grocery_price[$item];
    $total_prices[] = $grocery_price[$item];
}

$budget = rand(1,100);

// FOR LOOP
$current_budget = $budget;
for($i = 0; $i < count($total_prices); $i++) {
    $current_budget -= $total_prices[$i];
}

if ($current_budget < 0) {
    $display = "You are over budget!";
} else {
    $display = "Good job! You still have PHP " . $current_budget;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>
    <link rel="stylesheet" href="css/styles.css"> 
    <style>
        body {
            background-color:rgb(255, 255, 255);
        }

        h1, h2, p {
            color:rgb(15, 56, 33);
        }

        footer {
            position: absolute;
            bottom: 0;
        }

        footer, header {
            background-color:rgb(4, 66, 20);
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php';?>

    <h1>MY GROCERY LIST</h1>

    <h2>Pork: PHP <?= $grocery_price["Pork"] ?></h2>
    <h2>Gabi: PHP <?= $grocery_price["Gabi"] ?></h2>
    <h2>Kangkong: PHP <?= $grocery_price["Kangkong"] ?></h2>
    <h2>Sibuyas: PHP <?= $grocery_price["Sibuyas"] ?></h2>
    <h2>Pan: PHP <?= $grocery_price["Pan"] ?></h2>

    <br>

    <h2>Total: PHP <?= $total ?></h2>
    <h2>Budget: PHP <?= $budget ?></h2>

    <br>

    <h2><?= $display ?></h2>
    <p class="note">Refresh to see budget price changes.</p>

    <?php include 'includes/footer.php';?>
</body>
</html>