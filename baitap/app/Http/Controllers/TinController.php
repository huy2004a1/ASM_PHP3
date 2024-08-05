<?php

namespace App\Http\Controllers;

use App\Models\Tin; 
use Illuminate\Http\Request;

class TinController extends Controller
{
    //danh sách
    function index() {
        $data = tin::all(); 
        return view('tin.danhSach', ['data' => $data]);
    }
    //thêm
    function them() {
        return view("tin/themTin");
    }

    function them_(){
        $t = new Tin;
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->noiDung = $_POST['noiDung'];
        $t->idLT = $_POST['idLT'];
        $t->xem =0;
        $t->ngayDang = now();
       
        $t->save();
        return redirect('/tin/ds');
    }
    //xóa
    function xoa($id){
        $t = Tin::find($id);
        if( $t==null) return redirect('/thongbao');
        $t->delete();
        return redirect('/tin/ds');
    }
    //capnhat
    function capnhat($id){
        $t = Tin::find($id);
        if( $t==null) return redirect('/thongbao');
        return view("tin/capNhatTin", ['tin'=>$t]);
    }

    function capnhat_($id){
        $t = Tin::find($id);
        $t->tieuDe = $_POST['tieuDe'];
        $t->tomTat = $_POST['tomTat'];
        $t->noiDung = $_POST['noiDung'];
        $t->idLT = $_POST['idLT'];
        $t->xem =0;
        $t->ngayDang = now();
       
        $t->save();
        return redirect('/tin/ds');
    }
}
