<!DOCTYPE html>
<html>

<head>
    <title>Comprobante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h2>Comprobante de Pedido</h2>
    <?php
    $fecha = $_POST['fecha'];
    $nombre = $_POST['nombre'];
    $impuesto = $_POST['impuesto'];
    $detalle = $_POST['detalle'];
    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    // total productos
    $total = 0;
    for ($i = 0; $i < count($codigo); $i++) {
        $subtotal = $cantidad[$i] * $precio[$i] + ($cantidad[$i] * $precio[$i] * $impuesto / 100);
        $total += $subtotal;
    }

    // comprobante
echo "<table class='table'>";
echo "<tr>
        <th>Fecha:</th>
        <td>$fecha</td>
      </tr>";
echo "<tr>
        <th>Nombre:</th>
        <td>$nombre</td>
      </tr>";
echo "<tr>
        <th>Impuesto:</th>
        <td>$impuesto%</td>
      </tr>";
echo "<tr>
        <th>Detalle:</th>
        <td>$detalle</td>
      </tr>";
echo "</table>";

echo "<h3>Productos:</h3>";
echo "<table class='table'>";
echo "<tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Cantidad</th>
        <th>Precio</th>
      </tr>";


    for ($i = 0; $i < count($codigo); $i++) {
        echo "<tr>
                <td>{$codigo[$i]}</td>
                <td>{$descripcion[$i]}</td>
                <td>{$cantidad[$i]}</td>
                <td>{$precio[$i]}</td>
              </tr>";
    }

    echo "</table>";

    echo "<p>Total: $$total</p>";
    ?>
</body>

</html>