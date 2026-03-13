<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>EventFlow - Login</title>
    <style>
        body { font-family: sans-serif; background: #1c1e21; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .box { background: white; padding: 40px; border-radius: 10px; width: 300px; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 10px; width: 100%; border-radius: 5px; cursor: pointer; font-weight: bold; }
        .error { color: red; font-size: 12px; margin-bottom: 10px; }
        a { display: block; text-align: center; margin-top: 15px; color: #007bff; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>
    <div class="box">
        <h2 style="text-align: center;">Login</h2>
        @if($errors->any()) <div class="error">{{ $errors->first() }}</div> @endif
        <form action="{{ route('auth.login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">ENTRAR</button>
        </form>
        <a href="{{ route('register') }}">Não tem conta? Cadastre-se</a>
    </div>
</body>
</html>