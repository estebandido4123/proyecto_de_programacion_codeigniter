<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid p-4">
        <h1 class="mb-3">Gestión de Ciudadanos</h1>

        <!-- Botón para abrir Modal -->
        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalCiudadano">
            <i class="bi bi-person-plus-fill me-1"></i> Agregar Ciudadano
        </button>

        <a href="<?= base_url('/') ?>" class="btn btn-secondary mb-3">
            <i class="bi bi-arrow-left-circle me-1"></i> Regresar al Menú Principal
        </a>

        <!-- Modal par Agregar -->
        <div class="modal fade" id="modalCiudadano" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="modalLabel">Registrar Nuevo Ciudadano</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_ciudadanos') ?>" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="txt_dpi" class="form-label fw-semibold">DPI:</label>
                                    <input type="number" name="txt_dpi" id="txt_dpi" class="form-control" placeholder="Ingrese DPI" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txt_nombre" class="form-label fw-semibold">Nombre:</label>
                                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese nombre" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txt_apellido" class="form-label fw-semibold">Apellido:</label>
                                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" placeholder="Ingrese apellido" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txt_direccion" class="form-label fw-semibold">Dirección:</label>
                                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Ingrese dirección">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txt_tel_casa" class="form-label fw-semibold">Teléfono Casa:</label>
                                    <input type="number" name="txt_tel_casa" id="txt_tel_casa" class="form-control" placeholder="Ej: 22001122">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txt_tel_movil" class="form-label fw-semibold">Teléfono Móvil:</label>
                                    <input type="number" name="txt_tel_movil" id="txt_tel_movil" class="form-control" placeholder="Ej: 55001122">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txt_email" class="form-label fw-semibold">Correo Electrónico:</label>
                                    <input type="email" name="txt_email" id="txt_email" class="form-control" placeholder="correo@ejemplo.com">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="txt_fechanac" class="form-label fw-semibold">Fecha de Nacimiento:</label>
                                    <input type="date" name="txt_fechanac" id="txt_fechanac" class="form-control">
                                </div>

                                <!-- Desplegable 1: Nivel Académico -->
                                <div class="col-md-6 mb-3">
                                    <label for="select_nivel" class="form-label fw-semibold">Nivel Académico:</label>
                                    <select name="select_nivel" id="select_nivel" class="form-select" required>
                                        <option value="" disabled selected>-- Seleccione Nivel --</option>
                                        <?php foreach ($niveles as $nivel): ?>
                                            <option value="<?= $nivel['cod_nivel_acad']; ?>">
                                                <?= $nivel['nombre']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Desplegable 2: Municipio -->
                                <div class="col-md-6 mb-3">
                                    <label for="select_muni" class="form-label fw-semibold">Municipio:</label>
                                    <select name="select_muni" id="select_muni" class="form-select" required>
                                        <option value="" disabled selected>-- Seleccione Municipio --</option>
                                        <?php foreach ($municipios as $muni): ?>
                                            <option value="<?= $muni['cod_muni']; ?>">
                                                <?= $muni['nombre_municipio']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="txt_contra" class="form-label fw-semibold">Contraseña:</label>
                                    <input type="password" name="txt_contra" id="txt_contra" class="form-control" placeholder="Ingrese contraseña" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success w-100 mt-2"><i class="bi bi-floppy"></i> Guardar Ciudadano</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla con todos los campos -->
        <div class="table-responsive shadow-sm rounded">
            <table class="table table-striped table-hover table-bordered align-middle text-center mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>DPI</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Tel. Casa</th>
                        <th>Tel. Móvil</th>
                        <th>Email</th>
                        <th>Fecha Nac.</th>
                        <th>Cod. Nivel</th>
                        <th>Cod. Muni</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($datos)): ?>
                        <?php foreach ($datos as $ciudadano): ?>
                            <tr>
                                <td class="fw-bold"><?= $ciudadano['dpi']; ?></td>
                                <td><?= $ciudadano['apellido']; ?></td>
                                <td><?= $ciudadano['nombre']; ?></td>
                                <td><?= $ciudadano['direccion']; ?></td>
                                <td><?= $ciudadano['tel_casa']; ?></td>
                                <td><?= $ciudadano['tel_movil']; ?></td>
                                <td><?= $ciudadano['email']; ?></td>
                                <td><?= $ciudadano['fechanac']; ?></td>
                                <td><span class="badge bg-info text-dark"><?= $ciudadano['cod_nivel_acad']; ?></span></td>
                                <td><span class="badge bg-secondary"><?= $ciudadano['cod_muni']; ?></span></td>
                                <td><code><?= $ciudadano['contra']; ?></code></td>
                                <td>
                                    <a href="<?= base_url('eliminar_ciudadanos/') . $ciudadano['dpi']; ?>" class="btn btn-outline-danger btn-sm me-1" title="Eliminar">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="<?= base_url('buscar_ciudadanos/') . $ciudadano['dpi']; ?>" class="btn btn-outline-primary btn-sm" title="Editar">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="12" class="text-muted">No hay registros de ciudadanos ingresados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>