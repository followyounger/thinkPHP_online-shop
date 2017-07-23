<?php

/**
*
*/
namespace Model;
use Think\Model;
class RoleModel extends Model
{
    //分配权限，手机信息、二期制作、存储信息
    function saveAuth($role_id,$authids){
        $authid_str = implode(',',$authids);

        $authinfo = D('Auth')->select($authid_str);
        $s="";
        foreach ($authinfo as $k => $v) {
            # code...
            if (!empty($v['auth_c'])&&!empty($v['auth_a'])) {
                # code...
                $s.=$v['auth_c'].'-'.$v['auth_a'].',';
            }
        }
        $s=rtrim($s,',');
        $sql = "update sw_role set role_auth_ids='$authid_str',role_auth_ac='$s' where role_id='$role_id'";
        return $this->execute($sql);
    }

}

 ?>