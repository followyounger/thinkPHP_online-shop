<?php
namespace Home\Controller;
use Think\Controller;
//用户控制器
class UserController extends Controller
{

    function login(){
        $this->display();
    }
    function register(){
        //$user = D('User');
        $user = new \Model\UserModel();
        if (!empty($_POST)) {
            //$_POST['user_hobby']=implode(',',$_POST['user_hobby']);
            //$z = $user->add($_POST);
            //echo $z;
            //dump($_POST);
            $data = $user->create();  //收集信息、表单自动验证
            if ($data) {
                $data['user_hobby']=implode(',',$data['user_hobby']);
                $z = $user->add($data);
                if($z){
                    $z->redirect('Index/index');
                }
            } else {
                //$user->getError();
                $this->assign('errorInfo',$user->getError());
            }

        }
        $this->display();
    }

}

 ?>