<?php
namespace Home\Controller;
use Think\Controller;

class GoodsController extends Controller
{
    //商品列表展示
    function showlist(){
        $this->display();
    }
    //详情
    function detail(){
        $this->display();
    }

}

 ?>