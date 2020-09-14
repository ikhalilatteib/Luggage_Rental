<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    use HasFactory;
    protected $fillable = [
        'date', 'depart', 'arrived', 'from', 'to', 'note','created_date','created_by','updated_by','deleted_by'
    ];

    public function user()
    {
        return $this->hasMany('App\User','id','created_by');
    }
}
