<?php
// metode som gjør at nettsiden husker hvilke språk brukeren valgte.
session_start();
header('Cache-control: private');
if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];
// registrer en session også setter inn en cookie.
$_SESSION['lang'] = $lang;
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'en';
}

// skifter på språkene, hvor default er norsk.
switch ($lang) {

case 'no':
$lang_file = 'lang.no.php';
break;
case 'en':
$lang_file = 'lang.en.php';
break;
default:
$lang_file = 'lang.no.php';
}
include_once 'languages/'.$lang_file;
?>