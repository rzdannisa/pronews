<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \Carbon\Carbon;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
            $dt = Carbon::now();
            $viewtypenews = \App\type_news::where('status', 'A')->get();
            $menu = \App\master_subtype::with('subtypeee')->get();
            $viewnews = \App\news::where('status', 'A')->orderBy('id', 'desc')->limit(5)->get();
            $culture1 = \App\news::where('status', 'A')->where('type_news_id',1)->where('is_suspend',0)->where('is_draft',0)->orderBy('created_date', 'desc')->limit(4)->get();
            $culture2 = \App\news::where('status', 'A')->where('type_news_id',1)->whereBetween('created_date', array(\Carbon::now(), \Carbon::now()->addWeek()))->inRandomOrder()->limit(4)->get();

            $ls1 = \App\news::where('status', 'A')->where('type_news_id',2)->where('is_suspend',0)->where('is_draft',0)->orderBy('created_date', 'desc')->limit(4)->get();
            $ls2 = \App\news::where('status', 'A')->where('type_news_id',2)->whereBetween('created_date', array(\Carbon::now(), \Carbon::now()->addWeek()))->inRandomOrder()->limit(4)->get();
            
            $sport = \App\news::where('status', 'A')->where('type_news_id',3)->orderBy('id', 'desc')->get();
            return view('home')->with('viewnews',$viewnews)->with('viewtypenews',$viewtypenews)->with('menu',$menu)->with('culture1',$culture1)->with('culture2',$culture2)->with('ls1',$ls1)->with('ls2',$ls2)->with('sport',$sport);
    }

    public function contact()
    {
            $menu = \App\master_subtype::with('subtypeee')->orderBy('id', 'desc')->get();
            $cabout = \App\ms_contact::where('id_type', 1)->where('status','A')->orderBy('id','desc')->limit(1)->get();
            $contact = \App\ms_contact::where('id_type', 2)->where('status','A')->orderBy('id','desc')->limit(1)->get();
            $cloc = \App\ms_contact::where('id_type', 3)->where('status','A')->orderBy('id','desc')->limit(1)->get();
            $career = \App\ms_contact::where('id_type', 4)->where('status','A')->orderBy('id','desc')->limit(1)->get();
            return view('contact')->with('menu',$menu)->with('cabout',$cabout)->with('cloc',$cloc)->with('contact',$contact)->with('career',$career);
    }

    public function about()
    {
            $menu = \App\master_subtype::with('subtypeee')->get();
            $about = \App\tr_about::where('status', 'A')->get();
            return view('about')->with('menu',$menu)->with('about',$about);
    }

    public function detail_news()
    {
            
            return view('detail_news');
    }


}
