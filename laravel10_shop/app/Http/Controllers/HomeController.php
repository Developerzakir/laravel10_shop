<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    
    public function index()
    {

        if(Auth::id()){
            return redirect('redirect');
        }

        else{

            $product = Product::where('status',1)->get();
            $allProduct = Product::paginate(6);
            return view('frontend.index', compact('product', 'allProduct'));
        }
        
    }

    public function redirect()
    {
        $userType = Auth::user()->type;

        if($userType == '1'){
            return view('admin.app');
        }
        
        else{
          
            return view('frontend.index');
        }
    }

    public function viewProduct($slug)
    {

        $product_view = Product::where('slug',$slug)->first();
        $allProduct = Product::paginate(6);

        return view('frontend.single-product', compact('product_view', 'allProduct'));
       
    }

    public function checkOutPage($id)
    {
        
        $product = Product::where('id',$id)->first();

        return view('frontend.checkout', compact('product'));
    }

    public function orderStore(Request $request)
    {
        $order = new Order();
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->location = $request->input('location');
        $order->total_amount = $request->input('amount');
        $order->status = 'Pending';
        $order->save();

        return redirect()->back();
    }

    public function orderView()
    {
        $order  = Order::all();
        return view('admin.orders.index', compact('order'));
    }

    public function orderActive($id)
    {
        $approved_order = Order::find($id);
        $approved_order->status = 'Active';
        $approved_order->save();

        return redirect()->back();

    }

 

    
}
