<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en', 'it', 'de'])) $lang = 'en';
require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';

// Multilingual support for Stand Up Paddle Activity

$texts = [
    'it' => [
        'title' => 'Noleggio e Lezioni di Stand Up Paddle',
        'description' => 'Goditi il nostro servizio di noleggio e lezioni di Stand Up Paddle nel bellissimo lago.',
        'lessons' => 'Lezioni disponibili per tutti i livelli.',
    ],
    'en' => [
        'title' => 'Stand Up Paddle Rentals and Lessons',
        'description' => 'Enjoy our Stand Up Paddle rental and lessons service in the beautiful lake.',
        'lessons' => 'Lessons available for all levels.',
    ],
    'de' => [
        'title' => 'Stand Up Paddle Vermietungen und Lektionen',
        'description' => 'Genießen Sie unseren Vermietungs- und Unterrichtsdienst für Stand Up Paddle am wunderschönen See.',
        'lessons' => 'Unterricht für alle Niveaus verfügbar.',
    ],
];

$content = isset($texts[$lang]) ? $texts[$lang] : $texts['en'];
?>
<main>
    <h1><?php echo $content['title']; ?></h1>
    <p><?php echo $content['description']; ?></p>
    <p><?php echo $content['lessons']; ?></p>
</main>
<?php
require_once __DIR__ . '/includes/footer.php';
?>
