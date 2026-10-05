<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container p-2">
    <form action="<?=base_url('modificar_departamentos') ?>" method="post">
        <label for="txt_codigo_depto" class="form-label mt-1">Código: </label>
        <input type="number" name="txt_codigo_depto" id="txt_codigo_depto" class="form-control" placeholder="Ingrese codigo" required readonly value="<?=$datos['cod_depto'];?>">
        <label for="txt_nombre" class="form-label mt-1">Nombre: </label>
        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese nombre" value="<?=$datos['nombre_depto'];?>">
        <label for="txt_cod_region">Seleccione Region si cambiara</label>
        <label for="select_region" class="form-label mt-2 d-flex justify-content-between align-items-center">
            <span>Región:</span>
            <span class="badge bg-info text-dark">
                <i class="bi bi-info-circle"></i> Actual: <?= $datos['cod_region']; ?>
            </span>
        </label>
<select name="txt_cod_region" id="select_region" class="form-select border-success fw-semibold" required>
    <option value="">Seleccione una región...</option>
    <?php foreach ($regiones as $region): ?>
        <?php 
            $es_actual = ($region['cod_region'] == $datos['cod_region']);
            $seleccionado = $es_actual ? 'selected' : '';
            $estilo_bootstrap = $es_actual ? 'bg-success text-white fw-bold' : '';
            $etiqueta = $es_actual ? ' — (Valor Actual)' : '';
        ?>
        <option value="<?= $region['cod_region']; ?>" <?= $seleccionado; ?> class="<?= $estilo_bootstrap; ?>">
            <?= $region['cod_region'] . $etiqueta; ?>
        </option>
    <?php endforeach; ?>
</select>
        <button type="submit" class="btn btn-success mt-2 form-control"> Guardar </button>
    </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

</body>
</html>