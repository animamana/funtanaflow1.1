<?php
// Set default language
$lang = 'EN'; // default language
if (isset($_GET['lang'])) {
    $lang = $_GET['lang']; // retrieve language from URL
}

// Translations
$translations = [
    'IT' => [
        'title' => 'Contatti',
        'name' => 'Nome',
        'email' => 'Email',
        'message' => 'Messaggio',
        'send' => 'Invia',
        'contact_info' => 'Informazioni di Contatto',
    ],
    'EN' => [
        'title' => 'Contact',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Message',
        'send' => 'Send',
        'contact_info' => 'Contact Information',
    ],
    'DE' => [
        'title' => 'Kontakt',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Nachricht',
        'send' => 'Senden',
        'contact_info' => 'Kontaktinformationen',
    ],
];

// Contact Information
$contactEmail = "contact@example.com"; // Update with actual email
$contactPhone = "+123456789"; // Update with actual phone
$contactAddress = "123 Address St, City, Country"; // Update with actual address
?>

<!DOCTYPE html>
<html lang="<?php echo strtolower($lang); ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $translations[$lang]['title']; ?></title>
</head>
<body>
    <h1><?php echo $translations[$lang]['title']; ?></h1>
    <h2><?php echo $translations[$lang]['contact_info']; ?></h2>
    <p>Email: <?php echo $contactEmail; ?></p>
    <p>Phone: <?php echo $contactPhone; ?></p>
    <p>Address: <?php echo $contactAddress; ?></p>
    
    <form action="send_contact.php" method="post">
        <label><?php echo $translations[$lang]['name']; ?>:</label>
        <input type="text" name="name" required>
        
        <label><?php echo $translations[$lang]['email']; ?>:</label>
        <input type="email" name="email" required>
        
        <label><?php echo $translations[$lang]['message']; ?>:</label>
        <textarea name="message" required></textarea>
        
        <button type="submit"><?php echo $translations[$lang]['send']; ?></button>
    </form>

    <footer>
        <a href="https://facebook.com">Facebook</a>
        <a href="https://twitter.com">Twitter</a>
        <a href="https://instagram.com">Instagram</a>
    </footer>
</body>
</html>
