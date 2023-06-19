<?php
require "models/UserModel.php";

class UserController{
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function create($create) {
        if($create){

            $this->userModel->create($create);
        }
        else{
            session_unset();
            require "views/product/create.php";
        }
    }
    public function index(){
        require "views/product/index.php";
    }

    public function list_data(){
       $listData = $this->userModel->list_data();
        require "views/product/list.php";
    }
    public function edit($editId){
        $read = $this->userModel->read($editId);
        require "views/product/edit.php";
    }
    public function delete($id){
       $this->userModel->delete($id);
       header("location:/list");
    }
    public function update($data){
        $this->userModel->update($data);
    }

}
