<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

use App\CategorySkill;
use App\Doctor;
use App\Posts;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;


class CategorySkillManagementController extends AdminController
{
    public function   viewAddCategorySkill(){
         $checkAuth = (new AdminController)->checkAuthAdmin();
         if(!$checkAuth) return redirect('/admin-login');   
      return view("admin.categorySkill.add");
    }

    public function saveCategorySkill(Request $req){
        // $path = 'public/uploads/category-skill';
        $data = $req->all();

        if(empty($req->id)){
            $category = new CategorySkill();
            $category->name = $data['nameCategory'];
            $category->status = $data['statusCategory'];
            $category->category_keywords = empty($data['category_keywords'])?'Danh mục y khoa':$data['category_keywords'];
            $category->slug = $data['slug'];
           
            $result = $category->save();
            if($result){
                Session::put('message','success_add');
             } else {
                Session::put('message','fail_add');
             }
        } else{
            $category = CategorySkill::find($req->id);
            
            $category->name = $data['nameCategory'];
           
            $category->category_keywords = empty($data['category_keywords'])?'Danh mục y khoa':$data['category_keywords'];
            $category->status = $data['statusCategory'];
            $category->slug = $data['slug'];
           
            $result = $category->save();
            if($result){
                Session::put('message','success_edit');
             } else {
                Session::put('message','fail_edit');
             }
        }
        return Redirect::to('/quan-ly-danh-muc-y-khoa');
    }

    public function showAllCategorySkill(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');

        $listCategory = CategorySkill::paginate(5);
        $managerCategory= view('admin.categorySkill.list')->with('listCategorySkill',$listCategory);
        return view('admin')->with('admin.categorySkill.list',$managerCategory);
    }

    public function viewUpdateCategorySkill($id){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');
       
        $categoryById = CategorySkill::find($id);
        if( empty($categoryById)){
             //delete file if image old isset
                Session::put('message','fail_edit');
                return Redirect::to('/quan-ly-danh-muc-y-khoa');
        }
        $showCategory= view('admin.categorySkill.add')->with('categoryById',$categoryById);
        return view('admin')->with('admin.categorySkill.add',$showCategory);
         
    }
    
    public function deleteCategorySkill($id){
        $check = Doctor::where('category_skill_id',$id)->first();
        if($check){
            Session::put('message','fail_delete');
            return Redirect::to('/quan-ly-danh-muc-y-khoa');
        }

        $result = CategorySkill::find($id);
        if($result){
       
          //delete file if image old isset
            $result->delete();
            Session::put('message','success_delete');
        } else {
            Session::put('message','fail_delete');
        }
       
        return Redirect::to('/quan-ly-danh-muc-y-khoa');
    }
}