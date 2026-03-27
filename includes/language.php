// Updated code to handle language selection without echoing output

function handleLanguageSelection($selectedLanguage) {
    // Your code logic here
    // Handle language selection properly without echoing
    if (in_array($selectedLanguage, $availableLanguages)) {
        // Process the selected language
        return $selectedLanguage;
    } else {
        // Handle invalid selection
        return 'default';
    }
}