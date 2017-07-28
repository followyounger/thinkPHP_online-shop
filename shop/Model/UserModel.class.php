<?php

/**
*
*/
namespace Model;
use Think\Model;
class UserModel extends Model
{
    protected $patchValidate = true;
    protected $_validate = array(
        //为表单域定义具体验证规则
        array('username','require','用户不能为空'),
        array('password','require','密码不能为空'),
        array('password2','require','密码不能为空'),
        array('password2','password','与密码保持一致',0,'confirm'),
        array('user_email','email','邮箱格式不正确',2),
        array('user_qq','number','qq号码为数字信息'),
        array('user_qq','5,12','qq号码为数字信息',0,'length'),
        array('user_xueli','2,3,4,5','学历必须选择一个',0,'in'),
        array('user_hobby','check_hobby','爱好至少选择两个或以上',1,'callback'),
        );
    function check_hobby($arg){
        if(count($arg)<2){
            return false;
        }
        return true;
    }

}

 ?>