<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Storage;

class productsController extends Controller
{
public function index()
  {
    return view('products');
  }

  public function store(Request $request)
  {
    return view('register');
  }


public function confirm(Request $request)
{
   return view('products');
    }
}