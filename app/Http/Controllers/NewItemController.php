<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewItem;
class NewItemController extends Controller
{
    function addData() {
        $newsItem = new NewItem; // This is an Eloquent model
        $newsItem
        ->setTranslation('name', 'en', 'Name in English')
        ->setTranslation('name', 'nl', 'Naam in het Nederlands')
        ->save();

    }
    function index() {
        //
        $newsItem = NewItem::find(1);
        //App()->setLocale('nl');
        echo $newsItem->name;
       // echo \App::getLocale();
        /*$newsItem = NewItem::all();
        foreach ($newsItem as $news){
            echo $news->name;
        }*/
        
    }
}