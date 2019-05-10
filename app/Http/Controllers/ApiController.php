<?php

namespace App\Http\Controllers;

use App\Client;
use App\Point;
use App\Promotion;
use App\Sale;
use App\Token;
use App\UserReceipts;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function registerUser(Request $request){

        if(Client::where('phonenumber',$request->phonenumber)->exists()){
            return response()->json(array('response'=>'User already registered'));
        }
        else{
            $client=new Client();
            $client->name=$request->name;
            $client->surname=$request->surname;
            $client->phonenumber=$request->phonenumber;
            $client->national_id=$request->national_id;
            $client->address=$request->address;
            $client->password=$request->password;
            if($client->save()){
                return response()->json(array('response'=>'success'));
            }
            else{
                return response()->json(array('response'=>'Something went wrong, please contact admin'));
            }
        }

    }

    public function login(Request $request){
        $checkUser=Client::where('phonenumber',$request->phonenumber)->exists();
        if($checkUser){
            $client=Client::where('phonenumber',$request->phonenumber)->first();
            if($client->password==$request->password){
                return response()->json(array('response'=>'success'));
            }
            else{
                return response()->json(array('response'=>'Wrong password'));
            }

        }
        else{
            return response()->json(array('response'=>'That phonenumber is not registered, please register'));
        }
    }


    public function addToken(Request $request){
        $tokenExists=Token::where('token_id',$request->token_id)->exists();
        if($tokenExists) {
            $token = Token::where('token_id', $request->token_id)->first();
            $date = date('Y-m-d');
            $promotion = Promotion::where('promotion_name', $token->promotion_name)->first();
            if ($promotion->start_date <= $date && $promotion->end_date>=$date) {
                if ($token->status == 'unused') {
                    Token::where('token_id', $request->token_id)->update([
                        'status'=>'used'
                    ]);
                    $client = Client::where('phonenumber', $request->phonenumber)->first();
                    $clientExistsInPoints = Point::where([['user_id', $client->id],['promotion_id',$promotion->id]])->exists();
                    if ($clientExistsInPoints) {
                        $clientPoints = Point::where('user_id', $client->id)->first();
                        $pointsAdded = Point::where('user_id', $client->id)->update([
                            'points' => $clientPoints->points + $token->points
                        ]);
                        if ($pointsAdded) {

                            $sale=Sale::where('receipt_number',$token->receipt_number)->first();
                            $user=new UserReceipts();
                            $user->user_id=$client->id;
                            $user->name=$client->name.' '.$client->surname;
                            $user->token=$token->token_id;
                            $user->receipt_number=$token->receipt_number;
                            $user->products=$sale->order;
                            $user->date=$sale->created_at;

                            if($user->save()){
                                return response()->json(array('response'=> 'success'));
                            }
                            else{
                                return response()->json(array('response'=> 'Failed to record receipts, please contact developer'));
                            }







                        } else {
                            return response()->json(array('response'=> 'Failed to add points'));
                        }
                    } else {
                        $point = new Point();
                        $point->user_id = $client->id;
                        $point->points = $token->points;
                        $point->promotion_id=$promotion->id;
                        $point->promotion_name=$promotion->promotion_name;
                        if($point->save()){
                            $sale=Sale::where('receipt_number',$token->receipt_number)->first();
                            $user=new UserReceipts();
                            $user->user_id=$client->id;
                            $user->name=$client->name.' '.$client->surname;
                            $user->token=$token->token_id;
                            $user->receipt_number=$token->receipt_number;
                            $user->products=$sale->order;
                            $user->date=$sale->created_at;

                            if($user->save()){
                                return response()->json(array('response'=> 'success'));
                            }
                            else{
                                return response()->json(array('response'=> 'Failed to record receipts, please contact developer'));
                            }

                        }
                        else{
                            return response()->json(array('response'=> 'Failed to add points'));
                        }
                    }

                } else {
                    return response()->json(array('response'=> 'Token used'));
                }
            } else {
                return response()->json(array('response'=> 'Promotion has reached its end date, sorry'));

            }
        }

        else{
            return response()->json(array('response'=>'Wrong token number, please verify'));
        }
    }


    public function viewPoints(Request $request){
        $client=Client::where('phonenumber',$request->phonenumber)->first();
        $points=Point::where('user_id',$client->id)->first();
        return response()->json(array($points));
    }




}
