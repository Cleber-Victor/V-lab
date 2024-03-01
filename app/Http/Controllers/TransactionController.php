<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Category;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();
        $categories = Category::all();
        //return view('categories.index', ['categories' => $categories, 'transactions' => $transactions]);
        //return view('transactions.index', compact('transactions', 'categories'));
        //return view('transactions.index', compact('transactions', 'categories'));   ->with('name', 'Victoria')
        return view('transactions.index')
            ->with('categories', $categories)
            ->with('transactions', $transactions );
    }

    public function create (){
        $categories = Category::all();
        return view('transactions.create')->with('categories', $categories);
    }

    public function store(Request $request){
        $data = $request->validate ([
            'user'=> 'required',
            'type'=> 'required',
            'valor'=> 'required',
            'category_id'=> 'required',
        ]);
        
        $newTransaction = Transaction::create($data);

        return redirect(route('transaction.index'));

    }

    public function edit(Transaction $transaction){
        $categories = Category::all();
        return view('transactions.edit')
        ->with('categories', $categories)
        ->with('transaction', $transaction );
    }

    public function update(Transaction $transaction, Request $request){
        $data = $request->validate ([
            'user'=> 'required',
            'type'=> 'required|numeric',
            'valor'=> 'required|numeric',
            'category_id'=> 'required',
        ]);

        $transaction->update($data);

        return redirect(route('transaction.index')) ->with('sucess', 'Transaction Updated Succesffully');
    }

    public function destroy (Transaction $transaction){
        $transaction->delete();
        return redirect(route('transaction.index')) ->with('sucess', 'Transaction Deleted Succesffully');
    }
}

