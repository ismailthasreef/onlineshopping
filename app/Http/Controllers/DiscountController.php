<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;

class DiscountController extends Controller
{
    
public function adddiscounts(Request $req){

try{

    
   
        $name = $req->input('name');
        $percent = $req->input('percent');
     
        $discounts = new discount();
        $discounts->d_name = $name;
        $discounts->d_percentage = $percent;
    
       if( $discounts->save()) {  
     
       return redirect('/discounts')->with('message', 'Data Saved');

       }else{
       return redirect('/discounts')->with('massage','failed to save');
     }
   }
      catch (\Exception $e) {
      return $e->getMessage();
}



}



public function deletediscounts($id)
{
 $discountdet = Discount::where('d_id','=',$id)->delete();
 if($discountdet == true)    
 {
     return redirect('/discounts')->with('message', 'Data Deleted Successfully');;
 }
 else{
    return redirect('discounts/')->with('error', 'Deletetion Failed');
}


}
    
}
