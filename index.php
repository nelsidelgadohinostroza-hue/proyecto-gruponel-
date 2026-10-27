<?php
$titulo = 'Inicio';
require 'includes/db.php';
$totalInt = $pdo->query('SELECT COUNT(*) FROM integrantes')->fetchColumn();
$totalMsg = $pdo->query('SELECT COUNT(*) FROM mensajes')->fetchColumn();
require 'includes/header.php';
?>
<h1>Bienvenidos a nuestro proyecto</h1>
<p>Hoy es <?= date('d/m/Y') ?>. Usa el menú para navegar.</p>
<div class="stats">
  <div><?= $totalInt ?><small>Integrantes</small></div>
  <div><?= $totalMsg ?><small>Mensajes recibidos</small></div>
</div>
<?php require 'includes/footer.php'; ?>