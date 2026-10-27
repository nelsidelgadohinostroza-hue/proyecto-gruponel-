<?php
$titulo = 'Formulario';
require 'includes/db.php';
$ok = false; $errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre  = trim($_POST['nombre'] ?? '');
    $correo  = trim($_POST['correo'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    if ($nombre === '') $errores[] = 'El nombre es obligatorio.';
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) $errores[] = 'Correo no válido.';
    if (strlen($mensaje) < 10) $errores[] = 'El mensaje es muy corto.';

    if (!$errores) {
        $st = $pdo->prepare('INSERT INTO mensajes (nombre, correo, mensaje) VALUES (?,?,?)');
        $st->execute([$nombre, $correo, $mensaje]);
        $ok = true;
    }
}
$ultimos = $pdo->query('SELECT nombre, mensaje, creado FROM mensajes ORDER BY id DESC LIMIT 5')->fetchAll();
require 'includes/header.php';
?>
<h1>Holocomunicador</h1>
<?php if ($ok): ?><div class="ok">¡Mensaje enviado correctamente!</div><?php endif; ?>
<?php foreach ($errores as $e): ?><div class="error"><?= htmlspecialchars($e) ?></div><?php endforeach; ?>

<form method="post" id="form-contacto">
  <label>Nombre: <input type="text" name="nombre" required></label>
  <label>Correo: <input type="email" name="correo" required></label>
  <label>Mensaje: <textarea name="mensaje" rows="5" maxlength="500"></textarea></label>
  <small id="contador">0/500</small><br>
  <button type="submit">Enviar</button>
</form>

<h2 style="margin-top:25px">Últimos mensajes</h2>
<?php foreach ($ultimos as $m): ?>
  <div class="card" style="margin-top:10px">
    <strong><?= htmlspecialchars($m['nombre']) ?></strong> <small><?= $m['creado'] ?></small>
    <p><?= nl2br(htmlspecialchars($m['mensaje'])) ?></p>
  </div>
<?php endforeach; ?>
<?php require 'includes/footer.php'; ?>