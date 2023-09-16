<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\ShippingCharge;

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

    //To get checkout page...
    public function checkOutPage($id)
    {
        //To get single product...
        $singleProduct = Product::where('id',$id)->first(); 

        //To get shipping charge...
        $shippingChargeData = ShippingCharge::getShippingCharge();

        return view('frontend.checkout', compact('singleProduct','shippingChargeData'));
    }

    public function orderStore(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'product_unit_price' => 'required',
            'product_qty' => 'required',
            'total_amount' => 'required',
            'shipping_amount' => 'required',
            'grand_total_amount' => 'required',
        ]);
        
        $data = $request->all();
        $data['status'] = 'Pending';
       
        //To update product quantity...
        $checkQty = $this->checkProductQuantity($request->product_id, $request->product_qty);
        if($checkQty >= 0){
            if($orderData = Order::create($data)){
                //To update product quantity...
                $result = $this->updateProductQuantity($orderData->product_id, $orderData->product_qty);
                if($result == true){
                    return redirect()->route('frontend-index');
                }else{
                    return redirect()->back();
                }
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }

    //To check product quantity is greater than zero or not...
    private function checkProductQuantity($productId, $productQty)
    {
        //To fetch single product data...
        $singleProductData = Product::where('id', $productId)->first();
        $previousProdctQty = $singleProductData->qty;
        $currentProdctQty = $singleProductData->qty - $productQty;
        return $currentProdctQty;
    }

    //To update product quantity...
    private function updateProductQuantity($productId, $productQty)
    {
        //To fetch single product data...
        $singleProductData = Product::where('id', $productId)->first();
        $previousProdctQty = $singleProductData->qty;
        $currentProdctQty = $singleProductData->qty - $productQty;
        if($currentProdctQty >= 0){
            $singleProductData->qty = $currentProdctQty;
            $singleProductData->save();

            return true;
        }else{
            return false;
        }
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
