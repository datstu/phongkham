<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use App\CategoryProduct;
use Mail;
use URL;
use App\Banner;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Redirect;

use DB;
use App\Http\Requests;
use Session;

class BannerController extends Controller
{
    public function vendorManagement(){
        return;
    }
    
    public function delete($id){

        $result = Banner::find($id);
        if($result){
        $path = 'public/uploads/banner';
          //delete file if image old isset
         $images = scandir($path, SCANDIR_SORT_DESCENDING);
         foreach( $images as $image){
             if($image == $result->category_image){
                 unlink($path.DIRECTORY_SEPARATOR.$image );
             }
         }
            $result->delete();
            Session::put('message','success_delete');
        } else {
            Session::put('message','fail_delete');
        }
       
        //return Redirect::to('/quan-ly-banner');
        return Redirect::to('/home-quan-li-banner');
       
    }


    public function bannerManagement(Request $req)
    {

        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');

        $listBanner = Banner::orderby('id', 'DESC')->paginate(5);
        return view("admin.banner.index")->with('listBanner', $listBanner);
    }

    public function add()
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');
        return view("admin.banner.add");
    }

    public function viewUpdate($id)
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');

        $bannerById = Banner::find($id);
        if (empty($bannerById)) {
            Session::put('message', 'fail_edit');
            return Redirect::to('/quan-ly-banner');
        }
        return view('admin.banner.add')->with('bannerById', $bannerById);
    }

    public function save(Request $req)
    {
        $path = 'public/uploads/banner';
        $data = $req->all();
        if (empty($req->id)) {
            $banner = new Banner();
            $banner->status = $data['status'];
            $getImage = $req->file('img');

            if ($getImage) {
                $newImage = strtotime("now") . '-' . $getImage->getClientOriginalName();
                $getImage->move($path, $newImage);
                $banner->image = $newImage;
            }
            $result = $banner->save();
            if ($result) {
                Session::put('message', 'success_add');
            } else {
                Session::put('message', 'fail_add');
            }
        } else {
            $banner = Banner::find($req->id);
            $banner->status = $data['status'];
            $getImage = $req->file('img');
            if ($getImage) {
                //delete file if image old isset
                $images = scandir($path, SCANDIR_SORT_DESCENDING);
                foreach ($images as $image) {
                    if ($image == $banner->image) {
                        unlink($path . DIRECTORY_SEPARATOR . $image);
                    }
                }
                $newImage = strtotime("now") . '-' . $getImage->getClientOriginalName();
                $getImage->move($path, $newImage);
                $banner->image = $newImage;
            }
                $result = $banner->save();
                if ($result) {
                    Session::put('message', 'success_add');
                } else {
                    Session::put('message', 'fail_add');
                }
        }

       // return Redirect::to('/quan-ly-banner');
        return Redirect::to('/home-quan-li-banner');
    }
}
