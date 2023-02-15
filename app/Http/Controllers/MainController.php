<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class MainController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        return view('welcome')->with([ 
            'transactions' => $transactions
            ]
        );
    }
}
