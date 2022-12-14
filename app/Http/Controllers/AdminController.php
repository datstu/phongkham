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
use App\BrandProduct;
session_start();
class AdminController extends Controller
{
    
    public function brandHome(){
        if( !$this->checkAuthAdmin())  return redirect('/admin-login');
        $listBrandProduct = BrandProduct::paginate(5);
        return view('admin.general.homeBrand')->with(compact('listBrandProduct','listBrandProduct'));
    }

    public function vendorHome(){
        if( !$this->checkAuthAdmin())  return redirect('/admin-login');
        $listVendor = Vendor::orderby('id', 'DESC')->paginate(5);
        return view('admin.general.vendorHome')->with(compact('listVendor','listVendor'));
    }
    public function bannerHome(){
        if( !$this->checkAuthAdmin())  return redirect('/admin-login');
        $listBanner = Banner::where('status',1)->orderby('id','DESC')
        ->get();
        $listBanner = Banner::orderby('id', 'DESC')->paginate(5);
        return view('admin.general.homeBanner')->with(compact('listBanner','listBanner'));
    }
    public function saveGaneralInfo(Request $req){
        $info = GaneraInfo::find(3);
            
        $data = $req->all();
        if(isset($info->id)){
            $info->phone = $data['phone'];
            $info->address = $data['address'];
            $info->link_fb = $data['linkFB'];
            $info->page_id_fb = $data['pageId'];
            $info->link_youtube = $data['linkYtb'];
            $info->link_instagram = $data['linkInsta'];
            $info->email = $data['email'];
            $result = $info->save();
        } else{
            $info = new GaneraInfo();
            $info->phone = $data['phone'];
            $info->address = $data['address'];
            $info->link_fb = $data['linkFB'];
            $info->page_id_fb = $data['pageId'];
            $info->link_youtube = $data['linkYtb'];
            $info->link_instagram = $data['linkInsta'];
            $info->email = $data['email'];
            $info->type = 1;
       
            $result = $info->save();
        }
       
        
        if($result){
            Session::put('message','success_add');
         } else {
            Session::put('message','fail_add');
         }
        return Redirect::to('/cai-dat');
    }
    public function setting(){
        if( !$this->checkAuthAdmin())  return redirect('/admin-login');

        $info = GaneraInfo::get();
        //      echo "<pre>";
        // print_r( $info);
        // echo "</pre>";
        // exit;
        return view('admin.general.index')->with(compact('info','info'));
    }
    public function categoryList(){
        return;
    }
    public function checkAuthAdmin(){
        $name = Session::get('admin_name');
        
        if($name) return true;
             return false;
    }
    public function index(Request $req){
        if( !$this->checkAuthAdmin())  return redirect('/admin-login');
        $countProduct = 0;
       
        $user_ip_address = $req->ip();
       
        /** current online */
        $visitorCurrent = Visitor::where('ip_address',$user_ip_address)->get();
        $visitorCount =  $visitorCurrent->count();
        $time = time();
        $time_check = $time-600; 
        $visitorOnline =  VisitorsOnline::where('time','<', $time_check)->delete();
        $visitorOnline =  VisitorsOnline::count();
        
        $earlyLastMonth = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $endOfLastMonth = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        $earlyThisMonth = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $oneYears = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();
        $now =  Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        /** total lastmonth */
        $visitorOfLastmonth = Visitor::whereBetween('date_visit',[$earlyLastMonth,$endOfLastMonth])->get();
        $visitorLastmonthCount = $visitorOfLastmonth->count();

        /** total this month */
        $visitorOfThismonth = Visitor::whereBetween('date_visit',[$earlyThisMonth,$now])->get();
        $visitorThismonthCount = $visitorOfThismonth->count();

        /** total in one years  */
        $visitorOfOneYears = Visitor::whereBetween('date_visit',[$oneYears,$now])->get();
        $visitorOneYearsCount = $visitorOfOneYears->count();

        /** total visitor */
        $visitors = Visitor::all();
        $visitorTotal =  $visitors->count();
    
        if( $visitorCount <1 ){
            $visitor = new Visitor();
            $visitor->ip_address = $user_ip_address;
            $visitor->date_visit = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $visitor->save();
        }
        return view("admin.Dashboard")->with(compact('visitorOnline','countProduct','visitorLastmonthCount','visitorThismonthCount','visitorOneYearsCount','visitorTotal'));
    }
    public function login(){
        return view("admin.login");
    }
    public function dashboard(Request $request){
         $admin_email = $request->admin_email;
         $admin_password = md5($request->admin_password);
         $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
         if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return redirect('/admin');
         } else {
            Session::put('message', 'fail');
            return redirect('/admin-login');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('amin_id', null);
        return Redirect::to('/admin-login');

    }
    
}
