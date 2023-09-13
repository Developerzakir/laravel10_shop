<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::paginate(3);
        return view('admin.category.index', compact('category'));
    }
    public function categoryCreate()
    {
        return view('admin.category.create');
    }

    public function categoryStore(Request $request)
    {
        $data = new Category();

        if($request->hasfile('image')){
            $file = $request->file('image');
            $fileName = time(). '.'. $file->getClientOriginalExtension();
            $file->move('uploads/category/',$fileName);
            $data->image = $fileName;
        }

        $data['name'] = $request->name;
        $data['slug'] = $request->slug;
        $data['description'] = $request->description;

        $data->save();

        return redirect('admin/categories')->with("message", "Category Added Successfully");

    }

   public function categoryEdit($id)
   {
    $data = Category::find($id);

    return view('admin.category.edit', compact('data'));
   }

   public function categoryUpdate(Request $request, $id){

    $data = Category::find($id);

    // Delete the old image from storage

    $oldImagePath = 'uploads/category/'.$data->image;
    if (File::exists($oldImagePath)) {
        File::delete($oldImagePath);
    }

    $file=$request->file('image');
    $ext = $file->getClientOriginalExtension();
    $filename = time().'.'.$ext;
    $request->image->move('uploads/category/',$filename);
    $data->image = $filename;

    $data->name = $request->name;
    $data->slug = $request->slug;
    $data->description = $request->description;

    $data->update();

    return redirect('/admin/categories')->with('message', 'Category Updated successfully');
}

public function categoryDestroy(Request $request, $id)
{
        $category = Category::find($id);

    
        $imagePath = public_path('uploads/category/' . $category->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $category->delete();
        return redirect('admin/categories')->with("message", "Category   Deleted Successfully");

    

}

}
