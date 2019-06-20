<?php

namespace app\admin\controller;

use think\Db;
use \think\View;
use think\Controller;

class User extends Controller {

    //首页
    public function index() {

        $list = Db::table('user_position')
                ->select();
        $this->assign("list", $list);
        return $this->fetch('user_position_list');
    }

    //列表
    public function user_position_list() {
        $list = Db::table('user_position')
                ->select();
        $this->assign("list", $list);
        return $this->fetch();
    }

    
    //恢复
    function restore($user_id) {
        $data = array();
        $data['is_delete'] = 0;
        $data['delete_time'] =  Db::raw('now()');
        Db::table('user_position')->where('id', $user_id)->update($data);
        $this->redirect('/admin/user/user_position_list');
    }

   

}
