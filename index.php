<?php
session_start();
$lang = (isset($_GET['lang']) ? strtolower($_GET['lang']) : 'en');
if (!in_array($lang, ['en','it','de'])) $lang = 'en';
require_once __DIR__.'/includes/config.php';
include __DIR__.'/includes/header.php';
?>
<main>
    <h1>
        <?php
            $translations = [
                'en' => 'Welcome to Funtana Flow!',
                'it' => 'Benvenuto su Funtana Flow!',
                'de' => 'Willkommen bei Funtana Flow!'
            ];
            echo $translations[$lang];
        ?>
    </h1>
    <section id="activities">
        <h2>Activities</h2>
        <p>Choose your adventure!</p>
    </section>
</main>
<?php
require_once __DIR__.'/includes/footer.php';
?>