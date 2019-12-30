<?php
session_start();

if (isset($_SESSION['zalogowany'])) {
    unset($_SESSION['zalogowany']);
}

echo '<a href="index.php">Login</a>';

