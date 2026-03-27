<?php

// Multilingual Support for Kite Surf Lessons and Rentals

// Italian Language
$it = [
    'title' => 'Noleggio Lezioni di Kite Surf',
    'description' => 'Offriamo lezioni di kite surf per tutti i livelli e noleggio attrezzatura di alta qualità. Contattaci per maggiori informazioni.',
];

// English Language
$en = [
    'title' => 'Kite Surf Lessons and Rentals',
    'description' => 'We offer kite surf lessons for all levels and rentals of high-quality equipment. Contact us for more information.',
];

// German Language
$de = [
    'title' => 'Kite Surf Unterricht und Vermietung',
    'description' => 'Wir bieten Kite Surf Unterricht für alle Niveaus und Vermietung von hochwertiger Ausrüstung an. Kontaktieren Sie uns für weitere Informationen.',
];

// Function to get content based on language
function getContent($lang) {
    global $it, $en, $de;
    switch($lang) {
        case 'it': return $it;
        case 'en': return $en;
        case 'de': return $de;
        default: return $en; // fallback to English
    }
}

// Example of usage
$lang = 'en'; // Assume language is set to English
$content = getContent($lang);

// Display content
echo '<h1>' . $content['title'] . '</h1>';
echo '<p>' . $content['description'] . '</p>'; 

?>