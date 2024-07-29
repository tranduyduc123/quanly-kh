<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders;

class orderController extends Controller
{
    public function index(){
        $order=orders::all();  //lay tat ca du lieu trong khachhang
        return view('backend.index',compact('order')); //Dòng lệnh này giúp bạn dễ dàng truyền dữ liệu từ controller đến view và hiển thị dữ liệu trong giao diện ứng dụng Laravel.
      // return 'list user';
 }
}
