<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contacto</title>
  <link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$submitted = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"] ?? ""), ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars(trim($_POST["email"] ?? ""), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST["message"] ?? ""), ENT_QUOTES, 'UTF-8');
    $submitted = true;
}
?>
<?php if ($submitted): ?>
  <h2>Gracias por contactarnos, <?php echo $name; ?>!</h2>
  <p>Te responderemos pronto a <?php echo $email; ?>.</p>
  <p>Tu mensaje:</p>
  <pre><?php echo $message; ?></pre>
<?php else: ?>
  <h1>Formulario de Contacto</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="name">Nombre:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Correo electr&oacute;nico:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="message">Mensaje:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br>
    <button type="submit">Enviar</button>
  </form>
<?php endif; ?>
</body>
</html>
