<?php
// Array to store language key-value pairs
$languages = array(
    'en' => 'English',
    'kh' => 'Khmer',
    'cn' => 'Chinese',
    'th' => 'Thai',
    'vn' => 'Vietnamese'
);

session_start();

// Default language
$default_language = 'en';

// Check if the user has set a language preference in the URL
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $languages)) {
    $_SESSION['lang'] = $_GET['lang'];

    // Set a cookie to remember the user's language preference
    setcookie('lang', $_SESSION['lang'], time() + 365 * 24 * 60 * 60); // Cookie valid for 1 year
} elseif (isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $languages)) {
    // Use the language stored in the cookie
    $_SESSION['lang'] = $_COOKIE['lang'];
} elseif (isset($_SESSION['lang'])) {
    // Use the language stored in the session
} else {
    // Use the default language
    $_SESSION['lang'] = $default_language;
}

// Include the language file (if needed)
include_once __DIR__ . "/lang/{$_SESSION['lang']}.php";


// // Display language selection links
// echo '<div>';
// foreach ($languages as $key => $value) {
//      echo "<a href='?lang=$key'>{$lang['lang_' . $key]}</a> ";
// }
// echo '</div>';
?>
