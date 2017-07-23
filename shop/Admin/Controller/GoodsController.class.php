<?php

namespace Admin\Controller;
use Tools\AdminController;
class GoodsController extends AdminController
{

    function showlist1()
    {
        //$goods = new \Model\GoodsModel();
        //dump($goods);
        //$eng = new \Model\EnglishModel();
        //dump($eng);
        //$obj = D('User');
        //dump($obj);
        $goods = new \Model\GoodsModel();
        $info = $goods->select();
        $this->assign('info',$info);
        $this->display();
    }
    function showlist23(){
        $goods = D('Goods');
        //1
        //$goods->where('goods_price>=1000 and goods_name like "诺%"');
        //$info = $goods->select();

        //2
        //$goods->limit(5);
        //$info = $goods->select();

        //3
        //$goods->field('goods_id,goods_name');
        //$info = $goods->select();

        //4
        //$goods->order('goods_price desc');
        $info = $goods->order('goods_id desc')->select();
        $this->assign('info',$info);
        $this->display();
    }
    function showlist(){
        $goods = D('Goods');

        $cnt = $goods->count();
        $per = 7;
        //echo $cnt;

        $page_obj = new \Tools\Page($cnt,$per);
        $sql = "select * from sw_goods order by goods_id desc ".$page_obj->limit;
        $info = $goods->query($sql);
        //$info = $goods->order('goods_id desc')->select();
        $pagelist = $page_obj->fpage(array(3,4,5,6,7,8));
        $this->assign('pagelist',$pagelist);
        $this->assign('info',$info);
        $this->display();
    }
    function addlist1()
    {
        $goods = D('Goods');
        $arr = array(
            'goods_name' => '黑莓手机',
            'goods_price' => 3400,
            'goods_number' => 14,
            'goods_weight' => 104,
            );
        $z = $goods->add($arr);
        //dump($z);
        $this->display();
    }
    function addlist(){
        $goods = D('Goods');
        if (!empty($_POST)) {

            //dump($_FILES);
            if($_FILES['goods_pic']['error']===0){
                $cfg = array(
                    'rootPath' => './Public/Upload/',//保存根路径

                    );
                $up = new \Think\Upload($cfg);
                //如果附近上传成功，就可以通过uoloadone的返回值查看到邮件在服务器的存储情况。
                $z = $up->uploadOne($_FILES['goods_pic']);
                //dump($z);
                //保存路径名，即可
                //rootPath不是成员属性，会自动，调用__get方法
                $bigpicname = $up->rootPath.$z['savepath'].$z['savename'];
                $_POST['goods_big_img']=$bigpicname;
            }

            $z = $goods->add($_POST);
            if ($z) {
                $this->redirect('showlist',array(),2,'添加商品成功！');
            } else {
                $this->redirect('addlist',array(),2,'添加商品失败！');
            }

        } else {
          $this->display();
        }
    }
    function updatelist1()
    {
        $this->display();
    }
    //是通过pathinfo方式传递的get变量名称
    function updatelist($goods_id){
        //dump($goods_id);
        //二维数组
        //$info = D('Goods')->select($goods_id);
        //一维数组
        $goods=D('Goods');
        if(!empty($_POST)){
            $z=$goods->save($_POST);
            //if ($z) {
            //    $this->redirect('showlist',array('title'=>'thinkkuangjia'),2,'修改商品成功！');
           // } else {
           //     $this->redirect('updatelist',array('$goods_id'=>$goods_id),2,'修改商品失败！');
           // }
        }else{
          $info = D('Goods')->find($goods_id);
        //dump($info);
        $this->assign('info',$info);
        $this->display();
        }


    }
}


 ?>