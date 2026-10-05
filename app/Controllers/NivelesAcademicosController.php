<?php

namespace App\Controllers;

use App\Models\NivelesAcademicosModel;

class NivelesAcademicosController extends BaseController
{
    // Muestra la lista de todos los niveles académicos
    public function index_niveles_academicos(): string
    {
        $nivelModel = new NivelesAcademicosModel();
        $datos['datos'] = $nivelModel->findAll();

        return view('niveles_academicos', $datos);
    }

    // Agrega un nuevo nivel académico
    public function agregar_niveles_academicos()
    {
        $datos = [
            'cod_nivel_acad' => $this->request->getPost('txt_cod_nivel_acad'),
            'nombre'         => $this->request->getPost('txt_nombre'),
            'descripcion'    => $this->request->getPost('txt_descripcion')
        ];

        $nivelModel = new NivelesAcademicosModel();
        $nivelModel->insert($datos);

        return $this->index_niveles_academicos();
    }

    // Elimina un nivel académico según su código
    public function eliminar_niveles_academicos($codigo)
    {
        $nivelModel = new NivelesAcademicosModel();
        $nivelModel->delete($codigo);

        return $this->index_niveles_academicos();
    }

    // Busca los datos de un nivel académico para mostrarlos en el formulario de modificación
    public function buscar_niveles_academicos($codigo)
    {
        $nivelModel = new NivelesAcademicosModel();
        $datos['datos'] = $nivelModel->find($codigo);

        return view('form_modificar_niveles_academicos', $datos);
    }

    // Procesa los cambios actualizados del nivel académico
    public function modificar_niveles_academicos()
    {
        $nivelModel = new NivelesAcademicosModel();
        $codigo = $this->request->getPost('txt_cod_nivel_acad');

        $datos = [
            'nombre'      => $this->request->getPost('txt_nombre'),
            'descripcion' => $this->request->getPost('txt_descripcion')
        ];

        $nivelModel->update($codigo, $datos);

        return $this->index_niveles_academicos();
    }
}