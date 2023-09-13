<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(3);
        return view('admin.product.index', compact('products'));
    }

    public function productCreate()
    {
        $category = Category::all();
        return view('admin.product.create', compact('category'));
    }


    public function productStore(Request $request)
    {
        $data = new Product();

        if($request->hasfile('image')){
            $file = $request->file('image');
            $fileName = time(). '.'. $file->getClientOriginalExtension();
            $file->move('uploads/product/',$fileName);
            $data->image = $fileName;
        }

        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['qty'] = $request->qty;
        $data['price'] = $request->price;
        $data['selling_price'] = $request->selling_price;
        $data['status'] = $request->status == true ? '1':'0';
        $data['description'] = $request->description;

        $data->save();

        return redirect('admin/products')->with("message", "Product Added Successfully");

    }

    public function productEdit($id)
    {
        $data = Product::find($id);
        $category = Category::all();
       
        return view('admin.product.edit', compact('data', 'category'));

    }

    public function productUpdate(Request $request, $id)
    {
        $data = Product::find($id);

        if($request->hasfile('image')){
            $file = $request->file('image');
            $fileName = time(). '.'. $file->getClientOriginalExtension();
            $file->move('uploads/product/',$fileName);
            $data->image = $fileName;
        }

        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['slug'] = $request->slug;
        $data['qty'] = $request->qty;
        $data['price'] = $request->price;
        $data['selling_price'] = $request->selling_price;
        $data['status'] = $request->status == true ? '1':'0';
        $data['description'] = $request->description;

        $data->update();

        return redirect('admin/products')->with("message", "Product Updated Successfully");

    }

    public function productDestroy(Request $request, $id)
    {
        $product = Product::find($id);

    
        $imagePath = public_path('uploads/product/' . $product->image);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $product->delete();
        return redirect('admin/products')->with("message", "Product   Deleted Successfully");
    }
}
