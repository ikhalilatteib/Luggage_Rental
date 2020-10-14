<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $table = 'buy';


    protected $fillable = [
        'vol','date','arrival','depart', 'arrived', 'from', 'to','kg', 'note','is_approve','created_by','updated_by','deleted_by'
    ];


    public function user()
    {
        return $this->hasMany('App\User','id','created_by');
    }

    public function message()
    {
        return $this->hasMany(Message::class,'buy_id');
    }

}
