<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $con = new mysqli('localhost', 'root', '', 'SilCroche');
        if ($con) {
            // echo "You are connected! <br>";
            // Corrigir o erro na sintaxe do SQL: remova as aspas simples ao redor da tabela
            $sql = "INSERT INTO clientes (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo "Location: ..//login.php";
            } else {
                die(mysqli_error($con));
            }
        } else {
            die(mysqli_error($con));
        }
    }
?>
