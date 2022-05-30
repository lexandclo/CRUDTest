<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    
    public function index(){
        $products = Product::all();
            return view('index')
              ->with('products', $products);
            
    }
    public function products(){
        $products = Product::all();
        return view('products')
              ->with('products', $products);
            
    }
 
    public function create(){
        $categories = Category::all();
        return view('createproduct')->with('categories', $categories);
    }
    public function details(Product $product){

        return view('productdetails')->with('products', $product);
    
    }
    
    public function edit(Product $product){
        $categories = Category::all();

        return view('editproduct')->with([
            'products' =>  $product,
            'categories' => $categories,
        ]);
    
    }
    public function update(Product $product){

        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required'],
           
            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();
       
       
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->category_id = $data['categoryid'];
        $product->save();

        session()->flash('success', 'Product updated successfully');

        return redirect('/products');

    }


    public function delete(Product $product){
        $product->delete();

        session()->flash('success', 'Product deleted successfully');

        return redirect('/');

    }

    public function store(Request $request){

        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'categoryid' => ['required'],
        ]);
        
        //dd($data);
        $product = new Product();
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->category_id = $data['categoryid'];
        
        $product->save();

        session()->flash('success', 'Product created succesfully');

        return redirect('/products');

    }
}