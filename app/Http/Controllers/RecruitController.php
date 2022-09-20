<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Posts;
use App\CategoryProduct;
use App\Http\Controllers\AdminController;
use App\BrandProduct;
use App\MultiImage;


use App\Recruit;
use App\GaneraInfo;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class RecruitController extends Controller
{

    public function addRecruit()
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');
        return view("admin.recruit.manage.add");
    }

    public function listRecruit(){
       
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');
       
        $list = Recruit::orderby('id', 'DESC')->paginate(5);
        //$list = Posts::paginate(5);
        //return;
        return view("admin.recruit.manage.index")->with('list', $list);
      
    }

    public function postsManagement()
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');

        $posts = Posts::orderby('post_id', 'DESC')->paginate(5);

        return view('admin.post.list')->with(compact('posts'));
    }

    public function saveCruit(Request $req)
    {
        $data = $req->all();
       // $path = 'public/uploads/post';

        if (empty($req->id)) {
            $post = new Recruit();
            $post->position = $data['position'];
            $post->qty = $data['qty'];
            $post->address = $data['address'];
            $post->date_ex = $data['date_ex'];
            $post->status = $data['status'];
            $post->active = isset($data['flagship'])?$data['flagship']:0;
            $post->post_id = isset($data['post_id'])?$data['post_id']:0;

            $result = $post->save();

            if ($result) {
                Session::put('message', 'success_add');
            } else {
                Session::put('message', 'fail_add');
            }
        } else {
            $post = Recruit::find($req->id);

            $post->position = $data['position'];
            $post->qty = $data['qty'];
            $post->address = $data['address'];
            $post->date_ex = $data['date_ex'];
            $post->status = $data['status'];
            $post->active = isset($data['flagship'])?$data['flagship']:0;
            $post->post_id = isset($data['post_id'])?$data['post_id']:0;

            $result = $post->save();
            if ($result) {
                Session::put('message', 'success_edit');
            } else {
                Session::put('message', 'fail_edit');
            }
        }
        return Redirect::to('/quan-ly-tuyen-dung');
    }

    public function updateRecruitById($id)
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');

        $recruitById = Recruit::find($id);
       
        return view('admin.recruit.manage.add')->with('recruitById', $recruitById);
    }
    public function delRecruit($id)
    {
        $checkAuth = (new AdminController)->checkAuthAdmin();
        if (!$checkAuth) return redirect('/admin-login');
        $result = Recruit::find($id);
        if ($result) {
            $result->delete();
            Session::put('message', 'success_delete');
        } else {
            Session::put('message', 'fail_delete');
        }

        return Redirect::to('/quan-ly-tuyen-dung');
    }

    public function homePost(Request $req)
    {
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Cùng Lea cập nhật tin mới mỗi ngày";
        $url_cannonical = $req->url();
        $listPost = Posts::where('display', '<>', NULL)->get();
        // echo '<pre>';

        $homePost = [];
        foreach ($listPost as $post) {
            $show = json_decode($post['display']);

            if (in_array(3, $show)) {
                $homePost[] = $post;
            }
        }
        $info = GaneraInfo::get();
        return view("pages.listServiceMassage")->with(compact('info', 'meta_desc', 'meta_keywords', 'meta_title', 'url_cannonical', 'homePost'));
    }

    public function detailPost(Request $req, $hi, $ha)
    {
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Cùng Lea cập nhật tin mới mỗi ngày";
        $url_cannonical = $req->url();
        $post = Posts::find($hi);
        $recentPost = Posts::orderby('post_id', 'DESC')->limit(5)->get();

        // $categoryPost = CategoryProduct::rightJoin('tbl_posts','tbl_posts.catID','=','tbl_category_product.category_id')
        // ->groupBy('tbl_category_product.category_id') ->get();
        $categoryPost = DB::select("SELECT tbl_posts.catID FROM tbl_category_product  RIGHT JOIN tbl_posts  
        ON tbl_category_product.category_id=tbl_posts.catID GROUP BY tbl_posts.catID");
        //dd( $categoryPost);
        $listCate = [];
        foreach ($categoryPost as $cate) {
            $listCate[] = CategoryProduct::find($cate->catID);
        }
        $info = GaneraInfo::get();
        if ($post) {
            return view("pages.detailServiceMassage")->with(compact('info', 'listCate', 'meta_desc', 'meta_keywords', 'meta_title', 'url_cannonical', 'recentPost', 'post'));
        } else {
            return Redirect('tin-tuc');
        }
    }
    public function listCategoryById(Request $req, $hi, $ha)
    {
        $homePost = Posts::join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_posts.catID')
            ->where('catID', $hi)->where('catID', $hi)->where('tbl_posts.status', 1)->get();

        // $homePost = [];
        // foreach($categoryPost as $post){
        //     $show = json_decode($post['display']);

        //     if ( is_array($show) && in_array(1, $show) || in_array(3, $show) ) {
        //         $homePost[] = $post;
        //     }
        // }
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Cùng Lea cập nhật tin mới mỗi ngày";
        $url_cannonical = $req->url();

        $info = GaneraInfo::get();
        return view("pages.listServiceMassage")->with(compact('info', 'meta_desc', 'meta_keywords', 'meta_title', 'url_cannonical', 'homePost'));
    }

    public function searchPost(Request $req)
    {
        $meta_desc = "Lea Beauty - Spa Điều Trị Da Uy Tín Phú Nhuận";
        $meta_keywords = "Trị mụn tắm trắng triệt lông";
        $meta_title = "Cùng Lea cập nhật tin mới mỗi ngày";
        $url_cannonical = $req->url();

        $posts = Posts::where('post_content', 'LIKE', '%' . $req->search . '%')
            ->orWhere('post_desc', 'LIKE', '%' . $req->search . '%')->get();

        $homePost = [];
        foreach ($posts as $post) {
            $show = json_decode($post['display']);

            if (in_array(1, $show) || in_array(3, $show)) {
                $homePost[] = $post;
            }
        }
        return view("pages.listServiceMassage")->with(compact('meta_desc', 'meta_keywords', 'meta_title', 'url_cannonical', 'homePost'));
    }
}
