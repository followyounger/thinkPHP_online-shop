<?php
namespace Home\Controller;
use Think\Controller;
//用户控制器
class UserController extends Controller
{

    function login(){
         if (!empty($_POST)) {
            $usrpwd = array(
            'mg_name'=>$_POST['username'],
            'mg_pwd'=>$_POST['password'],
                    );
            $info = D('User')->where($usrpwd)->find();
            if ($info) {
                    $this->redirect('Index/index');
                } else {
                    # code...
                    echo "用户名或密码错误";
                }

            } else {
                # code...
                echo "验证失败";
            }
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
        function checkNM($name){
        $exists = D('User')->where("username='$name'")->find();
        if ($exists==null) {
            # code...
            echo "<span style='color:green;'>恭喜，名字可以使用</span>";
        }else{
            echo "<span style='color:red;'>此名字已被占用</span>";
        }
        exit;
    }

}

 ?>