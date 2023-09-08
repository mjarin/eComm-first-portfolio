<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Session;

class SubCategoryController extends Controller
{
public function createSubCategory(){

    $category=Category::all();
    return view('admin.sub-category.create',compact('category'));
}

public function store(Request $request){

    $sub_category =new SubCategory();
    $sub_category->name =$request->input('name');
    $sub_category->cate_id =$request->input('cate_id');
    $sub_category->slug =$request->input('subCateSlug');
    $sub_category->description = $request->input('subCateDescription');
    $sub_category->status =$request->input('subCateStatus') == TRUE ? '1' : '0';
    $sub_category->save(); 

    return redirect('/view-sub-categories')->with('message','SubCategory Created Successfully');
}

public function ShowSubCategories(){

    $sub_categories=SubCategory::all();
    return view('admin.sub-category.view-sub-categories', compact('sub_categories'));

}

public function ChangeSubcateStatus($id){

    $sub_category= SubCategory::find($id);
    if($sub_category->status == 1){

        $sub_category->update(['status'=>0]);
        return redirect()->back()->with('message','Status Updated Successfully');
    }else{
        $sub_category->update(['status'=>1]);
        return redirect()->back()->with('message','Status Updated Successfully');
    }

}

public function editSubcategory($id){
    $category =Category::all();
    $subCate= SubCategory::find($id); 
    return view('admin.sub-category.edit-sub-cate',compact('subCate','category'));

}


public function updateSubCate(Request $request , $id){

   $sub_category= SubCategory::find($id);
   $sub_category-> name=$request->input('name');
   $sub_category-> slug =$request->input('subCateSlug');
   $sub_category-> description = $request->input('subCateDescription');
   $sub_category-> status= $request->input('subCateStatus') == TRUE ? '1' : '0';
   $sub_category->update();
   return redirect('/view-sub-categories')->with('status', 'SubCategory Updated successfully');

}

public function deleteSubCate($id){

    $subCate = SubCategory::find($id);
    $subCate->delete();
    return redirect()->back()->with('message','SubCategory deleted Successfully');

}



}
