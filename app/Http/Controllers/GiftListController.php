<?php

namespace App\Http\Controllers;

use App\GiftList;
use Illuminate\Http\Request;

class GiftListController extends Controller
{
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|unique:giftlist',
      'date' => 'required|date',
    ]);

    $request->flash();

    GiftList::create($request->all());

    return redirect('/profile');
  }
}
