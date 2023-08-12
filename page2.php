<?php
//% page2.php
session_start(); //* Inizializzare sessione
echo 'ID sessione: ' . session_id() . '<br>';
echo '<h4> Pagina corrente: ' . $_SERVER['PHP_SELF'] . '</h4>';
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo '<p> Username di sessione: ' . $_SESSION['username'] . '</p>';
    echo '<p> Password di sessione: ' . $_SESSION['password'] . '</p>';
} else {
    echo '<p> Non ci sono dati di sessione disponibili. </p>';
}