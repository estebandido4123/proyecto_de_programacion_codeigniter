<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Ciudadano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container p-4">
        <h2>Modificar Datos de Ciudadano</h2>

        <form action="<?= base_url('modificar_ciudadanos') ?>" method="post">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <label for="txt_dpi" class="form-label">DPI (No editable):</label>
                    <input type="number" name="txt_dpi" id="txt_dpi" class="form-control" value="<?= $ciudadano['dpi']; ?>" readonly required>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="txt_nombre" class="form-label">Nombre:</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?= $ciudadano['nombre']; ?>" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="txt_apellido" class="form-label">Apellido:</label>
                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?= $ciudadano['apellido']; ?>" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="txt_direccion" class="form-label">Dirección:</label>
                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?= $ciudadano['direccion']; ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="txt_tel_casa" class="form-label">Teléfono Casa:</label>
                    <input type="number" name="txt_tel_casa" id="txt_tel_casa" class="form-control" value="<?= $ciudadano['tel_casa']; ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="txt_tel_movil" class="form-label">Teléfono Móvil:</label>
                    <input type="number" name="txt_tel_movil" id="txt_tel_movil" class="form-control" value="<?= $ciudadano['tel_movil']; ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="txt_email" class="form-label">Correo Electrónico:</label>
                    <input type="email" name="txt_email" id="txt_email" class="form-control" value="<?= $ciudadano['email']; ?>">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="txt_fechanac" class="form-label">Fecha Nacimiento:</label>
                    <input type="date" name="txt_fechanac" id="txt_fechanac" class="form-control" value="<?= $ciudadano['fechanac']; ?>">
                </div>

                <!-- Desplegable 1: Nivel Académico Preseleccionado -->
                <div class="col-md-6 mb-2">
                    <label for="select_nivel" class="form-label">Nivel Académico:</label>
                    <select name="select_nivel" id="select_nivel" class="form-select" required>
                        <?php foreach ($niveles as $nivel): ?>
                            <option value="<?= $nivel['cod_nivel_acad']; ?>" <?= ($nivel['cod_nivel_acad'] == $ciudadano['cod_nivel_acad']) ? 'selected' : ''; ?>>
                                <?= $nivel['nombre']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Desplegable 2: Municipio Preseleccionado -->
                <div class="col-md-6 mb-2">
                    <label for="select_muni" class="form-label">Municipio:</label>
                    <select name="select_muni" id="select_muni" class="form-select" required>
                        <?php foreach ($municipios as $muni): ?>
                            <option value="<?= $muni['cod_muni']; ?>" <?= ($muni['cod_muni'] == $ciudadano['cod_muni']) ? 'selected' : ''; ?>>
                                <?= $muni['nombre_municipio']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-12 mb-2">
                    <label for="txt_contra" class="form-label">Contraseña:</label>
                    <input type="password" name="txt_contra" id="txt_contra" class="form-control" value="<?= $ciudadano['contra']; ?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success mt-4 w-100"> Guardar Cambios </button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>