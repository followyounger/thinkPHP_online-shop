<?php
//后台普通控制器的父类
namespace Tools;
use Think\Controller;

class AdminController extends Controller{
    function __construct(){
        parent::__construct();
            //用户访问权限控制
            //获得当前正在访问的“控制器-操作方法”
        $nowac = CONTROLLER_NAME.'-'.ACTION_NAME;
        //获得当前用户对应角色的权限列表信息

        $admin_name = session('admin_name');
        //$rang_ac = "Manger-login,Manager-verifyImg";

//        if(empty($admin_name) && strpos($rang_ac,$nowac)===false){
//             //$this -> redirect('Manager/login');
//             $js = <<<eof
//                 <script type="text/javascript">
//                 window.top.location.href="/shop/index.php/Admin/Manager/login";
//                 </script>
// eof;
//             echo $js;
//         }

        $admin_id = session('admin_id');
        $admin_info = D('Manager')->find($admin_id);
        $role_id = $admin_info['mg_role_id'];
        $role_info = D('Role')->find($role_id);
        $role_auth_ac = $role_info['role_auth_ac'];

        $allowac = "Manager-login,Manager-logout,Manager-verifyImg,Index-left,Index-right,Index-head,Index-index";

        //在一个大的字符串中判断一个小的字符串从左边开始第一次出现的位置
        //dump(strpos($nowac,$role_auth_ac));
        if (strpos($role_auth_ac,$nowac)===false &&strpos($allowac,$nowac)===false && admin_name!=='admin') {
            # code...
            exit('没有访问权限');
        }


    }
}



 ?>