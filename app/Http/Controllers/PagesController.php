<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auth;
use App\User;

class PagesController extends Controller
{
//    public function index()
//    {
//        return view ('pages.index');
//    }
    public function about()
    {
        return view ('pages.about');
    }
    public function contact()
    {
        return view ('pages.contact');
    }
    public function contactstore(Request $request)
    {
        $name = $request->name;
        return redirect()->route('thankyou', ['fname' => $name]);
    }
    public function thankyou($name ,Request $request)
    {
        return view ('pages.thankyou')->with(compact('fname'));
    }

}
