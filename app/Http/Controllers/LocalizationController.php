<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function index($locale){
        
        Session::put('locale', $locale);
       // dd(session()->get('locale'));
        return redirect()->back();
    }
}


// {
//     public function switchLocale($locale)
//     {
//         session()->put('locale', $locale);
//         return redirect()->back();
//     }

//     public function getLocale()
//     {
//         return session()->get('locale', config('app.locale'));
//     }
// }