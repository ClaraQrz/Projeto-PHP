<?php 
    include("processar_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

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
        "imagens/img1.png",  // Imagem 1
        "imagens/img2_.png",  // Imagem 2
        "imagens/img3_.png"   // Imagem 3
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
            <div class="search-container">
                <input type="text" placeholder="Pesquisar...">
            </div>
            <div class="icons">
                <span>
                    <img src="imagens/img user.png" alt="User" width="28" height="28">
                </span>
                <span>
                    <img src="informaçõesSilCroche2.html" alt="Configurações">
                    <img src="informaçõesSilCroche2.html" alt="Sobre Nós">
                </span>
            </div>
        </header>
    </div>
    <div class="form-cadastro">
    <div class="imagem">
        <img id="imagem-alternativa" src="imagens/img1.png" alt="Imagem loja" />
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
            </form>
        </div>
    </div>
    <footer>
        <div class="rodapé">
            <div class="social">
                <h3>Redes Sociais</h3>
                <div class="icon social">
                    <span>
                        <a href="https://www.instagram.com/sil_artecomamor/"><img src="imagens/img insta.png" alt="Instagram" height="40" width="40"></a>
                    </span>
                    <span>
                    <?php
                        $mensagem = "Olá! Sou cliente SilCrochê.";
                        $numero_whatsapp = "5561993326011"; // Substitua pelo número correto
                        $link_whatsapp = "https://wa.me/$numero_whatsapp?text=$mensagem";
                    ?>
                    <a href="<?php echo $link_whatsapp; ?>" target="_blank"><img src="imagens/img zap.png" alt="Whatsapp">
                    </span>
                </div>
            </div>
            <div class="dev">
                <h3>Developers</h3>
                <p>Ana Clara de Queiroz</p>
                <p>Maria Luiza Vidal</p>
                <p>Daniela Gomes e Thaís Marques</p>
            </div>
        </div>
    </footer>
</body>
</html>
