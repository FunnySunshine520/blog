<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function detailAction(Request $request)
    {
        $id = $request->get('id', 1);

        $data = [
            'id' => $id,
            'name' => '张大傻逼',
            'full_name' => '张超是个大傻逼',
            'xingbie' => '男',
        ];
//        echo 123;
        return ['code' => -1, 'msg' => 'ID必传', 'data' => $data];
    }

    public function index(Request $request)
    {
        $id = $request->post('key', 1);
        
        return $id;
    }
}
