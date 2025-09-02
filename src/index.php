<?php # phpinfo(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Estética - Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <a href="#">Menu</a>
        <h1><img src="https://placehold.co/520x520" alt="Logo"></h1>
    </header>

    <div id="cadastro_news">
        <h2>Cadastre-se para receber novidades!</h2>

    <!-- Envio síncrono quando é feito direto pelo HTML -->
        <form action="app/processa_news.php" method="POST">
            <label for="inputEmail" class="hide">Seu melhor e-mail</label>
            <input type="email" placeholder="Seu melhor e-mail" name="email" id="inputEmail" required>

            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#1f1f1f"><path d="m720-160-56-56 63-64H560v-80h167l-63-64 56-56 160 160-160 160ZM160-280q-33 0-56.5-23.5T80-360v-400q0-33 23.5-56.5T160-840h520q33 0 56.5 23.5T760-760v204q-10-2-20-3t-20-1q-10 0-20 .5t-20 2.5v-147L416-520 160-703v343h323q-2 10-2.5 20t-.5 20q0 10 1 20t3 20H160Zm58-480 198 142 204-142H218Zm-58 400v-400 400Z"/></svg>Cadastrar</button>

            <input type="checkbox"  id="inputTermos" required><label for="inputTermos">Concordo que meus dados serão armazenados e tratados de acordo com a Política de Privacidade</label>
        </form>
    </div>
</body>

</html>