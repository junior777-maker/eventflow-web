<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>EventFlow - Criar Conta</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .box { background: white; padding: 40px; border-radius: 10px; shadow: 0 4px 10px rgba(0,0,0,0.1); width: 350px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 10px; width: 100%; border-radius: 5px; cursor: pointer; font-weight: bold; }
        a { display: block; text-align: center; margin-top: 15px; color: #007bff; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>
    <div class="box">
        <h2 style="text-align: center;">Criar Conta</h2>
        <form action="{{ route('auth.register') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Seu Nome Completo" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Sua Senha" required>
            <button type="submit">CADASTRAR E ENTRAR</button>
        </form>
        <a href="{{ route('login') }}">Já tenho conta? Voltar ao Login</a>
    </div>
</body>
</html>