<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Mail;
use Braintree;

use App\Models\User;
use App\Models\Price;
use App\Models\Discount_Codes;
use App\Models\Licence_Transactions;


class UserBuyController extends Controller{

    public function index(){
        //$id = Auth::user()->id;
        $id = '27862';
        $ThisUser = User::where('id', $id)->first();

        if($ThisUser->country == 'GB')
            $DoIChargeVat = 2;
        else
            $DoIChargeVat = 1;

        $AA_Price = Price::where('name', 'All Access')->first();
        $IG_Price = Price::where('name', 'IgNite')->first();
        $SI_Price = Price::where('name', 'SiClone')->first();
        $DE_Price = Price::where('name', 'Disperse')->first();
        $PR_Price = Price::where('name', 'ProxSi')->first();
        $SC_Price = Price::where('name', 'Scatter')->first();

        /*
        $Total_Lic_AA = Licence_Users::where('user_id', $id)->where('active', 1)->sum('aa');
        $Total_Lic_IG = Licence_Users::where('user_id', $id)->where('active', 1)->sum('ig');
        $Total_Lic_PR = Licence_Users::where('user_id', $id)->where('active', 1)->sum('pr');
        $Total_Lic_SI = Licence_Users::where('user_id', $id)->where('active', 1)->sum('si');
        $Total_Lic_DE = Licence_Users::where('user_id', $id)->where('active', 1)->sum('de');
        $Total_Lic_SC = Licence_Users::where('user_id', $id)->where('active', 1)->sum('sc');

        $Free_Lic_AA = Licence_Users::where('user_id', $id)->where([['active', 1],['disc_id', 0]])->sum('aa');
        $Free_Lic_IG = Licence_Users::where('user_id', $id)->where([['active', 1],['disc_id', 0]])->sum('ig');
        $Free_Lic_PR = Licence_Users::where('user_id', $id)->where([['active', 1],['disc_id', 0]])->sum('pr');
        $Free_Lic_SI = Licence_Users::where('user_id', $id)->where([['active', 1],['disc_id', 0]])->sum('si');
        $Free_Lic_DE = Licence_Users::where('user_id', $id)->where([['active', 1],['disc_id', 0]])->sum('de');
        $Free_Lic_SC = Licence_Users::where('user_id', $id)->where([['active', 1],['disc_id', 0]])->sum('sc');
        */
        /// Temp ------
        $Total_Lic_AA = 0;
        $Total_Lic_IG = 0;
        $Total_Lic_PR = 0;
        $Total_Lic_SI = 0;
        $Total_Lic_DE = 0;
        $Total_Lic_SC = 0;

        $Free_Lic_AA = 0;
        $Free_Lic_IG = 0;
        $Free_Lic_PR = 0;
        $Free_Lic_SI = 0;
        $Free_Lic_DE = 0;
        $Free_Lic_SC = 0;
        /// Temp End ------


        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);


        $token = $gateway->ClientToken()->generate();



        return view('buy', compact('DoIChargeVat', 'SC_Price', 'ThisUser', 'AA_Price' ,'IG_Price', 'SI_Price', 'DE_Price', 'PR_Price', 'Total_Lic_AA', 'Total_Lic_IG', 'Total_Lic_PR', 'Total_Lic_SI', 'Total_Lic_DE', 'Total_Lic_SC', 'Free_Lic_AA', 'Free_Lic_IG', 'Free_Lic_PR', 'Free_Lic_SI', 'Free_Lic_DE', 'Free_Lic_SC', 'token'));
    }

    public function cc_purchase(Request $request){

        //// gather plugins from form
        $aa_y = request('AA_Year');
        $ig_y = request('IG_Year');
        $si_y = request('SI_Year');
        $de_y = request('DE_Year');
        $pr_y = request('PR_Year');
        $sc_y = 0;
        $aa_m = request('AA_Month');
        $ig_m = request('IG_Month');
        $si_m = request('SI_Month');
        $de_m = request('DE_Month');
        $pr_m = request('PR_Month');
        $sc_m = 0;

        /// Gather data for briantree
        $deviceDataFromTheClient = $request->dataCollector;
        $cardholderName = request('cc-name');
        $amount = $request->amount;
        $nonce = $request->payment_method_nonce;
        $user_id = request('user_id');
        $email = request('their_email');
        $VatNumber = request('Form_VatNumber');
//        $ThisUser = User::where('id', $user_id)->first();
        $User = User::where('id', request('user_id'))->first();



        ///// Add New Transaction for this sale
        $New_Transactions = new Licence_Transactions;
        $New_Transactions->description = 'Pre Order';
        $New_Transactions->user_id = $user_id;
        if(request('Form_VatNumber') == '' or request('Form_VatNumber') == NULL){
            $New_Transactions->vat_number = NULL;
        }
        else{
            // remove spaces and make uppercase
            $Vat = request('Form_VatNumber');
            $Vat = str_replace('/', '', $Vat);
            $Vat = str_replace(' ', '', $Vat);
            $Vat = strtoupper($Vat);
            $GP = $Vat[0];
            if(is_numeric($GP)){
                $Vat = 'GB'.$Vat;
            }
            $New_Transactions->vat_number = $Vat;
            /// Add vat to user
        }

        $New_Transactions->vat  = request('Form_Vat');
        $New_Transactions->discount  = request('Form_Discount');
        $New_Transactions->discount_per  = request('Form_Discount_Percent');
        $New_Transactions->discount_code  = request('Form_DiscountCode');
        $New_Transactions->amount  = request('Form_Amount');
        $New_Transactions->order_total  = request('Form_TotalAmount');
        $New_Transactions->status = 'Pre Order';
        $New_Transactions->save();

        $OrderId = $New_Transactions->id;


        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);


        $result = $gateway->transaction()->sale([

            'amount' => $request->amount,

            'paymentMethodNonce' => $request->payment_method_nonce,

            //            'orderId' => rand(5,10),

            'customer' => [
                'firstName'         => $User->first_name ?? 'Default',
                'lastName'          => $User->last_name ?? 'Default',
                'company'           => $request->Form_VatNumber ?? '0',
                'email'             => $request->their_email,
                'phone'             => '281.330.8004',
                'fax'               => '419.555.1235',
                'website'           => 'www.abc.com'
            ],

            'billing' => [
                'firstName'         => $User->first_name,
                'lastName'          => $User->last_name,
                'streetAddress'     => $User->address,
                'extendedAddress'   => $User->city,
                'locality'          => '',
                'region'            => '',
                'postalCode'        => $User->zip,
                'countryCodeAlpha2' => $User->country,
            ],

            'options' => [
                'submitForSettlement'   => true,
                'storeInVaultOnSuccess' => true,
            ]
        ]);


        if ($result->success)
        {
            dd(" transaction successfully T-ID:" . $result->transaction->id);
        }else
        {
            $errorString = "";

            foreach ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }

            return back()->withErrors('An error occurred with the message: '.$result->message);
        }


    }

}
