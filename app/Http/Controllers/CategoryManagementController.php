<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AdminController;

use App\CategoryProduct;
use App\Product;
use App\Posts;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;


class CategoryManagementController extends AdminController
{
    public function   viewAddCategory(){
         $checkAuth = (new AdminController)->checkAuthAdmin();
         if(!$checkAuth) return redirect('/admin-login');   
      return view("admin.category.add");
    }

    public function saveCategory(Request $req){
        $path = 'public/uploads/category';
        $data = $req->all();

        if(empty($req->id)){
            $category = new CategoryProduct();
            $category->flagship =  isset($data['flagship'])?1:0;
            $category->category_name = $data['nameCategory'];
            $category->category_desc = empty($data['descCategory'])?'Danh mục bi b':$data['descCategory'];
            $category->category_image = empty($data['imgCategory'])?'':$data['imgCategory'];
            $category->category_status = $data['statusCategory'];
            $category->meta_keywords = empty($data['category_keywords'])?'Danh mục bi b':$data['category_keywords'];
            $category->slug = $data['slug'];
            $getImage = $req->file('imgCategory');
           
            if($getImage){
                $newImage = strtotime("now") .'-'.$getImage->getClientOriginalName();
                $getImage->move($path,$newImage);
                $category->category_image = $newImage; 
            
            }

            $getImageIcon = $req->file('icon_svg');
           
            if($getImageIcon){
                $newImage = strtotime("now") .'-'.$getImageIcon->getClientOriginalName();
                $getImageIcon->move($path,$newImage);
                $category->icon_svg = $newImage; 
            
            }
            if(isset($data['show'])) $category->display_menu = json_encode($data['show']);
            $result = $category->save();
            if($result){
                Session::put('message','success_add');
             } else {
                Session::put('message','fail_add');
             }
        } else{
            $category = CategoryProduct::find($req->id);
            
            $category->flagship = isset($data['flagship'])?1:0;
            $category->category_name = $data['nameCategory'];
            $category->category_desc = empty($data['descCategory'])?'':$data['descCategory'];
            $category->meta_keywords = empty($data['category_keywords'])?'Danh mục dự án của Thiên Phú':$data['category_keywords'];
            $category->category_status = $data['statusCategory'];
            $category->slug = $data['slug'];
            $getImage = $req->file('imgCategory');
            if($getImage){
                 //delete file if image old isset
                 $images = scandir($path, SCANDIR_SORT_DESCENDING);
                 foreach( $images as $image){
                     if($image == $category->category_image){
                         unlink($path.DIRECTORY_SEPARATOR.$image );
                     }
                 }
                $newImage = strtotime("now") .'-'.$getImage->getClientOriginalName();
                $getImage->move($path,$newImage);
                $category->category_image = $newImage; 
            } 

            $getImageIcon = $req->file('icon_svg');
            if($getImageIcon){
                 //delete file if image old isset
                 $images = scandir($path, SCANDIR_SORT_DESCENDING);
                 foreach( $images as $image){
                     if($image == $category->icon_svg){
                         unlink($path.DIRECTORY_SEPARATOR.$image );
                     }
                 }
                $newImage = strtotime("now") .'-'.$getImageIcon->getClientOriginalName();
                $getImageIcon->move($path,$newImage);
                $category->icon_svg = $newImage; 
            } 
            if(isset($data['show'])) $category->display_menu = json_encode($data['show']);
            else{
                $category->display_menu = NULL;
            }
            $result = $category->save();
            if($result){
                Session::put('message','success_edit');
             } else {
                Session::put('message','fail_edit');
             }
        }
        return Redirect::to('/quan-ly-danh-muc');
    }

    public function showAllCategoryProduct(){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');

        $listCategory = CategoryProduct::paginate(5);
        $managerCategory= view('admin.category.list')->with('listCategoryProduct',$listCategory);
        return view('admin')->with('admin.category.list',$managerCategory);
    }

    public function viewUpdateCategory($id){
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if(!$checkAuth) return redirect('/admin-login');
       
        $categoryById = CategoryProduct::find($id);
        if( empty($categoryById)){
             //delete file if image old isset
                 $images = scandir($path, SCANDIR_SORT_DESCENDING);
                 foreach( $images as $image){
                     if($image == $category->category_image){
                         unlink($path.DIRECTORY_SEPARATOR.$image );
                     }
                 }
                Session::put('message','fail_edit');
                return Redirect::to('/quan-ly-danh-muc');
        }
        $showCategory= view('admin.category.add')->with('categoryById',$categoryById);
        return view('admin')->with('admin.category.add',$showCategory);
         
    }
    
    public function deleteCategory($id){
        $check = Posts::where('catID',$id)->first();
        if($check){
            Session::put('message','fail_delete');
            return Redirect::to('/quan-ly-danh-muc');
        }

        $result = CategoryProduct::find($id);
        if($result){
        $path = 'public/uploads/category';
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
       
        return Redirect::to('/quan-ly-danh-muc');
    }
}