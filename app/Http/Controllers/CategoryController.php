<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function categories(){
        $categories = Category::all();
        return view('categories')
              ->with('categories', $categories);
              
            
    }

    public function create(){
        return view('createcategory');
    }
    
    public function edit(Category $category){
    
        return view('editcategory')->with('categories', $category);
    
    }
    public function update(Category $category){

        try {
            $this->validate(request(), [
                'name' => ['required'],
           
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();
       
        $category->name = $data['name'];
        $category->save();

        session()->flash('success', 'Category updated successfully');

        return redirect('/categories');

    }


    public function delete(Category $category){
        $category->delete();

        session()->flash('success', 'Category deleted successfully');

        return redirect('/categories');

    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => ['required'],
        ]);
  
       
        $category = new Category();
        $category->name = $validatedData['name'];
           
        $category->save();

        session()->flash('success', 'Category created succesfully');

        return redirect('/categories');

    }
}