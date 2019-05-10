<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.add_product');
    }

    public function saveProduct(Request $request){
        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;

        if($product->save()){
            return redirect()->route('view_products')->with('message','Product successfully added');
        }
        else{
            return back()->with('error','Failed to dd product');
        }
    }


    public function viewProducts(){
        $products=Product::all();
        return view('products.view_products',compact('products'));
    }


    public function editProduct($id){
        $product=Product::find($id);
        return view('products.edit_product',compact('product'));
    }


    public function updateProduct(Request $request){
        $product=Product::where('id',$request->id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price
        ]);

        if($product){
            return redirect()->route('view_products')->with('message','Product successfully updated');
        }
        else{
            return back()->with('error','Failed to update product');
        }
    }

    public function deleteProduct($id){
        $product=Product::find($id)->delete();
        if($product){
            return redirect()->route('view_products')->with('message','Product successfully deleted');
        }
        else{
            return back()->with('error','Failed to delete product');
        }
    }

}
