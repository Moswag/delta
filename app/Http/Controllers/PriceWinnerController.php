<?php

namespace App\Http\Controllers;

use App\Promotion;
use App\WinnerPrice;
use Illuminate\Http\Request;

class PriceWinnerController extends Controller
{
    public function addPrice(){
        $promotions=Promotion::all();
        return view('prices.add_winner_price',compact('promotions'));
    }


    public function savePrice(Request $request){
        $promotion=Promotion::find($request->promotion_id);
        $price=new WinnerPrice();
        $price->promotion_id=$request->promotion_id;
        $price->promotion_name=$promotion->promotion_name;
        $price->price=$request->price;
        $price->winner_number=$request->winner_number;

        if($request->winner_number>$promotion->number_of_winners){
            return back()->with('error','That winner number '.$request->winner_number.' is greater than the number of winners '.$promotion->number_of_winners.' in this promotion');
        }
        else {
            $winnerExists = WinnerPrice::where([['promotion_id', '=', $request->promotion_id], ['winner_number', '=', $request->winner_number]])->exists();
            if ($winnerExists) {
                return back()->with('error', 'That winner already exists');
            } else {
                if ($price->save()) {
                    return redirect()->route('view_prices')->with('message', 'Winner price successfully added');
                } else {
                    return back()->with('error', 'Filed to add price for winners');
                }
            }
        }


    }


    public function viewPrices(){
        $prices=WinnerPrice::all();
        return view('prices.view_winner_prices',compact('prices'));
    }
}
