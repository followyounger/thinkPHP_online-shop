<?php

namespace Admin\Controller;
use Tools\AdminController;
class RoleController extends AdminController
{

    function showlist(){


        //获得橘色数据、展示数据
        //$info
        $info =D('Role')->select();
        $this->assign('info',$info);
        $this->display();
    }
    function distribute($role_id){
        $role = new \Model\RoleModel();
        if (!empty($_POST)) {
            # code...
            $z = $role->saveAuth($role_id,$_POST['auth_id']);
            if ($z) {
                # code...
                $this->redirect('showlist',array(),2,'分配权限成功');
            } else {
                # code...
                $this->redirect('distribute',array('role_id'=>$role_id),2,'分配权限失败');
            }

        } else {
            # code...
          //查询被分配权限的角色信息
            $role_info = $role->find($role_id);

            $have_auth = explode(',', $role_info['role_auth_ids']);//变成数组


            $auth_infoA = D('Auth')->where('auth_level=0')->select();
            $auth_infoB = D('Auth')->where('auth_level=1')->select();
            $this->assign('have_auth',$have_auth);
            $this->assign('auth_infoA',$auth_infoA);
            $this->assign('auth_infoB',$auth_infoB);
            $this->assign('role_info',$role_info);
            $this->display();
        }



    }
}


 ?>