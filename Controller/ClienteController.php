<?php
 include_once('Model/ClienteModel.php');  //modificar nombres cuando juntemos los archivos
 require_once("View/ClienteView.php");
 include_once('RouterAvanzado.php');  // modificar nombres cuando juntemos los archivos

 class ClienteController {
    
    private $model;
    private $view;

    public function __construct(){
        $this->model = new ClienteModel();
        $this->view = new ClienteView();
    }

    public function Home(){
        $this->view->ShowHome();
    }

    public function Alta(){
        $this->model->Insert($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['email'],$_POST['telefono'],$_POST['cuit']);

    }

    public function delete($id = null){
        $id = $id[':ID'];
        $this->model->Delete($id);

        $this->view->ShowPredeterminado();

    }

    public function Modificar($id = null){
         $this->model->Edit($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['email'],$_POST['telefono'],$_POST['cuit']);
         
         $this->view->ShowPredeterminadoADMIN();
    }

    public function formAlta(){
        $this->view->formAlta();
    }

    






 }









?>