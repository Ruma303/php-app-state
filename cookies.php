<?php
//% Cookies


//$ Cookies in PHP
//setcookie("nick_name", "Utente 1");
//var_dump($_COOKIE);

//$ Parametri dei cookies
/* $name = "user";
$value = "Matteo Russo";
$expire = time() + 10; // 10s
$path = "/";
$domain = ".example.com";
$secure = true;
$httpOnly = true;
setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
print_r($_COOKIE); */
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="name">Inserisci il tuo nickname:</label>
        <input id="name" name="nick_name" type="text">
        <input type="submit">
    </form>
</body>
</html> -->

<?php
//% Sessioni

//$ Iniziare una Sessione in PHP
//$_SESSION["username"] = "Matteo Russo";
//print_r($_SESSION);

   /*  session_start();
    echo 'Percorso sessione: ' . session_save_path() . '<br>';
    echo 'ID sessione: ' . session_id() . '<br>';
    if (isset($_POST['nick_name'])) {
        $_SESSION['username'] = $_POST['nick_name'];
        echo '<h3> Pagina corrente: ' . $_SERVER['PHP_SELF'] . '</h3>';
        echo '<h4> Variabile di sessione: ' . $_SESSION['username'] . '</h4>';
    } */

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="name">Inserisci il tuo nickname:</label>
        <input id="name" name="nick_name" type="text">
        <input type="submit">
    </form>
</body>
</html> -->

<?php
//$ Stato di una sessione
/* session_start();
echo 'Percorso sessione: ' . session_save_path() . '<br>';
echo 'ID sessione: ' . session_id() . '<br>'; */
/* $sessionStatus = session_status();
echo 'Status sessione: ' . $sessionStatus . '<br>';

if ($sessionStatus == PHP_SESSION_DISABLED) {
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
} */


//$ Salvare le sessioni altrove

    /* $sessionPath = $_SERVER['DOCUMENT_ROOT'] . '/Sessions';
    session_save_path($sessionPath);
    echo '<b>Nuovo percorso sessione: </b> ' . session_save_path() . '<br>';
    session_start();
    echo '<b>ID sessione: </b>' . session_id() . '<br>'; */



//$ Terminare le sessioni

    /* session_start(); // Avvia una sessione
    $_SESSION['username'] = 'Ruma'; // Imposta una variabile di sessione */

    //* session_unset()
    /* session_unset(); // Libera tutte le variabili di sessione
    // A questo punto, $_SESSION['username'] non esiste più
    if (!isset($_SESSION['username'])) {
        echo 'La variabile di sessione è stata rimossa.';
    } */

    //* session_destroy()
    /* session_destroy(); // Distrugge la sessione
    // Anche se la sessione è stata distrutta, $_SESSION['username'] potrebbe esistere ancora
    if (isset($_SESSION['username'])) {
    echo 'La sessione è stata distrutta, ma $_SESSION[\'username\'] esiste ancora fino a quando il browser non viene chiuso o il cookie di sessione non viene impostato a un valore vuoto.';
    } */
?>

