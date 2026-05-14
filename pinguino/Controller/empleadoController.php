<?php
class IndexController{

    //get
    public function inicio(){
        require_once "View/empleado/lista.php"
    }
    
    public function nuevo(){
        require_once "View/empleado/nuevo.php"
    }

    public function editar($id){
        require_once "View/empleado/editar.php"
    }

    //post
    function createEmpleado(){
    //validar
    }

    function updateEmpleado(){

    }
}
?>