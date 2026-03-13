<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>EventFlow - Editar Evento</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; display: flex; justify-content: center; padding: 50px 0; }
        .form-card { background: white; padding: 30px; border-radius: 8px; width: 400px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; background: #1877f2; color: white; padding: 12px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2 style="text-align:center; color:#1877f2;">Editar Evento</h2>
        <form action="/atualizar-evento/{{ $evento->id }}" method="POST">
            @csrf
            <input type="text" name="name" value="{{ $evento->name }}" required>
            <input type="date" name="date" value="{{ $evento->date }}" required>
            <input type="number" step="0.01" name="price" value="{{ $evento->price }}" required>
            <textarea name="location" required>{{ $evento->description }}</textarea>
            <input type="text" name="lat" value="{{ $evento->lat }}" required>
            <input type="text" name="lng" value="{{ $evento->lng }}" required>
            <button type="submit">SALVAR ALTERAÇÕES</button>
            <a href="/" style="display:block; text-align:center; margin-top:15px; color:#666; text-decoration:none;">Cancelar</a>
        </form>
    </div>
</body>
</html>