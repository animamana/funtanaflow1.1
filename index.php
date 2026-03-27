<?php
// Multilingual Support
session_start();

// Language translations
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

$translations = [
    'en' => [
        'header' => 'Welcome to Funtana Flow',
        'nav' => ['home' => 'Home', 'sups' => 'Stand Up Paddle', 'kayak' => 'Kayak', 'kite' => 'Kite Surf', 'sinis' => 'Sinis Exploration'],
        'banner' => 'Explore the Best Water Activities',
        'footer' => '© 2026 Funtana Flow. All rights reserved.'
    ],
    'it' => [
        'header' => 'Benvenuto su Funtana Flow',
        'nav' => ['home' => 'Home', 'sups' => 'Stand Up Paddle', 'kayak' => 'Kayak', 'kite' => 'Kite Surf', 'sinis' => 'Esplorazione Sinis'],
        'banner' => 'Esplora le Migliori Attività Acquatiche',
        'footer' => '© 2026 Funtana Flow. Tutti i diritti riservati.'
    ],
    'de' => [
        'header' => 'Willkommen bei Funtana Flow',
        'nav' => ['home' => 'Startseite', 'sups' => 'Stand Up Paddle', 'kayak' => 'Kajak', 'kite' => 'Kite Surf', 'sinis' => 'Sinis Erkundung'],
        'banner' => 'Entdecken Sie die besten Wasseraktivitäten',
        'footer' => '© 2026 Funtana Flow. Alle Rechte vorbehalten.'
    ]
];

// Set a default language
if (!array_key_exists($lang, $translations)) {
    $lang = 'en';
}

// HTML Output
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translations[$lang]['header']; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $translations[$lang]['header']; ?></h1>
        <nav>
            <ul>
                <?php foreach ($translations[$lang]['nav'] as $key => $value): ?>
                    <li><a href="#<?php echo $key; ?>"><?php echo $value; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    <section id="banner">
        <h2><?php echo $translations[$lang]['banner']; ?></h2>
    </section>
    <section id="activities">
        <h2>Activities</h2>
        <p>Choose your adventure!</p>
        <!-- Add forms/sections for each activity here -->
    </section>
    <footer>
        <p><?php echo $translations[$lang]['footer']; ?></p>
    </footer>
</body>
</html>