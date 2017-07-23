<?php

namespace Admin\Controller;
use Tools\AdminController;
class IndexController extends AdminController
{

    function head(){
        $this->display();
    }
    function left(){
                //用户id
        $admin_id = session('admin_id');
        $admin_name = session('admin_name');
        //根据id获得用户信息
        $admin_info = D('Manager')->find($admin_id);

        //角色id
        $role_id = $admin_info['mg_role_id'];
        //获得角色信息
        $role_info = D('Role')->find($role_id);

        //权限的ids信息
        $auth_ids = $role_info['role_auth_ids'];

        //获得全部权限数据
        //dump($auth_ids);
        if ($admin_name === 'admin') {
            # code...
            $auth_infoA = D('Auth')->where("auth_level=0")->select();
            $auth_infoB = D('Auth')->where("auth_level=1")->select();
        } else {
    $auth_infoA = D('Auth')->where("auth_level=0 and auth_id in ($auth_ids)")->select();
    $auth_infoB = D('Auth')->where("auth_level=1 and auth_id in ($auth_ids)")->select();
        }


        //dump($auth_info);
        $this->assign('auth_infoA',$auth_infoA);
        $this->assign('auth_infoB',$auth_infoB);
        $this->display();
    }
    function right(){
        $this->display();
    }
    function index(){
        $this->display();
    }
}

 ?>