<?php

namespace App\Controllers;

use App\Models\MunicipiosModel;
use App\Models\DepartamentosModel;

class MunicipiosController extends BaseController
{
    // Muestra la lista de municipios y prepara los departamentos para el Modal de agregar
    public function index_municipios(): string
    {
        $municipioModel = new MunicipiosModel();
        $departamentoModel = new DepartamentosModel();

        $datos['datos'] = $municipioModel->findAll();
        $datos['departamentos'] = $departamentoModel->findAll();

        return view('municipios', $datos);
    }

    // Procesa la inserción de un nuevo municipio
    public function agregar_municipios()
    {
        $datos = [
            'cod_muni'         => $this->request->getPost('txt_cod_muni'),
            'nombre_municipio' => $this->request->getPost('txt_nombre'),
            'cod_depto'        => $this->request->getPost('txt_cod_depto')
        ];

        $municipioModel = new MunicipiosModel();
        $municipioModel->insert($datos);

        return $this->index_municipios();
    }

    // Elimina un municipio por su código
    public function eliminar_municipios($codigo)
    {
        $municipioModel = new MunicipiosModel();
        $municipioModel->delete($codigo);

        return $this->index_municipios();
    }

    // Busca los datos de un municipio para cargarlos en el formulario de modificación
    public function buscar_municipios($codigo)
    {
        $municipioModel = new MunicipiosModel();
        $departamentoModel = new DepartamentosModel();

        $datos['datos'] = $municipioModel->find($codigo);
        $datos['departamentos'] = $departamentoModel->findAll();

        return view('form_modificar_municipios', $datos);
    }

    // Actualiza los datos del municipio modificado
    public function modificar_municipios()
    {
        $municipioModel = new MunicipiosModel();
        $codigo = $this->request->getPost('txt_cod_muni');

        $datos = [
            'nombre_municipio' => $this->request->getPost('txt_nombre'),
            'cod_depto'        => $this->request->getPost('txt_cod_depto')
        ];

        $municipioModel->update($codigo, $datos);

        return $this->index_municipios();
    }
}