<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Gallery;
use Illuminate\Support\Facades\Redirect;
session_start();

class GalleryController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function  add_gallery($product_id) {
        $pro_id = $product_id;
        return view('admin.gallery.add_gallery')->with(compact('pro_id'));
    }
    public function select_gallery(request $request){
    $product_id =  $request -> pro_id;
    $gallery = Gallery::where('product_id',$product_id)->get();
    $galerry_count = $gallery->count();
    $output = '<table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên hình ảnh</th>
                                    <th>Hình ảnh</th>
                                    <th>Quản lý</th>
                                </tr>
                                </thead>';

    if($galerry_count>0){
        $i = 0;
        foreach ($gallery as $key =>$gal){
            $i++;
           $output = '
                                <tr>
                                    <td>'.$i.'</td>
                                    <td>'.$gal->gallery_name.'</td>
                                    <td> <img src="'.url('public/upload/gallery'.$gal->gallery_image).'" class="img-thumbnail" width="120px" height="120"></td>
                                    <td>
                                        <button data-gal_id="'.$gal->gallery_id.'" class="btn btn-xs btndanger delete-gallery">Xóa</button>
                                    </td>
                                </tr>
                                ';
            }
        }else {
        $output = '
                                <tr>
                                    <td colspan="4">Sản phẩm này chưa có thư viện ảnh</td>
                                </tr>
            ';
        }
        echo $output;
    }

}
