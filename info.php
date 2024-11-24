<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sil Crochê - Sobre nós</title>
    <style>           
        *{
            margin: 0;
            padding: 0; 
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #048083, #048083, #046769);
            color: #0b2324;
        }

        .background {
            background-color: #048083;
        }

        header {
            display: flex;
            justify-content: space-between;    
            align-items: center;       
            padding: 10px 20px;          
            background-color: #75DFEB;     
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            height: 40px;
            width: 90%;
            margin-top: 15px;
            margin-left: 50px;
            justify-content: flex-end;
        }
        .header {
            background-color: white;
            color: #046769;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 20px;
            text-align: center;

        }
        .imagens{
            justify-content: space-between;
            text-align: center;
        }
        .img{
            padding: 0.009x;
            margin: 23px;
            border-radius: 20px;
        }
            
        h1 {
            font-size: 2.5em;
            margin: 0;
        }
        section {
            padding: 20px;
            margin: 20px;
            background-color:  #fdfdfd;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .content{
            margin-bottom: 50px;
        }
        .title {
            color: #046769;
        }
        p {
            line-height: 1.6;
            font-size: 1.1em;
        }
        .descrição{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        footer {
            position:relative;
            bottom: 0;    
            align-items: center;       
            padding: 10px 20px;          
            background-color: #75DFEB;     
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: auto;
            height: auto;
            margin-top: 44px;
            font-family: Candara;
        }
        .rodapé{
            display: flex;
            justify-content: space-between;
        }
        .social{
            margin-left: 20px;
        }
        .icon-social a{
            margin: 10px;
        }
        .dev{
            margin-right: 20px;
            text-align: center;
        }
        .dev img{
            height: 30px;
            border-radius: 100%;
            margin-left: 2px;
            margin-right: 2px;
            margin-bottom: 0;
        }
        .info{
            align-content: center;
        }

        /* Media Query para celular */
        @media (max-width: 768px) {
            .content > section {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Navegação -->
    <div class="background">
        <header>
            <div class="icons">
                <span>
                <a href="./index.php"><img src="./images/imagens/img user.png" alt="User" width="28" height="28"></a>
                </span>
            </div>
        </header>
    </div>
    <div class="imagens">
        <img src="./images/imagens/img0.jpg" class="img"
        height="341px" 
        />
        <img src="./images/imagens/img1.png" class="img"
        height="341px" 
        />
        <img src="./images/imagens/img2_.png" class="img"
        height="341px" 
        />
    </div>

   <!-- História da loja -->
    <section class="content">
        <div class="header" >
            <h1>Sobre nós!</h1>
        </div>
        <section>
            <h2 class="title">O Surgimento de Sil Crochê</h2><br>
            <p class="descrição">  Sil Crochê é uma loja de produtos artesanais de crochê que foi criada em 2016, quando sua fundadora, Silvanete, decidiu misturar suas habilidades de crochê com a paixão por criar peças únicas. A história de Sil Crochê começou em sua pequena oficina, onde Silvana passava horas criando peças detalhadas com fios coloridos e amor por cada ponto.</p>
        </section>
        
        <section>
            <h2 class="title">Como Tudo Começou</h2><br>
            <p class="descrição">  Em 2016, após enfrentar desafios pessoais e procurar uma maneira de expressar sua criatividade, Silvanete decidiu lançar uma linha de produtos de crochê feitos à mão. A inspiração veio de suas próprias lembranças de infância, onde sua mãe a ensinou a arte da criação em crochê, e sempre teve um lugar especial em seu coração. Assim, Sil Croche nasceu, com a ideia de criar peças únicas que transmitissem carinho e qualidade em cada detalhe.</p>
        </section>
        
        <section>
            <h2 class="title">O Crescimento da Marca</h2><br>
            <p class="descrição">  Desde seu início, Sil Crochê encantou muitas pessoas com suas criações exclusivas, conquistando um público fiel e apaixonado. A marca cresceu com o tempo, e hoje é conhecida por produtos de alta qualidade, feitos com tecidos naturais e sustentáveis. Cada peça é feita com um cuidado especial, o que garante a durabilidade e o toque artesanal que tornou Sil Croche tão especial.</p>
        </section>
        
        <section>
            <h2 class="title">O Legado de Sil Crochê</h2><br>
            <p class="descrição">  Hoje, Sil Crochê tem o objetivo de se tornar uma referência no mundo dos produtos artesanais. A marca mantém sua essência de criar com amor e dedicação, além de continuar a inspirar novos empreendedores e artesãos. A história de Sil Crochê é uma prova de que, com paixão e dedicação, é possível transformar um sonho em realidade, impactando positivamente a vida de muitas pessoas.</p>
        </section>
    </section>

    <!-- Rodapé com informações adicionais -->
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
            <p class="info" style="font-family: Arial, Helvetica, sans-serif">Sil Crochê - Criado com carinho desde 2016</p>
            <!-- Página Github  desenvolvedores -->
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