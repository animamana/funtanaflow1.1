<?php
// Get the selected language from the GET parameter, default to English
$language = isset($_GET['lang']) ? $_GET['lang'] : 'en';

// Translations array
$translations = [
    'en' => [
        'title' => 'About Us',
        'content' => 'Welcome to our website! Here is some information about us.',
        'select_language' => 'Select Language',
    ],
    'it' => [
        'title' => 'Chi Siamo',
        'content' => 'Benvenuti sul nostro sito! Ecco alcune informazioni su di noi.',
        'select_language' => 'Seleziona Lingua',
    ],
    'de' => [
        'title' => 'Über uns',
        'content' => 'Willkommen auf unserer Website! Hier sind einige Informationen über uns.',
        'select_language' => 'Sprache Wählen',
    ],
];

// Get the current translation
$translation = $translations[$language];

// Display the About Us page
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $translation['title']; ?></title>
</head>
<body>
    <h1><?php echo $translation['title']; ?></h1>
    <p><?php echo $translation['content']; ?></p>
    <h2><?php echo $translation['select_language']; ?></h2>
    <ul>
        <li><a href="?lang=en">English</a></li>
        <li><a href="?lang=it">Italian</a></li>
        <li><a href="?lang=de">German</a></li>
    </ul>
</body>
</html>