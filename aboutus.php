<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en','it','de'])) $lang = 'en';
require_once __DIR__.'/includes/config.php';
include __DIR__.'/includes/header.php';
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
$labels = $translations[$lang];
?>
<main>
    <h1><?php echo $labels['title']; ?></h1>
    <p><?php echo $labels['content']; ?></p>
    <h2><?php echo $labels['select_language']; ?></h2>
    <ul>
        <li><a href="?lang=en">English</a></li>
        <li><a href="?lang=it">Italian</a></li>
        <li><a href="?lang=de">German</a></li>
    </ul>
</main>
<?php
require_once __DIR__.'/includes/footer.php';
?>