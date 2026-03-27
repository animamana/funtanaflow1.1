<?php
// Multilingual support for Stand Up Paddle Activity
$language = $_GET['lang'] ?? 'it'; // Default language is Italian

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

echo "<h1>" . $texts[$language]['title'] . "</h1>";
echo "<p>" . $texts[$language]['description'] . "</p>";
echo "<p>" . $texts[$language]['lessons'] . "</p>";
?>