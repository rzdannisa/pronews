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
            $viewtypenews = \App\type_news::where('status', 'A')->get();
            $menu = \App\master_subtype::with('subtypeee')->get();
            $viewnews = \App\news::where('status', 'A')->where('is_suspend',0)->where('is_draft',0)->orderBy('created_date', 'desc')->limit(5)->get();

            $culture1 = \App\news::where('status', 'A')->where('type_news_id',1)->where('is_suspend',0)->where('is_draft',0)->orderBy('created_date', 'desc')->limit(4)->get();
            $culture2 = \App\news::where('status', 'A')->where('is_suspend',0)->where('is_draft',0)->where('type_news_id',1)->where('created_date', '>=', \DB::raw('DATE_SUB(NOW(), INTERVAL 7 DAY)'))->inRandomOrder()->limit(4)->get();

            $ls1 = \App\news::where('status', 'A')->where('type_news_id',2)->where('is_suspend',0)->where('is_draft',0)->orderBy('created_date', 'desc')->limit(4)->get();
            $ls2 = \App\news::where('status', 'A')->where('type_news_id',2)->where('is_suspend',0)->where('is_draft',0)->where('created_date', '>=', \DB::raw('DATE_SUB(NOW(), INTERVAL 7 DAY)'))->inRandomOrder()->limit(4)->get();

            $sp1 = \App\news::where('status', 'A')->where('type_news_id',3)->where('is_suspend',0)->where('is_draft',0)->orderBy('created_date', 'desc')->limit(2)->get();
            $sp2 = \App\news::where('status', 'A')->where('is_suspend',0)->where('is_draft',0)->where('type_news_id',3)->where('created_date', '>=', \DB::raw('DATE_SUB(NOW(), INTERVAL 2 DAY)'))->inRandomOrder()->limit(2)->get();
            $sp3 = \App\news::where('status', 'A')->where('is_suspend',0)->where('is_draft',0)->where('type_news_id',3)->where('created_date', '>=', \DB::raw('DATE_SUB(NOW(), INTERVAL 7 DAY)'))->inRandomOrder()->limit(2)->get();
            $sp4 = \App\news::where('status', 'A')->where('is_suspend',0)->where('is_draft',0)->where('type_news_id',3)->where('created_date', '>=', \DB::raw('DATE_SUB(NOW(), INTERVAL 10 DAY)'))->inRandomOrder()->limit(2)->get();

            $date = strtotime('updated_at');
            $tgl = date("d-m-Y", $date);

            $bigads1 = \App\tr_adv::where('status', 'A')->where('is_suspend',0)->where('is_hold',0)->where('lt_id_adv',1)->whereDate('created_at', '>', date('Y-m-d'))->inRandomOrder()->limit(2)->get();

            $bigads2 = \App\tr_adv::where('status', 'A')->where('is_suspend',0)->where('is_hold',0)->where('lt_id_adv',1)->whereDate('created_at', '>', date('Y-m-d'))->inRandomOrder()->limit(1)->get();

            $medads1 = \App\tr_adv::where('status', 'A')->where('is_suspend',0)->where('is_hold',0)->where('lt_id_adv',2)->whereDate('created_at', '>', date('Y-m-d'))->inRandomOrder()->limit(2)->get();


            return view('home')->with('viewnews',$viewnews)->with('viewtypenews',$viewtypenews)->with('menu',$menu)->with('culture1',$culture1)->with('culture2',$culture2)->with('ls1',$ls1)->with('ls2',$ls2)->with('sp1',$sp1)->with('sp2',$sp2)->with('sp3',$sp3)->with('sp4',$sp4)->with('bigads1',$bigads1)->with('bigads2',$bigads2)->with('medads1',$medads1);
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

    public function search(Request $request)
    {
        $menu = \App\master_subtype::with('subtypeee')->get();
        $query = $request->get('q');
        $hasil = \App\news::where('status', 'A')->where('is_suspend',0)->where('is_draft',0)->where('news_title', 'LIKE', '%' . $query . '%')->paginate(6);
        
        return view('result', compact('hasil', 'query'))->with('menu',$menu);
    }

    public function category(Request $request,$typenews,$subname)
    {
        $menu = \App\master_subtype::with('subtypeee')->get();

        $typ = \App\type_news::where('name',$typenews)->get()->toArray();
        $typee = array_column($typ, 'id');

        $subtype = \App\sub_type::where('name',$subname)->get()->toArray();
        $sub = array_column($subtype, 'id');

        $request->session()->put('typenews', $typenews);
        $request->session()->put('subname', $subname);
        $cat = \App\news::where('type_news_id',$typee)->where('type_sub_news_id',$sub)->where('status','A')->paginate(6);
        return view('list')->with('cat',$cat)->with('menu',$menu);
    }

    public function detail(Request $request,$slug)
    {
        $news = \App\news::where('slug',$slug)->with('typenews')->with('subtypenews')->limit(1)->get();
        $menu = \App\master_subtype::with('subtypeee')->get();

        $idnews = \App\news::where('slug',$slug)->get()->toArray();
        $idn = array_column($idnews, 'id');

        $recent = \App\news::where('status', 'A')->where('is_suspend',0)->where('is_draft',0)->where('created_date', '>=', \DB::raw('DATE_SUB(NOW(), INTERVAL 14 DAY)'))->inRandomOrder()->limit(6)->get();

        $comm = \App\comment::where('status','A')->where('id_news',$idn)->get();

        $jml = \App\comment::where('status','A')->where('id_news',$idn)->count();

        $bigads1 = \App\tr_adv::where('status', 'A')->where('is_suspend',0)->where('is_hold',0)->where('lt_id_adv',1)->whereDate('created_at', '>', date('Y-m-d'))->inRandomOrder()->limit(2)->get();
        
        $medads1 = \App\tr_adv::where('status', 'A')->where('is_suspend',0)->where('is_hold',0)->where('lt_id_adv',2)->whereDate('created_at', '>', date('Y-m-d'))->inRandomOrder()->limit(2)->get();

        $simads1 = \App\tr_adv::where('status', 'A')->where('is_suspend',0)->where('is_hold',0)->where('lt_id_adv',3)->whereDate('created_at', '>', date('Y-m-d'))->inRandomOrder()->limit(5)->get();

        $request->session()->put('jml', $jml);
        return view('detail')->with('news',$news)->with('menu',$menu)->with('comm',$comm)->with('recent',$recent)->with('simads1',$simads1)->with('bigads1',$bigads1)->with('medads1',$medads1);
    }

}
