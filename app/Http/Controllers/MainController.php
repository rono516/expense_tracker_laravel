<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class MainController extends Controller
{
    public function index(){
        $transactions = Transaction::orderBy('created_at', 'desc')->get();
        // $income =
        return view('welcome')->with([ 
            'transactions' => $transactions
            ]
        );
    }
}
