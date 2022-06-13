<?php

namespace App\Http\Controllers;

use App\Helper\HttpHelper;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    use HttpHelper;

    public function index()
    {
        return view('transactions.index')->with([
            'transactions' => $this->call('transactions')
        ]);
    }

    public function cashOutPage()
    {
        return view('transactions.cashOut');
    }

    public function cashOutCall(Request $request)
    {
        $response =  $this->call("cash-out", 'post', $request->toArray());
        return redirect()->route('transactions.show', ['transaction' => $response['data']['id']]);
    }
}
