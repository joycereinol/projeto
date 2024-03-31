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
            text-align: center; /* Centraliza os links */
        }

        nav a {
            display: inline-block; /* Permite que os links fiquem na mesma linha */
            color: #fff; /* Texto branco */
            text-decoration: none;
            padding: 10px;
            margin: 0 10px; /* Espaçamento entre os links */
            border-bottom: 1px solid #444;
        }

        section {
            padding: 2em;
            text-align: justify;
        }

        .membro {
            display: flex;
            margin-bottom: 20px;
        }

        .membro img {
            max-width: 200px;
            max-height: 300px;
            margin-right: 20px;
        }

        .info {
            flex: 1;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 1.2em;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        footer {
            background-color: #333; /* Cor cinza escuro */
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 80%;
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

        <h2>Conheça nossa equipe!</h2>

        <div class="membro">
            <img src="imagens/equipe/anderson-camargo.jpeg" alt="Foto de Anderson Santos Camargo, Engenheiro Cívil especializado em Elaboração de Projetos." width="200" height="300">
            <div class="info">
                <h3>Anderson Santos Camargo</h3>
                <p>Engenheiro Civil especializado em Elaboração de Projetos</p>
                <p><b>Formação</b></p>
                <ul>
                    <li>Engenheiro Civil - Universidade do Oeste Paulista – UNOESTE (2014)</li>
                    <li>Técnico em Agrimensura - ETEC Professor Eufrásio de Toledo (2013)</li>
                    <li>Tecnólogo em Gestão Empresarial - FATEC de Presidente Prudente (2018)</li>
                </ul>
                <p><b>Contato</b></p>
                <ul>
                    <li>Telefone: (18) 99752-3784</li>
                    <li>E-mail: <a href="mailto:anderson@supremosolucoes.com.br">anderson@supremosolucoes.com.br</a></li>
                </ul>
            </div>
        </div>

        <div class="membro">
            <img src="imagens/equipe/joao-pereira.jpeg" alt="Foto de João Batista Pereira, Engenheiro Agrônomo Diretor de Projetos e Serviços." width="200" height="300">
            <div class="info">
                <h3>João Batista Pereira</h3>
                <p>Diretor de Projetos e Serviços</p>
                <p><b>Formação</b></p>
                <ul>
                    <li>Engenheiro Agrônomo - Universidade do Oeste Paulista – UNOESTE (2004)</li>
                    <li>Técnico em Agrimensura - ETEC Professor Eufrásio de Toledo (2013)</li>
                </ul>
                <p><b>Contato</b></p>
                <ul>
                    <li>Telefone: (18) 98142-5802</li>
                    <li>E-mail: <a href="mailto:comercial@supremosolucoes.com.br">comercial@supremosolucoes.com.br</a></li>
                </ul>
            </div>
        </div>

        <p>.</p>

    </section>

    <footer>
        &copy; 2024 SUPREMO SOLUÇÕES EM ENGENHARIA LTDA<br>
        Rua Sete de Setembro, 1548, Vila do Estadio – Presidente Prudente – SP<br>
        CEP: 19015-080 – Contato: (18) 3203-4907
    </footer>

</body>

</html>
