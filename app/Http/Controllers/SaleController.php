<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Promotion;
use App\Sale;
use App\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SaleController extends Controller
{
    public function addSale(){
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $products=Product::all();
        if(Session::has('cart')){
            return view('sale.add_sale',['products'=>$products,'products_in_cart'=>$cart->items,'totalPrice' => $cart->totalPrice ]);
        }
        else{
            return view('sale.add_sale',['products'=>$products]);
        }

    }


    public function addToCart(Request $request){
        $product=Product::find($request->product_id);
        $oldCart=Session::has('cart') ? Session::get('cart') : null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id,$request->quantity);

        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));   //for Rest viewing

        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $products=Product::all();
        return view('sale.add_sale',['products'=>$products,'products_in_cart'=>$cart->items,'totalPrice' => $cart->totalPrice ]);

    }

    public function clearCart(){
      Session::pull('cart',"*");
        return redirect()->route('add_sale');
    }



    public function saveSale(){

        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        $orders=$cart->items;

        $data = array();
        foreach ($orders as $order){
            $od=$order['item']['name'].' '.$order['item']['price'];
            $data[] = (array)$od;
        }

        $mydata=json_encode($data);

        $a=str_replace("[","",$mydata);
        $b=str_replace("]","",$a);
        $finaData=str_replace('"',"",$b);

        $date=date('Y-m-d');
        $prom_exists=Promotion::where([
            ['start_date', '<=', $date],
            ['end_date', '>=', $date],
        ])->first();

        $promotion=Promotion::where([
            ['start_date', '<=', $date],
            ['end_date', '>=', $date],
        ])->first();


        $sale=new Sale();
        $sale->order=$finaData;
        $sale->amount=$cart->totalPrice;
        if($prom_exists){
            if($cart->totalPrice>=$promotion->amount_for_point){
                $sale->has_token='true';
            }
            else{
                $sale->has_token='false';
            }
        }
        else{
            $sale->has_token='false';
        }


        $sale->receipt_number=rand(1000,99999999);

        if($sale->save()){
            Session::pull('cart',"*");
            if($sale->has_token=='true'){
                $tocken=new Token();
                $tocken->token_id=rand(1000,99999999);
                $tocken->promotion_name=$promotion->promotion_name;
                $tocken->points=$cart->totalPrice /$promotion->amount_for_point;
                $tocken->receipt_number=$sale->receipt_number;
                $tocken->status='unused';

                if($tocken->save()){
                    return redirect()->route('add_sale')->with('message','Sale successful and promotion token generated '.$tocken->token_id);
                }

            }
            else{
                return redirect()->route('add_sale')->with('message','Sale successful, no token for user');
            }





        }
        else{
            return back()->with('error','Failed to add sale');
        }

    }

    public function viewSales(){
        $sales=Sale::all();
        return view('sale.view_sales',compact('sales'));
    }



}
