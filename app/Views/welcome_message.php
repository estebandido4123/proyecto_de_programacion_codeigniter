<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Administración</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f6f5;
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 1rem; 
            overflow: hidden;
            border: none;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
        }
        .btn-custom {
            background-color: #000080; /* Azul marino */
            color: white;
            border-radius: 0.5rem;
            font-weight: 500;
        }
        .btn-custom:hover {
            background-color: #000066;
            color: white;
        }
        .badge-custom {
            background-color: #ffdb58; 
            color: #333;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h2 class="text-center mb-5" style="color: #000080;">Panel de Gestión del Sistema</h2>
    
    <div class="row g-4 justify-content-center">
        
        <!-- Tarjeta: Ciudadanos -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-hover shadow-sm h-100">
                <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Ciudadanos" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <span class="badge mb-2 align-self-start" style="background-color: #98FF98; color: #333;">Registro Ciudadano</span>
                    <h5 class="card-title">Ciudadanos</h5>
                    <a href="<?=base_url('ciudadanos') ?>" class="btn btn-custom mt-auto">Administrar Ciudadanos</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Departamentos -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-hover shadow-sm h-100">
                <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Departamentos" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                <span class="badge mb-2 align-self-start" style="background-color: #98FF98; color: #333;">Departamentos de Guatemala</span>
                    <h5 class="card-title">Departamentos</h5>
                    <a href="<?=base_url('departamentos') ?>" class="btn btn-custom mt-auto">Administrar Departamentos</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Municipios -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-hover shadow-sm h-100">
                <img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Municipios" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                <span class="badge mb-2 align-self-start" style="background-color: #98FF98; color: #333;">Municipios  Departamentos</span>
                    <h5 class="card-title">Municipios</h5>
                    <a href="<?=base_url('municipios') ?>" class="btn btn-custom mt-auto">Administrar Municipios</a>
                </div>
            </div>
        </div>
<!-- Tarjeta: Niveles Académicos -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-hover shadow-sm h-100">
                <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Niveles Académicos" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <span class="badge mb-2 align-self-start" style="background-color: #98FF98; color: #333;">Educación</span>
                    <h5 class="card-title">Niveles Académicos</h5>
                    <a href="<?=base_url('niveles_academicos') ?>" class="btn btn-custom mt-auto">Administrar Niveles</a>
                </div>
            </div>
        </div>
<!-- Tarjeta: Regiones -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card card-hover shadow-sm h-100">
                <img src="https://images.unsplash.com/photo-1589519160732-57fc498494f8?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Regiones" style="height: 200px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <span class="badge mb-2 align-self-start" style="background-color: #98FF98; color: #333;">Regiones Guatemal</span>
                    <h5 class="card-title">Regiones</h5>
                    <a href="<?=base_url('regiones') ?>" class="btn btn-custom mt-auto">Administrar Regiones</a>
                </div>
            </div>
        </div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>