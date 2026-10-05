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
    <div class="container-fluid">
    <form action="<?=base_url('modificar_region') ?>" method="post">
        <label for="txt_codigo" class="form-label mt-1">Código: </label>
        <input type="number" name="txt_codigo" id="txt_codigo" class="form-control" placeholder="Ingrese codigo" required readonly value="<?=$datos['cod_region'];?>">
        <label for="txt_nombre" class="form-label mt-1">Nombre: </label>
        <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Ingrese nombre" value="<?=$datos['nombre'];?>">
        <label for="txt_descripcion" class="form-label mt-1">Descripción: </label>
        <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" placeholder="Ingrese descripción" value="<?=$datos['descripcion'];?>">
        <button type="submit" class="btn btn-success mt-2 form-control"> Guardar </button>
    </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

</body>
</html>