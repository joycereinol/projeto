<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supremo Soluções Ambientais e Serviços</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* Fundo branco */
            color: #000; /* Texto preto */
            overflow-x: hidden;
        }

        header {
            text-align: center;
            padding: 1em;
        }

        header img {
            display: block;
            margin: 0 auto; /* Centraliza a imagem */
            max-width: 100%; /* Alterado para ocupar 100% da largura disponível */
            height: auto;
        }

        h1 {
            font-size: 1.5em;
        }

        nav {
            background-color: #333; /* Cor cinza escuro */
            padding: 1em;
            width: 100%;
            color: #fff; /* Texto branco */
        }

        nav a {
            display: block;
            color: #fff; /* Texto branco */
            text-decoration: none;
            padding: 10px;
            margin-bottom: 5px;
            border-bottom: 1px solid #444;
        }

        section {
            padding: 2em;
            text-align: justify; /* Adicionado para justificar o texto */
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 1.2em;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            text-align: justify; /* Adicionado para justificar o texto */
        }

        .redes-sociais {
            display: flex;
            justify-content: center; /* Alterado para centralizar os ícones */
            margin-top: 20px;
        }

        .redes-sociais a {
            text-align: center;
            color: #000;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px; /* Espaçamento entre os ícones */
        }

        footer {
            background-color: #333; /* Cor cinza escuro */
            color: #fff;
            text-align: center;
            padding: 1em;
            font-size: 80%;
            margin-top: 20px; /* Adicionado espaço entre o conteúdo e o rodapé */
        }

        @media (min-width: 768px) {
            nav {
                display: flex;
                justify-content: space-around;
            }
        }
    </style>
</head>

<body>

    <!-- Barra de acessibilidade -->
    <ul id="atalhos">
        <li><a href="#paginainicial.html" accesskey="2">Página inicial [2]</a></li>
    </ul>

    <header>
        <img src="imagens/logo-transparente.png" alt="Logo da Supremo Soluções Ambientais e Serviços" class="img-fluid">
        <h1>Supremo Soluções Ambientais e Serviços</h1>
    </header>

    <nav>
        <a href="paginainicial.html">Página inicial</a>
        <a href="servicoseprodutos.html">Serviços e produtos</a>
        <a href="equipe.html">Equipe</a>
        <a href="faleconosco.html">Contato</a>
        <a href="redes-sociais.html">Redes sociais</a>
    </nav>

    <section>
        <main>
            <div>
                <p style="text-align: center;"><h2>Siga-nos nas redes sociais!</h2></p>

                <div class="redes-sociais">
                    <a href="https://www.facebook.com">
                        <img src="imagens/facebook-icon.png" alt="Logotipo do Facebook" width="30" height="30">
                        <span style="color: #000;">Facebook</span>
                    </a>
                    <a href="https://www.instagram.com">
                        <img src="imagens/instagram-icon.png" alt="Logotipo do Instagram" width="30" height="30">
                        <span style="color: #000;">Instagram</span>
                    </a>
                    <a href="https://www.linkedin.com">
                        <img src="imagens/linkedin-icon.png" alt="Logotipo do Linkedin" width="30" height="30">
                        <span style="color: #000;">LinkedIn</span>
                    </a>
                    <a href="https://www.youtube.com">
                        <img src="imagens/youtube-icon.png" alt="Logotipo do Youtube" width="30" height="30">
                        <span style="color: #000;">YouTube</span>
                    </a>
                </div>
            </div>
            <p>  <span style="color: #ffff;">.</span></p>
            <p>
                Conecte-se conosco! A Supremo Soluções Ambientais e Serviços está presente nas principais redes sociais, proporcionando a você uma experiência mais próxima e interativa. Siga-nos no Facebook, Instagram, LinkedIn e YouTube para ficar por dentro das últimas novidades, acompanhar nossos projetos e conteúdos exclusivos. Junte-se a nós e faça parte da nossa comunidade online!
            </p>
            <p>  <span style="color: #ffff;">.</span></p>
            <p>.</p>
        </main>
    </section>

    <footer>
        &copy; 2024 SUPREMO SOLUÇÕES EM ENGENHARIA LTDA<br>
        Rua Sete de Setembro, 1548, Vila do Estadio – Presidente Prudente – SP<br>
        CEP: 19015-080 – Contato: (18) 3203-4907
    </footer>

    <!-- Bootstrap JS e dependências -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>
