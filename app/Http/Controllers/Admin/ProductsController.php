<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function viewproducts(){

        $products = Product::all();
        return view('admin.products.viewproducts',compact('products'));

    }

    public function addProduct(){

    $category = Category::all();
    return view('admin.products.addProduct', compact('category'));

    }

    public function insertProduct(Request $request){

        $product = new Product() ; 

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/product',$filename);
            $product->image = $filename;
    
           }

           $product -> cate_id= $request ->input('cate_id');
           $product -> name = $request ->input('name');
           $product -> slug = $request ->input('slug');
           $product -> small_description = $request ->input('smallDescription');
           $product -> description = $request ->input('description');
           $product -> original_price = $request ->input('original_price');
           $product -> selling_price = $request ->input('selling_price');
           $product -> qty = $request ->input('qty');
           $product -> tax = $request ->input('tax');
           $product -> status = $request ->input('status') == TRUE ? '1' : '0';
           $product -> trending = $request ->input('trending') == TRUE ? '1' : '0';
           $product -> meta_title = $request ->input('meta_title');
           $product -> meta_keyword = $request ->input('meta_keyword');
           $product -> meta_description = $request ->input('meta_description');
           $product ->save();

           return redirect('products')->with('status', 'Product inserted successfully');

    }

    public function editProduct($id){

        $product = Product::find($id);
        return view('admin.products.editProduct',compact('product'));


    }

    public function updateProduct(Request $request , $id){

        $product = Product::find($id);

        if($request->hasFile('image'))
        {
            $path = 'assets/upload/product/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
         
                 $file = $request->file('image');
                 $ext = $file->getClientOriginalExtension();
                 $filename = time().'.'.$ext;
                 $file->move('assets/upload/product/',$filename);
                 $category->image = $filename;
        }
        

           $product -> cate_id= $request ->input('cate_id');
           $product -> name = $request ->input('name');
           $product -> slug = $request ->input('slug');
           $product -> small_description = $request ->input('smallDescription');
           $product -> description = $request ->input('description');
           $product -> original_price = $request ->input('original_price');
           $product -> selling_price = $request ->input('selling_price');
           $product -> qty = $request ->input('qty');
           $product -> tax = $request ->input('tax');
           $product -> status = $request ->input('status');
           $product -> trending = $request ->input('trending');
           $product -> meta_title = $request ->input('meta_title');
           $product -> meta_keyword = $request ->input('meta_keyword');
           $product -> meta_description = $request ->input('meta_description');
           $product ->update();

           return redirect('products')->with('status', 'Product updated successfully');


    }

    public function deleteProduct($id){

        $product = Product::find($id) ;
        if($product->image){
    
            $path='assets/upload/product/'.$product->image;
            if(File::exists($path)){
    
                File::delete($path);
            }
        }
        
    
        $product->delete();
        return redirect('products')->with('status', 'Product deleted successfully');

}


}
