<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    //Informa para o Laravel que a variavél $casts irá salvar os items como um array no banco de dados
    protected $casts = [
        'items' => 'array'
    ];

    
    protected $dates = ['date'];

    //permite o laravel atualizar as informações
    protected $guarded = [];

    //Mostra quantos eventos o usuário tem
    public function user(){
        return $this->belongTo('App\Models\User');
    }

    //Mostra quantos participantes há no evento
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
