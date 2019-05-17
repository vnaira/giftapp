<?php
/**
 * Created by PhpStorm.
 * User: nairav
 * Date: 15/05/2019
 * Time: 13:42
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class ProfileController extends Controller{

  protected $request;

  public function __construct(Request $request) {
    $this->request = $request;
  }

  public function show($id = FALSE){
    $years = range(date('Y'), 1920);
    $days = range(31, 1);
    $months = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');

    $data = [
      'years' => $years,
      'months' => $months,
      'days' => $days
    ];

//    print_r($this->request->all());
    print_r($this->request->only('year', 'month'));
    print_r($this->request->except('year', 'month'));
    echo $this->request->name;
    if($this->request->has('name'))
    echo $this->request->input('name');
    if(view()->exists('profile')){
      return view('profile', $data)->withTitle('My Profile');
    }
    abort(404);
  }



}