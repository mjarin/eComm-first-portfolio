<?php

namespace App\Http\Controllers\Frontend;
// use Illuminate\Support\Facades\Auth;
use Auth;
use Session;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontendController extends Controller
{
    public function index(){

        
        $featured_products = Product::where('trending', '1')->take(15)->get();
        $trending_category = Category::where('popular', '1')->take(15)->get();
        return view('frontend.index', compact('featured_products','trending_category'));

    }

    // .................................................................................
    public function viewFeaturedProducts($id){
 
        $product= Product::where('id',$id)->where('trending','1')->first();
        return view('frontend.products.view-featured-product', compact('product'));

    }
// .................................................................................



    public function fronendCategory(){
        // $category = Category::where('status','0')->get();
        $category = Category::where('status','1')->get();
        return view('frontend.category', compact('category'));

    }


    public function viewcategoryProducts($id){ 

        $allCate=Category::all();
        if(Category::where('id',$id)->exists())
        {
            $category = Category::where('id', $id)->first();
            $products = Product::where('cate_id',$category->id)->get();
            return view('frontend.products.index', compact('category','products','allCate'));
        }
        else 
        {

            return redirect('/fronendcategory')->with('status','Category doesnt exist .');
        }
    }

     public function allProductsView(){
         $allproducts=Product::all();
         $allcategories=Category::all();
         return view('frontend.products.all-products',compact('allproducts','allcategories'));
     }

     public function product($slug){

        if(Product::where('slug',$slug)->exists()){
        $product=Product::where('slug',$slug)->first();
         return view('frontend.products.product-view',compact('product'));

        }
     }


    public function singleproductview( $cate_id, $prod_id ){

        if(Category::where('id',$cate_id)->exists())
          {
            if(Product::where('id',$prod_id)->exists()){

                $product =Product::where('id',$prod_id)->first();
                return view('frontend.products.singleproductview', compact('product'));

            }else{
                return redirect()->back()->with('status', 'Product doesnt exists');
            }
          }
          else
          {
            return redirect()->back()->with('status', 'Category doesnt exists');
          }



    }


    public function forAjax(){

        $products =Product::where('status', '0')->get();
        $data = [];

        foreach ($products as $item) {
            $data[] = $item['name'];
        }

        return $data;
    }

    public function searchProduct(Request $req){

        $search_product = $req->product_name;
        if($search_product != '')
        {
            $product =Product::where("name","LIKE","%$search_product%")->first();
            if($product)
            {
                return redirect('category/'.$product->category->slug.'/'.$product->slug);
            }
            else
            {
                return redirect()->back()->with('status', 'No products matched your search');
            }
        }
        else{
            return redirect()->back();
        }


    }


//  end of class  FrontendController  
}
