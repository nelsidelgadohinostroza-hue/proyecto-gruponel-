<?php
$titulo = 'Nosotros';
require 'includes/db.php';
$integrantes = $pdo->query('SELECT * FROM integrantes')->fetchAll();
require 'includes/header.php';
?>
<h1>Nosotros</h1>
<p>Misión, visión y quiénes somos... <!-- INTEGRANTE 1: edita aquí --></p>
<div class="grid">
  <?php foreach ($integrantes as $i): ?>
    <div class="card">
      <h3><?= htmlspecialchars($i['nombre']) ?></h3>
      <p><?= htmlspecialchars($i['carrera']) ?></p>
      <a href="perfil.php?id=<?= $i['id'] ?>">Ver perfil →</a>
    </div>
  <?php endforeach; ?>
</div>
<?php require 'includes/footer.php'; ?>