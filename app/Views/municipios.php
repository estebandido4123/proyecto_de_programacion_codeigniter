<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid p-4">
        <h1>Municipios</h1>

        <!-- Botón para abrir Modal -->
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalMunicipio">
            Agregar Municipio
        </button>

        <a href="<?= base_url('/') ?>" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left-circle me-1"></i> Regresar al Menú Principal
        </a>
        <!-- Modal para Insertar -->
        <div class="modal fade" id="modalMunicipio" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="modalLabel">Agregar Municipio</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_municipios') ?>" method="post">
                            <label for="txt_cod_muni" class="form-label mt-1">Código Municipio:</label>
                            <input type="number" name="txt_cod_muni" id="txt_cod_muni" class="form-control" placeholder="Ingrese código" required>

                            <label for="txt_nombre" class="form-label mt-2">Nombre Municipio:</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese Nombre" required>

                            <label for="select_depto" class="form-label mt-2">Departamento asignado:</label>
                            <select name="txt_cod_depto" id="select_depto" class="form-select" required>
                                <option value="">Seleccione un departamento...</option>
                                <?php foreach ($departamentos as $depto): ?>
                                    <option value="<?= $depto['cod_depto']; ?>">
                                        <?= $depto['nombre_depto']; ?> (Código: <?= $depto['cod_depto']; ?>)
                                    </option>
                                <?php endforeach; ?>
                            </select>

                            <button type="submit" class="btn btn-success mt-3 form-control"> Guardar </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de Datos -->
        <table class="table table-striped table-bordered w-auto text-center">
            <thead>
                <tr>
                    <th>Código Municipio</th>
                    <th class="w-25">Nombre Municipio</th>
                    <th class="w-25">Código Departamento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $municipio): ?>
                    <tr>
                        <td><?= $municipio['cod_muni']; ?></td>
                        <td><?= $municipio['nombre_municipio']; ?></td>
                        <td><?= $municipio['cod_depto']; ?></td>
                        <td>
                            <a href="<?= base_url('eliminar_municipios/') . $municipio['cod_muni']; ?>" class="bi bi-trash text-dark me-2"></a>
                            <a href="<?= base_url('buscar_municipios/') . $municipio['cod_muni']; ?>" class="bi bi-pencil text-dark"></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>