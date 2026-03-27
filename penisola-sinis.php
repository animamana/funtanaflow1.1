<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en', 'it', 'de'])) $lang = 'en';
require_once __DIR__ . '/includes/config.php';
include __DIR__ . '/includes/header.php';

$multilingual_content = [
    'it' => [
        'title' => 'Esplorando la Penisola del Sinis',
        'tharros' => 'Tharros è un antico sito fenicio che offre splendide rovine e sculture.',
        'monteprama' => 'Monteprama è famoso per le sue statue in pietra risalenti al IX secolo a.C.',
        'san_salvatore' => 'San Salvatore è un luogo di culto e offre una vista panoramica sulla costa.',
    ],
    'en' => [
        'title' => 'Exploring the Sinis Peninsula',
        'tharros' => 'Tharros is an ancient Phoenician site featuring beautiful ruins and sculptures.',
        'monteprama' => 'Monteprama is famous for its stone statues dating back to the 9th century BC.',
        'san_salvatore' => 'San Salvatore is a place of worship that offers panoramic views of the coast.',
    ],
    'de' => [
        'title' => 'Erkundung der Sinis-Halbinsel',
        'tharros' => 'Tharros ist eine alte phönizische Stätte mit schönen Ruinen und Skulpturen.',
        'monteprama' => 'Monteprama ist berühmt für seine Steinstatuen aus dem 9. Jahrhundert v. Chr.',
        'san_salvatore' => 'San Salvatore ist ein Ort der Verehrung und bietet einen Panoramablick auf die Küste.',
    ],
];

$c = isset($multilingual_content[$lang]) ? $multilingual_content[$lang] : $multilingual_content['en'];
?>
<main>
    <h1><?php echo $c['title']; ?></h1>
    <p><?php echo $c['tharros']; ?></p>
    <p><?php echo $c['monteprama']; ?></p>
    <p><?php echo $c['san_salvatore']; ?></p>
</main>
<?php
require_once __DIR__ . '/includes/footer.php';
?>
