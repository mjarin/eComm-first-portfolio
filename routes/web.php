<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Admin\DashboarduserController;
use App\Http\Controllers\Frontend\FrontenduserController;
use App\Http\Controllers\SslCommerzPaymentController;  


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Default routes...........................
Route::get('/logout', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('/');
});

Route::get('/', 'Frontend\FrontendController@index');
Route::get('/fronendcategory',[FrontendController::class,'fronendCategory']);
Route::get('category_product/{id}',[FrontendController::class,'viewcategoryProducts']); 
Route::get('category/{cate_id}/{prod_id}',[FrontendController::class,'singleproductview']);
Route::get('featured-product/{id}',[FrontendController::class,'viewFeaturedProducts']);
Route::get('all-products/',[FrontendController::class,'allProductsView']);
Route::get('product/{slug}',[FrontendController::class,'product']);
Route::get('product-list', [FrontendController::class,'forAjax']);
Route::post('search-product' , [FrontendController::class,'searchProduct']); 

Auth::routes();
Route::get('/load-cart-item', [CartController::class,'cartCount']);
Route::get('/load-wishlist-item', [WishlistController::class,'wishlistCount']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/add-to-cart',[CartController::class,'addProducts']);
Route::post('/delete_cart_item',[CartController::class,'deleteCartItem']);
Route::post('update-cart',[CartController::class,'updateCart']);
Route::post('/add-to-wishlist',[WishlistController::class,'addtowishlist']);
Route::post('/delete_wishlist_item',[WishlistController::class,'remove']);

Route::middleware(['auth'])->group(function () {     
    Route::get('cart',[CartController::class,'viewcart']);
    Route::get('/checkout',[CheckoutController::class,'viewCheckout']);
    Route::get('/checkout-online', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
    Route::post('/place-order',[CheckoutController::class,'placeOrder']);
    Route::get('/my-orders',[FrontenduserController::class,'myOrders']);
    Route::get('view-order/{id}',[FrontenduserController::class,'viewSingleOrder']);
    Route::get('wishlist',[WishlistController::class,'index']); 
   
// SSLCOMMERZ Start 
// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

});

// Admin Related Routes before being loggedin....................................................
Route::get('/admin/login',[AdminController::class,'adminLoginForm'])->name('admin.login');
Route::post('/admin-login',[AdminController::class,'adminLogin'])->name('admin.adminlogin');


// Admin Related Routes After being loggedin....................................................
Route::group(['middleware'=>'admin'],function(){ 
Route::get('/admin/dashboard',[App\Http\Controllers\Admin\AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.adminlogout');

// All Category Related Routes.............................................................
Route::get('/category','Admin\CategoryController@index');
Route::get('add-category','Admin\CategoryController@addCategory');
Route::post('/insert-category','Admin\CategoryController@insert');
Route::get('edit-cate/{id}',[CategoryController::class,'edit']); 
Route::put('update-category/{id}',[CategoryController::class,'update']);
Route::get('delete-category/{id}',[CategoryController::class,'destroy']);

// All Sub Category Related Routes.............................................................
Route::get('/add-sub-category',[SubCategoryController::class,'createSubCategory']); 
Route::post('/store-sub-category',[SubCategoryController::class,'store']);
Route::get('/view-sub-categories',[SubCategoryController::class,'ShowSubCategories']);
Route::get('change-subcate-status/{id}',[SubCategoryController::class,'ChangeSubcateStatus']);
Route::get(' edit-sub-cate/{id}',[SubCategoryController::class,'editSubcategory']);
Route::put('update-sub-category/{id}',[SubCategoryController::class,'updateSubCate']);
Route::get('delete-sub-category/{id}',[SubCategoryController::class,'deleteSubCate']);



// All Products Related Routes.............................................................
Route::get('products',[ProductsController::class,'viewproducts']);  
Route::get('add-product',[ProductsController::class,'addProduct']);
Route::post('insert-product',[ProductsController::class,'insertProduct']); 
Route::get('edit-product/{id}',[ProductsController::class,'editProduct']);
Route::put('update-product/{id}',[ProductsController::class,'updateProduct']);
Route::get('delete-product/{id}',[ProductsController::class,'deleteProduct']);

// All Orders Related Routes.............................................................
Route::get('orders',[OrderController::class,'orders']);
Route::get('admin/view-order/{id}',[OrderController::class,'view']);
Route::put('update_order/{id}',[OrderController::class,'updateorder']);
Route::get('order-history',[OrderController::class,'orderhistry']);

// All Users Related Routes.............................................................
Route::get('users',[DashboarduserController::class,'users']); 
Route::get('view-user/{id}',[DashboarduserController::class,'viewUser']);

 });






