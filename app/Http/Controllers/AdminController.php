<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{

    public function welcome_admin()
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            return view('admin.admin')->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function manage_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
            $auth = \App\ms_user::where('id',session('iduser'))->get();
    		$alluser = \App\ms_user::where('status', 'A')->get();
    		$user_type = \App\user_type::where('status', 'A')->get();
    		return view('admin.manage_user.master_user')->with('alluser', $alluser)->with('user_type', $user_type)->with('auth',$auth);
    	}else{
    		return redirect('login');
    	}
    }

    public function add_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
            $name = $_POST['name'];
            $email = $_POST['email'];

            $name = \App\ms_user::where('name',$name)->count();
            if(!empty($name)){
                return redirect(url('manage_user/master_user'))->with('error', 'Name can not be same !');
            }
            else{
            $email = \App\ms_user::where('email',$email)->count();
            if(!empty($email)){
                return redirect(url('manage_user/master_user'))->with('error', 'Email can not be same !');
            }
            else{
    		$post = new \App\ms_user;
    		$post->email = Input::get("email");
	        $post->name = Input::get('name');
	        $post->user_type_id = Input::get("user_type_id");
	        $post->password = Input::get('password');
	        $post->status = 'A';
	        $post->modify_user_id = session('iduser');
	        $post->created_date = date('Y-m-d H:i:s');
	        $post->last_modify_date = date('Y-m-d H:i:s');
	        $post->save();

        	return redirect(url('manage_user/master_user'))->with('status', 'Successfully add user !');
            }
    	}
        }
    }
    public function page_edit_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
            $auth = \App\ms_user::where('id',session('iduser'))->get();
    		$alluser = \App\ms_user::where('status', 'A')->where('user_type_id', '2')->get();
    		return view('admin.manage_user.page_edit_user')->with('alluser', $alluser)->with('auth',$auth);
    	}else{
    		return redirect('login');
    	}
    }

    public function edit_user($id)
    {
    	session_start();
    	if(!empty(session('type')))
    	{
            $auth = \App\ms_user::where('id',session('iduser'))->get();
    		$user = \App\ms_user::find($id);
    		$user_type = \App\user_type::where('status', 'A')->get();
    		return view('admin.manage_user.edit_user')->with('user', $user)->with('user_type', $user_type)->with('auth',$auth);
    	}else{
    		return redirect('login');
    	}
    }

    public function update_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
    		$post = \App\ms_user::find(Input::get('id'));
    		$post->email = Input::get("email");
	        $post->name = Input::get('name');
	        $post->user_type_id = Input::get("user_type_id");
	        $post->password = Input::get('password');
	        $post->status = 'A';
	        $post->modify_user_id = session('iduser');
	        $post->created_date = date('Y-m-d H:i:s');
	        $post->last_modify_date = date('Y-m-d H:i:s');
	        $post->save();

        	return redirect(url('manage_user/page_edit_user'))->with('status', 'Successfully update user !');
    	}
    }

    public function delete_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
            $auth = \App\ms_user::where('id',session('iduser'))->get();
    		$post = \App\ms_user::find(Input::get('id'));
	        $post->status = 'D';
	        $post->save();

        	return redirect(url('manage_user/page_edit_user'))->with('status', 'Successfully delete user !');
    	}
    }


    public function manage_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $type_newss = \App\type_news::where('status', 'A')->get();
            return view('admin.manage_type_news.master_type_news')->with('type_newss', $type_newss)->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function add_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = new \App\type_news;
            $post->name = Input::get('name');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = date('Y-m-d H:i:s');
            $post->last_modify_date = date('Y-m-d H:i:s');
            $post->save();

            return redirect(url('manage_type_news/master_type_news'))->with('status', 'Successfully add type news !');
        }
    }

    public function edit_type_news($id)
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $type_news = \App\type_news::find($id);
            $type_newss = \App\type_news::where('status', 'A')->get();
            return view('admin.manage_type_news.edit_type_news')->with('type_news', $type_news)->with('type_newss', $type_newss)->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function update_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = \App\type_news::find(Input::get('id'));
            $post->name = Input::get('name');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = date('Y-m-d H:i:s');
            $post->last_modify_date = date('Y-m-d H:i:s');
            $post->save();

            return redirect(url('manage_type_news/master_type_news'))->with('status', 'Successfully update type news !');
        }
    }

    public function delete_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = \App\type_news::find(Input::get('id'));
            $post->status = 'D';
            $post->save();

            return redirect(url('manage_type_news/master_type_news'))->with('status', 'Successfully delete type news !');
        }
    }

    public function manage_sub_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $type_newss  = \App\type_news::where('status', 'A')->get();
            $sub_type_newss = \App\sub_type::where('status', 'A')->get();
            return view('admin.manage_sub_type_news.master_sub_type_news')->with('sub_type_newss', $sub_type_newss)->with('type_newss',$type_newss)->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function add_sub_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = new \App\sub_type;
            $post->name = Input::get('name');
            $post->type_news_id = Input::get('type_news_id');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = date('Y-m-d H:i:s');
            $post->last_modify_date = date('Y-m-d H:i:s');
            $post->save();

            return redirect(url('manage_sub_type_news/master_sub_type_news'))->with('status', 'Successfully add type news !');
        }
    }

    public function edit_sub_type_news($id)
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $type_newss  = \App\type_news::where('status', 'A')->get();
            $sub_typee_news = \App\sub_type::find($id);
            $sub_type_newss = \App\sub_type::where('status', 'A')->get();
            return view('admin.manage_sub_type_news.edit_sub_type_news')->with('sub_typee_news', $sub_typee_news)->with('sub_type_newss', $sub_type_newss)->with('type_newss',$type_newss)->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function update_sub_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = \App\sub_type::find(Input::get('id'));
            $post->name = Input::get('name');
            $post->type_news_id = Input::get('type_news_id');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = date('Y-m-d H:i:s');
            $post->last_modify_date = date('Y-m-d H:i:s');
            $post->save();

            return redirect(url('manage_sub_type_news/master_sub_type_news'))->with('status', 'Successfully update type news !');
        }
    }

    public function delete_sub_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = \App\sub_type::find(Input::get('id'));
            $post->status = 'D';
            $post->save();

            return redirect(url('manage_sub_type_news/master_sub_type_news'))->with('status', 'Successfully delete type news !');
        }
    }

    public function manage_post()
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $post  = \App\news::where('status', 'A')->get();
            return view('admin.manage_post.all_post')->with('post', $post)->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function post_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $type  = \App\type_news::where('status', 'A')->get();
            $subtype  = \App\sub_type::where('status', 'A')->get();
            return view('admin.manage_post.post_news')->with('type', $type)->with('auth',$auth)->with('subtype',$subtype);
        }else{
            return redirect('login');
        }
    }

    public function my_post()
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $post  = \App\news::where('status', 'A')->where('modify_user_id', session('iduser'))->get();
            return view('admin.manage_post.my_post')->with('post', $post)->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function add_post()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = new \App\news;
            $post->news_title = Input::get('news_title');
            $post->content = Input::get('content');
            $post->news_desc = Input::get('news_desc');
            $post->slug = Input::get('news_title');
            $post->is_suspend = 0;
            $post->type_news_id = Input::get('type_news_id');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = Input::get('created_date');
            $post->last_modify_date = date('Y-m-d H:i:s');
            
            $button = Input::get('choose');
            if($button == "draft"){
                $post->is_draft = 1;
            }
            else if($button == "publish"){
                $post->is_draft = 0;
            }

             if(Input::hasFile('headline_news')){
                $headline_news = date("YmdHis")
                .uniqid()
                ."."
                .Input::file('headline_news')->getClientOriginalExtension();
            
                Input::file('headline_news')->move(public_path()."/headline_news",$headline_news);
                $post->headline_news = $headline_news;
                }
            $post->save();

            return redirect(url('manage_post/my_post'))->with('status', 'Successfully add post !');
        }
    }

    public function edit_post($id)
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $type  = \App\type_news::where('status', 'A')->get();
            $subtype  = \App\sub_type::where('status', 'A')->get();
            $posts = \App\news::find($id);
            return view('admin.manage_post.edit_post')->with('type', $type)->with('posts', $posts)->with('status', 'Successfully update news !')->with('auth',$auth)->with('subtype',$subtype);
        }else{
            return redirect('login');
        }
    }

    public function update_post()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = \App\news::find(Input::get('id'));
            $post->news_title = Input::get('news_title');
            $post->content = Input::get('content');
            $post->news_desc = Input::get('news_desc');
            $post->slug = Input::get('news_title');
            $post->type_news_id = Input::get('type_news_id');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = Input::get('created_date');
            $post->last_modify_date = date('Y-m-d H:i:s');

            $button = Input::get('choose');
            if($button == "draft"){
                $post->is_draft = 1;
                $post->is_suspend = 0;
            }
            else if($button == "publish"){
                $post->is_draft = 0;
                $post->is_suspend = 0;
            }
            else if($button == "suspend"){
                $post->is_draft = 0;
                $post->is_suspend = 1;
            }

             if(Input::hasFile('headline_news')){
                $headline_news = date("YmdHis")
                .uniqid()
                ."."
                .Input::file('headline_news')->getClientOriginalExtension();
            
                Input::file('headline_news')->move(public_path()."/headline_news",$headline_news);
                $post->headline_news = $headline_news;
                }
            $post->save();

            return redirect(url('manage_post/my_post'))->with('status', 'Successfully update post !');
        }
    }

    public function delete_post()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = \App\news::find(Input::get('id'));
            $post->status = 'D';
            $post->save();

            return redirect(url('manage_post/my_post'))->with('status', 'Successfully delete post !');
        }
    }

    public function edit_profile()
    {
        session_start();
        if(!empty(session('type')))
        {
            $auth = \App\ms_user::where('id',session('iduser'))->get();
            $users  = \App\ms_user::where('id', session('iduser'))->first();
            return view('admin.manage_setting.edit_profile')->with('users', $users)->with('auth',$auth);
        }else{
            return redirect('login');
        }
    }

    public function update_profile()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post = \App\ms_user::find(Input::get('id'));
            $post->name = Input::get('name');
            $post->email = Input::get('email');
            $post->password = Input::get('password');
            $post->modify_user_id = session('iduser');
            $post->last_modify_date = date('Y-m-d H:i:s');

            $size = $_FILES['photo']['size'];
            if(($size<=2048000)){
                if(Input::hasFile('photo')){
                $photo = date("YmdHis")
                .uniqid()
                ."."
                .Input::file('photo')->getClientOriginalExtension();
            
                Input::file('photo')->move(public_path()."/photo_profile",$photo);
                $post->photo = $photo;
                }
                $post->save();

            return redirect(url('manage_setting/edit_profile'))->with('status', 'Successfully update profile !');
        }else {
        return redirect(url('manage_setting/edit_profile'))->with('error', 'Failed to update profile! Do not upload images that are larger than 2 mb!');
            }
        }
    }


}