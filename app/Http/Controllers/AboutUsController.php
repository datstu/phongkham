<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Visitor;
use App\VisitorsOnline;
use Carbon\Carbon;
use App\GaneraInfo;
use App\Banner;
use App\Vendor;
use App\AboutUs;

session_start();
class AboutUsController extends Controller
{
    public function save(Request $req)
    {
        $data = $req->all();
        $path = 'public/uploads/aboutus';

        $about = AboutUs::find($req->id);
        if ($req->imgProductupdate) {
            //delete file if image old isset
            $images = scandir($path, SCANDIR_SORT_DESCENDING);
            foreach ($images as $image) {
                if ($image == $about->image) {
                    unlink($path . DIRECTORY_SEPARATOR . $image);
                }
            }
            //insert new file
            $getImage = $req->file('imgProductupdate');
            $newImage = strtotime("now") . '-' . $getImage->getClientOriginalName();
            $getImage->move($path, $newImage);
            $about->image = $newImage;
        }

        $about->title = $data['title'];
        $about->desc_sort =empty($data['sortDesc']) ? '': $data['sortDesc'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $about->update_at = date("Y-m-d");
        $about->content = empty($data['content']) ? '' : $data['content'];
        
        
        $result = $about->save();
        if ($result) {
            Session::put('message', 'success_edit');
        } else {
            Session::put('message', 'fail_edit');
        }

        //  return Redirect::to('/quan-ly-bai-viet');

        return Redirect::to('/page-gioi-thieu');
    }
    public function page($id)
    {
        $about = AboutUs::get();
        $content = '';
        $idCustom = $about[0]['id'];
        //$content =  $about[0]['header'];
        switch ($id) {
            case "header":
                $content =  $about[0]['header'];
                break;
            case "row1":
                $content =  $about[0]['row1'];
                break;
            case "row2":
                $content =  $about[0]['row2'];
                break;
            case "row3":
                $content =  $about[0]['row3'];
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
        $route = $id;
        // echo $content; exit
        return view('admin.aboutUs.editView')->with(compact('content', 'idCustom', 'route'));
    }
    public function home()
    {
        if (!$this->checkAuthAdmin())  return redirect('/admin-login');

        $about = AboutUs::get();

        return view('admin.aboutUs.home')->with(compact('about'));
    }

    public function checkAuthAdmin()
    {
        $name = Session::get('admin_name');

        if ($name) return true;
        return false;
    }
}
