<?php

namespace App\Http\Controllers\payments;

use App\Models\Stkcallback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MpesaController extends Controller
{
    //
    public function getAccessToken()
    {
        $url = env('MPESA_ENV') == 0

        ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'

        : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);

        curl_setopt_array($curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET')
            )
        );

        $response = json_decode(curl_exec($curl));

        curl_close($curl);

        return $response->access_token;
    }
    public function stkPush()
    {
        $timestamp = date('YmdHis');

        $password = base64_encode(env('MPESA_STK_SHORTCODE') . env('MPESA_PASSKEY') . $timestamp);

        $curl_post_data = array(
            'BusinessShortCode' => env('MPESA_STK_SHORTCODE'),
            'Password' => $password,
            'Timestamp' => $timestamp,
            'TransactionType' => "CustomerPayBillOnline",
            'Amount' => 1,// 10,000,
            'PartyA' => 254745079253,
            'PartyB' => env('MPESA_STK_SHORTCODE'),
            'PhoneNumber' => 254745079253,
            'CallBackURL' => env('MPESA_TEST_URL') . '/api/mobilemoney-payment-gateway/stk',
            'AccountReference' => env('MPESA_B2C_INITIATOR'),
            'TransactionDesc' => 'Payment of Kenya real estate services'
        );

        $url = env('MPESA_ENV') == 0

        ? 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest'

        : 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

        $response = $this->makeHttp($url, $curl_post_data);

        $responseData = json_decode($response, true);

        $responseCode = $responseData['ResponseCode'];

        if($responseCode == 0) {
            $MerchantRequestID = $responseData['MerchantRequestID'];
            $CheckoutRequestID = $responseData['CheckoutRequestID'];
            $customerMessage = $responseData['CustomerMessage'];

            // Save the responseto the database

            $payment = new Stkcallback;

            $payment->phone = 254745079253;
            $payment->amount = 1;
            $payment->reference = env('MPESA_B2C_INITIATOR');
            $payment->description = 'Payment of purchased prouducts';
            $payment->MerchantRequestID = $MerchantRequestID;
            $payment->CheckoutRequestID = $CheckoutRequestID;
            $payment->status = 'Requested';
            $payment->password = $password;
            $payment->save();

        }

        return $response;

    }
    private function makeHttp($url, $body)
    {
        $curl = curl_init();

        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-Type: application/json', 'Authorization:Bearer ' .$this->getAccessToken()),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );

        $curl_response = curl_exec($curl);

        curl_close($curl);

        return $curl_response;
    }
}
