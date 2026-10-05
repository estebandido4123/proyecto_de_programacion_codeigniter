<?php

namespace App\Controllers;

use App\Models\CiudadanosModel;
use App\Models\NivelesAcademicosModel;
use App\Models\MunicipiosModel;

class CiudadanosController extends BaseController
{
    // Carga la vista principal con la lista de ciudadanos y los datos para los select
    public function index_ciudadanos(): string
    {
        $ciudadanoModel = new CiudadanosModel();
        $nivelModel = new NivelesAcademicosModel();
        $muniModel = new MunicipiosModel();

        $datos['datos'] = $ciudadanoModel->findAll();
        $datos['niveles'] = $nivelModel->findAll();
        $datos['municipios'] = $muniModel->findAll();

        return view('ciudadanos', $datos);
    }

    // Guarda un nuevo ciudadano registrado
    public function agregar_ciudadanos()
    {
        $datos = [
            'dpi'            => $this->request->getPost('txt_dpi'),
            'apellido'       => $this->request->getPost('txt_apellido'),
            'nombre'         => $this->request->getPost('txt_nombre'),
            'direccion'      => $this->request->getPost('txt_direccion'),
            'tel_casa'       => $this->request->getPost('txt_tel_casa'),
            'tel_movil'      => $this->request->getPost('txt_tel_movil'),
            'email'          => $this->request->getPost('txt_email'),
            'fechanac'       => $this->request->getPost('txt_fechanac'),
            'cod_nivel_acad' => $this->request->getPost('select_nivel'),
            'cod_muni'       => $this->request->getPost('select_muni'),
            'contra'         => $this->request->getPost('txt_contra')
        ];

        $ciudadanoModel = new CiudadanosModel();
        $ciudadanoModel->insert($datos);

        return $this->index_ciudadanos();
    }

    // Elimina un ciudadano por su DPI
    public function eliminar_ciudadanos($dpi)
    {
        $ciudadanoModel = new CiudadanosModel();
        $ciudadanoModel->delete($dpi);

        return $this->index_ciudadanos();
    }

    // Busca un ciudadano por DPI y carga los catálogos para el formulario de modificación
    public function buscar_ciudadanos($dpi)
    {
        $ciudadanoModel = new CiudadanosModel();
        $nivelModel = new NivelesAcademicosModel();
        $muniModel = new MunicipiosModel();

        $datos['ciudadano']  = $ciudadanoModel->find($dpi);
        $datos['niveles']    = $nivelModel->findAll();
        $datos['municipios'] = $muniModel->findAll();

        return view('form_modificar_ciudadanos', $datos);
    }

    // Procesa los cambios actualizados del ciudadano
    public function modificar_ciudadanos()
    {
        $ciudadanoModel = new CiudadanosModel();
        $dpi = $this->request->getPost('txt_dpi');

        $datos = [
            'apellido'       => $this->request->getPost('txt_apellido'),
            'nombre'         => $this->request->getPost('txt_nombre'),
            'direccion'      => $this->request->getPost('txt_direccion'),
            'tel_casa'       => $this->request->getPost('txt_tel_casa'),
            'tel_movil'      => $this->request->getPost('txt_tel_movil'),
            'email'          => $this->request->getPost('txt_email'),
            'fechanac'       => $this->request->getPost('txt_fechanac'),
            'cod_nivel_acad' => $this->request->getPost('select_nivel'),
            'cod_muni'       => $this->request->getPost('select_muni'),
            'contra'         => $this->request->getPost('txt_contra')
        ];

        $ciudadanoModel->update($dpi, $datos);

        return $this->index_ciudadanos();
    }
}