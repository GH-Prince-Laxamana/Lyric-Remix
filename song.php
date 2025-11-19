<?php

// Activity: Lyric Remix
// Author: Laxamana, Prince
// Section: WD-203
// Date: November 19, 2025

// Strings
$title = "<h1>Photograph</h1>";
$artist = "<h2>by Ed Sheeran</h2>";

// Array of Verbs, Nouns, and Adjectives
$verbs = [
    "hurt", "know", "get", "makes", "keep", "made", "closing", 
    "broken", "frozen", "holdin'", "meet", "wait", "come", "heal", 
    "mend", "swear", "remember", "take", "fit", "got", "should", 
    "bleed", "let", "go", "kissed", "hearin'", "whisper"
];

$nouns = [
        "lovin'", "thing", "hard", "times", "us", "life", "love", 
        "photograph", "memories", "ourselves", "eyes", "hearts", "time",
        "pocket", "jeans", "you", "home", "soul", "piece", "death", "necklace",
        "heartbeat", "words", "pages", "lamppost", "street", "phone"
];

$adjectives = [
                "only", "never", "forever", "ripped", "closer", "alone", "easier", 
                "sixteen", "deep", "okay"
];

// This set of functions basically does the bold of character type of animation 
// that is often found on music-streaming apps. However, 
// it is only for display purposes as it does not follow the music itself. 

$line_delay = 0; //This sets the delay before applying the animation to each line

//We call this function in our HTML to display and apply the animation of our lyrics.
// It does the following:
// 1. Navigate the per line of each section using enhanced for loop (e.g. line 1 of chorus)
// 2. Splits the line into characters
// 3. Reconstruct the html element with an id for CSS purposes, 
//    including setting a span to apply animation delay between characters as well.
// 4. Computes the delay based on the length of the line. The $delay is 
//    for each character of the line. The $line_delay is the time before it animates the next line.
function display_line($stanza_part) { 
    
    global $line_delay; //Made global so it does not reset.

    foreach ($stanza_part as $line) {
        $chars = str_split($line);
        
        echo "<p id=\"line\">";
        foreach ($chars as $index => $char) {
            $delay = $line_delay + ($index * 0.05);
            echo "<span style=\"animation-delay: {$delay}s\">$char</span>";
        }
        echo "</p>";

        $line_delay += count($chars) * 0.05 + 1;
    }
}

// Strings
$chorus_end = "Wait for me to come home";

// Arrays of Lyrics per Section of the song
$chorus = [
    "So you can keep me",
    "Inside the pocket of your ripped jeans",
    "Holdin' me closer 'til our eyes meet",
    "You won't ever be alone",
    $chorus_end
];

$chorus_2 = [
    "And if you hurt me",
    "Well, that's okay, baby, only words bleed",
    "Inside these pages, you just hold me",
    "And I won't ever let you go",
    $chorus_end
];

$chorus_3 = [
    "Oh, you can fit me",
    "Inside that necklace you got when you were sixteen",
    "Next to your heartbeat, where I should be",
    "Keep it deep within your soul"
];

$prechorus = [
    "We keep this love in a photograph",
    "We made these memories for ourselves",
    "Where our eyes are never closin'",
    "Hearts are never broken",
    "And time's forever frozen still"
];

// Numerical
$verse_count = 1;

$verse1 = [
    "Lovin' can hurt",
    "Lovin' can hurt sometimes",
    "But it's the only thing that I know",
    "And when it gets hard",
    "You know it can get hard sometimes",
    "It is the only thing that makes us feel alive"
];

$verse2 = [
    "Lovin' can heal",
    "Lovin' can mend your soul",
    "And it's the only thing that I know, know",
    "I swear it will get easier",
    "Remember that with every piece of ya",
    "Mm, and it's the only thing we take with us when we die"
];

$bridge = [
    "Wait for me to come home",
    "Wait for me to come home",
    "Wait for me to come home"
];

$outro = [
    "When I'm away, I will remember how you kissed me",
    "Under the lamppost back on Sixth Street",
    "Hearin' you whisper through the phone",
    "Wait for me to come home"
];

$footer_content = "<p class=\"footer\">Lyric Website | Made with PHP | Prince Laxamana &copy 2025</p>";

// Numerical
$totalVerbs = count($verbs);
$totalNoun = count($nouns);
$totalAdjectives = count($adjectives);

// Type Juggling
$funFact1 = "There are a total of " . ($totalVerbs) . " verbs in the song!";
$funFact2 = "There are a total of " . ($totalNoun) . " nouns in the song!";
$funFact3 = "There are a total of " . ($totalAdjectives) . " adjectives in the song!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyric Remix</title>

    <style>
        body {
            font-family: "Verdana";
            margin: 4em;
            background: #000;
            color: white;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 2em;
        }

        p {
            font-size: 1.5rem;
        }

        footer p {
            color: rgba(255, 255, 255, 0.85);
        }

        img {
            width: auto;
            height: 20em;
        }

        .section {
            font-weight: bold;
        }

        #line span {
            color: #555;
            font-weight: normal;
            animation: lyric_bold 0.5s linear forwards;
        }

        @keyframes lyric_bold {
            0% {color:rgba(255, 255, 255, 0.85);}
            50% {color: rgba(255, 255, 255, 0.95);}
            100% {color:rgba(255, 255, 255, 0.85);}
        }

    </style>
</head>

<body>
    <img src="cover_photo.jpg" alt="Song Photo">

    <?= $title ?>
    <?= $artist ?>

    <p class="section">Verse <?= $verse_count ?></p>
    <?= display_line($verse1) ?>
    <br>

    <p class="section">Pre-Chorus</p>
    <?= display_line($prechorus) ?>
    <br>

    <p class="section">Chorus</p>
    <?= display_line($chorus) ?>
    <br><br>

    <p class="section">Verse <?= ($verse_count + 1) ?></p>
    <?= display_line($verse2) ?>
    <br>

    <p class="section">Pre-Chorus</p>
    <?= display_line($prechorus) ?>
    <br>

    <p class="section">Chorus</p>
    <?php (display_line($chorus) + display_line($chorus_2)); ?>
    <br>

    <p class="section">Bridge</p>
    <?= display_line($bridge) ?>
    <br>

    <p class="section">Chorus</p>
    <?php (display_line($chorus_3) + display_line($chorus_2)); ?>
    <br>

    <p class="section">Outro</p>
    <?= display_line($outro) ?>
    <br>

    <?= $footer_content ?>
</body>

</html>
