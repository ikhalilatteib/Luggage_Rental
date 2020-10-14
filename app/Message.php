<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * Fields that are mass assignable
     *
     * @var array
     */

    protected $fillable = [
        'content','sender','receiver','buy_id'
    ];


    public function receiver()
    {
        return $this->hasMany('App\User','id','receiver');
    }

    public function sender()
    {
        return $this->hasMany('App\User','id','sender');
    }

    public function buyId()
    {
        return $this->hasMany('App\Buy','id','buy_id');
    }


}
