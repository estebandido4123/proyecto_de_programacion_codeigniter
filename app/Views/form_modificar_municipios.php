<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Municipio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container p-4">
        <h2>Modificar Municipio</h2>
        
        <form action="<?= base_url('modificar_municipios') ?>" method="post">
            <label for="txt_cod_muni" class="form-label mt-1">Código Municipio:</label>
            <input type="number" name="txt_cod_muni" id="txt_cod_muni" class="form-control" required readonly value="<?= $datos['cod_muni']; ?>">

            <label for="txt_nombre" class="form-label mt-3">Nombre Municipio:</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese nombre" value="<?= $datos['nombre_municipio']; ?>" required>

            <label for="select_depto" class="form-label mt-3 d-flex justify-content-between align-items-center">
                <span>Departamento Asignado:</span>
                <span class="badge bg-info text-dark">
                    <i class="bi bi-info-circle"></i> Actual: Cód. <?= $datos['cod_depto']; ?>
                </span>
            </label>

            <select name="txt_cod_depto" id="select_depto" class="form-select border-success fw-semibold" required>
                <option value="">Seleccione un departamento...</option>
                <?php foreach ($departamentos as $depto): ?>
                    <?php 
                        $es_actual = ($depto['cod_depto'] == $datos['cod_depto']);
                        $seleccionado = $es_actual ? 'selected' : '';
                        $estilo_bootstrap = $es_actual ? 'bg-success text-white fw-bold' : '';
                        $etiqueta = $es_actual ? ' — (Valor Actual)' : '';
                    ?>
                    <option value="<?= $depto['cod_depto']; ?>" <?= $seleccionado; ?> class="<?= $estilo_bootstrap; ?>">
                        <?= $depto['nombre_depto']; ?> (<?= $depto['cod_depto']; ?>)<?= $etiqueta; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <button type="submit" class="btn btn-success mt-4 form-control"> Guardar Cambios </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>