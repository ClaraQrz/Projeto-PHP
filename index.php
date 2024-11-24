<!-- Inclui o arquivo onde processa o login -->
<?php 
    include("processar_login.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Assets/css/style.css">

    <script>
        // Adiciona animação quando o input perde o foco (e o valor está vazio
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll('.form-container input');
        
            inputs.forEach(input => {
                // Evento de foco
                input.addEventListener('focus', function() {
                    input.classList.remove('animate'); // Remove a animação de shake caso tenha sido aplicada
                });
        
                // Evento de desfocar (quando o usuário sai do input)
                input.addEventListener('blur', function() {
                    if (input.value === "") {  // Verifica se o campo está vazio
                        input.classList.add('animate'); // Aplica a animação de shake
                    }
                });
            });
        });
        document.addEventListener("DOMContentLoaded", function() {

    // Array com as URLs das imagens
    const imagens = [
        "./images/imagens/img0.jpg",  // Imagem 0
        "./images/imagens/img1.png",  // Imagem 1
        "./images/imagens/img2_.png",  // Imagem 2
        "./images/imagens/img3_.png"   // Imagem 3
    ];

    let indiceImagem = 0;  // Índice inicial da imagem

    // Função para alternar a imagem
    function trocarImagem() {
        indiceImagem = (indiceImagem + 1) % imagens.length; // Incrementa o índice e faz a contagem circular
        const imagemElemento = document.getElementById("imagem-alternativa"); // Pega a referência da imagem
        imagemElemento.src = imagens[indiceImagem]; // Troca a imagem
    }

    // Chama a função para alternar a imagem a cada 4 segundos (4000 milissegundos)
    setInterval(trocarImagem, 4000);
});
    </script>
</head>
<body>
    <div class="background">
        <header>
            <div class="icons">
                <span>
                    <a href="./index.php"><img src="./images/imagens/img user.png" alt="User" width="28" height="28"></a>
                </span>
                <span>
                    <a href="info.php"><img src="./images/imagens/img info.png" alt="Sobre Nós" width="28"></a>
                </span>
            </div>
        </header>
    </div>

        <!-- Formulário de login -->

    <div class="form-cadastro">
        <div class="imagem">
            <img id="imagem-alternativa" src="./images/imagens/img0.jpg" alt="Imagem loja" />
        </div>
        <div class="form-container">
            <h2>Login</h2>
            <p>Faça seu pedido de nossas artes!</p>
            <form name="form" action="login.php"  method="POST">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seuemail@gmail.com" required>

                <label for="password">Senha</label>
                <input type="password" id="senha" name="password" placeholder="••••••••" required>

                <button type="submit">Entrar</button>

                <p class="cadastro">Ainda não fez o seu cadastro? <a href="./cadastro_index.php">Clique aqui!!</a></p>
            </form>
        </div>
    </div>
    
    <!-- Rodapé com redes sociais da loja e desenvolvedores do site-->
    <footer>
        <div class="rodapé">
            <div class="social">
                <h3>Redes Sociais</h3>
                <div class="icon-social">
                    <span>
                        <a href="https://www.instagram.com/sil_artecomamor/"><img src="./images/imagens/insta icon.png" alt="Instagram" height="30"></a>
                    </span>
                    <span>
                        <!-- Mensagem via whatsapp -->
                        <?php
                            $mensagem = "Olá! Sou cliente SilCrochê.";
                            $numero_whatsapp = "5583998319569"; // Substitir pelo número correto
                            $link_whatsapp = "https://wa.me/$numero_whatsapp?text=$mensagem";
                        ?>
                        <a href="<?php echo $link_whatsapp; ?>" target="_blank"><img src="./images/imagens/img zap.png" alt="Whatsapp" height="30"></a>
                    </span>
                </div>
            </div>
            <!-- Página Github - desenvolvedores -->
            <div class="dev">
                <h3>Developers</h3>
                <a href="https://github.com/DanielaGOliveira" target="_blank"><img src="./images/devs/Danni.jpg" alt="Daniela"></a>
                <a href="https://github.com/ClaraQrz" target="_blank"><img src="./images/devs/Nana.jpg" alt="Ana Clara"></a>
                <a href="https://github.com/neydian" target="_blank"><img src="./images/devs/Malu.jpg" alt="Maria Luiza"></a>
                <a href="https://github.com/niquila" target="_blank"><img src="./images/devs/Thais.jpg" alt="Thaís"></a>
            </div>
        </div>
    </footer>
</body>
</html>
