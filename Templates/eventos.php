<?php
// ==========================
// DATOS DINÁMICOS DE EVENTOS
// ==========================
$eventos = [
    ["nombre"=>"My Chemical Romance","fecha"=>"10 Febrero - Coliseo Vive Claro"],
    ["nombre"=>"Doja Cat","fecha"=>"15 Febrero - Movistar Arena"],
    ["nombre"=>"Alejandro Sanz","fecha"=>"13-14 Febrero - Movistar Arena"],
    ["nombre"=>"Kali Uchis","fecha"=>"18 Febrero - Movistar Arena"],
    ["nombre"=>"Miguel Bosé","fecha"=>"11 Marzo - Movistar Arena"],
    ["nombre"=>"Pablo Alborán","fecha"=>"14 Marzo - Movistar Arena"],
    ["nombre"=>"Bryan Adams","fecha"=>"20 Marzo - Movistar Arena"],
    ["nombre"=>"Jason Mraz","fecha"=>"14 Marzo - Royal Center"],
    ["nombre"=>"Dream Theater","fecha"=>"26 Abril - Movistar Arena"],
    ["nombre"=>"Megadeth","fecha"=>"27 Abril - Movistar Arena"],
    ["nombre"=>"Mon Laferte","fecha"=>"7 Mayo - Movistar Arena"],
    ["nombre"=>"Ed Sheeran","fecha"=>"16 Mayo - Coliseo Vive Claro"],
    ["nombre"=>"Soda Stereo","fecha"=>"28-30 Mayo - Movistar Arena"],
    ["nombre"=>"Rock al Parque","fecha"=>"Octubre - Parque Simón Bolívar"],
    ["nombre"=>"Salsa al Parque","fecha"=>"Noviembre - Parque Simón Bolívar"]
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos Música Pastel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg,#ffd6e8 0%,#d9f4ff 35%,#fff4d6 70%,#f6ddff 100%);
      font-family: 'Poppins', sans-serif;
      color: #444;
    }
    nav { background: rgba(255,255,255,0.75); backdrop-filter: blur(12px); }
    .navbar-brand { color:#ff80b3 !important; font-weight:700; }
    .btn-pastel { background:linear-gradient(90deg,#80dfff,#ff80b3); border:none; color:#fff; border-radius:50px; padding:10px 25px; }
    .btn-pastel:hover { transform:translateY(-4px); box-shadow:0 10px 20px rgba(255,128,179,0.25); }
    section { padding:70px 0; }
    section h2 { color:#ff80b3; font-weight:700; margin-bottom:40px; }
    .card { border:none; border-radius:20px; background:rgba(255,255,255,0.7); box-shadow:0 6px 16px rgba(0,0,0,0.08); transition:.3s ease; }
    .card:hover { transform:translateY(-8px); }
    footer { background:rgba(255,255,255,0.7); text-align:center; padding:30px; margin-top:40px; color:#777; }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">🎧 Música Pastel</a>
    <div class="collapse navbar-collapse justify-content-end">
      <a href="index.php">Inicio</a>
      <a href="eventos.php">Eventos</a>
    </div>
  </div>
</nav>

<!-- HERO -->
<header class="container text-center">
  <h1>🎤 Eventos Musicales en Bogotá 2026</h1>
  <p>Conciertos y festivales que llenarán la ciudad de ritmo y color.</p>
</header>

<!-- EVENTOS -->
<section class="container">
  <div class="row g-4">
    <?php foreach($eventos as $e): ?>
      <div class="col-md-6">
        <div class="card p-4 text-center">
          <h4><?= $e["nombre"] ?></h4>
          <p class="text-muted"><?= $e["fecha"] ?></p>
          <button class="btn btn-pastel">Ver más</button>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- FOOTER -->
<footer>
  © 2026 Música Pastel — Inspirado en tu estilo 🎶
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
