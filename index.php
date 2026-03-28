<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos Dominos</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #dc3545);
            color: white;
        }
        .card {
            border-radius: 15px;
        }
        h1 {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <h1 class="text-center mb-4">🍕 Gestión de Pedidos</h1>

    <div class="text-center mb-3">
        <a href="crear.php" class="btn btn-light btn-lg">+ Nuevo Pedido</a>
    </div>

    <div class="card p-4 shadow-lg">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Descripción</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT * FROM pedidos";
            $result = $conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['cliente']}</td>
                    <td>{$row['descripcion']}</td>
                    <td>{$row['direccion']}</td>
                    <td>
                        <a href='editar.php?id={$row['id']}' class='btn btn-warning btn-sm'>Editar</a>
                        <a href='eliminar.php?id={$row['id']}' class='btn btn-danger btn-sm'>Eliminar</a>
                    </td>
                </tr>";
            }
            ?>

            </tbody>
        </table>
    </div>

</div>

</body>
</html>