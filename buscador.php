
<?php
include 'conexion.php';

$busqueda = "";
if (isset($_GET['busqueda'])) {
    $busqueda = $conn->real_escape_string($_GET['search']);
}

$sql = "SELECT descripcion, cantidad_disponible FROM herramientas WHERE descripcion LIKE '%$busqueda%'";
$result = $conn->query($sql);

if (!$result) {
    die("Error en la consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buscador de Herramientas</title>
</head>
<body>
    <h1>Buscador de Herramientas</h1>
    <form method="GET" action="buscador.php">
        <input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Buscar herramienta...">
        <input type="submit" value="Buscar">
    </form>
    <label for="herramientas">Seleccione una herramienta:</label>
    <select id="id_herramienta" name="id_herramienta">
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . htmlspecialchars($row["descripcion"]) . "'>";
                echo htmlspecialchars($row["descripcion"]) . " - Cantidad: " . htmlspecialchars($row["cantidad_disponible"]);
                echo "</option>";
            }
        } else {
            echo "<option value=''>No se encontraron herramientas</option>";
        }
        ?>
    </select>
</body>
</html>

<?php
$conn->close();