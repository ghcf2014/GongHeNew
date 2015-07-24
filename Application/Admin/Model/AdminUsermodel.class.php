<?php
namespace Admin\Model;
use Think\Model;
class AdminUserModel extends Model{

//自动验证
    protected $_validate = array(
    	array('username','6,12','用户名长度不正确',self::MUST_VALIDATE,'length',self::MODEL_BOTH),
        array('username', 'require', '用户名不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_INSERT),
        array('password', 'require', '密码不能为空', self::MUST_VALIDATE, 'regex', self::MODEL_BOTH),
    );


}























































