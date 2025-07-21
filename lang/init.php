<?php
if(session_status() === PHP_SESSION_NONE) {
    // Start the session if it hasn't been started yet
    session_start();
}
// Set language from GET or SESSION
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'ar'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = $_SESSION['lang'] ?? (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) ?? 'ar');
$dir = $lang === 'ar' ? 'rtl' : 'ltr';


function GetTranslations($filename) {
    global $lang;
    return include __DIR__ . "/../lang/{$filename}/{$lang}.php";
}
