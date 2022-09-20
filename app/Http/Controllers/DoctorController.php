<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

use App\Doctor;
use App\CategorySkill;
use App\AboutUs;
use App\GaneraInfo;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;


class DoctorController extends AdminController
{
    public function hompage(){
        $about = AboutUs::get();
        $info = GaneraInfo::get();

        $doctor = Doctor::where('status',1)->get();
        $categorySkill = CategorySkill::where('status',1)->get();
        
        return view('pages/homepage/doctor')->with(compact('about','info','doctor','categorySkill'));
    }
    public function   viewAddDoctor(){
         $checkAuth = (new AdminController)->checkAuthAdmin();
         if(!$checkAuth) return redirect('/admin-login');   
         $categorySkillList = CategorySkill::all();
      return view("admin.doctor.add")->with(compact('categorySkillList'));
    }

    public function saveDoctor(Request $req){
        $path = 'public/uploads/doctor';
        $data = $req->all();

        if(empty($req->id)){
            $doctor = new Doctor();
            $doctor->name = $data['name'];
            $doctor->status = $data['status'];
            $doctor->content = empty($data['content'])?'content':$data['content'];
            $doctor->slug = $data['slug'];
            $doctor->sort_desc = $data['sort_desc'];
            $doctor->category_skill_id = empty($data['category_skill_id'])?0:$data['category_skill_id'];
            
            $getImage = $req->file('imgProduct');
            if ($getImage) {
                $newImage = strtotime("now") . '-' . $getImage->getClientOriginalName();
                $getImage->move($path, $newImage);
                $doctor->image = $newImage;
            }

            $result = $doctor->save();
            if($result){
                Session::put('message','success_add');
             } else {
                Session::put('message','fail_add');
             }
        } else{
            $doctor = Doctor::find($req->id);
            
            if ($req->imgProductupdate) {
                //delete file if image old isset
                $images = scandir($path, SCANDIR_SORT_DESCENDING);
                foreach ($images as $image) {
                    if ($image == $doctor->image) {
                        unlink($path . DIRECTORY_SEPARATOR . $image);
                    }
                }
                //insert new file
                $getImage = $req->file('imgProductupdate');
                $newImage = strtotime("now") . '-' . $getImage->getClientOriginalName();
                $getImage->move($path, $newImage);
                $doctor->image = $newImage;
            }

            $doctor->name = $data['name'];
            $doctor->status = $data['status'];
            $doctor->content = empty($data['content'])?'content':$data['content'];
            $doctor->sort_desc = $data['sort_desc'];
            $doctor->slug = $data['slug'];
            $doctor->category_skill_id =empty($data['category_skill_id'])?0:$data['category_skill_id'];
            $result = $doctor->save();
            if($result){
                Session::put('message','success_edit');
             } else {
                Session::put('message','fail_edit');
             }
        }
        return Redirect::to('/quan-ly-bac-si');
    }

    public function showAllDoctor(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');

        $listDoctor = Doctor::paginate(5);
        $managerDoctor= view('admin.doctor.list')->with('listDoctor',$listDoctor);
        return view('admin')->with('admin.doctor.list',$managerDoctor);
    }

    public function viewUpdateDoctor($id){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');
       
        $doctorById = Doctor::find($id);
        if( empty($doctorById)){
             //delete file if image old isset
                Session::put('message','fail_edit');
                return Redirect::to('/quan-ly-bac-si');
        }
        $categoryList = CategorySkill::all()->where('status',1);
        //$showCategory= view('admin.doctor.add')->with('doctorById',$doctorById);
        return view('admin.doctor.add')->with(compact('categoryList','doctorById'));
         
    }
    
    public function deleteDoctor($id){
    

        $result = Doctor::find($id);
        if($result){
            $path = 'public/uploads/doctor';
            //delete file if image old isset
            $images = scandir($path, SCANDIR_SORT_DESCENDING);
            foreach ($images as $image) {
                if ($image == $result->image) {
                    unlink($path . DIRECTORY_SEPARATOR . $image);
                }
            }
          //delete file if image old isset
            $result->delete();
            Session::put('message','success_delete');
        } else {
            Session::put('message','fail_delete');
        }
       
        return Redirect::to('/quan-ly-bac-si');
    }
}