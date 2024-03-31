<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Supremo Soluções Ambientais e Serviços</title>
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
            background-color: #333;
            color: #fff;
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
            text-align: center; /* Centraliza os links */
        }

        nav a {
            display: inline-block; /* Permite que os links fiquem na mesma linha */
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px; /* Espaçamento entre os links */
            border-bottom: 1px solid #444;
        }

        section {
            padding: 2em;
            text-align: justify;
            margin-top: 20px;
            overflow: hidden;
            text-align: justify;
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        fieldset {
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }

        .error-message {
            color: red;
            font-size: 0.8em;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .map img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            display: block;
            margin: 0 auto;
        }

        .contact-info {
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
            color: #333;
        }

        .contact-info h2 {
            margin-bottom: 10px;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
        }

        .contact-info li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: relative;
            clear: both;
        }

        @media (max-width: 767px) {
            nav {
                width: 100%;
                position: static;
            }
        }
    </style>
</head>

<body>

    <!-- ... Seu código HTML existente ... -->

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
        <h2>Fale conosco!</h2>

        <p style="margin: 0 auto; max-width: 600px;">Olá! Nesse espaço você pode fazer perguntas, sugestões ou compartilhar qualquer outra informação que você gostaria conosco. Por favor, preencha o formulário abaixo e deixe sua mensagem. Comprometemo-nos a proporcionar um atendimento ágil e eficiente para atender às suas necessidades. Caso prefira, também é possível entrar em contato conosco diretamente pelos meios listados a seguir. Agradecemos pela sua colaboração!</p>

        <form action="processar_formulario.php" method="post" onsubmit="return validarFormulario()">
            <fieldset>
                <legend>Informações Pessoais</legend>

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <div class="error-message" id="error-nome"></div>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
                <div class="error-message" id="error-email"></div>
            </fieldset>

            <fieldset>
                <legend>Mensagem</legend>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="4" required></textarea>
                <div class="error-message" id="error-mensagem"></div>
            </fieldset>

            <button type="submit">Enviar Mensagem</button>
        </form>

        <div class="contact-info">
            <h2>Informações de Contato</h2>
            <ul>
                <li><strong>E-mail:</strong> comercial@supremosolucoes.com</li>
                <li><strong>Telefone:</strong> (18) 3203-4907</li>
                <li><strong>Endereço:</strong> Rua Sete de Setembro, 1548, Vila do Estadio, Presidente Prudente – SP, CEP: 19015-080</li>
            </ul>
        </div>

        <div class="map">
            <img src="imagens/localizacao.png" alt="Localização da Empresa">
        </div>
    </section>

    <footer>
        &copy; 2024 SUPREMO SOLUÇÕES EM ENGENHARIA LTDA<br>
        Rua Sete de Setembro, 1548, Vila do Estadio – Presidente Prudente – SP<br>
        CEP: 19015-080 – Contato: (18) 3203-4907
    </footer>

</body>

</html>
