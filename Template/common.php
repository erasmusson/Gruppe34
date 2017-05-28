<?php
// Gjør slik at siden husker hvilke språk brukeren har valgt ved bruk av cookies.
session_start();
header('Cache-control: private'); // IE 6 FIX
if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];
// registrerer sesjonen og setter opp cookien.
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
switch ($lang) {

//velger mellom norsk og engelsk via navbaren.
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