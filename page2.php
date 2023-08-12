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


/* echo "Session status: ";
echo session_status() == PHP_SESSION_ACTIVE ? 'Active' : (session_status() == PHP_SESSION_NONE ? 'None' : 'Disabled');
echo "<br>Username dopo commit: " . $_SESSION['username'] . "<br><br>"; */