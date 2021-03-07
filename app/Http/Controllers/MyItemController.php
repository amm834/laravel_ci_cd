<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyItem;

class MyItemController extends Controller
{

    function index() {
        // show one language
        $myItem = MyItem::all();
        return view('welcome', compact('myItem'));
    }
    
    function store(Request $request) {
        if($request->languageType == 'en'){
            app()->setLocale('en')
        }
        MyItem::create([
            'title' => [
                'en' => $request->title,
                'my' => $request->title
            ],
            'content'=>[
                'en'=>$request->content,
                'my'=>$request->content
          ]
        ]);
        return 'success';
    }

}