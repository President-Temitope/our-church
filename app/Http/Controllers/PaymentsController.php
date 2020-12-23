<?php
namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Unicodeveloper\Paystack\Paystack;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        if($paymentDetails['data']['status'] == 'success')
        {
            Session::Flash('Transaction Done Successfully');
           /* $income = new Income;
            $income->income_type = $paymentDetails['data']['income_type'];
            $income->amount = $paymentDetails['data']['amount'] * 100;
            $income->transaction_status = 'PENDING';
            $income->date_received = Carbon::now();
            $income->description = $request->input('description');
            $income->paid_by = auth()->user();
            $income->save();*/
        }else{
            Session::Flash('Transaction not Successful');
        }
        $transaction= new Transaction;
        $transaction->user_id = Auth::user()->id;
        $transaction->reference= $paymentDetails['data']['reference'];
        $transaction->email= Auth::user()->email;
        $transaction->amount= $paymentDetails['data']['amount'];
        $transaction->status= $paymentDetails['data']['status'];
        $transaction->payment_date=$paymentDetails['data']['transaction_date'];
        $transaction->save();

        return redirect()
            ->route('home');
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}