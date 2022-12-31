<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexcategory()
    {
        return  view('category.index',['categorys'=>category::all()]);
    }

    public function create(){
        return view('category.create');
      }

      public function store(Request $request)
      {
        $request->validate(
            [
                    'name'=>'required',
            ]);
        if (count(category::get()->where('name',$request->name))==0) {
            category::create([
                'name'=>$request->name
            ]);
            return redirect()->route('indexcategory');
        } else {
            return 'the category is found';
        }





        }

        public function destroy($id)
        {
            category::findorFail($id)->delete();
            return redirect()->route('indexcategory');
        }
}
