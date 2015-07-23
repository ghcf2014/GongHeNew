<?php
namespace Admin\Controller;
use Admin\Logic\UserinfoService;
use Think\Controller;

class UserController extends Controller {
	/*用户登录*/
    public function login(){
    	if(IS_POST){
            if(isset($_SESSION['username'])==''){
                session_start();
            }
    		$data['username']=$_POST['username'];
            $data['password']=$_POST['password'];
            $UserInfo=new UserinfoLogic;
            $result=$UserInfo->login($data);
            dump($result);
            // if(is_null($resut)){
            //     $this->error('账户名或密码错误');
            // }else{
            //     $_SESSION['username']=$_POST['username'];
            //     $this->display('Index/index');
            // }
    	}else{
    		$this->display('User/login');
    	}
    }
    /*用户注册*/
    public function register(){
    	if(IS_POST){
            $param['username']=strtolower($_POST['username']);
            $param['nickname']=$_POST['nickname'];
            $param['password']=md5($_POST['password']);
            $param['reg_time']=time();
            $param['reg_ip']=get_client_ip();
            $param['status']='0';
            $UserInfo= new UserinfoLogic;
            $result=$UserInfo->addUserinfo($param);
            if($result>0){
                $this->success('注册成功',U('User/login'));
            }else{
                $this->error('注册失败');
            }
    	}else{
    		$this->error('非法数据请求！');
    	}
    	
    }
    /*用户注销账户*/
    public function logout(){
    	unset($_SESSION['username']);
        $this->redirect('User/login');
    }


}