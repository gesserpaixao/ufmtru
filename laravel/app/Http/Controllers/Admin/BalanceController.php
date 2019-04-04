<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Balance;
use App\Http\Requests\MoneyValidationFormRequest;

class BalanceController extends Controller
{
    private $totalPage = 5;

    public function index()
    {
        $balance = (auth()->user()->balance);
        $amount = $balance ? $balance->amount : 0;
        return view('admin.balance.index', compact('amount'));
    }

    public function deposit()
    {
        return view('admin.balance.deposit');
    }

    public function depositStore(MoneyValidationFormRequest $request)
    {
       $balance = auth()->user()->balance()->firstOrCreate([]);
       $response = $balance->deposit($request->value);

       if ($response['success'])
        return redirect()
            ->route('admin.balance.index')
            ->with('success', $response['message']);

        return redirect()
            ->back()
            ->with('error', $response['massage']);

    }

    public function sacarindex()
    {
        return view('admin.balance.sacar');
    }


    public function sacar(MoneyValidationFormRequest $request)
    {
       $balance = auth()->user()->balance()->firstOrCreate([]);
       $response = $balance->sacar($request->value);

       if ($response['success'])
        return redirect()
            ->route('admin.balance.index')
            ->with('success', $response['message']);

        return redirect()
            ->back()
            ->with('error', $response['message']);

    }


    public function historic()
    {
        $historics = auth()->user()->historics()->paginate($this->totalPage);

        return view('admin.balance.historics', compact('historics'));
    }
}
