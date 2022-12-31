<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\product;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show($id)
    {
     $product= product::findorFail($id);

       return view('show',['product'=>$product]);

    }
    public function index(Request $request)
    {
        $category=category::get();

        if ($request->select==null) {
            $products= product::get();

        }else{
           $products= product::get()->where('category_id',(int)$request->select);
        }
//        $products=product::get();

      return view('welcome',['products'=>$products,'category'=>$category]);
    }

}

