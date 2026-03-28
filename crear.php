<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <div class="card p-4">
        <h2 class="text-center">Nuevo Pedido 🍕</h2>

        <form method="POST">
            <input class="form-control mb-3" type="text" name="cliente" placeholder="Cliente" required>
            <input class="form-control mb-3" type="text" name="descripcion" placeholder="Descripción" required>
            <input class="form-control mb-3" type="text" name="direccion" placeholder="Dirección" required>

            <button class="btn btn-success w-100" name="guardar">Guardar</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['guardar'])) {
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO pedidos (cliente, descripcion, direccion)
            VALUES ('$cliente', '$descripcion', '$direccion')";

    $conn->query($sql);

    header("Location: index.php");
}
?>