<?php

namespace App\Http\Controllers;

use App\Client;
use App\UserReceipts;
use Illuminate\Http\Request;

class BuyingPatternsController extends Controller
{
    public function buyingPatterns(){
        $clients=Client::all();
        return view('patterns.buying_patterns',compact('clients'));
    }


    public function viewPatterns($id){
        $client=Client::find($id);
        $name=$client->name.' '.$client->surname;
        $patterns=UserReceipts::where('user_id',$client->id)->get();
        return view('patterns.patterns',compact('patterns','name'));
    }

}
