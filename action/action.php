<?php

// language
if ($_SESSION['lang'] == null) {
    $_SESSION['lang'] = "th";
}
if ($_GET['action'] == 'lang-th') {
    $_SESSION['lang'] = "th";
}
if ($_GET['action'] == 'lang-eng') {
    $_SESSION['lang'] = "gb";
}

// light and dark mode
if ($_SESSION['mode'] == null) {
    $_SESSION['mode'] = "light";
}
if ($_GET['action'] == 'light-mode') {
    $_SESSION['mode'] = "light";
}
if ($_GET['action'] == 'dark-mode') {
    $_SESSION['mode'] = "dark";
}