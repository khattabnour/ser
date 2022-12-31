<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{



    public function create()
    {
        $cat=category::get();
        return view('product.create',['cat'=>$cat]);
    }
    public function store(Request $request)
    {
            $img = $request->file('photo')->getClientOriginalName();
            $path=$request->file('photo')->storeAs('users',$img,'khattab');
            $request->validate(
                [
                        'name'=>'required',
                        'price'=>'required|integer',
                        'title'=>'required',
                ]);

                        $product=new product();
                        $product->name=strip_tags($request->input('name'))  ;
                        $product->price=strip_tags( $request->input('price'));
                        $product->title=strip_tags($request->input('title'));
                        $product->category_id=(+$request->input('category'));
                        $product->img=$path;
                        $product->save();
                        return redirect()->route('editproduct');
        }




    public function edit($id)
    {

        $cat=category::get();
        $product=product::findorFail($id);
        return view('product.edit',["product"=>$product,'cat'=>$cat]);

    }
    public function update(Request $request, $id)
    {
        $img = $request->file('photo')->getClientOriginalName();
        $path=$request->file('photo')->storeAs('users',$img,'khattab');
        $request->validate(
            [
                    'name'=>'required',
                    'price'=>'required|integer',
                    'title'=>'required',
            ]);

                    $product=Product::findorFail($id);
                    $product->name=strip_tags($request->input('name'))  ;
                    $product->price=strip_tags( $request->input('price'));
                    $product->title=strip_tags($request->input('title'));
                    $product->category_id=(+$request->input('category'));
                    $product->img=$path;
                    $product->save();
                    return redirect()->route('editproduct');
    }
    public function destroy( $id)
    {
        product::find($id)->delete();
        return redirect()->route("editproduct");
    }
      public function editproduct(Request $request)
      {
          $category=category::get();

          if ($request->select==null) {
              $products= product::get();

          }else{
             $products= product::get()->where('category_id',(int)$request->select);
          }
  //        $products=product::get();

        return view('edit',['products'=>$products,'category'=>$category]);
      }
}
