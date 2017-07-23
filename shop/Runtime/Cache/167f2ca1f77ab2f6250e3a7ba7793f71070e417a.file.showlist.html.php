<?php /* Smarty version Smarty-3.1.6, created on 2017-07-21 23:08:51
         compiled from "D:/phpStudy/WWW/tp3/shop/Admin/View\Auth\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:105935971eb6a5a5079-84900183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '167f2ca1f77ab2f6250e3a7ba7793f71070e417a' => 
    array (
      0 => 'D:/phpStudy/WWW/tp3/shop/Admin/View\\Auth\\showlist.html',
      1 => 1500649728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105935971eb6a5a5079-84900183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5971eb6a819f8',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5971eb6a819f8')) {function content_5971eb6a819f8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>权限列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/addlist">【添加权限】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>权限名称</td>
                        <td>父id</td>
                        <td>控制器</td>
                        <td>操作方法</td>
                        <td>全路径</td>
                        <td>等级</td>
                        <td align="center" colspan="2">操作</td>
                    </tr>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <tr id="product1">
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
</td>
            <td><?php echo preg_replace('!^!m',str_repeat('--/',$_smarty_tpl->tpl_vars['v']->value['auth_level']),$_smarty_tpl->tpl_vars['v']->value['auth_name']);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
</td>
            <td><a href="">修改</a></td>
            <td><a href="" onclick="">删除</a></td>
            </tr>
    <?php } ?>
<tr>
        <td colspan="20" style="text-align: center;">
                         [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>