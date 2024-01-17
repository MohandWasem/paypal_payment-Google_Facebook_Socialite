<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{
    public function index()
    {
        return view("products_paypal.paypal");
    }
    public function payment()
    {
        $data =[];
        $data['items'] = [
            [
                 "name"=>"Apple",
                 "price"=>300,
                 "description"=>"Macbook pro 14 info",
                 "qty"=>2
            ]
            ];
            $data['invoice_id'] =1;
            $data['invoice_description'] ="Order Invioce";
            $data['return_url'] = route('payment.success');
            $data['cancel_url'] = route('payment.cancel');
            $data['total'] = 600;


            $provider = new ExpressCheckout;
            $response = $provider->setExpressCheckout($data);
            $response = $provider->setExpressCheckout($data,true);
            return redirect($response['paypal_link']);
    }

    public function cancel()
    {
        dd("you are cancelled payment");
    }

    public function success(Request $request)
    {
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);

        if(in_array(strtoupper($response['ACK']), ["SUCCESS","SUCCESSWITHWARNING"])){
            $date=Carbon::now();
            payment::create([
                   "amount"=>"1",
                   "currency"=>"US",
                   "created at"=>$date,
                   "status"=>"completed"
            ]);

            dd("your payment  was suucessfully");
        }
         

        dd("please try again later.");
    }
}
