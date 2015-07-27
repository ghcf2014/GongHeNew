<?php
namespace Admin\Controller;
use Admin\Logic\UserinfoLogic;
use Think\Controller;
use Think\Session\Driver;
use Think\Cache\Driver\Memcache;

class UserController extends Controller {
/**
     * @author shuangshuang
     *  2015/7/24
     */
    public function login(){
        if(IS_POST){
            if(isset($_SESSION['username'])==''){
                session_start();
            }
            $username=$_POST['username'];
            $password=$_POST['password'];
            $UserInfo=new UserinfoLogic;
            $result=$UserInfo->login($username,$password);
            if(empty($result)){
                $this->error('用户名或者密码错误');
            }else{
                $_SESSION['username']=$result['username'];
                $_SESSION['nickname']=$result['nickname'];
                $_SESSION['id']=$result['id'];
                $this->redirect('Index/index');
            }
        }else{
        	$name=get_nickname();

			if(!empty($name)){
				$this->redirect("Index/index");
			}else{
				$this->display('User/login');
			}
            
        }
    } 
    /*
     * 
     * */
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
        session_destroy();
        $this->redirect('User/login');
    }
	public function memberlist(){
		$this->display('User/memberlist');
	}
	public function adminlist(){
		$this->display('User/adminlist');
	}
    public function systemlog(){
    	$this->display('User/systemlog');
    }

    public function infomanage(){
    	$this->display('User/infomanage');
    }
    public function teamlist(){
    	$this->display('User/teamlist');
    }
    public function friendlist(){
    	$this->display('User/friendlist');
    }

    

}












































































































