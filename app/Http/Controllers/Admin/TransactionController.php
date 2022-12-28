<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with([
            'package',
            'user'
        ])->get();
        return view('admin.transaction', ['transactions' => $transactions]);
    }
}
