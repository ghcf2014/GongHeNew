<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function login(){
        $this->display('User/login');
    }
    public function register(){
    	
    }
    public function logout(){

        $this->redirect('User/login');
    }
}