// Página de Login
document.querySelector('form').addEventListener('submit', function (event) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!email || !password) {
        event.preventDefault();
        alert('Por favor, preencha todos os campos.');
    }
});

// Página de cadastro
document.querySelector('form').addEventListener('submit', function (event) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (password !== confirmPassword) {
        event.preventDefault();
        alert('As senhas não coincidem. Por favor, verifique.');
    }
});
