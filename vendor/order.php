

<?php
    $last_name = $_GET['last_name'];
    $name = $_GET['Name'];
    $Phone = $_GET['Phone'];

    $mysqli = new mysqli('localhost', 'root', 'uEQ46CqLj8rH2EW', 'cq04623_el');

    $result = $mysqli->query("INSERT INTO zakaz (lastname, name, phone) VALUES ('$last_name', '$name', '$Phone');");


if ($mysqli->connect_errno) {
    printf("Соединение не удалось: %s\n", $mysqli->connect_error);
}

  


header('Location:  ../index.php');
exit();
?>

