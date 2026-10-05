<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Nivel Académico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container p-4">
        <h2>Modificar Nivel Académico</h2>

        <form action="<?= base_url('modificar_niveles_academicos') ?>" method="post">
            <label for="txt_cod_nivel_acad" class="form-label mt-1">Código Nivel:</label>
            <input type="number" name="txt_cod_nivel_acad" id="txt_cod_nivel_acad" class="form-control" required readonly value="<?= $datos['cod_nivel_acad']; ?>">

            <label for="txt_nombre" class="form-label mt-3">Nombre:</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese nombre" value="<?= $datos['nombre']; ?>" required>

            <label for="txt_descripcion" class="form-label mt-3">Descripción:</label>
            <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Ingrese descripción" value="<?= $datos['descripcion']; ?>" required>

            <button type="submit" class="btn btn-success mt-4 form-control"> Guardar Cambios </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>