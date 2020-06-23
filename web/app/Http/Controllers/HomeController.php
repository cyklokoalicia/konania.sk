<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Point;
use Cache;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function getKonania()
    {
        $points = Point::paginate(50);
        return view('home.konania',['konania'=>$points]);
    }
    public function getKonanie($id)
    {
        $point = Point::find($id);
        return view('home.konanie',['konanie'=>$point]);
    }
    public function editKonanie($id)
    {
        $point = Point::find($id);
        return view('home.edit',['konanie'=>$point]);
    }
    public function search()
    {
        $input = Input::get('search');
        $points = Point::all();
        //$results = $points->where('')
    }
}
