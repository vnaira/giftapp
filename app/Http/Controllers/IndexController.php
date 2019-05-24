<?php

namespace App\Http\Controllers;

use App\GiftList;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller {

  public function show() {
    $array = [
      'title' => 'Gift Application',
      'data' => [
        'one' => 'List1',
        'twq' => 'List2',
        'three' => 'List3',
        'four' => 'List4',
      ],
      'now' => Carbon::now(),
      'dataI' => ['list1', 'list2', 'liast3', 'list4'],
      'dataT' => [],
      'script' => "<script>alert('hello');</script>",
    ];
    if (view()->exists('index')) {
      return view('index' , $array )->withTitle('Gift App');
    }
    abort(404);

    //    $data = ['title'=>'home page'];
    //    return view('template', $data);
    //    $view = view('template');
    //    $view->with('title', 'home page2');
    //    $view->with('title2', 'home page2222');
    //    return $view;
    //    return view('template')->with('title', 'home page2');
    //    return view('template')->withName('Nameeeee');
  }
  public function home(){
    $giftlist = GiftList::all();
    return view('home', compact('giftlist',$giftlist));
  }
}
