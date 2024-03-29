<?php
//% Cookies

//, Cookies in PHP
//setcookie("nick_name", "Utente 1");
/* echo '<pre>';
print_r($_COOKIE);
echo '</pre><br>'; */


//, Parametri dei cookies
/* $name = "user";
$value = "Matteo Russo";
$expire = time() + 10; // 10s
$path = "/";
$domain = "localhost";
$secure = false;
$httpOnly = true;

setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
echo '<pre>'; print_r($_COOKIE); echo '</pre><br>'; */


//, Scadenza dei cookies
/* setcookie("theme", "dark", time() + 60*60*24*30);
echo '<pre>';
print_r($_COOKIE);
echo '</pre><br>';
echo $_COOKIE['theme']; */



//% Sessioni

//, Iniziare una Sessione in PHP
//session_start();
/* $_SESSION['username'] = 'Matteo';
$_SESSION['password'] ='password';
echo '<pre>';
print_r($_SESSION);
echo '</pre>'; */


//, Rimuovere dati dalle sessioni
/* unset($_SESSION['password']);
echo '<pre>';
print_r($_SESSION);
echo '</pre><br>'; */


//, Recuperare variabili di sessione da un form
/* session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    echo '<p> Username di sessione: ' . $_SESSION['username'] . '</p>';
    echo '<p> Password di sessione: ' . $_SESSION['password'] . '</p>';
} */

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-app-state</title>
</head>
<body>
    <form method="post" action=<?php echo $_SERVER['PHP_SELF'] ?>>
        <label for="username">Inserire username:</label>
        <input id="username" name="username" type="text"><br>
        <label for="password">Inserire password:</label>
        <input id="password" name="password" type="password">
        <input type="submit">
    </form>
</body>
</html> -->


<?php
//, Stato di una sessione
/* session_start();
echo 'Percorso sessione: ' . session_save_path() . '<br>';
echo 'ID sessione: ' . session_id() . '<br>';
$sessionStatus = session_status();
echo 'Status sessione: ' . $sessionStatus . '<br>'; */

/* if ($sessionStatus == PHP_SESSION_DISABLED) {
    echo 'Le sessioni sono disabilitate. <br>';
} else if ($sessionStatus == PHP_SESSION_NONE) {
    echo 'Le sessioni sono abilitate, ma nessuna esiste. <br>';
} else if ($sessionStatus == PHP_SESSION_ACTIVE) {
    echo 'Le sessioni sono abilitate e una esiste. <br>';
} */

/* if ($sessionStatus === 0) {
    echo 'Le sessioni sono disabilitate.';
} else if ($sessionStatus === 1) {
    echo 'Le sessioni sono abilitate, ma nessuna esiste.';
} else if ($sessionStatus === 2) {
    echo 'Le sessioni sono abilitate e una esiste.';
}
 */

//, Salvare le sessioni altrove
/* $sessionPath = $_SERVER['DOCUMENT_ROOT'] . '/Sessions';
if (!file_exists($sessionPath)) {
    mkdir($sessionPath, 0700);
}
session_save_path($sessionPath);
session_start();
echo '<b>Nuovo percorso sessione: </b> ' . session_save_path() . '<br>';
echo '<b>ID sessione: </b>' . session_id() . '<br>'; */



//, Terminare le sessioni
//* session_abort()
/* session_start();
$_SESSION['username'] = 'Ruma';
echo  $_SESSION['username'] . '<br>';
echo 'Status sessione: ' . session_status() . '<br>';

session_abort();
echo 'Status sessione: ' . session_status() . '<br>';
echo $_SESSION['username'] . '<br>'; */


//* session_commit()
/* session_start();
$_SESSION['username'] = 'Alister';
echo "Session status: ";
echo session_status() == PHP_SESSION_ACTIVE ? 'Active' : (session_status() == PHP_SESSION_NONE ? 'None' : 'Disabled');
echo "<br>Username: " . $_SESSION['username'] . "<br><br>";

session_commit();
$_SESSION['username'] = 'Adrian';

echo "Session status after session_commit(): ";
echo session_status() == PHP_SESSION_ACTIVE ? 'Active' : (session_status() == PHP_SESSION_NONE ? 'None' : 'Disabled');
echo "<br>Username after session_commit(): " . $_SESSION['username'] . "<br><br>"; */

// Sessione riattivata
/* session_start();
echo "Session status after session_start(): ";
echo session_status() == PHP_SESSION_ACTIVE ? 'Active' : (session_status() == PHP_SESSION_NONE ? 'None' : 'Disabled');
echo "<br>Username after session_start(): " . $_SESSION['username'] . "<br><br>";
 */


//* session_unset()
/* session_start();
$_SESSION['username'] = 'Eden'; // La variabile esiste
echo  $_SESSION['username'] . '<br>';
session_unset(); // Libera tutte le variabili di sessione
if (!isset($_SESSION['username'])) {
    echo 'La variabile di sessione è stata rimossa.';
} else {
    echo "La variabile esiste";
}

echo session_status() == PHP_SESSION_ACTIVE ? 'Active' : (session_status() == PHP_SESSION_NONE ? 'None' : 'Disabled'); */


//* session_destroy()
/* session_start();
$_SESSION['username'] = 'Oscar';
echo $_SESSION['username'] . '<br>';
session_destroy(); // Distrugge la sessione
if (isset($_SESSION['username'])) {
    echo 'La sessione è stata distrutta, ma $_SESSION[\'username\']: '
    . $_SESSION['username'] . ' esiste ancora.';
}
?> */