<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $table = 'buy';


    protected $fillable = [
        'vol','date', 'depart', 'arrived', 'from', 'to', 'note','created_date','is_approve','created_by','updated_by','deleted_by'
    ];


    public function user()
    {
        return $this->hasMany('App\User','id','created_by');
    }
}
