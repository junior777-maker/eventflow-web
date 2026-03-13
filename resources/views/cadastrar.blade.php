<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Evento</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; display: flex; justify-content: center; padding: 40px 0; }
        .form-card { background: white; padding: 30px; border-radius: 12px; width: 450px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #1877f2; text-align: center; }
        input, textarea { width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
        label { font-weight: bold; color: #444; }
        button { width: 100%; background: #1877f2; color: white; padding: 14px; border: none; border-radius: 8px; font-weight: bold; cursor: pointer; margin-top: 10px; }
        .cancel { display: block; text-align: center; margin-top: 15px; color: #666; text-decoration: none; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Cadastrar Evento</h2>
        <form action="/salvar-evento" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Nome do Evento</label>
            <input type="text" name="name" placeholder="Ex: Show na Gameleira" required>
            
            <label>Data</label>
            <input type="date" name="date" required>
            
            <label>Preço (R$)</label>
            <input type="number" step="0.01" name="price" placeholder="0.00" required>
            
            <label>Descrição/Localização</label>
            <textarea name="location" rows="3" required></textarea>
            
            <div style="display: flex; gap: 10px;">
                <input type="text" name="lat" placeholder="Latitude (Ex: -9.97)" required>
                <input type="text" name="lng" placeholder="Longitude (Ex: -67.80)" required>
            </div>

            <label>Foto do Evento</label>
            <input type="file" name="image" accept="image/*">

            <button type="submit">CADASTRAR</button>
            <a href="/" class="cancel">Voltar</a>
        </form>
    </div>
</body>
</html>