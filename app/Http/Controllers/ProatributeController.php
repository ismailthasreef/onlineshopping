<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_attribute;
use DB;

class ProatributeController extends Controller
{
       
    public function additems ($id){
        
            $items = product::where('p_id','=',$id)->get();
            $dis = DB::table('discounts')->get();
       return view('/admin.pages.additems',compact('items','dis'));
      
        
}


public function insertitems (Request $req){
    try{

    
              $p_id =$req->input('pid');
               $weight = $req->input('pweight');
               $price = $req->input('pprice');
               $stock = $req->input('pstock');
               $d_id = $req->input('pstock');
               
               $attribute = new Product_attribute();
               $attribute->p_id = $p_id;
               $attribute->attr_weight = $weight;
               $attribute->attr_price = $price;
               $attribute->attr_stock = $stock;
               $attribute->d_id = $d_id;
               if( $attribute->save()) {  
               
               return redirect('/product')->with('message', 'Data Saved');

           }else{
               return redirect('/product')->with('massage','failed to save');
           }
   }
   catch (\Exception $e) {
       return $e->getMessage();
   }

    

}






}
