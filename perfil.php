<?php
$titulo = 'Perfil';
require 'includes/db.php';
$id = (int)($_GET['id'] ?? 1);
$st = $pdo->prepare('SELECT * FROM integrantes WHERE id = ?');
$st->execute([$id]);
$p = $st->fetch();
require 'includes/header.php';
?>
<?php if ($p): ?>
  <h1><?= htmlspecialchars($p['nombre']) ?></h1>
  <p><strong>Carrera:</strong> <?= htmlspecialchars($p['carrera']) ?></p>
  <p><strong>Descripción:</strong> <?= htmlspecialchars($p['descripcion']) ?></p>
<?php else: ?>
  <h1>Perfil no encontrado</h1>
<?php endif; ?>
<p style="margin-top:15px"><a href="nosotros.php">← Volver a Nosotros</a></p>
<?php require 'includes/footer.php'; ?>