<?php

function getLanguageFromURL() {
    // Check if the 'lang' parameter is present in the URL
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        // Validate the language parameter (for example, only allow 'en' or 'es')
        if (in_array($lang, ['en', 'es'])) {
            return $lang;
        }
    }
    // Default language
    return 'en';
}

// Usage example
$currentLanguage = getLanguageFromURL();
echo "Current Language: " . htmlspecialchars($currentLanguage);

?>