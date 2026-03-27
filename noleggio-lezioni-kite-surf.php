<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en', 'it', 'de'])) $lang = 'en';
require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';

// Multilingual Support for Kite Surf Lessons and Rentals

$languages = [
    'it' => [
        'title' => 'Noleggio Lezioni di Kite Surf',
        'description' => 'Offriamo lezioni di kite surf per tutti i livelli e noleggio attrezzatura di alta qualità. Contattaci per maggiori informazioni.',
    ],
    'en' => [
        'title' => 'Kite Surf Lessons and Rentals',
        'description' => 'We offer kite surf lessons for all levels and rentals of high-quality equipment. Contact us for more information.',
    ],
    'de' => [
        'title' => 'Kite Surf Unterricht und Vermietung',
        'description' => 'Wir bieten Kite Surf Unterricht für alle Niveaus und Vermietung von hochwertiger Ausrüstung an. Kontaktieren Sie uns für weitere Informationen.',
    ],
];

$content = isset($languages[$lang]) ? $languages[$lang] : $languages['en'];
?>
<main>
    <h1><?php echo $content['title']; ?></h1>
    <p><?php echo $content['description']; ?></p>
</main>
<?php
require_once __DIR__ . '/includes/footer.php';
?>
