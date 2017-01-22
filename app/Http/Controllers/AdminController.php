<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function manage_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
    		$alluser = \App\ms_user::where('status', 'A')->get();
    		$user_type = \App\user_type::where('status', 'A')->get();
    		return view('admin.manage_user.master_user')->with('alluser', $alluser)->with('user_type', $user_type);
    	}else{
    		return redirect('login');
    	}
    }

    public function add_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
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

        	return redirect(url('manage_user/master_user'))->with('status', 'Successfully added user !');
    	}
    }

    public function page_edit_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
    		$alluser = \App\ms_user::where('status', 'A')->where('user_type_id', '2')->get();
    		return view('admin.manage_user.page_edit_user')->with('alluser', $alluser);
    	}else{
    		return redirect('login');
    	}
    }

    public function edit_user($id)
    {
    	session_start();
    	if(!empty(session('type')))
    	{
    		$user = \App\ms_user::find($id);
    		$user_type = \App\user_type::where('status', 'A')->get();
    		return view('admin.manage_user.edit_user')->with('user', $user)->with('user_type', $user_type);
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

        	return redirect(url('manage_user/page_edit_user'))->with('status', 'Successfully updated user !');
    	}
    }

    public function delete_user()
    {
    	session_start();
    	if(!empty(session('type')))
    	{
    		$post = \App\ms_user::find(Input::get('id'));
	        $post->status = 'D';
	        $post->save();

        	return redirect(url('manage_user/page_edit_user'))->with('status', 'Successfully deleted user !');
    	}
    }


    public function manage_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $type_newss = \App\type_news::where('status', 'A')->get();
            return view('admin.manage_type_news.master_type_news')->with('type_newss', $type_newss);
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

            return redirect(url('manage_type_news/master_type_news'))->with('status', 'Successfully added type news !');
        }
    }

    public function edit_type_news($id)
    {
        session_start();
        if(!empty(session('type')))
        {
            $type_news = \App\type_news::find($id);
            $type_newss = \App\type_news::where('status', 'A')->get();
            return view('admin.manage_type_news.edit_type_news')->with('type_news', $type_news)->with('type_newss', $type_newss);
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

            return redirect(url('manage_type_news/master_type_news'))->with('status', 'Successfully updated type news !');
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

            return redirect(url('manage_type_news/master_type_news'))->with('status', 'Successfully deleted type news !');
        }
    }

    public function manage_sub_type_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $type_newss  = \App\type_news::where('status', 'A')->get();
            $sub_type_newss = \App\sub_type::where('status', 'A')->get();
            return view('admin.manage_sub_type_news.master_sub_type_news')->with('sub_type_newss', $sub_type_newss)->with('type_newss',$type_newss);
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

            return redirect(url('manage_sub_type_news/master_sub_type_news'))->with('status', 'Successfully added type news !');
        }
    }

    public function edit_sub_type_news($id)
    {
        session_start();
        if(!empty(session('type')))
        {
            $type_newss  = \App\type_news::where('status', 'A')->get();
            $sub_typee_news = \App\sub_type::find($id);
            $sub_type_newss = \App\sub_type::where('status', 'A')->get();
            return view('admin.manage_sub_type_news.edit_sub_type_news')->with('sub_typee_news', $sub_typee_news)->with('sub_type_newss', $sub_type_newss)->with('type_newss',$type_newss);
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

            return redirect(url('manage_sub_type_news/master_sub_type_news'))->with('status', 'Successfully updated type news !');
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

            return redirect(url('manage_sub_type_news/master_sub_type_news'))->with('status', 'Successfully deleted type news !');
        }
    }

    public function manage_post()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post  = \App\news::where('status', 'A')->get();
            return view('admin.manage_post.all_post')->with('post', $post);
        }else{
            return redirect('login');
        }
    }

    public function post_news()
    {
        session_start();
        if(!empty(session('type')))
        {
            $type  = \App\type_news::where('status', 'A')->get();
            return view('admin.manage_post.post_news')->with('type', $type);
        }else{
            return redirect('login');
        }
    }

    public function my_post()
    {
        session_start();
        if(!empty(session('type')))
        {
            $post  = \App\news::where('status', 'A')->where('modify_user_id', session('iduser'))->get();
            return view('admin.manage_post.my_post')->with('post', $post);
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
            $post->news_desc = Input::get('news_desc');
            $post->slug = Input::get('news_title');
            $post->is_suspend = 0;
            $post->type_news_id = Input::get('type_news_id');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = date('Y-m-d H:i:s');
            $post->last_modify_date = date('Y-m-d H:i:s');
            $post->save();

            return redirect(url('manage_post/my_post'))->with('status', 'Successfully added type news !');
        }
    }

    public function edit_post($id)
    {
        session_start();
        if(!empty(session('type')))
        {
            $type_newss  = \App\type_news::where('status', 'A')->get();
            $sub_typee_news = \App\news::find($id);
            $posts = \App\sub_type::where('status', 'A')->get();
            return view('admin.manage_post.edit_post')->with('sub_typee_news', $sub_typee_news)->with('posts', $posts)->with('type_newss',$type_newss);
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
            $post->name = Input::get('name');
            $post->type_news_id = Input::get('type_news_id');
            $post->status = 'A';
            $post->modify_user_id = session('iduser');
            $post->created_date = date('Y-m-d H:i:s');
            $post->last_modify_date = date('Y-m-d H:i:s');
            $post->save();

            return redirect(url('manage_post/master_post'))->with('status', 'Successfully updated type news !');
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

            return redirect(url('manage_post/master_post'))->with('status', 'Successfully deleted type news !');
        }
    }


}
