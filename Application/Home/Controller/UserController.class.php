<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
  public function index(){
    $this->display('User/index');
  }
  public function verify(){
    $Verify = new \Think\Verify();
    $Verify->fontSize=18;
    $Verify->length   = 4;
    $Verify->fontttf  = '5.ttf';
    $Verify->entry(0);
  }
  public function login(){
    // 检查验证码  
    // $verify = I('param.verify','');  
    // if(!check_verify($verify)){  
    //     $this->error("亲，验证码输错了哦！",$this->site_url,9);  
    // }
     
    $this->display('User/login');
  }
  public function register(){

    $this->display('User/register');
  }

}