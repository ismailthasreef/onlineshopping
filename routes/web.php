<?php
use App\Category;
use App\Product;
use App\Discount;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('admin', function () {
    return view('admin.pages.dashboard');
});
Route::get('category', function () {

  $categry = DB::table('categories')->get();
  return view('admin.pages.category',compact("categry"));
});


Route::get('product', function () {
  $cat = DB::table('categories')->get();
  $pro = DB::table('products')->get();

  return view('admin.pages.product',compact('cat','pro'));
});

Route::get('additems', function () {

  return view('admin.pages.additems');
});

Route::get('discounts', function () {
  $dis = DB::table('discounts')->get();
  return view('admin.pages.discount',compact('dis'));
});


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


//  startcategory
Route::post('/addcategory','CategoryController@addcategorys');
Route::get('activecategory/{id}','CategoryController@activemanager');
Route::get('deactivecategory/{id}','CategoryController@deactivecategory');
Route::get('deletecategory/{id}','CategoryController@deletecategorys');

// @end


// product
Route::post('/addproduct','ProductController@addproducts');
Route::get('addtoproduct/{id}','ProatributeController@additems');
Route::get('deleteitem/{id}','ProductController@deleteitems');
Route::post('/insertitem','ProatributeController@insertitems');


// discounts
Route::post('/adddiscount','DiscountController@adddiscounts');
Route::get('deletediscount/{id}','DiscountController@deletediscounts');



Route::get('/', function () {
  return view('usertemplate.pages.index');
});