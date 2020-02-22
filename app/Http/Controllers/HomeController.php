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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getLocale(Request $request)
    {
        $locale = session('locale');
        if(!isset($locale)) {
            $locale = \Config::get('app.locale');
        }
        switch ($locale) {
            case 'vi':
                $locale = 'vi-VN';
                break;
            case 'en':
                $locale = 'en-US';
                break;
            default:
                $locale = 'vi-VN';
        }
        return redirect()->route('home', $locale);
    }

    public function index(Request $request, $locale)
    {
        return view('client.home.index');
    }
}
