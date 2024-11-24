<!-- Autentificação login -->
<?php
    include("processar_login.php");
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            header("Location:main.php");
        } else{
            echo '<script>
                window.location.href = "login_index.php";
                alert("Login failed. Invalid email or password.");
            </script>';
        }
    }
?>