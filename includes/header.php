<?php
// Header partial - outputs full HTML5 document opening, head with CSS, and navigation
// The $lang variable must be set before including this file
if (!isset($lang)) $lang = 'en';
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funtana Flow</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php?lang=<?php echo $lang; ?>">Home</a></li>
            <li><a href="aboutus.php?lang=<?php echo $lang; ?>">About Us</a></li>
            <li><a href="noleggio-lezioni-kayak.php?lang=<?php echo $lang; ?>">Kayak</a></li>
            <li><a href="noleggio-lezioni-kite-surf.php?lang=<?php echo $lang; ?>">Kite Surf</a></li>
            <li><a href="noleggio-lezioni-stand-up-paddle.php?lang=<?php echo $lang; ?>">SUP</a></li>
            <li><a href="penisola-sinis.php?lang=<?php echo $lang; ?>">Penisola Sinis</a></li>
            <li><a href="elements.php?lang=<?php echo $lang; ?>">Events</a></li>
            <li><a href="contatti.php?lang=<?php echo $lang; ?>">Contatti</a></li>
        </ul>
    </nav>
</header>
