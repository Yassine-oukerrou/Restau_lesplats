<?php

namespace App\Http\Controllers;
use App\Models\crudplat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('home');
    }

    public function menu()
    {


        return view('frontend.menu');
    }


    public function gallery($type)
    {
        if ($type === 'photo') {

            return view('frontend.gallery.photo');
        }


        return view('frontend.gallery.video');
    }

    public function blog()
    {


        return view('frontend.blog.index');
    }





    public function about()
    {


        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    //les plats
    public function plats()
    {
        $data=crudplat::select("*")->orderby('id','ASC')->get();
        return view('frontend.plats',['data'=>$data]);
    }
    //combobox
    public function combobox()
    {
        return view('frontend.combobox');
    }
}
