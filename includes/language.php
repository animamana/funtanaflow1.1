<?php
// Updated code to handle language selection without echoing output

function handleLanguageSelection($selectedLanguage) {
    $availableLanguages = ['en', 'it', 'de'];
    // Handle language selection properly without echoing
    if (in_array($selectedLanguage, $availableLanguages)) {
        // Process the selected language
        return $selectedLanguage;
    } else {
        // Handle invalid selection
        return 'en';
    }
}