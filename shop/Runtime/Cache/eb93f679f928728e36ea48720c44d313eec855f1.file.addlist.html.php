<?php /* Smarty version Smarty-3.1.6, created on 2017-07-23 10:23:05
         compiled from "D:/phpStudy/WWW/tp3/shop/Admin/View\Auth\addlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1170359730a17ae25b4-94826155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb93f679f928728e36ea48720c44d313eec855f1' => 
    array (
      0 => 'D:/phpStudy/WWW/tp3/shop/Admin/View\\Auth\\addlist.html',
      1 => 1500776580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1170359730a17ae25b4-94826155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59730a17da956',
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59730a17da956')) {function content_59730a17da956($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：权限管理-》添加权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>权限名称</td>
                    <td><input type="text" name="auth_name" /></td>
                </tr>

                <tr>
                    <td>上级</td>
                    <td>
                        <select name='auth_pid'>
                            <option value="0">--请选择--</option>
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>

                </tr>
                <tr>
                    <td>控制器</td>
                    <td><input type="text" name="auth_c" /></td>
                </tr>
                 <tr>
                    <td>操作方法</td>
                    <td><input type="text" name="auth_a" /></td>
                </tr>

                <tr>
                    <td colspan="2" align="left">
                        <input type="submit" value="添加" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>