<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en', 'it', 'de'])) $lang = 'en';
require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';

// Multilingual support for kayak rentals and lessons

// Language array
$languages = array(
    'it' => array(
        'title' => 'Noleggio e Lezioni di Kayak',
        'description' => 'Offriamo noleggio kayaks e lezioni di kayak per tutti i livelli. Contattaci per maggiori informazioni!'
    ),
    'en' => array(
        'title' => 'Kayak Rentals and Lessons',
        'description' => 'We offer kayak rentals and lessons for all levels. Contact us for more information!'
    ),
    'de' => array(
        'title' => 'Kajakverleih und -unterricht',
        'description' => 'Wir bieten Kajakverleih und Unterricht für alle Niveaus an. Kontaktieren Sie uns für weitere Informationen!'
    )
);

$content = isset($languages[$lang]) ? $languages[$lang] : $languages['en'];
?>
<main>
    <h1><?php echo $content['title']; ?></h1>
    <p><?php echo $content['description']; ?></p>
</main>
<?php
require_once __DIR__ . '/includes/footer.php';
?>
