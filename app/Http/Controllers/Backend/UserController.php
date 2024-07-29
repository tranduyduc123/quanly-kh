<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\khachhang;

class UserController extends Controller
{
   

    public function index(){
         $khachhangs=khachhang::all();  //lay tat ca du lieu trong khachhang
         return view('backend.index',compact('khachhangs')); //Dòng lệnh này giúp bạn dễ dàng truyền dữ liệu từ controller đến view và hiển thị dữ liệu trong giao diện ứng dụng Laravel.
       // return 'list user';
  }
    public function AddCustomer(Request $request){
          $Khachhang=new khachhang();
          $Khachhang->name=$request->input('name');
          $Khachhang->email=$request->input('email');
          $Khachhang->phone=$request->input('phone');
          $Khachhang->address=$request->input('address');
          $Khachhang->save();
          return redirect()->back()->with('status','them sinh vien thanh cong');
          
 
}
public function editCustomer($id){
       $khachhangs=khachhang::find($id);
       return view('backend.edit',compact('khachhangs'));
}
public function updateCustomer(Request $request,$id){
    $khachhangs=khachhang::find($id);

    // return view('backend.edit',compact('khachhangs'));
    $khachhangs->name=$request->input('name');
    $khachhangs->email=$request->input('email');
    $khachhangs->phone=$request->input('phone');
    $khachhangs->address=$request->input('address');
    $khachhangs->update();
    return redirect()->back()->with('status','cạp nhat sinh vien thanh cong');
}

public function deleteCustomer($id){
  $khachhangs=khachhang::find($id);
  $khachhangs->delete();
  return redirect()->back()->with('status','xoa kh. thanh cong');}
}