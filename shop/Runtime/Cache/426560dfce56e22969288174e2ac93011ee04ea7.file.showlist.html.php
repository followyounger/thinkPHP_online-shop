<?php /* Smarty version Smarty-3.1.6, created on 2017-07-21 20:15:29
         compiled from "D:/phpStudy/WWW/tp3/shop/Admin/View\Role\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:990059714e88253b98-71302180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '426560dfce56e22969288174e2ac93011ee04ea7' => 
    array (
      0 => 'D:/phpStudy/WWW/tp3/shop/Admin/View\\Role\\showlist.html',
      1 => 1500639299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '990059714e88253b98-71302180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59714e8852a54',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59714e8852a54')) {function content_59714e8852a54($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>角色列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/addlist">【添加角色】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>角色名称</td>
                        <td>权限ids</td>
                        <td>权限控制器/操作方法</td>
                        <td align="center" colspan="3">操作</td>
                    </tr>
    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <tr id="product1">
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_auth_ids'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_auth_ac'];?>
</td>
            <td><a href="<?php echo @__CONTROLLER__;?>
/distribute/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
">分配权限</a></td>
            <td><a href="">修改</a></td>
            <td><a href="" onclick="">删除</a></td>
            </tr>
    <?php } ?>
<tr>
        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>