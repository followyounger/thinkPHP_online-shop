<?php

/**
*
*/
namespace Model;
use Think\Model;
class AuthModel extends Model
{
    //利用已有数据生成一条新纪录（获得新纪录主键id值）
    function saveData($four){
    //    $newid = $this->add($four);//数组方式添加数据
    // //利用全路径进行信息制作，全路径和等级
    // //先制作全路径
    // if ($four['auth_pid']==0) {
    //     # code...
    //     $path = $newid;
    // } else {
    //     # code...
    //     $pinfo = $this->find($four['auth_pid']);
    //     $ppath = $pinfo['auth_path'];  //父级全路径
    //     $path = $ppath.'-'.$newid;

    // }

        $newid = $this -> add($four); //数组方式添加数据
        //2) 利用新记录信息制作 全路径和等级
        //----制作全路径
        if($four['auth_pid']==0){//① 顶级权限
            $path = $newid;
        }else{      //② 非顶级权限
            //获得对应父级权限的信息(父级全路径)
            $pinfo = $this -> find($four['auth_pid']);
            $ppath = $pinfo['auth_path'];//父级全路径
            $path = $ppath ."-".$newid;
        }
        //dump($path);
        $level = substr_count($path,'-');
        $sql = "update sw_auth set auth_path='$path',auth_level='$level' where auth_id='$newid'";
        return $this->execute($sql);
    }




}

 ?>