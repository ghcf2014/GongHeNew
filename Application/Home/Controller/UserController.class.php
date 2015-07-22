<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class UserController extends Controller {
  public function index(){
    is_login() || $this->redirect('User/login');
    $id=is_login();
    
    $user_money = M('member_money');
    $date_money = $user_money->where(array('uid' => $id))->find($id);
    $this->assign('money', $date_money);

    
    $user_status = M('member_status');
    $date_status = $user_status->where(array('uid' => $id))->find($id);
    $this->assign('status', $date_status);

    $user = M('member_user');
    $date = $user->where(array('uid' => $id))->find($id);
    $this->assign('conn', $date);
    $this->display('User/index');
  }
  public function verify(){
    $Verify = new \Think\Verify();
    $Verify->fontSize=18;
    $Verify->length   = 4;
    $Verify->fontttf  = '5.ttf';
    $Verify->entry(0);
  }
  public function login($username = '', $password = '', $verify = '',$email = ''){
    /* 获取用户数据 */
    if(IS_POST){ //登录验证
    // /* 检测验证码 */
    // if(!check_verify($verify)){
    // $this->error('验证码错误！');
    // }



    $map['user_name'] =$username;
    $user = D('member_user');
    $user = $user->where($map)->find();
      /* 验证用户密码 */
      if(md5($password) === $user['user_pass']){
        
        if(!empty($user['id']))session('user_auth',$user['id']);
        if(!empty($user['id']))session('user_auth_sign',$user['id']);
        //登录成功，返回用户ID
        //更新用户登录信息
        $userlog = M('member_loginlog');
        $datalog = array(
          'uid' => $user['id'],
          'add_time' => time(),
          'add_ip'   => get_client_ip()
          );
        $userlog->add($datalog);
        //消息提醒
        $usermsg = M('member_massage');
        $datamsg = array(
          'uid' => $user['id'],
          'add_time' => time(),
          'add_ip'   => get_client_ip(),
          'title'   => '登陆提醒',
          'content'   => '发生时间'.date('Y-m-d H:i:s').'',
          );
        $usermsg->add($datamsg);
        $this->success ('登陆成功，欢迎回来！','Index');
      } else {
        $this->error('密码错误！'); //密码错误
      }
    } else { //显示登录表单
      $this->display();
    }
  }
  public function register($username = '',$password = '',$email = '',$verify = '',$mobile=''){
    // if(!C('USER_ALLOW_REGISTER')){
    //   $this->error('注册已关闭');
    // }
    $this->display();
  }
  /**
   * 新用户注册
   */
  public function toRegist($username = '',$password = '',$email = '',$verify = '',$mobile=''){
    
     
    // if (is_login()>0){
    //   $this->redirect('User/Index/index');
    // }
    /* 检测验证码 */
    if(!check_verify($verify)){
    $this->error('验证码错误！');
    }
    $user = M('member_user');
    $data = array(
      'user_name' => $username,
      'user_pass' => md5($password),
      'user_email'    => $email,
      'user_phone'   => $mobile,
      );
    //验证手机
    // if(empty($data['mobile'])) unset($data['mobile']);

    /* 添加新用户 */
    $res = $user->add($data);
    if($res>0){
      if(!empty($res))session('user_auth',$res);
      if(!empty($res))session('user_auth_sign',$res);
      $this->success ('注册成功！','Index'); //错误详情见自动验证注释
    } else {
     $this->display('register');
    }
  }
  /* 退出登录 */
  public function logout(){
    if(is_login()){
              session('user_auth', null);
        session('user_auth_sign', null);
      $this->success ('退出成功！','login');
    } else {
      $this->redirect('User/login');
    }
  }
  public function msglist(){
    $id=is_login();
    $user = M('member_massage');
    $date = $user->where(array('uid' => $id))->select();
    $this->assign('conn', $date);
    $this->display();
  }
  public function msgshow($id=0){
    $user = M('member_massage');
    $date = $user->where(array('id' => $id))->find($id);
    $this->assign('conn', $date);
    $this->display();
  }
  public function withdraw(){
    $this->display('User/withdraw');
  }
  public function moneyall(){
    $this->display('User/moneyall');
  }
}