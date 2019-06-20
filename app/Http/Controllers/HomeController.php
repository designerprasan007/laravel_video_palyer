<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function setting(Request $request)
    {
        return view('auth.setting');
    }
    public function trending(Request $request)
    {
        return view('auth.trending');
    }
    public function sports(Request $request)
    {
        return view('auth.sports');
    }
  
}