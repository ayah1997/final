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
       
        return view('product.final');
    }
    public function store(Request $request){
       $request->validate([
       'title'=>'required',
       'description'=>'required',
       'price'=>'required',
       ]);
       $product= new Product();
       $product->Title=$request->title;
       $product->Description=$request->description;
       $product->Price=$request->price;
       
       $product->save();
       return redirect()->back();
   }
   public function edit(Contact $contact){
     //  $product = Product::findOrFail($id);
       return view('product.final',compact('product'));
   }
   public function update(Request $request,Contact $contact){
    $request->validate([

    'title'=>'required',
    'description'=>'required',
    'price'=>'required',
    ]);
         // $product = Product::findOrFail($id);

    $product->title=$request->title;
    $product->description=$request->description;
    $product->price=$request->price;
           $product->save();
            return redirect('/product');


   }
   public function destroy ($id){

 
        $product=Product::find($id);
     //   DB::table('tasks')->where('id','=',$id)->delete();
       $product->delete($id);
         return redirect('/product');
         
     }
}

