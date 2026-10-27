<?php
$titulo = 'Nosotros';
require 'includes/db.php';
$integrantes = $pdo->query('SELECT * FROM integrantes ORDER BY nombre ASC')->fetchAll();
require 'includes/header.php';
?>
<h1>Nosotros</h1>
<p>Misión: crear soluciones tecnológicas accesibles. Visión: ser referentes en innovación. Valores: colaboración, aprendizaje y transparencia.</p>

<h2>Nuestro equipo (<?= count($integrantes) ?>)</h2>
<div class="grid">
  <?php if (empty($integrantes)): ?>
    <p>Aún no hay integrantes registrados.</p>
  <?php else: foreach ($integrantes as $i): ?>
    <div class="card">
      <h3><?= htmlspecialchars($i['nombre']) ?></h3>
      <p><?= htmlspecialchars($i['carrera']) ?></p>
      <a href="perfil.php?id=<?= (int)$i['id'] ?>">Ver perfil →</a>
    </div>
  <?php endforeach; endif; ?>
</div>
<?php require 'includes/footer.php'; ?>
