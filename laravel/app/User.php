<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Balance;
use App\Models\Historic;
use App\Http\Controllers\Admin\Relatorio;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'cpf', 'email','categoria','password','isadmin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function balance()
    {
        return $this->hasOne(balance::class);

    }

    public function historics()
    {
        return $this->hasMany(Historic::class);

    }

    public function isAdmin() // add por tiago para mostrar viewer para autorizados
    {
    return $this->is_admin;
    }

    public function avaliars()
    {
        return $this->hasMany(Avaliar::class);

    }

        public function atualiza($id)
    {
        dd($flight = User::find($id));
        //$flight = User::find($id)->roles->toArray();

        $flight->isadmin = '1';

        $flight->save();
    }

       /* $users = users::findOrFail('p_nome');
       $p_nome = $request->input('p_nome');

       $usersup = DB::table('users')
       ->where('name', 'like',  "%" . $p_nome)
       ->get();
        $usersup->isadmin  = '1';
        
        $usersup->save();
        return redirect()->route('cadastroup')->with('message', 'Administrador cadastrado com sucesso');
}*/
}
