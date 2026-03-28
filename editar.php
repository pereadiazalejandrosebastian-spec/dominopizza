<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "SELECT * FROM pedidos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary text-white">

<div class="container mt-5">
    <div class="card p-4">
        <h2 class="text-center">Editar Pedido</h2>

        <form method="POST">
            <input class="form-control mb-3" type="text" name="cliente" value="<?php echo $row['cliente']; ?>">
            <input class="form-control mb-3" type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>">
            <input class="form-control mb-3" type="text" name="direccion" value="<?php echo $row['direccion']; ?>">

            <button class="btn btn-warning w-100" name="actualizar">Actualizar</button>
        </form>
    </div>
</div>

<?php
if (isset($_POST['actualizar'])) {
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $sql = "UPDATE pedidos 
            SET cliente='$cliente', descripcion='$descripcion', direccion='$direccion'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: index.php");
}
?>