<?php
// Programa.php - Suma de dos números
$num1 = $_POST['num1'] ?? '';
$num2 = $_POST['num2'] ?? '';
$resultado = null;
if ($num1 !== '' && $num2 !== '' && is_numeric($num1) && is_numeric($num2)) {
    $resultado = (float)$num1 + (float)$num2;
}
?>
<!doctype html>
<html lang="es">
<head><meta charset="utf-8"><title>Programa28 - Suma</title></head>
<body>
<h1>Programa - Suma</h1>
<form method="post" action="">
  <label>Número 1: <input type="number" step="any" name="num1" value="<?php echo htmlspecialchars($num1); ?>"></label><br>
  <label>Número 2: <input type="number" step="any" name="num2" value="<?php echo htmlspecialchars($num2); ?>"></label><br>
  <button type="submit">Calcular</button>
</form>
<?php if ($resultado !== null): ?>
  <p>Resultado: <strong><?php echo $resultado; ?></strong></p>
<?php endif; ?>
</body>
</html>