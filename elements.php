<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en', 'it', 'de'])) $lang = 'en';
require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';

$translations = [
    'en' => [
        'title' => 'Events',
        'summer_camp' => 'Summer Camp',
        'night_sup' => 'Night SUP',
        'kayak_tour' => 'Kayak Tour',
        'kite_competition' => 'Kite Competition',
    ],
    'it' => [
        'title' => 'Eventi',
        'summer_camp' => 'Campo Estivo',
        'night_sup' => 'SUP Notturno',
        'kayak_tour' => 'Tour in Kayak',
        'kite_competition' => 'Competizione di Aquiloni',
    ],
    'de' => [
        'title' => 'Veranstaltungen',
        'summer_camp' => 'Sommercamp',
        'night_sup' => 'Nacht SUP',
        'kayak_tour' => 'Kajak Tour',
        'kite_competition' => 'Drachenwettbewerb',
    ],
];

$t = $translations[$lang] ?? $translations['en'];
?>
<main>
    <h1><?php echo $t['title']; ?></h1>
    <ul>
        <li><?php echo $t['summer_camp']; ?></li>
        <li><?php echo $t['night_sup']; ?></li>
        <li><?php echo $t['kayak_tour']; ?></li>
        <li><?php echo $t['kite_competition']; ?></li>
    </ul>
</main>
<?php
require_once __DIR__ . '/includes/footer.php';
?>
