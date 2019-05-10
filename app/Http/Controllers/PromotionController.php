<?php

namespace App\Http\Controllers;

use App\Product;
use App\Promotion;
use foo\bar;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index(){
        return view('promotion.add_promotion');
    }

    public function savePromotion(Request $request){
        $promotion=new Promotion();
        $promotion->promotion_name=$request->promotion_name;
        $promotion->number_of_winners=$request->number_of_winners;
        $promotion->start_date=$request->start_date;
        $promotion->end_date=$request->end_date;
        $promotion->amount_for_point=$request->amount_for_point;

        if($promotion->save()){
            return redirect()->route('view_promotions')->with('message','Promotion successfully added');
        }
        else{
            return back()->with('error','Failed to add promotion, please contact admin');
        }

    }

    public function viewPromotions(){
        $promotions=Promotion::all();
        return view('promotion.view_promotions',compact('promotions'));
    }

    public function editPromotion($id){
        $promotion=Promotion::find($id);
        return view('promotion.edit_promotion',compact('promotion'));
    }

    public function updatePromotion(Request $request){
        $promotion=Promotion::where('id',$request->id)->update([
           'promotion_name' =>$request->promotion_name,
            'number_of_winners'=>$request->number_of_winners,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date
        ]);

        if($promotion){
            return redirect()->route('view_promotions')->with('message','Promotion successfully updated');
        }
        else{
            return back()->with('error','Failed to update promotion');
        }

    }


    public function deletePromotion($id){
        $promotion=Promotion::find($id)->delete();
        if($promotion){
            return redirect()->route('view_promotions')->with('message','Promotion successfully deleted');
        }
        else{
            return back()->with('error','Failed to delete promotion');
        }
    }

}
