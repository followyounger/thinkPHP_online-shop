<?php

namespace Admin\Controller;
use Tools\AdminController;
use Think\Verify;
class ManagerController extends AdminController
{

    function login()
    {
        if (!empty($_POST)) {

            $vri = new Verify();
            if ($vri->check($_POST['captcha'])) {

                $usrpwd = array(
                    'mg_name'=>$_POST['admin_user'],
                    'mg_pwd'=>$_POST['admin_psd'],
                    );
                $info = D('Manager')->where($usrpwd)->find();
                if ($info) {
                    # code...
                    session('admin_name',$info['mg_name']);
                    session('admin_id',$info['mg_id']);
                    $this->redirect('Index/index');
                } else {
                    # code...
                    echo "用户名或密码错误";
                }

            } else {
                # code...
                echo '验证失败';
            }

        }
            $this->display();



    }

    function logout(){
        session(null);
        $this->redirect('Manager/login');
    }
    function verifyImg(){
        $cfg = array(
             'imageH' => 40,   //验证码图片高度
             'imageW' => 100,    //验证码图片宽度
             'fontSize' => 15,
             'length' => 4,
             'fontttf' => '4.ttf',
            );
        $very = new Verify($cfg);
        $very->entry();

    }
}


 ?>