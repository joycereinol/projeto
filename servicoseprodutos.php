<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supremo Soluções Ambientais e Serviços</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #000;
            overflow-x: hidden;
        }

        header {
            text-align: center;
            padding: 1em;
            background-color: #fff;
            color: #000;
        }

        header img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        h1 {
            font-size: 1.5em;
        }

        nav {
            background-color: #333;
            padding: 1em;
            text-align: center;
            z-index: 1000;
        }

        nav a {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 5px;
            border-bottom: 1px solid #444;
        }

        section {
            margin-top: 60px;
            padding: 2em;
            text-align: center;
        }

        h2 {
            text-align: center;
        }

        iframe {
            width: 100%;
            max-width: 100%;
            height: 100vh;
            border: none;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 80%;
        }

        /* Estilo adicional para dispositivos móveis */
        @media (max-width: 767px) {
            nav a {
                display: block;
                width: 100%;
                box-sizing: border-box;
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
        <img src="imagens/logo-transparente.png" alt="Logo da Supremo Soluções Ambientais e Serviços">
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
        <h2>Conheça nossos Serviços e Produtos!</h2>
        <iframe src="portifolio-supremo-2024.pdf" title="Portfólio" frameborder="0"></iframe>
    </section>

    <footer>
        &copy; 2024 SUPREMO SOLUÇÕES EM ENGENHARIA LTDA<br>
        Rua Sete de Setembro, 1548, Vila do Estadio – Presidente Prudente – SP<br>
        CEP: 19015-080 – Contato: (18) 3203-4907
    </footer>
</body>

</html>
