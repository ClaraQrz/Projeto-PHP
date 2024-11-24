<!-- Inicia uma sessão PHP  -->
<?php
    session_start();
        //Se não existir nada no carrinho, ela é inicializada como um array vazio.
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }
        //Se o parâmetro limpar for passado via URL, o carrinho é esvaziado.
    if (isset($_GET['limpar'])) {
        $_SESSION['carrinho'] = array(); 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sil Crochê - Arte com amor</title>
    <link rel="stylesheet" href="./Assets/css/main.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <!-- Navegação e Header do site -->
    <div class="cabecalho">
            <div class="background">
                <div class="store">
                    <h1>Sil Crochê</h1>
                    <p>PEÇAS DE CROCHÊ FEITAS COM AMOR</p>
                </div>
                <header>
                    <div class="search-container">
                        <input id="search-bar" type="text" placeholder="Pesquisar...">
                        <script src="./Assets/js/search.js"></script>
                    </div>
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
            <nav class="categories">
                <button data-category="all">Todos</button>
                <button data-category="chaveiro">Chaveiros</button>
                <button data-category="bolsa">Bolsas</button>
                <button data-category="souplast">Souplast</button>
                <button data-category="prendedor">Prendedores</button>
                <button data-category="boneco">Bonecos</button>
            </nav>
            <!-- Script em JS para ser separado os itens por categoria -->
            <script src="./Assets/js/categories.js"></script>
    </div>  

    <div>
        <main>
            <div id="products" class="loja-container">
            <!-- Array Multidimensional com todos os produtos da loja -->
            <?php

                $items=array(['imagem'=>'./store/Produto1.png','nome'=>'Segura Cortina','preço'=>'45,00','categoria' => 'prendedor'],
                ['imagem'=>'./store/Produto2.png','nome'=>'Souplast Azul','preço'=>'120,00','categoria' => 'souplast'],
                ['imagem'=>'./store/Produto3.png','nome'=>'Bolsa Maré','preço'=>'95,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto4.png','nome'=>'Bolsa Ana','preço'=>'98,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto5.png','nome'=>'Mochila Bela','preço'=>'160,00','categoria' => 'mochila'],
                ['imagem'=>'./store/Produto6.png','nome'=>'Bolsa Bee','preço'=>'60,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto7.png','nome'=>'Bolsa Ivie','preço'=>'70,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto8.png','nome'=>'Mochila Itália','preço'=>'155,00','categoria' => 'mochila'],
                ['imagem'=>'./store/Produto9.png','nome'=>'Boneca Ana','preço'=>'150,00','categoria' => 'boneco'],
                ['imagem'=>'./store/Produto10.png','nome'=>'Mochila Luiza','preço'=>'180,00','categoria' => 'mochila'],
                ['imagem'=>'./store/Produto11.png','nome'=>'Bolsa Malu','preço'=>'75,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto12.png','nome'=>'Conjunto praia','preço'=>'120,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto13.png','nome'=>'Souplast Marrom','preço'=>'110,00','categoria' => 'souplast'],
                ['imagem'=>'./store/Produto14.png','nome'=>'Bichinho','preço'=>'130,00','categoria' => 'boneco'],
                ['imagem'=>'./store/Produto15.png','nome'=>'Bolsa Duda','preço'=>'70,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto16.png','nome'=>'Bolsa Danni','preço'=>'110,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto17.png','nome'=>'Mini Hipopótamo','preço'=>'45,00','categoria' => 'boneco'],
                ['imagem'=>'./store/Produto18.png','nome'=>'Mini Macaco','preço'=>'45,00','categoria' => 'boneco'],
                ['imagem'=>'./store/Produto19.png','nome'=>'Bonecas amigurumi','preço'=>'150,00','categoria' => 'boneco'],
                ['imagem'=>'./store/Produto20.png','nome'=>'Ursinha','preço'=>'130,00','categoria' => 'boneco'],
                ['imagem'=>'./store/Produto21.png','nome'=>'Chaveiro - Sapinho','preço'=>'35,00','categoria' => 'chaveiro'],
                ['imagem'=>'./store/Produto22.png','nome'=>'Chaveiro - Cachorro','preço'=>'35,00','categoria' => 'chaveiro'],
                ['imagem'=>'./store/Produto23.png','nome'=>'Bolsa Letícia','preço'=>'180,00','categoria' => 'bolsa'],
                ['imagem'=>'./store/Produto25.png','nome'=>'Peregrino','preço'=>'150,00','categoria' => 'boneco'],
                );

                // Para cada item no array, segue o código abaixo
                foreach($items as $key => $value){
            ?>
                <div class="produto" data-category="<?php echo strtolower($value['categoria']); ?>" data-name="<?php echo strtolower($value['nome']); ?>">
                    <img src="<?php echo $value['imagem'] ?>" alt="">
                    <div class="descrição">
                        <h3><?php echo $value['nome']?></h3>
                        <p>R$ <?php echo $value['preço']?></p>
                    </div>
                    <a href="?adicionar=<?php echo $key ?>"><img class="cart" src="./images/cart.png" alt=""></a>
                </div><!--div produto-->
            <?php
                } //Fechamento foreach
            ?>
            </div><!--div loja-container-->
            <!-- Scrip em JS para ser feita a pesquisa dos itens -->
            <script src="./Assets/js/search.js"></script>
        </main>

            <!-- Adicionar item ao carrinho quando clicar no cart, adicionando a quantidade e o valor corrigido -->
        <?php
            if(isset($_GET['adicionar'])){
                $idProduto = (int) $_GET['adicionar'];
                if(isset($items[$idProduto])){
                    if(isset($_SESSION['carrinho'][$idProduto])){
                        $_SESSION['carrinho'][$idProduto]['quantidade']++;
                    }else{
                        $_SESSION['carrinho'][$idProduto] = array('quantidade' => 1, 'nome' => $items[$idProduto]['nome'],'preço' => $items[$idProduto]['preço'],'imagem' => $items[$idProduto]['imagem']);
                    }
                }else{

                }
            }
        ?>
        
            <!-- Parte Lateral onde será o carrinho -->
        <aside>
            <h2 class="carrinho-title">Carrinho</h2>
            <div class="items-carrinho">
                <?php
                    // If para verificar se foi adicionado items ao carrinho e, se sim, mostrar a descrição abaixo
                    if (!empty($_SESSION['carrinho'])) {
                        foreach ($_SESSION['carrinho'] as $key => $value) {
                            echo '<div class="carrinho">';
                            echo '<div><img src="' . $value['imagem'] . '" alt="' . $value['nome'] . '"></div>'; //Div img
                            echo '<div class="carrinho-descricao">';
                            echo '<p>Nome: ' . $value['nome'] . '</p>';
                            echo '<p>Preço: ' . $value['preço'] . '</p>';
                            echo '<p>Quantidade: ' . $value['quantidade'] . '</p>';
                            echo '</div>'; //Div carrinho-descricao
                            echo '</div>'; //Div carrinho
                        }
                    } else {
                        echo '<p class="carrinho-vazio""></br>O carrinho está vazio.</p>';
                    }
                        // Formação da mensagem a ser enviada no whatsapp e o número que será enviada.
                    if (!empty($_SESSION['carrinho'])) {
                        //Mensagem wpp
                        $mensagem = "Olá! Gostaria de finalizar o pedido com os seguintes itens:\n\n";
                        $total = 0;

                        //Para cada item no carrinho, será enviada a mensagem abaixo!
                        foreach ($_SESSION['carrinho'] as $key => $value) {
                            $mensagem .= "- " . $value['nome'] . " (Quantidade: " . $value['quantidade'] . ") - R$ " . $value['preço'] . "\n";
                            $total += $value['quantidade'] * (float)$value['preço'];
                        }

                        $mensagem .= "\nTotal: R$ " .$total.",00";
                        $mensagem = urlencode($mensagem);//Deixar a mensagem em url
                    } else {
                        $mensagem = urlencode("Olá! Meu carrinho está vazio.");
                    }

                    // Número de wpp
                    $numero_whatsapp = "5583998319569";
                    $link_whatsapp = "https://wa.me/$numero_whatsapp?text=$mensagem";
                ?>
            </div>
            <!-- Rodapé do iside, onde conterá o valor total e a finalização -->
            <footer class="footer-aside">
                <div class="total">
                <?php
                // Valor que será mostrado quando o carrinho estiver vazio
                    if (!empty($_SESSION['carrinho'])) {
                        echo 'Total: ' . $total . ',00'; 
                    }              
                ?>
                </div>
                <div class="finalizacao">
                    <a class="finalizar" href="<?php echo $link_whatsapp; ?>" target="_blank">
                        Finalizar compra
                    </a>
                    <?php
                    echo '<a class="apagar" href="?limpar=true">Limpar Carrinho</a>';
                    ?>
                </div>
            </footer>
        </aside>
    </div>
</body>
</html>