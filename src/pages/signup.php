<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Maquiadora</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body id="signup">
    <div class="login-container">
        <div class="login-card">
            <h1>Crie sua conta</h1>
            <p>Preencha os campos abaixo para se cadastrar</p>
            <form action="#" method="POST">
                <label for="name">Nome Completo</label>
                <input type="text" id="name" name="name" placeholder="Digite seu nome completo" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>

                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>

                <label for="confirm-password">Confirmar Senha</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirme sua senha" required>

                <button type="submit" class="btn-login">Cadastrar</button>
            </form>
            <p class="footer-text">Já tem uma conta? <a href="index.html">Faça login</a></p>
        </div>
    </div>

    <script src="../assets/js/main.js"></script>

</body>
</html>
