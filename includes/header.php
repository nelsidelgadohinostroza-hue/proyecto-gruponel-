<?php
$actual = basename($_SERVER['PHP_SELF']);
$menu = [
  'index.php'      => 'Base Rebelde',
  'nosotros.php'   => 'La Alianza',
  'formulario.php' => 'Holocomunicador',
  'perfil.php'     => 'Archivo Jedi',
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($titulo ?? 'Proyecto Grupal') ?></title>
  <link rel="stylesheet" href="assets/style.css">
  <script src="assets/app.js" defer></script>
</head>
<body>
<nav>
  <?php foreach ($menu as $archivo => $texto): ?>
    <a href="<?= $archivo ?>" class="<?= $actual === $archivo ? 'activo' : '' ?>"><?= $texto ?></a>
  <?php endforeach; ?>
  <button id="tema" type="button">🌙</button>
</nav>
<main>