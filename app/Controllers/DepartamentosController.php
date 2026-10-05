<?php
    namespace App\Controllers;
    use App\Models\DepartamentosModel;
    use App\Models\RegionesModel;

    class DepartamentosController extends BaseController
    {
        public function index_departamentos(): string
        {
            $departamento = new DepartamentosModel();
            $datos['datos']=$departamento->findAll();
            return view('departamentos',$datos);
        }
        public function agregar_departamentos()
        {
            
            $datos = [
                'cod_depto' => $this->request->getPost('txt_codigo_depto'),
                'nombre_depto' => $this->request->getPost('txt_nombre'),
                'cod_region' => $this->request->getPost('txt_cod_region')
            ];
            $departamento = new DepartamentosModel();
            $departamento -> insert($datos);
            return $this->index_departamentos();
        }

        public function eliminar_departamentos($codigo)
        {
            $departamento = new DepartamentosModel();
            $departamento->delete($codigo);
            return $this->index_departamentos();   
        }
        public function buscar_departamentos($codigo)
        {
            $departamento = new DepartamentosModel();
            $regionModel = new RegionesModel();
            $datos['datos'] = $departamento->find($codigo);
            $datos['regiones'] = $regionModel->findAll();
            return view('form_modificar_departamentos', $datos);
        }
        public function modificar_departamentos()
        {
            $departamento = new DepartamentosModel();
            $codigo = $this->request->getPost('txt_codigo_depto');
            $datos = [
                'nombre_depto' => $this->request->getPost('txt_nombre'),
                'cod_region' => $this->request->getPost('txt_cod_region')
            ];
            $departamento -> update($codigo,$datos);
            return $this->index_departamentos();
        }        
    
        
    }