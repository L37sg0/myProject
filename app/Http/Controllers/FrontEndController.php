<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class FrontEndController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    public function page(Request $request, $slug)
    {
        //$slug =$request->path();

        $page = Page::whereSlug( $slug )
            ->first();

        //dd($page->title);


        return view('pages.static', compact('page'));
    }
}
