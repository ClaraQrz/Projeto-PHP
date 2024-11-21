<?php
$servername = "localhost";  // Servidor do banco de dados (geralmente 'localhost' para servidores locais)
$username = "root";         // Usuário do banco de dados (alterar se necessário)
$password = "";             // Senha do banco de dados (alterar se necessário)
$dbname = "SilCroche";      // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
