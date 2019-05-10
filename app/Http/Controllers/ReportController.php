<?php

namespace App\Http\Controllers;

use App\Client;
use App\Promotion;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(){
        return view('report.report');
    }


    public function reminder(){
        $clients=Client::all();
        $date=date('Y-m-d');
        $prom_exists=Promotion::where([
            ['start_date', '<=', $date],
            ['end_date', '>=', $date],
        ])->exists();

        $promotion=Promotion::where([
            ['start_date', '<=', $date],
            ['end_date', '>=', $date],
        ])->first();

        if($prom_exists) {
            foreach ($clients as $client) {
                $message='Please purchase at Delta and stand a chance to win in the Promotion '.$promotion->promotion_name.' ending '.$promotion->end_date.' stand a chance to win big';
                $this->sendMessage($client->phonenumber,$message);
            }
            return redirect()->route('view_promotions')->with('message','Reminder successfully send for promotion '.$promotion->promotion_name);

        }
        else{
            return redirect()->route('view_promotions')->with('error','No promotion is active at the moment, please add a new one');
        }
    }

    function sendMessage($number, $myMessage){
        $username = 'your username';

        // Webservices token for above Webservice username
        $token = 'enter your token for sms gateway';

        // BulkSMS Webservices URL
        $bulksms_ws = 'http://portal.bulksmsweb.com/index.php?app=ws';

        // destination numbers, comma seperated or use #groupcode for sending to group
        // $destinations = '#devteam,263071077072,26370229338';
        // $destinations = '26300123123123,26300456456456';  for multiple recipients
        $destinations = $number;

        // SMS Message to send
        $message = $myMessage;

        // send via BulkSMS HTTP API

        $ws_str = $bulksms_ws . '&u=' . $username . '&h=' . $token . '&op=pv';
        $ws_str .= '&to=' . urlencode($destinations) . '&msg='.urlencode($message);
        $ws_response = @file_get_contents($ws_str);


    }
}
