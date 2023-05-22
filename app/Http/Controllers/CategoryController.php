<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function add(){
        return view('admin.category.add');
    }
    public function store( Request $request ){

        DB::table('categories')->insert([
            'name'=>$request->name
        ]);
        
        return back()->with("success","Category Stored Successfully");
    }
    public function index(){

        $categories = DB::table('categories')->get();
        return view('admin.category.index',compact('categories'));

    }
    public function delete( $id ){

        DB::table('categories')->where('id',$id)->delete();
        return back()->with("danger","Category Deleted Successfully");

    }
    public function edit( $id ){

        $category = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('category'));

    }
    public function update( Request $request ){

        DB::table('categories')->where('id',$request->id)->update([
            'name'=>$request->name
        ]);
        
        return redirect('/category')->with("success","Category Updated Successfully");
    }
}
