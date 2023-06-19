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


}
