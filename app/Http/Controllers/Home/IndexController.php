<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Models\Home\Products;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    /**
     * 为指定用户显示详情
     *
     * @param int $id
     * @return Response
     * @author shehuizhen
     */
    public function index()
    {  
        $title = Products::title();
        $con = [];
        foreach ($title as $key => $value) {
            $con[] = $value->classification;
        }
        return view('Home.index');
    }
    public function show(){
        return 1111;
    }
}