<?php
    namespace App\Controllers;
    use App\Models\RegionesModel;

    class RegionesController extends BaseController
    {
        public function index_regiones(): string
        {
            $region = new RegionesModel();
            $datos['datos']=$region->findAll();
            return view('regiones',$datos);
        }
        public function insertar()
        {
            
            $datos = [
                'cod_region' => $this->request->getPost('txt_codigo'),
                'nombre' => $this->request->getPost('txt_nombre'),
                'descripcion' => $this->request->getPost('txt_descripcion')
            ];
            $region = new RegionesModel();
            $region -> insert($datos);
            return $this->index();
        }

        public function eliminar($codigo)
        {
            $region = new RegionesModel();
            $region->delete($codigo);
            return $this->index();   
        }
        public function buscar_region($codigo)
        {
            $region = new RegionesModel();
            $datos['datos']=$region->find($codigo);
            return view('form_modificar_region',$datos);   
            
        }
        public function modificar_region()
        {
             $region = new RegionesModel();
            $codigo = $this->request->getPost('txt_codigo');
            $datos = [
                'nombre' => $this->request->getPost('txt_nombre'),
                'descripcion' => $this->request->getPost('txt_descripcion')
            ];
            $region -> update($codigo,$datos);
            return $this->index();
        }        
    
        
    }