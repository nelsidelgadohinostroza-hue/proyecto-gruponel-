<?php include 'incluye/conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario Ferreteria</title>
<style>
body{font-family:Arial; background:#f0f2f5; margin:0;}
.top{background:#0d47a1; color:white; text-align:center; padding:15px;}
.box{max-width:480px; background:white; margin:20px auto; padding:20px; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,.1);}
label{font-weight:bold; display:block; margin-top:12px;}
input,select,textarea{width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; margin-top:5px; box-sizing:border-box;}
button{width:100%; background:#ff6f00; color:white; border:none; padding:12px; border-radius:8px; margin-top:15px; font-size:16px; cursor:pointer;}
.ok{background:#d4edda; color:#155724; padding:10px; border-radius:8px; text-align:center; margin-bottom:10px;}
</style>
</head>
<body>
<div class="top"><h2>🛠️ Ferretería Gruponel - Pedido</h2></div>
<div class="box">
<?php
if(isset($_POST['enviar'])){
    $n = $_POST['nombre'];
    $c = $_POST['celular'];
    $p = $_POST['producto'];
    $sql = "INSERT INTO formulario (nombre, celular, producto) VALUES ('$n','$c','$p')";
    if($conn->query($sql)){
        echo "<div class='ok'>✅ Gracias $n, tu pedido de $p fue guardado</div>";
    }
}
?>
<form method="POST">
<label>Nombre *</label>
<input type="text" name="nombre" required placeholder="Ej. Katy">
<label>Celular *</label>
<input type="text" name="celular" required placeholder="987654321">
<label>Producto *</label>
<input type="text" name="producto" required placeholder="Cemento, Martillo...">
<label>Cantidad</label>
<select name="cantidad">
<option>1 unidad</option>
<option>5 unidades</option>
<option>10 a más</option>
</select>
<label>Mensaje</label>
<textarea name="mensaje" rows="3" placeholder="Detalle de entrega..."></textarea>
<button type="submit" name="enviar">Enviar Pedido 📩</button>
</form>
</div>
</body>
</html>
