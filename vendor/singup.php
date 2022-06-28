

 <?php
    $email = $_GET['email'];
    $login = $_GET['login'];
    $pass = $_GET['pass'];

    $mysqli = new mysqli('localhost', 'root', 'uEQ46CqLj8rH2EW', 'cq04623_el');

    $result = $mysqli->query("INSERT INTO registracia (email, login, password) VALUES ('$email', '$login', '$pass');");




if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
}

  


header('Location:  ../index.php');
exit();
?>
