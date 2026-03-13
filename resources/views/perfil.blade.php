<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Meu Perfil - EventFlow</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f0f2f5; margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .perfil-card { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); text-align: center; width: 350px; }
        .avatar { width: 100px; height: 100px; background: #1877f2; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 3rem; margin: 0 auto 20px; font-weight: bold; }
        h2 { margin: 10px 0; color: #1c1e21; }
        p { color: #65676b; margin-bottom: 30px; }
        .btn-voltar { display: block; text-decoration: none; color: #1877f2; font-weight: bold; margin-bottom: 15px; }
        .btn-sair { display: block; text-decoration: none; background: #fa3e3e; color: white; padding: 12px; border-radius: 8px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="perfil-card">
        <div class="avatar">{{ substr(session('usuario')->name, 0, 1) }}</div>
        <h2>{{ session('usuario')->name }}</h2>
        <p>{{ session('usuario')->email }}</p>
        
        <a href="/" class="btn-voltar">← Voltar para Eventos</a>
        <a href="/sair" class="btn-sair">Sair da Conta</a>
    </div>
</body>
</html>