<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Balance extends Model
{
    public $timestamps = true;


    public function deposit(float $value) :Array
    {
        DB::beginTransaction();

        $totalBefore = $this->amount ? $this->amount : 0;
        $this->amount += number_format($value, 2, '.', '');
        $deposit = $this-> save();

        $historic = auth()->user()->historics()->create([
            'type'           => 'I',
            'amount'         => $value,
            'total_before'   => $totalBefore,
            'total_after'    => $this->amount,
            'date'           => date('ymd'),

        ]);

        if($deposit && $historic){

            DB::commit();

            return[
                'success' => true,
                'message' => 'Recarregado com Sucesso'
            ];
        }else {

            DB::rollback();
            return[
                'success' => false,
                'message' => 'Falha ao carregar'
            ];
        }
    }


    public function sacar (float $value) :Array
    {
        DB::beginTransaction();

        $totalBefore = $this->amount ? $this->amount : 0;

        if($totalBefore >= $value){

        $this->amount -= number_format($value, 2, '.', '');
        $deposit = $this-> save();

        $historic = auth()->user()->historics()->create([
            'type'           => 'O',
            'amount'         => $value,
            'total_before'   => $totalBefore,
            'total_after'    => $this->amount,
            'date'           => date('ymd'),

        ]);
        }else{
            return[
                'success' => false,
                'message' => 'Saldo insuficiente'
            ];

        }

        if($deposit && $historic){

            DB::commit();

            return[
                'success' => true,
                'message' => 'Debitado com Sucesso'
            ];
        }else {

            DB::rollback();
            return[
                'success' => false,
                'message' => 'Falha ao Debitar'
            ];
        }
    }

}