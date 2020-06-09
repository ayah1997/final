<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
      
 
        $products = Product::all();
         return view('product.final',compact('products'));
     }
     public function create(){
       
        return view('product.create');
    }
    public function store(Request $request){
       $request->validate([
       'userTitle'=>'required',
       'userDescription'=>'required',
       'userPrice'=>'required',
       ]);
       $product= new Product();
       $product->Title=$request->userTitle;
       $product->Description=$request->userDescription;
       $product->Price=$request->userPrice;
       $product->save();
       return redirect()->back();
   }
   public function edit(Product $product){
      // $product = Product::findOrFail($id);
       return view('product.create',compact('product'));
   }
   public function update(Request $request,Product $product){
       $request->validate([
        'userTitle'=>'required',
        'userDescription'=>'required',
        'userPrice'=>'required',
           ]);
           $product->Title=$request->userTitle;
           $product->Description=$request->userDescription;
           $product->Price=$request->userPrice;
           $product->save();
            return redirect('/product');


   }
   public function destroy ($id){

 
        $product=Product::find($id);
       $product->delete($id);
         return redirect('/product');
         
     }
}

