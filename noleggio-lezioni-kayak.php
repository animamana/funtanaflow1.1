<?php
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

// Function to get content based on selected language
function getContent($lang) {
    global $languages;
    return isset($languages[$lang]) ? $languages[$lang] : $languages['en']; // Default to English
}

// Example usage
$selected_lang = 'it'; // Dynamic selection based on user input
$content = getContent($selected_lang);
?>

<h1><?php echo $content['title']; ?></h1>
<p><?php echo $content['description']; ?></p>