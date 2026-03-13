<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Locais - EventFlow</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; padding: 20px; }
        .card { background: white; padding: 20px; border-radius: 8px; max-width: 500px; margin: auto; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #1877f2; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; width: 100%; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        th, td { text-align: left; padding: 10px; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>
    <div class="card">
        <h2>📍 Cadastrar Novo Local</h2>
        <form action="/locais" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nome do Local (Ex: Gameleira)" required>
            <input type="text" name="address" placeholder="Endereço">
            <input type="text" name="lat" placeholder="Latitude (Ex: -9.974)" required>
            <input type="text" name="lng" placeholder="Longitude (Ex: -67.807)" required>
            <button type="submit">Salvar Local</button>
        </form>

        <table>
            <thead>
                <tr><th>Nome</th><th>Lat</th><th>Lng</th></tr>
            </thead>
            <tbody>
                @foreach($locais as $l)
                <tr>
                    <td>{{ $l->name }}</td>
                    <td>{{ $l->lat }}</td>
                    <td>{{ $l->lng }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="/" style="text-decoration: none; color: #65676b;">← Voltar para Eventos</a>
    </div>
</body>
</html>