<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function viewClients(){
        $clients=Client::all();
        return view('clients.view_clients',compact('clients'));
    }
}
