<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Category;

class CategoryController extends Controller
{
    
public function addcategorys (Request $req){
    try{

    
              $name =$req->input('name');
               $image = $req->input('image');
               $status = $req->input('Status');
               $desc = $req->input('desc');
               $metaTitle = $req->input('meta_title');
               $metaKeyword = $req->input('keyword');
               
               
               $categories = new category();
               $categories->cat_name = $name;
               $categories->cat_image = $image;
               $categories->cat_is_active = $status;
               $categories->cat_description = $desc;
               $categories->cat_meta_title = $metaTitle;
               $categories->cat_meta_keyword = $metaKeyword;

               if( $categories->save()) {  
               
               return redirect('/category')->with('message', 'Data Saved');

           }else{
               return redirect('/')->with('massage','failed to save');
           }
   }
   catch (\Exception $e) {
       return $e->getMessage();
   }

    

}


public function deactivecategory($id)
{
 $catdeactive = category::where('cat_id','=',$id)->update(['cat_is_active' => '1']);
 if($catdeactive == true)
 {
     return redirect('/category');
 }
}

 public function activemanager($id)
{
 $catactive = category::where('cat_id','=',$id)->update(['cat_is_active' => '0']);
 if($catactive == true)    
 {
     return redirect('/category');
 }
}

public function deletecategorys($id)
{
 $catdet = category::where('cat_id','=',$id)->delete();
 if($catdet == true)    
 {
     return redirect('/category')->with('message', 'Data Deleted Successfully');;
 }
 else{
    return redirect('category/')->with('error', 'Deletetion Failed');
}


}

}
