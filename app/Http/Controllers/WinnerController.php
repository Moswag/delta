<?php

namespace App\Http\Controllers;

use App\Client;
use App\Point;
use App\Promotion;
use App\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WinnerController extends Controller
{
    public function index(){
        $promotions=Promotion::all();
        return view('winners.view_promotions',compact('promotions'));
    }



    public function viewWinners($id){
        $promotion=Promotion::find($id);
      //  $winners=Point::where('promotion_id',$id)->orderBy('points','desc')->take($promotion->number_of_winners)->get();


        $clients = DB::table('clients')
            ->join('points', 'clients.id', '=', 'points.user_id')
            ->where('points.promotion_id',$id)
            ->orderBy('points.points','desc')->take($promotion->number_of_winners)->get();


//        $clients=array();
//        foreach($winners as $winner){
//            $clients=(array)Client::where('id',$winner->user_id)->first();
//        }

        return view('winners.view_winners',compact('clients'));

    }



}
