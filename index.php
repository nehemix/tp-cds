<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h2>Ingrese los datos del pedido:</h2>
    <form action="comprobante.php" method="POST">
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" min="<?php echo date('Y-m-d'); ?>"><br><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="impuesto">Impuesto:</label>
        <select name="impuesto" id="impuesto">
            <option value="5">5%</option>
            <option value="10">10%</option>
            <option value="20">20%</option>
            <option value="25">25%</option>
            <option value="30">30%</option>
        </select><br><br>

        <label for="detalle">Detalle:</label>
        <textarea name="detalle" id="detalle" rows="4" cols="30"></textarea><br><br>

        <h3>Productos:</h3>
        <table>
            <tr>
                <th>Código</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <tr>
                <td><input type="text" name="codigo[]" /></td>
                <td><input type="text" name="descripcion[]" /></td>
                <td><input type="number" name="cantidad[]" min="1" /></td>
                <td><input type="number" name="precio[]" min="0" /></td>
            </tr>
        </table>

        <button type="button" onclick="agregarProducto()">Agregar Producto</button><br><br>

        <input type="submit" value="Generar Comprobante">
    </form>

    <script>
        // script boton agregar producto
        
        function agregarProducto() {
            var table = document.querySelector("table");
            var row = table.insertRow();
            row.innerHTML = `
                <td><input type="text" name="codigo[]" /></td>
                <td><input type="text" name="descripcion[]" /></td>
                <td><input type="number" name="cantidad[]" min="0" /></td>
                <td><input type="number" name="precio[]" min="0" /></td>
            `;
        }
    </script>
</body>
</html>
