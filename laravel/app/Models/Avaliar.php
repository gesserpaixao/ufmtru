<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Avaliar extends Model

{

    public $timestamps = true;
    
    protected $fillable =['date','user_id','questao_01','questao_02','questao_03','questao_04','questao_05'];

    public function publish(Avaliar $avaliar)
{
    $this->posts()->save($avaliar);
}

    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format('d/m/y');
    }
}
