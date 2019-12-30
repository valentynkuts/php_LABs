<?php
session_start();

if (!isset($_SESSION['zalogowany'])) {

    header("Location:index.php");
}

echo 'Hello na strone glownej <br>';

echo '<a href="logout.php">Logout</a>';