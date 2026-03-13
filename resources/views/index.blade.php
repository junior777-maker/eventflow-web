<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>EventFlow - Rio Branco</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background: #f4f6f9; }
        header { background: #1a1a1a; color: white; padding: 15px 50px; display: flex; justify-content: space-between; align-items: center; }
        #map { height: 350px; width: 100%; border-bottom: 3px solid #ddd; }
        .main-container { display: flex; padding: 20px 5%; gap: 20px; }
        .list-section { flex: 2; }
        .form-section { flex: 1; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .event-card { background: white; padding: 15px; margin-bottom: 10px; border-radius: 8px; display: flex; justify-content: space-between; border-left: 5px solid #28a745; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
        input { width: 100%; padding: 10px; margin: 8px 0 15px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { background: #28a745; color: white; border: none; padding: 15px; width: 100%; border-radius: 5px; cursor: pointer; font-weight: bold; font-size: 16px; }
        button:hover { background: #218838; }
        a { color: #ff4757; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<header>
    <h2>Fluxo de eventos</h2>
    <div>Olá, <strong>{{ Auth::user()->name }}</strong> | <a href="{{ route('logout') }}">Sair</a></div>
</header>

<div id="map"></div>

<div class="main-container">
    <div class="list-section">
        <h3>Próximos Eventos</h3>
        @foreach($events as $event)
        <div class="event-card">
            <div>
                <strong>{{ $event->name }}</strong><br>
                <small>📅 {{ date('d/m/Y', strtotime($event->date)) }}</small>
            </div>
            <div style="color: #28a745; font-weight: bold;">R$ {{ number_format($event->price, 2, ',', '.') }}</div>
        </div>
        @endforeach
    </div>

    <div class="form-section">
        <h3>Cadastrar Novo Evento</h3>
        <form action="{{ route('events.store') }}" method="POST">
            @csrf
            <label>Nome do Evento</label>
            <input type="text" name="name" required>
            
            <label>Data</label>
            <input type="date" name="date" required>
            
            <label>Preço</label>
            <input type="number" step="0.01" name="price" required>
            
            <label>Latitude</label>
            <input type="text" name="lat" id="lat" value="-9.974000" required>
            
            <label>Longitude</label>
            <input type="text" name="lng" id="lng" value="-67.807000" required>
            
            <button type="submit">SALVAR NO BANCO SQL</button>
        </form>
    </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    var map = L.map('map').setView([-9.974, -67.807], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

    var events = {!! json_encode($events) !!};
    events.forEach(function(e) {
        if(e.lat && e.lng) {
            L.marker([e.lat, e.lng]).addTo(map).bindPopup("<b>" + e.name + "</b>");
        }
    });

    map.on('click', function(e) {
        document.getElementById('lat').value = e.latlng.lat.toFixed(6);
        document.getElementById('lng').value = e.latlng.lng.toFixed(6);
    });
</script>
</body>
</html>