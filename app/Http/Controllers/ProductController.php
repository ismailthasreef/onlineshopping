<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
Use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use App\Product;
use App\Product_attribute;
class ProductController extends Controller
{
    
    public function addproducts (Request $req){
   
          
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/product_images');
            $image->move($destinationPath, $image_name);
        

     
        
              $cid =$req->input('catid');
              
               $name = $req->input('name');
               $pcode = $req->input('pcode');
               $desc = $req->input('desc');
               $status = $req->input('Status');
               
               $products = new product();
               $products->cat_id = $cid;
               $products->p_name = $name;
               $products->p_code = $pcode;
               $products->p_description = $desc;
               $products->p_image = $image_name;
               $products->p_is_active = $status;

               if( $products->save()) {  

               
                return redirect('/product')->with('message', 'Data Saved');
 
            }
            else{
                return redirect('product/')->with('massage','failed to save');
            }
        }
        else{
            return "mamante pokkl";
        }
               
  

    

}


public function deleteitems($id)
{
 $deleteitems = product::where('p_id','=',$id)->delete();
 if($deleteitems == true)    
 {
    $deletattribute = Product_attribute::where('p_id','=',$id)->delete();
     return redirect('/product')->with('message', 'Data Deleted Successfully');;
 }
 else{
    return redirect('product/')->with('error', 'Deletetion Failed');
}


}

}
