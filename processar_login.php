<!-- Autentificação login com conexão com o banco de dados -->
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];

    $con = new mysqli('localhost', 'root', '', 'SilCroche');
    $sql = "SELECT * FROM clientes WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            header("Location:main.php");
        } else{
            echo '<script>
                window.location.href = "index.php";
                alert("E-mail ou senha inválida");
            </script>';
        }
    }
?>