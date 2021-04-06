<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function create(){
        return view('category.create');
    }
    public function index(){
        $categories= Category::paginate(10);
       return view('category.index',['categories'=>$categories]);
    }
    public function store(){
        Category::create(['title'=>request("title")]);
        return redirect("category_list");
    }

    public function edit($id){
       // $category= Category::where('id','=',$id)->get()->first();
        $category=Category::find($id);
       // return view('category.edit',['categori'=>$category]);
        return view('category.edit',compact('category'));
    }
    public function update($id){
        Category::find($id)->update(['title'=>request('title')]);
        return redirect('category_list');
    }
    public function destroy($id){
        Category::find($id)->delete();
        return redirect('category_list');
    }
}
