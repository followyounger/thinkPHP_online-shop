<?php
//权限控制器
namespace Admin\Controller;
use Tools\AdminController;
class AuthController extends AdminController
{

    function showlist(){
        $info = D('Auth')->order('auth_path')->select();
        $this->assign('info',$info);
        $this->display();
    }
    function addlist(){
        //有两个逻辑，一个是展示，一个是收集
        $auth = new \Model\AuthModel();
        if (!empty($_POST)) {
            # code...
            $z = $auth->saveData($_POST);
             if ($z) {
                 # code...
                 $this->redirect('showlist',array(),2,'添加权限成功');
             } else {
                 # code...
                 $this->redirect('addlist',array('role_id'=>$role_id),2,'添加权限失败');
             }

        } else {
            # code...

        $auth_infoA = $auth->where('auth_level=0')->select();
        $this->assign('auth_infoA',$auth_infoA);
        $this->display();
        }

    }

}


 ?>