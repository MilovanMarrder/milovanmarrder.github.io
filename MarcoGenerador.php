<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="estilo.css">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Generador de firma</title>
</head>

<body>
  <!-- En el siguiente div clase formulario tengo contenido el formulario -->
  <div>
    <!-- La siguiente linea es para anexar el formulario configurado en form.php -->
    <?php include 'form.php'; ?>

  </div>
  <!-- La siguiente linea es para anexar la firma generada configurada en Firma.php -->
  <div><?php
        if (isset($_POST['submit'])) {
          include 'Firma1.php';
          include 'Firma2.php';
          include 'Firma3.php';
        } ?>
  </div>

</body>

</html>