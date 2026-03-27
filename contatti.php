<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en','it','de'])) $lang = 'en';
require_once __DIR__.'/includes/config.php';
include __DIR__.'/includes/header.php';
$translations = [
    'it' => [
        'title' => 'Contatti',
        'name' => 'Nome',
        'email' => 'Email',
        'message' => 'Messaggio',
        'send' => 'Invia',
        'contact_info' => 'Informazioni di Contatto',
    ],
    'en' => [
        'title' => 'Contact',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Message',
        'send' => 'Send',
        'contact_info' => 'Contact Information',
    ],
    'de' => [
        'title' => 'Kontakt',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Nachricht',
        'send' => 'Senden',
        'contact_info' => 'Kontaktinformationen',
    ],
];
$t = $translations[$lang];
$contactEmail = "contact@example.com"; // put your real email
$contactPhone = "+123456789"; // put your real phone
$contactAddress = "123 Address St, City, Country"; // put your real address
?>
<main>
    <h1><?php echo $t['title']; ?></h1>
    <h2><?php echo $t['contact_info']; ?></h2>
    <p>Email: <?php echo $contactEmail; ?></p>
    <p>Phone: <?php echo $contactPhone; ?></p>
    <p>Address: <?php echo $contactAddress; ?></p>
    <form action="process-contact.php" method="post">
        <label><?php echo $t['name']; ?>:</label>
        <input type="text" name="name" required>
        <label><?php echo $t['email']; ?>:</label>
        <input type="email" name="email" required>
        <label><?php echo $t['message']; ?>:</label>
        <textarea name="message" required></textarea>
        <button type="submit"><?php echo $t['send']; ?></button>
    </form>
</main>
<?php
require_once __DIR__.'/includes/footer.php';
?>