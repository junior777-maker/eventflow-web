<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventFlow - Home</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map { height: 400px; width: 100%; border-radius: 10px; margin-bottom: 20px; z-index: 1; }
        .navbar { background: #1c1e21; color: white; padding: 15px 20px; display: flex; justify-content: space-between; align-items: center; }
        .link-perfil { color: #4a90e2; text-decoration: none; font-weight: bold; }
        .container { padding: 20px; max-width: 1200px; margin: auto; }
        .btn-novo { background: #28a745; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; }
        .event-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px; margin-top: 20px; }
        .event-card { border: 1px solid #ddd; padding: 15px; border-radius: 8px; background: white; }
    </style>
</head>
<body>

<div class="navbar">
    <h1 style="margin:0; font-size: 1.5rem;">EventFlow</h1>
    <div>
        @if(session('usuario'))
            Olá, <a href="/perfil" class="link-perfil">{{ session('usuario')->name }}</a>
        @else
            Olá, <a href="/login" class="link-perfil">Visitante (Entrar)</a>
        @endif
        | <a href="/sair" style="color:white; text-decoration:none; background:#fa3e3e; padding:5px 10px; border-radius