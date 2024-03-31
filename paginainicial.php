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
            color: #fff;
            text-align: center; /* Centraliza o texto */
        }

        nav a {
            display: inline-block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin-right: 10px;
            border-bottom: 1px solid #444;
        }

        section {
            padding: 2em;
            text-align: justify;
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
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            font-size: 80%;
        }

        /* Estilo adicional para dispositivos móveis */
        @media (max-width: 767px) {
            nav {
                display: block;
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

    <section id="historia">
        <h2>Conheça a história</h2>
        <p>
            A Supremo, uma renomada empresa no cenário da Engenharia Civil, destaca-se por sua expertise na elaboração de projetos, gerenciamento de obras e serviços de topografia abrangentes, com foco especializado em loteamentos.

            Com uma trajetória sólida desde 2008, os sócios da Supremo acumulam vasta experiência, culminando em mais de 5000 lotes aprovados e outros 2000 atualmente em processo de aprovação. Esses números expressivos atestam não apenas a competência da empresa, mas também sua capacidade de inovação e excelência no mercado.
        </p>

        <h2>Nossa missão</h2>
        <p>
            Temos o compromisso de formar uma equipe dedicada e decidida, pronta para suprir as demandas de nossos clientes no âmbito da engenharia e topografia. Nosso propósito abrange não apenas a realização dos sonhos de nossos clientes, mas também contribui ativamente para o desenvolvimento urbano das cidades.
        </p>

        <h2>Valores de nossa empresa</h2>
        <p>
            Fundamentamos nossos princípios na honestidade e na clareza. Esses alicerces desempenham um papel crucial em nossa empresa, especialmente no que diz respeito à viabilidade financeira e ao desenvolvimento de empreendimentos para nossos clientes. Além disso, dedicamos especial atenção ao respeito ao meio ambiente, operando sempre em conformidade com as normas ambientais. Priorizamos, é claro, a acessibilidade como meio de atender a todas as necessidades de forma inclusiva.
        </p>

        <h2>Objetivos de atuação</h2>
        <p>
            Nosso objetivo é estabelecer-nos como referência no setor de topografia e desenvolvimento urbano, buscando a expansão da urbanização de forma regular, sustentável e responsável. Desejamos contribuir significativamente para o crescimento e aprimoramento das cidades, proporcionando soluções ambientais e serviços de alta qualidade.
        </p>
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

    <script>
        // Adiciona a classe menu-open ao body quando o menu é clicado
        document.querySelector('nav').addEventListener('click', function () {
            document.body.classList.toggle('menu-open');
        });
    </script>

</body>

</html>
