<?php

namespace App\Http\Controllers;

use App\Mail\Emailtrans;
use App\Models\bo;
use App\Models\Comission;
use App\Models\data;
use App\Models\User;
use App\Models\wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class AirtimeController
{
    public function airtime(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

            $user = User::find($request->user()->id);

            if ($user->wallet < $request->amount) {
                $mg = "You Cant Make Purchase Above" . "NGN" . $request->amount . " from your wallet. Your wallet balance is NGN $user->wallet. Please Fund Wallet And Retry or Pay Online Using Our Alternative Payment Methods.";
                Alert::error('Insufficient Fund', $mg);
                return back();

            }
            if ($request->amount < 0) {

                $mg = "error transaction";
                Alert::warning('Warning', $mg);
                return back();

            }
            $bo = bo::where('refid', $request->refid)->first();
            if (isset($bo)) {
                $mg = "duplicate transaction";
                Alert::error($mg);
                return back();

            } else {
                $user = User::find($request->user()->id);
                $bt = data::where("id", $request->id)->first();
                $gt = $user->wallet - $request->amount;


                $user->wallet = $gt;
                $user->save();
                $per=2/100;
                $comission=$per*$request->amount;

                $bo = bo::create([
                    'username' => $user->username,
                    'plan' => 'Airtime',
                    'amount' => $request->amount,
                    'server_res' => 'pam',
                    'result' => 1,
                    'phone' => $request->number,
                    'refid' => $request->refid,
                    'discountamoun' => 0,
                ]);

                $comiS=Comission::create([
                    'username'=>Auth::user()->username,
                    'amount'=>$comission,
                ]);
                $resellerURL = 'https://renomobilemoney.com/api/';
                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => $resellerURL.'airtime',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => array( 'name' => $request->name, 'number' => $request->number, 'amount' => $request->amount, 'refid' => $request->refid),

                    CURLOPT_HTTPHEADER => array(
                        'apikey: RENO-63939122379b03.42488714'
                    )));

                $response = curl_exec($curl);

                curl_close($curl);

//                return $response;
                $data = json_decode($response, true);
                $success = $data["success"];
                if ($success == 1) {

                    $am = "NGN $request->amount  Airtime Purchase Was Successful To";
                    $ph = $request->number;
                    $com=$user->wallet+$comission;
                    $user->wallet=$com;
                    $user->save();

                    $receiver = $user->email;
                    $admin = 'info@amazingdata.com.ng';

//                    Mail::to($receiver)->send(new Emailtrans($bo));
//                    Mail::to($admin)->send(new Emailtrans($bo));
                    $parise=$comission."??? Commission Is added to your wallet balance";
                    $msg=$am.' ' .$ph.' & '.$parise;

                    Alert::success('Success', $msg);
                    return back();

                } elseif ($success == 0) {
                    $zo = $user->wallet + $request->amount;
                    $user->wallet = $zo;
                    $user->save();
                    $am = "NGN $request->amount Was Refunded To Your Wallet";
                    $ph = ", Transaction fail";
                    Alert::error('error', $am.''.$ph);
                    return redirect('dashboard');

                }
        }
    }
    public function honor(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $user = User::find($request->user()->id);
//        $wallet = wallet::where('username', $user->username)->first();


        if ($user->wallet < $request->amount) {
            $mg = "You Cant Make Purchase Above" . "NGN" . $request->amount . " from your wallet. Your wallet balance is NGN $wallet->balance. Please Fund Wallet And Retry or Pay Online Using Our Alternative Payment Methods.";
Alert::error('Insufficient Balance', $mg);
            return back();

        }
        if ($request->amount < 0) {

            $mg = "error transaction";
            Alert::warning('Warning', $mg);
            return back();

        }
        $bo = bo::where('refid', $request->refid)->first();
        if (isset($bo)) {
            $mg = "duplicate transaction";
            Alert::error('Error', $mg);
            return back();

        } else {
            $user = User::find($request->user()->id);
            $bt = data::where("id", $request->id)->first();
//            $wallet = wallet::where('username', $user->username)->first();


            $gt = $user->wallet - $request->amount;


            $user->wallet = $gt;
            $user->save();


            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://easyaccess.com.ng/api/airtime.php",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => array(
                    'network' =>$request->name,
                    'amount' => $request->amount,
                    'mobileno' => $request->number,
                    'airtime_type' => '001', //001 for VTU, 002 for Share and Sell. Share and Sell is only applicable to MTN network. For other networks, use 001 (VTU).
                    'client_reference' => $request->refid, //update this on your script to receive webhook notifications
                ),
                CURLOPT_HTTPHEADER => array(
                    "AuthorizationToken: 61a6704775b3bd32b4499f79f0b623fc", //replace this with your authorization_token
                    "cache-control: no-cache"
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
//           return $response;

            $data = json_decode($response, true);
//            $success = $data["message"];
//            $tran1 = $data["discountAmount"];

//                        return $response;
            if ($data['success']== 'true') {

                $bo = bo::create([
                    'username' => $user->username,
                    'plan' => 'airtime',
                    'amount' => $request->amount,
                    'server_res' => $response,
                    'result' => 1,
                    'phone' => $request->number,
                    'refid' => $request->refid,
                    'discountamoun' => '0',
                ]);

                $success=1;
                $name = "Airtime";
                $am = "NGN $request->amount  Airtime Purchase Was Successful To";
                $ph = $request->number;

                $receiver = $user->email;
                $admin = 'info@amazingdata.com.ng';


//                Mail::to($receiver)->send(new Emailtrans($bo));
//                Mail::to($admin)->send(new Emailtrans($bo));
//                Mail::to($admin2)->send(new Emailtrans($bo));
//
                Alert::success('Success', $am.' '.$ph);
                return back();

            } elseif ($data['message']== 'Possible duplicate transaction, Please retry after 2 minutes') {
                $zo = $user->balance + $request->amount;
                $user->balance = $zo;
                $user->save();
$success=0;
                $name = 'Airtime';
                $am = "NGN $request->amount Was Refunded To Your Wallet";
                $ph = ", Possible duplicate transaction, Please retry after 2 minutesl";

                Alert::error('Error', $am.' '.$ph);
                return back();

            } elseif ($data['success']== 'false') {
                $zo = $user->wallet + $request->amount;
                $user->wallet = $zo;
                $user->save();
                $success=0;
                $name = 'Airtime';
                $am = "NGN $request->amount Was Refunded To Your Wallet";
                $ph = ", Transaction fail";
                Alert::error('Error', $am.' '.$ph);
                return back();

            }
        }

        }
}
