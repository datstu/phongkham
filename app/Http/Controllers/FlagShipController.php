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
use App\Vendor;
use App\FlagShip;

class FlagShipController extends Controller
{
    public function flagShipManagement(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');

        $listVendor = FlagShip::orderby('id', 'DESC')->paginate(5);
        return view("admin.flagship.index")->with('listVendor', $listVendor);
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
       
        return Redirect::to('/quan-ly-banner');
    }

    public function add()
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');
        return view("admin.vendor.add");
    }

    public function viewUpdate($id)
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');

        $vendorById = Vendor::find($id);
        if (empty($vendorById)) {
            Session::put('message', 'fail_edit');
            return Redirect::to('/quan-ly-chu-dau-tu');
        }
        return view('admin.vendor.add')->with('vendorById', $vendorById);
    }

    public function save(Request $req)
    {
        $path = 'public/uploads/vendor';
        $data = $req->all();
        if (empty($req->id)) {
            $vendor = new Vendor();
            $vendor->name = $data['name'];
            $vendor->description = $data['description'];
            $vendor->slug = $data['slug'];
           
            $vendor->status = $data['status'];
            $getImage = $req->file('img');

            if ($getImage) {
                $newImage = strtotime("now") . '-' . $getImage->getClientOriginalName();
                $getImage->move($path, $newImage);
                $vendor->image = $newImage;
            }
            $result = $vendor->save();
            if ($result) {
                Session::put('message', 'success_add');
            } else {
                Session::put('message', 'fail_add');
            }
        } else {
            $vendor = Vendor::find($req->id);
            $vendor->name = $data['name'];
            $vendor->description = $data['description'];
            $vendor->slug = $data['slug'];
            $vendor->status = $data['status'];
            $getImage = $req->file('img');
            if ($getImage) {
                //delete file if image old isset
                $images = scandir($path, SCANDIR_SORT_DESCENDING);
                foreach ($images as $image) {
                    if ($image == $vendor->image) {
                        unlink($path . DIRECTORY_SEPARATOR . $image);
                    }
                }
                $newImage = strtotime("now") . '-' . $getImage->getClientOriginalName();
                $getImage->move($path, $newImage);
                $vendor->image = $newImage;
            }
                $result = $vendor->save();
                if ($result) {
                    Session::put('message', 'success_add');
                } else {
                    Session::put('message', 'fail_add');
                }
        }

        return Redirect::to('/quan-ly-chu-dau-tu');
    }
}
